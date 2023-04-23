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

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $conference = Conference::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $conference->name = $validatedData['name'];
        $conference->description = $validatedData['description'];
        $conference->save();

        return redirect()->route('conferences.show', $conference->id);
    }

}
