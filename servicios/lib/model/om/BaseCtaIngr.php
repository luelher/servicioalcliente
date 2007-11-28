<?php


abstract class BaseCtaIngr extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_ingr;


	
	protected $descrip = ' ';


	
	protected $cta_contab = ' ';


	
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


	
	protected $co_islr = ' ';

	
	protected $collClientess;

	
	protected $lastClientesCriteria = null;

	
	protected $collProvs;

	
	protected $lastProvCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoIngr()
	{

		return $this->co_ingr;
	}

	
	public function getDescrip()
	{

		return $this->descrip;
	}

	
	public function getCtaContab()
	{

		return $this->cta_contab;
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

	
	public function getCoIslr()
	{

		return $this->co_islr;
	}

	
	public function setCoIngr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ingr !== $v) {
			$this->co_ingr = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CO_INGR;
		}

	} 
	
	public function setDescrip($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descrip !== $v || $v === ' ') {
			$this->descrip = $v;
			$this->modifiedColumns[] = CtaIngrPeer::DESCRIP;
		}

	} 
	
	public function setCtaContab($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cta_contab !== $v || $v === ' ') {
			$this->cta_contab = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CTA_CONTAB;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = CtaIngrPeer::DIS_CEN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CO_US_IN;
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
			$this->modifiedColumns[] = CtaIngrPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CO_US_MO;
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
			$this->modifiedColumns[] = CtaIngrPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CO_US_EL;
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
			$this->modifiedColumns[] = CtaIngrPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = CtaIngrPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = CtaIngrPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = CtaIngrPeer::ROWGUID;
		}

	} 
	
	public function setCoIslr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_islr !== $v || $v === ' ') {
			$this->co_islr = $v;
			$this->modifiedColumns[] = CtaIngrPeer::CO_ISLR;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_ingr = $rs->getString($startcol + 0);

			$this->descrip = $rs->getString($startcol + 1);

			$this->cta_contab = $rs->getString($startcol + 2);

			$this->dis_cen = $rs->getString($startcol + 3);

			$this->campo1 = $rs->getString($startcol + 4);

			$this->campo2 = $rs->getString($startcol + 5);

			$this->campo3 = $rs->getString($startcol + 6);

			$this->campo4 = $rs->getString($startcol + 7);

			$this->co_us_in = $rs->getString($startcol + 8);

			$this->fe_us_in = $rs->getDate($startcol + 9, null);

			$this->co_us_mo = $rs->getString($startcol + 10);

			$this->fe_us_mo = $rs->getDate($startcol + 11, null);

			$this->co_us_el = $rs->getString($startcol + 12);

			$this->fe_us_el = $rs->getDate($startcol + 13, null);

			$this->revisado = $rs->getString($startcol + 14);

			$this->trasnfe = $rs->getString($startcol + 15);

			$this->co_sucu = $rs->getString($startcol + 16);

			$this->rowguid = $rs->getString($startcol + 17);

			$this->co_islr = $rs->getString($startcol + 18);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CtaIngr object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CtaIngrPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CtaIngrPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CtaIngrPeer::DATABASE_NAME);
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
					$pk = CtaIngrPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += CtaIngrPeer::doUpdate($this, $con);
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


			if (($retval = CtaIngrPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CtaIngrPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoIngr();
				break;
			case 1:
				return $this->getDescrip();
				break;
			case 2:
				return $this->getCtaContab();
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
				return $this->getCoIslr();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CtaIngrPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoIngr(),
			$keys[1] => $this->getDescrip(),
			$keys[2] => $this->getCtaContab(),
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
			$keys[18] => $this->getCoIslr(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CtaIngrPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoIngr($value);
				break;
			case 1:
				$this->setDescrip($value);
				break;
			case 2:
				$this->setCtaContab($value);
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
				$this->setCoIslr($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CtaIngrPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoIngr($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDescrip($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCtaContab($arr[$keys[2]]);
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
		if (array_key_exists($keys[18], $arr)) $this->setCoIslr($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CtaIngrPeer::DATABASE_NAME);

		if ($this->isColumnModified(CtaIngrPeer::CO_INGR)) $criteria->add(CtaIngrPeer::CO_INGR, $this->co_ingr);
		if ($this->isColumnModified(CtaIngrPeer::DESCRIP)) $criteria->add(CtaIngrPeer::DESCRIP, $this->descrip);
		if ($this->isColumnModified(CtaIngrPeer::CTA_CONTAB)) $criteria->add(CtaIngrPeer::CTA_CONTAB, $this->cta_contab);
		if ($this->isColumnModified(CtaIngrPeer::DIS_CEN)) $criteria->add(CtaIngrPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(CtaIngrPeer::CAMPO1)) $criteria->add(CtaIngrPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(CtaIngrPeer::CAMPO2)) $criteria->add(CtaIngrPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(CtaIngrPeer::CAMPO3)) $criteria->add(CtaIngrPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(CtaIngrPeer::CAMPO4)) $criteria->add(CtaIngrPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(CtaIngrPeer::CO_US_IN)) $criteria->add(CtaIngrPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(CtaIngrPeer::FE_US_IN)) $criteria->add(CtaIngrPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(CtaIngrPeer::CO_US_MO)) $criteria->add(CtaIngrPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(CtaIngrPeer::FE_US_MO)) $criteria->add(CtaIngrPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(CtaIngrPeer::CO_US_EL)) $criteria->add(CtaIngrPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(CtaIngrPeer::FE_US_EL)) $criteria->add(CtaIngrPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(CtaIngrPeer::REVISADO)) $criteria->add(CtaIngrPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(CtaIngrPeer::TRASNFE)) $criteria->add(CtaIngrPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(CtaIngrPeer::CO_SUCU)) $criteria->add(CtaIngrPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(CtaIngrPeer::ROWGUID)) $criteria->add(CtaIngrPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(CtaIngrPeer::CO_ISLR)) $criteria->add(CtaIngrPeer::CO_ISLR, $this->co_islr);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CtaIngrPeer::DATABASE_NAME);

		$criteria->add(CtaIngrPeer::CO_INGR, $this->co_ingr);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoIngr();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoIngr($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDescrip($this->descrip);

		$copyObj->setCtaContab($this->cta_contab);

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

		$copyObj->setCoIslr($this->co_islr);


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

		$copyObj->setCoIngr(NULL); 
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
			self::$peer = new CtaIngrPeer();
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

				$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

				ClientesPeer::addSelectColumns($criteria);
				$this->collClientess = ClientesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

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

		$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

		return ClientesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClientes(Clientes $l)
	{
		$this->collClientess[] = $l;
		$l->setCtaIngr($this);
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

				$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

				$this->collClientess = ClientesPeer::doSelectJoinTipoCli($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinTipoCli($criteria, $con);
			}
		}
		$this->lastClientesCriteria = $criteria;

		return $this->collClientess;
	}


	
	public function getClientessJoinZona($criteria = null, $con = null)
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

				$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

				$this->collClientess = ClientesPeer::doSelectJoinZona($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinZona($criteria, $con);
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

				$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

				$this->collClientess = ClientesPeer::doSelectJoinSegmento($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

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

				$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

				$this->collClientess = ClientesPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_INGR, $this->getCoIngr());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinVendedor($criteria, $con);
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

				$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

				ProvPeer::addSelectColumns($criteria);
				$this->collProvs = ProvPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

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

		$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

		return ProvPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProv(Prov $l)
	{
		$this->collProvs[] = $l;
		$l->setCtaIngr($this);
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

				$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

				$this->collProvs = ProvPeer::doSelectJoinSegmento($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

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

				$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

				$this->collProvs = ProvPeer::doSelectJoinZona($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinZona($criteria, $con);
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

				$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

				$this->collProvs = ProvPeer::doSelectJoinTipoPro($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_INGR, $this->getCoIngr());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinTipoPro($criteria, $con);
			}
		}
		$this->lastProvCriteria = $criteria;

		return $this->collProvs;
	}

} 