<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Super;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request){

        // check validation
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        if (! Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return Super::jsonResponse(false, 404, "not matched", $validator->errors(), new \stdClass());
        }
        return Super::jsonResponse(true, 0, "logged in ..", new \stdClass(), Auth::user());
    }
}