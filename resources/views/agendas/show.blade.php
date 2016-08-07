@extends('layouts.master')

@section('title', 'Agendas List')

@section('content')
    

    <table class="mdl-data-table mdl-js-data-table">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">TIME</th>
                <th class="mdl-data-table__cell--non-numeric">WHAT</th>
                <th>WHO</th>
                <th>LIMIT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ $agenda->time }}</td>
                <td class="mdl-data-table__cell--non-numeric">Call to Order</td>
                <td>Everyone</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ $agenda->time }}</td>
                <td class="mdl-data-table__cell--non-numeric">Opening Remarks</td>
                <td>{{ $agenda->opening->fullname }}</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ $agenda->time }}</td>
                <td class="mdl-data-table__cell--non-numeric">Welcome Guests</td>
                <td>{{ $agenda->welcome }}</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ $agenda->time }}</td>
                <td class="mdl-data-table__cell--non-numeric">Toastmaster of the Evening</td>
                <td>{{ $agenda->tme }}</td>
                <td>1</td>
            </tr>

            
        </tbody>
    </table>

    <h1>{{ $agenda->date->format('dS \of F Y') }}</h1>

    
@endsection