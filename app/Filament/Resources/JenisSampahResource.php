<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisSampahResource\Pages;
use App\Models\JenisSampah;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class JenisSampahResource extends Resource
{
    protected static string|null $model = JenisSampah::class;

    protected static \UnitEnum|string|null $navigationGroup = 'Master Data Sampah';
    protected static string|null $navigationLabel = 'Jenis Sampah';
    protected static string|null $pluralModelLabel = 'Jenis Sampah';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('jenis_sampah')
                    ->maxLength(30),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_jenis')
                    ->label('Kode Jenis')
                    ->formatStateUsing(fn ($state) => 'JN' . str_pad($state, 3, '0', STR_PAD_LEFT))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_sampah')
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
            'index' => Pages\ListJenisSampahs::route('/'),
            'create' => Pages\CreateJenisSampah::route('/create'),
            'edit' => Pages\EditJenisSampah::route('/{record}/edit'),
        ];
    }
}
