<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Application;
use App\Models\Email;
use App\Models\Subject;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class TemplateController extends Controller
{
    // ===============================
    // FORM FORM SUBMISSION
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
        return redirect()->to(url()->previous() . '#application')
                     ->with('success', 'Your message has been sent successfully!');
        }

    // ===============================
    // FORM FORM SUBMISSION
    // ===============================
    public function contactSubmit(Request $request)
    {
     $validated = $request->validate([
        'name'                    => 'required|string|min:3',
        'subject'                 => 'required|string|min:3',
        'phone'                   => 'required|string|regex:/^[0-9+\s\-]{7,20}$/',
        'email'                   => 'required|email',
        'comment'                 => 'required|string|min:5',
     ]);

       // Example: send email
       Mail::to('info@choxydeeacademy.co.zw')->send(new ContactMail($validated));

     // Save to database
        Email::create($validated);

        // return
        return redirect()->to(url()->previous() . '#contactSection')
                     ->with('success', 'Your message has been sent successfully!');

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

     //   ===============================
    //   frontend display
    //    ===============================

    public function home()
    {
        $subjects = Subject::all();
        $abouts = About::all();
        return view('frontend.home', compact('abouts', 'subjects'));
    }

    public function about()
    {
        $subjects = Subject::all();
        $abouts = About::all();
        return view('frontend.about' ,compact('abouts', 'subjects'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function admission()
    {
        return view('frontend.admission');
    }

    public function newsEvents()
    {
        return view('frontend.newsEvents');
    }

    public function schoolLife()
    {
        return view('frontend.schoolLife');
    }
}
