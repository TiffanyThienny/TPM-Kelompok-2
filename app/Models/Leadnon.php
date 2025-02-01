<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadnon extends Model
{
    use HasFactory;

    protected $fillable = [
        "FullName2",
        "Email2",
        "WA2",
        "Line2",
        "Github2",
        "BirthPlace2",
        "Birthdate2",
        "CV2",
        "IDCard2"
    ];
}
