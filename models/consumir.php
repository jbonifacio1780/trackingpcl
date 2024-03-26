<?php
//define("url", "http://localhost:13520/");
define("url", "http://trackingapi.somee.com/");
class Consumir {
    public function consumirServicio($metodo, $servicio, $data){
        $trataData="";
        if ($metodo=="GET")
        {
                if ( $data == "")
                {
                    $trataData = $servicio;
                }
                else{
                    $trataData = $servicio.http_build_query($data);
                    $data="";
                }
                
        } else {
                $trataData=  $servicio;
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL =>  url.$trataData,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_VERBOSE => 1,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $metodo,
            CURLOPT_POSTFIELDS => json_encode($data, true),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        $response = json_decode($response, true);
        $err = curl_error($curl); // muestra errores en caso de existir
        curl_close($curl); // termina la sesión 
        if ($err) {
            $results = array(
                "status"=>0,
                "sMensaje"=>$err);
        } else {
            $results = array(
                "status"=>1,
                "sMensaje"=>"success",
                "aaData"=>$response);
        }
        return $results;
    }
}

?>
