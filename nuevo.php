<div id="div1" class="container">
        <br>
        <div id="div2">
           <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?> <img src=> <?php } ?>
           <div id="div3">
           <?php
             if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
             {
             ?>
             <form id="formulario" role="form" method="post" action="guardado_ficha.php">
             <div class="cold-md-12">
               <strong class="lgris">Crear la ficha</strong>
               <br>
               <label class="lgris">Numero:</label>
                <input class="btn btn-outline-warning" class="form-control" type="number" name="nombre" min="9999" max="9999999999" value="" placeholder="Numero" required/>
                <br>
               <label class="lgris">Nombre del programa:</label>
               <div class="form-group col-xs-2">
                <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','Sena_bd');
                                $consulta = "SELECT * FROM programa";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                  <select class="form-control" name="progra">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->id_prog;?>"><?php echo $opcion->nombrepro;?></option>
                                    <?php } ?>
                  </select>
               <br>
               <input class="btn btn-warning" type="submit" value="Guardar">
               <input style="width: 20%;" class="btn btn-warning" type="button" onclick="location.href ='menu.php'" value="↺">
             </div>
             </form>
             <?php
             }
             else
             {
                 echo "No tiene permisos para realizar esta acción";
             }
            ?>
            <br>
           </div>
        </div>
    </div>