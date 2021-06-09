<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable = [
		'appointment_date', 'appointment_time', 'place', 'user_id',
	];

	public function user(){
		return $this->belongsTo(User::class);
	}
}
