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
                    ->searchable(),
                \Filament\Forms\Components\DatePicker::make('tanggal'),
                \Filament\Forms\Components\TextInput::make('berat')
                    ->numeric(),
                \Filament\Forms\Components\TextInput::make('total')
                    ->numeric(),
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
