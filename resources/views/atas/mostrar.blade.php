<!DOCTYPE html>
<html>
<head>
	<title>Atas</title>
</head>
<body>

	@foreach ($atas as $ata)
		<h3> {{$ata['assunto']}} </h3>
		<p> {{$ata['relatorio']}} </p>
		<hr>
	@endforeach


</body>
</html>