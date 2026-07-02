<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenarikanResource\Pages;
use App\Models\Penarikan;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class PenarikanResource extends Resource
{
    protected static string|null $model = Penarikan::class;

    protected static \UnitEnum|string|null $navigationGroup = 'Master Data Transaksi';
    protected static string|null $navigationLabel = 'Tarik Tabungan';
    protected static string|null $pluralModelLabel = 'Tarik Tabungan';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('id_anggota')
                    ->label('Anggota')
                    ->options(\App\Models\Anggota::all()->mapWithKeys(fn($a) => [$a->id_anggota => 'AGT' . str_pad($a->id_anggota, 4, '0', STR_PAD_LEFT) . ' - ' . $a->nama_anggota]))
                    ->searchable()
                    ->live()
                    ->afterStateUpdated(function ($state, $set) {
                        $anggota = \App\Models\Anggota::find($state);
                        $set('saldo_tersedia', $anggota ? $anggota->saldo_tabungan : 0);
                    }),
                \Filament\Forms\Components\TextInput::make('saldo_tersedia')
                    ->label('Saldo Tersedia')
                    ->numeric()
                    ->readOnly()
                    ->prefix('Rp')
                    ->dehydrated(false)
                    ->formatStateUsing(function ($get) {
                        $anggota = \App\Models\Anggota::find($get('id_anggota'));
                        return $anggota ? $anggota->saldo_tabungan : 0;
                    }),
                \Filament\Forms\Components\DatePicker::make('tanggal')
                    ->default(now()),
                \Filament\Forms\Components\TextInput::make('jumlah')
                    ->label('Jumlah Penarikan')
                    ->numeric()
                    ->prefix('Rp')
                    ->rules([
                        fn ($get) => function (string $attribute, $value, \Closure $fail) use ($get) {
                            // Hitung saldo riil = saldo saat ini (tambah jumlah sebelumnya jika sedang diedit)
                            $saldo = (float) $get('saldo_tersedia');
                            if ($value > $saldo) {
                                $fail('Jumlah penarikan tidak boleh melebihi saldo tersedia (Rp ' . number_format($saldo, 0, ',', '.') . ').');
                            }
                        },
                    ]),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_anggota')
                    ->label('Anggota')
                    ->formatStateUsing(fn ($state) => 'AGT' . str_pad($state, 4, '0', STR_PAD_LEFT) . ' - ' . \App\Models\Anggota::find($state)?->nama_anggota)
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                \Filament\Actions\EditAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('tanggal', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenarikans::route('/'),
            'create' => Pages\CreatePenarikan::route('/create'),
            'edit' => Pages\EditPenarikan::route('/{record}/edit'),
        ];
    }
}
