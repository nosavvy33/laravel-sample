<div><table class="table-hovered" border="1">
	<thead>
		<th>ID</th>
		<th>Título</th>
		<th>Contenido</th>
		<th>Usuario</th>
	</thead>
	<tbody>
		@foreach ($posts as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->title}}</td>
			<td>{{$p->body}}</td>
			<td>{{$p->users->name}}</td>
		</tr>
		@endforeach
	</tbody>
</table></div>
<div>
	<button id="export" onclick="getExcel()">
		Exportar a Excel
	</button>
</div>