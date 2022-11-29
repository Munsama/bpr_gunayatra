<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('beranda');
});
//WEB UMUM
Route::get('beranda', 'WebPerusahaan@beranda')->name('beranda');
Route::get('tentang_kami', 'WebPerusahaan@tentang_kami')->name('tentang_kami');
Route::get('berita', 'WebPerusahaan@berita')->name('berita');
Route::get('simpanan', 'WebPerusahaan@simpanan')->name('simpanan');
Route::get('tabungan', 'WebPerusahaan@tabungan')->name('tabungan');
Route::get('deposito_berjangka', 'WebPerusahaan@deposito_berjangka')->name('deposito_berjangka');
Route::get('pinjaman', 'WebPerusahaan@pinjaman')->name('pinjaman');
Route::get('kredit_modal_kerja', 'WebPerusahaan@modal_kerja')->name('modal_kerja');
Route::get('kredit_konsumsi', 'WebPerusahaan@konsumsi')->name('konsumsi');
Route::get('kredit_investasi', 'WebPerusahaan@investasi')->name('investasi');
Route::get('kredit_multiguna', 'WebPerusahaan@multiguna')->name('multiguna');
Route::get('kontak_kami', 'WebPerusahaan@kontak_kami')->name('kontak_kami');
Route::get('tinjauan_keuangan', 'WebPerusahaan@tinjauan_keuangan')->name('tinjauan_keuangan');
Route::get('annual_report', 'WebPerusahaan@annual_report')->name('annual_report');
Route::get('good_corporate_governance', 'WebPerusahaan@good_corporate_governance')->name('gcg');
Route::get('mekanisme_pengaduan_nasabah', 'WebPerusahaan@mekanisme_pengaduan_nasabah')->name('pengaduan');
Route::get('karir', 'WebPerusahaan@lowongan_kerja')->name('lowongan_kerja');
Route::get('karir/form_lamar_kerja', 'WebPerusahaan@lamar_kerja')->name('lamar_kerja');
//DETAIL BERITA
Route::get('berita/detail_berita/{id}', 'WebPerusahaan@detail_berita')->name('detail_berita');
//EMAIL
Route::post('kontak_kami/kirim-pesan', 'KontakController@storeForm')->name('kirim_pesan');
Route::post('lowongan_kerja/form-lamar-kerja/kirim-lamaran', 'PelamarController@storeForm')
->name('kirim_lamaran');
//CREATE TABUNGAN, DEPOSITO, MODAL_KERJA, KONSUMSI
Route::resource('crud_tabungan', 'TabunganController');
Route::post('crud_tabungan/update', 'TabunganController@update')->name('crud_tabungan.update');
Route::get('crud_tabungan/destroy/{id}', 'TabunganController@destroy');

Route::resource('crud_deposito', 'DepositoController');
Route::post('crud_deposito/update', 'DepositoController@update')->name('crud_deposito.update');
Route::get('crud_deposito/destroy/{id}', 'DepositoController@destroy');

Route::resource('crud_modal_kerja', 'ModalKerjaController');
Route::post('crud_modal_kerja/update', 'ModalKerjaController@update')->name('crud_modal_kerja.update');
Route::get('crud_modal_kerja/destroy/{id}', 'ModalKerjaController@destroy');;

Route::resource('crud_konsumsi', 'KonsumsiController');
Route::post('crud_konsumsi/update', 'KonsumsiController@update')->name('crud_konsumsi.update');
Route::get('crud_konsumsi/destroy/{id}', 'KonsumsiController@destroy');

Route::resource('crud_investasi', 'InvestasiController');
Route::post('crud_investasi/update', 'InvestasiController@update')->name('crud_investasi.update');
Route::get('crud_investasi/destroy/{id}', 'InvestasiController@destroy');

Route::resource('crud_multiguna', 'MultigunaController');
Route::post('crud_multiguna/update', 'MultigunaController@update')->name('crud_multiguna.update');
Route::get('crud_multiguna/destroy/{id}', 'MultigunaController@destroy');

//WEB ADMIN
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::resource('crud_tinjauan_keuangan', 'TinjauanKeuanganController');
Route::post('crud_tinjauan_keuangan/update', 'TinjauanKeuanganController@update')->name('crud_tinjauan_keuangan.update');
Route::get('crud_tinjauan_keuangan/destroy/{id}', 'TinjauanKeuanganController@destroy');

