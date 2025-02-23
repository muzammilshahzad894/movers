<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\ContactEmailAdmin;

class EmailService
{   
    public function sendContactEmail($emailData)
    {
        $data = [
            'name' => $emailData['name'],
            'email' => $emailData['email'],
            'phone' => $emailData['phone'],
            'subject' => $emailData['subject'],
            'customerMessage' => $emailData['message'],
        ];
        
        Mail::to($data['email'])->send(new ContactEmail($data));
        
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactEmailAdmin($data));
    }
}