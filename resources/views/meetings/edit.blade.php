@extends('layouts.master')

@section('title', 'Coming Meeting Details')

@section('content')

    {!! Form::model($meeting, ['method' => 'PATCH', 'route' => ['meetings.update', $meeting->id]]) !!}

        @include('meetings._form')

    {!! Form::close() !!}
    
@endsection