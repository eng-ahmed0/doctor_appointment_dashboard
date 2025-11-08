<?php

namespace App\Filament\Widgets;

use App\Models\BookAppointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Patients Count', Patient::count())
                ->description('Total Patients')
                ->descriptionIcon('heroicon-m-user')
                ->color('success'),

            Stat::make('Doctors Count', Doctor::count())
                ->description('Total Doctors')
                ->descriptionIcon('heroicon-m-user-circle')
                ->color('primary'),

            Stat::make('Appointments Count', BookAppointment::count())
                ->description('Total Appointments')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('warning'),

            Stat::make('Total Revenue', number_format(Transaction::sum('amount'), 2))
                ->description('Total Payments')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('info'),
        ];
    }
}
