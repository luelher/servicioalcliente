<?php
// auto-generated by sfPropelAdmin
// date: 2007/11/23 01:23:30
?>
<?php echo form_tag('servicios/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($servicios, 'getId') ?>

<fieldset id="sf_fieldset_cliente" class="">
<h2><?php echo __('Cliente') ?></h2>


<div class="form-row">
  <?php echo label_for('servicios[cliente]', __($labels['servicios{cliente}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('servicios{cliente}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('servicios{cliente}')): ?>
    <?php echo form_error('servicios{cliente}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($servicios, 'getCliente', array (
  'size' => 10,
  'control_name' => 'servicios[cliente]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('servicios[nombre]', __($labels['servicios{nombre}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('servicios{nombre}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('servicios{nombre}')): ?>
    <?php echo form_error('servicios{nombre}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($servicios, 'getNombre', array (
  'disabled' => true,
  'control_name' => 'servicios[nombre]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
<fieldset id="sf_fieldset_servicio" class="">
<h2><?php echo __('Servicio') ?></h2>


<div class="form-row">
  <?php echo label_for('servicios[situacion]', __($labels['servicios{situacion}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('servicios{situacion}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('servicios{situacion}')): ?>
    <?php echo form_error('servicios{situacion}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_textarea_tag($servicios, 'getSituacion', array (
  'size' => '100x14',
  'control_name' => 'servicios[situacion]',
  'rich' => true,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('servicios[observacion]', __($labels['servicios{observacion}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('servicios{observacion}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('servicios{observacion}')): ?>
    <?php echo form_error('servicios{observacion}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_textarea_tag($servicios, 'getObservacion', array (
  'size' => '100x14',
  'control_name' => 'servicios[observacion]',
  'rich' => true,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('servicios[fecha]', __($labels['servicios{fecha}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('servicios{fecha}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('servicios{fecha}')): ?>
    <?php echo form_error('servicios{fecha}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($servicios, 'getFecha', array (
  'rich' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'servicios[fecha]',
  'date_format' => 'dd/MM/yy',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('servicios' => $servicios)) ?>

</form>

<ul class="sf_admin_actions">
  </ul>
