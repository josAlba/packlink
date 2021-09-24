# PACKLINK

## Dev
- [x] Client
- [x] Shipping information
- [x] Send shipping


## DESCRIPTION

Conector para la API de PACKLINKPRO.

+ CLIENT
    + **getWarehouses** 
      + Direcciones de envío guardadas.
      + **RETURN** Packlink\Model\WarehousesModel
    + **getPackages** 
      + Paquetes predeterminados creados.
      + **RETURN** Packlink\Model\PackagesModel
    + **getClient** 
      + Información del cliente.
      + **RETURN** Packlink\Model\ClientModel
    + **getUser**
      + Información del user.
      + **RETURN** Packlink\Model\UserModel
+ SHIPPING
    + **getLabels**
      + URL del *.pdf de la etiqueta de envío.
      + **RETURN** Array
    + **getShipmentTracks**
      + Pasos del seguimiento del pedido.
      + **RETURN** Packlink\Model\TrackModel
    + **getShipment**
      + Información del envío.
      + **RETURN** Packlink\Model\ShipmentModel
    + **sendShipping**
      + Información del envío.
      + **PARAM** Packlink\Model\RequestShippingModel

## CLIENT

Contiene las peticiones a la API propias del cliente.

```
$user = new packlink\User('XXX');
```

## SHIPPING

Contiene las peticiones a la API propias de los envios.

```
$shipping = new packlink\Shipping('XXX');
```
