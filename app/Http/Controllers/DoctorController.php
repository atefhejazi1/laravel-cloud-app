<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Http\Requests\StoredoctorRequest;
use App\Http\Requests\UpdatedoctorRequest;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctor.allDoctors', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('doctor.addDoctor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new  Doctor;
        $doctor->first_name = $request->first_name;
        $doctor->last_name = $request->last_name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->doctor_password = $request->doctor_password;
        $doctor->save();

        return redirect('doctor/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::where('id', $id)->first();

        return view('doctor.editDoctor', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedoctorRequest  $request
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $doctor = Doctor::find($request->doctor_id);

        $doctor->first_name = $request->first_name;
        $doctor->last_name = $request->last_name;
        $doctor->phone = $request->phone;
        $doctor->doctor_password = $request->doctor_password;
        $doctor->save();

        return redirect('doctor/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        $doctor->delete();

        return redirect('doctor/all');
    }


    public function activate($id)
    {
        $doctor = Doctor::find($id);
        $data = [
            'title' =>'Activate Doctor',
            'body' => 'You are an Activate Doctor , Be Ready and Happy'
        ];

        Mail::to($doctor->email)->send(new TestMail($data));

        dd('Mail Send Successfully');

        // return $doctor;
        // return redirect('doctor/all');
    }
}
