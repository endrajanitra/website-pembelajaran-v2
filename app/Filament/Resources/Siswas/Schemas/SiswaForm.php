<?php

namespace App\Filament\Resources\Siswas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nis')
                    ->required(),
                TextInput::make('nama')
                    ->required(),
                Select::make('kelas_id')
                    ->label('Kelas')
                    ->relationship('Kelas', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }
}
