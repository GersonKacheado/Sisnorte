<?php

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
/*----------------------------------------------------------------------------------------*/

//Route::resource('/', 'IndexController@index');

use App\Http\Controllers\AdminController;

Route::get('/', ['uses'=> 'IndexController@homepage'])->name('index');

//Route::resource('cliente', 'ClienteController');
Route::resource('user', 'UserController')->middleware('auth:admin');
//Route::post('cliente/buscar', 'ClienteController@buscar');


Route::resource('empresa', 'EmpresaController')->middleware('auth:admin');
Route::resource('funcionario', 'FuncionarioController')->middleware('auth:admin');
Route::resource('recebe', 'RecebeController')->middleware('auth:admin');
Route::resource('service', 'ServiceController')->middleware('auth:admin');
Route::resource('solicito', 'SolicitoController');
//Route::get('solicito/index', 'SolicitoController@index');
Route::resource('usuario', 'UsuarioController');


    
    




Route::get("envio-email", function () {
    return new \App\Mail\sendMail();
});
/*
Route::get("index", function () {
    return view('index');
})->name('/');


Route::get("/contact.php", function () {
    return view('contact');
});

Route::get("/room-details.php", function () {
    return view('room-details',);
});

Route::get("/blog-details.php", function () {
    return view('blog-details',);
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')
->name('home')
->middleware('auth');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('perfil/editar', 'UserController@userEdit')->name('editar');
Route::patch('perfil/atualizar', 'UserController@userUpdate')->name('atualizar');

Route::post('/user/search', 'UserController@search')->name('busca');
Route::post('/funcionario/search', 'funcionarioController@search')->name('busca');
Route::post('/solicito/search', 'solicitoController@search')->name('busca');
Route::post('/empresa/search', 'empresaController@search')->name('busca');







//teste


