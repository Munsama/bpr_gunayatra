@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Mekanisme Pengaduan Nasabah</title>
<!-- Bootstrap core CSS -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Fontawesome CSS -->
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@endsection

@section('menu')
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

@section('konten')
<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Mekanisme Pengaduan Nasabah</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">Mekanisme Pengaduan Nasabah</li>
            </ol>
        </div>
    </div>
</div>

<div class="item-pro">
    <div class="container">
        <!-- Konsumsi Row -->
        <div class="row">
            <div align="center" class="col-md-12">
                <img class="img-fluid" src="{{asset('assets/images/call-center.jpg')}}" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h2> Mekanisme Pengaduan Nasabah</h2>
                <p>Berdasarkan Peraturan Otoritas Jasa Keuangan (POJK) Nomor 18 /POJK.07/2018 Tentang Layanan Pengaduan Konsumen di Sektor Jasa Keuangan 
                    serta komitmen BPR Guna Yatra dalam memberikan kenyamanan dan rasa aman dalam setiap transaksi yang dilakukan oleh
                    nasabah. Maka BPR Guna Yatra menyediakan Mekanisme Pengaduan Nasabah, untuk menyalurkan keluhan ataupun pengaduan terkait masalah saat bertransaksi.</p>
                <p>Setiap pengaduan nasabah dapat disampaikan ke BPR Guna Yatra secara&nbsp;<strong>tertulis
                        melalui surat, fax, email, maupun website resmi BPR Guna Yatra&nbsp;</strong>dan
                    secara&nbsp;<strong>lisan melalui&nbsp;<em>line&nbsp;</em>telepon ataupun datang langsung ke kantor
                        BPR Guna Yatra beserta dengan persyaratan pengaduan yang diperlukan.</strong></p>
                <p>Adapun persyaratan pengaduan yang diperlukan antara lain yang tertera dibawah ini:</p>
                <table border="1" >
                    <tbody>
                        <tr>
                            <td align="center" rowspan="2" style="height:auto; width:10%">
                                <b>Pengadu</b>
                            </td>
                            <td align="center" rowspan="2" style="height:auto; width:30%">
                                <b>Syarat Pengaduan Tertulis</b>
                            </td>
                            <td align="center" colspan="2" style="height:auto; width:60%">
                                <b>Syarat Pengaduan Lisan</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="height:auto; width:30%">
                                <b>Tanpa tatap muka</b>
                            </td>
                            <td align="center" style="height:auto; width:30%">
                                <b>Dengan tatap Muka</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="height:auto; width:10%">
                                <p>Nasabah</p>
                            </td>
                            <td style="height:auto; width:30%">
                                <ol>
                                    <li>Bukti Identitas (KTP/Paspor)</li>
                                    <li>Dokumen Pendukung Pengaduan yang diperlukan (misalnya bukti transfer, bukti
                                        setoran, rekening koran,dsb)</li>
                                </ol>
                            </td>
                            <td style="height:auto; width:30%">
                                <ol>
                                    <li>Harus diajukan oleh nasabah yang bersangkutan</li>
                                    <li>Nasabah harus menjawab pertanyaan verifikasi data diri dan rekening yang
                                        diajukan oleh pihak bank</li>
                                </ol>
                            </td>
                            <td style="height:auto; width:30%">
                                <ol>
                                    <li>Bukti Identitas (KTP/Paspor)</li>
                                    <li>Dokumen Pendukung Pengaduan yang diperlukan (misalnya bukti transfer, bukti
                                        setoran, rekening koran,dsb)
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="height:auto; width:10%">
                                <p>Perwakilan Nasabah</p>
                            </td>
                            <td style="height:auto; width:30%">
                                <ol>
                                    <li>Bukti Identitas perwakilan nasabah (KTP/Paspor)</li>
                                    <li>Bukti Identitas nasabah yang diwakilkan (KTP/Paspor)</li>
                                    <li>Surat Kuasa dari nasabah kepada perwakilan yangmenyatakan bahwa nasabah
                                        memberikan kewenangan kepada perseorangan, lembaga, atau badan hukum yang
                                        bertindak mewakili nasabah</li>
                                    <li>Dokumen Pendukung Pengaduan yang diperlukan (misalnya bukti transfer, bukti
                                        setoran, rekening koran, dsb)</li>
                                </ol>
                            </td>
                            <td align="center" style="height:auto; width:30%">
                                <p>Tidak Diperkenankan</p>
                            </td>
                            <td style="height:auto; width:30%">
                                <ol>
                                    <li>Bukti Identitas perwakilan nasabah (KTP/Paspor)</li>
                                    <li>Bukti Identitas nasabah yang diwakilkan (KTP/Paspor)</li>
                                    <li>Surat Kuasa dari nasabah kepada perwakilan yang menyatakan bahwa nasabah
                                        memberikan kewenangan kepada perseorangan, lembaga, atau badan hukum yang
                                        bertindak mewakili nasabah</li>
                                    <li>Dokumen Pendukung Pengaduan yang diperlukan (misalnya bukti transfer, bukti
                                        setoran, rekening koran, dsb)</li>
                                </ol>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <h4>Alur pengaduan nasabah secara lisan dengan tatap muka di kantor BPR Guna Yatra</h4>
                <ol> 
                    <li> Nasabah datang ke kantor terdekat beserta dengan persyaratan yang telah ditentukan</li>
                    <li> Data diri dan dokumen pendukung pengaduan nasabah akan diverifikasi oleh petugas</li>
                    <li>Petugas akan meregister pengaduan nasabah dan menyampaikan nomer registrasi pengaduan nasabah</li>
                    <li>Bila pengaduan dapat langsung terselesaikan, maka petugas akan menginformasikan solusi kepada
                    nasabah dan akan memberikan Bukti Tanda Terima Pengaduan yang telah dilengkapi solusi dari pihak
                    bank</li>
                    <li>Bila pengaduan tidak dapat terselesaikan, maka petugas akan memberikan Bukti Tanda Terima
                    Pengaduan untuk ditandatangani nasabah serta lamanya waktu penyelesaian pengaduan nasabah yang
                    bersangkutan</li>
                    <li>Pengaduan akan ditindaklanjuti oleh unit kerja yang bertugas menangani dan menyelesaikan
                    pengaduan</li>
                </ol>  
                <p>&nbsp;</p>
                <h4>Alur pengaduan nasabah secara tertulis ataupun lisan tanpa tatap muka di kantor BPR Guna Yatra
                </h4>
                <ol>
                    <li>Nasabah menghubungi atau menyampaikan pengaduan secara tertulis beserta dengan persyaratan
                        yang telah ditentukan</li>
                    <li>Petugas akan melakukan verifikasi data diri dan pengaduan nasabah</li>
                    <li>Petugas akan meregister pengaduan nasabah dan menyampaikan nomer registrasi pengaduan nasabah
                    </li>
                    <li>Bila pengaduan dapat langsung terselesaikan, maka petugas akan menginformasikan solusi kepada
                        nasabah, tetapi jika tidak dapat terselesaikan maka petugas akan menginformasikan lamanya waktu
                        penyelesaian</li>
                    <li>Pengaduan akan ditindaklanjuti oleh unit kerja yang bertugas menangani dan menyelesaikan
                        pengaduan</li>
                </ol>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div>

@endsection

@section('script')
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection
