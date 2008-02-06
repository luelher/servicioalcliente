<?php
/**
 * Subclase para el manejo de los cat谩logos.
 *
 * @package    Siga
 * @subpackage lib
 * @author     Grupo Desarrollo Cidesa <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: $
 * @copyright  Copyright 2007, Cidesa C.A.
 *
 */
class CatalogoWeb extends BaseCatalogoWeb
{

  public function servicios($params = array())
  {
    // Se debe crear el arreglo $campos con los campos a mostrar en el cat谩logo
    // Cada campo tiene la siguiente estructura
    // $columnas[]['campo'] = 'Informaci贸n a colocar en la cabecera'
    // 贸
    // $columnas[] = 'campo' => 'Informaci贸n a colocar en la cabecera'.
    // 贸
    // $columnas = array (CaordcomPeer::ORDCOM => 'C贸digo', CaordcomPeer::FECORD => 'Fecha', CaordcomPeer::DESORD => 'Descripci贸n');

    $this->columnas = array (ClientesPeer::CO_CLI => 'C閐ula', ClientesPeer::CLI_DES => 'Nombre');

    // Se genera el criterio para el pager

    $this->c = new Criteria();

  }

  public function acciones($params = array())
  {

    $this->columnas = array (ServiciosPeer::CLIENTE => 'Cliente', ServiciosPeer::FACTURA => 'Factura', ServiciosPeer::ARTICULO => 'Articulo');

    // Se genera el criterio para el pager

    $this->c = new Criteria();
    $this->c->add(ServiciosPeer::ESTADO,'R');    // Registrado
    $this->c->addOr(ServiciosPeer::ESTADO,'P');  // Procesando
    //$this->c->add(ServiciosPeer::ESTADO,'E');  // Entregado


  }

}

?>