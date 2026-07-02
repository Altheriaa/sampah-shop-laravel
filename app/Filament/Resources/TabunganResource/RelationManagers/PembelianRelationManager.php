<?php

namespace App\Filament\Resources\TabunganResource\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PembelianRelationManager extends RelationManager
{
    protected static string $relationship = 'pembelian';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_pembelian')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id_pembelian')
            ->columns([
                TextColumn::make('id_pembelian')
                    ->label('No Transaksi')
                    ->formatStateUsing(fn ($state) => 'BELI' . str_pad($state, 4, '0', STR_PAD_LEFT))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                TextColumn::make('id_sampah')
                    ->label('Sampah')
                    ->formatStateUsing(fn ($state) => \App\Models\Sampah::find($state)?->nama_sampah ?? $state),
                TextColumn::make('berat')
                    ->numeric(),
                TextColumn::make('total')
                    ->numeric()
                    ->prefix('Rp '),
                TextColumn::make('tabungan')
                    ->label('Disimpan ke Tabungan')
            ])
            ->defaultSort('tanggal', 'desc')
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
                AssociateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DissociateAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
