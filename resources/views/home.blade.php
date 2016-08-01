@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <ul>
        <li><a href="/members">List of Members</a></li>
        <li><a href="/meetings">List of Past Meetings</a></li>
        <li><a href="/meetings/create">Coming Meeting Details</a></li>
    </ul>

@endsection