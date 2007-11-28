<?php


abstract class BaseColores extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_col;


	
	protected $des_col = ' ';


	
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

	
	public function getCoCol()
	{

		return $this->co_col;
	}

	
	public function getDesCol()
	{

		return $this->des_col;
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

	
	public function setCoCol($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_col !== $v) {
			$this->co_col = $v;
			$this->modifiedColumns[] = ColoresPeer::CO_COL;
		}

	} 
	
	public function setDesCol($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_col !== $v || $v === ' ') {
			$this->des_col = $v;
			$this->modifiedColumns[] = ColoresPeer::DES_COL;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = ColoresPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = ColoresPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = ColoresPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = ColoresPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = ColoresPeer::CO_US_IN;
		}

	} 
	
	public function setFeUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_in !== $v) {
			$this->fe_us_in = $v;
			$this->modifiedColumns[] = ColoresPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = ColoresPeer::CO_US_MO;
		}

	} 
	
	public function setFeUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_mo !== $v) {
			$this->fe_us_mo = $v;
			$this->modifiedColumns[] = ColoresPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = ColoresPeer::CO_US_EL;
		}

	} 
	
	public function setFeUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_el !== $v) {
			$this->fe_us_el = $v;
			$this->modifiedColumns[] = ColoresPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = ColoresPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = ColoresPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = ColoresPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = ColoresPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_col = $rs->getString($startcol + 0);

			$this->des_col = $rs->getString($startcol + 1);

			$this->campo1 = $rs->getString($startcol + 2);

			$this->campo2 = $rs->getString($startcol + 3);

			$this->campo3 = $rs->getString($startcol + 4);

			$this->campo4 = $rs->getString($startcol + 5);

			$this->co_us_in = $rs->getString($startcol + 6);

			$this->fe_us_in = $rs->getString($startcol + 7);

			$this->co_us_mo = $rs->getString($startcol + 8);

			$this->fe_us_mo = $rs->getString($startcol + 9);

			$this->co_us_el = $rs->getString($startcol + 10);

			$this->fe_us_el = $rs->getString($startcol + 11);

			$this->revisado = $rs->getString($startcol + 12);

			$this->trasnfe = $rs->getString($startcol + 13);

			$this->co_sucu = $rs->getString($startcol + 14);

			$this->rowguid = $rs->getString($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Colores object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ColoresPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ColoresPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ColoresPeer::DATABASE_NAME);
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
					$pk = ColoresPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ColoresPeer::doUpdate($this, $con);
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


			if (($retval = ColoresPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ColoresPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoCol();
				break;
			case 1:
				return $this->getDesCol();
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
		$keys = ColoresPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoCol(),
			$keys[1] => $this->getDesCol(),
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
		$pos = ColoresPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoCol($value);
				break;
			case 1:
				$this->setDesCol($value);
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
		$keys = ColoresPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoCol($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesCol($arr[$keys[1]]);
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
		$criteria = new Criteria(ColoresPeer::DATABASE_NAME);

		if ($this->isColumnModified(ColoresPeer::CO_COL)) $criteria->add(ColoresPeer::CO_COL, $this->co_col);
		if ($this->isColumnModified(ColoresPeer::DES_COL)) $criteria->add(ColoresPeer::DES_COL, $this->des_col);
		if ($this->isColumnModified(ColoresPeer::CAMPO1)) $criteria->add(ColoresPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(ColoresPeer::CAMPO2)) $criteria->add(ColoresPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(ColoresPeer::CAMPO3)) $criteria->add(ColoresPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(ColoresPeer::CAMPO4)) $criteria->add(ColoresPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(ColoresPeer::CO_US_IN)) $criteria->add(ColoresPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(ColoresPeer::FE_US_IN)) $criteria->add(ColoresPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(ColoresPeer::CO_US_MO)) $criteria->add(ColoresPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(ColoresPeer::FE_US_MO)) $criteria->add(ColoresPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(ColoresPeer::CO_US_EL)) $criteria->add(ColoresPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(ColoresPeer::FE_US_EL)) $criteria->add(ColoresPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(ColoresPeer::REVISADO)) $criteria->add(ColoresPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(ColoresPeer::TRASNFE)) $criteria->add(ColoresPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(ColoresPeer::CO_SUCU)) $criteria->add(ColoresPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(ColoresPeer::ROWGUID)) $criteria->add(ColoresPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ColoresPeer::DATABASE_NAME);

		$criteria->add(ColoresPeer::CO_COL, $this->co_col);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoCol();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoCol($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDesCol($this->des_col);

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

		$copyObj->setCoCol(NULL); 
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
			self::$peer = new ColoresPeer();
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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				ArtPeer::addSelectColumns($criteria);
				$this->collArts = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

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

		$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArt(Art $l)
	{
		$this->collArts[] = $l;
		$l->setColores($this);
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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedByUniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

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

				$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_COLOR, $this->getCoCol());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}

} 