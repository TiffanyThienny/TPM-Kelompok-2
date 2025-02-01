<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use App\Mail\MessageNotification;

class MessageController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'Nama' => 'required|string|max:255',
            'Email' => 'required|email',
            'Subject' => 'required|string|max:255',
            'Message' => 'required|string',
        ]);

        $message = Message::create($validated);

        $emailData = [
            'Nama' => $validated['Nama'],
            'Email' => $validated['Email'],
            'Subject' => $validated['Subject'],
            'Message' => $validated['Message'],
        ];

        Mail::to('bubu@gmail.com')->send(new MessageNotification($emailData));

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim dan email sudah dikirim ke bubu@gmail.com.');
    }
}
