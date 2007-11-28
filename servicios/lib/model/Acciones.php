<?php

/**
 * Subclass for representing a row from the 'acciones' table.
 *
 *
 *
 * @package lib.model
 */
class Acciones extends BaseAcciones
{
  public function __toString()
  {
    return $this->getServicios()->getCliente();
  }

  public function getNombre()
  {

    $serv = $this->getServicios();

    if($serv){
      $c = new Criteria();
      $c->add(ClientesPeer::CO_CLI,$serv->getCliente());
      $cli = ClientesPeer::doSelectOne($c);
      if($cli) return $cli->getClides();
      else return '';
    }else return '';
  }

}
