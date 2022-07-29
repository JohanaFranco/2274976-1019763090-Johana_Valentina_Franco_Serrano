<?php
$txtNombre="";
$rdgLenguaje="";

$chikphp="";
$chikhtml="";
$chikcss="";


$lsAnime="";
$txtComentario="";

if ($_POST ){
$txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";  
$rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";  

$chikphp= ( isset($_POST['chkphp'])=="si" )?"checked":"";
$chikhtml= ( isset($_POST['chkhtml'])=="si" )?"checked":"";;
$chikcss= ( isset($_POST['chkcss'])=="si" )?"checked":"";;

$lsAnime=( isset($_POST['lsAnime']) )?$_POST['lsAnime']:"" ;

$txtComentario=( isset($_POST['txtComentario']) )?$_POST['txtComentario']:"" ;


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-AU-Compatible" content="IE=edge">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <title>Formulario</title>
</head>
<body>

    <?php  if($_POST){ ?>  
   <strong> Hola </strong>: <?php echo $txtNombre;?>
   <br>
   <strong> Tu lenguaje es: </stong> <?php echo $rdgLenguaje;?>
   <br/>
   <strong> Estas aprendiendo: </strong> <br/>
   - <?php echo ($chikphp=="checked")? "PHP":""; ?> <br/>
   - <?php echo ($chikhtml=="checked")? "HTML":""; ?> <br/>
   - <?php echo ($chikcss=="checked")? "CSS":""; ?> <br/>
   <br/>
   <strong> Tu lenguaje es: </strong><?php echo $lsAnime; ?>   
   <br/>
   <strong> Tu mensaje es: </strong><?php echo $txtComentario; ?>

   <?php } ?> 

    <form action="ejercicio31.php" method="post">
    
    Nombre:<br/>
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
<br/>

¿Te gusta?:<br/>
<br/>php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id=""> <br/>
<br/>html <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id=""> <br/>
<br/>css  <input type="radio"  <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""> <br/>

  estas aprendiendo... <br/>
  <br/>php:<input type="checkbox" <?php echo $chikphp;?> name="chkphp"  value="si" id="">
  <br/>html:<input type="checkbox" <?php echo $chikhtml;?> name="chktmhl" value="si" id="">
  <br/>css:<input type="checkbox" <?php echo $chikcss;?> name="chkcss" value="si"  id="">
<br/>

¿Que anime te gusta?... <br/>
<select name="lsAnime" id="" >
    <option value="">[Ninguna Serie]</option>
    <option value="naruto"> <?php echo($lsAnime=="naruto")?"selected":""; ?> Naruto</option>
    <option value="bleach"> <?php echo($lsAnime=="bleach")?"selected":""; ?> bleach</option>
    <option value="dragon"> <?php echo($lsAnime=="dragon")?"selected":""; ?> Dragon ball</option>
</select>
<br/>

¿Tienes alguna duda?<br/>
<textarea name=" txtComentario" id="" cols="30" rows="10">
<?php echo $txtComentario;  ?>
</textarea> 
    </br>

<input type="submit" value="Enviar informacion">

</form>
</body>