@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Kontak Kami</title>
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
            <a class="nav-link active" href="{{route('kontak_kami')}}">Kontak Kami</a>
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
        <h1 class="mt-4 mb-3"> Kontak Kami</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">Kontak Kami</li>
            </ol>
        </div>
    </div>
</div>

<div class="contact-main">
    <div class="container">
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4 contact-left">
                <h3>Anda memiliki pertanyaan? Kirimi kami pesan sekarang</h3>
                <!-- Alert User -->
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{ route('kirim_pesan') }}">
                    @csrf
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" placeholder="Nama Lengkap" class="form-control" name="name" id="name"
                                required data-validation-required-message="Mohon masukkan nama Anda.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="tel" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                placeholder="Nomor Telepon" class="form-control" name="phone" id="phone" required
                                data-validation-required-message="Mohon masukkan nomor telepon Anda.">

                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" placeholder="Alamat Email" class="form-control" name="email" id="email"
                                required data-validation-required-message="Mohon masukkan alamat email Anda.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" placeholder="Judul" class="form-control" name="subject" id="subject"
                                required data-validation-required-message="Mohon masukkan judul pesan.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="5" cols="100" placeholder="Pesan" class="form-control" name="message"
                                id="message" required data-validation-required-message="Mohon masukkan pesan Anda"
                                maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="send" value="Send" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4 contact-right">
                <h3>Detail Kontak</h3>
                <p>
                    Jalan Kebon Rojo No.8,
                    <br>Krembangan Sel., Kec. Krembangan,
                    <br>Kota Surabaya, Jawa Timur 60175
                    <br>
                </p>
                <p>
                    <abbr title="Phone">P</abbr>: (031) 3520597, (031) 3525194
                    <br> 081331100059, 08813176430
                </p>
                <p>
                    <abbr title="Email">E</abbr>:
                    <a href="mailto:gunayatra@gmail.com"> gunayatra@gmail.com </a>
                </p>
                <p>
                    <abbr title="Hours">H</abbr>: Senin - Jumat: 08.00 - 15.00 WIB
                </p>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="300" id="gmap_canvas"
                src="https://maps.google.com/maps?q=BPR%20Guna%20Yatra&t=&z=17&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 300px;
                    width: 100%;
                }

            </style><a href="https://www.embedgooglemap.net">embed google maps in wordpress</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 300px;
                    width: 100%;
                }

            </style>
        </div>
    </div>
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
