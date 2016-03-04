<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;

use Illuminate\Http\Request;

class EventsController extends Controller {

	public function index() {
		
		$events = Event::all();
		
		$data = array('events' => $events);
		
		return view('events.index', $data);
	}

}
