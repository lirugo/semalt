@extends('layouts.app')

@section('content')
    <div class="row m-t-100">
        <div class="col s4 offset-s4">
            <div class="row">
                <div class="card hoverable indigo">
                    <div class="card-content white-text">
                        <div class="row m-b-0">
                            {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
                                <span class="card-title center">Sign in</span>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    {!! Form::email('email', null, ['class' => 'validate', 'id' => 'email', 'required']) !!}
                                    {!! Form::label('email', 'Enter Your Email') !!}
                                    <span class="helper-text" data-error="Email not correct" data-success="All is OK"></span>
                                </div>
                                <div class="input-field col s12 m-b-30">
                                    <i class="material-icons prefix">vpn_key</i>
                                    {!! Form::password('password', ['class' => 'validate', 'id' => 'password', 'pattern' => '^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{6,}$', 'required']) !!}
                                    {!! Form::label('password', 'Enter Your Password') !!}
                                    <span class="helper-text" data-error="Minimum 6 chars at least 1 number and 1 capital letter" data-success="All is OK"></span>
                                </div>
                                <div class="col s12">
                                        <label>
                                            <input type="checkbox" />
                                            <span>Remember Me?</span>
                                        </label>
                                    <button class="btn waves-effect waves-light grey right" type="submit" name="action">Sign in
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="{{route('register')}}" class="grey-text">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--<div class="input-field col s12">--}}
    {{--<i class="material-icons prefix">account_circle</i>--}}
    {{--<input type="text" class="autocomplete">--}}
    {{--<label for="autocomplete-input">Enter Your Login</label>--}}
{{--</div>--}}
{{--<div class="input-field col s12">--}}
    {{--<i class="material-icons prefix">vpn_key</i>--}}
    {{--<input type="text" id="autocomplete-input" class="autocomplete">--}}
    {{--<label for="autocomplete-input">Enter Your Password</label>--}}
{{--</div>--}}
{{--<div class="input-field col s12">--}}
    {{--<a class="waves-effect waves-light btn-small"><i class="material-icons left">cloud</i>Sign in</a>--}}
{{--</div>--}}