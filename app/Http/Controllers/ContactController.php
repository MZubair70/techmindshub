<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            $request->validate([
                'name'    => 'required|string|max:255',
                'email'   => 'required|email',
                'message' => 'required|string',
                'resume'  => 'required|file|mimes:pdf,doc,docx|max:2048',
            ], [
                'resume.max' => 'The resume file must not be greater than 2MB in size.',
                'resume.mimes' => 'The resume must be a PDF, DOC, or DOCX file.',
            ]);

            $data = [
                'name'    => $request->name,
                'email'   => $request->email,
                'message' => $request->message,
            ];

            $resume = $request->file('resume');

            if (!$resume->isValid()) {
                return back()->withErrors(['resume' => 'The uploaded resume file is invalid.']);
            }

            Mail::to('writeme@bscje.com')->send(new ContactMail($data, $resume));

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Validation errors are automatically handled by Laravel and passed to the view
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to send email. Please try again later.');
        }
    }
}