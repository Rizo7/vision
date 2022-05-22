<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','lastname','birth_year','birth_place','updated_at'
    ];

    function getPlace(){
        return $this->belongsTo('App\Models\Place','birth_place','id');
    }

    function getAutoRE(){
        return $this->hasMany('App\Models\AutoRef', 'user_id', 'id');
    }

    function getImages(){
        return $this->hasMany('App\Models\Image', 'user_id', 'id');
    }

    function problemPatient(){
        return $this->belongsToMany('App\Models\Problem', 'patient_problems', 'patient_id', 'problem_id');
    }

    function solutionPatient(){
        return $this->belongsToMany('App\Models\Solution', 'solution_patients', 'patient_id', 'solution_id');
    }

    function tonoPatient(){
        return $this->hasMany('App\Models\Tonometr', 'patient_id', 'id');
    }

    function kerPatient(){
        return $this->hasMany('App\Models\Ker', 'patient_id', 'id');
    }

    function Utt(){
        return $this->hasMany('App\Models\UTT', 'patient_id', 'id');
    }

}
