@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Tabungan</title>
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
            <a class="nav-link active" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
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
        <h1 class="mt-4 mb-3"> Tabungan </h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('simpanan')}}">Simpanan</a>
                </li>
                <li class="breadcrumb-item active">Tabungan</li>
            </ol>
        </div>
    </div>
</div>

<div class="item-pro">
    <div class="container">
        <!-- Tabungan Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{asset('assets/images/tabungan.jpg')}}" alt="" />
            </div>
            <div class="col-md-4">
                <h3 class="my-3">Apa itu tabungan?</h3>
                <p> Tabungan adalah suatu simpanan uang yang berasal dari pendapatan yang tidak digunakan untuk
                    keperluan sehari-hari maupun kepentingan lainnya.
                    Simpanan uang dapat digunakan dan diambil kapan saja tanpa terikat oleh perjanjian dan waktu.</p>
                <h3 class="my-3">Tabungan BPR Guna Yatra</h3>
                <p>Tabungan BPR Guna Yatra dirancang untuk memberikan Anda kemudahan bertransaksi dengan suku bunga yang
                    tinggi.</p>
                <p>Ayo buka tabungan di BPR Guna Yatra sekarang makin mudah, aman, dan terpecaya.</p>
                <button type="button" name="create_tabungan" id="create_tabungan" class="btn btn-success btn-sm">Buka
                    Tabungan </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3> 1. Keunggulan</h3>
                <ul> <i class="fas fa-random"></i> Fleksibel
                    <li>Dapat diambil setiap saat dan leluasa mengelola keuangan Anda dalam melihat peluang sesuai
                        kebutuhan.</li>
                </ul>
                <ul> <i class="fas fa-hand-holding-usd"></i> Menguntungkan
                    <li>Dapatkan dan nikmati suku bunga tinggi.</li>
                </ul>
                <ul> <i class="fas fa-shield-alt"></i> Aman & Terpercaya
                    <li>Dikelola oleh tim profesional, terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK) serta
                        dijamin Lembaga Penjamin Simpanan (LPS).</li>
                </ul>
                <ul><i class="fas fa-hands-helping"></i> Kemudahan Pelayanan
                    <li>Layanan ditempat dimanapun Anda berada.</li>
                </ul>
            </div>
            <div class="col-lg-12">
                <h3> 2. Fitur</h3>
                <ul>

                    <li> 1) Bebas biaya materai.</li>
                    <li> 2) Suku bunga dari saldo harian. </li>
                    <li> 3) Suku bunga tinggi sesuai penjaminan LPS.</li>
                </ul>
            </div>
            <div class="col-lg-12">
                <h3> 3. Syarat & Ketentuan</h3>
                <ul>
                    <li> 1) Setoran awal minimal Rp. 100.000,- setoran selanjutnya Rp. 10.000,-.</li>
                    <li> 2) Saldo minimum Rp. 50.000,-.</li>
                    <li> 3) Berkas bagi perorangan : KTP (WNI), KITAS/Passport (WNA).</li>
                    <li> 4) Berkas bagi badan usaha : SIUP, NIB, NPWP, akte pendirian dan perubahannya.</li>
                </ul>
            </div>
        </div>
        <!-- Modal -->
        <div id="formModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Buka Tabungan</h4>
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
                                <label class="control-label col-md-12">Nominal Saldo Awal</label>
                                <div class="col-md-12">
                                    <input required type="tel"
                                        onkeypress="return event.charCode >= 48 && event.charCode <=57" name="nominal"
                                        id="nominal" class="form-control" placeholder="Min. Setoran Awal Rp100.000" />
                                </div>
                            </div>
                            <!-- <div class="form-group">
										{!! RecaptchaV3::initJs() !!}
										{!! RecaptchaV3::field('contact-us') !!}
										@error('g-recaptcha-response')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror
									</div> -->
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
            <h3>Solusi Simpanan Lain</h3>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{route('deposito_berjangka')}}">
                        <img class="img-fluid" src="{{asset('assets/images/deposito_related.jpg')}}" alt="" />
                        <h5> Deposito Berjangka </h5>
                    </a>
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
            $('#create_tabungan').click(function () {
                $('.modal-title').text("Form Buka Tabungan");
                $('#sample_form')[0].reset();
                $('#action_button').val("Kirim");
                $('#action').val("Kirim");
                $('#formModal').modal('show');
            });
            $('#sample_form').on('submit', function (event) {
                event.preventDefault();
                if ($('#action').val() == 'Kirim') {
                    $.ajax({
                        url: "{{ route('crud_tabungan.store') }}",
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
