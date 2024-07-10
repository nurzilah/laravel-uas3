<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jiwasraya Asuransi - SPK Pemilihan Produk Asuransi Jiwasraya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
            position:fixed;
            top: 0;
            width: 100%;
            z-index: 1000; /* Agar navbar selalu berada di atas elemen lainnya */
            font-weight: bold;
        }
        .jumbotron {
            background: url('https://themewagon.github.io/insure/img/carousel-2.jpg') no-repeat center center;
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            flex-direction: column; /* Menyusun elemen secara vertikal */
            justify-content: center;
            align-items: center;
            text-align: center;
            color: navy; /* Menyesuaikan warna teks */
            
        }

        .jumbotron h1 {
            text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
        }
        
        .jumbotron p {
            text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
        }

        .social-icons a {
            margin: 0 10px;
            color: #495057;
            font-size: 1.5rem;
        }
        .insurance-cards {
            margin-top: 20px;
        }
        .card {
            margin: 15px 0;
        }
        .faq-content {
            margin-top: 40px;
        }
        footer {
            background-color: grey;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        }

        .nav-item .btn {
        margin: 0 10px; /* Menambahkan margin kiri dan kanan sebesar 10px */
        background-color: navy; /* Mengubah warna latar belakang tombol menjadi navy */
        color: white; /* Mengubah warna teks tombol menjadi putih */
        border-color: navy; /* Mengubah warna border tombol menjadi navy */
        font-size: 0.925rem; /* Ukuran font lebih kecil, setara dengan 14px */
        font-weight: bold; /* Membuat teks tombol menjadi tebal (bold) */
        }

        .nav-itemi .btn {
        margin: 0 10px; /* Menambahkan margin kiri dan kanan sebesar 10px */
        background-color: green; /* Mengubah warna latar belakang tombol menjadi navy */
        color: white; /* Mengubah warna teks tombol menjadi putih */
        border-color: navy; /* Mengubah warna border tombol menjadi navy */
        font-size: 0.925rem; /* Ukuran font lebih kecil, setara dengan 14px */
        font-weight: bold; /* Membuat teks tombol menjadi tebal (bold) */
        }


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('https://themewagon.github.io/insure/img/icon/icon-02-primary.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        <a class="navbar-brand" href="#"> Jiwasraya Asuransi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-primary btn-lg" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-lg" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-lg" href="#faqAccordion">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-lg" href="#Contact">Contact Me</a>
                </li>
                <li class="nav-itemi">
                    <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-itemi">
                    <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
     <br>
     <br>
    <div id="home" class="jumbotron text-center">
        <h1 class="display-4">Welcome to Jiwasraya Asuransi</strong></h1>
        <p class="lead">SPK Pemilihan Produk Asuransi Jiwasraya dengan Metode WP</strong></p>
        <li class="nav-item">
    </div>

    <!-- About Asuransi -->
     <br>
     <br>
    <div class="container insurance-cards" id="about">
        <h2 class="text-center">About Asuransi</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Js Prestasi</h5>
                        <p class="card-text">Cocok untuk: Orang tua yang ingin memastikan biaya pendidikan anak tersedia tanpa harus bergantung sepenuhnya pada tabungan atau penghasilan di masa depan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Js Personal Accident Plan B</h5>
                        <p class="card-text">Cocok untuk: Individu yang bekerja di lingkungan berisiko tinggi atau yang ingin memastikan keluarga mereka mendapat perlindungan finansial jika terjadi kecelakaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Js Pro Mapan</h5>
                        <p class="card-text">Cocok untuk: Orang yang mencari perlindungan jiwa jangka panjang dengan manfaat tambahan berupa pengembalian dana atau keuntungan investasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Js Optima Assurance</h5>
                        <p class="card-text">Cocok untuk: Orang yang ingin kombinasi antara perlindungan jiwa dan investasi untuk perencanaan masa depan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Js Dana Multi Proteksi Plus</h5>
                        <p class="card-text">Cocok untuk: Individu atau keluarga yang membutuhkan perlindungan menyeluruh dari berbagai risiko sekaligus memiliki elemen investasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Js Saving Plan</h5>
                        <p class="card-text">Cocok untuk: Individu yang ingin disiplin dalam menabung dengan manfaat tambahan perlindungan jiwa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Js Siharta</h5>
                        <p class="card-text">Cocok untuk: Semua individu yang ingin memastikan biaya perawatan medis mereka terjamin tanpa mengganggu tabungan pribadi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Catur Karsa</h5>
                        <p class="card-text">Cocok untuk: Individu atau keluarga yang menginginkan satu paket asuransi dengan berbagai manfaat perlindungan dan investasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <br>
    <br>
    <div class="container faq-content">
        <h2 class="text-center">FAQ - Sistem Pendukung Keputusan (SPK) dan Metode Weighted Product (WP)</h2>
        <div class="accordion" id="faqAccordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apa itu Sistem Pendukung Keputusan (SPK)?
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        SPK adalah sistem berbasis komputer yang membantu dalam proses pengambilan keputusan dengan menganalisis data dan menyajikan informasi yang berguna bagi para pengambil keputusan. SPK memadukan data, model analitis, dan perangkat lunak untuk membantu dalam pengambilan keputusan yang lebih baik dan cepat.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apa tujuan utama dari SPK?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        Tujuan utama SPK adalah membantu para pengambil keputusan dalam menghadapi masalah yang kompleks dan tidak terstruktur dengan menyediakan informasi yang relevan, analisis data, dan berbagai alternatif solusi yang bisa dipertimbangkan.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Bagaimana cara kerja SPK?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="card-body">
                        SPK bekerja dengan mengumpulkan data dari berbagai sumber, mengolah data tersebut menggunakan model analitis dan algoritma tertentu, serta menyajikan hasil analisis dalam bentuk yang mudah dipahami seperti laporan, grafik, atau rekomendasi keputusan.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Apa saja komponen utama dari SPK?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                    <div class="card-body">
                        Komponen utama SPK meliputi:
                        <ul>
                            <li>Basis Data: Kumpulan data yang relevan untuk pengambilan keputusan.</li>
                            <li>Basis Model: Kumpulan model analitis dan algoritma yang digunakan untuk mengolah data.</li>
                            <li>Antarmuka Pengguna: Komponen yang memungkinkan pengguna berinteraksi dengan sistem, memasukkan data, dan menerima hasil analisis.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Apa itu metode Weighted Product (WP)?
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                    <div class="card-body">
                        Metode Weighted Product (WP) adalah salah satu teknik pengambilan keputusan multi-kriteria yang menggunakan perkalian untuk menghubungkan kriteria dengan alternatif yang ada. Setiap kriteria diberi bobot sesuai dengan tingkat kepentingannya, dan nilai alternatif untuk setiap kriteria dipangkatkan dengan bobot yang bersesuaian.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Bagaimana cara kerja metode WP?
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
                    <div class="card-body">
                        Cara kerja metode WP adalah dengan:
                        <ul>
                            <li>Normalisasi Matriks Keputusan: Nilai kriteria dinormalisasi untuk memastikan semua nilai berada dalam skala yang sama.</li>
                            <li>Menghitung Vektor S (S_i): Vektor S dihitung dengan mengalikan semua nilai atribut yang sudah dipangkatkan dengan bobotnya masing-masing.</li>
                            <li>Menghitung Vektor V (V_i): Vektor V dihitung dengan cara membagi nilai S_i dengan total dari semua nilai S.</li>
                            <li>Menentukan Peringkat Alternatif: Alternatif dengan nilai V_i tertinggi dianggap sebagai alternatif terbaik.</li>
                        </ul>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Social Media Buttons -->
    <div class="container text-center" id="Contact">
        <h2>Contact Me on Social Media</h2>
        <div class="social-icons">
            <a href="https://www.facebook.com/nurzilah.hidayati.5?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/nurzilah-hidayati-78175a244?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com/@nurzilahhidayati3127/videos" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/n.rzilaaa?ig_sh=MTQ5NWc2bGUyYXVoOQ==" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Jiwasraya Asuransi. All Rights Reserved.</p>
            <p>Website by: Nurzilah Hidayati (22090155) - 4C</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
