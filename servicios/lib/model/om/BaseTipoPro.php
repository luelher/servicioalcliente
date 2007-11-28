<?php


abstract class BaseTipoPro extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $tip_pro;


	
	protected $des_tipo = ' ';


	
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

	
	protected $collProvs;

	
	protected $lastProvCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTipPro()
	{

		return $this->tip_pro;
	}

	
	public function getDesTipo()
	{

		return $this->des_tipo;
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

	
	public function setTipPro($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tip_pro !== $v) {
			$this->tip_pro = $v;
			$this->modifiedColumns[] = TipoProPeer::TIP_PRO;
		}

	} 
	
	public function setDesTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_tipo !== $v || $v === ' ') {
			$this->des_tipo = $v;
			$this->modifiedColumns[] = TipoProPeer::DES_TIPO;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = TipoProPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = TipoProPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = TipoProPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = TipoProPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = TipoProPeer::CO_US_IN;
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
			$this->modifiedColumns[] = TipoProPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = TipoProPeer::CO_US_MO;
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
			$this->modifiedColumns[] = TipoProPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = TipoProPeer::CO_US_EL;
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
			$this->modifiedColumns[] = TipoProPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = TipoProPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = TipoProPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = TipoProPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = TipoProPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->tip_pro = $rs->getString($startcol + 0);

			$this->des_tipo = $rs->getString($startcol + 1);

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

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TipoPro object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TipoProPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TipoProPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TipoProPeer::DATABASE_NAME);
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
					$pk = TipoProPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += TipoProPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


			if (($retval = TipoProPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = TipoProPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTipPro();
				break;
			case 1:
				return $this->getDesTipo();
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TipoProPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTipPro(),
			$keys[1] => $this->getDesTipo(),
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
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TipoProPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTipPro($value);
				break;
			case 1:
				$this->setDesTipo($value);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TipoProPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTipPro($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesTipo($arr[$keys[1]]);
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
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TipoProPeer::DATABASE_NAME);

		if ($this->isColumnModified(TipoProPeer::TIP_PRO)) $criteria->add(TipoProPeer::TIP_PRO, $this->tip_pro);
		if ($this->isColumnModified(TipoProPeer::DES_TIPO)) $criteria->add(TipoProPeer::DES_TIPO, $this->des_tipo);
		if ($this->isColumnModified(TipoProPeer::CAMPO1)) $criteria->add(TipoProPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(TipoProPeer::CAMPO2)) $criteria->add(TipoProPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(TipoProPeer::CAMPO3)) $criteria->add(TipoProPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(TipoProPeer::CAMPO4)) $criteria->add(TipoProPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(TipoProPeer::CO_US_IN)) $criteria->add(TipoProPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(TipoProPeer::FE_US_IN)) $criteria->add(TipoProPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(TipoProPeer::CO_US_MO)) $criteria->add(TipoProPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(TipoProPeer::FE_US_MO)) $criteria->add(TipoProPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(TipoProPeer::CO_US_EL)) $criteria->add(TipoProPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(TipoProPeer::FE_US_EL)) $criteria->add(TipoProPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(TipoProPeer::REVISADO)) $criteria->add(TipoProPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(TipoProPeer::TRASNFE)) $criteria->add(TipoProPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(TipoProPeer::CO_SUCU)) $criteria->add(TipoProPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(TipoProPeer::ROWGUID)) $criteria->add(TipoProPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TipoProPeer::DATABASE_NAME);

		$criteria->add(TipoProPeer::TIP_PRO, $this->tip_pro);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getTipPro();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setTipPro($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDesTipo($this->des_tipo);

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

			foreach($this->getProvs() as $relObj) {
				$copyObj->addProv($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setTipPro(NULL); 
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
			self::$peer = new TipoProPeer();
		}
		return self::$peer;
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

				$criteria->add(ProvPeer::TIPO, $this->getTipPro());

				ProvPeer::addSelectColumns($criteria);
				$this->collProvs = ProvPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProvPeer::TIPO, $this->getTipPro());

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

		$criteria->add(ProvPeer::TIPO, $this->getTipPro());

		return ProvPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProv(Prov $l)
	{
		$this->collProvs[] = $l;
		$l->setTipoPro($this);
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

				$criteria->add(ProvPeer::TIPO, $this->getTipPro());

				$this->collProvs = ProvPeer::doSelectJoinSegmento($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::TIPO, $this->getTipPro());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinSegmento($criteria, $con);
			}
		}
		$this->lastProvCriteria = $criteria;

		return $this->collProvs;
	}


	
	public function getProvsJoinZona($criteria = null, $con = null)
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

				$criteria->add(ProvPeer::TIPO, $this->getTipPro());

				$this->collProvs = ProvPeer::doSelectJoinZona($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::TIPO, $this->getTipPro());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinZona($criteria, $con);
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

				$criteria->add(ProvPeer::TIPO, $this->getTipPro());

				$this->collProvs = ProvPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::TIPO, $this->getTipPro());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		}
		$this->lastProvCriteria = $criteria;

		return $this->collProvs;
	}

} 