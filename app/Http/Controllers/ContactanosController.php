<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('contactanos-index', compact('user'));
    }
    public function store(Request $request){
        Mail::to('yoko-tara@mail.com')->queue(new ContactanosMailable($request->all()));
        return redirect()->back()->with(['message' => 'Mensaje enviado con exito']);
    }
}
