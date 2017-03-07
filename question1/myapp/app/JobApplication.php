<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    //
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'firstname','surname', 'email', 'phonenum', 'image',
	];

	public $timestamps = false;
}
