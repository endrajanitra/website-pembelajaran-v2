<?php

namespace App\Filament\Resources\GuruMapels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
class GuruMapelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('guru_id')
                    ->label('Guru')
                    ->relationship('guru', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('mapel_id')
                    ->label('Mapel')
                    ->relationship('mapel', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }
}
