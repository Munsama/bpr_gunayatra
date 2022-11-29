@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Promo</title>
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
					<li class="nav-item">
						<a class="nav-link" href="{{route('tentang_kami')}}">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('berita')}}">Berita</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Simpanan <i class="fas fa-sort-down"></i></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
							<a class="dropdown-item" href="{{route('tabungan')}}">Tabungan</a>
							<a class="dropdown-item" href="{{route('deposito_berjangka')}}">Deposito Berjangka</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pinjaman <i class="fas fa-sort-down"></i></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
							<a class="dropdown-item" href="{{route('modal_kerja')}}">Modal Kerja</a>
							<a class="dropdown-item" href="{{route('konsumsi')}}">Konsumsi</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('kontak_kami')}}">Kontak Kami</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link active" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnnya <i class="fas fa-sort-down"></i></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
							<a class="dropdown-item" href="{{route('promo')}}">Promo</a>
							<a class="dropdown-item" href="{{route('lowongan_kerja')}}">Lowongan Kerja</a>
						</div>
					</li>
					
				</ul>
            </div>
@endsection

@section('konten')
<!-- full Title -->
<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3"> Promo </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="{{route('beranda')}}">Beranda</a>
					</li>
					<li class="breadcrumb-item active">Promo</li>
				</ol>
			</div>
		</div>
	</div>

    <div class="portfolio-col">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a class="hover-box" href="#">
							<!-- <div class="dot-full">
								<i class="fas fa-link"></i>
							</div> -->
							<img class="card-img-top" src="{{asset('assets/images/Brosur_iklan.jpg')}}" alt="" />
						</a>
						<div class="card-body">
							<h4><a href="#">Promo 1</a></h4>
							<p>Promo Super</p>
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