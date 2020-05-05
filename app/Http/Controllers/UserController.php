<?php

namespace App\Http\Controllers;

use App\Events\RegisterSuccessfull;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function validateRegister(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
    }

    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->register_token = bcrypt(Str::random(10));
        $user->save();

        event(new RegisterSuccessfull($user));

        return redirect()->back()->with('success', "Register successfully !!!");
    }

    public function getVerify(Request $request)
    {
        $user = User::where('register_token', $request->register_token)->first();
        if ($user->email_verified_at == "") {
            $user->email_verified_at = Carbon::now();
            $user->save();
            return redirect()->route('index');
        } else {
            return abort(404);
        }
    }

    public function validateLogin(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email cannot be empty',
                'password.required' => 'Password cannot be empty',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
    }

    public function postLogin(Request $request)
    {
        $credentials = array('email' => $request->email, 'password' => $request->password);
        $remember = $request->input('remember_me');

        if (Auth::attempt($credentials, $remember)) {
            return redirect('index');
        } else {
            return redirect()->back()->with('loginfail', 'Bạn đã đăng nhập thất bại');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('index');
    }
}
