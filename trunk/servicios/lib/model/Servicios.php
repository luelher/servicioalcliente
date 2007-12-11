<?php

/**
 * Subclass for representing a row from the 'servicios' table.
 *
 *
 *
 * @package lib.model
 */
class Servicios extends BaseServicios
{

  public function __toString()
  {
    return $this->getCliente().' '.$this->getNombre();
  }

  public function getNombre()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->getCliente());
    $cli = ClientesPeer::doSelectOne($c);
    if($cli) return $cli->getClides();
    else return '';
  }

  public function getDireccion()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->getCliente());
    $cli = ClientesPeer::doSelectOne($c);
    if($cli) return $cli->getDirec1().' '.$cli->getDirec2();
    else return '';
  }

  public function getTelefonos()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->getCliente());
    $cli = ClientesPeer::doSelectOne($c);
    if($cli) return $cli->getTelefonos();
    else return '';
  }



  public function getNomart()
  {
    $c = new Criteria();
    $c->add(ArtPeer::CO_ART,$this->getArticulo());
    $art = ArtPeer::doSelectOne($c);
    if($art) return $art->getArtDes();
    else return '';
  }

  public function getFactFecEmis()
  {
    $c = new Criteria();
    $c->add(FacturaPeer::FACT_NUM,$this->getFactura());
    $fact = FacturaPeer::doSelectOne($c);
    if($fact) $fecha = $fact->getFecEmis('d/M/y');
    else return '';

    $fecha = split(' ',$fecha);
    if(count($fecha)==2) return $fecha[0];
    else return '';
  }


}
