@extends('layouts.app')

@section('title', 'Kriteria')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Kriteria</h1>
        <div>
            <a href="{{ route('kriteria.create') }}" class="btn btn-primary" style="background-color: #0e1555">Add Kriteria</a>
            <button onclick="window.print()" class="btn btn-secondary">Print</button>
        </div>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="example1" class="table table-hover table-bordered">
        <thead class="table text-white" style="background-color: #0e1555">
            <tr>
                <th>No</th>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Atribut</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($kriteria->count() > 0)
                @foreach($kriteria as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->kode_kriteria }}</td>
                        <td class="align-middle">{{ $rs->nama_kriteria }}</td>
                        <td class="align-middle">{{ $rs->bobot }}</td>
                        <td class="align-middle btn text-white" style="background-color: #059212">{{ $rs->atribut }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kriteria.edit', $rs->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('kriteria.destroy', $rs->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Kriteria not found</td>
                </tr>
            @endif
        </tbody>
    </table>

<!-- Normalisasi bobot Kriteria-->
    <br>
    <br>
    <h1 class="mb-0"> Normalisasi bobot </h1>
    <table class="table table-hover table-bordered">
        <thead class="table text-white" style="background-color: #0e1555">
            <tr>
                <th>No</th>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Normal</th>
                <th>Pangkat</th>
            </tr>
        </thead>
        <tbody>
            @if($kriteria->count() > 0)
                @foreach($normal as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs['kode_kriteria'] }}</td>
                        <td class="align-middle">{{ $rs['nama_kriteria'] }}</td>
                        <td class="align-middle">{{ $rs['bobot'] }}</td>
                        <td class="align-middle">{{ $rs['normalisasi_bobot'] }}</td>
                        
                        <td class="align-middle">
                            @if ($rs['atribut'] === 'benefit')
                            {{ $rs['normalisasi_bobot'] }}
                            @else
                            {{ -($rs['normalisasi_bobot']) }}
                            
                            @endif
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Kriteria not found</td>
                </tr>
            @endif
        </tbody>
        <tfoot>
        <tr>
            <td  colspan="3">total</td>
            <td>{{ $sumbobot }}</td>
            <td>{{ $totalNormal }}</td>
        </tr>
        </tfoot>
    </table>

<!-- Menghitung Vektor S dan Menjumlahkan Vektor S -->
    <br>
    <br>
    <h1 class="mb-0"> Nilai Vektor S</h1>
    <table class="table table-hover table-bordered">
        <thead class="table text-white" style="background-color: #0e1555">
            <tr>
                <th>No</th>
                <th>Kode Asuransi</th>
                <th>Nama Asuransi</th>
                <th>Nilai Vektor S</th>
            </tr>
        </thead>
        <tbody>
            @if($kriteria->count() > 0)
            @foreach ($vektorS as $s)
            <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $s['kode_alternatif'] }}</td>
                        <td class="align-middle">{{ $s['nama_alternatif'] }}</td>
                        <td class="align-middle">{{ $s['vektor_s'] }}</td>
                    </tr>
            @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Kriteria not found</td>
                </tr>
            @endif
        </tbody>
        <tfoot>
        <tr>
            <td  colspan="3">total</td>
            <td>{{ $totalVektorS }}</td>
        </tr>
        </tfoot>
    </table>


<!-- Menghitung Nilai Vektor V & Perangkingan Vektor V -->
<br>
    <br>
    <h1 class="mb-0">Nilai Vektor V & Rangking Vektor V</h1>
    <table class="table table-hover table-bordered">
        <thead class="table text-white" style="background-color: #0e1555">
            <tr>
                <th>No</th>
                <th>Kode Asuransi</th>
                <th>Nama Asuransi</th>
                <th>Nilai Vektor V</th>
                <th>Rangking</th>
            </tr>
        </thead>
        <tbody>
            @if($kriteria->count() > 0)
            @foreach ($vektorV as $v)
            <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $v['kode_asuransi'] }}</td>
                        <td class="align-middle">{{ $v['nama_asuransi'] }}</td>
                        <td class="align-middle">{{ $v['vektor_v'] }}</td>
                        <td class="align-middle">{{ $v['ranking'] }}</td>
                    </tr>
            @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Kriteria not found</td>
                </tr>
            @endif
        </tbody>
        <tfoot>
        <tr>
        </tr>
        </tfoot>
    </table>

    



@endsection
