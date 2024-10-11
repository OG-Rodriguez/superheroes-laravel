<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superhero; 
class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // SuperheroController.php
public function index() {
    $superheroes = Superhero::all();
    return view('superheroes.index', compact('superheroes'));
}

public function create() {
    return view('superheroes.create');
}

public function store(Request $request) {
    $validated = $request->validate([
        'real_name' => 'required',
        'superhero_name' => 'required',
        'super_powers' => 'required',
    ]);
    
    Superhero::create($validated);
    return redirect()->route('superheroes.index')->with('success', 'Superhero created successfully!');
}

public function show(Superhero $superhero) {
    return view('superheroes.show', compact('superhero'));
}

public function edit(Superhero $superhero) {
    return view('superheroes.edit', compact('superhero'));
}

public function update(Request $request, Superhero $superhero) {
    $validated = $request->validate([
        'real_name' => 'required',
        'superhero_name' => 'required',
        'super_powers' => 'required',
    ]);
    
    $superhero->update($validated);
    return redirect()->route('superheroes.index')->with('success', 'Superhero updated successfully!');
}

public function destroy(Superhero $superhero) {
    $superhero->delete();
    return redirect()->route('superheroes.index')->with('success', 'Superhero deleted successfully!');
}
}