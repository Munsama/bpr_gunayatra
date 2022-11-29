<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
    @yield('head')
    <!-- Icon Web-->
    <link href="{{asset('assets/images/icon_gy.png')}}" rel="icon" type="image/png" />
</head>

<body>
    <div class="wrapper-main">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="social-media">
                            <ul>
                                <li><a href="https://www.facebook.com/gunayatra"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/bpr_gunayatra/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-details">
                            <ul>
                                <li><i class="fas fa-phone fa-rotate-90"></i> (031) 3520597, 3525194</li>
                                <li><i class="fas fa-map-marker-alt"></i> Jln. Kebon Rojo 8, Sby</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
            <div class="container">
                <a class="navbar-brand" href="{{route('beranda')}}">
                    <img src="{{asset('assets/images/logo_gy.png')}}" alt="logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                @yield('menu')
            </div>
        </nav>
        @yield('konten')

        <!-- LOKER -->
        <div class="touch-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>Bingung menyimpan uang Anda di tempat yang aman dan terpecaya? 
                            Simpan uang di BPR Guna Yatra dengan bunga yang tinggi dan sangat aman.</p>
                    </div>
                    <div style="padding-top:1em;" class="col-md-2">
                        <a class="btn btn-md btn-secondary btn-block" href="{{route('simpanan')}}"> Simpan Sekarang</a>
                    </div>
                    <div class="col-md-4">
                        <p>Butuh dana cepat, dengan syarat yang mudah dan bunga yang kecil?
                            Jangan ragu, pinjaman di BPR Guna Yatra solusinya.</p>
                    </div>
                    <div style="padding-top:1em;" class="col-md-2">
                        <a  class="btn btn-md btn-secondary btn-block" href="{{route('pinjaman')}}"> Pinjam Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!--footer starts from here-->
        <footer class="footer">
			<div class="elfsight-app-4f36e07e-a828-4aac-b22e-fe0e6afea61e"></div>
			{{-- <div class="wa-badge">
                <div class="whatsapp-web">
                    <div class="wa-box">
                        <div class="wa-middle"><a
                                href="https://wa.me/6289637667028?text=Halo%20saya%20ingin%20bertanya%20mengenai%20BPR%20Guna%20Yatra"
                                target="_blank">
                                <div class="text">
                                    <p>Chat dengan kami disini</p>
                                </div><span><img
                                        src="{{asset('assets/images/whatsapp-icon.png')}}?fit=contain&amp;w=30&amp;h=30&amp;s=3f821a9b7ce495161fb99b15a5ab91af"
                                        alt="Whatsapp BPR Guna Yatra"></span>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="wa-badge-mobile">
                <div class="whatsapp-mobile"><a
                        href="https://api.whatsapp.com/send?phone=6289637667028&amp;text=Halo%20saya%20ingin%20bertanya%20mengenai%20BPR%20Guna%20Yatra"
                        target="_blank"><img
                            src="{{asset('assets/images/whatsapp-icon.png')}}?fit=contain&amp;w=85&amp;h=85&amp;s=594b1cb36701b5f9d89cf532e53d5b22"
                            alt="Whatsapp BPR Guna Yatra"></a></div>
            </div> --}}
            <div class="container bottom_border">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Ikuti Kami</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">Ikuti sosial media kami untuk mendapatkan info-info terkini seputar BPR Guna
                            Yatra.</p>
                        <ul class="footer-social">
                            <li><a class="facebook hb-xs-margin" href="https://www.facebook.com/gunayatra"><span class="hb hb-xs spin hb-facebook"><i
                                            class="fab fa-facebook-f"></i></span></a></li>
                            <li><a class="instagram hb-xs-margin" href="https://www.instagram.com/bpr_gunayatra/"><span class="hb hb-xs spin hb-instagram"><i
                                            class="fab fa-instagram"></i></span></a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">Kontak Kami</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <p><i class="fas fa-phone fa-rotate-90"></i> (031) 3520597 </p>
                            <p><i class="fas fa-phone fa-rotate-90"></i> (031) 3525194 </p>
                            <p><i class="fas fa-mobile-alt"></i> 081331100059</p>
                            <p><i class="fas fa-mobile-alt"></i> 08813176430</p>
                            <p><i class="far fa-envelope"></i> gunayatra@gmail.com</p>
                            <p><i class="fas fa-fax"></i> (031) 3524274</p>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Terdaftar dan Diawasi Oleh</h5>
                        <!--headin5_amrc ends here-->
                        <ul class="footer_ul2_amrc">
                            <li>
                                <a class="navbar-brand" href="https://www.ojk.go.id/">
                                    <img src="{{asset('assets/images/ojk.png')}}" width="64%px" height="72.5%"
                                        alt="logo" />
                                </a>
                            </li>
                            <li>
                                <a class="navbar-brand" href="https://lps.go.id/">
                                    <img src="{{asset('assets/images/lps.png')}}" width="69%px" height="72.5%px"
                                        alt="logo" />
                                </a>
                            </li>
                            <li>
                                <a class="navbar-brand" href="http://ayokebank.com/">
                                    <img src="{{asset('assets/images/logo-ayo-ke-bank.jpg')}}" width="100%" height="90%"
                                        alt="logo" />
                                </a>
                            </li>
                        </ul>
                        <!--footer_ul2_amrc ends here-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="news-box">
                            <h5 class="headin5_amrc col_white_amrc pt2">Kantor</h5>
                            <p>Komplek Ruko Kebon Rojo Indah
                                Jln. Kebon Rojo No.8, Kel. Krembangan Sel, Kec. Krembangan, Surabaya, 60175</p>
                            <!-- <form action="#">
							<div class="input-group">
								<input class="form-control" placeholder="Search for..." type="text">
								<span class="input-group-btn">
								  <button class="btn btn-secondary" type="button">Go!</button>
								</span>
							</div>
						</form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="copyright text-center">Copyright &copy; 2022 <a>BPR Guna Yatra</a>
                </p>
            </div>
           
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    @yield ('script')
</body>

</html>
