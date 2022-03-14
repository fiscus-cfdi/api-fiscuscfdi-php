<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Timbrar;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class CancelarCFDI
{ 
    /**
     * Método para consumir el siguiente endpoint "https://fiscuscfdi.com/API_Facturacion/docs/#operation/api_cancelar_cfdi"
     * @param string $env 
     * @param string $token 
     * @param string $cfdi 
     * @return array  
    */
    public static function cancelar($env,$token, $uuid)
    {
        $url=UrlGeneral::getUrl()."api_cancelar_cfdi"; 
        $parametros=array(
            "env"=>$env, 
            "token"=>$token,
            "uuid"=>$uuid
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_decode($respuesta,true);
        return $respuesta; 
	}
}