<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;
    public function user(){
    return $this->belongsTo(User::class);
    }
    protected $fillable = [
    'name',
    'engine',
    'fuel',
    'year'
];
}
