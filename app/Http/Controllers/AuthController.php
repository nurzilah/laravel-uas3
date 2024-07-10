<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Ensure email is unique
            'password' => 'required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
  
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);
  
        return redirect()->route('login');
    }
    
    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
  
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
  
        $request->session()->regenerate();
  
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }

    public function profile()
    {
        return view('profile');
    }

    public function handleGoogleLogin(Request $request)
    {
        $id_token = $request->input('token');
        $client = new \Google_Client(['client_id' => env('GOOGLE_CLIENT_ID')]);
        $payload = $client->verifyIdToken($id_token);

        if ($payload) {
            $email = $payload['email'];
            $name = $payload['name'];

            $user = User::firstOrCreate(['email' => $email], [
                'name' => $name,
                'password' => Hash::make(uniqid()), // Assign a random password
                'email_verified_at' => now(),
            ]);

            Auth::login($user);
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error'], 401);
        }
    }

    public function handleFacebookLogin(Request $request)
    {
        $email = $request->input('email');
        $name = $request->input('name');

        $user = User::firstOrCreate(['email' => $email], [
            'name' => $name,
            'password' => Hash::make(uniqid()), // Assign a random password
            'email_verified_at' => now(),
        ]);

        Auth::login($user);
        return response()->json(['status' => 'success']);
    }
}
