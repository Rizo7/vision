<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tonometr extends Model
{
    use HasFactory;

    protected $fillable = [
        'right', 'left', 'patient_id'
    ];
}
