# PACKLINK
Conector para la API de PACKLINKPRO.

+ **getLabels**: URL del *.pdf de la etiqueta de envío.
+ **getShipmentTracks**: Pasos del seguimiento del pedido.
+ **getShipment**: Información del envío.
+ **getWarehouses**: Direcciones de envío.
+ **getPackages**: Paquetes predeterminados creados.
+ **getClient**: Información del cliente.

## Connect
Credenciales para conectarse a la API

```
    use packlink\PacklinkClient;

    $client = new PacklinkClient(
        'XXXX' //API KEY
    );
```
