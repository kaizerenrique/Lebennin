<?php

namespace App\Traits\Albiononline;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

trait Lebennin
{
     /*
    |--------------------------------------------------------------------------
    | Consulta a la api de albion los nombres e ID de los gremios que 
    | conforman la alianza
    |--------------------------------------------------------------------------
    | Ingresan el URL de la api de albion y el ID de Lebennin
    | Retorna la lista de gremios 
    */

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