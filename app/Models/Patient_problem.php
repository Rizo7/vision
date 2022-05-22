<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_problem extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'problem_id'
    ];


}
