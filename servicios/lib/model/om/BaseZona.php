<?php


abstract class BaseZona extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_zon;


	
	protected $zon_des = ' ';


	
	protected $dis_cen = ' ';


	
	protected $campo1 = ' ';


	
	protected $campo2 = ' ';


	
	protected $campo3 = ' ';


	
	protected $campo4 = ' ';


	
	protected $co_us_in = ' ';


	
	protected $fe_us_in;


	
	protected $co_us_mo = ' ';


	
	protected $fe_us_mo;


	
	protected $co_us_el = ' ';


	
	protected $fe_us_el;


	
	protected $revisado = ' ';


	
	protected $trasnfe = ' ';


	
	protected $co_sucu = ' ';


	
	protected $rowguid = '(newid())';

	
	protected $collClientess;

	
	protected $lastClientesCriteria = null;

	
	protected $collProvs;

	
	protected $lastProvCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoZon()
	{

		return $this->co_zon;
	}

	
	public function getZonDes()
	{

		return $this->zon_des;
	}

	
	public function getDisCen()
	{

		return $this->dis_cen;
	}

	
	public function getCampo1()
	{

		return $this->campo1;
	}

	
	public function getCampo2()
	{

		return $this->campo2;
	}

	
	public function getCampo3()
	{

		return $this->campo3;
	}

	
	public function getCampo4()
	{

		return $this->campo4;
	}

	
	public function getCoUsIn()
	{

		return $this->co_us_in;
	}

	
	public function getFeUsIn($format = 'Y-m-d H:i:s')
	{

		if ($this->fe_us_in === null || $this->fe_us_in === '') {
			return null;
		} elseif (!is_int($this->fe_us_in)) {
						$ts = strtotime($this->fe_us_in);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fe_us_in] as date/time value: " . var_export($this->fe_us_in, true));
			}
		} else {
			$ts = $this->fe_us_in;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCoUsMo()
	{

		return $this->co_us_mo;
	}

	
	public function getFeUsMo($format = 'Y-m-d H:i:s')
	{

		if ($this->fe_us_mo === null || $this->fe_us_mo === '') {
			return null;
		} elseif (!is_int($this->fe_us_mo)) {
						$ts = strtotime($this->fe_us_mo);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fe_us_mo] as date/time value: " . var_export($this->fe_us_mo, true));
			}
		} else {
			$ts = $this->fe_us_mo;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCoUsEl()
	{

		return $this->co_us_el;
	}

	
	public function getFeUsEl($format = 'Y-m-d H:i:s')
	{

		if ($this->fe_us_el === null || $this->fe_us_el === '') {
			return null;
		} elseif (!is_int($this->fe_us_el)) {
						$ts = strtotime($this->fe_us_el);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fe_us_el] as date/time value: " . var_export($this->fe_us_el, true));
			}
		} else {
			$ts = $this->fe_us_el;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getRevisado()
	{

		return $this->revisado;
	}

	
	public function getTrasnfe()
	{

		return $this->trasnfe;
	}

	
	public function getCoSucu()
	{

		return $this->co_sucu;
	}

	
	public function getRowguid()
	{

		return $this->rowguid;
	}

	
	public function setCoZon($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_zon !== $v) {
			$this->co_zon = $v;
			$this->modifiedColumns[] = ZonaPeer::CO_ZON;
		}

	} 
	
	public function setZonDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->zon_des !== $v || $v === ' ') {
			$this->zon_des = $v;
			$this->modifiedColumns[] = ZonaPeer::ZON_DES;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = ZonaPeer::DIS_CEN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = ZonaPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = ZonaPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = ZonaPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = ZonaPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = ZonaPeer::CO_US_IN;
		}

	} 
	
	public function setFeUsIn($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fe_us_in] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fe_us_in !== $ts) {
			$this->fe_us_in = $ts;
			$this->modifiedColumns[] = ZonaPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = ZonaPeer::CO_US_MO;
		}

	} 
	
	public function setFeUsMo($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fe_us_mo] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fe_us_mo !== $ts) {
			$this->fe_us_mo = $ts;
			$this->modifiedColumns[] = ZonaPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = ZonaPeer::CO_US_EL;
		}

	} 
	
	public function setFeUsEl($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fe_us_el] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fe_us_el !== $ts) {
			$this->fe_us_el = $ts;
			$this->modifiedColumns[] = ZonaPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = ZonaPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = ZonaPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = ZonaPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = ZonaPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_zon = $rs->getString($startcol + 0);

			$this->zon_des = $rs->getString($startcol + 1);

			$this->dis_cen = $rs->getString($startcol + 2);

			$this->campo1 = $rs->getString($startcol + 3);

			$this->campo2 = $rs->getString($startcol + 4);

			$this->campo3 = $rs->getString($startcol + 5);

			$this->campo4 = $rs->getString($startcol + 6);

			$this->co_us_in = $rs->getString($startcol + 7);

			$this->fe_us_in = $rs->getTimestamp($startcol + 8, null);

			$this->co_us_mo = $rs->getString($startcol + 9);

			$this->fe_us_mo = $rs->getTimestamp($startcol + 10, null);

			$this->co_us_el = $rs->getString($startcol + 11);

			$this->fe_us_el = $rs->getTimestamp($startcol + 12, null);

			$this->revisado = $rs->getString($startcol + 13);

			$this->trasnfe = $rs->getString($startcol + 14);

			$this->co_sucu = $rs->getString($startcol + 15);

			$this->rowguid = $rs->getString($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Zona object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ZonaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ZonaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ZonaPeer::DATABASE_NAME);
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
					$pk = ZonaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ZonaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collClientess !== null) {
				foreach($this->collClientess as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collProvs !== null) {
				foreach($this->collProvs as $referrerFK) {
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


			if (($retval = ZonaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collClientess !== null) {
					foreach($this->collClientess as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collProvs !== null) {
					foreach($this->collProvs as $referrerFK) {
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
		$pos = ZonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoZon();
				break;
			case 1:
				return $this->getZonDes();
				break;
			case 2:
				return $this->getDisCen();
				break;
			case 3:
				return $this->getCampo1();
				break;
			case 4:
				return $this->getCampo2();
				break;
			case 5:
				return $this->getCampo3();
				break;
			case 6:
				return $this->getCampo4();
				break;
			case 7:
				return $this->getCoUsIn();
				break;
			case 8:
				return $this->getFeUsIn();
				break;
			case 9:
				return $this->getCoUsMo();
				break;
			case 10:
				return $this->getFeUsMo();
				break;
			case 11:
				return $this->getCoUsEl();
				break;
			case 12:
				return $this->getFeUsEl();
				break;
			case 13:
				return $this->getRevisado();
				break;
			case 14:
				return $this->getTrasnfe();
				break;
			case 15:
				return $this->getCoSucu();
				break;
			case 16:
				return $this->getRowguid();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ZonaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoZon(),
			$keys[1] => $this->getZonDes(),
			$keys[2] => $this->getDisCen(),
			$keys[3] => $this->getCampo1(),
			$keys[4] => $this->getCampo2(),
			$keys[5] => $this->getCampo3(),
			$keys[6] => $this->getCampo4(),
			$keys[7] => $this->getCoUsIn(),
			$keys[8] => $this->getFeUsIn(),
			$keys[9] => $this->getCoUsMo(),
			$keys[10] => $this->getFeUsMo(),
			$keys[11] => $this->getCoUsEl(),
			$keys[12] => $this->getFeUsEl(),
			$keys[13] => $this->getRevisado(),
			$keys[14] => $this->getTrasnfe(),
			$keys[15] => $this->getCoSucu(),
			$keys[16] => $this->getRowguid(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ZonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoZon($value);
				break;
			case 1:
				$this->setZonDes($value);
				break;
			case 2:
				$this->setDisCen($value);
				break;
			case 3:
				$this->setCampo1($value);
				break;
			case 4:
				$this->setCampo2($value);
				break;
			case 5:
				$this->setCampo3($value);
				break;
			case 6:
				$this->setCampo4($value);
				break;
			case 7:
				$this->setCoUsIn($value);
				break;
			case 8:
				$this->setFeUsIn($value);
				break;
			case 9:
				$this->setCoUsMo($value);
				break;
			case 10:
				$this->setFeUsMo($value);
				break;
			case 11:
				$this->setCoUsEl($value);
				break;
			case 12:
				$this->setFeUsEl($value);
				break;
			case 13:
				$this->setRevisado($value);
				break;
			case 14:
				$this->setTrasnfe($value);
				break;
			case 15:
				$this->setCoSucu($value);
				break;
			case 16:
				$this->setRowguid($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ZonaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoZon($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setZonDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDisCen($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCampo1($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCampo2($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCampo3($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCampo4($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCoUsIn($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setFeUsIn($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCoUsMo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFeUsMo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCoUsEl($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFeUsEl($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setRevisado($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setTrasnfe($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCoSucu($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setRowguid($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ZonaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ZonaPeer::CO_ZON)) $criteria->add(ZonaPeer::CO_ZON, $this->co_zon);
		if ($this->isColumnModified(ZonaPeer::ZON_DES)) $criteria->add(ZonaPeer::ZON_DES, $this->zon_des);
		if ($this->isColumnModified(ZonaPeer::DIS_CEN)) $criteria->add(ZonaPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(ZonaPeer::CAMPO1)) $criteria->add(ZonaPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(ZonaPeer::CAMPO2)) $criteria->add(ZonaPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(ZonaPeer::CAMPO3)) $criteria->add(ZonaPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(ZonaPeer::CAMPO4)) $criteria->add(ZonaPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(ZonaPeer::CO_US_IN)) $criteria->add(ZonaPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(ZonaPeer::FE_US_IN)) $criteria->add(ZonaPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(ZonaPeer::CO_US_MO)) $criteria->add(ZonaPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(ZonaPeer::FE_US_MO)) $criteria->add(ZonaPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(ZonaPeer::CO_US_EL)) $criteria->add(ZonaPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(ZonaPeer::FE_US_EL)) $criteria->add(ZonaPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(ZonaPeer::REVISADO)) $criteria->add(ZonaPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(ZonaPeer::TRASNFE)) $criteria->add(ZonaPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(ZonaPeer::CO_SUCU)) $criteria->add(ZonaPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(ZonaPeer::ROWGUID)) $criteria->add(ZonaPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ZonaPeer::DATABASE_NAME);

		$criteria->add(ZonaPeer::CO_ZON, $this->co_zon);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoZon();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoZon($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setZonDes($this->zon_des);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setCampo1($this->campo1);

		$copyObj->setCampo2($this->campo2);

		$copyObj->setCampo3($this->campo3);

		$copyObj->setCampo4($this->campo4);

		$copyObj->setCoUsIn($this->co_us_in);

		$copyObj->setFeUsIn($this->fe_us_in);

		$copyObj->setCoUsMo($this->co_us_mo);

		$copyObj->setFeUsMo($this->fe_us_mo);

		$copyObj->setCoUsEl($this->co_us_el);

		$copyObj->setFeUsEl($this->fe_us_el);

		$copyObj->setRevisado($this->revisado);

		$copyObj->setTrasnfe($this->trasnfe);

		$copyObj->setCoSucu($this->co_sucu);

		$copyObj->setRowguid($this->rowguid);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getClientess() as $relObj) {
				$copyObj->addClientes($relObj->copy($deepCopy));
			}

			foreach($this->getProvs() as $relObj) {
				$copyObj->addProv($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoZon(NULL); 
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
			self::$peer = new ZonaPeer();
		}
		return self::$peer;
	}

	
	public function initClientess()
	{
		if ($this->collClientess === null) {
			$this->collClientess = array();
		}
	}

	
	public function getClientess($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClientesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClientess === null) {
			if ($this->isNew()) {
			   $this->collClientess = array();
			} else {

				$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

				ClientesPeer::addSelectColumns($criteria);
				$this->collClientess = ClientesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

				ClientesPeer::addSelectColumns($criteria);
				if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
					$this->collClientess = ClientesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastClientesCriteria = $criteria;
		return $this->collClientess;
	}

	
	public function countClientess($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseClientesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

		return ClientesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClientes(Clientes $l)
	{
		$this->collClientess[] = $l;
		$l->setZona($this);
	}


	
	public function getClientessJoinTipoCli($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClientesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClientess === null) {
			if ($this->isNew()) {
				$this->collClientess = array();
			} else {

				$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

				$this->collClientess = ClientesPeer::doSelectJoinTipoCli($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinTipoCli($criteria, $con);
			}
		}
		$this->lastClientesCriteria = $criteria;

		return $this->collClientess;
	}


	
	public function getClientessJoinSegmento($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClientesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClientess === null) {
			if ($this->isNew()) {
				$this->collClientess = array();
			} else {

				$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

				$this->collClientess = ClientesPeer::doSelectJoinSegmento($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinSegmento($criteria, $con);
			}
		}
		$this->lastClientesCriteria = $criteria;

		return $this->collClientess;
	}


	
	public function getClientessJoinVendedor($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClientesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClientess === null) {
			if ($this->isNew()) {
				$this->collClientess = array();
			} else {

				$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

				$this->collClientess = ClientesPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinVendedor($criteria, $con);
			}
		}
		$this->lastClientesCriteria = $criteria;

		return $this->collClientess;
	}


	
	public function getClientessJoinCtaIngr($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClientesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClientess === null) {
			if ($this->isNew()) {
				$this->collClientess = array();
			} else {

				$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

				$this->collClientess = ClientesPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_ZON, $this->getCoZon());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		}
		$this->lastClientesCriteria = $criteria;

		return $this->collClientess;
	}

	
	public function initProvs()
	{
		if ($this->collProvs === null) {
			$this->collProvs = array();
		}
	}

	
	public function getProvs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProvPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProvs === null) {
			if ($this->isNew()) {
			   $this->collProvs = array();
			} else {

				$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

				ProvPeer::addSelectColumns($criteria);
				$this->collProvs = ProvPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

				ProvPeer::addSelectColumns($criteria);
				if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
					$this->collProvs = ProvPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProvCriteria = $criteria;
		return $this->collProvs;
	}

	
	public function countProvs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseProvPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

		return ProvPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProv(Prov $l)
	{
		$this->collProvs[] = $l;
		$l->setZona($this);
	}


	
	public function getProvsJoinSegmento($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProvPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProvs === null) {
			if ($this->isNew()) {
				$this->collProvs = array();
			} else {

				$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

				$this->collProvs = ProvPeer::doSelectJoinSegmento($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinSegmento($criteria, $con);
			}
		}
		$this->lastProvCriteria = $criteria;

		return $this->collProvs;
	}


	
	public function getProvsJoinTipoPro($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProvPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProvs === null) {
			if ($this->isNew()) {
				$this->collProvs = array();
			} else {

				$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

				$this->collProvs = ProvPeer::doSelectJoinTipoPro($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinTipoPro($criteria, $con);
			}
		}
		$this->lastProvCriteria = $criteria;

		return $this->collProvs;
	}


	
	public function getProvsJoinCtaIngr($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProvPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProvs === null) {
			if ($this->isNew()) {
				$this->collProvs = array();
			} else {

				$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

				$this->collProvs = ProvPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_ZON, $this->getCoZon());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		}
		$this->lastProvCriteria = $criteria;

		return $this->collProvs;
	}

} 