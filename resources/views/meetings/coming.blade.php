@extends('layouts.master')

@section('title', 'Coming Meeting Details')

@section('content')

    {!! Form::model($meeting, array('controller' => 'MeetingController@store')) !!}
        {{ Form::label($meeting->tme, 'TME') }}
        {{ Form::select('tme', $members, null, ['placeholder' => 'Choose a member...']) }}
        {{ Form::submit('Save changes') }}

    {!! Form::close() !!}
    
@endsection