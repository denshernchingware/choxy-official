<?php

namespace App\Filament\Resources\Applications\Pages;

use App\Filament\Resources\Applications\ApplicationResource;
use App\Models\Application;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions\Action;

class ListApplications extends ListRecords
{
    protected static string $resource = ApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
             Action::make('download_pdf')
                ->label('Download PDF')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(function () {
                    $application = Application::all();

                    $pdf = Pdf::loadView('application.generate-pdf', [
                        'title' => 'Application List',
                        'application' => $application,
                    ]);

                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'application.pdf'
                           );
                }),
        ];
    }
}
