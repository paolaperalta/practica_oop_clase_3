<?php

abstract class Cuenta
{

  protected $cbu;
  protected $balance;
  protected $ultimoMovimiento;

// Agregar setters y getters para obtener los datos de la cuenta.
  public function setCbu($cbu){
    $this->cbu = $cbu;
  }

  public function getCbu($cbu){
    return $this->cbu;
  }

  public function setBalance($balance){
    $this->balance = $balance;
  }

  public function getBalance($balance){
    return $this->balance;
  }

  public function setUltimoMovimiento($ultimoMovimiento){
    $this->ultimoMovimiento = $ultimoMovimiento;
  }

  public function getUltimoMovimiento($ultimoMovimiento){
    return $this->ultimoMovimiento;
  }

//Agregar un constructor que permite inicializar el CBU.
  public function __construct($cbu)
  {
    $this->cbu = $cbu;
  }

//Agregar un método abstracto para debitar cierto monto que reciba como parámetro el monto y desde donde se está haciendo la transacción (cajero Banelco, cajero Link, caja).
  abstract public function debitar ($monto, $origen);

  //Agregar otro método (no abstracto) que permita acreditar cierto monto (y programar su comportamiento). (Tener en cuenta que cada método debe, además, modificar la fecha de último movimiento).
  public function acreditar ($monto)
  {
    $this->balance = $this->balance + $monto;
    this->setUltimoMovimiento();
    echo 'Acreditado: '.$monto . '<br>'; //concateno para ver cuanto se acreditó
    echo 'Saldo: '. $this->balance . '.';
  }

  private function setUltimoMovimiento()
  {
  $fecha = date("F j, Y, g:i a");
  //toma fecha de hoy con una función propia de php
  $this ->ultimoMovimiento = $fecha;
  }







}
