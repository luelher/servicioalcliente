<?php


abstract class BaseTranspor extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_tran;


	
	protected $des_tran = ' ';


	
	protected $resp_tra = ' ';


	
	protected $campo1 = ' ';


	
	protected $campo2 = ' ';


	
	protected $campo3 = ' ';


	
	protected $campo4 = ' ';


	
	protected $dis_cen = ' ';


	
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

	
	protected $collFacturas;

	
	protected $lastFacturaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoTran()
	{

		return $this->co_tran;
	}

	
	public function getDesTran()
	{

		return $this->des_tran;
	}

	
	public function getRespTra()
	{

		return $this->resp_tra;
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

	
	public function getDisCen()
	{

		return $this->dis_cen;
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

	
	public function setCoTran($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_tran !== $v) {
			$this->co_tran = $v;
			$this->modifiedColumns[] = TransporPeer::CO_TRAN;
		}

	} 
	
	public function setDesTran($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_tran !== $v || $v === ' ') {
			$this->des_tran = $v;
			$this->modifiedColumns[] = TransporPeer::DES_TRAN;
		}

	} 
	
	public function setRespTra($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->resp_tra !== $v || $v === ' ') {
			$this->resp_tra = $v;
			$this->modifiedColumns[] = TransporPeer::RESP_TRA;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = TransporPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = TransporPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = TransporPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = TransporPeer::CAMPO4;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = TransporPeer::DIS_CEN;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = TransporPeer::CO_US_IN;
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
			$this->modifiedColumns[] = TransporPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = TransporPeer::CO_US_MO;
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
			$this->modifiedColumns[] = TransporPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = TransporPeer::CO_US_EL;
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
			$this->modifiedColumns[] = TransporPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = TransporPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = TransporPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = TransporPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = TransporPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_tran = $rs->getString($startcol + 0);

			$this->des_tran = $rs->getString($startcol + 1);

			$this->resp_tra = $rs->getString($startcol + 2);

			$this->campo1 = $rs->getString($startcol + 3);

			$this->campo2 = $rs->getString($startcol + 4);

			$this->campo3 = $rs->getString($startcol + 5);

			$this->campo4 = $rs->getString($startcol + 6);

			$this->dis_cen = $rs->getString($startcol + 7);

			$this->co_us_in = $rs->getString($startcol + 8);

			$this->fe_us_in = $rs->getTimestamp($startcol + 9, null);

			$this->co_us_mo = $rs->getString($startcol + 10);

			$this->fe_us_mo = $rs->getTimestamp($startcol + 11, null);

			$this->co_us_el = $rs->getString($startcol + 12);

			$this->fe_us_el = $rs->getTimestamp($startcol + 13, null);

			$this->revisado = $rs->getString($startcol + 14);

			$this->trasnfe = $rs->getString($startcol + 15);

			$this->co_sucu = $rs->getString($startcol + 16);

			$this->rowguid = $rs->getString($startcol + 17);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 18; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Transpor object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TransporPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TransporPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TransporPeer::DATABASE_NAME);
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
					$pk = TransporPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += TransporPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collFacturas !== null) {
				foreach($this->collFacturas as $referrerFK) {
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


			if (($retval = TransporPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collFacturas !== null) {
					foreach($this->collFacturas as $referrerFK) {
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
		$pos = TransporPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoTran();
				break;
			case 1:
				return $this->getDesTran();
				break;
			case 2:
				return $this->getRespTra();
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
				return $this->getDisCen();
				break;
			case 8:
				return $this->getCoUsIn();
				break;
			case 9:
				return $this->getFeUsIn();
				break;
			case 10:
				return $this->getCoUsMo();
				break;
			case 11:
				return $this->getFeUsMo();
				break;
			case 12:
				return $this->getCoUsEl();
				break;
			case 13:
				return $this->getFeUsEl();
				break;
			case 14:
				return $this->getRevisado();
				break;
			case 15:
				return $this->getTrasnfe();
				break;
			case 16:
				return $this->getCoSucu();
				break;
			case 17:
				return $this->getRowguid();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TransporPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoTran(),
			$keys[1] => $this->getDesTran(),
			$keys[2] => $this->getRespTra(),
			$keys[3] => $this->getCampo1(),
			$keys[4] => $this->getCampo2(),
			$keys[5] => $this->getCampo3(),
			$keys[6] => $this->getCampo4(),
			$keys[7] => $this->getDisCen(),
			$keys[8] => $this->getCoUsIn(),
			$keys[9] => $this->getFeUsIn(),
			$keys[10] => $this->getCoUsMo(),
			$keys[11] => $this->getFeUsMo(),
			$keys[12] => $this->getCoUsEl(),
			$keys[13] => $this->getFeUsEl(),
			$keys[14] => $this->getRevisado(),
			$keys[15] => $this->getTrasnfe(),
			$keys[16] => $this->getCoSucu(),
			$keys[17] => $this->getRowguid(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TransporPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoTran($value);
				break;
			case 1:
				$this->setDesTran($value);
				break;
			case 2:
				$this->setRespTra($value);
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
				$this->setDisCen($value);
				break;
			case 8:
				$this->setCoUsIn($value);
				break;
			case 9:
				$this->setFeUsIn($value);
				break;
			case 10:
				$this->setCoUsMo($value);
				break;
			case 11:
				$this->setFeUsMo($value);
				break;
			case 12:
				$this->setCoUsEl($value);
				break;
			case 13:
				$this->setFeUsEl($value);
				break;
			case 14:
				$this->setRevisado($value);
				break;
			case 15:
				$this->setTrasnfe($value);
				break;
			case 16:
				$this->setCoSucu($value);
				break;
			case 17:
				$this->setRowguid($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TransporPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoTran($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesTran($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRespTra($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCampo1($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCampo2($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCampo3($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCampo4($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDisCen($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCoUsIn($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFeUsIn($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCoUsMo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFeUsMo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCoUsEl($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setFeUsEl($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setRevisado($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTrasnfe($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCoSucu($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setRowguid($arr[$keys[17]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TransporPeer::DATABASE_NAME);

		if ($this->isColumnModified(TransporPeer::CO_TRAN)) $criteria->add(TransporPeer::CO_TRAN, $this->co_tran);
		if ($this->isColumnModified(TransporPeer::DES_TRAN)) $criteria->add(TransporPeer::DES_TRAN, $this->des_tran);
		if ($this->isColumnModified(TransporPeer::RESP_TRA)) $criteria->add(TransporPeer::RESP_TRA, $this->resp_tra);
		if ($this->isColumnModified(TransporPeer::CAMPO1)) $criteria->add(TransporPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(TransporPeer::CAMPO2)) $criteria->add(TransporPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(TransporPeer::CAMPO3)) $criteria->add(TransporPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(TransporPeer::CAMPO4)) $criteria->add(TransporPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(TransporPeer::DIS_CEN)) $criteria->add(TransporPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(TransporPeer::CO_US_IN)) $criteria->add(TransporPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(TransporPeer::FE_US_IN)) $criteria->add(TransporPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(TransporPeer::CO_US_MO)) $criteria->add(TransporPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(TransporPeer::FE_US_MO)) $criteria->add(TransporPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(TransporPeer::CO_US_EL)) $criteria->add(TransporPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(TransporPeer::FE_US_EL)) $criteria->add(TransporPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(TransporPeer::REVISADO)) $criteria->add(TransporPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(TransporPeer::TRASNFE)) $criteria->add(TransporPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(TransporPeer::CO_SUCU)) $criteria->add(TransporPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(TransporPeer::ROWGUID)) $criteria->add(TransporPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TransporPeer::DATABASE_NAME);

		$criteria->add(TransporPeer::CO_TRAN, $this->co_tran);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoTran();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoTran($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDesTran($this->des_tran);

		$copyObj->setRespTra($this->resp_tra);

		$copyObj->setCampo1($this->campo1);

		$copyObj->setCampo2($this->campo2);

		$copyObj->setCampo3($this->campo3);

		$copyObj->setCampo4($this->campo4);

		$copyObj->setDisCen($this->dis_cen);

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

			foreach($this->getFacturas() as $relObj) {
				$copyObj->addFactura($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoTran(NULL); 
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
			self::$peer = new TransporPeer();
		}
		return self::$peer;
	}

	
	public function initFacturas()
	{
		if ($this->collFacturas === null) {
			$this->collFacturas = array();
		}
	}

	
	public function getFacturas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
			   $this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

				FacturaPeer::addSelectColumns($criteria);
				$this->collFacturas = FacturaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

				FacturaPeer::addSelectColumns($criteria);
				if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
					$this->collFacturas = FacturaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFacturaCriteria = $criteria;
		return $this->collFacturas;
	}

	
	public function countFacturas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

		return FacturaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFactura(Factura $l)
	{
		$this->collFacturas[] = $l;
		$l->setTranspor($this);
	}


	
	public function getFacturasJoinClientes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
				$this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

				$this->collFacturas = FacturaPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}


	
	public function getFacturasJoinVendedor($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
				$this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

				$this->collFacturas = FacturaPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinVendedor($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}


	
	public function getFacturasJoinCondicio($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
				$this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

				$this->collFacturas = FacturaPeer::doSelectJoinCondicio($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_TRAN, $this->getCoTran());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinCondicio($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}

} 