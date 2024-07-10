<?php

namespace App\Http\Controllers;

use App\Models\HitungAlternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = Kriteria::orderBy('created_at', 'DESC')->get();
        $sumbobot = Kriteria::sum('bobot');
        $normal = [];
    
        // Inisialisasi variabel untuk menghitung total normalisasi bobot
        $totalNormal = 0;
    
        // Hitung bobot normalisasi dengan pengecekan pembagian dengan nol
        foreach ($kriteria as $item) {
            if ($sumbobot != 0) {
                $bobotNormalisasi = $item->bobot / $sumbobot;
            } else {
                $bobotNormalisasi = 0;
            }
    
            $normal[] = [
                'id' => $item->id,
                'kode_kriteria' => $item->kode_kriteria,
                'nama_kriteria' => $item->nama_kriteria,
                'bobot' => $item->bobot,
                'normalisasi_bobot' => $bobotNormalisasi,
                'atribut' => $item->atribut,
            ];
        }
    
        // Menghitung vektor S
        $alternatif = HitungAlternatif::all(); // Ambil semua data alternatif
        $vektorS = [];
        $totalVektorS = 0; // Inisialisasi variabel untuk menghitung total vektor S
    
        foreach ($alternatif as $alt) {
            $s = 1; // Inisialisasi nilai S
            foreach ($normal as $norm) {
                // Ambil nilai alternatif berdasarkan kode kriteria
                $kodeKriteria = $norm['kode_kriteria'];
                $nilaiAlternatif = $alt->$kodeKriteria; // Menggunakan kolom dinamis
                if ($nilaiAlternatif && $nilaiAlternatif != 0) {
                    if ($norm['atribut'] == 'cost') {
                        // Jika atribut adalah cost, maka nilai S dikalikan dengan pembobotan yang negatif
                        $s *= pow($nilaiAlternatif, -$norm['normalisasi_bobot']);
                    } else {
                        // Jika atribut adalah benefit
                        $s *= pow($nilaiAlternatif, $norm['normalisasi_bobot']);
                    }
                }
            }
            $vektorS[] = [
                'id' => $alt->id,
                'kode_alternatif' => $alt->kode_asuransi,
                'nama_alternatif' => $alt->nama_asuransi,
                'vektor_s' => $s
            ];
    
            // Tambahkan nilai S ke total vektor S
            $totalVektorS += $s;

            


        }

            $vektorV = [];
            foreach ($vektorS as $vs) {
            $v = $vs['vektor_s'] / $totalVektorS; // Menghitung nilai vektor V
            $vektorV[] = [
                'id' => $vs['id'],
                'kode_asuransi' => $vs['kode_alternatif'],
                'nama_asuransi' => $vs['nama_alternatif'],
                'vektor_v' => $v
            ];
        }

        // Melakukan perangkingan berdasarkan nilai vektor V tertinggi
        usort($vektorV, function($a, $b) {
            return $b['vektor_v'] <=> $a['vektor_v'];
        });

        foreach ($vektorV as $key => $v) {
            $vektorV[$key]['ranking'] = $key + 1;
        }
        
        return view('kriteria.index', compact('kriteria', 'sumbobot', 'normal', 'totalNormal', 'vektorS', 'totalVektorS', 'vektorV'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kriteria::create($request->all());

        return redirect()->route('kriteria')->with('success', 'Product added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);

        return view('kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kriteria = Kriteria::findOrFail($id); 
        return view('kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_kriteria' => 'required|string|max:255',
            'nama_kriteria' => 'required|string|max:255',
            'bobot' => 'required|string|max:255',
            'atribut' => 'required|string|max:255',
        ]);
    
        $alternatif = Kriteria::findOrFail($id);
        $alternatif->update($request->all());
    
        return redirect()->route('kriteria.index')->with('success', 'Kriteria updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();

        return redirect()->route('kriteria.index')->with('success', 'kriteria deleted successfully');
    }

    
}
