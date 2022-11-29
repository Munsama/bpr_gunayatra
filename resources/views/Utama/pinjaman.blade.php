@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Pinjaman</title>
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
        <h1 class="mt-4 mb-3"> Pinjaman </h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">Pinjaman</li>
            </ol>
        </div>
    </div>
</div>

<div class="portfolio-col">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a class="hover-box" href="{{route('modal_kerja')}}">
                        <!-- <div class="dot-full">
								<i class="fas fa-link"></i>
							</div> -->
                        <img class="card-img-top" src="{{asset('assets/images/modal_kerja.jpeg')}}" alt="" />
                    </a>
                    <div class="card-body">
                        <h4><a href="{{route('modal_kerja')}}">Kredit Modal Kerja</a></h4>
                        <p>Dapatkan dana untuk memulai usaha Anda saat ini juga.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a class="hover-box" href="{{route('konsumsi')}}">
                        <!-- <div class="dot-full">
								<i class="fas fa-link"></i>
							</div> -->
                        <img class="card-img-top" src="{{asset('assets/images/konsumsi.jpg')}}" alt="" />
                    </a>
                    <div class="card-body">
                        <h4><a href="{{route('konsumsi')}}">Kredit Konsumsi</a></h4>
                        <p>Wujudkan impian milik Anda bersama kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a class="hover-box" href="{{route('investasi')}}">
                        <!-- <div class="dot-full">
								<i class="fas fa-link"></i>
							</div> -->
                        <img class="card-img-top" src="{{asset('assets/images/investasi.jpg')}}" alt="" />
                    </a>
                    <div class="card-body">
                        <h4><a href="{{route('investasi')}}">Kredit Investasi</a></h4>
                        <p>Mulailah investasi untuk jaminan masa depan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a class="hover-box" href="{{route('multiguna')}}">
                        <!-- <div class="dot-full">
								<i class="fas fa-link"></i>
							</div> -->
                        <img class="card-img-top" src="{{asset('assets/images/multiguna.jpg')}}" alt="" />
                    </a>
                    <div class="card-body">
                        <h4><a href="{{route('multiguna')}}">Kredit Multiguna</a></h4>
                        <p>Penuhi kebutuhan dengan menjaminkan properti milik Anda</p>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <!-- <div class="pagination_bar">
				<ul class="pagination justify-content-center">
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					  </a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				</ul>
			</div> -->
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
