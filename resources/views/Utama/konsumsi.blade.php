@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Kredit Konsumsi</title>
<!-- Bootstrap core CSS -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Fontawesome CSS -->
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!-- Ajax CRUD -->
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection

@section('menu')
<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route('beranda')}}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
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
            <a class="nav-link active" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true"
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

@section('konten')
<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"> Kredit Konsumsi </h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('pinjaman')}}">Pinjaman</a>
                </li>
                <li class="breadcrumb-item active">Kredit Konsumsi</li>
            </ol>
        </div>
    </div>
</div>

<div class="item-pro">
    <div class="container">
        <!-- Konsumsi Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{asset('assets/images/konsumsi.jpg')}}" alt="" />
            </div>
            <div class="col-md-4">
                <h3 class="my-3">Apa itu pinjaman konsumsi?</h3>
                <p> Pinjaman Konsumsi merupakan kredit yang diberikan untuk memperoleh barang atau jasa guna memenuhi
                    kebutuhan primer, sekunder dan tersier.</p>
                <h3 class="my-3">Pinjaman Konsumsi BPR Guna Yatra</h3>
                <p>Pinjaman Konsumsi di BPR Guna Yatra – Wujudkan segala impian yang Anda miliki dengan kredit konsumsi bersama BPR Guna Yatra dengan aman, mudah, dan cepat </p>
                <button type="button" name="create_deposito" id="create_deposito" class="btn btn-success btn-sm">Ajukan
                    Kredit Konsumsi </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3> 1. Keunggulan</h3>
                <ul> <i class="fas fa-clipboard-check"></i> Syarat Mudah & Fleksibel
                    <li> Persyaratan mudah dan tidak berbelit-belit untuk mendapatkan persetujuan kredit</li>
                </ul>
                <ul> <i class="fas fa-shield-alt"></i> Aman & Terpercaya
                    <li>Dikelola oleh tim profesional, terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK).</li>
                </ul>
                <ul><i class="fas fa-hands-helping"></i> Kemudahan Pelayanan
                    <li>Layanan ditempat dimanapun Anda berada.</li>
                </ul>
            </div>
            <div class="col-lg-12">
                <h3> 2. Fitur</h3>
                <ul>
                    <li> 1) Suku bunga kredit kompetitif dengan bank lainnya </li>
                    <li> 2) Jangka waktu kredit maksimal 1 tahun sejak akad (bisa diperpanjang)</li>
                    <li> 3) Plafon kredit hingga Rp 1 Milyar</li>
                    <li> 4) Presentase Pembiayaan (Loan to Value) hingga 60% dari nilai agunan berdasarkan penilaian
                        bank </li>
                    <li> 5) Agunan:</li>
                    <li> &nbsp;&nbsp;&nbsp; a. SHM (Sertifikat Hak Milik)/SHGB (Sertifikat Hak Guna Bangunan) untuk
                        rumah, apartemen, ruko, rukan, atau tanah kosong untuk dibangun
                    <li> &nbsp;&nbsp;&nbsp; b. BPKB Kendaraan (sebagai agunan tambahan)</li>
                    <li> &nbsp;&nbsp;&nbsp; c. Bebas biaya appraisal untuk kredit plafon < Rp. 300 juta</li> <li> 6)
                            Sistem pembayaran:</li>
                    <li> &nbsp;&nbsp;&nbsp; a. Bayar bunga saat tanggal ulangan bulanan dan bayar pokok saat jatuh tempo
                    </li>
                    <li> &nbsp;&nbsp;&nbsp; b. Fasilitas pembayaran angsuran lewat autodebet </li>
                    <li> 7) Fasilitas Take-over: Pengambilalihan KPR/kredit dari bank lain, dengan maksimum limit kredit
                        sebesar outstanding (sisa pinjaman) terakhir di bank asal atau limit kredit baru sesuai
                        perhitungan BPR Guna Yatra. Jika jumlahnya lebih besar dari outstanding terakhir di bank asal,
                        Anda bisa memanfaatkannya untuk memenuhi berbagai kebutuhan lain.</li>
                    <li> 8) Fasilitas Top-up: Penambahan limit kredit yang telah berjalan di BPR Guna Yatra. Dengan
                        tambahan limit kredit, Anda dapat memenuhi beragam kebutuhan lain</li>
                    <li> 9) Perlindungan asuransi jiwa dan kebakaran</li>
                </ul>
            </div>
            <div class="col-lg-12">
                <h3> 3. Syarat & Ketentuan</h3>
                <ul> 1) Jenis nasabah sebagai:
                    <li> &nbsp;&nbsp;&nbsp;a. Karyawan tetap (usia 21 – 60 tahun s/d jatuh tempo kredit).</li>
                    <li> &nbsp;&nbsp;&nbsp;b. Wiraswasta (usia 21 – 60 tahun s/d jatuh tempo kredit).</li>
                    <li> &nbsp;&nbsp;&nbsp;c. Badan Usaha PD/UD, CV (usia ≥ 2 tahun setelah berdiri.</li>
                </ul>
                <ul> 2) Calon Nasabah disarankan agar mempersiapkan kelengkapan dokumen penunjang guna memudahkan
                    petugas kami saat melakukan penjemputan dokumen dan proses pengajuan kredit konsumsi bisa segera
                    dilakukan. </ul>
                <ul> Berikut daftar dokumen persyaratan kredit konsumsi: </ul>
                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 90.6296%; height: 540px;" border="1">
                        <tbody>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>No</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px; text-align: center;">
                                    <h6>Dokumen</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px; text-align: center;">
                                    <h6>Karyawan</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px; text-align: center;">
                                    <h6>Profesional</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px; text-align: center;">
                                    <h6>Wiraswasta</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px; text-align: center;">
                                    <h6>Perusahaan</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px;">
                                    <h6 style="text-align: center;">1</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy KTP (Suami/Istri yang berlaku)</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px; text-align: center;">
                                    <h6>✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px; text-align: center;">
                                    <h6>✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px; text-align: center;">
                                    <h6>✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px; text-align: center;">
                                    <h6>✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>2</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy Kartu Keluarga (KK)</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>3</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy Akta Nikah dari Catatan Sipil/Cerai dari Pengadilan / Kematian</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>4</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy NPWP (untuk pinjaman &gt; Rp 50 juta)</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>5</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Akta Pendirian</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">&nbsp;</td>
                                <td style="width: 8.0308%; height: 24px;">&nbsp;</td>
                                <td style="width: 9.80864%; height: 24px;">&nbsp;</td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>6</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>TDP / SIUP / Surat Keterangan Usaha (SKU)</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">&nbsp;</td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>7</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Neraca (Rugi/Laba) / Laporan Keuangan</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">&nbsp;</td>
                                <td style="width: 8.0308%; height: 24px;">&nbsp;</td>
                                <td style="width: 9.80864%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>8</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy Catatan Keuangan</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">&nbsp;</td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>9</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy Rek. Koran / Tabungan 3 Bulan Terakhir</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>10</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Slip Gaji Terbaru</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">&nbsp;</td>
                                <td style="width: 10.1245%; height: 24px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>11</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy Surat Keterangan Bekerja</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">&nbsp;</td>
                                <td style="width: 10.1245%; height: 24px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 18px; text-align: center;">
                                    <h6>12</h6>
                                </td>
                                <td style="width: 50.3811%; height: 18px;">
                                    <h6>Copy Surat Keterangan Pengangkatan</h6>
                                </td>
                                <td style="width: 8.80512%; height: 18px;">&nbsp;</td>
                                <td style="width: 8.0308%; height: 18px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 18px;">&nbsp;</td>
                                <td style="width: 10.1245%; height: 18px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>13</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy Surat Keterangan Praktek / Izin</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">&nbsp;</td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">&nbsp;</td>
                                <td style="width: 10.1245%; height: 24px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 3.48013%; height: 24px; text-align: center;">
                                    <h6>14</h6>
                                </td>
                                <td style="width: 50.3811%; height: 24px;">
                                    <h6>Copy Keanggotaan Profesional</h6>
                                </td>
                                <td style="width: 8.80512%; height: 24px;">&nbsp;</td>
                                <td style="width: 8.0308%; height: 24px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 24px;">&nbsp;</td>
                                <td style="width: 10.1245%; height: 24px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 31px;">
                                <td style="width: 3.48013%; text-align: center; height: 31px;">
                                    <h6>15</h6>
                                </td>
                                <td style="width: 50.3811%; height: 31px;">
                                    <h6>Surat Rekomendasi dari Tempat Bekerja</h6>
                                </td>
                                <td style="width: 8.80512%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        &nbsp;</h6>
                                </td>
                                <td style="width: 8.0308%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 31px;">&nbsp;</td>
                                <td style="width: 10.1245%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 31px;">
                                <td style="width: 3.48013%; text-align: center; height: 31px;">
                                    <h6>16</h6>
                                </td>
                                <td style="width: 50.3811%; height: 31px;">
                                    <h6>Copy Rek. Listrik / PDAM / Token / Telpon</h6>
                                </td>
                                <td style="width: 8.80512%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 31px;">
                                <td style="width: 3.48013%; text-align: center; height: 31px;">
                                    <h6>17</h6>
                                </td>
                                <td style="width: 50.3811%; height: 31px;">
                                    <h6>Copy SHM / SHGB / SHMSRS</h6>
                                </td>
                                <td style="width: 8.80512%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 31px;">
                                <td style="width: 3.48013%; text-align: center; height: 31px;">
                                    <h6>18</h6>
                                </td>
                                <td style="width: 50.3811%; height: 31px;">
                                    <h6>Copy IMB</h6>
                                </td>
                                <td style="width: 8.80512%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 31px;">
                                <td style="width: 3.48013%; text-align: center; height: 31px;">
                                    <h6>19</h6>
                                </td>
                                <td style="width: 50.3811%; height: 31px;">
                                    <h6>Copy PBB</h6>
                                </td>
                                <td style="width: 8.80512%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                            <tr style="height: 31px;">
                                <td style="width: 3.48013%; text-align: center; height: 31px;">
                                    <h6>20</h6>
                                </td>
                                <td style="width: 50.3811%; height: 31px;">
                                    <h6>Copy Riwayat Pinjaman di bank lain (jika take over)</h6>
                                </td>
                                <td style="width: 8.80512%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 8.0308%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 9.80864%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                                <td style="width: 10.1245%; height: 31px;">
                                    <h6
                                        style="font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: 0.15px; text-align: center;">
                                        ✓</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="formModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Pengajuan Pinjaman Konsumsi</h4>
                        <button type="button" name="cancel_button" id="cancel_button" class="close"
                            data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <span id="form_result"></span>
                        <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-12">Nama Lengkap </label>
                                <div class="col-md-12">
                                    <input required type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Masukkan Nama Lengkap Sesuai KTP" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Alamat </label>
                                <div class="col-md-12">
                                    <input required type="text" name="alamat" id="alamat" class="form-control"
                                        placeholder="Masukkan Alamat Tempat Tinggal Anda" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">No. Telepon </label>
                                <div class="col-md-12">
                                    <input required type="tel"
                                        onkeypress="return event.charCode >= 48 && event.charCode <=57" name="telp"
                                        id="telp" class="form-control" placeholder="e.g: 081234567890" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Email </label>
                                <div class="col-md-12">
                                    <input required type="email" name="email" id="email" class="form-control"
                                        placeholder="e.g: example@yourdomain.com" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Nominal Rencana Pinjam</label>
                                <div class="col-md-12">
                                    <input required type="tel"
                                        onkeypress="return event.charCode >= 48 && event.charCode <=57" name="nominal"
                                        id="nominal" class="form-control"
                                        placeholder="Masukkan Nominal Rencana Pinjaman" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="action" id="action" />
                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                <button type="button" name="cancel_button" id="cancel_button"
                                    class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                                <input type="submit" name="action_button" id="action_button"
                                    class="btn btn-primary btn-sm" value="Kirim" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <div class="related-projects">
            <!-- Related Projects Row -->
            <h3>Solusi Pinjaman Lain</h3>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{route('modal_kerja')}}">
                        <img class="img-fluid" src="{{asset('assets/images/modal_kerja_related.jpeg')}}" alt="" />
                        <h5>Kredit Modal Kerja</h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{route('investasi')}}">
                        <img class="img-fluid" src="{{asset('assets/images/investasi_related.jpg')}}" alt="" />
                        <h5>Kredit Investasi</h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{route('multiguna')}}">
                        <img class="img-fluid" src="{{asset('assets/images/multiguna_related.jpg')}}" alt="" />
                        <h5>Kredit Multiguna</h5>
                    </a>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->
</div>
<script type="text/javascript">
    var nominal = document.getElementById('nominal');
    nominal.addEventListener('keyup', function (e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        nominal.value = formatRupiah(this.value, 'Rp');
    });
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            nominal = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            nominal += separator + ribuan.join('.');
        }
        nominal = split[1] != undefined ? nominal + ',' + split[1] : nominal;
        return prefix == undefined ? nominal : (nominal ? 'Rp' + nominal : '');
    }

</script>

<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#create_deposito').click(function () {
            $('.modal-title').text("Form Pengajuan Pinjaman Konsumsi");
            $('#sample_form')[0].reset();
            $('#action_button').val("Kirim");
            $('#action').val("Kirim");
            $('#formModal').modal('show');
        });
        $('#sample_form').on('submit', function (event) {
            event.preventDefault();
            if ($('#action').val() == 'Kirim') {
                $.ajax({
                    url: "{{ route('crud_konsumsi.store') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            $('#sample_form')[0].reset();
                            $('#formModal').modal('hide');
                            Swal.fire({
                                position: 'middle-center',
                                icon: 'success',
                                title: 'Data Berhasil Dikirim',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                        $('#form_result').html(html);
                    }
                })
            }
        });
    });

</script>
@endsection

@section('script')
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection
