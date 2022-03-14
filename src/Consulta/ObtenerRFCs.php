<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Consulta;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class ObtenerRFCs
{ 
    /**
     * Método para consumir el siguiente endpoint "https://www.fiscuscfdi.com/API_Facturacion/docs/#operation/api_obtener_rfcs"
     * @param string $env
     * @param string $token 
     * @return array 
    */
    public static function getRFCs($env,$token)
    {   
        $url=UrlGeneral::getUrl()."api_obtener_rfcs";
        $parametros=array(
            "env"=>$env, 
            "token"=>$token
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_decode($respuesta,true);
        return $respuesta;  
	}
}