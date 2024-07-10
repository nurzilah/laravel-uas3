<?php

namespace App\Http\Controllers;

use App\Models\HitungAlternatif;
use Illuminate\Http\Request;

class HitungAlternatifController extends Controller
{
    public function index()
    {
        $hitungAlternatif = HitungAlternatif::all(); // Example query, adjust as needed

        return view('hitung_alternatif.index', [
            'hitungAlternatif' => $hitungAlternatif
        ]);
    }

    public function create()
    {
        return view('hitung_alternatif.create');
    }

    public function store(Request $request)
    {
        HitungAlternatif::create($request->all());

        return redirect()->route('hitung_alternatif.create')->with('success', 'Product added succesfully');
    }

    public function edit( string $id)
    {
        $hitungAlternatif = HitungAlternatif::findOrFail($id); 
        return view('hitung_alternatif.edit', compact('hitungAlternatif'));
    }

    public function update(Request $request, $id)
    {
        
            $hitung_alternatif = HitungAlternatif::findOrFail($id);
            $hitung_alternatif->update($request->all());
        
            return redirect()->route('hitung_alternatif.index')->with('success', 'Nilai Alternatif updated successfully');
        
    }

    public function destroy(HitungAlternatif $hitung_alternatif)
    {
        $hitung_alternatif->delete();
        return redirect()->route('hitung_alternatif.index');
    }
}
