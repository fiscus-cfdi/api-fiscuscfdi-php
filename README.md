
# API Fiscus CFDI - PHP

Librería para consumir la API de fiscuscfdi.com (https://fiscuscfdi.com/API_Facturacion/docs) desde PHP.
## Instalar vía composer
```composer
composer require fiscuscfdi/api-fiscuscfdi-php
```
## Instalar vía composer - packagist.org
```composer
{
	"require": {
		"fiscuscfdi/api-fiscuscfdi-php": "^1.0"
	}
}
```

## Instalar vía composer - Github

```composer
"repositories": [{
	"type": "git",
	"url": "https://github.com/fiscus-cfdi/api-fiscuscfdi-php"
}],
"require": {
	"php": ">=7.0",
	"fiscuscfdi/api-fiscuscfdi-php": "dev-main"
}
```

 ## AUTENTICACION > Obtener token
```PHP
$usuario="aquí va tu usuario api";
$password="aquí va tu contraseña api";
$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Autenticacion\ObtenerToken::getToken($usuario,$password);
$token = $respuesta["json_respuesta"]["token"];
echo $respuesta;
```
 ## CONSULTA > Obtener folio
```PHP
$env="production";
$token="TU_TOKEN";
$rfc="TU-RFC-FISICA-O-MORAL";
$serie="";
$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Consulta\ObtenerFolio::getFolio($env,$token, $rfc, $serie);
echo  $respuesta;
```

 ## CONSULTA > Obtener factura
```PHP
$env="production";
$token="TU_TOKEN";
$uuid="0D3C8EC0-2D0D-40DF-90F0-605090B590C0";
$logotipo="";
$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Consulta\ObtenerFactura::getFactura($env,$token, $uuid, $logotipo);
echo $respuesta;
```

 ## CONSULTA > Obtener RFCs
```PHP
$env="production";
$token="TU_TOKEN";
$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Consulta\ObtenerRFCs::getRFCs($env,$token);
echo $respuesta;
```

 ## CONSULTA > Previsualización de prefactura
```PHP
$token="TU_TOKEN";
$json_cfdi='{ "Emisor": { "Rfc": "XAXX010101000", "Nombre": "JOSE PEREZ RODRIGUEZ", "RegimenFiscal": "612" }, "Receptor": { "Rfc": "NFT1011174U6", "Nombre": "RECEPTOR", "UsoCFDI": "G03", "DomicilioFiscalReceptor": "32800", "RegimenFiscalReceptor": "601" }, "Conceptos": { "Concepto": [ { "Impuestos": { "Traslados": { "Traslado": [ { "Base": 2408.84, "Impuesto": "002", "TipoFactor": "Tasa", "TasaOCuota": 0.16, "Importe": 385.41 } ] }, "Retenciones": { "Retencion": [ { "Base": 2408.84, "Impuesto": "002", "TipoFactor": "Tasa", "TasaOCuota": 0.04, "Importe": 96.35 } ] } }, "ClaveProdServ": "78121603", "Cantidad": "12.290", "ClaveUnidad": "A75", "ObjetoImp": "02", "Unidad": "A75", "Descripcion": "Tarifa de los fletes", "ValorUnitario": "196.0000", "Importe": "2408.8400" } ] }, "Impuestos": { "Retenciones": { "Retencion": [ { "Impuesto": "002", "Importe": 96.35 } ] }, "TotalImpuestosRetenidos": 96.35, "Traslados": { "Traslado": [ { "Base": 2408.84, "Impuesto": "002", "TipoFactor": "Tasa", "TasaOCuota": 0.16, "Importe": 385.41 } ] }, "TotalImpuestosTrasladados": 385.41 }, "Version": "4.0", "Folio": 10, "Fecha": "2022-03-14T09:48:57", "Sello": "@", "FormaPago": "03", "NoCertificado": "00001000000411255024", "Certificado": "@", "SubTotal": 2408.84, "Moneda": "MXN", "Total": 2697.9, "TipoDeComprobante": "I", "Exportacion": "01", "MetodoPago": "PUE", "LugarExpedicion": "32800" }';
$rfc_emisor="XAXX010101000";
$pdf=true;
$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Consulta\PrevisualizacionPreFactura::getPrevisualizacion($token,$json_cfdi, $rfc_emisor, $pdf);
echo  $respuesta;
```


 ## CONSULTA > Enviar Factura
```PHP
$env="sandbox";
$token="TU_TOKEN";
$uuid="0D3C8EC0-2D0D-40DF-90F0-605090B590C0";
$correo=array(
	"correo1@correo.com",
	"correo2@correo.com",
	"correo3@correo.com"
);
$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Consulta\EnviarFactura::enviar($env,$token, $uuid, $correo);
echo  var_dump($respuesta);
```


 ## Timbrar > Timbra CFDI 
```PHP
$env="sandbox";
$token="TU_TOKEN";
$cfdi='{ "Emisor": { "Rfc": "XAXX010101000", "Nombre": "JOSE PEREZ RODRIGUEZ", "RegimenFiscal": "612" }, "Receptor": { "Rfc": "NFT1011174U6", "Nombre": "RECEPTOR", "UsoCFDI": "G03", "DomicilioFiscalReceptor": "32800", "RegimenFiscalReceptor": "601" }, "Conceptos": { "Concepto": [ { "Impuestos": { "Traslados": { "Traslado": [ { "Base": 2408.84, "Impuesto": "002", "TipoFactor": "Tasa", "TasaOCuota": 0.16, "Importe": 385.41 } ] }, "Retenciones": { "Retencion": [ { "Base": 2408.84, "Impuesto": "002", "TipoFactor": "Tasa", "TasaOCuota": 0.04, "Importe": 96.35 } ] } }, "ClaveProdServ": "78121603", "Cantidad": "12.290", "ClaveUnidad": "A75", "ObjetoImp": "02", "Unidad": "A75", "Descripcion": "Tarifa de los fletes", "ValorUnitario": "196.0000", "Importe": "2408.8400" } ] }, "Impuestos": { "Retenciones": { "Retencion": [ { "Impuesto": "002", "Importe": 96.35 } ] }, "TotalImpuestosRetenidos": 96.35, "Traslados": { "Traslado": [ { "Base": 2408.84, "Impuesto": "002", "TipoFactor": "Tasa", "TasaOCuota": 0.16, "Importe": 385.41 } ] }, "TotalImpuestosTrasladados": 385.41 }, "Version": "4.0", "Folio": 10, "Fecha": "2022-03-14T09:48:57", "Sello": "@", "FormaPago": "03", "NoCertificado": "00001000000411255024", "Certificado": "@", "SubTotal": 2408.84, "Moneda": "MXN", "Total": 2697.9, "TipoDeComprobante": "I", "Exportacion": "01", "MetodoPago": "PUE", "LugarExpedicion": "32800" }';
$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Timbrar\TimbrarCFDI::timbrar($env,$token, $cfdi);
echo  $respuesta;
```


 ## Timbrar > Cancelar CFDI
```PHP
$env="sandbox";
$token="TU_TOKEN";
$uuid="0D3C8EC0-2D0D-40DF-90F0-605090B590C0";
$motivo_cancelacion="01";
$folio_sustitucion="0D3C8EC0-2D0D-40DF-90F0-605090B590C0";  

$respuesta=FiscusCFDI\ApiFiscusCFDIPHP\Timbrar\CancelarCFDI::cancelar($env,$token, $uuid);
echo  $respuesta;
```
