<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
            return view('emails.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'correo'=>'required|email',
            'fecha'=>'required|date',
            'seccion'=>'required',
            'mensaje'=>'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $correo=new ContactoMailable($request->all());
        Mail::to('no-reply@cardansel.com')->send($correo);

        return redirect()->route('emails.index')->with('info','Se envio correctamente el mensaje');
    }
}
