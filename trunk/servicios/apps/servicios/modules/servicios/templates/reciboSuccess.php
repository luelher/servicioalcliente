<?php
/*
 * Created on 23/11/2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php echo __('Agencia Royal 33 C.A. 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Servicio Nro: ').__($servicio_id) ?></br>
<?php echo __('RIF: XXXXXXXXXXXXX') ?></br>
<?php echo __('Dirección: Av. 20 entre carreras 32 y 33') ?></br>
<?php echo __('Telefonos: XXXXXXX') ?></br>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><U><?php echo __('CONSTANCIA DE RECEPCIÓN DE EQUIPOS') ?></U></strong></br>
</br>
</br>
<?php echo 'Hemos recibido del Sr/Sra: '; if($servicio) echo $servicio->getNombre(); ?>
<?php echo ', C.I: '.$servicio->getCliente() ?>
<?php echo ', los Siguientes equipos:' ?>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong><?php echo ' Factura Nro '.$servicio->getFactura().' de Fecha: '.$servicio->getFactFecEmis() ?></strong></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong><?php echo ' - '.$servicio->getNomart() ?></strong>
</br>
</br>
<?php echo 'Presentando el siguiente problema: '; ?>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo textarea_tag('name', $servicio->getSituacion(), 'size=67x2 style="border:none" readonly=true' ) ?>
</br>
</br>
<?php echo textarea_tag('dir','Dirección del Cliente: ', 'size=20x1 style="border:none" readonly=true'); ?>
<?php echo textarea_tag('textdir', $servicio->getDireccion(), 'size=50x1 style="border:none" readonly=true' ) ?>
</br>
<?php echo textarea_tag('telf','Telefonos del Cliente: ', 'size=20x1 style="border:none" readonly=true'); ?>
<?php echo textarea_tag('texttelf', $servicio->getTelefonos(), 'size=50x1 style="border:none" readonly=true' ) ?>
