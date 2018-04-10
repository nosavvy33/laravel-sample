<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST-EDIT</title>
</head>
<body>
<h1>EDITAR POST</h1>
<form method="POST" action="/post/update">
	{{csrf_field()}}
	<input type="text" name="title" value="{{$post->title}}" style="display: inline;"><strong> Usuario : {{$post->users->name}}</strong><br>	<textarea name="body" value="{{$post->body}}">{{$post->body}}</textarea>
	<input type="hidden" name="post_id" value="{{$post->id}}">
	<input type="hidden" name="user_id" value="{{$post->user_id}}">
	<input type="submit" value="Guardar cambios">
</form>
</body>
</html>