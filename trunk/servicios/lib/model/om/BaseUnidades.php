<?php


abstract class BaseUnidades extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_uni;


	
	protected $des_uni = '(space(1))';


	
	protected $campo1 = '(space(1))';


	
	protected $campo2 = '(space(1))';


	
	protected $campo3 = '(space(1))';


	
	protected $campo4 = '(space(1))';


	
	protected $co_us_in = '(space(1))';


	
	protected $fe_us_in;


	
	protected $co_us_mo = '(space(1))';


	
	protected $fe_us_mo;


	
	protected $co_us_el = '(space(1))';


	
	protected $fe_us_el;


	
	protected $revisado = '(space(1))';


	
	protected $trasnfe = '(space(1))';


	
	protected $co_sucu = '(space(1))';


	
	protected $rowguid = '(newid())';


	
	protected $row_id;

	
	protected $collArtsRelatedByUniVenta;

	
	protected $lastArtRelatedByUniVentaCriteria = null;

	
	protected $collArtsRelatedBySuniVenta;

	
	protected $lastArtRelatedBySuniVentaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoUni()
	{

		return $this->co_uni;
	}

	
	public function getDesUni()
	{

		return $this->des_uni;
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

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function setCoUni($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_uni !== $v) {
			$this->co_uni = $v;
			$this->modifiedColumns[] = UnidadesPeer::CO_UNI;
		}

	} 
	
	public function setDesUni($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_uni !== $v || $v === '(space(1))') {
			$this->des_uni = $v;
			$this->modifiedColumns[] = UnidadesPeer::DES_UNI;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === '(space(1))') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = UnidadesPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === '(space(1))') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = UnidadesPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === '(space(1))') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = UnidadesPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === '(space(1))') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = UnidadesPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === '(space(1))') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = UnidadesPeer::CO_US_IN;
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
			$this->modifiedColumns[] = UnidadesPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === '(space(1))') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = UnidadesPeer::CO_US_MO;
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
			$this->modifiedColumns[] = UnidadesPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === '(space(1))') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = UnidadesPeer::CO_US_EL;
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
			$this->modifiedColumns[] = UnidadesPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === '(space(1))') {
			$this->revisado = $v;
			$this->modifiedColumns[] = UnidadesPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === '(space(1))') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = UnidadesPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === '(space(1))') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = UnidadesPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = UnidadesPeer::ROWGUID;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = UnidadesPeer::ROW_ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_uni = $rs->getString($startcol + 0);

			$this->des_uni = $rs->getString($startcol + 1);

			$this->campo1 = $rs->getString($startcol + 2);

			$this->campo2 = $rs->getString($startcol + 3);

			$this->campo3 = $rs->getString($startcol + 4);

			$this->campo4 = $rs->getString($startcol + 5);

			$this->co_us_in = $rs->getString($startcol + 6);

			$this->fe_us_in = $rs->getTimestamp($startcol + 7, null);

			$this->co_us_mo = $rs->getString($startcol + 8);

			$this->fe_us_mo = $rs->getTimestamp($startcol + 9, null);

			$this->co_us_el = $rs->getString($startcol + 10);

			$this->fe_us_el = $rs->getTimestamp($startcol + 11, null);

			$this->revisado = $rs->getString($startcol + 12);

			$this->trasnfe = $rs->getString($startcol + 13);

			$this->co_sucu = $rs->getString($startcol + 14);

			$this->rowguid = $rs->getString($startcol + 15);

			$this->row_id = $rs->getBlob($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Unidades object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UnidadesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UnidadesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(UnidadesPeer::DATABASE_NAME);
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
					$pk = UnidadesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += UnidadesPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collArtsRelatedByUniVenta !== null) {
				foreach($this->collArtsRelatedByUniVenta as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collArtsRelatedBySuniVenta !== null) {
				foreach($this->collArtsRelatedBySuniVenta as $referrerFK) {
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


			if (($retval = UnidadesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collArtsRelatedByUniVenta !== null) {
					foreach($this->collArtsRelatedByUniVenta as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collArtsRelatedBySuniVenta !== null) {
					foreach($this->collArtsRelatedBySuniVenta as $referrerFK) {
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
		$pos = UnidadesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoUni();
				break;
			case 1:
				return $this->getDesUni();
				break;
			case 2:
				return $this->getCampo1();
				break;
			case 3:
				return $this->getCampo2();
				break;
			case 4:
				return $this->getCampo3();
				break;
			case 5:
				return $this->getCampo4();
				break;
			case 6:
				return $this->getCoUsIn();
				break;
			case 7:
				return $this->getFeUsIn();
				break;
			case 8:
				return $this->getCoUsMo();
				break;
			case 9:
				return $this->getFeUsMo();
				break;
			case 10:
				return $this->getCoUsEl();
				break;
			case 11:
				return $this->getFeUsEl();
				break;
			case 12:
				return $this->getRevisado();
				break;
			case 13:
				return $this->getTrasnfe();
				break;
			case 14:
				return $this->getCoSucu();
				break;
			case 15:
				return $this->getRowguid();
				break;
			case 16:
				return $this->getRowId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UnidadesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoUni(),
			$keys[1] => $this->getDesUni(),
			$keys[2] => $this->getCampo1(),
			$keys[3] => $this->getCampo2(),
			$keys[4] => $this->getCampo3(),
			$keys[5] => $this->getCampo4(),
			$keys[6] => $this->getCoUsIn(),
			$keys[7] => $this->getFeUsIn(),
			$keys[8] => $this->getCoUsMo(),
			$keys[9] => $this->getFeUsMo(),
			$keys[10] => $this->getCoUsEl(),
			$keys[11] => $this->getFeUsEl(),
			$keys[12] => $this->getRevisado(),
			$keys[13] => $this->getTrasnfe(),
			$keys[14] => $this->getCoSucu(),
			$keys[15] => $this->getRowguid(),
			$keys[16] => $this->getRowId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UnidadesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoUni($value);
				break;
			case 1:
				$this->setDesUni($value);
				break;
			case 2:
				$this->setCampo1($value);
				break;
			case 3:
				$this->setCampo2($value);
				break;
			case 4:
				$this->setCampo3($value);
				break;
			case 5:
				$this->setCampo4($value);
				break;
			case 6:
				$this->setCoUsIn($value);
				break;
			case 7:
				$this->setFeUsIn($value);
				break;
			case 8:
				$this->setCoUsMo($value);
				break;
			case 9:
				$this->setFeUsMo($value);
				break;
			case 10:
				$this->setCoUsEl($value);
				break;
			case 11:
				$this->setFeUsEl($value);
				break;
			case 12:
				$this->setRevisado($value);
				break;
			case 13:
				$this->setTrasnfe($value);
				break;
			case 14:
				$this->setCoSucu($value);
				break;
			case 15:
				$this->setRowguid($value);
				break;
			case 16:
				$this->setRowId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UnidadesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoUni($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesUni($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCampo1($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCampo2($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCampo3($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCampo4($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCoUsIn($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFeUsIn($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCoUsMo($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFeUsMo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCoUsEl($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFeUsEl($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setRevisado($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setTrasnfe($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCoSucu($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setRowguid($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setRowId($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UnidadesPeer::DATABASE_NAME);

		if ($this->isColumnModified(UnidadesPeer::CO_UNI)) $criteria->add(UnidadesPeer::CO_UNI, $this->co_uni);
		if ($this->isColumnModified(UnidadesPeer::DES_UNI)) $criteria->add(UnidadesPeer::DES_UNI, $this->des_uni);
		if ($this->isColumnModified(UnidadesPeer::CAMPO1)) $criteria->add(UnidadesPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(UnidadesPeer::CAMPO2)) $criteria->add(UnidadesPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(UnidadesPeer::CAMPO3)) $criteria->add(UnidadesPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(UnidadesPeer::CAMPO4)) $criteria->add(UnidadesPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(UnidadesPeer::CO_US_IN)) $criteria->add(UnidadesPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(UnidadesPeer::FE_US_IN)) $criteria->add(UnidadesPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(UnidadesPeer::CO_US_MO)) $criteria->add(UnidadesPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(UnidadesPeer::FE_US_MO)) $criteria->add(UnidadesPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(UnidadesPeer::CO_US_EL)) $criteria->add(UnidadesPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(UnidadesPeer::FE_US_EL)) $criteria->add(UnidadesPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(UnidadesPeer::REVISADO)) $criteria->add(UnidadesPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(UnidadesPeer::TRASNFE)) $criteria->add(UnidadesPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(UnidadesPeer::CO_SUCU)) $criteria->add(UnidadesPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(UnidadesPeer::ROWGUID)) $criteria->add(UnidadesPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(UnidadesPeer::ROW_ID)) $criteria->add(UnidadesPeer::ROW_ID, $this->row_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UnidadesPeer::DATABASE_NAME);

		$criteria->add(UnidadesPeer::CO_UNI, $this->co_uni);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoUni();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoUni($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDesUni($this->des_uni);

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

		$copyObj->setRowId($this->row_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getArtsRelatedByUniVenta() as $relObj) {
				$copyObj->addArtRelatedByUniVenta($relObj->copy($deepCopy));
			}

			foreach($this->getArtsRelatedBySuniVenta() as $relObj) {
				$copyObj->addArtRelatedBySuniVenta($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoUni(NULL); 
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
			self::$peer = new UnidadesPeer();
		}
		return self::$peer;
	}

	
	public function initArtsRelatedByUniVenta()
	{
		if ($this->collArtsRelatedByUniVenta === null) {
			$this->collArtsRelatedByUniVenta = array();
		}
	}

	
	public function getArtsRelatedByUniVenta($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
			   $this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				ArtPeer::addSelectColumns($criteria);
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				ArtPeer::addSelectColumns($criteria);
				if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
					$this->collArtsRelatedByUniVenta = ArtPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;
		return $this->collArtsRelatedByUniVenta;
	}

	
	public function countArtsRelatedByUniVenta($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArtRelatedByUniVenta(Art $l)
	{
		$this->collArtsRelatedByUniVenta[] = $l;
		$l->setUnidadesRelatedByUniVenta($this);
	}


	
	public function getArtsRelatedByUniVentaJoinLinArt($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;

		return $this->collArtsRelatedByUniVenta;
	}


	
	public function getArtsRelatedByUniVentaJoinCatArt($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;

		return $this->collArtsRelatedByUniVenta;
	}


	
	public function getArtsRelatedByUniVentaJoinSubLin($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;

		return $this->collArtsRelatedByUniVenta;
	}


	
	public function getArtsRelatedByUniVentaJoinColores($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;

		return $this->collArtsRelatedByUniVenta;
	}


	
	public function getArtsRelatedByUniVentaJoinProceden($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;

		return $this->collArtsRelatedByUniVenta;
	}


	
	public function getArtsRelatedByUniVentaJoinProv($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;

		return $this->collArtsRelatedByUniVenta;
	}


	
	public function getArtsRelatedByUniVentaJoinTabulado($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedByUniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedByUniVenta = array();
			} else {

				$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::UNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedByUniVentaCriteria) || !$this->lastArtRelatedByUniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedByUniVenta = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastArtRelatedByUniVentaCriteria = $criteria;

		return $this->collArtsRelatedByUniVenta;
	}

	
	public function initArtsRelatedBySuniVenta()
	{
		if ($this->collArtsRelatedBySuniVenta === null) {
			$this->collArtsRelatedBySuniVenta = array();
		}
	}

	
	public function getArtsRelatedBySuniVenta($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
			   $this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				ArtPeer::addSelectColumns($criteria);
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				ArtPeer::addSelectColumns($criteria);
				if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
					$this->collArtsRelatedBySuniVenta = ArtPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;
		return $this->collArtsRelatedBySuniVenta;
	}

	
	public function countArtsRelatedBySuniVenta($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArtRelatedBySuniVenta(Art $l)
	{
		$this->collArtsRelatedBySuniVenta[] = $l;
		$l->setUnidadesRelatedBySuniVenta($this);
	}


	
	public function getArtsRelatedBySuniVentaJoinLinArt($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;

		return $this->collArtsRelatedBySuniVenta;
	}


	
	public function getArtsRelatedBySuniVentaJoinCatArt($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;

		return $this->collArtsRelatedBySuniVenta;
	}


	
	public function getArtsRelatedBySuniVentaJoinSubLin($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;

		return $this->collArtsRelatedBySuniVenta;
	}


	
	public function getArtsRelatedBySuniVentaJoinColores($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;

		return $this->collArtsRelatedBySuniVenta;
	}


	
	public function getArtsRelatedBySuniVentaJoinProceden($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;

		return $this->collArtsRelatedBySuniVenta;
	}


	
	public function getArtsRelatedBySuniVentaJoinProv($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;

		return $this->collArtsRelatedBySuniVenta;
	}


	
	public function getArtsRelatedBySuniVentaJoinTabulado($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArtsRelatedBySuniVenta === null) {
			if ($this->isNew()) {
				$this->collArtsRelatedBySuniVenta = array();
			} else {

				$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::SUNI_VENTA, $this->getCoUni());

			if (!isset($this->lastArtRelatedBySuniVentaCriteria) || !$this->lastArtRelatedBySuniVentaCriteria->equals($criteria)) {
				$this->collArtsRelatedBySuniVenta = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastArtRelatedBySuniVentaCriteria = $criteria;

		return $this->collArtsRelatedBySuniVenta;
	}

} 