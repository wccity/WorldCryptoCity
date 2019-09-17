<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

    public function signup()
    {
    	return view('frontend.sign-up');
    }

    public function signin()
    {
    	return view('frontend.sign-in');
    }

    public function verifyForm()
    {
        return view('frontend.verify-form');
    }

    public function success()
    {
        return view('frontend.success');
    }

    public function emailConfirmation()
    {
        return view('frontend.email-confirmation');
    }
}
