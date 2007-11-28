<?php


abstract class BaseSubAlma extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_sub;


	
	protected $des_sub = ' ';


	
	protected $co_alma = ' ';


	
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


	
	protected $noventa = false;


	
	protected $nocompra = false;


	
	protected $materiales = false;


	
	protected $produccion = false;

	
	protected $aAlmacen;

	
	protected $collRengFacs;

	
	protected $lastRengFacCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoSub()
	{

		return $this->co_sub;
	}

	
	public function getDesSub()
	{

		return $this->des_sub;
	}

	
	public function getCoAlma()
	{

		return $this->co_alma;
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

	
	public function getNoventa()
	{

		return $this->noventa;
	}

	
	public function getNocompra()
	{

		return $this->nocompra;
	}

	
	public function getMateriales()
	{

		return $this->materiales;
	}

	
	public function getProduccion()
	{

		return $this->produccion;
	}

	
	public function setCoSub($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sub !== $v) {
			$this->co_sub = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CO_SUB;
		}

	} 
	
	public function setDesSub($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_sub !== $v || $v === ' ') {
			$this->des_sub = $v;
			$this->modifiedColumns[] = SubAlmaPeer::DES_SUB;
		}

	} 
	
	public function setCoAlma($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_alma !== $v || $v === ' ') {
			$this->co_alma = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CO_ALMA;
		}

		if ($this->aAlmacen !== null && $this->aAlmacen->getCoAlma() !== $v) {
			$this->aAlmacen = null;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CO_US_IN;
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
			$this->modifiedColumns[] = SubAlmaPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CO_US_MO;
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
			$this->modifiedColumns[] = SubAlmaPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CO_US_EL;
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
			$this->modifiedColumns[] = SubAlmaPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = SubAlmaPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = SubAlmaPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = SubAlmaPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = SubAlmaPeer::ROWGUID;
		}

	} 
	
	public function setNoventa($v)
	{

		if ($this->noventa !== $v || $v === false) {
			$this->noventa = $v;
			$this->modifiedColumns[] = SubAlmaPeer::NOVENTA;
		}

	} 
	
	public function setNocompra($v)
	{

		if ($this->nocompra !== $v || $v === false) {
			$this->nocompra = $v;
			$this->modifiedColumns[] = SubAlmaPeer::NOCOMPRA;
		}

	} 
	
	public function setMateriales($v)
	{

		if ($this->materiales !== $v || $v === false) {
			$this->materiales = $v;
			$this->modifiedColumns[] = SubAlmaPeer::MATERIALES;
		}

	} 
	
	public function setProduccion($v)
	{

		if ($this->produccion !== $v || $v === false) {
			$this->produccion = $v;
			$this->modifiedColumns[] = SubAlmaPeer::PRODUCCION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_sub = $rs->getString($startcol + 0);

			$this->des_sub = $rs->getString($startcol + 1);

			$this->co_alma = $rs->getString($startcol + 2);

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

			$this->noventa = $rs->getBoolean($startcol + 17);

			$this->nocompra = $rs->getBoolean($startcol + 18);

			$this->materiales = $rs->getBoolean($startcol + 19);

			$this->produccion = $rs->getBoolean($startcol + 20);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SubAlma object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubAlmaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SubAlmaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SubAlmaPeer::DATABASE_NAME);
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


												
			if ($this->aAlmacen !== null) {
				if ($this->aAlmacen->isModified()) {
					$affectedRows += $this->aAlmacen->save($con);
				}
				$this->setAlmacen($this->aAlmacen);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SubAlmaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += SubAlmaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collRengFacs !== null) {
				foreach($this->collRengFacs as $referrerFK) {
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


												
			if ($this->aAlmacen !== null) {
				if (!$this->aAlmacen->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAlmacen->getValidationFailures());
				}
			}


			if (($retval = SubAlmaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collRengFacs !== null) {
					foreach($this->collRengFacs as $referrerFK) {
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
		$pos = SubAlmaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoSub();
				break;
			case 1:
				return $this->getDesSub();
				break;
			case 2:
				return $this->getCoAlma();
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
			case 17:
				return $this->getNoventa();
				break;
			case 18:
				return $this->getNocompra();
				break;
			case 19:
				return $this->getMateriales();
				break;
			case 20:
				return $this->getProduccion();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SubAlmaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoSub(),
			$keys[1] => $this->getDesSub(),
			$keys[2] => $this->getCoAlma(),
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
			$keys[17] => $this->getNoventa(),
			$keys[18] => $this->getNocompra(),
			$keys[19] => $this->getMateriales(),
			$keys[20] => $this->getProduccion(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SubAlmaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoSub($value);
				break;
			case 1:
				$this->setDesSub($value);
				break;
			case 2:
				$this->setCoAlma($value);
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
			case 17:
				$this->setNoventa($value);
				break;
			case 18:
				$this->setNocompra($value);
				break;
			case 19:
				$this->setMateriales($value);
				break;
			case 20:
				$this->setProduccion($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SubAlmaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoSub($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesSub($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCoAlma($arr[$keys[2]]);
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
		if (array_key_exists($keys[17], $arr)) $this->setNoventa($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setNocompra($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setMateriales($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setProduccion($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SubAlmaPeer::DATABASE_NAME);

		if ($this->isColumnModified(SubAlmaPeer::CO_SUB)) $criteria->add(SubAlmaPeer::CO_SUB, $this->co_sub);
		if ($this->isColumnModified(SubAlmaPeer::DES_SUB)) $criteria->add(SubAlmaPeer::DES_SUB, $this->des_sub);
		if ($this->isColumnModified(SubAlmaPeer::CO_ALMA)) $criteria->add(SubAlmaPeer::CO_ALMA, $this->co_alma);
		if ($this->isColumnModified(SubAlmaPeer::CAMPO1)) $criteria->add(SubAlmaPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(SubAlmaPeer::CAMPO2)) $criteria->add(SubAlmaPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(SubAlmaPeer::CAMPO3)) $criteria->add(SubAlmaPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(SubAlmaPeer::CAMPO4)) $criteria->add(SubAlmaPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(SubAlmaPeer::CO_US_IN)) $criteria->add(SubAlmaPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(SubAlmaPeer::FE_US_IN)) $criteria->add(SubAlmaPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(SubAlmaPeer::CO_US_MO)) $criteria->add(SubAlmaPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(SubAlmaPeer::FE_US_MO)) $criteria->add(SubAlmaPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(SubAlmaPeer::CO_US_EL)) $criteria->add(SubAlmaPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(SubAlmaPeer::FE_US_EL)) $criteria->add(SubAlmaPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(SubAlmaPeer::REVISADO)) $criteria->add(SubAlmaPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(SubAlmaPeer::TRASNFE)) $criteria->add(SubAlmaPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(SubAlmaPeer::CO_SUCU)) $criteria->add(SubAlmaPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(SubAlmaPeer::ROWGUID)) $criteria->add(SubAlmaPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(SubAlmaPeer::NOVENTA)) $criteria->add(SubAlmaPeer::NOVENTA, $this->noventa);
		if ($this->isColumnModified(SubAlmaPeer::NOCOMPRA)) $criteria->add(SubAlmaPeer::NOCOMPRA, $this->nocompra);
		if ($this->isColumnModified(SubAlmaPeer::MATERIALES)) $criteria->add(SubAlmaPeer::MATERIALES, $this->materiales);
		if ($this->isColumnModified(SubAlmaPeer::PRODUCCION)) $criteria->add(SubAlmaPeer::PRODUCCION, $this->produccion);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SubAlmaPeer::DATABASE_NAME);

		$criteria->add(SubAlmaPeer::CO_SUB, $this->co_sub);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoSub();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoSub($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDesSub($this->des_sub);

		$copyObj->setCoAlma($this->co_alma);

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

		$copyObj->setNoventa($this->noventa);

		$copyObj->setNocompra($this->nocompra);

		$copyObj->setMateriales($this->materiales);

		$copyObj->setProduccion($this->produccion);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getRengFacs() as $relObj) {
				$copyObj->addRengFac($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoSub(NULL); 
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
			self::$peer = new SubAlmaPeer();
		}
		return self::$peer;
	}

	
	public function setAlmacen($v)
	{


		if ($v === null) {
			$this->setCoAlma(' ');
		} else {
			$this->setCoAlma($v->getCoAlma());
		}


		$this->aAlmacen = $v;
	}


	
	public function getAlmacen($con = null)
	{
				include_once 'lib/model/om/BaseAlmacenPeer.php';

		if ($this->aAlmacen === null && (($this->co_alma !== "" && $this->co_alma !== null))) {

			$this->aAlmacen = AlmacenPeer::retrieveByPK($this->co_alma, $con);

			
		}
		return $this->aAlmacen;
	}

	
	public function initRengFacs()
	{
		if ($this->collRengFacs === null) {
			$this->collRengFacs = array();
		}
	}

	
	public function getRengFacs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRengFacs === null) {
			if ($this->isNew()) {
			   $this->collRengFacs = array();
			} else {

				$criteria->add(RengFacPeer::CO_ALMA, $this->getCoSub());

				RengFacPeer::addSelectColumns($criteria);
				$this->collRengFacs = RengFacPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(RengFacPeer::CO_ALMA, $this->getCoSub());

				RengFacPeer::addSelectColumns($criteria);
				if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
					$this->collRengFacs = RengFacPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastRengFacCriteria = $criteria;
		return $this->collRengFacs;
	}

	
	public function countRengFacs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(RengFacPeer::CO_ALMA, $this->getCoSub());

		return RengFacPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addRengFac(RengFac $l)
	{
		$this->collRengFacs[] = $l;
		$l->setSubAlma($this);
	}


	
	public function getRengFacsJoinArt($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRengFacs === null) {
			if ($this->isNew()) {
				$this->collRengFacs = array();
			} else {

				$criteria->add(RengFacPeer::CO_ALMA, $this->getCoSub());

				$this->collRengFacs = RengFacPeer::doSelectJoinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(RengFacPeer::CO_ALMA, $this->getCoSub());

			if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
				$this->collRengFacs = RengFacPeer::doSelectJoinArt($criteria, $con);
			}
		}
		$this->lastRengFacCriteria = $criteria;

		return $this->collRengFacs;
	}


	
	public function getRengFacsJoinTabulado($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRengFacs === null) {
			if ($this->isNew()) {
				$this->collRengFacs = array();
			} else {

				$criteria->add(RengFacPeer::CO_ALMA, $this->getCoSub());

				$this->collRengFacs = RengFacPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(RengFacPeer::CO_ALMA, $this->getCoSub());

			if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
				$this->collRengFacs = RengFacPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastRengFacCriteria = $criteria;

		return $this->collRengFacs;
	}

} 