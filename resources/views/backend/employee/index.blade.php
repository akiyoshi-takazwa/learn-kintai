@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Employee Index</h1>
@stop

@section('content')

    <a href="{{ route('admin.employee.create')}}">
        <button style="border: 1px solid; margin-bottom:20px; color: #2e93ff">CREATE</button>
    </a>

        <table border="1">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->profile->name }}</td>
                <td>{{ $employee->email }}</td>
                <td><a href="{{ route('admin.employee.edit', ['employee' => $employee->id])}}">
                        EDIT
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