Route::resource('crud_annual_report', 'AnnualReportController');
Route::get('add_annual_report', 'AnnualReportController@create')->name('add_ar');
Route::post('store_annual_report', 'AnnualReportController@store')->name('store_ar');
Route::get('crud_annual_report/edit/{id}', 'AnnualReportController@edit')->name('edit_ar');
Route::post('crud_annual_report/update', 'AnnualReportController@update')->name('update_ar');
Route::get('crud_annual_report/download_gambar/{gambar}', 'AnnualReportController@download_gambar')->name('download_gambar_ar');
Route::get('crud_annual_report/download_dokumen/{dokumen}', 'AnnualReportController@download_dokumen')->name('download_dokumen_ar');
Route::get('crud_annual_report/destroy/{id}', 'AnnualReportController@destroy');

Route::resource('crud_good_corporate_governance', 'GoodCorporateGovernanceController');
Route::get('add_good_corporate_governance', 'GoodCorporateGovernanceController@create')->name('add_gcg');
Route::post('store_good_corporate_governance', 'GoodCorporateGovernanceController@store')->name('store_gcg');
Route::get('crud_good_corporate_governance/edit/{id}', 'GoodCorporateGovernanceController@edit')->name('edit_gcg');
Route::post('crud_good_corporate_governance/update', 'GoodCorporateGovernanceController@update')->name('update_gcg');
Route::get('crud_good_corporate_governance/download_gambar/{gambar}', 'GoodCorporateGovernanceController@download_gambar')->name('download_gambar_gcg');
Route::get('crud_good_corporate_governance/download_dokumen/{dokumen}', 'GoodCorporateGovernanceController@download_dokumen')->name('download_dokumen_gcg');
Route::get('crud_good_corporate_governance/destroy/{id}', 'GoodCorporateGovernanceController@destroy');

Route::resource('crud_berita', 'BeritaController');
Route::get('add_berita', 'BeritaController@create')->name('add_brt');
Route::post('store_berita', 'BeritaController@store')->name('store_brt');
Route::get('crud_berita/view/{id}', 'BeritaController@show')->name('view_brt');
Route::get('crud_berita/edit/{id}', 'BeritaController@edit')->name('edit_brt');
Route::post('crud_berita/update', 'BeritaController@update')->name('update_brt');
Route::get('crud_berita/destroy/{id}', 'BeritaController@destroy');

Route::resource('crud_loker', 'LokerController');
Route::get('add_loker', 'LokerController@create')->name('add_lkr');
Route::post('store_loker', 'LokerController@store')->name('store_lkr');
Route::get('crud_loker/view/{id}', 'LokerController@show')->name('view_lkr');
Route::get('crud_loker/edit/{id}', 'LokerController@edit')->name('edit_lkr');
Route::post('crud_loker/update', 'LokerController@update')->name('update_lkr');
Route::get('crud_loker/destroy/{id}', 'LokerController@destroy');

Route::resource('crud_kontak', 'KontakController');
Route::get('crud_kontak/destroy/{id}', 'KontakController@destroy');

Route::resource('crud_pelamar', 'PelamarController');
Route::get('crud_pelamar/download_cv/{cv}', 'PelamarController@download_cv')->name('download_cv');
Route::get('crud_pelamar/download_foto/{foto}', 'PelamarController@download_foto')->name('download_foto');
Route::get('crud_pelamar/download_ijazah/{ijazah}', 'PelamarController@download_ijazah')->name('download_ijazah');
Route::get('crud_pelamar/download_skck/{skck}', 'PelamarController@download_skck')->name('download_skck');
Route::get('crud_pelamar/download_sertifikat/{sertifikat}', 'PelamarController@download_sertifikat')->name('download_sertifikat');
Route::get('crud_pelamar/destroy/{id}', 'PelamarController@destroy');

//CKEDITOR
Route::post('deskripsi_image/upload', 'BeritaController@upload_deskripsi')->name('des_img');
Route::post('kualifikasi_image/upload', 'LokerController@upload_kualifikasi')->name('klf_img');
Route::post('objektif_image/upload', 'LokerController@upload_objektif')->name('obj_img');
Route::post('keuntungan_image/upload', 'LokerController@upload_keuntungan')->name('knt_img');