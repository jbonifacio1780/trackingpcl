<?php
    require_once 'consumir.php';

    class Servicios
    {
        public function get_Servicios($ruc)
        {
            $consumir = new Consumir;
            $CONSULTA_COMP = array("ruc" => $ruc);
            $data = $consumir->consumirServicio( "GET","GetServicios?",$CONSULTA_COMP );
            if ($data["status"]=="0") {
                echo "cURL Error #:" . $err; // mostramos el error
                exit();
            } else {
                $resultado = $data["aaData"];
                return $resultado;
            }
        }
        public function get_detalle_x_id($vch_Num_Ref, $vch_Sec_Ref, $chr_IoE_Ref, $chr_Ori_Con)
        {
            $consumir = new Consumir;
            $CONSULTA_COMP = array("vch_Num_Ref" => $vch_Num_Ref,"vch_Sec_Ref"=> $vch_Sec_Ref,"chr_IoE_Ref"=>$chr_IoE_Ref, "chr_Ori_Con"=>$chr_Ori_Con  );
            $data = $consumir->consumirServicio( "GET","Getmostrar?",$CONSULTA_COMP );
            return $data["aaData"];

        }

        public function get_Contenedores($vch_Num_Ref, $vch_Sec_Ref, $chr_IoE_Ref, $chr_Ori_Con)
        {
            $consumir = new Consumir;
            $CONSULTA_COMP = array("vch_Num_Ref" => $vch_Num_Ref,"vch_Sec_Ref"=> $vch_Sec_Ref,"chr_IoE_Ref"=>$chr_IoE_Ref, "chr_Ori_Con"=>$chr_Ori_Con  );
            $data = $consumir->consumirServicio( "GET","GetContenedores?",$CONSULTA_COMP );
            return $data["aaData"];
        }

        public function get_ServiciosDetalle($vch_Num_Ref, $vch_Sec_Ref, $chr_IoE_Ref, $chr_Ori_Con)
        {
            $consumir = new Consumir;
            $CONSULTA_COMP = array("vch_Num_Ref" => $vch_Num_Ref,"vch_Sec_Ref"=> $vch_Sec_Ref,"chr_IoE_Ref"=>$chr_IoE_Ref, "chr_Ori_Con"=>$chr_Ori_Con  );
            $data = $consumir->consumirServicio( "GET","GetDetalleServicio?",$CONSULTA_COMP );
            return $data["aaData"];
        }

        public function get_clientes()
        {
            $consumir = new Consumir;
            $CONSULTA_COMP = "";
            $data = $consumir->consumirServicio( "GET","GetClientes?",$CONSULTA_COMP );
            return $data["aaData"];
        }
        
    }
?>
