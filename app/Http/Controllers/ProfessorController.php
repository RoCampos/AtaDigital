<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\Input;
use App\Professor;

use DB;

class ProfessorController extends Controller
{
    
	///criar as funções
	function pagina_inicial () {

		$professors = Professor::all ();

		$prof2 = DB::select('select * from professors');
		var_dump($prof2[0]);

		return view ('professors.index', ['professors' => $professors]);
	}

	function criar()
	{
		return view ('professors.criar');
	}

	function armazenar()
	{
		
		#usando Facade
		$prof = new Professor;
		$prof->nome = Input::get('nome');
		$prof->formacao = Input::get('formacao');
		$prof->titulacao = Input::get('titulacao');
		$prof->email = Input::get('email') . 'sds';
		// from Model
		$prof->save ();

		// DB::insert('insert into professors (nome, formacao, titulacao, email) 
			// values (?, ?, ?, ?)', [$prof->nome, $prof->formacao, $prof->titulacao, $prof->email]);

		return redirect()->to ('/');

	}

	function mostrar($id)
	{
		$prof = Professor::findOrFail ($id);
		return view('professors.mostrar', ['prof'=> $prof]);	
	}

	function remover($id)
	{
		
	}

}
