<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use App\Models\Event;
use App\Models\Receipt;
use App\Models\Subject;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total Receipts Amount',
                '$ ' . number_format(Receipt::sum('total'), 2)
            )
            ->color('warning')
            
            ->description('All-time receipts total'),

            Stat::make('Receipts', Receipt::count())
                ->icon('heroicon-o-receipt-refund')
                ->color('success'),

            // Stat::make(
            //     'Total Emails',
            //     Email::count()
            // )
            // ->description('Emails received'),

            Stat::make(
                'Applications',
                Application::count()
            )
            ->color('primary')
            ->description('Submitted applications'),

            Stat::make('Events', Event::count())
                ->icon('heroicon-o-calendar-days')
                ->color('success'),

            Stat::make('Subjects', Subject::count())
                ->icon('heroicon-o-book-open')
                ->color('primary'),


        ];
    }
}