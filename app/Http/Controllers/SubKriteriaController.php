<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubKriteria;

class SubKriteriaController extends Controller
{

public function index()
{
        // Fetch all subkriteria
        $subkriteria = SubKriteria::all();

        // Custom order of criteria names
        $orderedCriteria = ['usia', 'manfaat', 'kegunaan', 'masa pertanggungan', 'cara bayar'];

        // Sort the subkriteria based on the custom order
        $subkriteria = $subkriteria->sortBy(function($item) use ($orderedCriteria) {
            return array_search(strtolower($item->nama_kriteria), $orderedCriteria);
        });

        return view('subkriteria.index', compact('subkriteria'));
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    return view('subkriteria.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    SubKriteria::create($request->all());

    return redirect()->route('subkriteria.index')->with('success', 'SubKriteria added successfully');
}
/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $subkriteria = SubKriteria::findOrFail($id);

    return view('subkriteria.show', compact('subkriteria'));
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    $subkriteria = SubKriteria::findOrFail($id);

    return view('subkriteria.edit', compact('subkriteria'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $request->validate([
        'kode_kriteria' => 'required|string|max:255',
        'nama_kriteria' => 'required|string|max:255',
        'nama_subkriteria' => 'required|string|max:255',
        'bobot' => 'required|string|max:255',
        'atribut' => 'required|string|max:255',
    ]);

    $subkriteria = SubKriteria::findOrFail($id);
    $subkriteria->update($request->all());

    return redirect()->route('subkriteria.index')->with('success', 'SubKriteria updated successfully');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $subkriteria = SubKriteria::findOrFail($id);
    $subkriteria->delete();

    return redirect()->route('subkriteria.index')->with('success', 'SubKriteria deleted successfully');
}

}