<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function register(Request $request){
        try{
            $this->validate(request(),[
                'name' => ['required'],
                'email' => ['required'],
                'password' => ['required']
            ]);
        } catch(ValidationException $e){
        }

        $credentials = request()->all();
        $user = new User();
        $user->name = $credentials['name'];
        $user->email = $credentials['email'];
        $user->password = Hash::make($credentials['password']);
        $user->save();

        //Send verification email to the user
        event(new Registered($user));
        return redirect('login');
    }
}
