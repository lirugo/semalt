@extends('layouts.app')

@section('content')
    <div class="row m-t-100">
        <div class="col s4 offset-s4">
            <div class="row">
                <div class="card hoverable indigo">
                    <div class="card-content white-text">
                        <div class="row m-b-0">
                            {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
                            <span class="card-title center">Sign up</span>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                {!! Form::text('name', null, ['class' => 'validate', 'id' => 'name', 'pattern' => '.{3,}', 'autofocus']) !!}
                                {!! Form::label('name', 'Enter Your Name') !!}
                                <span class="helper-text" data-error="Minimum 3 chars" data-success="All is OK"></span>
                            </div>
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
                            <div class="input-field col s12 m-b-30">
                                <i class="material-icons prefix">vpn_key</i>
                                {!! Form::password('password_confirmation', ['class' => 'validate', 'id' => 'password_confirmation', 'pattern' => '^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{6,}$', 'required']) !!}
                                {!! Form::label('password_confirmation', 'Confirm Your Password') !!}
                                <span class="helper-text" data-error="Minimum 6 chars at least 1 number and 1 capital letter" data-success="All is OK"></span>
                            </div>
                            <div class="col s12">
                                <button class="btn waves-effect waves-light grey right" type="submit" name="action">Sign up
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="{{route('login')}}" class="grey-text">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
