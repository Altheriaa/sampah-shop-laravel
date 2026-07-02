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
                    ->searchable(),
                \Filament\Forms\Components\DatePicker::make('tanggal'),
                \Filament\Forms\Components\TextInput::make('jumlah')
                    ->numeric(),
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
            ]);
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
