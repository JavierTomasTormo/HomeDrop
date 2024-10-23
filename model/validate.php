<?php

    function validate() {
        // $data = 'hola validate php';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        $check = true;

        $ID_Reference = $_POST['AutoIDHolder'];

        $ID_Reference = ValidateID_ReferencePHP($ID_Reference);

        if($dni !== 0){;
            echo '<script language="javascript"> 
            setTimeout(() => { toastr.error("El ID_Referencce no puede estar repetido"); }, 1000);</script>';
            $check = false;
        }                   //el toastererror si no cambiarlo hacer una redireccion ""normal"" a error!

        return $check;
    }


    function ValidateID_ReferencePHP($ID_Reference){

    ///////
        var_dump('Hola Validate PHP', $ID_Reference);
    ///////////

        $sql = "SELECT * FROM tabla_propiedades WHERE ID_Reference='$ID_Reference'";

        $conexion = modeloController::con();
        $res = mysqli_query($conexion, $sql);

    ///////////////////////////////////////////////////////////////////////////////////    
        $data = 'Connexión Completada (Validación)';/////////////////////////////////
        die('<script>console.log('.json_encode( $data ) .');</script>');////////////
    /////////////////////////////////////////////////////////////////////////////////

        $res = $res->num_rows;
        modeloController::close($conexion);
        return $res;
    }
    

?>