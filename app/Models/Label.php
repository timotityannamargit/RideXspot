<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/*
 * @property int $id
 * @property int $service_id
 * @property string $content
 * @property string|null $sub_content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @property Service $service 
*/


class Label extends Model
{
    /**
     * All fields inside the $guarded array are not mass-assignable
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the service that owns the label.
     */
    public function service() 
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
