<?php
// auto-generated by sfPropelAdmin
// date: 2007/11/27 01:35:28
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Edici�n de Entregas/Devoluciones', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('entregas/edit_header', array('entregas' => $entregas)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('entregas/edit_messages', array('entregas' => $entregas, 'labels' => $labels)) ?>
<?php include_partial('entregas/edit_form', array('entregas' => $entregas, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('entregas/edit_footer', array('entregas' => $entregas)) ?>
</div>

</div>
