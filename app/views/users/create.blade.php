@extends('layout.main')

@section('content')

<h1>Create a User</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'users')) }}

    <div class="form-group">
        {{ Form::label('first_name', 'Name') }}
        {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('password-confirm', 'Password Confirm') }}
        {{ Form::password('password-confirm', array('class' => 'form-control')) }}
    </div>

    

    {{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@stop