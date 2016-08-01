@extends('layouts.master')

@section('title', 'Coming Meeting Details')

@section('content')

    {!! Form::open(['route' => 'meetings.store']) !!}

        @include('meetings._form')

    {!! Form::close() !!}


    
@endsection