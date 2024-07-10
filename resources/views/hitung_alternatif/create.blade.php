@extends('layouts.app')
  
@section('title', 'Hitung Nilai Alternatif')
  
@section('contents')
    <h1 class="mb-0">Add Alternatif</h1>
    <hr />
    <form action="{{ route('hitung_alternatif.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_asuransi" class="form-control" placeholder="Kode Asuransi">
            </div>
            <div class="col">
                <input type="text" name="nama_asuransi" class="form-control" placeholder="Nama Asuransi">
            </div>
            <div class="col">
                <input type="text" name="C1" class="form-control" placeholder="C1">
            </div>
            <div class="col">
                <input type="text" name="C2" class="form-control" placeholder="C2">
            </div>
            <div class="col">
                <input type="text" name="C3" class="form-control" placeholder="C3">
            </div>
            <div class="col">
                <input type="text" name="C4" class="form-control" placeholder="C4">
            </div>
            <div class="col">
                <input type="text" name="C5" class="form-control" placeholder="C5">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection