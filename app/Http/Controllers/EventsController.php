<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use Request;
use App\Http\Requests\EventRequest;

class EventsController extends Controller {
	
	
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index','show']]);
	}
	
	/**
	 * Show events
	 * @return \Illuminate\View\View
	 */
	public function index() {
		
		$all_events = Event::latest()->get();
		
		$data = array(
					'events' => $all_events
		);
		
		return view('events.index', $data);
	}
	
	/**
	 * Display a single event based on slug
	 * @param string $slug
	 * @return \Illuminate\View\View
	 */
	public function show($slug) {
		
		$event = Event::where("slug", $slug)->first();
		$data = array('event' => $event);
		
		return view( 'events.show', $data);
		
	}
	
	/**
	 * Create event form
	 * @return \Illuminate\View\View
	 */
	public function create() {
		
		return view('events.create');
	}
	
	/**
	 * Store data from create form
	 * @return Ambigous <\Illuminate\Routing\Redirector, \Illuminate\Http\RedirectResponse>
	 */
	public function store(EventRequest $request) {
	
		$post = $request->all();
		
		$post['slug'] = str_slug($post['title'], '-');
		
		Event::create($post);
		
		return redirect('events');
	}
	
	/**
	 * Edit event form
	 * @return \Illuminate\View\View
	 */
	public function edit($slug) {
	
		$event = Event::where("slug", $slug)->first();
		
		return view('events.edit', array('event' => $event));
	}
	
	/**
	 * update event
	 * @return \Illuminate\View\View
	 */
	public function update($slug, EventRequest $request) {
	
		$event = Event::where("slug", $slug)->first();
		$event->update($request->all());
		return redirect('events');
	}
	
}
