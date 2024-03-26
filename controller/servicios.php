<?php
    require_once("../config/conexion.php");
    require_once("../models/Servicio.php");
    $servicios = new Servicios();

    switch($_GET["op"]){
        case "listar":
            $datos=$servicios->get_Servicios($_POST["ruc"]);
            $data= Array();
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $sub_array = array();
                    $vch_Num_Ref = "'" .  $row['vch_Num_Ref'] . "'";
                    $vch_Sec_Ref = "'" .  $row['vch_Sec_Ref'] . "'";
                    $chr_IoE_Ref = "'" .  $row['chr_IoE_Ref'] . "'";
                    $chr_Ori_Con = "'" .  $row['chr_Ori_Con'] . "'";
                    $sub_array[] = $row["tipoModalidad"];
                    $sub_array[] = $row["bookin"];
                    $sub_array[] = $row["bhlNum"];
                    $sub_array[] = $row["naveViaje"];
                    $sub_array[] = $row["pod"];
                    $sub_array[] = $row["pde"];
                    $sub_array[] = $row["etd"];
                    $sub_array[] = $row["eta"];                
                    $sub_array[] = '<button class="btn btn-pill btn-secondary" data-toggle="tooltip" data-placement="top" title="Mostrar detalle" onclick="editar(' . $vch_Num_Ref.','.$vch_Sec_Ref .','.$chr_IoE_Ref. ','.$chr_Ori_Con.')"><i class="fa fa-search" aria-hidden="true"></i></button>';
                    $data[] = $sub_array;
                }
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;
        case "mostrar":
            $datos=$servicios->get_detalle_x_id($_POST["vch_Num_Ref"], $_POST["vch_Sec_Ref"], $_POST["chr_IoE_Ref"], $_POST["chr_Ori_Con"]);
            if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
                {
                    $output["vch_Num_Ref"] = $row["vch_Num_Ref"];
                    $output["vch_Sec_Ref"] = $row["vch_Sec_Ref"];
                    $output["chr_IoE_Ref"] = $row["chr_IoE_Ref"];
                    $output["chr_Ori_Con"] = $row["chr_Ori_Con"];
                    $output["Shipper"] = $row["shipper"];
                    $output["Consignee"] = $row["consignee"];
                    $output["Notify"] = $row["notify"];
                    $output["Linea"] = $row["linea"];
                    $output["MBLAWB"] = $row["mblawb"];
                    $output["BLHijo"] = $row["blHijo"];
                    $output["Bookin"] = $row["bookin"];
                    $output["Nave"] = $row["nave"];
                    $output["Viaje"] = $row["viaje"];
                    $output["PODAOL"] = $row["podaol"];
                    $output["PODAOD"] = $row["podaod"];
                    $output["ETA"] = $row["eta"];
                    $output["ETD"] = $row["etd"];
                    $output["Peso"] = $row["peso"];
                    $output["Volumen"] = $row["volumen"];
                    $output["Bulto"] = $row["bulto"];
                    $output["Descripcion"] = $row["descripcion"]; 
                    $output["chr_MoA_Ref"] = $row["chr_MoA_Ref"]; 
                }
                echo json_encode($output);
            }
        break;
        case "listarContenedores":
            $datos=$servicios->get_Contenedores($_POST["vch_Num_Ref"], $_POST["vch_Sec_Ref"], $_POST["chr_IoE_Ref"], $_POST["chr_Ori_Con"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["vch_Num_Con"];
                $sub_array[] = $row["vch_Tip_Con"];                
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;
        case "listarServicios":
            $datos=$servicios->get_ServiciosDetalle($_POST["vch_Num_Ref"], $_POST["vch_Sec_Ref"], $_POST["chr_IoE_Ref"], $_POST["chr_Ori_Con"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["vch_Nom_Ser"];
                $sub_array[] = $row["chr_Mon_Ser"];
                $sub_array[] = $row["dec_Imp_Ser"];
                $sub_array[] = $row["dec_igv_Ser"];
                $sub_array[] = $row["dec_tot_Ser"];
                $data[] = $sub_array;
            }
    
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;
        
        case "listarClientes":
            $datos = $servicios->get_clientes();
                if(is_array($datos)==true and count($datos)>0){
                    $html= "<option label='Seleccionar'></option>";
                    foreach($datos as $row)
                    {
                            $html.= "<option value='".$row['rucCli']."'>".$row['nomCli']."</option>";
                    }
                    echo $html;      
                }

        break;
    }
?>