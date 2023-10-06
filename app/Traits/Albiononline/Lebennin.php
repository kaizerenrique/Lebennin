<?php

namespace App\Traits\Albiononline;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

trait Alianza
{
    public function alianza()
    {
        try {
	    	$url = 'https://gameinfo.albiononline.com/api/gameinfo/alliances/';

            $id_alianza = config('app.id_alianza');

	    	$response = Http::get($url.$id_alianza);
			
	    	$respuesta = $response->getBody()->getContents();// accedemos a el contenido

            $respuesta = json_decode($respuesta);
            return $respuesta;	

    	} catch (\Illuminate\Http\Client\ConnectionException $e) {
	        report($e);	 
	        return false;
	        
	    }
    }
    
}