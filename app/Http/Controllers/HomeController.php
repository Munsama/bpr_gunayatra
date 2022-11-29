<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tabungan = DB::table('tabungan')->where('tabungan.status','=','Tunggu')->count();
        $deposito = DB::table('deposito')->where('deposito.status','=','Tunggu')->count();
        $modal_kerja = DB::table('modal_kerja')->where('modal_kerja.status','=','Tunggu')->count();
        $konsumsi = DB::table('konsumsi')->where('konsumsi.status','=','Tunggu')->count();
        $investasi = DB::table('investasi')->where('investasi.status','=','Tunggu')->count();
        $multiguna = DB::table('multiguna')->where('multiguna.status','=','Tunggu')->count();
        return view('admin.dashboard', compact('tabungan', 'deposito', 'modal_kerja', 'konsumsi','investasi','multiguna'));
    }
}
