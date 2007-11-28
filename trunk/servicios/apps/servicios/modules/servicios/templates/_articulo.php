<?php
/*
 * Created on 27/11/2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>
<div id="divarticulos">
<?php $c = new Criteria(); $c->add(RengFacPeer::FACT_NUM,$servicios->getFactura()); ?>
<?php echo select_tag('servicios[articulo]', objects_for_select(
  RengFacPeer::doSelect($c),
  'getCoArt',
  '__toString',
  $servicios->getArticulo()
  )) ?>
</div>