<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiRegister extends Controller
{
    public function register(){
        try{
            $this->validate(request(),[
                'email' => ['required'],
                'name' => ['required'],
                'password' => ['required']
            ]);
        }catch(ValidationException $e){

        }

        $data = request()->all();

        $user = new User();
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];
        $user->save();

        return $user;
    }
}
