<?php


abstract class BaseMoneda extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_mone;


	
	protected $mone_des = ' ';


	
	protected $cambio = 0;


	
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

	
	protected $collDocumCcs;

	
	protected $lastDocumCcCriteria = null;

	
	protected $collCobross;

	
	protected $lastCobrosCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoMone()
	{

		return $this->co_mone;
	}

	
	public function getMoneDes()
	{

		return $this->mone_des;
	}

	
	public function getCambio()
	{

		return $this->cambio;
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

	
	public function getFeUsIn($format = 'Y-m-d')
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

	
	public function getFeUsMo($format = 'Y-m-d')
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

	
	public function getFeUsEl($format = 'Y-m-d')
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

	
	public function setCoMone($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_mone !== $v) {
			$this->co_mone = $v;
			$this->modifiedColumns[] = MonedaPeer::CO_MONE;
		}

	} 
	
	public function setMoneDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mone_des !== $v || $v === ' ') {
			$this->mone_des = $v;
			$this->modifiedColumns[] = MonedaPeer::MONE_DES;
		}

	} 
	
	public function setCambio($v)
	{

		if ($this->cambio !== $v || $v === 0) {
			$this->cambio = $v;
			$this->modifiedColumns[] = MonedaPeer::CAMBIO;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = MonedaPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = MonedaPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = MonedaPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = MonedaPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = MonedaPeer::CO_US_IN;
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
			$this->modifiedColumns[] = MonedaPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = MonedaPeer::CO_US_MO;
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
			$this->modifiedColumns[] = MonedaPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = MonedaPeer::CO_US_EL;
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
			$this->modifiedColumns[] = MonedaPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = MonedaPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = MonedaPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = MonedaPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = MonedaPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_mone = $rs->getString($startcol + 0);

			$this->mone_des = $rs->getString($startcol + 1);

			$this->cambio = $rs->getFloat($startcol + 2);

			$this->campo1 = $rs->getString($startcol + 3);

			$this->campo2 = $rs->getString($startcol + 4);

			$this->campo3 = $rs->getString($startcol + 5);

			$this->campo4 = $rs->getString($startcol + 6);

			$this->co_us_in = $rs->getString($startcol + 7);

			$this->fe_us_in = $rs->getDate($startcol + 8, null);

			$this->co_us_mo = $rs->getString($startcol + 9);

			$this->fe_us_mo = $rs->getDate($startcol + 10, null);

			$this->co_us_el = $rs->getString($startcol + 11);

			$this->fe_us_el = $rs->getDate($startcol + 12, null);

			$this->revisado = $rs->getString($startcol + 13);

			$this->trasnfe = $rs->getString($startcol + 14);

			$this->co_sucu = $rs->getString($startcol + 15);

			$this->rowguid = $rs->getString($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Moneda object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MonedaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MonedaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(MonedaPeer::DATABASE_NAME);
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
					$pk = MonedaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += MonedaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collDocumCcs !== null) {
				foreach($this->collDocumCcs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCobross !== null) {
				foreach($this->collCobross as $referrerFK) {
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


			if (($retval = MonedaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collDocumCcs !== null) {
					foreach($this->collDocumCcs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCobross !== null) {
					foreach($this->collCobross as $referrerFK) {
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
		$pos = MonedaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoMone();
				break;
			case 1:
				return $this->getMoneDes();
				break;
			case 2:
				return $this->getCambio();
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
		$keys = MonedaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoMone(),
			$keys[1] => $this->getMoneDes(),
			$keys[2] => $this->getCambio(),
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
		$pos = MonedaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoMone($value);
				break;
			case 1:
				$this->setMoneDes($value);
				break;
			case 2:
				$this->setCambio($value);
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
		$keys = MonedaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoMone($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMoneDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCambio($arr[$keys[2]]);
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
		$criteria = new Criteria(MonedaPeer::DATABASE_NAME);

		if ($this->isColumnModified(MonedaPeer::CO_MONE)) $criteria->add(MonedaPeer::CO_MONE, $this->co_mone);
		if ($this->isColumnModified(MonedaPeer::MONE_DES)) $criteria->add(MonedaPeer::MONE_DES, $this->mone_des);
		if ($this->isColumnModified(MonedaPeer::CAMBIO)) $criteria->add(MonedaPeer::CAMBIO, $this->cambio);
		if ($this->isColumnModified(MonedaPeer::CAMPO1)) $criteria->add(MonedaPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(MonedaPeer::CAMPO2)) $criteria->add(MonedaPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(MonedaPeer::CAMPO3)) $criteria->add(MonedaPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(MonedaPeer::CAMPO4)) $criteria->add(MonedaPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(MonedaPeer::CO_US_IN)) $criteria->add(MonedaPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(MonedaPeer::FE_US_IN)) $criteria->add(MonedaPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(MonedaPeer::CO_US_MO)) $criteria->add(MonedaPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(MonedaPeer::FE_US_MO)) $criteria->add(MonedaPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(MonedaPeer::CO_US_EL)) $criteria->add(MonedaPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(MonedaPeer::FE_US_EL)) $criteria->add(MonedaPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(MonedaPeer::REVISADO)) $criteria->add(MonedaPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(MonedaPeer::TRASNFE)) $criteria->add(MonedaPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(MonedaPeer::CO_SUCU)) $criteria->add(MonedaPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(MonedaPeer::ROWGUID)) $criteria->add(MonedaPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MonedaPeer::DATABASE_NAME);

		$criteria->add(MonedaPeer::CO_MONE, $this->co_mone);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoMone();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoMone($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setMoneDes($this->mone_des);

		$copyObj->setCambio($this->cambio);

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

			foreach($this->getDocumCcs() as $relObj) {
				$copyObj->addDocumCc($relObj->copy($deepCopy));
			}

			foreach($this->getCobross() as $relObj) {
				$copyObj->addCobros($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoMone(NULL); 
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
			self::$peer = new MonedaPeer();
		}
		return self::$peer;
	}

	
	public function initDocumCcs()
	{
		if ($this->collDocumCcs === null) {
			$this->collDocumCcs = array();
		}
	}

	
	public function getDocumCcs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
			   $this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

				DocumCcPeer::addSelectColumns($criteria);
				$this->collDocumCcs = DocumCcPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

				DocumCcPeer::addSelectColumns($criteria);
				if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
					$this->collDocumCcs = DocumCcPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastDocumCcCriteria = $criteria;
		return $this->collDocumCcs;
	}

	
	public function countDocumCcs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

		return DocumCcPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDocumCc(DocumCc $l)
	{
		$this->collDocumCcs[] = $l;
		$l->setMoneda($this);
	}


	
	public function getDocumCcsJoinClientes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}


	
	public function getDocumCcsJoinVendedor($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinVendedor($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}


	
	public function getDocumCcsJoinTabulado($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}


	
	public function getDocumCcsJoinAlmacen($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::MONEDA, $this->getCoMone());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinAlmacen($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}

	
	public function initCobross()
	{
		if ($this->collCobross === null) {
			$this->collCobross = array();
		}
	}

	
	public function getCobross($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
			   $this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

				CobrosPeer::addSelectColumns($criteria);
				$this->collCobross = CobrosPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

				CobrosPeer::addSelectColumns($criteria);
				if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
					$this->collCobross = CobrosPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCobrosCriteria = $criteria;
		return $this->collCobross;
	}

	
	public function countCobross($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

		return CobrosPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCobros(Cobros $l)
	{
		$this->collCobross[] = $l;
		$l->setMoneda($this);
	}


	
	public function getCobrossJoinClientes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
				$this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

				$this->collCobross = CobrosPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}


	
	public function getCobrossJoinVendedor($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
				$this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

				$this->collCobross = CobrosPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinVendedor($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}


	
	public function getCobrossJoinAlmacen($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
				$this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

				$this->collCobross = CobrosPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::MONEDA, $this->getCoMone());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinAlmacen($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}

} 