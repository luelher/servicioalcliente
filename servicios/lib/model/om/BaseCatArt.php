<?php


abstract class BaseCatArt extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_cat;


	
	protected $cat_des = ' ';


	
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


	
	protected $co_imun = ' ';


	
	protected $co_reten = ' ';


	
	protected $row_id;


	
	protected $movil = false;

	
	protected $collArts;

	
	protected $lastArtCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoCat()
	{

		return $this->co_cat;
	}

	
	public function getCatDes()
	{

		return $this->cat_des;
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

	
	public function getCoImun()
	{

		return $this->co_imun;
	}

	
	public function getCoReten()
	{

		return $this->co_reten;
	}

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function getMovil()
	{

		return $this->movil;
	}

	
	public function setCoCat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cat !== $v) {
			$this->co_cat = $v;
			$this->modifiedColumns[] = CatArtPeer::CO_CAT;
		}

	} 
	
	public function setCatDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cat_des !== $v || $v === ' ') {
			$this->cat_des = $v;
			$this->modifiedColumns[] = CatArtPeer::CAT_DES;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = CatArtPeer::DIS_CEN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = CatArtPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = CatArtPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = CatArtPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = CatArtPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = CatArtPeer::CO_US_IN;
		}

	} 
	
	public function setFeUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_in !== $v) {
			$this->fe_us_in = $v;
			$this->modifiedColumns[] = CatArtPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = CatArtPeer::CO_US_MO;
		}

	} 
	
	public function setFeUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_mo !== $v) {
			$this->fe_us_mo = $v;
			$this->modifiedColumns[] = CatArtPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = CatArtPeer::CO_US_EL;
		}

	} 
	
	public function setFeUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_el !== $v) {
			$this->fe_us_el = $v;
			$this->modifiedColumns[] = CatArtPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = CatArtPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = CatArtPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = CatArtPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = CatArtPeer::ROWGUID;
		}

	} 
	
	public function setCoImun($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_imun !== $v || $v === ' ') {
			$this->co_imun = $v;
			$this->modifiedColumns[] = CatArtPeer::CO_IMUN;
		}

	} 
	
	public function setCoReten($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_reten !== $v || $v === ' ') {
			$this->co_reten = $v;
			$this->modifiedColumns[] = CatArtPeer::CO_RETEN;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = CatArtPeer::ROW_ID;
		}

	} 
	
	public function setMovil($v)
	{

		if ($this->movil !== $v || $v === false) {
			$this->movil = $v;
			$this->modifiedColumns[] = CatArtPeer::MOVIL;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_cat = $rs->getString($startcol + 0);

			$this->cat_des = $rs->getString($startcol + 1);

			$this->dis_cen = $rs->getString($startcol + 2);

			$this->campo1 = $rs->getString($startcol + 3);

			$this->campo2 = $rs->getString($startcol + 4);

			$this->campo3 = $rs->getString($startcol + 5);

			$this->campo4 = $rs->getString($startcol + 6);

			$this->co_us_in = $rs->getString($startcol + 7);

			$this->fe_us_in = $rs->getString($startcol + 8);

			$this->co_us_mo = $rs->getString($startcol + 9);

			$this->fe_us_mo = $rs->getString($startcol + 10);

			$this->co_us_el = $rs->getString($startcol + 11);

			$this->fe_us_el = $rs->getString($startcol + 12);

			$this->revisado = $rs->getString($startcol + 13);

			$this->trasnfe = $rs->getString($startcol + 14);

			$this->co_sucu = $rs->getString($startcol + 15);

			$this->rowguid = $rs->getString($startcol + 16);

			$this->co_imun = $rs->getString($startcol + 17);

			$this->co_reten = $rs->getString($startcol + 18);

			$this->row_id = $rs->getBlob($startcol + 19);

			$this->movil = $rs->getBoolean($startcol + 20);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CatArt object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CatArtPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CatArtPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CatArtPeer::DATABASE_NAME);
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
					$pk = CatArtPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += CatArtPeer::doUpdate($this, $con);
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


			if (($retval = CatArtPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CatArtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoCat();
				break;
			case 1:
				return $this->getCatDes();
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
			case 17:
				return $this->getCoImun();
				break;
			case 18:
				return $this->getCoReten();
				break;
			case 19:
				return $this->getRowId();
				break;
			case 20:
				return $this->getMovil();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CatArtPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoCat(),
			$keys[1] => $this->getCatDes(),
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
			$keys[17] => $this->getCoImun(),
			$keys[18] => $this->getCoReten(),
			$keys[19] => $this->getRowId(),
			$keys[20] => $this->getMovil(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CatArtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoCat($value);
				break;
			case 1:
				$this->setCatDes($value);
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
			case 17:
				$this->setCoImun($value);
				break;
			case 18:
				$this->setCoReten($value);
				break;
			case 19:
				$this->setRowId($value);
				break;
			case 20:
				$this->setMovil($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CatArtPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoCat($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCatDes($arr[$keys[1]]);
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
		if (array_key_exists($keys[17], $arr)) $this->setCoImun($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCoReten($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRowId($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setMovil($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CatArtPeer::DATABASE_NAME);

		if ($this->isColumnModified(CatArtPeer::CO_CAT)) $criteria->add(CatArtPeer::CO_CAT, $this->co_cat);
		if ($this->isColumnModified(CatArtPeer::CAT_DES)) $criteria->add(CatArtPeer::CAT_DES, $this->cat_des);
		if ($this->isColumnModified(CatArtPeer::DIS_CEN)) $criteria->add(CatArtPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(CatArtPeer::CAMPO1)) $criteria->add(CatArtPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(CatArtPeer::CAMPO2)) $criteria->add(CatArtPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(CatArtPeer::CAMPO3)) $criteria->add(CatArtPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(CatArtPeer::CAMPO4)) $criteria->add(CatArtPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(CatArtPeer::CO_US_IN)) $criteria->add(CatArtPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(CatArtPeer::FE_US_IN)) $criteria->add(CatArtPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(CatArtPeer::CO_US_MO)) $criteria->add(CatArtPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(CatArtPeer::FE_US_MO)) $criteria->add(CatArtPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(CatArtPeer::CO_US_EL)) $criteria->add(CatArtPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(CatArtPeer::FE_US_EL)) $criteria->add(CatArtPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(CatArtPeer::REVISADO)) $criteria->add(CatArtPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(CatArtPeer::TRASNFE)) $criteria->add(CatArtPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(CatArtPeer::CO_SUCU)) $criteria->add(CatArtPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(CatArtPeer::ROWGUID)) $criteria->add(CatArtPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(CatArtPeer::CO_IMUN)) $criteria->add(CatArtPeer::CO_IMUN, $this->co_imun);
		if ($this->isColumnModified(CatArtPeer::CO_RETEN)) $criteria->add(CatArtPeer::CO_RETEN, $this->co_reten);
		if ($this->isColumnModified(CatArtPeer::ROW_ID)) $criteria->add(CatArtPeer::ROW_ID, $this->row_id);
		if ($this->isColumnModified(CatArtPeer::MOVIL)) $criteria->add(CatArtPeer::MOVIL, $this->movil);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CatArtPeer::DATABASE_NAME);

		$criteria->add(CatArtPeer::CO_CAT, $this->co_cat);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoCat();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoCat($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCatDes($this->cat_des);

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

		$copyObj->setCoImun($this->co_imun);

		$copyObj->setCoReten($this->co_reten);

		$copyObj->setRowId($this->row_id);

		$copyObj->setMovil($this->movil);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getArts() as $relObj) {
				$copyObj->addArt($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoCat(NULL); 
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
			self::$peer = new CatArtPeer();
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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				ArtPeer::addSelectColumns($criteria);
				$this->collArts = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

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

		$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArt(Art $l)
	{
		$this->collArts[] = $l;
		$l->setCatArt($this);
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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}


	
	public function getArtsJoinProceden($criteria = null, $con = null)
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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinProceden($criteria, $con);
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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedByUniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

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

				$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_CAT, $this->getCoCat());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}

} 