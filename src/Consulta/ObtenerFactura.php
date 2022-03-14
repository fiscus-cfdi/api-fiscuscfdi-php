<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Consulta;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class ObtenerFactura
{ 
    /**
     * Método para consumir el siguiente endpoint "https://www.fiscuscfdi.com/API_Facturacion/docs/#operation/api_obtener_factura"
     * @param string $env
     * @param string $token 
     * @param string $uuid 
     * @param string $logotipo 
     * @return array 
    */
    public static function getFactura($env,$token, $uuid, $logotipo)
    {   
        $url=UrlGeneral::getUrl()."api_obtener_factura";
        $parametros=array(
            "env"=>$env, 
            "token"=>$token,
            "uuid"=>$uuid,
            "logotipo"=>$logotipo
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_decode($respuesta,true);
        return $respuesta;  
	}
}