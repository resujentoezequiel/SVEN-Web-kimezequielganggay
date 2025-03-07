<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentModel extends Model
{
    use HasFactory;

    protected $table = "appointment_models";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'customer_name',
        'appointment_date',
        'appointment_time',
        'notes',
        'created_at',
        'updated_at',
    ];
}
