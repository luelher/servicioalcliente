<?php
// auto-generated by sfPropelAdmin
// date: 2007/11/27 01:10:27
?>
<?php use_helper('I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Manejo de Servicios', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('servicios/list_header', array('pager' => $pager)) ?>
<?php include_partial('servicios/list_messages', array('pager' => $pager)) ?>
</div>

<div id="sf_admin_bar">
<?php include_partial('filters', array('filters' => $filters)) ?>
</div>

<div id="sf_admin_content">
<?php if (!$pager->getNbResults()): ?>
<?php echo __('no result') ?>
<?php else: ?>
<?php include_partial('servicios/list', array('pager' => $pager)) ?>
<?php endif; ?>
<?php include_partial('list_actions') ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('servicios/list_footer', array('pager' => $pager)) ?>
</div>

</div>
