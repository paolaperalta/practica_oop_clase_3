<?php

  Class PYME extends Cliente{
    private $razonSocial;
    private $cantidadEmpleados;
    private $volumenVentaAnual;
    private $CUIT;

    public function __construct ($razonSocial,$CUIT){
      parent::__construct($email,$pass);
      $this->razonSocial = $razonSocial;
      $this->cantidadEmpleados = $cantidadEmpleados;
      $this->volumenVentaAnual = $volumenVentaAnual;
      $this->CUIT = $CUIT;

    }
    public function setRazonSocial($razonSocial){
      $this->razonSocial = $razonSocial;
    }

    public function getRazonSocial($razonSocial){
      return $this->razonSocial;
    }

    public function setCantidadDeEmpleados ($cantidadEmpleados){
      $this->cantidadDeEmpleados = $cantidadEmpleados;
    }

    public function getCantidadDeEmpleados ($cantidadEmpleados){
      return $this->cantidadDeEmpleados;
    }

    public function setVolumenVentaAnual ($volumenVentaAnual){
      $this->volumenVentaAnual = $volumenVentaAnual;
    }

    public function getVolumenVentaAnual ($volumenVentaAnual){
      return $this->volumenVentaAnual;
    }

    public function setCUIT ($CUIT){
      $this->CUIT = $CUIT;
    }

    public function getCUIT ($CUIT){
      return $this->CUIT;
    }

  }


?>
