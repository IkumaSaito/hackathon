<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;
    
    protected $redirectTo = 'users/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'nullable|string',
            'hobby' => 'nullable|string',
            'job' => 'nullable|string',
            'language' => 'nullable|string',
            'intro' => 'nullable|string',
        ]);
    }

        protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'gender' => $data['gender'],
            'hobby' => $data['hobby'],
            'job' => $data['job'],
            'language' => $data['language'],
            'intro' => $data['intro'],
        ]);
    }
}
