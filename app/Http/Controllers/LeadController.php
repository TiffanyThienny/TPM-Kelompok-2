<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    function getLeadInfo(){
        return view('Lead');
    }

    function createLead(Request $request){
        
        $validated = $request->validate([
            "FullName" => ["required", "string", "min:1", "max:100"],
            "Email" => ["required", "email"],
            "WA" => ["required", "numeric", "digits_between:10,13"],
            "Line" => ["required", "string", "min:1", "max:50"],
            "Github" => ["required", "string", "min:1", "max:50"],
            "BirthPlace" => ["required", "string", "min:1", "max:50"],
            "Birthdate" => ["required", "date"],
            "CV" =>["required", "mimes:jpg,jpeg,png,pdf", "max:2048"],
            "FlazzCard" => ["required","mimes:jpg,jpeg,png,pdf", "max:2048"],
        ]);

        $lead =Lead::create([
            "FullName" => $request->FullName,
            "Email" => $request->Email,
            "WA" => $request->WA,
            "Line" => $request->Line,
            "Github" => $request->Github,
            "BirthPlace" => $request->BirthPlace,
            "Birthdate" => $request->Birthdate,
            "CV" => $request->CV,
            "FlazzCard" => $request->FlazzCard,
        ]);        

        if ($request->hasFile("CV")) {
            $cvPath = $request->file("CV")->store("uploads", "public");
            $lead->update(["CV" => $cvPath]);
        }
        
        if ($request->hasFile("FlazzCard")) {
            $flazzCardPath = $request->file("FlazzCard")->store("uploads", "public");
            $lead->update(["FlazzCard" => $flazzCardPath]);
        }
        
        return redirect(route('getLeadInfo'));
    }

}
