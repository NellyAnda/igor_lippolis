<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomepageTreatments extends Model
{
    protected $fillable = [
        'treatment_name', 'picture', 'treatment_path', 'treatment_picture_description',
    ];
}
