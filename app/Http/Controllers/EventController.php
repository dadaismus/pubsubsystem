<?php

namespace App\Http\Controllers;

use App\Event;
use App\Topic;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        dd($events);
    }

    public function show(Event $event)
    {
        return $event;
    }

    public function store(Request $request, $topic)
    {
        $newTopic = Topic::where('name', $topic)->first();
        $event = new Event;
        $event->message = $request->message;
        $newTopic->events()->save($event);
        return response()->json($newTopic, 301);
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function delete(Event $event)
    {
        $event->delete();

        return response()->json(null, 204);
    }
}
