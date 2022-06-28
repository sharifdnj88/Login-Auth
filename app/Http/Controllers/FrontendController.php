<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Show Home Page
    public function ShowHomePage()
    {
        return view('frontend/home');
    }

    // Show Login Page
    public function ShowLoginPage()
    {
        return view('frontend/login');
    }

    // Patient Registration Page
    public function ShowPatientRegisterPage()
    {
        return view('frontend/patient/register');
    }


    // Patient Dashboard Page
    public function ShowPatientDashPage()
    {
        return view('frontend/patient/dashboard');
    }

    // Doctor register Page
    public function ShowDoctorRegisterPage()
    {
        return view('frontend/doctor/register');
    }

    // Doctor Dashboard Page
    public function ShowDoctorDashPage()
    {
        return view('frontend/doctor/dashboard');
    }
}
