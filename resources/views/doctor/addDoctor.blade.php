@extends('layouts.dashboard.adminDashboard')

@section('title')
Add New Doctor
@endSection


@section('main-content')

<form action={{ url('doctor/store') }} method="POST">
    @csrf

    <div class="mb-3">
        <input class="form-control form-control-sm" name="first_name" type="text" placeholder="First Name">
    </div>
    <div class="mb-3">
        <input class="form-control form-control-sm" name="last_name" type="text" placeholder="Last Name">
    </div>
    <div class="mb-3">
        <input class="form-control form-control-sm" name="email" type="text" placeholder="Email">
    </div>
    <div class="mb-3">
        <input class="form-control form-control-sm" name="phone" type="text" placeholder="Phone">
    </div>

    <div class="mb-3">
        <input class="form-control form-control-sm" name="doctor_password" type="password" placeholder="Doctor Password">
    </div>

    <div class="mb-3">
        <input class="form-control form-control-sm btn btn-primary" type="submit">
    </div>
</form>
@endSection