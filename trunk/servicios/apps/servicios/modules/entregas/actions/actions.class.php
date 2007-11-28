<?php

/**
 * entregas actions.
 *
 * @package    agenciaroyal
 * @subpackage entregas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class entregasActions extends autoentregasActions
{
  public function executeNe()
  {
    $this->entrega_id = $this->getRequestParameter('id','Sin id');

    $this->entrega = EntregasPeer::retrieveByPK($this->entrega_id);
  }


}
