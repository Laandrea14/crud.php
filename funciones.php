<?php
    function conectar_bd($clave,$Sena_bd)
    {
        $conexion = new mysqli('localhost','root',$clave,$Sena_bd);

        if ($conexion->connect_error)
        {
            die('Error de Conexión (' . $conexion->connect_errno . ')'. $conexion->connect_error);
        }
    return $conexion;
    }

    function consulta ($conexion,$consulta_sql)
        {
            $resultado=$conexion->query($consulta_sql);

            if (!$resultado)
            {
                 echo 'No se pudo ejecutar la consulta: ' . $conexion->error;
                exit;
            }

    return  $resultado;
        }
?>