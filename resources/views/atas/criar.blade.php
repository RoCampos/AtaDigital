<!DOCTYPE html>
<html>
<head>
	<title>Atas</title>
</head>
<body>

	<form method="POST" action="{{route('atas.salvar')}}">
		{{ csrf_field() }}

		<label>Assunto</label>
		<input type="text" name="assunto">
		<br>
		<label>Reletório</label>
		<input type="text" name="relatorio">
		<br>
		<select name="professor">
			@foreach ($professores as $professor)
				<option value="{{$professor['id']}}">
					{{$professor['nome']}}
				</option>
			@endforeach
		</select>
		<button type="submit">Enviar</button>
	</form>

</body>
</html>