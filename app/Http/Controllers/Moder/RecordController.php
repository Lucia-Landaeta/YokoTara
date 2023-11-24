<?php

namespace App\Http\Controllers\moder;

use App\Http\Controllers\Controller;
use App\Models\CaseAnimal;
use App\Models\RecordCase;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index($case)
    {
        $case = CaseAnimal::withTrashed()->find($case);
        return view('moder.records.index',compact('case'));
    }

    public function show(RecordCase $record)
    {
        return view('moder.records.show',compact('record'));
    }
}
