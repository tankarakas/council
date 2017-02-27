<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Queue extends Model
{
	protected $fillable = [
		'type',
		'title',
		'name',
		'surname',
		'organisation',
		'service',
		'queued_at',
	];
}
