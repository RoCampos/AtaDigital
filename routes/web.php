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

use Illuminate\Support\facades\Input;
use App\Professor;
use App\Ata;


// Route::get('/',
// 	'ProfessorController@index');

// Route::get('/boot', function() {
//     return view ('index');
// });

Auth::routes();
Route::resource('professor', 'ProfessorController',[ 
	'names' => [
		'index' => 'professor.inicio',
		'create'=> 'professor.criar',
		'store' => 'professor.salvar',
		'show' => 'professor.mostrar',
		'update'=> 'professor.atualizar',
		'destroy'=> 'professor.remover',
		'edit' => 'professor.editar'
	]
]);


// Route::get('/atas/', function() {
// 	$professores = Professor::all ();
//     return view ('atas.criar', ['professores' => $professores]);
// });

// Route::get('/atas/mostrar', function() {
// 	$atas = Ata::all ();
// 	return view ('atas.mostrar', ['atas' => $atas]);

// })->name ('atas.mostrar');

// Route::post('/atas/salvar', function() {
	
// 	$assunto = Input::get('assunto');
// 	$relatorio = Input::get('relatorio');
// 	$prof = Input::get('professor');

// 	$ata = new Ata;
// 	$ata->assunto = $assunto;
// 	$ata->relatorio = $relatorio;
// 	$ata->id_prof = $prof;
// 	$ata->save ();

// 	return redirect()->to (route('atas.mostrar'));

// })->name ('atas.salvar');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
