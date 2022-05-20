@extends('layouts.dashboard.adminDashboard')

@section('title')
Add New Appointment
@endSection


@section('main-content')

<form action={{ url('appointment/store') }} method="POST">
    @csrf

    <div class="mb-3">
        <input class="form-control form-control-sm" name="appointment_name" type="text" placeholder="Appointment Name">
    </div>
    <div class="mb-3">
        <input class="form-control form-control-sm" name="available_appointment_time" type="datetime-local" placeholder="Disease Name">
    </div>

    <div class="mb-3">
        <input class="form-control form-control-sm btn btn-primary" type="submit">
    </div>
</form>
@endSection