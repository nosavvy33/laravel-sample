<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabla Post</title>
	<!--link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"-->
</head>
<body>
<h1>Tabla de posts según usuario</h1>
<hr>
<div class="row">
	<div class="col-3"><p>Buscar por usuario: </p></div>
	<div class="col-6"><select id="iduser" name="iduser">
		@foreach ($datos as $d)
		<option value="{{$d->id}}">{{$d->name}}</option>
		@endforeach
	</select></div>
	<div class="col-3"><button id="search">Buscar</button></div>
</div>
<!--div><table class="table-hovered" border="1">
	<thead>
		<th>ID</th>
		<th>Título</th>
		<th>Contenido</th>
		<th>Usuario</th>
	</thead>
	<tbody>
		
	</tbody>
</table></div-->
</body>
<script type="text/javascript">

	function appendHTML(el, str){
		var div = document.createElement("div");
		div.innerHTML = str;
		while(div.children.length>0){
			el.appendChild(div.children[0]);
		}
	}

	document.getElementById("search").addEventListener("click",function(){
		let sel = document.getElementById("iduser");
		sel = sel.options[sel.selectedIndex].value;
		let xhr = new XMLHttpRequest();
		xhr.open('GET','/post/table/search/'+sel);
		xhr.onload = function(){
			if(xhr.status === 200){
				appendHTML(document.body,xhr.response);
			}else{
				alert("error de conexión");
			}
		};
		xhr.send();
	});

	function getExcel(){
		let sel = document.getElementById("iduser");
		sel = sel.options[sel.selectedIndex].value;
		let xhr = new XMLHttpRequest();
		xhr.open('GET','/post/table/getExcel/'+sel);
		xhr.send();
	}

</script>
</html>