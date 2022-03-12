<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class TodoController extends Controller
{

    public function index()
    {
        $eventsfeed - Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        return json_encode( compact('events')['events']);
    }


    public function create()
    {
        return view('eventsfeed.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required',
             'start_at' => 'required',
             'end_at' => 'required',
        ]);

        $eventsfeed = Event::create([ 
             'title' => $request->title, 
             'start_at' => date($request->start_at),
             'end_at' => date($request->end_at), 
        ]);

        return redirect('/calendar');
    }

    public function show($id)
    {
        $eventsfeed - Event::find($id);
        return view('eventsfeed.show',compact('calendar'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}