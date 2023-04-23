<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conference;
class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('home', compact('conferences'));
    }
}
