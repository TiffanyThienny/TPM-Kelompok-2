<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membernon extends Model
{
    use HasFactory;

    protected $fillable = [
        "FullName4",
        "Email4",
        "WA4",
        "Line4",
        "Github4",
        "BirthPlace4",
        "Birthdate4",
        "CV4",
        "IDCard4"
    ];
}
