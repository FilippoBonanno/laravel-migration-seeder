<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //nel caso vogliate cambiare il nome della tabella a cui fa riferimento il modello:
    // protected $table = "Students";
}
