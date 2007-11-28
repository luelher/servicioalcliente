<?php


abstract class BaseCondicio extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_cond;


	
	protected $cond_des = ' ';


	
	protected $dias_cred = 0;


	
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


	
	protected $row_id;

	
	protected $collFacturas;

	
	protected $lastFacturaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoCond()
	{

		return $this->co_cond;
	}

	
	public function getCondDes()
	{

		return $this->cond_des;
	}

	
	public function getDiasCred()
	{

		return $this->dias_cred;
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

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function setCoCond($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cond !== $v) {
			$this->co_cond = $v;
			$this->modifiedColumns[] = CondicioPeer::CO_COND;
		}

	} 
	
	public function setCondDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cond_des !== $v || $v === ' ') {
			$this->cond_des = $v;
			$this->modifiedColumns[] = CondicioPeer::COND_DES;
		}

	} 
	
	public function setDiasCred($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dias_cred !== $v || $v === 0) {
			$this->dias_cred = $v;
			$this->modifiedColumns[] = CondicioPeer::DIAS_CRED;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = CondicioPeer::DIS_CEN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = CondicioPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = CondicioPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = CondicioPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = CondicioPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = CondicioPeer::CO_US_IN;
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
			$this->modifiedColumns[] = CondicioPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = CondicioPeer::CO_US_MO;
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
			$this->modifiedColumns[] = CondicioPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = CondicioPeer::CO_US_EL;
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
			$this->modifiedColumns[] = CondicioPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = CondicioPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = CondicioPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = CondicioPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = CondicioPeer::ROWGUID;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = CondicioPeer::ROW_ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_cond = $rs->getString($startcol + 0);

			$this->cond_des = $rs->getString($startcol + 1);

			$this->dias_cred = $rs->getInt($startcol + 2);

			$this->dis_cen = $rs->getString($startcol + 3);

			$this->campo1 = $rs->getString($startcol + 4);

			$this->campo2 = $rs->getString($startcol + 5);

			$this->campo3 = $rs->getString($startcol + 6);

			$this->campo4 = $rs->getString($startcol + 7);

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

			$this->row_id = $rs->getBlob($startcol + 18);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Condicio object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CondicioPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CondicioPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CondicioPeer::DATABASE_NAME);
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
					$pk = CondicioPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += CondicioPeer::doUpdate($this, $con);
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


			if (($retval = CondicioPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CondicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoCond();
				break;
			case 1:
				return $this->getCondDes();
				break;
			case 2:
				return $this->getDiasCred();
				break;
			case 3:
				return $this->getDisCen();
				break;
			case 4:
				return $this->getCampo1();
				break;
			case 5:
				return $this->getCampo2();
				break;
			case 6:
				return $this->getCampo3();
				break;
			case 7:
				return $this->getCampo4();
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
			case 18:
				return $this->getRowId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CondicioPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoCond(),
			$keys[1] => $this->getCondDes(),
			$keys[2] => $this->getDiasCred(),
			$keys[3] => $this->getDisCen(),
			$keys[4] => $this->getCampo1(),
			$keys[5] => $this->getCampo2(),
			$keys[6] => $this->getCampo3(),
			$keys[7] => $this->getCampo4(),
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
			$keys[18] => $this->getRowId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CondicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoCond($value);
				break;
			case 1:
				$this->setCondDes($value);
				break;
			case 2:
				$this->setDiasCred($value);
				break;
			case 3:
				$this->setDisCen($value);
				break;
			case 4:
				$this->setCampo1($value);
				break;
			case 5:
				$this->setCampo2($value);
				break;
			case 6:
				$this->setCampo3($value);
				break;
			case 7:
				$this->setCampo4($value);
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
			case 18:
				$this->setRowId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CondicioPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoCond($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCondDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDiasCred($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDisCen($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCampo1($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCampo2($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCampo3($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCampo4($arr[$keys[7]]);
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
		if (array_key_exists($keys[18], $arr)) $this->setRowId($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CondicioPeer::DATABASE_NAME);

		if ($this->isColumnModified(CondicioPeer::CO_COND)) $criteria->add(CondicioPeer::CO_COND, $this->co_cond);
		if ($this->isColumnModified(CondicioPeer::COND_DES)) $criteria->add(CondicioPeer::COND_DES, $this->cond_des);
		if ($this->isColumnModified(CondicioPeer::DIAS_CRED)) $criteria->add(CondicioPeer::DIAS_CRED, $this->dias_cred);
		if ($this->isColumnModified(CondicioPeer::DIS_CEN)) $criteria->add(CondicioPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(CondicioPeer::CAMPO1)) $criteria->add(CondicioPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(CondicioPeer::CAMPO2)) $criteria->add(CondicioPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(CondicioPeer::CAMPO3)) $criteria->add(CondicioPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(CondicioPeer::CAMPO4)) $criteria->add(CondicioPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(CondicioPeer::CO_US_IN)) $criteria->add(CondicioPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(CondicioPeer::FE_US_IN)) $criteria->add(CondicioPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(CondicioPeer::CO_US_MO)) $criteria->add(CondicioPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(CondicioPeer::FE_US_MO)) $criteria->add(CondicioPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(CondicioPeer::CO_US_EL)) $criteria->add(CondicioPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(CondicioPeer::FE_US_EL)) $criteria->add(CondicioPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(CondicioPeer::REVISADO)) $criteria->add(CondicioPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(CondicioPeer::TRASNFE)) $criteria->add(CondicioPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(CondicioPeer::CO_SUCU)) $criteria->add(CondicioPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(CondicioPeer::ROWGUID)) $criteria->add(CondicioPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(CondicioPeer::ROW_ID)) $criteria->add(CondicioPeer::ROW_ID, $this->row_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CondicioPeer::DATABASE_NAME);

		$criteria->add(CondicioPeer::CO_COND, $this->co_cond);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoCond();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoCond($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCondDes($this->cond_des);

		$copyObj->setDiasCred($this->dias_cred);

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

		$copyObj->setRowId($this->row_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getFacturas() as $relObj) {
				$copyObj->addFactura($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoCond(NULL); 
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
			self::$peer = new CondicioPeer();
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

				$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

				FacturaPeer::addSelectColumns($criteria);
				$this->collFacturas = FacturaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

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

		$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

		return FacturaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFactura(Factura $l)
	{
		$this->collFacturas[] = $l;
		$l->setCondicio($this);
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

				$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

				$this->collFacturas = FacturaPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

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

				$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

				$this->collFacturas = FacturaPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinVendedor($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}


	
	public function getFacturasJoinTranspor($criteria = null, $con = null)
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

				$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

				$this->collFacturas = FacturaPeer::doSelectJoinTranspor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::FORMA_PAG, $this->getCoCond());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinTranspor($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}

} 