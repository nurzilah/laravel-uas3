@extends('layouts.app')

@section('title', 'Dashboard - SPK Pemilihan Asuransi Jiwasraya')

@section('contents')

    <div class="row mb-4">
        <div class="col-12">
            <div class="text-center">
                <img src="https://themewagon.github.io/insure/img/carousel-2.jpg" class="img-fluid rounded" alt="Insurance Image" style="width: 100%; max-width: 600px; height: auto;">
            </div>
        </div>
    </div>
    <div class="row mb-4 text-center">
        <div class="col">
            <button id="date-btn" class="btn btn-primary btn-lg">Loading Date...</button>
        </div>
        <div class="col">
            <button id="time-btn" class="btn btn-secondary btn-lg">Loading Time...</button>
        </div>
    </div>
    
    <div class="col-md-12">
        <p class="lead">
            Sistem ini dibangun untuk membantu calon nasabah dalam memahami asuransi agar dapat memilih asuransi sesuai kebutuhan. Sistem Pendukung Keputusan (SPK) ini menggunakan metode Weighted Product (WP).
        </p>
        <h4>Langkah-langkah perhitungan menggunakan metode WP yaitu:</h4>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item">Menentukan alternatif dan kriteria</li>
            <li class="list-group-item">Menentukan Bobot kriteria</li>
            <li class="list-group-item">Melakukan normalisasi bobot kriteria</li>
            <li class="list-group-item">Menghitung nilai Vektor S</li>
            <li class="list-group-item">Menghitung nilai Vektor V</li>
            <li class="list-group-item">Menentukan rangking nilai Vektor V</li>
        </ol>
    </div>

    <div class="container insurance-cards mt-5" id="about">
        <h2 class="text-center mb-4">Jenis-jenis Asuransi</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Js Prestasi</h5>
                        <p class="card-text">Cocok untuk: Orang tua yang ingin memastikan biaya pendidikan anak tersedia tanpa harus bergantung sepenuhnya pada tabungan atau penghasilan di masa depan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Js Personal Accident Plan B</h5>
                        <p class="card-text">Cocok untuk: Individu yang bekerja di lingkungan berisiko tinggi atau yang ingin memastikan keluarga mereka mendapat perlindungan finansial jika terjadi kecelakaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Js Pro Mapan</h5>
                        <p class="card-text">Cocok untuk: Orang yang mencari perlindungan jiwa jangka panjang dengan manfaat tambahan berupa pengembalian dana atau keuntungan investasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Js Optima Assurance</h5>
                        <p class="card-text">Cocok untuk: Orang yang ingin kombinasi antara perlindungan jiwa dan investasi untuk perencanaan masa depan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Js Dana Multi Proteksi Plus</h5>
                        <p class="card-text">Cocok untuk: Individu atau keluarga yang membutuhkan perlindungan menyeluruh dari berbagai risiko sekaligus memiliki elemen investasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Js Saving Plan</h5>
                        <p class="card-text">Cocok untuk: Individu yang ingin disiplin dalam menabung dengan manfaat tambahan perlindungan jiwa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Js Siharta</h5>
                        <p class="card-text">Cocok untuk: Semua individu yang ingin memastikan biaya perawatan medis mereka terjamin tanpa mengganggu tabungan pribadi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Catur Karsa</h5>
                        <p class="card-text">Cocok untuk: Individu atau keluarga yang menginginkan satu paket asuransi dengan berbagai manfaat perlindungan dan investasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
