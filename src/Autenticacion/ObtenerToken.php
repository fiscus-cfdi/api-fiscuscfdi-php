<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Autenticacion;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 

class ObtenerToken
{ 
    /**
     * Método para consumir el siguiente endpoint "https://www.fiscuscfdi.com/API_Facturacion/docs/#operation/api_obtener_token"
     * @param string $usuario
     * @param string $password 
     * @return array 
    */
    public static function getToken($usuario,$password)
    { 
        $url=UrlGeneral::getUrl()."api_obtener_token";
        $parametros=array(
            "usuario"=>$usuario, 
            "password"=>$password
        );
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_decode($respuesta,true);
        return $respuesta; 
	}
}