<?php


abstract class BaseProceden extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $cod_proc;


	
	protected $des_proc = ' ';


	
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

	
	protected $collArts;

	
	protected $lastArtCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCodProc()
	{

		return $this->cod_proc;
	}

	
	public function getDesProc()
	{

		return $this->des_proc;
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

	
	public function setCodProc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cod_proc !== $v) {
			$this->cod_proc = $v;
			$this->modifiedColumns[] = ProcedenPeer::COD_PROC;
		}

	} 
	
	public function setDesProc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_proc !== $v || $v === ' ') {
			$this->des_proc = $v;
			$this->modifiedColumns[] = ProcedenPeer::DES_PROC;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = ProcedenPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = ProcedenPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = ProcedenPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = ProcedenPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = ProcedenPeer::CO_US_IN;
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
			$this->modifiedColumns[] = ProcedenPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = ProcedenPeer::CO_US_MO;
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
			$this->modifiedColumns[] = ProcedenPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = ProcedenPeer::CO_US_EL;
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
			$this->modifiedColumns[] = ProcedenPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = ProcedenPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = ProcedenPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = ProcedenPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = ProcedenPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->cod_proc = $rs->getString($startcol + 0);

			$this->des_proc = $rs->getString($startcol + 1);

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
			throw new PropelException("Error populating Proceden object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcedenPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProcedenPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProcedenPeer::DATABASE_NAME);
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
					$pk = ProcedenPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ProcedenPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collArts !== null) {
				foreach($this->collArts as $referrerFK) {
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


			if (($retval = ProcedenPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collArts !== null) {
					foreach($this->collArts as $referrerFK) {
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
		$pos = ProcedenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodProc();
				break;
			case 1:
				return $this->getDesProc();
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
		$keys = ProcedenPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodProc(),
			$keys[1] => $this->getDesProc(),
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
		$pos = ProcedenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodProc($value);
				break;
			case 1:
				$this->setDesProc($value);
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
		$keys = ProcedenPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodProc($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesProc($arr[$keys[1]]);
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
		$criteria = new Criteria(ProcedenPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcedenPeer::COD_PROC)) $criteria->add(ProcedenPeer::COD_PROC, $this->cod_proc);
		if ($this->isColumnModified(ProcedenPeer::DES_PROC)) $criteria->add(ProcedenPeer::DES_PROC, $this->des_proc);
		if ($this->isColumnModified(ProcedenPeer::CAMPO1)) $criteria->add(ProcedenPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(ProcedenPeer::CAMPO2)) $criteria->add(ProcedenPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(ProcedenPeer::CAMPO3)) $criteria->add(ProcedenPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(ProcedenPeer::CAMPO4)) $criteria->add(ProcedenPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(ProcedenPeer::CO_US_IN)) $criteria->add(ProcedenPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(ProcedenPeer::FE_US_IN)) $criteria->add(ProcedenPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(ProcedenPeer::CO_US_MO)) $criteria->add(ProcedenPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(ProcedenPeer::FE_US_MO)) $criteria->add(ProcedenPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(ProcedenPeer::CO_US_EL)) $criteria->add(ProcedenPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(ProcedenPeer::FE_US_EL)) $criteria->add(ProcedenPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(ProcedenPeer::REVISADO)) $criteria->add(ProcedenPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(ProcedenPeer::TRASNFE)) $criteria->add(ProcedenPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(ProcedenPeer::CO_SUCU)) $criteria->add(ProcedenPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(ProcedenPeer::ROWGUID)) $criteria->add(ProcedenPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProcedenPeer::DATABASE_NAME);

		$criteria->add(ProcedenPeer::COD_PROC, $this->cod_proc);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCodProc();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCodProc($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDesProc($this->des_proc);

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

			foreach($this->getArts() as $relObj) {
				$copyObj->addArt($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCodProc(NULL); 
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
			self::$peer = new ProcedenPeer();
		}
		return self::$peer;
	}

	
	public function initArts()
	{
		if ($this->collArts === null) {
			$this->collArts = array();
		}
	}

	
	public function getArts($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
			   $this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				ArtPeer::addSelectColumns($criteria);
				$this->collArts = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				ArtPeer::addSelectColumns($criteria);
				if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
					$this->collArts = ArtPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastArtCriteria = $criteria;
		return $this->collArts;
	}

	
	public function countArts($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArt(Art $l)
	{
		$this->collArts[] = $l;
		$l->setProceden($this);
	}


	
	public function getArtsJoinLinArt($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinCatArt($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinSubLin($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinColores($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinProv($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinUnidadesRelatedByUniVenta($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedByUniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedByUniVenta($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinUnidadesRelatedBySuniVenta($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinTabulado($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collArts === null) {
			if ($this->isNew()) {
				$this->collArts = array();
			} else {

				$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::PROCEDENCI, $this->getCodProc());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}

} 