<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SampahResource\Pages;
use App\Models\Sampah;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class SampahResource extends Resource
{
    protected static string|null $model = Sampah::class;

    protected static \UnitEnum|string|null $navigationGroup = 'Master Data Sampah';
    protected static string|null $navigationLabel = 'Data Sampah';
    protected static string|null $pluralModelLabel = 'Data Sampah';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-archive-box';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nama_sampah')
                    ->maxLength(50),
                \Filament\Forms\Components\Select::make('id_jenis')
                    ->label('Jenis Sampah')
                    ->options(\App\Models\JenisSampah::pluck('jenis_sampah', 'id_jenis'))
                    ->searchable(),
                \Filament\Forms\Components\TextInput::make('harga_beli')
                    ->numeric(),
                \Filament\Forms\Components\TextInput::make('harga_jual')
                    ->numeric(),
                \Filament\Forms\Components\TextInput::make('stok')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_sampah')
                    ->label('Kode')
                    ->formatStateUsing(fn ($state) => 'KD' . str_pad($state, 2, '0', STR_PAD_LEFT))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_sampah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_jenis')
                    ->label('Jenis')
                    ->formatStateUsing(fn ($state) => \App\Models\JenisSampah::find($state)?->jenis_sampah ?? $state)
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_beli')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_jual')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('stok')
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
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSampahs::route('/'),
            'create' => Pages\CreateSampah::route('/create'),
            'edit' => Pages\EditSampah::route('/{record}/edit'),
        ];
    }
}
