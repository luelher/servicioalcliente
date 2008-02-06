<?php

/**
 * acciones actions.
 *
 * @package    agenciaroyal
 * @subpackage acciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class accionesActions extends autoaccionesActions
{

  public function executeList()
  {
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/acciones/filters');

    // pager
    $this->pager = new sfPropelPager('Acciones', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);

    $c->addJoin(AccionesPeer::SERVICIOS_ID, ServiciosPeer::ID);
    $c->add(ServiciosPeer::ESTADO,'R');

    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', 1));
    $this->pager->init();
  }

}
