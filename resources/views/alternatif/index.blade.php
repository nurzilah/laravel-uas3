
@extends('layouts.app')

@section('title', 'Alternatif')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Alternatif</h1>
        <div>
            <a href="{{ route('alternatif.create') }}" class="btn btn-primary" style="background-color: #0e1555">Add Alternatif</a>
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
                <th>Kode Alternatif</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($alternatif->sortBy('kode_alternatif') as $rs)
                <tr>
                    <td class="align-middle">{{ $no++ }}</td>
                    <td class="align-middle">{{ $rs->kode_alternatif }}</td>
                    <td class="align-middle">{{ $rs->nama_alternatif }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('alternatif.edit', $rs->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('alternatif.destroy', $rs->id) }}" method="POST" style="display:inline;">
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
