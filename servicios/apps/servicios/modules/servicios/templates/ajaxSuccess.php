<?php
/*
 * Created on 28/11/2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>
<?php if($ajax=='1'){ ?>
  <?php include_partial('servicios/factura', array('servicios' => $servicios)); ?>
<?php }elseif($ajax=='2'){ ?>
  <?php include_partial('servicios/articulo', array('servicios' => $servicios)); ?>
<?php } ?>
