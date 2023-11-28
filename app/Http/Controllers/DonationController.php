<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::sum('amount');
        return view('donation.index', compact('donations'));
    }

    public function show($id)
    {
        $donation = intval($id);
        return view('donation.show', compact('donation'));
    }

    public function load(){
        return view('admin.donations.load');
    }
    public function pay(){
        return view('admin.donations.pay');
    }
    public function expensesRecord(){
        return view('donation.expensesRecord');
    }
}
