<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form1Request;
use App\Models\Contact;
use App\Models\ContactType;
use App\Models\Lead;
use Illuminate\Http\Request;

class FormController extends Controller{
    public function index(){
        return view('welcome');
    }

    public function save(Form1Request $request){
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
            'contact_type_id' => ContactType::PHONE,
            'value' => $request->phone
        ]);

        Contact::create([
            'lead_id' => $lead->id,
            'contact_type_id' => ContactType::CELLPHONE,
            'value' => $request->cellphone
        ]);

        return back()->with([
            'registered' => 'true'
        ]);
    }
}
