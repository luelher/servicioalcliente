<?php
// auto-generated by sfPropelAdmin
// date: 2007/11/23 01:44:37
?>
<ul class="sf_admin_actions">
    <li><?php echo button_to(__('Nota de Entrega'), 'entregas/ne?id='.$entregas->getId(), array (
  'class' => 'sf_admin_action_ne',
)) ?></li>
    <li><?php echo button_to(__('Listado'), 'entregas/list?id='.$entregas->getId(), array (
  'class' => 'sf_admin_action_list',
)) ?></li>
    <li><?php echo submit_tag(__('Guardar'), array (
  'name' => 'save',
  'class' => 'sf_admin_action_save',
)) ?></li>
</ul>
