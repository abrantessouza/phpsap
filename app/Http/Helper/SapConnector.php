<?php 

namespace App\Http\Helper;

use SoapClient;

class SapConnector {

    protected $wsdl = "http://vhcalnplci:8000/sap/bc/srt/wsdl/flv_10002A101AD1/bndg_url/sap/bc/srt/rfc/sap/z_abrantes_services/001/zabrantesservices/abrantesservices?sap-client=001";

    public function __constructor(){

    }

    public function load(){
        $options = [
            "login" => "Developer",
            "password" => "Appl1ance",
            "features" => SOAP_SINGLE_ELEMENT_ARRAYS,
        ];

        
        $client = new SoapClient($this->wsdl, $options);
        return $client;

    }

}