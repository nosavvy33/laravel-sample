<a href="/auto/nuevo">Nuevo</a>
<table >
	<tr>
		<th>Placa</th>
	<th>Color</th>
	<th>Id</th>
	<th>Acciones</th>
	</tr>
	@foreach($autos as $auto)
	<tr>
		<th>{{$auto->placa}}</th>
	<th>{{$auto->color}}</th>
	<th>{{$auto->id}}</th>
	<th>
		<a href="/auto/editar/{{$auto->id}}">Editar</a>
			<a href="/auto/eliminar/{{$auto->id}}">Eliminar</a>

	</th>
	</tr>
	@endforeach

</table>





