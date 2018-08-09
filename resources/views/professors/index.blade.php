<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h1>Pagina Inicial</h1>

	{{-- BLADE CONSTRUCTION --}}
	@foreach ($professors as $professor)
		
		<label>Nome:</label> 
		<a href="{{route('mostrar',[$professor['id']])}}">
			{{ $professor['nome'] }}
		</a>
		<br>

	@endforeach

	<a href="{{route ('adicionar')}}">Novo Professor</a>

</body>
</html>