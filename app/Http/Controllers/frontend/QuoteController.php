<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Http\Controllers\Controller;
use App\Services\EmailService;

class QuoteController extends Controller
{   
    public function getQuote()
    {
        return view('frontend.quote');
    }
}