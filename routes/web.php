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

Route::resource('aluno', 'AlunoController',[ 
	'names' => [
		'index' => 'aluno.inicio',
		'create'=> 'aluno.criar',
		'store' => 'aluno.salvar',
		'show' => 'aluno.mostrar',
		'update'=> 'aluno.atualizar',
		'destroy'=> 'aluno.remover',
		'edit' => 'aluno.editar'
	]
]);