<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Autenticacion;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class ObtenerToken
{ 
    public static function getToken($usuario, ·$password)
    {
        $url=UrlGeneral::getUrl()."api_obtener_token";
        $parametros=array("usuario"=>$usuario, "password"=>$password);
        $respuesta=Peticion::peticion($url,$parametros);
        return $respuesta; 
	}
}