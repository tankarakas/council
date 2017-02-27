<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Queue;

class QueueController extends Controller
{

	public function index()
	{
		$queue = Queue::all();
		return view('queue')->with(compact('queue'));
	}

	public function create()
	{
		Queue::create([
            'type' => request('type'),
            'title' => request('title'),
			'name' => request('name'),
            'surname' => request('surname'),
            'organisation' => request('organisation'),
			'service' => request('service'),
			'queued_at' => date("Y-m-d H:i:s"),
		]);

		return redirect('/');
	}

}
