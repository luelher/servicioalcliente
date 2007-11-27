<?php
// auto-generated by sfValidatorConfigHandler
// date: 2007/11/27 01:10:31

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $validators = array();
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $validators = array();
  $validators['MyStringValidator1'] = new sfStringValidator();
  $validators['MyStringValidator1']->initialize($context, array (
  'min' => 1,
  'min_error' => 'Se debe introducir una c�dula v�lida',
  'max' => 8,
  'max_error' => 'Se debe introducir una c�dula v�lida',
));
  $validators['MyStringValidator3'] = new sfStringValidator();
  $validators['MyStringValidator3']->initialize($context, array (
  'min' => 1,
  'min_error' => 'La Descripci�n no puede tener menos de 2 caracteres',
  'max' => 250,
  'max_error' => 'La Descripci�n no puede pasar mas de 250 caracteres',
));
  $validatorManager->registerName('cliente', 1, 'Debe seleccionar un cliente', 'servicios', null, false);
  $validatorManager->registerValidator('cliente', $validators['MyStringValidator1'], 'servicios');
  $validatorManager->registerName('situacion', 1, 'Debe Incluir informaci�n de la observaci�n a realizar.', 'servicios', null, false);
  $validatorManager->registerValidator('situacion', $validators['MyStringValidator3'], 'servicios');
  $validatorManager->registerName('observacion', 1, 'Debe Incluir informaci�n de la observaci�n a realizar.', 'servicios', null, false);
  $validatorManager->registerValidator('observacion', $validators['MyStringValidator3'], 'servicios');
  $validatorManager->registerName('fecha', 1, 'El c�digo de la orden compra no puede estar vac�o', 'servicios', null, false);
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}