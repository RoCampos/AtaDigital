<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\Input;
use App\Professor;

use DB;

class ProfessorController extends Controller
{
    
	///criar as funções
	function index () {

		$professors = Professor::all ();
		$prof2 = DB::select('select * from professors');
		return view ('professors.index', ['professors' => $professors]);
	}

	function create()
	{
		return view ('professors.criar');
	}

	function store()
	{
		
		#usando Facade
		$prof = new Professor;
		$prof->nome = Input::get('nome');
		$prof->formacao = Input::get('formacao');
		$prof->titulacao = Input::get('titulacao');
		$prof->email = Input::get('email') . 'sds';
		// from Model
		$prof->save ();

		return redirect()->to (route('professor.inicio'));

	}

	function show($id)
	{
		$prof = Professor::findOrFail ($id);
		return view('professors.mostrar', ['prof'=> $prof]);	
	}

	function destroy($id)
	{
		
	}

}
