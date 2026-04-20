<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
 * @property int $id 
 * @property string $img
 * @property string $model
 * @property int $motor_cc
 * @property string $motor_type
 * @property int $horsepower
 * @property int $torque
 * @property int $year
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
*/

class Car extends Model
{
  /**
     * All fields inside the $guarded array are not mass-assignable
     *
     * @var array
     */
    protected $guarded = ['id'];
}
