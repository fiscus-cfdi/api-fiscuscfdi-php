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
    /**
     * Método para consumir el siguiente endpoint "https://www.fiscuscfdi.com/API_Facturacion/docs/#operation/api_previsualizar_prefactura"
     * @param string $token 
     * @param string $json_cfdi 
     * @param string $rfc_emisor 
     * @param string $pdf
     * @return array 
    */
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
        $respuesta=json_decode($respuesta,true);
        return $respuesta; 
	}
} 