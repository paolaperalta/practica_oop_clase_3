<?php
//Implementar los métodos debitar y acreditar en cada clase, con las siguientes reglas de negocio:
//Debitar:
//Gold: Desde Banelco y Caja no se agrega importe extra. Desde Link un 5% mas.
//Acreditar: Utiliza la cuenta que realiza su padre, pero debe modificar el importe a acreditar según el tipo de cuenta.
//Se queda con un 3% si es Gold, salvo que se esté acreditando 25.000 o más.
class Gold extends cuenta
{
  public function __construct($cbu)
  {
    parent ::__construct ($cbu);
  }

}
