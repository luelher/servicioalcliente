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

      $c = new Criteria();
      $c->add(ClientesPeer::CO_CLI,$this->getRequestParameter('codigo',''));
      $cli = ClientesPeer::doSelectOne($c);

      if($cli) $output = '[["servicios_nombre","'.$cli->getCliDes() .'",""]]';
      else $output = '[["servicios_nombre","Cliente No Encontrado",""]]';

      $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');

    }elseif($this->ajax && $this->ajax=='2'){

      $this->servicios = new Servicios();

      $this->servicios->setFactura($this->getRequestParameter('codigo',''));

    }

  }

  public function executeEdit()
  {
    $this->servicios = $this->getServiciosOrCreate();

    if ($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $this->updateServiciosFromRequest();

      $this->saveServicios($this->servicios);

      $this->setFlash('notice', 'Your modifications have been saved');

      if ($this->getRequestParameter('save_and_add'))
      {
        return $this->redirect('servicios/create');
      }
      else if ($this->getRequestParameter('save_and_list'))
      {
        return $this->redirect('servicios/list');
      }
      else
      {
        $c = new Criteria();
        $c->add(ServiciosPeer::CLIENTE,$this->servicios->getCliente());
        $c->add(ServiciosPeer::FACTURA,$this->servicios->getFactura());
        $c->add(ServiciosPeer::ARTICULO,$this->servicios->getArticulo());
        $c->add(ServiciosPeer::SITUACION,$this->servicios->getSituacion());

        $serv = ServiciosPeer::doSelectOne($c);

        if($serv) return $this->redirect('servicios/edit?id='.$serv->getId());
        else return $this->redirect('servicios/list');
      }
    }
    else
    {
      $this->labels = $this->getLabels();
    }
  }

  protected function getServiciosOrCreate($id = 'id')
  {
    if (!$this->getRequestParameter($id))
    {
      $servicios = new Servicios();
      $servicios->setEstado('R');
    }
    else
    {
      $servicios = ServiciosPeer::retrieveByPk($this->getRequestParameter($id));

      $this->forward404Unless($servicios);
    }

    return $servicios;
  }

  public function executeList()
  {
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/servicios/filters');

    // pager
    $this->pager = new sfPropelPager('Servicios', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);

    $c->add(ServiciosPeer::ESTADO,'R');

    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', 1));
    $this->pager->init();
  }


}
