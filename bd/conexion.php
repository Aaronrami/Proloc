<?php
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="proloc_bd";
    $db_connection = mysqli_connect($db_host, $db_user, $db_password);

    if (!$db_connection) {
        
        die('No se ha podido conectar a la base de datos');

    }
    /*
    else {

        INSERTAR DATOS
        $ins_codigo = "00001";
        $ins_nombre = "Plastico";
        $ins_descripcion = "Cualquier cosa";
        $ins_unidadmedida = "KG.";

        $insert_value = "INSERT INTO material (codigo_mat,nombre_mat,descripcion_mat,unidadmedida_mat) VALUES ('$ins_codigo','$ins_nombre','$ins_descripcion ','$ins_unidadmedida')";
        
        mysqli_select_db($db_connection,$db_name);
        $retry_value = mysqli_query($db_connection,$insert_value);

        if (!$retry_value) {
            die('Error: ' . mysqli_error($db_connection));
        }

        mysqli_close($db_connection);
        echo "Datos insertados correctamente";
    }
    */
?>