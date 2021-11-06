<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\Form1Request;
use App\Models\Contact;
use App\Models\ContactType;
use Illuminate\Http\Request;

class LeadController extends Controller
{

    public function index(){
        $leads = Lead::all();
        return view('leads.table', compact('leads'));
    }

    public function orderBy( $attribute = null ){
        if(empty($attribute)){
            abort(430);
            return redirect()->action( [ self::class, 'index' ]);
        }

        $leads = Lead::orderBy($attribute)->get();

        return view('leads.table', compact('leads', 'attribute'));
    }

    public function create(){
        return view('welcome');
    }

    public function store(Form1Request $request){
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

    public function show(Lead $lead){
        return view('leads.profile', compact('lead'));
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        Lead::destroy($id);
        return back();
    }

    public function trashed(){
        $leads = Lead::onlyTrashed()->get();

        return view('leads.trashedTable', compact('leads'));
    }

    public function deletePermanently($id){
        $lead = Lead::withTrashed()->find($id);
        $lead->forceDelete();

        return back();
    }

    public function restore($id){
        $lead = Lead::withTrashed()->find($id);
        $lead->restore();

        return back();
    }
}
