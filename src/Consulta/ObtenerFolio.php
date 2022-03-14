<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Consulta;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class ObtenerFolio
{ 
    /**
     * Método para consumir el siguiente endpoint "https://www.fiscuscfdi.com/API_Facturacion/docs/#operation/api_obtener_folio"
     * @param string $env
     * @param string $token  
     * @param string $rfc 
     * @param string $serie 
     * @return array 
    */
    public static function getFolio($env,$token, $rfc, $serie)
    {   
        $url=UrlGeneral::getUrl()."api_obtener_folio";
        $parametros=array(
            "env"=>$env, 
            "token"=>$token,
            "rfc"=>$rfc,
            "serie"=>$serie
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_decode($respuesta,true);
        return $respuesta; 
	}
}