<!DOCTYPE html>
<html>
  <head>
    <title>Crear Programa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
           <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?> <img src="IMAGENES/cree.jpg"> <?php } ?>
           <div id="div3">
           
             <form id="formulario" role="form" method="post" action="guardado_programa.php">
             <div class="cold-md-12">
               <strong class="lgris">Crear el programa</strong>
               <br>
               <label class="lgris">Nombre:</label>
               <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" required/>

               <label class="lgris">Tipo Programa:</label>
                <input class="form-control" style="text-transform:uppercase;" type="text" name="tipoprograma" value="" placeholder="tipoprograma" required/> 
                <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','Sena_bd');
                                $consulta = "SELECT * FROM tiposprograma";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                               ?>
                  </select>
                </div>              
                  <br><br>
               <input class="btn btn-warning" type="submit" value="Guardar">
               <input style="width: 20%;" class="btn btn-warning" type="button" onclick="location.href ='menu.php'" value="↺">
             </div>
             </form>
            
            <br>
           </div>
        </div>
    </div>
  </body>
</html>