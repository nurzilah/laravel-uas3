@extends('layouts.app')

@section('title', 'Subkriteria')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Subkriteria</h1>
        <div>
            <a href="{{ route('subkriteria.create') }}" class="btn btn-primary" style="background-color: #0e1555">Add SubKriteria</a>
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
                <th>Nama SubKriteria</th>
                <th>Bobot</th>
                <th>Atribut</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($subkriteria->count() > 0)
                @foreach($subkriteria as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->kode_kriteria }}</td>
                        <td class="align-middle">{{ $rs->nama_kriteria }}</td>
                        <td class="align-middle">{{ $rs->nama_subkriteria }}</td>
                        <td class="align-middle">{{ $rs->bobot }}</td>
                        <td class="align-middle btn text-white" style="background-color: #059212">{{ $rs->atribut }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('subkriteria.edit', $rs->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('subkriteria.destroy', $rs->id) }}" method="POST" style="display:inline;">
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
                    <td class="text-center" colspan="7">SubKriteria not found</td>
                </tr>
            @endif
        </tbody>
    </table>


@endsection
