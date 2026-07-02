<?php

namespace App\Filament\Anggota\Resources\Sampahs;

use App\Filament\Anggota\Resources\Sampahs\Pages\CreateSampah;
use App\Filament\Anggota\Resources\Sampahs\Pages\EditSampah;
use App\Filament\Anggota\Resources\Sampahs\Pages\ListSampahs;
use App\Filament\Anggota\Resources\Sampahs\Pages\ViewSampah;
use App\Filament\Anggota\Resources\Sampahs\Schemas\SampahForm;
use App\Filament\Anggota\Resources\Sampahs\Schemas\SampahInfolist;
use App\Filament\Anggota\Resources\Sampahs\Tables\SampahsTable;
use App\Models\Sampah;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SampahResource extends Resource
{
    protected static ?string $model = Sampah::class;
    
    protected static string|null $navigationLabel = 'Data Sampah';
    protected static string|null $pluralModelLabel = 'Data Sampah';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-archive-box';

    public static function form(Schema $schema): Schema
    {
        return SampahForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SampahInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SampahsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSampahs::route('/'),
        ];
    }
}
