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
    public static function getRFCs($env,$token)
    {   
        $url=UrlGeneral::getUrl()."api_obtener_rfcs";
        $parametros=array(
            "env"=>$env, 
            "token"=>$token
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_encode($respuesta);
        return $respuesta;  
	}
}