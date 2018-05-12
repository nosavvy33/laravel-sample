<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" id="formu" action="/whatever/array">
{{ csrf_field() }}
<input type="text" name="var[]">	<button id="more">+</button><br>

<input type="submit" value="send">
</form>
<script type="text/javascript">
	var formu = document.getElementById("formu");
	document.getElementById('more').addEventListener("click", function(){
    var inp = document.createElement('INPUT');
    inp.setAttribute('type','text');
    inp.setAttribute('name','var[]');
    formu.appendChild(inp);
	}); 
</script>
</body>
</html>