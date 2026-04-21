<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\AppointmentStatus;


/*
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $date
 * @property string $time
 * @property string|null $message
 * @property AppointmentStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
*/

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
     /**
     * Cast attributes
     *
     * @var array
     */
    protected $casts = [
        'status' => AppointmentStatus::class,
    ];
}
