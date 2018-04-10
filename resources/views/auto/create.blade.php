<!DOCTYPE html>
<html>
<head>
	<title>holi</title>
</head>
<body>
<form method="POST" action="/auto/guardar">
	{{csrf_field()}}
	<input type="text" placeholder="PLACA" name="placa"><br>
	<input type="text" placeholder="COLOR" name="color"><br>
<input type="submit" name="" value="Enviar">
</form>
</body>
</html>