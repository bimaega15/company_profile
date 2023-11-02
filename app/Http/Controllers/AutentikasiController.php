<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;

class AutentikasiController extends Controller
{

    public function checkTemplate()
    {
        return view('one.autentikasi.checkTemplate');
    }
    public function forgotPassword(Request $request)
    {
        return view('one.autentikasi.forgot');
    }

    public function storeForgotPassword(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ], [
            'required' => ':attribute wajib diisi',
            'email' => ':attribute anda tidak valid'
        ]);

        $verify = User::where('email', $request->all()['email'])->exists();

        if ($verify) {
            $verify2 =  DB::table('password_resets')->where([
                ['email', $request->all()['email']]
            ]);

            if ($verify2->exists()) {
                $verify2->delete();
            }

            $token = random_int(100000, 999999);
            $password_reset = DB::table('password_resets')->insert([
                'email' => $request->all()['email'],
                'token' =>  $token,
                'created_at' => Carbon::now()
            ]);

            if ($password_reset) {
                Mail::to($request->all()['email'])->send(new ResetPassword($token));

                session()->flash('success', 'Reset password berhasil dikirim ke email');
                return redirect()->to(url('forgotPassword'));
            }
        } else {
            session()->flash('error', 'Email tidak ditemukan');
            return redirect()->to(url('forgotPassword'));
        }
    }
}
