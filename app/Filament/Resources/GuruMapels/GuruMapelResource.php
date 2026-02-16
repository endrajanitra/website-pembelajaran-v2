<?php

namespace App\Filament\Resources\GuruMapels;

use App\Filament\Resources\GuruMapels\Pages\CreateGuruMapel;
use App\Filament\Resources\GuruMapels\Pages\EditGuruMapel;
use App\Filament\Resources\GuruMapels\Pages\ListGuruMapels;
use App\Filament\Resources\GuruMapels\Schemas\GuruMapelForm;
use App\Filament\Resources\GuruMapels\Tables\GuruMapelsTable;
use App\Models\GuruMapel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GuruMapelResource extends Resource
{
    protected static ?string $model = GuruMapel::class;

    protected static ?string $navigationLabel = 'Guru Mapel';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'guru_mapel';

    public static function form(Schema $schema): Schema
    {
        return GuruMapelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GuruMapelsTable::configure($table);
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
            'index' => ListGuruMapels::route('/'),
            'create' => CreateGuruMapel::route('/create'),
            'edit' => EditGuruMapel::route('/{record}/edit'),
        ];
    }
}
