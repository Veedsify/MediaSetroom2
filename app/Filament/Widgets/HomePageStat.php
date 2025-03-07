<?php

namespace App\Filament\Widgets;

use App\Models\Message;
use App\Models\PageStat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HomePageStat extends BaseWidget
{

    protected static bool $isLazy = false;
    protected static ?string $pooling = '10s';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Messages', Message::count())
                ->icon('heroicon-o-chat-bubble-left-ellipsis')
                ->color('purple')
                ->description('Total messages received.')
                ->chartColor('purple'),
            Stat::make("Total Visits Today", PageStat::whereDate('date', now())->count())
                ->icon('heroicon-o-eye')
                ->color('blue')
                ->description('Total visits to the website today.')
                ->chartColor('blue'),
            Stat::make('Total Visits', PageStat::count())
                ->icon('heroicon-o-globe-alt')
                ->color('blue')
                ->description('Total visits to the website.')
                ->chartColor('blue'),
        ];
    }
}
