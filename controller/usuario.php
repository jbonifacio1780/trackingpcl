<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    
    $Usuario = new Usuario();

    switch($_GET["op"]) {
        

        case "listar":
            $datos=$Usuario->Usuario_Listado($_POST["usu_RucEmpr"], $_POST["usu_Rol"]);
                $data = Array();
                foreach ($datos as $row) {
                    $sub_array = array();
                    $sub_array[] = $row["usu_Id"];
                    $sub_array[] = $row["usu_NomApe"];
                    $sub_array[] = $row["usu_correo"];
                    $sub_array[] = $row["usu_RucEmpr"];
                    $sub_array[] = $row["usu_Passw"];
                    $sub_array[] = $row["usu_Rol"];
                    $sub_array[] = $row["usu_Estado"]; 
                    $sub_array[] = '<button class="btn btn-pill btn-secondary" data-toggle="tooltip" data-placement="top" title="Mostrar detalle" onclick="editar('.$row["usu_Id"].')"><i class="fa fa-search" aria-hidden="true"></i></button>';
                    $data[] = $sub_array;
                }
                $results = array(
                    "sEcho"=>1,
                    "iTotalRecords"=>count($data),
                    "iTotalDisplayRecords"=>count($data),
                    "aaData"=>$data);
                echo json_encode($results);
            
        break;
        case "usuarioxid":
            $datos=$Usuario->get_usuarioId($_POST["usu_Id"]);
            if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row) {
                    $output["usu_Id"] = $row["usu_Id"];
                    $output["usu_NomApe"] = $row["usu_NomApe"];
                    $output["usu_correo"] = $row["usu_correo"];
                    $output["usu_RucEmpr"] = $row["usu_RucEmpr"];
                    $output["usu_Passw"] = $row["usu_Passw"];
                    $output["usu_Rol"] = $row["usu_Rol"];
                    $output["usu_Estado"] = $row["usu_Estado"];
                }
                echo json_encode($output);
            }
        break;

        case "guardaryeditar":
            $Usuario->insert_usuario(
                $_POST["usu_Id"], 
                $_POST["usu_NomApe"],
                $_POST["usu_correo"],
                $_POST["usu_RucEmpr"],
                $_POST["usu_Passw"],
                $_POST["usu_Rol"],
                $_POST["usu_Estado"],
                $_POST["modo"]
                );
            $messages[]="El Servicio se registró correctamente.";        
            if (isset($messages)){          
                ?>
                    <strong>¡Bien hecho!</strong>
                    <?php
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    ?>     
                <?php
            }
    
            if (isset($errors)){
                ?>
                    <strong>¡Error!</strong>
                    <?php
                        foreach ($errors as $error) {
                            echo $error;
                        }
                    ?>
                <?php
            }
        break;

    }
?>