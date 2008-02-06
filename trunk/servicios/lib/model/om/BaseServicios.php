<?php


abstract class BaseServicios extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $cliente;


	
	protected $factura;


	
	protected $articulo;


	
	protected $situacion;


	
	protected $observacion;


	
	protected $fecha;


	
	protected $estado;


	
	protected $id;

	
	protected $collAccioness;

	
	protected $lastAccionesCriteria = null;

	
	protected $collEntregass;

	
	protected $lastEntregasCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCliente()
	{

		return $this->cliente;
	}

	
	public function getFactura()
	{

		return $this->factura;
	}

	
	public function getArticulo()
	{

		return $this->articulo;
	}

	
	public function getSituacion()
	{

		return $this->situacion;
	}

	
	public function getObservacion()
	{

		return $this->observacion;
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

	
	public function getEstado()
	{

		return $this->estado;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setCliente($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cliente !== $v) {
			$this->cliente = $v;
			$this->modifiedColumns[] = ServiciosPeer::CLIENTE;
		}

	} 
	
	public function setFactura($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->factura !== $v) {
			$this->factura = $v;
			$this->modifiedColumns[] = ServiciosPeer::FACTURA;
		}

	} 
	
	public function setArticulo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->articulo !== $v) {
			$this->articulo = $v;
			$this->modifiedColumns[] = ServiciosPeer::ARTICULO;
		}

	} 
	
	public function setSituacion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->situacion !== $v) {
			$this->situacion = $v;
			$this->modifiedColumns[] = ServiciosPeer::SITUACION;
		}

	} 
	
	public function setObservacion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->observacion !== $v) {
			$this->observacion = $v;
			$this->modifiedColumns[] = ServiciosPeer::OBSERVACION;
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
			$this->modifiedColumns[] = ServiciosPeer::FECHA;
		}

	} 
	
	public function setEstado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = ServiciosPeer::ESTADO;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ServiciosPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->cliente = $rs->getString($startcol + 0);

			$this->factura = $rs->getInt($startcol + 1);

			$this->articulo = $rs->getString($startcol + 2);

			$this->situacion = $rs->getString($startcol + 3);

			$this->observacion = $rs->getString($startcol + 4);

			$this->fecha = $rs->getDate($startcol + 5, null);

			$this->estado = $rs->getString($startcol + 6);

			$this->id = $rs->getInt($startcol + 7);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Servicios object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ServiciosPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ServiciosPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ServiciosPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ServiciosPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ServiciosPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collAccioness !== null) {
				foreach($this->collAccioness as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collEntregass !== null) {
				foreach($this->collEntregass as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

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


			if (($retval = ServiciosPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAccioness !== null) {
					foreach($this->collAccioness as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collEntregass !== null) {
					foreach($this->collEntregass as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ServiciosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCliente();
				break;
			case 1:
				return $this->getFactura();
				break;
			case 2:
				return $this->getArticulo();
				break;
			case 3:
				return $this->getSituacion();
				break;
			case 4:
				return $this->getObservacion();
				break;
			case 5:
				return $this->getFecha();
				break;
			case 6:
				return $this->getEstado();
				break;
			case 7:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ServiciosPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCliente(),
			$keys[1] => $this->getFactura(),
			$keys[2] => $this->getArticulo(),
			$keys[3] => $this->getSituacion(),
			$keys[4] => $this->getObservacion(),
			$keys[5] => $this->getFecha(),
			$keys[6] => $this->getEstado(),
			$keys[7] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ServiciosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCliente($value);
				break;
			case 1:
				$this->setFactura($value);
				break;
			case 2:
				$this->setArticulo($value);
				break;
			case 3:
				$this->setSituacion($value);
				break;
			case 4:
				$this->setObservacion($value);
				break;
			case 5:
				$this->setFecha($value);
				break;
			case 6:
				$this->setEstado($value);
				break;
			case 7:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ServiciosPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCliente($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFactura($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setArticulo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSituacion($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setObservacion($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFecha($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setEstado($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setId($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ServiciosPeer::DATABASE_NAME);

		if ($this->isColumnModified(ServiciosPeer::CLIENTE)) $criteria->add(ServiciosPeer::CLIENTE, $this->cliente);
		if ($this->isColumnModified(ServiciosPeer::FACTURA)) $criteria->add(ServiciosPeer::FACTURA, $this->factura);
		if ($this->isColumnModified(ServiciosPeer::ARTICULO)) $criteria->add(ServiciosPeer::ARTICULO, $this->articulo);
		if ($this->isColumnModified(ServiciosPeer::SITUACION)) $criteria->add(ServiciosPeer::SITUACION, $this->situacion);
		if ($this->isColumnModified(ServiciosPeer::OBSERVACION)) $criteria->add(ServiciosPeer::OBSERVACION, $this->observacion);
		if ($this->isColumnModified(ServiciosPeer::FECHA)) $criteria->add(ServiciosPeer::FECHA, $this->fecha);
		if ($this->isColumnModified(ServiciosPeer::ESTADO)) $criteria->add(ServiciosPeer::ESTADO, $this->estado);
		if ($this->isColumnModified(ServiciosPeer::ID)) $criteria->add(ServiciosPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ServiciosPeer::DATABASE_NAME);

		$criteria->add(ServiciosPeer::ID, $this->id);

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

		$copyObj->setCliente($this->cliente);

		$copyObj->setFactura($this->factura);

		$copyObj->setArticulo($this->articulo);

		$copyObj->setSituacion($this->situacion);

		$copyObj->setObservacion($this->observacion);

		$copyObj->setFecha($this->fecha);

		$copyObj->setEstado($this->estado);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getAccioness() as $relObj) {
				$copyObj->addAcciones($relObj->copy($deepCopy));
			}

			foreach($this->getEntregass() as $relObj) {
				$copyObj->addEntregas($relObj->copy($deepCopy));
			}

		} 

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
			self::$peer = new ServiciosPeer();
		}
		return self::$peer;
	}

	
	public function initAccioness()
	{
		if ($this->collAccioness === null) {
			$this->collAccioness = array();
		}
	}

	
	public function getAccioness($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAccionesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAccioness === null) {
			if ($this->isNew()) {
			   $this->collAccioness = array();
			} else {

				$criteria->add(AccionesPeer::SERVICIOS_ID, $this->getCliente());

				AccionesPeer::addSelectColumns($criteria);
				$this->collAccioness = AccionesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AccionesPeer::SERVICIOS_ID, $this->getCliente());

				AccionesPeer::addSelectColumns($criteria);
				if (!isset($this->lastAccionesCriteria) || !$this->lastAccionesCriteria->equals($criteria)) {
					$this->collAccioness = AccionesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAccionesCriteria = $criteria;
		return $this->collAccioness;
	}

	
	public function countAccioness($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAccionesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AccionesPeer::SERVICIOS_ID, $this->getCliente());

		return AccionesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAcciones(Acciones $l)
	{
		$this->collAccioness[] = $l;
		$l->setServicios($this);
	}

	
	public function initEntregass()
	{
		if ($this->collEntregass === null) {
			$this->collEntregass = array();
		}
	}

	
	public function getEntregass($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseEntregasPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collEntregass === null) {
			if ($this->isNew()) {
			   $this->collEntregass = array();
			} else {

				$criteria->add(EntregasPeer::SERVICIOS_ID, $this->getCliente());

				EntregasPeer::addSelectColumns($criteria);
				$this->collEntregass = EntregasPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(EntregasPeer::SERVICIOS_ID, $this->getCliente());

				EntregasPeer::addSelectColumns($criteria);
				if (!isset($this->lastEntregasCriteria) || !$this->lastEntregasCriteria->equals($criteria)) {
					$this->collEntregass = EntregasPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastEntregasCriteria = $criteria;
		return $this->collEntregass;
	}

	
	public function countEntregass($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseEntregasPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(EntregasPeer::SERVICIOS_ID, $this->getCliente());

		return EntregasPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addEntregas(Entregas $l)
	{
		$this->collEntregass[] = $l;
		$l->setServicios($this);
	}

} 