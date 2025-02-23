<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{   
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
}