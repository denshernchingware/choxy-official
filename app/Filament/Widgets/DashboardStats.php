<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use App\Models\Email;
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
                ->icon('heroicon-o-banknotes')      
                ->color('warning')
                ->description('All-time receipts total'),

           Stat::make('Emails', Email::count())
                ->icon('heroicon-o-envelope')
                ->color('danger')
                ->description('Number of emails sent'),


            Stat::make('Receipts', Receipt::count())
                ->icon('heroicon-o-receipt-refund')
                ->color('info')
                ->description('Number of Receipts Generated'),



            Stat::make(
                'Applications',
                Application::count()
            )
                ->color('primary')
                ->description('Submitted applications'),

            Stat::make('Events', Event::count())
                ->icon('heroicon-o-calendar-days')
                ->description('Number of all events')
                ->color('success'),

            Stat::make('Subjects', Subject::count())
                ->icon('heroicon-o-book-open')
                ->description('Total Number of subjects')
                ->color('danger'),


        ];
    }
}
