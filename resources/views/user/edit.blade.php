<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER-EDIT</title>
</head>
<body>
<h1>EDITAR USUARIO</h1>
<form method="POST" action="/user/update">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{$id}}">
	<input type="text" name="name" value="{{$name}}">
	<input type="submit" value="Guardar cambios">
</form>
</body>
</html>