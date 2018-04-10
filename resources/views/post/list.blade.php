<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST-LIST</title>
</head>
<body>
<h1>Lista de posts</h1>
<table border=1>

	<a href="/post/create">Crear post</a>
	<br>
	<thead>
		<tr>
			<td>ID</td>
			<td>TITLE</td>
			<td>BODY</td>
			<td>USUARIO</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->body}}</td>				
				<td>{{$post->users->name}}</td>
				<td><a href="/post/edit/{{$post->id}}">Editar</a></td>
				<td><a href="/post/destroy/{{$post->id}}">Eliminar</a></td>
			</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>