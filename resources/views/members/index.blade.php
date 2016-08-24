@extends('layouts.master')

@section('title', 'Members List')

@section('content')

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->fullname }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection