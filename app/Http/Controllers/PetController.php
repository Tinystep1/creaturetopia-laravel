<?php

namespace App\Http\Controllers;

use App\Models\pet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pets = Pet::all();

        return view('pets.index')->with('pets', $pets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        Pet::create($request->all());

        return redirect()->route('pets.index')->with('success', 'Pet created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(pet $pet): View
    {
        return view('pets.show',compact('pets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pet $pet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pet $pet)
    {
        //
    }
}
