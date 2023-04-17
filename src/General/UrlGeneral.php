<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\General; 

/**
 *
 */
class UrlGeneral
{
    /**
     * Método para retornar la url de peticiones de fiscuscfdi.com (API)"
     * @return string 
    */
    public static function getUrl()
    {
        return "https://app.fiscus.mx/index.php/Api?peticion=";
    }
} 
