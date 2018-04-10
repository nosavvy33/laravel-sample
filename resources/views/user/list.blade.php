<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER-LIST</title>
</head>
<body>
<h1>Lista de usuarios</h1>
<table border=1>

	<a href="/user/create">Crear usuario</a>
	<br>
	<thead>
		<tr>
			<td>ID</td>
			<td>NOMBRE</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td><a href="/user/edit/{{$user->id}}">Editar</a></td>
				<td><a href="/user/destroy/{{$user->id}}">Eliminar</a></td>
			</tr>

		@endforeach
	</tbody>
</table>
</body>
</html>