<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AutentikasiController extends Controller
{

    public function forgotPassword(Request $request)
    {
        return view('one.autentikasi.forgot');
    }
}
