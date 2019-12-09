<?php

namespace App\Http\Controllers;
use SoapClient;
use Illuminate\Http\Request;
use App\Http\Helper\SapConnector;

class SapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get(){
        $data = new SapConnector();
        return \json_encode($data->load()->ZRemotListsample());
    }

   public function post(Request $request){
       $data = new SapConnector();
       $req = $request->all();
       $data->load()->ZUpdateSyncSample($req);
       return \json_encode($data->load()->ZRemotListsample());
   }


    //
}
