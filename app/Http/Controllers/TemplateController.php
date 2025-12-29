<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TemplateController extends Controller
{
    public function pdf()
    {
        $pdf = Pdf::loadView('contacts.generate-pdf', [
            'title'    => 'Application Details',
            'application' => Application::all(),
        ])->setPaper('A4', 'portrait');

        return $pdf->download('application_details.pdf');
    }
}
