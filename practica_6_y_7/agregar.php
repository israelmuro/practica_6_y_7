<meta charset="utf8"/>
<?php
include("cone.php");
?>
<body background="LIBRERIA.jpg">
<center>
<h1> Agregar Libros</h1>
<form  action="" method="post">
      autor:<input title="se necesita llenar el campo" required name="aut"><br/><br/>
      titulo:<input title="se necesita llenar el campo" required name="ti"><br/><br/>
      editorial:<input title="se necesita llenar el campo" required name="edi"><br/><br/>
      fecha_edicion:<input title="se necesita llenar el campo" required name="fecha"><br/><br/>
      sbn:<input required name="sbn"><br/><br/>

      <input ="enviar" type="submit" name="enviar"/>
</form>

<?php 
if(isset($_POST['aut'])){
	$t=$_POST['aut'];
   $t=$_POST['ti'];
   $e=$_POST['edi'];
   $f=$_POST['fecha'];
   $s=$_POST['sbn'];
 
    mysql_query("insert into libros(autor, titulo, editorial, fecha_edicion, SBN)values('$a','$t','$e','$f','$s')") or die(mysql_error());
    
    echo "<script>alert('Dato Guardado');
    location='agregar.php';</script>";
}
?>﻿

<form  action="indice.html" method="post">
<br/>
<input  type="submit" name="regresar" value ="regresar a indice"><br><br>
</form>
