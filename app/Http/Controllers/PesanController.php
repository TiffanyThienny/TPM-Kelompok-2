<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    function getContactUsPage(){
        return view('ContactUs');
    }

    function createMessage(Request $request){

        $request->validate([
            "Nama" => ["required", "string", "min:1", "max:255"],
            "Email" => ["required", "email", "min:1"],
            "Subject" => ["required", "string", "min:1", "max:255"],
            "Message" => ["required", "string", "min:1"]
        ], [
            "Nama.required" => "Nama wajib diisi.",
            "Nama.string" => "Nama harus berupa teks.",
            "Nama.min" => "Nama harus memiliki minimal 1 karakter.",
            "Nama.max" => "Nama tidak boleh lebih dari 255 karakter.",
            
            "Email.required" => "Email wajib diisi.",
            "Email.email" => "Email harus memiliki format yang valid (contoh: user@example.com).",
            "Email.min" => "Email tidak boleh kosong.",
            
            "Subject.required" => "Subject wajib diisi.",
            "Subject.string" => "Subject harus berupa teks.",
            "Subject.min" => "Subject harus memiliki minimal 1 karakter.",
            "Subject.max" => "Subject tidak boleh lebih dari 255 karakter.",
            
            "Message.required" => "Pesan wajib diisi.",
            "Message.string" => "Pesan harus berupa teks.",
            "Message.min" => "Pesan harus memiliki minimal 1 karakter."
        ]);
        

        Pesan::create([
            "Nama" => $request -> Nama,
            "Email" => $request -> Email,
            "Subject" => $request -> Subject,
            "Message" => $request -> Message
        ]);

        return redirect(route('getContactUsPage'));
    }
}
