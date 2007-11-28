<?php
/*
 * Created on 27/11/2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>
<div id="divfacturas">
<?php $c = new Criteria(); $c->add(FacturaPeer::CO_CLI,$servicios->getCliente()); ?>
<?php echo select_tag('servicios[factura]', objects_for_select(
  FacturaPeer::doSelect($c),
  'getFactNum',
  '__toString',
  $servicios->getFactura()
  ),array(
    'onclick'=> remote_function(array(
      'update'   => 'divarticulos',
            'url'      => 'servicios/ajax',
            'with' => "'ajax=2&codigo='+this.value+'&id='+document.getElementById('id').value",
            'script' => 'true',
      ))
  )) ?>
</div>