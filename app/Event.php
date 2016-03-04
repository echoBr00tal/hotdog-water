<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	protected $fillable = [
		'slug',
		'title',
		'description',
		'goal',
		'private',
		'num_guests',
		'publish_date',
		'due_by_date',
		'event_date'
	];

}

