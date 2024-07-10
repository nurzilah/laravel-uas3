@extends('layouts.app')

@section('title', 'Edit Kriteria')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Kriteria</h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_kriteria">Kode Kriteria</label>
            <input type="text" name="kode_kriteria" class="form-control" value="{{ $kriteria->kode_kriteria }}" required>
        </div>
        <div class="form-group">
            <label for="nama_kriteria">Nama Kriteria</label>
            <input type="text" name="nama_kriteria" class="form-control" value="{{ $kriteria->nama_kriteria }}" required>
        </div>
        <div class="form-group">
            <label for="bobot">Bobot</label>
            <input type="text" name="bobot" class="form-control" value="{{ $kriteria->bobot }}" required>
        </div>
        <div class="form-group">
            <label for="atribut">Atribut</label>
            <input type="text" name="atribut" class="form-control" value="{{ $kriteria->atribut }}" required>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #365E32">Update Kriteria</button>
        <a href="{{ route('kriteria.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
