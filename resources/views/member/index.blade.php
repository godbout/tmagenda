@extends('layouts.master')

@section('title', 'Members List')

@section('content')

    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Phone</th>
                <th class="mdl-data-table__cell--non-numeric">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ $member->fullname }}</td>
                    <td class="mdl-data-table__cell--non-numeric">{{ $member->phone }}</td>
                    <td class="mdl-data-table__cell--non-numeric">{{ $member->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection