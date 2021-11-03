<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Lead;
use Illuminate\Http\Request;

class FormController extends Controller{
    public function index(){
        return view('welcome');
    }

    public function save(Request $request){
        $lead = Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'country' => $request->country,
            'source' => $request->source,
        ]);

        Contact::create([
            'lead_id' => $lead->id,
            'contact_type_id' => 1,
            'value' => $request->phone
        ]);

        Contact::create([
            'lead_id' => $lead->id,
            'contact_type_id' => 2,
            'value' => $request->cellphone
        ]);

        return back()->with([
            'registered' => 'true'
        ]);
    }
}
