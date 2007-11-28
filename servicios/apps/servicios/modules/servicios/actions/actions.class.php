<?php

/**
 * servicios actions.
 *
 * @package    agenciaroyal
 * @subpackage servicios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class serviciosActions extends autoserviciosActions
{
  public function executeRecibo()
  {
    $this->servicio_id = $this->getRequestParameter('id','Sin id');

    $this->servicio = ServiciosPeer::retrieveByPK($this->servicio_id);
  }


  public function executeAjax()
  {
    $this->ajax = $this->getRequestParameter('ajax','');

    if($this->ajax && $this->ajax=='1'){
      $this->servicios = new Servicios();

      $this->servicios->setCliente($this->getRequestParameter('codigo',''));

    }elseif($this->ajax && $this->ajax=='2'){

      $this->servicios = new Servicios();

      $this->servicios->setFactura($this->getRequestParameter('codigo',''));


    }

  }

}
