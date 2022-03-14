<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Timbrar;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class TimbrarCFDI
{ 
    public static function timbrar($env,$token, $cfdi)
    {
        $url=UrlGeneral::getUrl()."api_timbrar_cfdi";
        $parametros=array(
            "env"=>$env, 
            "token"=>$token,
            "cfdi"=>$cfdi
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_decode($respuesta,true);
        return $respuesta; 
	}
}