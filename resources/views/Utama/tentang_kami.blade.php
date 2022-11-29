@extends('utama.master')

@section ('head')

<title>BPR Guna Yatra - Tentang Kami</title>
<!-- Bootstrap core CSS -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Fontawesome CSS -->
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet">
<!-- Owl Carousel CSS -->
<link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@endsection

@section ('menu')
<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route('beranda')}}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link active" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Tentang Kami<i class="fas fa-sort-down"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{route('tentang_kami')}}">Profil Guna Yatra</a>
                <a class="dropdown-item" href="{{route('tinjauan_keuangan')}}">Tinjauan Keuangan</a>
                <a class="dropdown-item" href="{{route('annual_report')}}">Annual Report</a>
                <a class="dropdown-item" href="{{route('gcg')}}">Good Corporate Governance</a>
                <a class="dropdown-item" href="{{route('pengaduan')}}">Mekanisme Pengaduan Nasabah</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('berita')}}">Berita</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Simpanan <i class="fas fa-sort-down"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{route('tabungan')}}">Tabungan</a>
                <a class="dropdown-item" href="{{route('deposito_berjangka')}}">Deposito Berjangka</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Pinjaman <i class="fas fa-sort-down"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{route('modal_kerja')}}">Kredit Modal Kerja</a>
                <a class="dropdown-item" href="{{route('konsumsi')}}">Kredit Konsumsi</a>
                <a class="dropdown-item" href="{{route('investasi')}}">Kredit Investasi</a>
                <a class="dropdown-item" href="{{route('multiguna')}}">Kredit Multiguna</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('kontak_kami')}}">Kontak Kami</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('lowongan_kerja')}}">Karir</a>
        </li>

    </ul>
</div>
@endsection

@section ('konten')
<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"> Tentang Kami</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active"> Profil Guna Yatra </li>
            </ol>
        </div>
    </div>
</div>

<div class="container">
    <!-- About Content -->
    <div class="about-main">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="{{asset('assets/images/bpr_gy.jpeg')}}" alt="" />
            </div>
            <div class="col-lg-6">
                <h2>Sejarah BPR Guna Yatra</h2>
                <p>PT. Bank Perkreditan Guna Yatra didirikan berdasarkan Akte Notaris Sugijanto, SH.
                    di Surabaya nomer 1 tanggal 2 Juli 1973 dengan nama PT. Bank Pasar Guna Yatra.
                    Akte tersebut termasuk pada Keputusan Mentri Kehakiman Republik Indonesia
                    tanggal 7 Mei 1976 dengan nomer Y.A.5/244/5.</p>
                <p>Perubahan Anggaran Dasar Perseroan diperbaharui dengan Akte Notaris Sugijanto, SH.
                    di Surabaya nomer 47 tanggal 5 Maret 1998 PT. Bank Pasar Guna Yatra berubah nama menjadi
                    PT. Bank Perkreditan Rakyat Guna Yatra sesuai dengan Akte Notaris Sugijanto, SH.
                    di Surabaya nomer 40 tanggal 17 Desember 1998 PT. Bank Perkreditan Rakyat Guna Yatra berkedudukan
                    di jalan Kebonrojo No. 8 Surabaya. 
                    Perubahan anggaran dasar yang terakhir Sesuai Akte Notaris Tri Avianti 
                    Merpatiningsih, SH Notaris di Kota Surabaya Nomor 66 Tanggal 28 April 2020 </p>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
<div class="about-inner">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6">
                <div class="left-ab">
                    <h3>Visi & Misi BPR Guna Yatra</h3>
                    <p>Visi</p>
                    <ul>
                        <li>Menjadi Bank Perkreditan Rakyat yang tangguh, sehat dan terpecaya
                            oleh Masyarakat Jawa Timur</li>
                    </ul>
                    <p>Misi</p>
                    <ul>
                        <li>Memajukkan perekonomian daerah melalui distribusi kredit Usaha Mikro, Kecil
                            dan Menengah (UMKM) untuk mengoptimalkan keuntungan pemegang saham</li>
                        <li>Menumbuhkan kepercayaan dan kepuasan nasabah melalui penerapan sistem kredit
                            dan suku bunga yang rasional serta kualitas pelayanan prima yang bersifat
                            kekeluargaan</li>
                        <li>Senantiasa meningkatkan kualitas pelayanan melalui kesejahteraan karyawan
                            dan penyediaan tenaga kerja yang profesional</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-ab">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/images/mission-img.jpg')}}" alt="" />
                </div>
            </div>
        </div>
        
    </div>
</div>



@endsection

@section ('script')
<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection
