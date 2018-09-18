@extends('layouts.main')

@section('titulo-pagina')
	Página Inicial
@endsection

@section('nome-usuario-nav')
	{{$user->nome}}
@endsection

@section('nome-usuario-side')
	{{$user->nome}}
@endsection

@section('novo-projeto')
	@if ($user->type == "professor")
		<button class="btn btn-success btn-block">Novo Projeto
                <i class="mdi mdi-plus"></i>
        </button>
	@endif
@endsection

@section('tipo-usuario-side')
	{{$user->type}}
@endsection

@section('content')

	@yield('professor-content')
	
@endsection
