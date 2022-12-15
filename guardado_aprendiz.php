
 <!doctype html>
<html>
    <head>
        <title>GUARDADADO APRENDIZ</title>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>
    <body >
<?php
include('funciones.php');   
  $vtipoid=$_POST['tipoid'];
  $vnumid=$_POST['numid'];
  $vnombres=$_POST['nombres'];
  $vapellidos=$_POST['apellidos'];
  $vdireccion=$_POST['direccion'];
  $vtelefono=$_POST['telefono'];
  $vficha=$_POST['Ficha'];

  $miconexion=conectar_bd('', 'Sena_bd');
  $resultado=consulta($miconexion,"insert into aprendices (apre_idtipo,apre_numid,apre_nombre,apre_apellidos,apre_direccion,apre_telefono,apre_ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");

  if ($resultado)
    {
      ?>
     
      <script>
       swal("Mensaje", "Guardado exitoso", "success");
       </script>
       <?php
    }
  ?>

  </body>
  </html>
  
       