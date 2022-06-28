<?php

namespace App\Http\Controllers\Auth;

use App\Models\patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientAuthController extends Controller
{
    public function register(Request $request)
    {
        // validate
        $this ->validate($request, [
            'name'                 =>'required',
            'mobile'               =>'required|unique:patients',
            'email'                 =>'required|unique:patients|email',
            'password'            =>'required|confirmed',
        ]);

         // Data Store

        $patient = patient::create([
            'name'           => $request -> name,
            'mobile'          => $request -> mobile,
            'email'            => $request -> email,
            // 'password'       => $request -> password,
            'password'       => password_hash($request -> password, PASSWORD_DEFAULT),
        ]);

        // return back
        return redirect() -> route('patient.reg.page') -> with('success', 'Hi ' . $patient -> name  ."Your account is ready. Now log-in");


    }

    public function login(Request $request)
    {
        // Patient Validate

        $this -> validate($request, [
            'email'     =>'required',
            'password'     =>'required',
        ]);

        if( Auth::guard('patient') -> attempt([ 'email' => $request -> email, 'password' => $request -> password, ]) || Auth::guard('patient') -> attempt([ 'mobile' => $request -> email, 'password' => $request -> password ]) ){
            return redirect() -> route('patient.dash.page');
        }else{
           return redirect() -> route('login.page') -> with('danger', 'Worng Email or Password');
        }
    }

    // Patient Logout

    public function logout()
    {
        Auth::guard('patient') -> logout();
        return redirect() -> route('login.page');
    }

   
}
