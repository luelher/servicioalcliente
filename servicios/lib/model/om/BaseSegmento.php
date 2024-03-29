<?php


abstract class BaseSegmento extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_seg;


	
	protected $seg_des = ' ';


	
	protected $c_cuenta = ' ';


	
	protected $p_cuenta = ' ';


	
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

	
	public function getCoSeg()
	{

		return $this->co_seg;
	}

	
	public function getSegDes()
	{

		return $this->seg_des;
	}

	
	public function getCCuenta()
	{

		return $this->c_cuenta;
	}

	
	public function getPCuenta()
	{

		return $this->p_cuenta;
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

	
	public function getFeUsIn()
	{

		return $this->fe_us_in;
	}

	
	public function getCoUsMo()
	{

		return $this->co_us_mo;
	}

	
	public function getFeUsMo()
	{

		return $this->fe_us_mo;
	}

	
	public function getCoUsEl()
	{

		return $this->co_us_el;
	}

	
	public function getFeUsEl()
	{

		return $this->fe_us_el;
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

	
	public function setCoSeg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_seg !== $v) {
			$this->co_seg = $v;
			$this->modifiedColumns[] = SegmentoPeer::CO_SEG;
		}

	} 
	
	public function setSegDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->seg_des !== $v || $v === ' ') {
			$this->seg_des = $v;
			$this->modifiedColumns[] = SegmentoPeer::SEG_DES;
		}

	} 
	
	public function setCCuenta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->c_cuenta !== $v || $v === ' ') {
			$this->c_cuenta = $v;
			$this->modifiedColumns[] = SegmentoPeer::C_CUENTA;
		}

	} 
	
	public function setPCuenta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->p_cuenta !== $v || $v === ' ') {
			$this->p_cuenta = $v;
			$this->modifiedColumns[] = SegmentoPeer::P_CUENTA;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = SegmentoPeer::DIS_CEN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = SegmentoPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = SegmentoPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = SegmentoPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = SegmentoPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = SegmentoPeer::CO_US_IN;
		}

	} 
	
	public function setFeUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_in !== $v) {
			$this->fe_us_in = $v;
			$this->modifiedColumns[] = SegmentoPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = SegmentoPeer::CO_US_MO;
		}

	} 
	
	public function setFeUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_mo !== $v) {
			$this->fe_us_mo = $v;
			$this->modifiedColumns[] = SegmentoPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = SegmentoPeer::CO_US_EL;
		}

	} 
	
	public function setFeUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_el !== $v) {
			$this->fe_us_el = $v;
			$this->modifiedColumns[] = SegmentoPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = SegmentoPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = SegmentoPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = SegmentoPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = SegmentoPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_seg = $rs->getString($startcol + 0);

			$this->seg_des = $rs->getString($startcol + 1);

			$this->c_cuenta = $rs->getString($startcol + 2);

			$this->p_cuenta = $rs->getString($startcol + 3);

			$this->dis_cen = $rs->getString($startcol + 4);

			$this->campo1 = $rs->getString($startcol + 5);

			$this->campo2 = $rs->getString($startcol + 6);

			$this->campo3 = $rs->getString($startcol + 7);

			$this->campo4 = $rs->getString($startcol + 8);

			$this->co_us_in = $rs->getString($startcol + 9);

			$this->fe_us_in = $rs->getString($startcol + 10);

			$this->co_us_mo = $rs->getString($startcol + 11);

			$this->fe_us_mo = $rs->getString($startcol + 12);

			$this->co_us_el = $rs->getString($startcol + 13);

			$this->fe_us_el = $rs->getString($startcol + 14);

			$this->revisado = $rs->getString($startcol + 15);

			$this->trasnfe = $rs->getString($startcol + 16);

			$this->co_sucu = $rs->getString($startcol + 17);

			$this->rowguid = $rs->getString($startcol + 18);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Segmento object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SegmentoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME);
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
					$pk = SegmentoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += SegmentoPeer::doUpdate($this, $con);
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


			if (($retval = SegmentoPeer::doValidate($this, $columns)) !== true) {
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
		$pos = SegmentoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoSeg();
				break;
			case 1:
				return $this->getSegDes();
				break;
			case 2:
				return $this->getCCuenta();
				break;
			case 3:
				return $this->getPCuenta();
				break;
			case 4:
				return $this->getDisCen();
				break;
			case 5:
				return $this->getCampo1();
				break;
			case 6:
				return $this->getCampo2();
				break;
			case 7:
				return $this->getCampo3();
				break;
			case 8:
				return $this->getCampo4();
				break;
			case 9:
				return $this->getCoUsIn();
				break;
			case 10:
				return $this->getFeUsIn();
				break;
			case 11:
				return $this->getCoUsMo();
				break;
			case 12:
				return $this->getFeUsMo();
				break;
			case 13:
				return $this->getCoUsEl();
				break;
			case 14:
				return $this->getFeUsEl();
				break;
			case 15:
				return $this->getRevisado();
				break;
			case 16:
				return $this->getTrasnfe();
				break;
			case 17:
				return $this->getCoSucu();
				break;
			case 18:
				return $this->getRowguid();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SegmentoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoSeg(),
			$keys[1] => $this->getSegDes(),
			$keys[2] => $this->getCCuenta(),
			$keys[3] => $this->getPCuenta(),
			$keys[4] => $this->getDisCen(),
			$keys[5] => $this->getCampo1(),
			$keys[6] => $this->getCampo2(),
			$keys[7] => $this->getCampo3(),
			$keys[8] => $this->getCampo4(),
			$keys[9] => $this->getCoUsIn(),
			$keys[10] => $this->getFeUsIn(),
			$keys[11] => $this->getCoUsMo(),
			$keys[12] => $this->getFeUsMo(),
			$keys[13] => $this->getCoUsEl(),
			$keys[14] => $this->getFeUsEl(),
			$keys[15] => $this->getRevisado(),
			$keys[16] => $this->getTrasnfe(),
			$keys[17] => $this->getCoSucu(),
			$keys[18] => $this->getRowguid(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SegmentoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoSeg($value);
				break;
			case 1:
				$this->setSegDes($value);
				break;
			case 2:
				$this->setCCuenta($value);
				break;
			case 3:
				$this->setPCuenta($value);
				break;
			case 4:
				$this->setDisCen($value);
				break;
			case 5:
				$this->setCampo1($value);
				break;
			case 6:
				$this->setCampo2($value);
				break;
			case 7:
				$this->setCampo3($value);
				break;
			case 8:
				$this->setCampo4($value);
				break;
			case 9:
				$this->setCoUsIn($value);
				break;
			case 10:
				$this->setFeUsIn($value);
				break;
			case 11:
				$this->setCoUsMo($value);
				break;
			case 12:
				$this->setFeUsMo($value);
				break;
			case 13:
				$this->setCoUsEl($value);
				break;
			case 14:
				$this->setFeUsEl($value);
				break;
			case 15:
				$this->setRevisado($value);
				break;
			case 16:
				$this->setTrasnfe($value);
				break;
			case 17:
				$this->setCoSucu($value);
				break;
			case 18:
				$this->setRowguid($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SegmentoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoSeg($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSegDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCCuenta($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPCuenta($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDisCen($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCampo1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCampo2($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCampo3($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCampo4($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCoUsIn($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFeUsIn($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCoUsMo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFeUsMo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCoUsEl($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFeUsEl($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setRevisado($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTrasnfe($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCoSucu($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRowguid($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SegmentoPeer::DATABASE_NAME);

		if ($this->isColumnModified(SegmentoPeer::CO_SEG)) $criteria->add(SegmentoPeer::CO_SEG, $this->co_seg);
		if ($this->isColumnModified(SegmentoPeer::SEG_DES)) $criteria->add(SegmentoPeer::SEG_DES, $this->seg_des);
		if ($this->isColumnModified(SegmentoPeer::C_CUENTA)) $criteria->add(SegmentoPeer::C_CUENTA, $this->c_cuenta);
		if ($this->isColumnModified(SegmentoPeer::P_CUENTA)) $criteria->add(SegmentoPeer::P_CUENTA, $this->p_cuenta);
		if ($this->isColumnModified(SegmentoPeer::DIS_CEN)) $criteria->add(SegmentoPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(SegmentoPeer::CAMPO1)) $criteria->add(SegmentoPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(SegmentoPeer::CAMPO2)) $criteria->add(SegmentoPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(SegmentoPeer::CAMPO3)) $criteria->add(SegmentoPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(SegmentoPeer::CAMPO4)) $criteria->add(SegmentoPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(SegmentoPeer::CO_US_IN)) $criteria->add(SegmentoPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(SegmentoPeer::FE_US_IN)) $criteria->add(SegmentoPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(SegmentoPeer::CO_US_MO)) $criteria->add(SegmentoPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(SegmentoPeer::FE_US_MO)) $criteria->add(SegmentoPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(SegmentoPeer::CO_US_EL)) $criteria->add(SegmentoPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(SegmentoPeer::FE_US_EL)) $criteria->add(SegmentoPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(SegmentoPeer::REVISADO)) $criteria->add(SegmentoPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(SegmentoPeer::TRASNFE)) $criteria->add(SegmentoPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(SegmentoPeer::CO_SUCU)) $criteria->add(SegmentoPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(SegmentoPeer::ROWGUID)) $criteria->add(SegmentoPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SegmentoPeer::DATABASE_NAME);

		$criteria->add(SegmentoPeer::CO_SEG, $this->co_seg);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoSeg();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoSeg($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setSegDes($this->seg_des);

		$copyObj->setCCuenta($this->c_cuenta);

		$copyObj->setPCuenta($this->p_cuenta);

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

		$copyObj->setCoSeg(NULL); 
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
			self::$peer = new SegmentoPeer();
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

				$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

				ClientesPeer::addSelectColumns($criteria);
				$this->collClientess = ClientesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

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

		$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

		return ClientesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClientes(Clientes $l)
	{
		$this->collClientess[] = $l;
		$l->setSegmento($this);
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

				$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

				$this->collClientess = ClientesPeer::doSelectJoinTipoCli($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

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

				$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

				$this->collClientess = ClientesPeer::doSelectJoinZona($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinZona($criteria, $con);
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

				$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

				$this->collClientess = ClientesPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

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

				$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

				$this->collClientess = ClientesPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_SEG, $this->getCoSeg());

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

				$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

				ProvPeer::addSelectColumns($criteria);
				$this->collProvs = ProvPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

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

		$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

		return ProvPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProv(Prov $l)
	{
		$this->collProvs[] = $l;
		$l->setSegmento($this);
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

				$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

				$this->collProvs = ProvPeer::doSelectJoinZona($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

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

				$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

				$this->collProvs = ProvPeer::doSelectJoinTipoPro($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

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

				$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

				$this->collProvs = ProvPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		} else {
									
			$criteria->add(ProvPeer::CO_SEG, $this->getCoSeg());

			if (!isset($this->lastProvCriteria) || !$this->lastProvCriteria->equals($criteria)) {
				$this->collProvs = ProvPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		}
		$this->lastProvCriteria = $criteria;

		return $this->collProvs;
	}

} 