<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nip')
                    ->label('Nip')
                    ->nullable(),
                TextInput::make('nama')
                    ->label('Nama')
                    ->required(),
            ]);
    }
}
