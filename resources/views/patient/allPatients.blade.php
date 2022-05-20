@extends('layouts.dashboard.adminDashboard')

@section('title')
All Patients
@endSection


@section('main-content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">full_name</th>
            <th scope="col">id_number</th>
            <th scope="col">doc_patient</th>
            <th scope="col">dis_patient</th>
            <th scope="col">app_patient</th>
            <th scope="col">Photo</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <th scope="row">{{ $patient->id}}</th>
            <td>{{ $patient->full_name}}</td>
            <td>{{ $patient->id_number}}</td>
            <td>{{ $patient->doctor->first_name}}</td>
            <td>{{ $patient->disease->disease_name}}</td>
            <td>{{ $patient->appointment->appointment_name}}</td>
            <td><img style="width:100px; height: 100px;" src={{ asset('images/patient_media/' . $patient->photo_patient )  }} alt=""></td>

            <td><a href={{ url( 'patient/delete/' . $patient->id )}} class="btn btn-danger">Delete</a></td>
            <td><a href={{ url( 'patient/edit/' . $patient->id )}} class="btn btn-warning">Update</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endSection