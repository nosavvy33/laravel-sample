<!DOCTYPE html>
<html>
<head>
	<title>holi</title>
</head>
<body>
<form method="POST" action="/auto/update">
	{{csrf_field()}}
	<input type="text" value="{{$placa}}" name="placa"><br>
	<input type="text"	value="{{$color}}" name="color"><br>
	<input type="hidden"	value="{{$id}}" name="id">
<input type="submit" name="" value="Enviar">
</form>
</body>
</html>