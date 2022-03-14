<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\Consulta;
use FiscusCFDI\ApiFiscusCFDIPHP\General\UrlGeneral; 
use FiscusCFDI\ApiFiscusCFDIPHP\General\Peticion; 
/**
 * 
 */
class PrevisualizacionPreFactura
{ 
    public static function getPrevisualizacion($token,$json_cfdi, $rfc_emisor, $pdf)
    {   
        $url=UrlGeneral::getUrl()."api_previsualizar_prefactura";
        $parametros=array(
            "token"=>$token, 
            "json_cfdi"=>$json_cfdi,
            "rfc_emisor"=>$rfc_emisor,
            "pdf"=>$pdf
        ); 
        $respuesta=Peticion::peticion($url,$parametros);
        $respuesta=json_encode($respuesta);
        return $respuesta; 
	}
} 