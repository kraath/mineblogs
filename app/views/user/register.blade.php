@extends('layouts.default')
@section('content')

<div class="welcome">
    <h1>User Registration</h1>
    <hr>
    {{ Form::open() }}
    <div>
        {{Form::label('email','Email Adr') }}
        {{Form::text('email') }}
    </div>
    <div>
        {{Form::label('password','Password') }}
        {{Form::password('password') }}
    </div>
    <div>
        {{Form::label('name','User Name') }}
        {{Form::text('name') }}
    </div>
    <div>
        {{Form::label('city','City Name') }}
        {{Form::text('city') }}
    </div>
    <div>
        {{Form::label('country','Country') }}
        {{Form::text('country') }}
    </div>
    <br>
    {{ Form::submit('Register') }}
    {{Form::close() }}
    <hr>
    {{ link_to("user/login","Login") }} <br>

    <div>
        <h3>
            @if(isset($error)) {{ $error }} 
            {{ $error; }}
            @endif
        </h3>
    </div>
</div>

@stop