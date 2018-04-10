<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER-CREATE</title>
</head>
<body>
<h1>CREAR USUARIO</h1>
<form method="POST" action="/user/store">
	{{csrf_field()}}
	<input type="text" name="name">
	<input type="submit" value="Crear usuario">
</form>
</body>
</html>