<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function getmemberInfo()
    {
        return view('membernon');
    }

    public function createMember(Request $request)
    {
        $validated = $request->validate([
            "FullName3" => ["required", "string", "min:1", "max:100"],
            "Email3" => ["required", "email"],
            "WA3" => ["required", "numeric", "digits_between:10,13"],
            "Line3" => ["required", "string", "min:1", "max:50"],
            "Github3" => ["required", "string", "min:1", "max:50"],
            "BirthPlace3" => ["required", "string", "min:1", "max:50"],
            "Birthdate3" => ["required", "date"],
            "CV3" => ["required", "mimes:jpg,jpeg,png,pdf,doc,docx", "max:3048"],
            "IDCard3" => ["required", "mimes:jpg,jpeg,png,pdf,doc,docx", "max:3048"],
        ]);

        $lead = Member::create([
            "FullName3" => $request->FullName3,
            "Email3" => $request->Email3,
            "WA3" => $request->WA3,
            "Line3" => $request->Line3,
            "Github3" => $request->Github3,
            "BirthPlace3" => $request->BirthPlace3,
            "Birthdate3" => $request->Birthdate3,
            "CV3" => null,
            "IDCard3" => null
        ]);

        if ($request->hasFile("CV3")) {
            $cvPath = $request->file("CV3")->store("uploads", "public");
            $lead->update(["CV3" => $cvPath]);
        }

        if ($request->hasFile("IDCard3")) {
            $idCardPath = $request->file("IDCard3")->store("uploads", "public");
            $lead->update(["IDCard3" => $idCardPath]);
        }

        return redirect()->route('getmemberInfo');
    }
}
