@extends('layouts.app')

@section('content')
    <div class="container">

        {{--Parts tabs--}}
        <div class="row m-t-100">
            <div class="col s12">
                <a class="waves-effect indigo waves-light btn" href="{{url('/extensive')}}"><i class="material-icons right">apps</i>Part 1 | Extensive</a>
                <span class="grey-text right">For more information look - <i>app/Http/Controllers/Events/EventsController.php</i></span>
            </div>
        </div>

        {{--Tasks tabs--}}
        <div class="row">
            {{--Part 1 tasks tabs--}}
            <div class="col s12">
                <div class="card white" id="part1">
                    <ul class="tabs grey-text text-darken-1">
                        <li class="tab col"><a href="#task1">{{__('Task 1')}}</a></li>
                        <li class="tab col"><a href="#task2">{{__('Task 2')}}</a></li>
                        <li class="tab col"><a href="#task3">{{__('Task 3')}}</a></li>
                        <li class="tab col"><a href="#task4">{{__('Task 4')}}</a></li>
                        <li class="tab col"><a href="#task5">{{__('Task 5')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{--Solution part 2--}}
        <div class="row">

            {{--Part 2 Task1--}}
            <div id="task1" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Make scripts to prepare the database (migration)</span>
                        <p>For more information look - <i>database/migrations/</i></p><br/>
                        <p>
                            Schema::create('events', function (Blueprint $table) {<br/>
                            $table->increments('id');<br/>
                            $table->string('caption');<br/>
                            $table->timestamps();<br/>
                            });<br/>
                        </p>
                        <p>
                            Schema::create('bids', function (Blueprint $table) {<br/>
                            $table->increments('id');<br/>
                            $table->integer('id_event')->unsigned();<br/>
                            $table->foreign('id_event')->references('id')->on('events');<br/>
                            $table->string('name');<br/>
                            $table->string('email');<br/>
                            $table->float('price');<br/>
                            $table->timestamps();<br/>
                            });<br/>
                        </p>
                    </div>
                </div>
            </div>

            {{--Part 2 Task2--}}
            <div id="task2" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Write a query that selects the user name (bids.name) from the
                            higher bid price (bids.price)</span>
                        <p><i><a href="{{url('/getUserWithHigherBids')}}">Click me</a></i></p><br/>
                        <p>
                            SELECT name<br/>
                            FROM bids<br/>
                            ORDER BY price<br/>
                            DESC LIMIT 1<br/>
                        </p>
                    </div>
                </div>
            </div>

            {{--Part 2 Task3--}}
            <div id="task3" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Write a query that selects the name of the event (events.caption), by event what not have bids?</span>
                            <p><i><a href="{{url('/getEventWithoutBids')}}">Click me</a></i></p><br/>
                            <p>
                                SELECT events.caption<br/>
                                FROM events<br/>
                                LEFT JOIN bids<br/>
                                ON events.id = bids.id_event<br/>
                                WHERE bids.id_event IS NULL<br/>
                            </p>
                    </div>
                </div>
            </div>

            {{--Part 1 Task4--}}
            <div id="task4" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Write a query that selects the name of the event (events.caption), by event what have more three bids</span>
                        <p><i><a href="{{url('/getEventWithMoreThreeBids')}}">Click me</a></i></p><br/>
                        <p>
                            SELECT events.caption, COUNT(*) as count<br/>
                            FROM events<br/>
                            LEFT JOIN bids<br/>
                            ON bids.id_event = events.id<br/>
                            GROUP BY events.id<br/>
                            HAVING count > 3<br/>
                        </p>
                    </div>
                </div>
            </div>

            {{--Part 1 Task5--}}
            <div id="task5" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Write a query that selects the name of the event (events.caption), by event what have most bids</span>
                        <p><i><a href="{{url('/getEventWithMaxBid')}}">Click me</a></i></p><br/>
                        <p>
                            SELECT events.caption, COUNT(*) as count<br/>
                            FROM events<br/>
                            LEFT JOIN bids<br/>
                            ON bids.id_event = events.id<br/>
                            GROUP BY events.id<br/>
                            ORDER BY count DESC<br/>
                            LIMIT 1<br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // For tabs
        M.AutoInit();
    </script>
@endsection