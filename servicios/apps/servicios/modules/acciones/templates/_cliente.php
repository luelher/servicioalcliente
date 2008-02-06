<?php
/*
 * Created on 27/11/2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>
<?php use_helper('PopUp', 'Linktoapp') ?>
  <?php $value = object_input_tag($acciones, 'getCliente', array (
  'size' => 10,
  'control_name' => 'acciones[cliente]',
  'onBlur'=> remote_function(array(
            'update'   => 'divfacturas',
            'complete' => 'AjaxJSON(request, json);',
            'url'      => 'acciones/ajax',
            'with' => "'ajax=1&codigo='+this.value+'&id='+document.getElementById('id').value",
            'script' => 'true',
      ))
)); echo $value ? $value : '&nbsp;' ?>
    <?php echo button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/acciones/clase/servicios/frame/sf_admin_edit_form/campo1/cliente/campo2/id/campo3/articulo/campo4/factura/obj1/acciones_cliente/obj2/acciones_servicios_id/obj3/acciones_articulo/obj4/acciones_factura')  ?>

<?php  ?>