<?php

namespace App\Http\Controllers\Moder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index()
    {
        return view('moder.cases.index');
    }
}
