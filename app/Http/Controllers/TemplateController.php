<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TemplateController extends Controller
{
    // ===============================
    // CONTACT FORM SUBMISSION
    // ===============================
     public function application(Request $request)
    {
    $validated = $request->validate([
        'name'                    => 'required|string|min:3',
        'date_of_birth'           => 'required|date',
        'gender'                  => 'required|in:Male,Female,Other',
        'previous_school'         => 'required|string|min:3',
        'guardian_name'           => 'required|string|min:3',
        'phone'                   => 'required|string|min:7',
        'email'                   => 'nullable|email',
        'results'                 => 'required|integer|min:6|max:20',
        'address'                 => 'required|string|min:5',
        'additional_information'  => 'nullable|string|min:3',
         ]);
         // Save to database
        Application::create($validated);

        // return
        return redirect()
            ->route('apply')
            ->withFragment('application')
            ->with('success', 'Your Application has been submitted successfully!');
        }
    // ===============================
    // PDF DOWNLOAD
    // ===============================
    public function pdf()
    {


        $pdf = Pdf::loadView('application.generate-pdf', [
            'title'    => 'Application Details',
            'application' => Application::all(),
        ])->setPaper('A4', 'portrait');

        return $pdf->download('application_details.pdf');


    }
    public function download(Application $application)
    {
        $pdf = Pdf::loadView('application.generate-pdf', [
            'title' => 'Application Details',
            'application' => [$application], // keeps @foreach working
        ])->setPaper('A4', 'portrait');

        return $pdf->download(
            'application_' . $application->id . '.pdf'
        );
    }

}
