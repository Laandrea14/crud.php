<!doctype html>
<html>
  <head>
    <title>Registro de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style/RA.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
    

  </head>
  <body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
           <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?> <img src=""> <?php } ?>
           <div id="div3">
           
             <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
              <div class="cold-md-12">
               <strong  class="lgris"><center> INGRESE LOS DATOS DEL APRENDIZ </center> </strong>
                <br>
                <label class="lgris">Identificacion:</label>
                <div class="form-row">

                <div class="form-group col-xs-2">
                 <select class="J" name="tipoid">
                    <option value="CC" selected>CC</option>
                    <option value="TI">TI</option>
                    <option value="RC">RC</option>
                    <option value="PEP">PEP</option>
                 </select>
              </div>
                 <div class="form-group col-md-6">
                        <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999" value="" placeholder="IDENTIFICACIÓN" required/>
                </div>
                </div>
                 
               <label class="JM">Nombres:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>

                 <label class="JM">Apellidos:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>
                 
                 <label class="JM">Dirección:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="" placeholder="DIRECCIÓN" required/>
                 
                 <label class="JM">Teléfono:</label>
                <input class="form-control" type="number" name="telefono" min="0" max="9999999999" value="" placeholder="TELÉFONO" required/>
                
                <label class="JM">Ficha:</label>
                <input class="form-control" type="number" name="Ficha" min="9999" max="9999999999" value="" placeholder="FICHA" required/>
                <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','Sena_bd');
                                $consulta = "SELECT * FROM fichas";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                <br>
                <input class="btn btn-warning" type="submit" value="Guardar ">
                <input style="width: 20%;" class="btn btn-warning" type="button" onclick="location.href ='menu.php'" value="↺">
              </div>
             </form>
            
            <br>
           </div>
        </div>
    </div>
  </body>
</html>