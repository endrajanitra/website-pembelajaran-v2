<?php

namespace App\Filament\Widgets;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Dashboard extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Total Siswa", Siswa::count())
                ->description("Total siswa dalam satu bulan")  
                ->descriptionIcon(Heroicon::ArrowUpLeft, IconPosition::Before)
                ->chart(
                    Siswa::selectRaw("MONTH(created_at) as month, COUNT(*) as count")
                    ->whereYear("created_at", now()->year)
                    ->groupBy("month")
                    ->orderBy("month")
                    ->pluck("count")
                    ->toArray()
                )
                ->descriptionColor("success")
                ->color("success"),

            Stat::make("Total Guru", Guru::count())
                ->description("Total guru dalam satu bulan")  
                ->descriptionIcon(Heroicon::ArrowUpLeft, IconPosition::Before)
                ->chart(
                    Guru::selectRaw("MONTH(created_at) as month, COUNT(*) as count")
                    ->whereYear("created_at", now()->year)
                    ->groupBy("month")
                    ->orderBy("month")
                    ->pluck("count")
                    ->toArray()
                )
                ->descriptionColor("success")
                ->color("success"),
                
            Stat::make("Total Kelas", Kelas::count())
                ->description("Total kelas dalam satu bulan")  
                ->descriptionIcon(Heroicon::ArrowUpLeft, IconPosition::Before)
                ->chart(
                    Kelas::selectRaw("MONTH(created_at) as month, COUNT(*) as count")
                    ->whereYear("created_at", now()->year)
                    ->groupBy("month")
                    ->orderBy("month")
                    ->pluck("count")
                    ->toArray()
                )
                ->descriptionColor("success")
                ->color("success")
        ];
    }
}
