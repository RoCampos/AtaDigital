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


Route::get('/',
	'ProfessorController@pagina_inicial');

// Route::get('/', function() {
//     return view ('index');
// });

#registro de rotas para controlador Professor
Route::get('/professor/',
	'ProfessorController@pagina_inicial');

Route::get('/professor/adicionar',
	'ProfessorController@criar')->name('adicionar');

Route::post('/professor/salvar',
	'ProfessorController@armazenar')->name('salvar');

Route::get('/professor/mostrar/{id}',
	'ProfessorController@mostrar')->name ('mostrar');


Route::get('/atas/', function() {
	$professores = Professor::all ();
    return view ('atas.criar', ['professores' => $professores]);
});

Route::get('/atas/mostrar', function() {
	$atas = Ata::all ();
	return view ('atas.mostrar', ['atas' => $atas]);

})->name ('atas.mostrar');

Route::post('/atas/salvar', function() {
	
	$assunto = Input::get('assunto');
	$relatorio = Input::get('relatorio');
	$prof = Input::get('professor');

	$ata = new Ata;
	$ata->assunto = $assunto;
	$ata->relatorio = $relatorio;
	$ata->id_prof = $prof;
	$ata->save ();

	return redirect()->to (route('atas.mostrar'));

})->name ('atas.salvar');



