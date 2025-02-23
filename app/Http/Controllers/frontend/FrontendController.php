<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Http\Controllers\Controller;
use App\Services\EmailService;

class FrontendController extends Controller
{   
    private $emailService;
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }
    
    public function index()
    {
        return view('frontend.index');
    }
    
    public function about()
    {
        return view('frontend.about');
    }
    
    public function contact()
    {
        return view('frontend.contact');
    }
    
    public function faqs()
    {
        return view('frontend.faqs');
    }
    
    public function terms()
    {
        return view('frontend.terms');
    }
    
    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }
    
    public function contactPost(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
            try {
                $this->emailService->sendContactEmail($data);
            } catch (\Exception $e) {
                Log::error('Contact Post Error: ' . $e->getMessage());
            }
            return redirect()->back()->with('success', 'Message sent successfully, we will get back to you soon.');
        } catch (\Exception $e) {
            Log::error('Contact Post Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong while processing your request');
        }
    }
}