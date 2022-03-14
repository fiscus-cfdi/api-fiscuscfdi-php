<?php
declare(strict_types=1);
namespace FiscusCFDI\ApiFiscusCFDIPHP\General;
 
/**
 * 
 */
class Peticion
{
    public static function peticion($url,$parametros,$post=true,$credencial=array())
    {
        $ch = curl_init();
		if(!empty($credencial))
        {
			curl_setopt($ch, CURLOPT_USERPWD, $credencial["username"]. ":" . $credencial["password"]);
        }
		curl_setopt($ch, CURLOPT_URL, $url);
		if($post)
		{
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE );
		$server_output = curl_exec ($ch);
        if (!curl_errno($ch)) {
            $info = curl_getinfo($ch);
            echo json_encode($info);
        }
		curl_close ($ch);
		return $server_output;
	}

}