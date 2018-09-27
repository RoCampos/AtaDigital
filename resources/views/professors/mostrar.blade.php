<!DOCTYPE html>
<html>
<head>
	<title>Professor</title>
</head>
<body>

	<label>Id: {{$prof['id']}} </label>
	<br>
	<label>Nome: {{$prof['nome']}} </label>
	<br>
	<label>Formação: {{$prof['formacao']}} </label>
	<br>
	<label>Titulação: {{$prof['titulacao']}} </label>
	<br>

	<a href="{{route('professor.inicio')}}">voltar</a>
	

</body>
</html>