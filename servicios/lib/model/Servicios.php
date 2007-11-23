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

}
