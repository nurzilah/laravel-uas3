@extends('layouts.app')

@section('title', 'Edit Alternatif')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Nilai Alternatif</h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('hitung_alternatif.update', $hitungAlternatif->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_asuransi">Kode Asuransi</label>
            <input type="text" class="form-control" id="kode_asuransi" name="kode_asuransi" value="{{ $hitungAlternatif->kode_asuransi }}" required>
        </div>
        <div class="form-group">
            <label for="nama_asuransi">Nama Asuransi</label>
            <input type="text" class="form-control" id="nama_asuransi" name="nama_asuransi" value="{{ $hitungAlternatif->nama_asuransi }}" required>
        </div>
        <div class="form-group">
            <label for="C1">C1</label>
            <input type="text" class="form-control" id="C1" name="C1" value="{{ $hitungAlternatif->C1 }}" required>
        </div>
        <div class="form-group">
            <label for="C2">C2</label>
            <input type="text" class="form-control" id="C2" name="C2" value="{{ $hitungAlternatif->C2 }}" required>
        </div>
        <div class="form-group">
            <label for="C3">C3</label>
            <input type="text" class="form-control" id="C3" name="C3" value="{{ $hitungAlternatif->C3 }}" required>
        </div>
        <div class="form-group">
            <label for="C4">C4</label>
            <input type="text" class="form-control" id="C4" name="C4" value="{{ $hitungAlternatif->C4 }}" required>
        </div>
        <div class="form-group">
            <label for="C5">C5</label>
            <input type="text" class="form-control" id="C5" name="C5" value="{{ $hitungAlternatif->C5 }}" required>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #365E32">Update Alternatif</button>
        <a href="{{ route('alternatif.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
