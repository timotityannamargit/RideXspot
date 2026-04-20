<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;
      /**
     * All fields inside the $guarded array are not mass-assignable
     *
     * @var array
     */
    protected $guarded = ['id'];
    protected $table = 'appointments';
}
