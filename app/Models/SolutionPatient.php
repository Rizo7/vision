<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionPatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'solution_id', 'patient_id'
    ];
}
