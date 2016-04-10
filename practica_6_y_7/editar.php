<meta charset="utf8"/>
<body background="LIBRERIA.jpg">
<center>
<h1> Editar Libros</h1>
<?php
include("cone.php");
   $consulta=mysql_query("select * from libros")or die(mysql_error());
   $registro=mysql_fetch_array($consulta);
?>

<form action="" method="post">
  <select name="titulo">
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
  <input type="submit" name="editar" value="editar" />
</form>

<?php
  if(isset($_POST['editar'])){
    
  	$ti=$_POST['titulo'];
  	$con=mysql_query("select * from libros where id_libro='$ti' ")or die(mysql_error());
  	$reg=mysql_fetch_array($con);
  	$a=$reg['autor'];
    $t=$reg['titulo'];
    $e=$reg['editorial'];
    $f=$reg['fecha_edicion'];
    $s=$reg['SBN'];

    ?>
      <form method="post">
      <br/><br/>
      	autor:<input name= "a" value="<?php echo $a; ?>"/> <br /><br/>
      	titulo:<input name= "t" value="<?php echo $t; ?>"/> <br /><br/>
      	editorial:<input name= "e" value="<?php echo $e; ?>"/> <br /><br/>
      	fecha_edicion:<input name= "f" value="<?php echo $f; ?>"/> <br /><br/>
      	SBN:<input name= "s" value="<?php echo $s; ?>"/> <br /><br/><br/>
      	<imput type="hidden" name="id" value="<?php echo $ti ?>"/>
      	<input value="editar" type="submit" name="edifinal" />
      </form>
  <?php
       }
?>

<?php
 if(isset($_POST['edifinal'])){
 	
 	$a=$_POST['a'];
    $t=$_POST['t'];
    $e=$_POST['e'];
    $f=$_POST['f'];
    $s=$_POST['s'];
    mysql_query("update libros set autor='$a', titulo='$t', editorial='$e', fecha_edicion='$f', SBN='$s' where id_libro='$id' ")or die(mysql_error());
    echo "<script>alert('datos actualizados');
    location='editar.php';</script>";

 }
?>

<form  action="indice.html" method="post">
<br/>
<input  type="submit" name="regresar" value ="regresar a indice"><br><br>
</form>
