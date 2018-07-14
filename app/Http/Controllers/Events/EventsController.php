<?php

namespace App\Http\Controllers\Events;

use App\Bid;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function getUserWithHigherBids(){
        // Use ORM
        // $bid = Bid::orderBy('price','desc')->first()->name;

        // Pure MySQL - Get name
        $bid = DB::select("
            SELECT name 
            FROM bids
            ORDER BY price 
            DESC LIMIT 1 
        ");

        // Return name
        return $bid; // - Николай
    }

    public function getEventWithoutBids(){
        // Pure MySQL - Get event\s
        $events = DB::select("
            SELECT events.caption
            FROM events
            LEFT JOIN bids
            ON events.id = bids.id_event
            WHERE bids.id_event IS NULL
        ");

        // Return events or event
        return $events; // - Green Grey
    }

    public function getEventWithMoreThreeBids(){
        // Pure MySQL - Get event\s
        $events = DB::select("
            SELECT events.caption, COUNT(*) as count
            FROM events
            LEFT JOIN bids
            ON bids.id_event = events.id
            GROUP BY events.id
            HAVING count > 3
        ");

        return $events;
    }
}
