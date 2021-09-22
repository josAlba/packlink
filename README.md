# PACKLINK
Conector para la API de PACKLINKPRO.

+ CLIENT
    + **getWarehouses**: Direcciones de envío.
    + **getPackages**: Paquetes predeterminados creados.
    + **getClient**: Información del cliente.
+ SHIPPING
    + **getLab  els**: URL del *.pdf de la etiqueta de envío.
    + **getShipmentTracks**: Pasos del seguimiento del pedido.
    + **getShipment**: Información del envío.

## CONNECT
Credenciales para conectarse a la API

```
    use packlink\PacklinkClient;

    $client = new PacklinkClient(
        'XXXX' //API KEY
    );
```

## CLIENT

## SHIPPING
