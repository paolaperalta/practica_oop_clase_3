<?php

class Classic extends cuenta
{
  //Classic: Si la transacción es desde un cajero Banelco, debe debitar un 5% mas. De Link un 10% mas. Desde caja no se agrega importe extra.
  private $origenes = [
    'Banelco'=>1.05,
    'Link'=>1.1,
    'Caja'=>1
  ];

  public function __construct($cbu)
  {
    parent ::__construct ($cbu);
  }

//Implementar los métodos debitar y acreditar en cada clase, con las siguientes reglas de negocio:
//Debitar:
//Classic: Si la transacción es desde un cajero Banelco, debe debitar un 5% mas. De Link un 10% mas. Desde caja no se agrega importe extra.
  public function debitar ($monto,$origen)
  {
    $error = "No hay fondos suficientes";
    $origenes = $this->origenes;
    if(!array_key_exists($origen,$origenes)){
      return $error;
    }

    if(!$this->balance < $monto) {
    $origenes = $this->origenes;

    foreach($origenes as $key => $value){
      if($origen == $key){
        $this->balance = $this->balance - $monto * $value;
        }
      }
    }
    return $this->balance;
  }
}

//Acreditar: Utiliza la cuenta que realiza su padre, pero debe modificar el importe a acreditar según el tipo de cuenta.
//El banco se queda con un 5% si es Classic.
