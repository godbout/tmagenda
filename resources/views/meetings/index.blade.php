@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <ul>
        @foreach ($meetings as $meeting)
            <li>{{ $meeting->date }}</li>
        @endforeach
    </ul>
    
@endsection