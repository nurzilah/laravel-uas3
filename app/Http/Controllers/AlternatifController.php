<?php

namespace App\Http\Controllers;


use App\Models\Alternatif;
use Illuminate\Http\Request;


class AlternatifController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatif = Alternatif::orderBy('created_at', 'DESC')->get();

        return view('alternatif.index', compact('alternatif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alternatif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alternatif::create($request->all());

        return redirect()->route('alternatif')->with('success', 'Product added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alternatif = Alternatif::findOrFail($id);

        return view('alternatif.show', compact('alternatif'));
    }


    public function edit(Alternatif $alternatif)
{

    return view('alternatif.edit', compact('alternatif'));
}


public function destroy(string $id)
{
    $alternatif = Alternatif::findOrFail($id);
    $alternatif->delete();

    return redirect()->route('alternatif.index')->with('success', 'alternatif deleted successfully');
}

public function update(Request $request, $id)
{
        $request->validate([
            'kode_alternatif' => 'required|string|max:255',
            'nama_alternatif' => 'required|string|max:255',
        ]);

        $alternatif = Alternatif::findOrFail($id);
        $alternatif->update($request->all());

        return redirect()->route('alternatif.index')->with('success', 'Alternatif updated successfully');
}

}