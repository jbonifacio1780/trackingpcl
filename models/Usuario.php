<?php
require_once 'consumir.php';
    class Usuario extends Conectar {
        public function login(){
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
                if(empty($correo) and empty($pass)){
                    header("Location:".conectar::ruta()."index.php?m=2");
					exit();
                }else{
                        $CONSULTA_COMP = NULL;
                        $CONSULTA_COMP = array(
                            'usu_correo' =>   $correo,
                            'usu_Passw' =>  $pass
                        );
                        $consumir = new Consumir;
                        $data = $consumir->consumirServicio( "POST","GetLogin",$CONSULTA_COMP );
                       
                        if ($data["status"]=="0") {
                            echo "cURL Error #:" . $err; // mostramos el error
                            header("Location:".Conectar::ruta()."index.php?m=1");
                            exit();
                        } else {
                           $resultado = $data["aaData"];
                            if (is_array($resultado) and count($resultado)>0){
                                $_SESSION["usu_Id"]=$resultado[0]["usu_Id"];
                                $_SESSION["usu_NomApe"]=$resultado[0]["usu_NomApe"];
                                $_SESSION["usu_Rol"]=$resultado[0]["usu_Rol"];
                                $_SESSION["usu_correo"]=$resultado[0]["usu_correo"];
                                $_SESSION["usu_RucEmpr"]=$resultado[0]["usu_RucEmpr"];
                                header("Location:".Conectar::ruta()."view/home/");
                                exit(); 
                            }else{
                                header("Location:".Conectar::ruta()."index.php?m=1");
                                exit();
                            }
                        }
                }
            }
        }

        public function Usuario_Listado($usu_RucEmpr, $usu_Rol){
            $consumir = new Consumir;
            $CONSULTA_COMP = array("usu_RucEmpr" => $usu_RucEmpr,"usu_Rol"=> $usu_Rol);
            $data = $consumir->consumirServicio( "GET","GetUsuarios?",$CONSULTA_COMP );
            return $data["aaData"];
        }

        public function insert_usuario( $usu_Id, $usu_NomApe, $usu_correo, $usu_RucEmpr,
        $usu_Passw, $usu_Rol, $usu_Estado, $modo)
        {
            $CONSULTA_COMP = NULL;
            $CONSULTA_COMP = array(
                "usu_Id" => $usu_Id,
                "usu_NomApe" => $usu_NomApe,
                "usu_correo" => $usu_correo,
                "usu_RucEmpr" => $usu_RucEmpr,
                "usu_Passw" => $usu_Passw,
                "usu_Rol" => $usu_Rol,
                "usu_Estado" => $usu_Estado,
                "modo" => $modo,
            );
            $consumir = new Consumir;
            $data = $consumir->consumirServicio( "POST","SaveUsuario",$CONSULTA_COMP );
            var_dump($data);
            die();
            return $data["aaData"];
        }

        public function get_usuarioId($usu_Id){
            $consumir = new Consumir;
            $CONSULTA_COMP = array("usu_Id" => $usu_Id);
            $data = $consumir->consumirServicio( "GET","GetUsuarioId?",$CONSULTA_COMP );
            return $data["aaData"];
        } 
    }
?>