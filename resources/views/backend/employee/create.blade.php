@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Employee CREATE</h1>
@stop

@section('content')
    Please input form

    <form action="{{ route('admin.employee.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row g-3 align-items-center mt-2">
            <div class="col-3">
                <label class="col-form-label">Name</label>
            </div>
            <div class="col-3">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
        </div>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-3">
                <label class="col-form-label">Department_name</label>
            </div>
            <div class="col-3">
                <input type="text" name="department_name" class="form-control" value="{{ old('department_name') }}">
            </div>
        </div>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-3">
                <label class="col-form-label">Job</label>
            </div>
            <div class="col-3">
                <input type="text" name="job_title" class="form-control" value="{{ old('job_title') }}">
            </div>
        </div>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-3">
                <label class="col-form-label">Email</label>
            </div>
            <div class="col-3">
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
        </div>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-3">
                <label class="col-form-label">Role</label>
            </div>
            <div class="col-3">
                <select class="form-select" name="role">
                    <option selected value>none</option>
                    <option value="super_admin">system super admin</option>
                    <option value="admin">system admin</option>
                    <option value="management_admin">management admin</option>
                </select>
            </div>
        </div>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-3">
                <label class="col-form-label">Password</label>
            </div>
            <div class="col-3">
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>
        </div>

        <div class="row g-3 align-items-center mt-5">
            <div class="d-grid gap-2 d-md-flex justify-content-center">
                <button type="submit" class="btn btn-outline-primary">regist</button>
                <a type="button" class="btn btn-outline-secondary" href="{{ route('admin.employee.index')}}">cancel</a>
            </div>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
