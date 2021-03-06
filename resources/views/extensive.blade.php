@extends('layouts.app')

@section('content')
    <div class="container">

        {{--Parts tabs--}}
        <div class="row m-t-100">
            <div class="col s12">
                <a class="waves-effect indigo waves-light btn right" href="{{url('/database')}}"><i class="material-icons right">storage</i>Part 2 | DataBase</a>
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
                        <li class="tab col"><a href="#task7">{{__('Task 7')}}</a></li>
                        <li class="tab col"><a href="#task8">{{__('Task 8')}}</a></li>
                        <li class="tab col"><a href="#task9">{{__('Task 9')}}</a></li>
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
                        <span class="card-title">Write an algorithm for solving the problem</span>
                        <p v-if="percent >= 100">Percent cant be more 100%</p>
                        <p v-else-if="percent < 1">The percent cant be less than 1%</p>
                        <p v-else-if="students >= 1">
                            There are @{{ students }} students in the class. @{{ percent }}% of them are engaged in sports.
                            How many students in the class do they go in for sports? <del>and how many students in the class?</del>
                        </p>
                        <p v-else-if="students < 1">That's enough, checking the empty value! Enter count of students</p>
                        <div class="row m-t-30 center">
                            <div class="col s4">
                                <button class="btn-small indigo" v-on:click="action = 'show'">Show answer</button>
                            </div>
                            <div class="col s4">
                                <button class="btn-small indigo" v-on:click="action = 'change'">Change data</button>
                            </div>
                            <div class="col s4">
                                <button class="btn-small indigo" v-on:click="action = 'documentation'">How it's work?</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col s12" v-if="action == 'show'">
                        <div class="card white grey-text text-darken-1">
                            <div class="card-content">
                                <span class="card-title" v-if="percent >= 100">Percent cant be more 100%</span>
                                <span class="card-title" v-else-if="percent < 1">The percent cant be less than 1%</span>
                                <span class="card-title" v-else-if="students >= 1">In a class of @{{  students }} students, @{{  (students/100*percent).toFixed(0) }} of them are engaged in sports</span>
                                <span class="card-title" v-else-if="students < 1">Enter please count of students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12" v-if="action == 'change'">
                        <div class="card white grey-text text-darken-1">
                            <div class="card-content">
                                <div class="row m-b-0">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">group</i>
                                        <input type="number" min="1" id="students" v-model="students">
                                        <label for="students" class="active">Enter the number of students</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">directions_bike</i>
                                        <input type="number" min="1" max="100" id="percent" v-model="percent">
                                        <label for="percent" class="active">Enter the percentage of students involved in sports</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12" v-if="action == 'documentation'">
                        <div class="card white grey-text text-darken-1">
                            <div class="card-content">
                                <span class="card-title">Number of students divided by 100% and multiplied by a certain percentage</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Part 1 Task2--}}
            <div id="task2" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">Implement an algorithm for extracting numeric values from a string</span>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">format_align_justify</i>
                            <input id="string" type="text" v-model="string" v-on:keyup="getNumbers">
                            <label class="active" for="string">Enter string</label>
                        </div>
                        <p v-if="numbers != ''">@{{ numbers }}</p>
                        <p v-else>There are no digits in the line.</p>
                        <p class="right-align">For PHP can use function preg_match_all</p>
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

            {{--Part 1 Task7--}}
            <div id="task7" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">What is the difference require && include ?</span>
                        <p class="flow-text">
                            The require() function is identical to include(), except that it handles errors differently.
                            If an error occurs, the include() function generates a warning, but the script will continue execution.
                            The require() generates a fatal error, and the script will stop. <a href="https://stackoverflow.com/questions/2418473/difference-between-require-include-require-once-and-include-once">[Read more]</a>
                        <p/>
                    </div>
                </div>
            </div>

            {{--Part 1 Task8--}}
            <div id="task8" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">What user data of the site from the listed can be considered as 100% authentic: cookie|session|ip|user-agent</span>
                        <p class="flow-text">
                            This is a difficult question<br/>
                            I think that none of these place can be considered 100% authentic.<br/>
                            But the most reliable in my opinion it's @session@ because it stores data on the server<br/>
                            And for user hard to write something in session storage

                        <p/>
                    </div>
                </div>
            </div>

            {{--Part 1 Task9--}}
            <div id="task9" class="col s12">
                <div class="card white grey-text text-darken-1">
                    <div class="card-content">
                        <span class="card-title">How it's work?</span>
                        <p>
                            for( var i =0; i < 10; i++){<br/>
                                setTimeout(function () {<br/>
                                console.log(i);<br/>
                                }, 100);<br/>
                            }<br/>
                        </p>
                        <p class="flow-text">
                            Will show 10 times the number 10<br/>
                            Because the cycle will reach the end faster than 100 ms
                        <p/>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        // Vue
        var app = new Vue({
            el: '#app',
            data: {
                action: '',
                students: 28,
                percent: 75,
                string: 'This server has 386 GB RAM and 5000 GB storage',
                numbers: '386,5000'
            },
            methods: {
                getNumbers: function(string){
                    // Use regex
                    this.numbers = this.string.replace(/\D+/ig, ',');
                    this.numbers = this.numbers.slice(1);
                }
            }
        });

        // For tabs
        M.AutoInit();
    </script>
@endsection