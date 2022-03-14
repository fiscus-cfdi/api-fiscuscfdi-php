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
        $respuesta=json_encode($respuesta);
        return $respuesta; 
	}
}