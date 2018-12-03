<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    // No created_at and updated_at columns
    public $timestamps = false;

    // Fill this values with species from API
    public $fillable = ['name','classification','designation','average_height','skin_colors','hair_colors','eye_colors','average_lifespan','language'];
    
}
