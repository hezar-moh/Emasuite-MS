<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $system = System::all();
        return view('system.index', compact('system'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('system.add'); // Assuming you have a create view for systems
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid().'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'upload/systems';
            $image->move(public_path($destinationPath), $imageName);
            $validated['image'] = $imageName;
        }
        System::create($validated);
        return redirect()->route('system.index')->with('success', 'System created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(System $system)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $system =System::find($id);
        return view('system.edit', compact('system'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
         $system =System::find($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid().'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'upload/systems';
            $image->move(public_path($destinationPath), $imageName);
            $validated['image'] = $imageName;
        }
        $system->update($validated);
        return redirect()->route('system.index')->with('success', 'System updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $systemId = System::find($id);
        $systemId->delete();
        return redirect()->route('system.index');

    }
}
