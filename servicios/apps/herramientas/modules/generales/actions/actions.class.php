<?php

/**
 * generales actions.
 *
 * @package    siga
 * @subpackage generales
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class generalesActions extends sfActions
{

  //public $objs = array();

  public function executeIndex()
  {

    $this->redirect('catalogo');

  }

  public function executeLogin()
  {

    $this->setFlash('sincredencial','No tiene acceso a este formulario del Módulo de Compras. Trate autenticando con otro usuario.');

  }

  public function executeCatalogo()
  {
    $opciones = array();
    $principales = array();
    $params = array();
    $this->clase = '';

    // Nos traemos el form html donde se actualizarán los objetos
    if($this->getRequest()->hasParameter('frame'))
    {
      $this->form = $this->getRequestParameter('frame','');
    }

    // Identificamos la clase(tabla) de la cual nos traemos los datos
    if($this->getRequest()->hasParameter('clase'))
    {
      $clase = $this->getRequestParameter('clase','');
      $principales['clase'] = $clase;
      $this->clase = $clase;
    }
    $hay_obj=true;
    $index = 1;
    $obj = "";

    // Ordenamos el arreglo de objetos del catálogo;
    while ($hay_obj){

      if($this->getRequest()->hasParameter('obj'.$index)){
        $obj = $this->getRequestParameter('obj'.$index,'');
        $key = '';

        if(strpos($obj,'_')!=false) {
          if($this->getRequest()->hasParameter('campo'.$index)){
            $key = $this->getRequestParameter('campo'.$index,'');
          }else{
            $array_key = explode('_',$obj);

            if(isset($array_key[1])) $key = $array_key[1];
            else {
              if($this->getRequest()->hasParameter('campo'.$index)){
                $key = $this->getRequestParameter('campo'.$index,'');
              }else $key = $index - 1;
            }
          }
        }else {
          if($this->getRequest()->hasParameter('campo'.$index)){
            $key = $this->getRequestParameter('campo'.$index,'');
          }else $key = $index - 1;
        }
        $listobjs[$key] = $obj;

        $index++;
      }else $hay_obj=false;
    } //While

    $this->objs = $listobjs;

    $hay_obj=true;
    $index = 1;
    $params = array();

    // Ordenamos el arreglo de objetos del catálogo;
    while ($hay_obj){
      if($this->getRequest()->hasParameter('param'.$index)){
        $params[] = $this->getRequestParameter('param'.$index,'');
        $index++;
      }else $hay_obj=false;
    } //While

    $clase = $this->getRequestParameter('metodo','?');
    $principales['metodo'] = $clase;

    // Se cargan los criterios de filtrado si los hay
    if($this->getRequestParameter('filter','')=='filter'){
      if($this->getRequest()->hasParameter('filters'))
      {

        $filters = $this->getRequestParameter('filters');
        $opciones['filters'] = $filters;

        $this->getUser()->setAttribute('filters', $filters, 'sf_admin/'.$clase.'/filter');
        $this->getUser()->setAttribute('filter', 'filter', 'sf_admin/'.$clase.'/filter');

        $this->getUser()->getAttributeHolder()->remove('sf_admin/'.$clase.'/filter');
        $this->getUser()->getAttributeHolder()->add($filters,'sf_admin/'.$clase.'/filter');
        $this->filters = $filters;

      }else{
        $filters = $this->getUser()->getAttribute('filters', null,'sf_admin/'.$clase.'/filter');
        //print_r ($filters);
        $opciones['filters'] = $filters;
        $this->filters = $filters;
      }
    }elseif($this->getRequestParameter('filter','')=='Limpiar'){
      $this->getUser()->getAttributeHolder()->remove('filter', null, 'sf_admin/'.$clase.'/filter');
      $this->getUser()->getAttributeHolder()->remove('filters', null, 'sf_admin/'.$clase.'/filter');
      $this->filters = array();
    }else{
      $filters = $this->getUser()->getAttribute('filters', null, 'sf_admin/'.$clase.'/filter');
      //print_r ($filters);
      $opciones['filters'] = $filters;
      $this->filters = $filters;
    }


    // Crierios de ordenamiento de la información
    if ($this->getRequest()->hasParameter('sort'))
    {
      $opciones['sort'] = $this->getRequestParameter('sort');
      $opciones['type'] = $this->getRequestParameter('type', 'asc');
      $this->getUser()->setAttribute('sort', $this->getRequestParameter('sort'), 'sf_admin/'.$clase.'/sort');
      $this->getUser()->setAttribute('type', $this->getRequestParameter('type', 'asc'), 'sf_admin/'.$clase.'/sort');
    }else{
      $opciones['sort'] = $this->getUser()->getAttribute('sort', null, 'sf_admin/'.$clase.'/sort');
      $opciones['type'] = $this->getUser()->getAttribute('type', null, 'sf_admin/'.$clase.'/sort');
    }

    if($this->getRequest()->hasParameter('page'))
    {
      $page = $this->getRequestParameter('page');
      $opciones['page'] = $page;
    }

    // Generamos los mismos parámetros para ser pasados a los links del pager
    $param = $this->getRequest()->getParameterHolder()->getAll();

    //print '<pre>';
    //print_r($param);
    //print '</pre>';

    foreach ($param as $keyparam => $value){
      if($value!='generales' && $value!='catalogo' && $keyparam!='page' && $keyparam!='type' && $keyparam!='sort' && $keyparam!='filters' && $keyparam!='filter') $this->param .= '&'.$keyparam.'='.$value;
    }
    //print '<pre>';
    //print_r($this->getUser());
    //print '</pre>';

    // Se llama a la clase que genera los datos del catálogo
    $ctlg = new CatalogoWeb();

    $this->ctlg = $ctlg;

    $ctlg->Construir($principales,$this->objs,$opciones,$params);
    $this->pager = $ctlg->getPager();
    $this->columnas = $ctlg->getArrayFieldsNames();
    $this->filters = $ctlg->getOpciones('filters');

  }

  public function executeAutocomplete()
  {
  $fieldwhere = $this->getRequestParameter('fieldwhere','');
  $table = $this->getRequestParameter('table','');
  $fieldget = $this->getRequestParameter('fieldget','');
  $val = $this->getRequestParameter('val','');
  $val = $this->getRequestParameter($val,'');

  $this->tags=Herramientas::autocompleteAjax($fieldwhere,$table,$fieldget,$val);
  }

  public function executeCatalogobuscar()
  {
      $space=$this->getRequestParameter('space');
    $this->sql=$this->getUser()->getAttribute('sql',null,$space);
    $this->sql=str_replace("¿","'",$this->sql);
    $this->objs=$this->getRequestParameter('objs');
    $this->campos=$this->getRequestParameter('campos');
    Herramientas::BuscarDatos($this->sql,&$result);
    $this->seguir=false;
    if (count($result)>0)
    {
        $this->arre=$result;
        $this->seguir=true;
    }

  }
}
