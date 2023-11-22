<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        return view('donation.index');
    }

    public function show($id)
    {
        $donation = intval($id);
        return view('donation-show', compact('donation'));
    }

    public function edit(){
        
    }
}
