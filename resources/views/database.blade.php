@extends('layouts.app')

@section('content')
    <div class="container">

        {{--Parts tabs--}}
        <div class="row m-t-100">
            <div class="col s12">
                <a class="waves-effect indigo waves-light btn" href="{{url('/extensive')}}"><i class="material-icons right">apps</i>Part 1 | Extensive</a>
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
                        <li class="tab col"><a href="#task6">{{__('Task 6')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{--Solution part 1--}}
        <div class="row">
            {{--Part 1 Task1--}}
            <div id="task1" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Make scripts to prepare the database (migration)</span>
                        <p><i>Folder - database/seeds/EventsSeeder.php|BidsSeeder.php</i></p><br/>
                        <p>
                            DB::table('events')->insert(['caption' => 'Atlas Weekend 2017',] );<br/>
                            DB::table('events')->insert(['caption' => 'Green Grey',] );
                        </p>
                        <p>
                            DB::table('bids')->insert(['id_event' => 1,'name' => 'Василий','email' => 'vas@gmail.com',
                            'price' => '100',] );<br/>
                            DB::table('bids')->insert(['id_event' => 1,'name' => 'Николай','email' => 'nk@gmail.com',
                            'price' => '150',] );
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