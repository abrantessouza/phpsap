<?php

namespace App\Http\Controllers;
use SoapClient;


class SoapTestController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    public function _response(){
      return "Test";
    }

    public function show(){
        $options = [
            'login' => "DEVELOPER",
            'password' => "Appl1ance",
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'trace' => true,
            //'cache_wsdl' => WSDL_CACHE_NONE
        ];
        
        
         //$WSDL = "http://vhcalnplci:8000/sap/bc/srt/rfc/sap/z_abrantes_services/001/zabrantesservices/abrantesservices";
        
        $WSDL = "http://vhcalnplci:8000/sap/bc/srt/wsdl/flv_10002A101AD1/bndg_url/sap/bc/srt/rfc/sap/z_abrantes_services/001/zabrantesservices/abrantesservices?sap-client=001";
        $client = new SoapClient($WSDL, $options); // null for non-wsdl mode
        
      //  $client->__setSoapHeaders($header);
        
        $params = [
            "intA" => 1,
            "intB" => 2
            // Your parameters
        ];
        
      //  $result = $client->Add($params);
        // 'GetResult' being the name of the soap method
        
          return json_encode($client->__getFunctions());
    }

    //
}
