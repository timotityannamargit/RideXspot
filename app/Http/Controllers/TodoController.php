<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoResource;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        return Todo::all();
    }

    public function show(Todo $todo){
        return new TodoResource($todo);
    }
}
