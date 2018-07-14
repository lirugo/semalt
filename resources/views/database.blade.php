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

            {{--Part 1 Task2--}}
            <div id="task2" class="col s12">
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

            {{--Part 1 Task3--}}
            <div id="task3" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">How to get the first element of an array - ​[2,3,56,65,56,44,34,45,3,5,35,345,3,5] ​?</span>
                        <div class="row m-t-20">
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">PHP</span>
                                        <p>
                                            array_shift($array)<br/>
                                            $array[0]<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">JS</span>
                                        <p>
                                            array[0]<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">JAVA</span>
                                        <p>
                                            int[] array = {...}; (creating array)<br/>
                                            array[0];<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Part 1 Task4--}}
            <div id="task4" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">How to calculate the remainder of division 10/3 ?</span>
                        <div class="row m-t-20">
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">PHP</span>
                                        <p>
                                            $a % $b<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">JS</span>
                                        <p>
                                            a % b<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">JAVA</span>
                                        <p>
                                            a % b<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Part 1 Task5--}}
            <div id="task5" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Exchange two variables not using third. (different types)</span>
                        <div class="row m-t-20">
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">PHP</span>
                                        <p>
                                            list($a,$b)=[$b,$a];<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">JS</span>
                                        <p>
                                            b = [a, a = b][0];<br/>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card grey light-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">JAVA</span>
                                        <p>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Part 1 Task6--}}
            <div id="task6" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">The difference between an operator == && === ?</span>
                        <p>
                            === value|type checking<br/>
                            ==  value checking<br/>
                            <br/>
                            '45' == 45  // Result: bool(true)<br/>
                            '45' === 45 // Result: bool(false)<br/>
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