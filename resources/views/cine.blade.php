<form method="post" action="/cine/ventaEntrada">
	{!! csrf_field() !!}
	Edad:
	<input type="text" name="edad"></br>
	Estudiante:
	<input type="radio" name="est" value="S">SI
	<input type="radio" name="est" value="N">NO
</br><input type="submit" value="Enviar">

</form>