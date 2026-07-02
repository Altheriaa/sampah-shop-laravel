<?php

namespace App\Filament\Anggota\Resources\Sampahs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class SampahsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('id_sampah')
                    ->label('Kode')
                    ->formatStateUsing(fn ($state) => 'KD' . str_pad($state, 2, '0', STR_PAD_LEFT))
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('nama_sampah')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('id_jenis')
                    ->label('Jenis')
                    ->formatStateUsing(fn ($state) => \App\Models\JenisSampah::find($state)?->jenis_sampah ?? $state)
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('harga_beli')
                    ->numeric()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('harga_jual')
                    ->numeric()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('stok')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([])
            ->toolbarActions([]);
    }
}
