<?php
// auto-generated by sfPropelAdmin
// date: 2007/11/27 01:35:23
?>
<td colspan="3">
    <?php echo link_to($acciones->getNombre() ? $acciones->getNombre() : __('-'), 'acciones/edit?id='.$acciones->getId()) ?>
     - 
    <?php echo $acciones->getAccion() ?>
     - 
    <?php echo ($acciones->getFecha() !== null && $acciones->getFecha() !== '') ? format_date($acciones->getFecha(), "dd/MM/yy") : '' ?>
     - 
</td>