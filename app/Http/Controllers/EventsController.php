<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function show($id)
    {
        // You can optionally use a shortcut to identify the variable name
        // return view('events.show')->withId($id);

        // return view('events.show')
        //     ->with('id', $id)
        //     ->with('name', 'Laravel Hacking and Coffee');

        $events = [
            'Laravel Hacking and Coffee',
            'IoT with Raspberry Pi',
            'Free Vue.js Lessons',
        ];

        return view('events.show')
            ->with(
                ['id' => $id, 'name' => 'Event 1']
            )
            ->with('events', $events);
    }
}
