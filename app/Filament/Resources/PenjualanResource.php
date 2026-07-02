<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenjualanResource\Pages;
use App\Models\Penjualan;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class PenjualanResource extends Resource
{
    protected static string|null $model = Penjualan::class;

    protected static string|null $navigationLabel = 'Data Penjualan';
    protected static string|null $pluralModelLabel = 'Data Penjualan';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('id_sampah')
                    ->label('Sampah')
                    ->options(\App\Models\Sampah::pluck('nama_sampah', 'id_sampah'))
                    ->searchable()
                    ->live()
                    ->afterStateUpdated(function ($state, $set, $get) {
                        $sampah = \App\Models\Sampah::find($state);
                        $berat = (float) $get('berat');
                        if ($sampah && $berat) {
                            $set('total', $sampah->harga_jual * $berat);
                        }
                    }),
                \Filament\Forms\Components\DatePicker::make('tanggal')
                    ->default(now()),
                \Filament\Forms\Components\TextInput::make('berat')
                    ->numeric()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, $set, $get) {
                        $sampah = \App\Models\Sampah::find($get('id_sampah'));
                        $berat = (float) $state;
                        if ($sampah && $berat) {
                            $set('total', $sampah->harga_jual * $berat);
                        }
                    })
                    ->rules([
                        fn (\Filament\Schemas\Components\Utilities\Get $get, ?\Illuminate\Database\Eloquent\Model $record) => function (string $attribute, $value, \Closure $fail) use ($get, $record) {
                            $sampah = \App\Models\Sampah::find($get('id_sampah'));
                            if ($sampah) {
                                // If editing, the available stock is current stock + original weight of this record
                                $availableStok = $sampah->stok;
                                if ($record && $record->id_sampah == $sampah->id_sampah) {
                                    $availableStok += $record->getOriginal('berat');
                                }
                                if ($value > $availableStok) {
                                    $fail('Berat tidak boleh melebihi stok yang tersedia (' . $availableStok . ' Kg).');
                                }
                            }
                        },
                    ]),
                \Filament\Forms\Components\TextInput::make('total')
                    ->numeric()
                    ->readOnly()
                    ->prefix('Rp'),
                \Filament\Forms\Components\TextInput::make('petugas')
                    ->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_sampah')
                    ->label('Sampah')
                    ->formatStateUsing(fn ($state) => \App\Models\Sampah::find($state)?->nama_sampah ?? $state)
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('petugas')
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                \Filament\Actions\EditAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenjualans::route('/'),
            'create' => Pages\CreatePenjualan::route('/create'),
            'edit' => Pages\EditPenjualan::route('/{record}/edit'),
        ];
    }
}
