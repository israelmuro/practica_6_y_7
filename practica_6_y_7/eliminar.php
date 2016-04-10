<meta charset="utf8"/>
<body background="LIBRERIA.jpg">
<center>
<h1> Eliminar Libros</h1>
<?php
   include("cone.php");
    $consulta=mysql_query("select * from libros")or die(mysql_error());
   $registro=mysql_fetch_array($consulta);
?>   
<script>
function eliminar(){  
	if(confirm ("deseas eliminar")){
      miform.submit();
	} else{
		alert("me salve");
	}}
</script>

<form action="" method="post" name="miform">
seleccione para eliminar
  <select onchange="eliminar()" name="titulo">
  <option>seleccione</option>
    <?php
      do{
      	$id=$registro['id_libro'];
      	$t=$registro['titulo'];
    ?>
  	<option value="<?php echo $id; ?>"> <?php echo $t ?>
  	</option>
  	<?php
  	   }while($registro=mysql_fetch_array($consulta));
  	?>
  </select>
</form>

<?php
  if(isset($_POST['titulo'])){
  	$ti=$_POST['titulo'];
  	mysql_query("delete from libros where id_libro='$ti' ")or die(mysql_error());
  	 echo "<script>alert('datos eliminados');
  	 location='eliminar.php';</script>";
  }
?>

<form  action="indice.html" method="post">
<br/>
<input  type="submit" name="regresar" value ="regresar a indice"><br><br>
</form>
