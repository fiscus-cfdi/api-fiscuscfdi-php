<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\General;
 
/**
 * 
 */
class Peticion
{
	/**
     * Método para realizar las peticiones genéricas hacia la API de fiscuscfdi: "https://fiscuscfdi.com/API_Facturacion/docs/"
     * @param string $url 
     * @param array $parametros 
     * @param bool $post 
     * @param array $credencial
     * @return string|bool 
    */
    public static function peticion($url,$parametros,$post=true,$credencial=array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		if(!empty($credencial))
        {
			curl_setopt($ch, CURLOPT_USERPWD, $credencial["username"]. ":" . $credencial["password"]);
        }
		curl_setopt($ch, CURLOPT_URL, $url);
		if($post)
		{
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parametros));
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE );
		$server_output = curl_exec ($ch);
        if (!curl_errno($ch)) {
            $info = curl_getinfo($ch);
        }
		curl_close ($ch); 
		return $server_output;
	}

}