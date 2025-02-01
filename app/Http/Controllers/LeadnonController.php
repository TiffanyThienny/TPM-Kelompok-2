<?php

namespace App\Http\Controllers;

use App\Models\Leadnon;
use Illuminate\Http\Request;

class LeadnonController extends Controller
{
    function getLeadnonbinInfo(){
        return view('Leadnonbin');
    }

    function createLeadnonbin(Request $request){
        
        $validated = $request->validate([
            "FullName2" => ["required", "string", "min:1", "max:100"],
            "Email2" => ["required", "email"],
            "WA2" => ["required", "numeric", "digits_between:10,13"],
            "Line2" => ["required", "string", "min:1", "max:50"],
            "Github2" => ["required", "string", "min:1", "max:50"],
            "BirthPlace2" => ["required", "string", "min:1", "max:50"],
            "Birthdate2" => ["required", "date"],
            "CV2" =>["required", "mimes:jpg,jpeg,png,pdf", "max:2048"],
            "IDCard2" =>["required", "mimes:jpg,jpeg,png,pdf", "max:2048"],
        ]);

        $lead = Leadnon::create([
            "FullName2" => $request->FullName,
            "Email2" => $request->Email,
            "WA2" => $request->WA,
            "Line2" => $request->Line,
            "Github2" => $request->Github,
            "BirthPlace2" => $request->BirthPlace,
            "Birthdate2" => $request->Birthdate,
            "CV2" => $request->CV,
            "IDCard2" => $request->IDCard
        ]);        

        if ($request->hasFile("CV2")) {
            $cvPath = $request->file("CV2")->store("uploads", "public");
            $lead->update(["CV2" => $cvPath]);
        }
        
        if ($request->hasFile("IDCard2")) {
            $idCardPath = $request->file("IDCard2")->store("uploads", "public");
            $lead->update(["IDCard2" => $idCardPath]);
        }

        return redirect(route('getLeadnonbinInfo'));
    }
}
