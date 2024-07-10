
@extends('layouts.app')

@section('title', 'Nilai Alternatif')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Hitung Nilai Alternatif</h1>
        <div>
            <a href="{{ route('hitung_alternatif.create') }}" class="btn btn-primary" style="background-color: #0e1555">Add Nilai</a>
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
                <th>Kode Asuransi</th>
                <th>Nama Asuransi</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($hitungAlternatif->sortBy('hitung_alternatif') as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->kode_asuransi }}</td>
                    <td>{{ $data->nama_asuransi }}</td>
                    <td>{{ $data->C1 }}</td>
                    <td>{{ $data->C2 }}</td>
                    <td>{{ $data->C3 }}</td>
                    <td>{{ $data->C4 }}</td>
                    <td>{{ $data->C5 }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('hitung_alternatif.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('hitung_alternatif.destroy', $data->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
