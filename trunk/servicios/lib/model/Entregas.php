<?php

/**
 * Subclass for representing a row from the 'entregas' table.
 *
 *
 *
 * @package lib.model
 */
class Entregas extends BaseEntregas
{
  public function getNombre()
  {

    $serv = $this->getServicios();

    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$serv->getCliente());
    $cli = ClientesPeer::doSelectOne($c);
    if($cli) return $cli->getClides();
    else return '';
  }
}
