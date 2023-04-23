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

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Conference::create($request->all());

        return redirect()->route('conferences.index');
    }

}
