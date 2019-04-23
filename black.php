<?php

class Black extends cuenta
{
  public function __construct($cbu)
  {
    parent ::__construct ($cbu);
  }

  //Implementar los métodos debitar y acreditar en cada clase, con las siguientes reglas de negocio:
  //Debitar:
  //Black: No se cobra importe extra.

  public function debitar ($monto,$origen)
  {
  $this->balance = $this->balance-$monto;

  return $this->balance;
  }

  //Acreditar: Utiliza la cuenta que realiza su padre, pero debe modificar el importe a acreditar según el tipo de cuenta.
  //0% para Black o 4% para montos superiores a 1.000.000.
  public function acreditar ($monto)
  {
    if($this->balance >= 1000000){
      $this->balance = $this->balance + ($monto-($monto*0.04));
    }
  }



}
