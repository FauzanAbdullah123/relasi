<?php
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;
use App\mahasiswa_hobi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('relasi-1', function(){
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function() {
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();
    return $mahasiswa->dosen->nama;

});

Route::get('relasi-3', function() {

    # Temukan dosen dengan yang bernama Yulianto
    $dosen = Dosen::where('nama', '=', 'Yulianto')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4', function() {

    # Bila kita ingin melihat hobi saya
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

    # Tampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp) 
        echo '<li>' . $temp->hobi . '</li>';
});

Route::get('relasi-5', function() {

    # Temukan hobi Mandi Hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    # Tampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';

});

Route::get('eloquent', function() {

    # Ambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
    $mahasiswa = Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    # Kirim variabel ke View
    return View::make('eloquent', compact('mahasiswa'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dosen', 'DosenController');
Route::resource('hobi', 'HobiController');
Route::resource('mahasiswa', 'MahasiswaController');
Route::resource('wali', 'WaliController');
Route::resource('supplier', 'SupplierController');
Route::resource('makanan', 'MakananController');
Route::resource('minuman', 'MinumanController');
Route::resource('customer', 'CustomerController');
Route::resource('transaksi', 'TransaksiController');
Route::resource('biodata', 'BiodataController');

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/', function() {
            return view('admin.index');
        });
        Route::resource('kategori', 'KategoriController');
        Route::resource('tag', 'TagController');
        Route::resource('artikel', 'ArtikelController');
    }
);

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/about', function () {
        return view('frontend.about');
    });
    Route::get('/albums', function () {
        return view('frontend.albums');
    });
    Route::get('/contact', function () {
        return view('frontend.contact');
    });
    Route::get('/event', function () {
        return view('frontend.event');
    });
    Route::get('/elements', function () {
        return view('frontend.elements');
    });
    Route::get('/blog', 'FrontendController@allblog')->name('all.blog');
    Route::get('/blog/{artikel}', 'FrontendController@detailblog')->name('detail.blog');
    Route::get('/blog/kategori/{cat}', 'FrontendController@blogcat')->name('cat.blog');
    Route::get('/blog/tag/{tag}', 'FrontendController@blogtag')->name('tag.blog');
});
