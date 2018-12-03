<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{ 
    // No created_at and updated_at columns
    public $timestamps = false;
    
    // Fill this values with people from API
    public $fillable = ['name','height','mass','hair_color','skin_color','birth_year','gender','specie'];
}
