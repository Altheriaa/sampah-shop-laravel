<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaResource\Pages;
use App\Models\Anggota;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class AnggotaResource extends Resource
{
    protected static string|null $model = Anggota::class;

    protected static string|null $navigationLabel = 'Data Nasabah';
    protected static string|null $pluralModelLabel = 'Data Nasabah';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nama_anggota')
                    ->maxLength(50),
                \Filament\Forms\Components\TextInput::make('umur')
                    ->maxLength(15),
                \Filament\Forms\Components\TextInput::make('jenis_kelamin')
                    ->maxLength(10),
                \Filament\Forms\Components\Textarea::make('alamat')
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('username')
                    ->maxLength(50),
                \Filament\Forms\Components\TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => \Illuminate\Support\Facades\Hash::make($state))
                    ->dehydrated(fn (?string $state): bool => filled($state))
                    ->required(fn (string $context): bool => $context === 'create')
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('level')
                    ->maxLength(10)
                    ->default('anggota'),
                \Filament\Forms\Components\TextInput::make('no_hp')
                    ->maxLength(120),
            ]);
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('umur')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
