<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebPerusahaan extends Controller
{
    //

        public function beranda(){
            $data = DB::table('berita')->orderBy('berita.tanggal','desc')->get();
            return view('utama.beranda', compact('data'));
        }
        public function tentang_kami(){
            return view('utama.tentang_kami');
        }
        public function berita(){

            $data = DB::table('berita')->orderBy('berita.tanggal','desc')->paginate(3);
            return view('utama.berita', compact('data'));
        }
        public function detail_berita($id){

            $data = DB::table('berita')->where('berita.id',$id)->first();
            $dt = DB::table('berita')->where('berita.id','!=',$id)->orderBy('berita.tanggal','desc')->get();
            return view('utama.detail_berita', compact('id','data','dt'));
        }
        public function simpanan(){
            return view('utama.simpanan');
        }
        public function deposito_berjangka(){
            return view('utama.deposito_berjangka');
        }
        public function tabungan(){
            return view('utama.tabungan');
        }
        public function pinjaman(){
            return view('utama.pinjaman');
        }
        public function modal_kerja(){
            return view('utama.modal_kerja');
        }
        public function konsumsi(){
            return view('utama.konsumsi');
        }
        public function investasi(){
            return view('utama.investasi');
        }
        public function multiguna(){
            return view('utama.multiguna');
        }
        public function kontak_kami(){
            return view('utama.kontak_kami');
        }
        public function tinjauan_keuangan(){
            $data = DB::table('tinjauan_keuangan')->get();
            $periode = DB::table('tinjauan_keuangan')->select('periode')->get();
            $asset = DB::table('tinjauan_keuangan')->select('asset')->get();
            $kredit = DB::table('tinjauan_keuangan')->select('kredit')->get();
            $dpk = DB::table('tinjauan_keuangan')->select('dpk')->get();
            $laba = DB::table('tinjauan_keuangan')->select('laba')->get();
            return view('utama.tinjauan_keuangan', compact('data','periode','asset','kredit','dpk','laba'));
        }
        public function annual_report(){
            $data = DB::table('annual_report')->orderBy('annual_report.created_at','desc')->paginate(9);
            return view('utama.annual_report', compact('data'));
        }
        public function good_corporate_governance(){
            $data = DB::table('good_corporate_governance')->orderBy('good_corporate_governance.created_at','desc')->paginate(9);
            return view('utama.good_corporate_governance', compact('data'));
        }
        public function mekanisme_pengaduan_nasabah(){
            return view('utama.mekanisme_pengaduan_nasabah');
        }
        public function lowongan_kerja(){
            $data = DB::table('loker')->orderBy('loker.tanggal','desc')->paginate(3);
            return view('utama.lowongan_kerja', compact('data'));
        }
        public function lamar_kerja(){
            $data = DB::table('loker')->get();
            return view('utama.lamar_kerja', compact('data'));
        }
}
