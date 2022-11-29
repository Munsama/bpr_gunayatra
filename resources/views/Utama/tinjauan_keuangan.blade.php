@extends ('utama.master')

@section('head')
<title> BPR Guna Yatra - Tinjauan Keuangan</title>
<!-- Bootstrap core CSS -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Fontawesome CSS -->
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<script src="https://www.gstatic.com/charts/loader.js"></script>
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
        <h1 class="mt-4 mb-3"> Tinjauan Keuangan </h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">Tinjauan Keuangan</li>
            </ol>
        </div>
    </div>
</div>

<div class="item-pro">
    <div class="container">
        <!-- Konsumsi Row -->
        <div class="row">
            <div align="center" class="table-responsive">
                <table  class="table table-hover" id="tinjauan_keuangan_table" width="100%">
                    <thead align="center" style="background-color: #db1610; color:whitesmoke;">
                        <tr>
                            <th>Periode</th>
                            <th>Asset (Juta)</th>
                            <th>Kredit (Juta)</th>
                            <th>DPK (Juta)</th>
                            <th>Laba (Juta)</th>
                        </tr>
                    </thead>
                    @foreach ( $data as $d )
                    <tbody align="center">
                       <tr>
                            <td>{{\Carbon\Carbon::parse($d->periode)->format('M-Y')}}</td>
                            <td>{{$d->asset}}</td>
                            <td>{{$d->kredit}}</td>
                            <td>{{$d->dpk}}</td>
                            <td>{{$d->laba}}</td>
                       </tr>  
                    </tbody>
                     @endforeach
                </table>
            </div>

            <div  class="col-xl-12 col-lg-12">
                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3" style="background-color:#db1610;">
                    <h6 class="m-0 font-weight-bold text-white" style="text-align:center;">Grafik Tinjauan Keuangan</h6>
                  </div>
                  <div class="card-body">
                    <div class="chart-bar">
                        <div style="width: 100%; height: 500px;" id="assetChart"></div>
                    </div>
                  </div>
                </div>
    </div>
    <!-- /.container -->
</div>

<script type="text/javascript">

google.charts.load('current', {packages: ['bar']});
  google.charts.setOnLoadCallback(drawChart);;

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Periode', 'Asset', 'Kredit', 'DPK', 'Laba'],

          @php
            foreach($data as $d) {
                echo "['".\Carbon\Carbon::parse($d->periode)->format('M-Y')."', ".$d->asset.", ".$d->kredit.", ".$d->dpk.", ".$d->laba."],";
            }
          @endphp
          
      ]);

      var options = {
        chart: {
          title: 'Grafik Bar | Tinjauan Keuangan',
          subtitle: 'Grafik bar tinjauan keuangan pada tiap periode dalam juta rupiah sebagai berikut:',
          
        },
        bars: 'vertikal'
      };
      var chart = new google.charts.Bar(document.getElementById('assetChart'));
      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>

@endsection

@section('script')
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

@endsection
