<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoRef extends Model
{
    use HasFactory;

    protected $fillable = [
        'right_sph','right_cyl','right_ax','left_sph','left_cyl','left_ax','user_id','clear','clear_left','clear_left_with_glasses','clear_with_glasses'
    ];
}
