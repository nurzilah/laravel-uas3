@extends('layouts.app')

@section('title', 'Edit Alternatif')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Alternatif</h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_alternatif">Kode Alternatif</label>
            <input type="text" name="kode_alternatif" class="form-control" value="{{ $alternatif->kode_alternatif }}" required>
        </div>
        <div class="form-group">
            <label for="nama_alternatif">Nama Alternatif</label>
            <input type="text" name="nama_alternatif" class="form-control" value="{{ $alternatif->nama_alternatif }}" required>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #365E32">Update Alternatif</button>
        <a href="{{ route('alternatif.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
