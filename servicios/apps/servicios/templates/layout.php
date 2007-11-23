<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<?php //include_stylesheets() ?>
<?php //include_javascript() ?>

<link rel="shortcut icon" href="/favicon.ico" />

<style>
#menu li
{
  display: inline;
  list-style-display: none;
}
</style>

</head>
<body>

<ul id="menu">
  <li><?php echo link_to('Clientes','clientes') ?></li>
  <li><?php echo link_to('Servicios','servicios') ?></li>
  <li><?php echo link_to('Acciones','acciones') ?></li>
  <li><?php echo link_to('Entregas','entregas') ?></li>
</ul>

<?php echo $sf_data->getRaw('sf_content') ?>

</body>
</html>
