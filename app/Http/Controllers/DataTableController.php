<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class DataTableController extends Controller
{
    public function dashboard(){
        $leads = Lead::all();
        return view('leads.table', compact('leads'));
    }
}
