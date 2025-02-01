<?php

namespace App\Http\Controllers;

use App\Models\Membernon;
use Illuminate\Http\Request;

class MembernonController extends Controller
{
    function getmembernonbinInfo(){
        return view('Leadnonbin');
    }

    function createmembernonbin(Request $request){
        
        $validated = $request->validate([
            "FullName4" => ["required", "string", "min:1", "max:100"],
            "Email4" => ["required", "email"],
            "WA4" => ["required", "numeric", "digits_between:10,13"],
            "Line4" => ["required", "string", "min:1", "max:50"],
            "Github4" => ["required", "string", "min:1", "max:50"],
            "BirthPlace4" => ["required", "string", "min:1", "max:50"],
            "Birthdate4" => ["required", "date"],
            "CV4" =>["required", "mimes:jpg,jpeg,png,pdf", "max:4048"],
            "IDCard4" =>["required", "mimes:jpg,jpeg,png,pdf", "max:4048"],
        ]);

        $lead = Membernon::create([
            "FullName4" => $request->FullName,
            "Email4" => $request->Email,
            "WA4" => $request->WA,
            "Line4" => $request->Line,
            "Github4" => $request->Github,
            "BirthPlace4" => $request->BirthPlace,
            "Birthdate4" => $request->Birthdate,
            "CV4" => $request->CV,
            "IDCard4" => $request->IDCard
        ]);        

        if ($request->hasFile("CV4")) {
            $cvPath = $request->file("CV4")->store("uploads", "public");
            $lead->update(["CV4" => $cvPath]);
        }
        
        if ($request->hasFile("IDCard4")) {
            $idCardPath = $request->file("IDCard4")->store("uploads", "public");
            $lead->update(["IDCard4" => $idCardPath]);
        }

        return redirect(route('getmembernonbinInfo'));
    }
}
