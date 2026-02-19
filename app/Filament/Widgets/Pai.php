<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class Pai extends ChartWidget
{
    protected ?string $heading = 'Pai';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
