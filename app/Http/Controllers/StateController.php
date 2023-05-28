<?php

namespace App\Http\Controllers;
use App\Models\States;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public static function GetStateList()
    {
        return States::all();
    }
}
