<?php
// auto-generated by sfPropelAdmin
// date: 2007/11/23 01:23:30
?>
<ul class="sf_admin_actions">
    <li><?php echo button_to(__('Crear Recibo'), 'servicios/recibo?id='.$servicios->getId(), array (
  'class' => 'sf_admin_action_recibo',
)) ?></li>
    <li><?php echo button_to(__('Listado'), 'servicios/list?id='.$servicios->getId(), array (
  'class' => 'sf_admin_action_list',
)) ?></li>
    <li><?php echo submit_tag(__('Guardar'), array (
  'name' => 'save',
  'class' => 'sf_admin_action_save',
)) ?></li>
</ul>