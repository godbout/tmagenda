@extends('layouts.master')

@section('title', 'Agendas List')

@section('content')
    <h1>
        @if (count($agendas) === 0)
            No agendas yet!
        @else
            List of recorded agendas

            <ul>
                @foreach ($agendas as $agenda)
                    <li><a href="{{ route('agendas.show', [$agenda->id]) }}">{{ $agenda->date->format('dS \of F Y') }}</a></li>
                @endforeach
            </ul>
        @endif
    </h1>
@endsection