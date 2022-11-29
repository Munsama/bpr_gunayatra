@extends ('utama.master')

@section ('head')
<title>BPR Guna Yatra - Beranda</title>
<!-- Bootstrap core CSS -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Fontawesome CSS -->
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet">
<!-- Owl Carousel CSS -->
<link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
<!-- Owl Carousel CSS -->
<link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@endsection

@section ('menu')
<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link active" href="{{route('beranda')}}">Beranda</a>
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
        <li class="nav-item">
            <a class="nav-link" href="{{route('lowongan_kerja')}}">Karir</a>
        </li>
    </ul>
</div>
@endsection

@section ('konten')
<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{asset('assets/images/Gedung-Guna-Yatra.png')}}'"
                style="background-size: 100% 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Selamat Datang di</h3>
                    <h3>BPR Guna Yatra</h3>
                    <p>Bank Perkreditan Rakyat <br/> yang aman dan terpercaya</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{asset('assets/images/Patung-Sura-dan-Baya.webp')}}'">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Layanan Pelanggan Terbaik</h3>
                    <p>Memberikan pelayanan <br/> yang ramah dan efisien bagi semua pelanggan </p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{asset('assets/images/piagam-bpr-gy.webp')}}'">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Solusi Keuangan</h3>
                    <h3>Anda</h3>
                    <p>Memiliki banyak pilihan <br/> yang sesuai dengan kebutuhan anda</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Sebelumnya</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Selanjutnya</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<div class="container">
    <!-- About Section -->
    <div class="about-main">
        <div class="row">
            <div class="col-lg-6">
                <h2>Selamat Datang di Bank Perkreditan Rakyat Guna Yatra</h2>
                <p>PT. Bank Perkreditan Rakyat Guna Yatra merupakan bank perkreditan rakyat yang berfokus
                    meningkatkan kualitas hidup masyarakat dengan cepat & mudah, aman dan bunga ringan</p>
                <p>BPR Guna Yatra memiliki berbagai produk finansial yang dirancang sesuai dengan kebutuhan
                    Anda. Awali langkahmu mewujudkan impian dengan pinjaman cepat dan mudah serta simpanan aman
                    dan menguntungkan dari BPR Guna Yatra.</p>

                <h5>Pelayanan Kami</h5>
                <ul>
                    <li> Cepat & Mudah</li>
                    <li> Aman </li>
                    <li> Terpercaya & Handal </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="{{asset('assets/images/promo-refferal-deposito.webp')}}" alt="" />
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

<div class="container">
    <!-- Portfolio Section -->
    <div class="portfolio-main">
        <h2>Produk Kami</h2>
        <div class="col-lg-12">
            <div class="project-menu text-center">
                <button class="btn btn-danger active" data-filter="*">Semua</button>
                <button data-filter=".simpanan" class="btn btn-danger">Simpanan</button>
                <button data-filter=".pinjaman" class="btn btn-danger">Pinjaman</button>
            </div>
        </div>
        <div id="projects" class="projects-main row">
            <div class="col-lg-6 col-sm-6 pro-item portfolio-item simpanan">
                <div class="card h-100">
                    <div class="card-img">
                        <a href="{{route('tabungan')}}">
                            <img class="card-img-top" src="{{asset('assets/images/tabungan_beranda.jpg')}}" alt="" />
                            <div class="overlay"><i class="fas fa-money-check"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('tabungan')}}">Tabungan</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 pro-item portfolio-item business simpanan">
                <div class="card h-100">
                    <div class="card-img">
                        <a href="{{route('deposito_berjangka')}}">
                            <img class="card-img-top" src="{{asset('assets/images/deposito_beranda.jpg')}}" alt="" />
                            <div class="overlay"><i class="fas fa-money-check-alt"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('deposito_berjangka')}}">Deposito Berjangka</a>
                        </h4>
                    </div>
                </div>
            </div>
               <div class="col-lg-6 col-sm-6 pro-item portfolio-item pinjaman">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{route('modal_kerja')}}">
                            <img class="card-img-top" src="{{asset('assets/images/modal_kerja_beranda.jpeg')}}"
                                alt="" />
                            <div class="overlay"><i class="fas fa-briefcase"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('modal_kerja')}}">Kredit Modal Kerja</a>
                        </h4>
                     </div>
                  </div>
               </div>
            <div class="col-lg-6 col-sm-6 pro-item portfolio-item pinjaman">
                <div class="card h-100">
                    <div class="card-img">
                        <a href="{{route('konsumsi')}}">
                            <img class="card-img-top" src="{{asset('assets/images/konsumsi_beranda.jpg')}}" alt="" />
                            <div class="overlay"><i class="far fa-credit-card"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('konsumsi')}}">Kredit Konsumsi</a>
                        </h4>
                    </div>
                </div>
            </div>
        
        <div class="col-lg-6 col-sm-6 pro-item portfolio-item pinjaman">
            <div class="card h-100">
                <div class="card-img">
                    <a href="{{route('investasi')}}">
                        <img class="card-img-top" src="{{asset('assets/images/investasi_beranda.jpg')}}" alt="" />
                        <div class="overlay"><i class="fas fa-briefcase"></i></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{route('investasi')}}">Kredit Investasi</a>
                    </h4>
                </div>
            </div>
         </div>   
            <div class="col-lg-6 col-sm-6 pro-item portfolio-item pinjaman">
                <div class="card h-100">
                    <div class="card-img">
                        <a href="{{route('multiguna')}}">
                            <img class="card-img-top" src="{{asset('assets/images/multiguna_beranda.jpg')}}" alt="" />
                            <div class="overlay"><i class="far fa-credit-card"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('multiguna')}}">Kredit Multiguna</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

<div class="blog-slide">
    <div class="container">
        <h2>Berita Terkini</h2>
        <div class="row">
            <div class="col-lg-12">
                <div id="blog-slider" class="owl-carousel">
                    @foreach ($data as $d)
                    <div class="post-slide">
                        <div class="post-header">
                            <h4 class="title">
                                <a href="berita/detail_berita/{{$d->id}}">{{$d->judul}}</a>
                            </h4>
                            <ul class="post-bar">
                                <li><i
                                        class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($d->tanggal)->format('d M Y')}}
                                </li>
                            </ul>
                        </div>
                        <div class="pic">
                            <img src="{{asset('images').('/').($d->foto)}}" alt="">
                            <ul class="post-category"></ul>
                        </div>
                        <p class="post-description">
                            {!!\Illuminate\Support\Str::limit(htmlspecialchars_decode($d->deskripsi),150,"...")!!}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section ('script')
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/filter.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection
