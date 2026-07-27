<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use Illuminate\Http\Request;
use App\Models\Shelter;

class CatsController extends Controller
{
public function index()
    {
       $Cats= Cats::with('shelter')->orderBy('created_at', 'desc')->paginate(7);
        return view('cats.index', [ "cats" => $Cats]);
    }

    public function create()
    {
        $shelter = Shelter::all();
        return view('cats.create', ["shelter" => $shelter]);
    }

    public function show( string $name)
    {
        $Cats = Cats::with('shelter')->where('name', $name)->first();
        return view('cats.show', ["cats" => $Cats]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:30',
            'color' => 'required|string|max:255',
            'emotion' => 'nullable|string',
            'shelter_id' => 'required|exists:shelters,id'
        ]);

        Cats::create($validatedData);

        return redirect()->route('cats.index')->with('success', 'Cat created successfully.');
    }

    public function destroy(string $name)
    {
        $cat = Cats::where('name', $name)->firstOrFail();
        $cat->delete();

        return redirect()->route('cats.index')->with('success', 'Cat deleted successfully.');
    }

    public function edit(string $name)
    {
        $cat = Cats::where('name', $name)->firstOrFail();
        $shelters = Shelter::all();
        return view('cats.update', compact('cat', 'shelters'));
    }

    public function update(Request $request, string $name)
    {
        $cat = Cats::where('name', $name)->firstOrFail();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:30',
            'color' => 'required|string|max:255',
            'emotion' => 'nullable|string',
            'shelter_id' => 'required|exists:shelters,id'
        ]);

        $cat->update($validatedData);

        return redirect()->route('cats.show', ['name' => $cat->name])->with('success', 'Cat updated successfully.');
    }



}
