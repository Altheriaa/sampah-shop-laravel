<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembelianResource\Pages;
use App\Models\Pembelian;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class PembelianResource extends Resource
{
    protected static string|null $model = Pembelian::class;

    protected static \UnitEnum|string|null $navigationGroup = 'Master Data Transaksi';
    protected static string|null $navigationLabel = 'Pembelian Sampah';
    protected static string|null $pluralModelLabel = 'Pembelian Sampah';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('id_sampah')
                    ->label('Sampah')
                    ->options(\App\Models\Sampah::pluck('nama_sampah', 'id_sampah'))
                    ->searchable(),
                \Filament\Forms\Components\DatePicker::make('tanggal'),
                \Filament\Forms\Components\Select::make('id_anggota')
                    ->label('Anggota')
                    ->options(\App\Models\Anggota::all()->mapWithKeys(fn($a) => [$a->id_anggota => 'AGT' . str_pad($a->id_anggota, 4, '0', STR_PAD_LEFT) . ' - ' . $a->nama_anggota]))
                    ->searchable(),
                \Filament\Forms\Components\TextInput::make('berat')
                    ->numeric(),
                \Filament\Forms\Components\TextInput::make('total')
                    ->numeric(),
                \Filament\Forms\Components\Textarea::make('ket')
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('tabungan')
                    ->maxLength(5),
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
                Tables\Columns\TextColumn::make('id_anggota')
                    ->label('Anggota')
                    ->formatStateUsing(fn ($state) => 'AGT' . str_pad($state, 4, '0', STR_PAD_LEFT) . ' - ' . \App\Models\Anggota::find($state)?->nama_anggota)
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tabungan')
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
            'index' => Pages\ListPembelians::route('/'),
            'create' => Pages\CreatePembelian::route('/create'),
            'edit' => Pages\EditPembelian::route('/{record}/edit'),
        ];
    }
}
