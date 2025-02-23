<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ProfileUpdateRequest;
use Exception;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            $user = Auth::user();
            return view('admin.profile.index', compact('user'));
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
    public function update(ProfileUpdateRequest $request)
    {
        try {
            $data = $request->validated();
            $user = Auth::user();
            
            $user->name = $data['name'];
            $user->email = $data['email'];
            if (!empty($data['password'])) {
                $user->plan_password = $data['password'];
                $user->password = bcrypt($data['password']);
            }
            
            $user->save();
            return redirect()->back()->with('success', 'Profile updated successfully');
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}