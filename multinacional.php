<?php

  Class Multinacional extends Cliente{
    private $nombre;
    private $cantidadEmpleados;
    private $volumenVentaAnual;
    private $pais;

    public function __construct ($nombre,$pais){
      parent::__construct($email,$pass);
      $this->nombre = $nombre;
      $this->cantidadEmpleados = $cantidadEmpleados;
      $this->volumenVentaAnual = $volumenVentaAnual;
      $this->pais = $pais;
    }

    public function setNombre ($nombre){
      $this->nombre = $nombre;
    }

    public function getNombre($nombre){
      return $this->nombre;
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

    public function setPais ($pais){
      $this->pais = $pais;
    }

    public function getPais ($pais){
      return $this->pais;
    }
  }
