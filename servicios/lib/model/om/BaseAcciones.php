<?php


abstract class BaseAcciones extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $servicios_id;


	
	protected $accion;


	
	protected $fecha;


	
	protected $id;

	
	protected $aServicios;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getServiciosId()
	{

		return $this->servicios_id;
	}

	
	public function getAccion()
	{

		return $this->accion;
	}

	
	public function getFecha($format = 'Y-m-d')
	{

		if ($this->fecha === null || $this->fecha === '') {
			return null;
		} elseif (!is_int($this->fecha)) {
						$ts = strtotime($this->fecha);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha] as date/time value: " . var_export($this->fecha, true));
			}
		} else {
			$ts = $this->fecha;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setServiciosId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->servicios_id !== $v) {
			$this->servicios_id = $v;
			$this->modifiedColumns[] = AccionesPeer::SERVICIOS_ID;
		}

		if ($this->aServicios !== null && $this->aServicios->getCliente() !== $v) {
			$this->aServicios = null;
		}

	} 
	
	public function setAccion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->accion !== $v) {
			$this->accion = $v;
			$this->modifiedColumns[] = AccionesPeer::ACCION;
		}

	} 
	
	public function setFecha($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha !== $ts) {
			$this->fecha = $ts;
			$this->modifiedColumns[] = AccionesPeer::FECHA;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AccionesPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->servicios_id = $rs->getInt($startcol + 0);

			$this->accion = $rs->getString($startcol + 1);

			$this->fecha = $rs->getDate($startcol + 2, null);

			$this->id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Acciones object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AccionesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AccionesPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AccionesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aServicios !== null) {
				if ($this->aServicios->isModified()) {
					$affectedRows += $this->aServicios->save($con);
				}
				$this->setServicios($this->aServicios);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = AccionesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += AccionesPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aServicios !== null) {
				if (!$this->aServicios->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aServicios->getValidationFailures());
				}
			}


			if (($retval = AccionesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AccionesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getServiciosId();
				break;
			case 1:
				return $this->getAccion();
				break;
			case 2:
				return $this->getFecha();
				break;
			case 3:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AccionesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getServiciosId(),
			$keys[1] => $this->getAccion(),
			$keys[2] => $this->getFecha(),
			$keys[3] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AccionesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setServiciosId($value);
				break;
			case 1:
				$this->setAccion($value);
				break;
			case 2:
				$this->setFecha($value);
				break;
			case 3:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AccionesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setServiciosId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAccion($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFecha($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AccionesPeer::DATABASE_NAME);

		if ($this->isColumnModified(AccionesPeer::SERVICIOS_ID)) $criteria->add(AccionesPeer::SERVICIOS_ID, $this->servicios_id);
		if ($this->isColumnModified(AccionesPeer::ACCION)) $criteria->add(AccionesPeer::ACCION, $this->accion);
		if ($this->isColumnModified(AccionesPeer::FECHA)) $criteria->add(AccionesPeer::FECHA, $this->fecha);
		if ($this->isColumnModified(AccionesPeer::ID)) $criteria->add(AccionesPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AccionesPeer::DATABASE_NAME);

		$criteria->add(AccionesPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setServiciosId($this->servicios_id);

		$copyObj->setAccion($this->accion);

		$copyObj->setFecha($this->fecha);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AccionesPeer();
		}
		return self::$peer;
	}

	
	public function setServicios($v)
	{


		if ($v === null) {
			$this->setServiciosId(NULL);
		} else {
			$this->setServiciosId($v->getCliente());
		}


		$this->aServicios = $v;
	}


	
	public function getServicios($con = null)
	{
				include_once 'lib/model/om/BaseServiciosPeer.php';

		if ($this->aServicios === null && ($this->servicios_id !== null)) {

			$this->aServicios = ServiciosPeer::retrieveByPK($this->servicios_id, $con);

			
		}
		return $this->aServicios;
	}

} 