<?php

use Illuminate\support\Facades\Input;
use App\tb_m_siswa;
use Carbon\Carbon;
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

// ENV
// MAIL_DRIVER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=null
// MAIL_PASSWORD=null
// MAIL_ENCRYPTION=null


Route::resource('/','FrontendController');
Route::get('/contact', 'FrontendController@contact')->name('contact');


 
 Route::get('tes', function () {
 return view('siswa.index');
});



Auth::routes();
Route::get('settings/profile', 'SettingsController@profile');
Route::get('settings/profile/edit', 'SettingsController@editProfile');
Route::post('settings/profile', 'SettingsController@updateProfile');
Route::get('settings/password', 'SettingsController@editPassword');
Route::post('settings/password', 'SettingsController@updatePassword');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/delete-mapel/{id}', 'tb_m_mata_pelajaranController@deleteMapelRecord');
Route::get('/delete-pengajar/{id}', 'tb_m_pengajarController@deletePengajarRecord');
Route::get('/delete-siswa/{id}', 'tb_m_siswaController@deleteSiswaRecord');
Route::get('/delete-sekolah/{id}', 'tb_s_sekolahController@deleteSekolahRecord');
Route::get('/delete-absensi/{id}', 'tb_m_absensiController@deleteAbsensiRecord');

Route::group(['prefix'=>'admin' ,'middleware'=>['auth','role:admin']], 
	function (){
Route::get('export/books', [ 
		'as' => 'export.books', 
		'uses' => 'tb_m_absensiController@export' 
	]); 

Route::post('export/books', ['as' => 'export.books.post', 
		'uses' => 'tb_m_absensiController@exportpost' ]); 
	Route::get('template/books', [
		'as' => 'template.books',
		'uses' => 'tb_m_absensiController@generateExcelTemplate'
	]);
	Route::post('import/books', [
		'as' => 'import.books',
		'uses' => 'tb_m_absensiController@importExcel'
	]);
	
Route::get("my-search","tb_m_absensiController@mySearch")->name('my-search');
Route::get('/search', [
    'as' => 'api.search',
    'uses' => 'Api\SearchController@search'
]);


Route::resource('absensi','tb_m_absensiController');
// Route::get('search','searchController@index');
Route::resource('sekolah','tb_s_sekolahController');
Route::resource('pembayaran','tb_m_pembayaranController');
Route::get('/siswa/show/pembayaran',['as'=>'getPayment','uses'=>'tb_m_pembayaranController@index']);
Route::post('/siswa/pembayaran',['as'=>'lihatPembayaranSiswa','uses'=>'tb_m_pembayaranController@lihatPembayaranSiswa']);

Route::resource('siswa','tb_m_siswaController');
Route::get('tanggal_lahir','searchController@ttl')->name('tanggal_lahir');
Route::get('nama_panggilan','searchController@nama_panggilan')->name('nama_panggilan');
Route::get('alamat','searchController@alamat')->name('alamat');

// Route::get('siswa','tb_m_siswaController@autocomplete')->name('siswa');

Route::resource('ortu','tb_m_ortuController');
Route::get('nama_panggilan', 'SearchController@nama_panggilan')->name('nama_panggilan');
Route::get('ttl', 'SearchController@ttl')->name('ttl');
Route::get('alamat', 'SearchController@alamat')->name('alamat');
Route::get('nama_panggilan', 'SearchController@nama_panggilan')->name('nama_panggilan');
Route::get('nama_panggilan', 'SearchController@nama_panggilan')->name('nama_panggilan');
Route::resource('profile','tb_s_profileController');
Route::get('filtertanggal', 'tb_m_absensiController@filtertanggal')->name('filtertanggal');
Route::resource('pengajar','tb_m_pengajarController');
Route::resource('mata_pelajaran','tb_m_mata_pelajaranController');
Route::resource('AbsensiPengajar','tb_mix_AbsensiPengajarController');
Route::resource('PengajarMapel','tb_mix_PengajarMapelController');

Route::get('/dataAjax', 'tb_m_absensiController@dataAjax');
Route::get('/searchPengajar',array('as'=>'searchPengajar','uses'=>'tb_m_absensiController@autocomplete'));
Route::get('/searchSiswa',array('as'=>'searchSiswa','uses'=>'tb_m_absensiController@autocompleteNik'));
// Route::get('/search', 'tb_m_siswaController@search');
Route::get('/search',array('as'=>'search','uses'=>'tb_m_siswaController@search'));


//modal

Route::get('/store', 'tb_m_pengajarController@store')->name('store');



Route::get('/',function() {
	$now = new Carbon();
	dd($now);
	
});


});