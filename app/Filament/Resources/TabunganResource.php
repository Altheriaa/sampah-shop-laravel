<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TabunganResource\Pages;
use App\Models\Anggota;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class TabunganResource extends Resource
{
    protected static string|null $model = Anggota::class;
    protected static \UnitEnum|string|null $navigationGroup = 'Master Data Transaksi';
    protected static string|null $navigationLabel = 'Tabungan Sampah';
    protected static string|null $pluralModelLabel = 'Tabungan Sampah';
    protected static string|null $slug = 'tabungan';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-book-open';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_anggota')
                    ->label('ID Anggota')
                    ->formatStateUsing(fn ($state) => 'AGT' . str_pad($state, 4, '0', STR_PAD_LEFT))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_anggota')
                    ->label('Nama Anggota')
                    ->searchable(),
                Tables\Columns\TextColumn::make('saldo_tabungan')
                    ->label('Tabungan (Rp)')
                    ->money('IDR', locale: 'id'),
            ])
            ->filters([])
            ->actions([
                \Filament\Actions\ViewAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            TabunganResource\RelationManagers\PembelianRelationManager::class,
            TabunganResource\RelationManagers\PenarikanRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTabungans::route('/'),
            'view' => Pages\ViewTabungan::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
