<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #0f0a3c" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="">
          <img src="{{ asset('https://themewagon.github.io/insure/img/icon/icon-02-primary.png') }}" alt="Jiwasraya Asuransi Logo" >
        </i>
      </div>
      <div class="sidebar-brand-text mx-3">Jiwasraya Asuransi</div>
    </a>

    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-user"></i>
        <span>Profile</span></a>
    </li>
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-chart-line"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('alternatif') }}">
        <i class="fas fa-list-alt"></i>
        <span>Alternatif</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('subkriteria') }}">
        <i class="fas fa-th-list"></i>
        <span>SubKriteria</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('hitung_alternatif.index') }}">
        <i class="fas fa-calculator"></i>
        <span>Nilai Alternatif</span>
    </a>
    </li>
 
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kriteria') }}">
        <i class="fas fa-clipboard-list"></i>
        <span>Kriteria & Perhitungan WP</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>    

  </ul>