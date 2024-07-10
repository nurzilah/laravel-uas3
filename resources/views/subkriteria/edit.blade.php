@extends('layouts.app')

@section('title', 'Edit SubKriteria')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit SubKriteria</h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('subkriteria.update', $subkriteria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_kriteria">Kode Kriteria</label>
            <input type="text" name="kode_kriteria" class="form-control" value="{{ $subkriteria->kode_kriteria }}" required>
        </div>
        <div class="form-group">
            <label for="nama_kriteria">Nama Kriteria</label>
            <input type="text" name="nama_kriteria" class="form-control" value="{{ $subkriteria->nama_kriteria }}" required>
        </div>
        <div class="form-group">
            <label for="nama_subkriteria">Nama SubKriteria</label>
            <input type="text" name="nama_subkriteria" class="form-control" value="{{ $subkriteria->nama_subkriteria }}" required>
        </div>
        <div class="form-group">
            <label for="bobot">Bobot</label>
            <input type="text" name="bobot" class="form-control" value="{{ $subkriteria->bobot }}" required>
        </div>
        <div class="form-group">
            <label for="atribut">Atribut</label>
            <input type="text" name="atribut" class="form-control" value="{{ $subkriteria->atribut }}" required>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #365E32">Update SubKriteria</button>
        <a href="{{ route('subkriteria.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
