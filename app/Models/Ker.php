<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ker extends Model
{
    use HasFactory;

    protected $fillable = [
        'Right_R1_MM', 'Right_R1_D','Right_R1_AX','Right_R2_MM',
        'Right_R2_D','Right_R2_AX','Left_R1_MM','Left_R1_D',
        'Left_R1_AX','Left_R2_MM','Left_R2_D','Left_R2_AX','patient_id'
    ];
}
