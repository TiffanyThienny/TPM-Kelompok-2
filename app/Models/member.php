<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = [
        "FullName3",
        "Email3",
        "WA3",
        "Line3",
        "Github3",
        "BirthPlace3",
        "Birthdate3",
        "CV3",
        "IDCard3"
    ];
}
