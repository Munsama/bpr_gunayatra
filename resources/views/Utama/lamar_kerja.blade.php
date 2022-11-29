@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Form Lamar Kerja</title>
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
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Informasi <i class="fas fa-sort-down"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{route('tinjauan_keuangan')}}">Tinjauan Keuangan</a>
                <a class="dropdown-item" href="{{route('annual_report')}}">Annual Report</a>
                <a class="dropdown-item" href="{{route('gcg')}}">Good Corporate Governance</a>
                <a class="dropdown-item" href="{{route('pengaduan')}}">Mekanisme Pengaduan Nasabah</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('lowongan_kerja')}}">Karir</a>
        </li>
    </ul>
</div>
@endsection

@section('konten')
<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"> Form Lamar Kerja</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('lowongan_kerja')}}">Karir</a>
                </li>
                <li class="breadcrumb-item active">Form Lamar Kerja</li>
            </ol>
        </div>
    </div>
</div>

<div class="contact-main">
    <div class="container">
        <!-- Map Column -->
        <div class="col-lg-12 mb-4 contact-left">
            <h3>Bagi Anda yang ingin melamar kerja, silahkan masukkan data diri Anda!</h3>
            <!-- Alert User -->
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            <form method="POST" action="{{route('kirim_lamaran')}}" enctype="multipart/form-data">
                @csrf
                <div class="control-group form-group row">
                    <label align="center" class="control-label col-md-1"> Nama Lengkap </label>
                    <div class="controls col-sm-4">
                        <input type="text" placeholder="Nama Lengkap Sesuai Ijazah" class="form-control" name="nama"
                            id="nama" required>
                    </div>
                    <label align="center" class="control-label col-md-1"> Alamat Tinggal</label>
                    <div class="controls col-sm-6">
                        <input type="text" placeholder="Alamat Tempat Tinggal Saat Ini" class="form-control"
                            name="alamat" id="alamat" required>
                    </div>
                </div>
                <div class="control-group form-group row">
                    <label align="center" class="control-label col-md-1"> Posisi Pekerjaan </label>
                    <div class="controls col-sm-3">
                        <select required class="form-control" name="posisi" id="posisi">
                            <option value="">Pilih Posisi Yang Dilamar</option>
                            <option value="Teller">Teller</option>
                        </select>
                    </div>
                    <label align="center" class="control-label col-md-1"> Nomor HP</label>
                    <div class="controls col-sm-3">
                        <input type="tel" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                            placeholder="Nomor Yang Dapat Dihubungi" class="form-control" name="hp" id="hp" required>
                    </div>
                    <label align="center" class="control-label col-md-1"> Email Valid</label>
                    <div class="controls col-sm-3">
                        <input type="email" placeholder="Alamat Email Valid" class="form-control" name="email"
                            id="email" required>
                    </div>
                </div>
                <div class="control-group form-group row">
                    <label align="center" class="control-label col-md-2"> Tempat & Tanggal Lahir</label>
                    <div class="controls col-sm-3">
                        <input type="text" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir"
                            id="tempat_lahir" required>
                    </div>
                    <div class="controls col-sm-3">
                        <input type="date" placeholder="Tanggal Lahir" class="form-control" name="tanggal_lahir"
                            id="tanggal_lahir" required>
                    </div>
                    <label align="center" class="control-label col-md-1"> Jenis Kelamin</label>
                    <div class="controls col-sm-3">
                        <select required class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="control-group form-group">
                    <label align="center" class="control-label"> CV</label>
                    <div class="controls">
                        <input type="file" accept="application/pdf" class="form-control" name="cv" id="cv" required>
                    </div>
                    <i> Max file size: 2M (.pdf), Penamaan file tanpa spasi (e.g CV_Posisi_Nama_Lengkap)</i>
                </div>
                <div class="control-group form-group">
                    <label align="center" class="control-label"> Foto</label>
                    <div class="controls">
                        <input type="file" accept="image/jpg, image/png, image/jpeg" class="form-control" name="foto"
                            id="foto" required>
                    </div>
                    <i> Max file size: 2M (.jpg, .png, .jpeg), Penamaan file tanpa spasi (e.g
                        Foto_Posisi_Nama_Lengkap)</i>
                </div>
                <div class="control-group form-group">
                    <label align="center" class="control-label"> Ijazah</label>
                    <div class="controls">
                        <input type="file" accept="application/pdf" class="form-control" name="ijazah" id="ijazah"
                            required>
                    </div>
                    <i> Max file size: 2M (.pdf), Penamaan file tanpa spasi (e.g Ijazah_Posisi_Nama_Lengkap)</i>
                </div>
                <div class="control-group form-group">
                    <label align="center" class="control-label"> SKCK</label>
                    <div class="controls">
                        <input type="file" accept="application/pdf" class="form-control" name="skck" id="skck" required>
                    </div>
                    <i> Max file size: 2M (.pdf), Penamaan file tanpa spasi (e.g SKCK_Posisi_Nama_Lengkap)</i>
                </div>
                <div class="control-group form-group">
                    <label align="center" class="control-label"> Surat Pengalaman Kerja / Sertifikat Keahlian</label>
                    <div class="controls">
                        <input type="file" accept="application/pdf" class="form-control" name="sertifikat"
                            id="sertifikat" required>
                    </div>
                    <i> Max file size: 2M (.pdf), Penamaan file tanpa spasi (e.g Sertifikat_Posisi_Nama_Lengkap)</i>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Kirim Lamaran</button>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
@endsection

@section('script')
<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Contact form JavaScript -->
<script src="{{asset('assets/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('assets/js/contact_me.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection
