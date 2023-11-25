<?php

namespace App\Http\Controllers\Moder;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
        public function index()
    {
        return view('moder.notice.index');
    }
    public function show(){
        return view('myNotices-show');
    }
}
