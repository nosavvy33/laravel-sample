<!DOCTYPE html>
<html>
<head>
	<title>Subir archivo</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="/archivo/store">
	{{csrf_field()}}
	<input type="text" name="codigo"/>
	<br>
	<input type="file" name="archivo"/>
	<br>
	<input type="submit" value="Subir Archivo"/>
</form>
</body>
</html>