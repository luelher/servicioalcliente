
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>
<?php use_helper('Javascript', 'tabs') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>
<?php //use_stylesheet('main') ?>


<?php
  $i=0;
  $cod='';
  foreach ($objs as $obj)
  {
      if($i==0) $cod .=  "var firstObj = f.".$form.".".$obj.";";
    $cod .= "f.".$form.".".$obj.".value=val[".$i."];
";
    $i++;
  }
 ?>

<?php $js = "
   function aceptar(val)
   {
     f=opener.document;".
   "".$cod."" .
       "self.close();
   firstObj.focus();

   }
"; ?>
<?php echo javascript_tag($js); ?>

<div id="sf_admin_container">

<?php tabMainJS("tp1","tabPane1", "tabPage1", 'Registros');?>

<div id="sf_admin_content">
<?php if (!$pager->getNbResults()): ?>
<?php echo __('no result') ?>
<?php else: ?>
<?php include_partial('list', array('ctlg' => $ctlg, 'pager' => $pager, 'columnas' => $columnas, 'objs' => $objs, 'clase' => $clase, 'param' => $param)) ?>
<?php endif; ?>
</div>

<?php tabPageOpenClose("tp1", "tabPage2", 'Filtros');?>

<div id="sf_admin_bar">
<?php include_partial('filters', array('filters' => $filters, 'ctlg' => $ctlg, 'columnas' => $columnas, 'objs' => $objs, 'clase' => $clase, 'param' => $param)) ?>
</div>

<?php tabInit();?>

</div>