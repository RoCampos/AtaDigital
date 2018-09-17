<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\Input;
use App\Professor;
use App\User;

use DB;

class ProfessorController extends Controller
{
    
	///criar as funções
	function index () {
		
		$id = Input::get('id');
		$user = User::get()
			->where('id',$id)
			->first();

		return view ('professors.index', [
			'user' => $user
		]);
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
