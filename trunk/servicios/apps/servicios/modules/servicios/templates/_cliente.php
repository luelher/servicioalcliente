<?php
/*
 * Created on 27/11/2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php use_helper('PopUp', 'Linktoapp') ?>
  <?php $value = object_input_tag($servicios, 'getCliente', array (
  'size' => 10,
  'control_name' => 'servicios[cliente]',
)); echo $value ? $value : '&nbsp;' ?>
    <?php echo button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/servicios/clase/Clientes/frame/sf_admin_edit_form/campo1/co_cli/campo2/cli_des/obj1/servicios_cliente/obj2/servicios_nombre/')  ?>

<?php  ?>