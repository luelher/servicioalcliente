<?php
// auto-generated by sfPropelAdmin
// date: 2007/11/27 01:10:27
?>
<td colspan="4">
    <?php echo link_to($servicios->getCliente() ? $servicios->getCliente() : __('-'), 'servicios/edit?id='.$servicios->getId()) ?>
     - 
    <?php echo $servicios->getNombre() ?>
     - 
    <?php echo $servicios->getSituacion() ?>
     - 
    <?php echo $servicios->getObservacion() ?>
     - 
</td>