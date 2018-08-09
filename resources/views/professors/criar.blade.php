<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Professor</title>
</head>
<body>

	<form action="{{route('professor.salvar')}}" method="POST">
		{{csrf_field()}}

		<label>Nome</label>	
		<input type="text" name="nome">
		<br>
		<label>Formação</label>	
		<input type="text" name="formacao">
		<br>
		<label>Titulação</label>	
		<input type="text" name="titulacao">
		<br>
		<label>Email</label>	
		<input type="email" name="email">
		<br>
		<button type="submit">Enviar</button>

	</form>

</body>
</html>