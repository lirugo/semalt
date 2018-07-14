<?php

namespace App\Http\Controllers\Events;

use App\Bid;
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
}
