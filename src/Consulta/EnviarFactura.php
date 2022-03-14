<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Consulta;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class EnviarFactura
{ 
    public static function enviar($env,$token, $uuid, $correo=array())
    {   
        $url=UrlGeneral::getUrl()."api_enviar_factura";
        $parametros=array(
            "env"=>$env, 
            "token"=>$token,
            "uuid"=>$uuid,
            "correo"=>$correo
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_decode($respuesta,true);
        return $respuesta;  
	}
}