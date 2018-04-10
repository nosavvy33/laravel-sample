<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST-CREATE</title>
</head>
<body>
<h1>CREAR POST</h1>
<form method="POST" action="/post/store">
	{{csrf_field()}}
	<input type="text" name="title" style="display:inline;"><select name="user">
		@foreach($users as $user)
			<option value="{{$user->id}}">{{$user->name}}</option>
		@endforeach
	</select><br>	
	<textarea name="body"></textarea>
	<input type="submit" value="Crear post">
</form>
</body>
</html>