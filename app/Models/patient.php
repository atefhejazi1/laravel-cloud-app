<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;


    protected $table = "patients";

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, "doc_patient");
    }

    public function disease()
    {
        return $this->belongsTo(Disease::class, "dis_patient");
    }


    public function appointment()
    {
        return $this->belongsTo(Appointment::class, "app_patient");
    }
}
