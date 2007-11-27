<?php


abstract class BaseTabulado extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $tipo;


	
	protected $descripcio = '(space(1))';


	
	protected $porc_vent = 0;


	
	protected $porc_comp = 0;


	
	protected $porc_cxs = 0;


	
	protected $porc_otro = 0;


	
	protected $revisado = '(space(1))';


	
	protected $trasnfe = '(space(1))';


	
	protected $rowguid = '(newid())';

	
	protected $collArts;

	
	protected $lastArtCriteria = null;

	
	protected $collRengFacs;

	
	protected $lastRengFacCriteria = null;

	
	protected $collDocumCcs;

	
	protected $lastDocumCcCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getDescripcio()
	{

		return $this->descripcio;
	}

	
	public function getPorcVent()
	{

		return $this->porc_vent;
	}

	
	public function getPorcComp()
	{

		return $this->porc_comp;
	}

	
	public function getPorcCxs()
	{

		return $this->porc_cxs;
	}

	
	public function getPorcOtro()
	{

		return $this->porc_otro;
	}

	
	public function getRevisado()
	{

		return $this->revisado;
	}

	
	public function getTrasnfe()
	{

		return $this->trasnfe;
	}

	
	public function getRowguid()
	{

		return $this->rowguid;
	}

	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v) {
			$this->tipo = $v;
			$this->modifiedColumns[] = TabuladoPeer::TIPO;
		}

	} 
	
	public function setDescripcio($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcio !== $v || $v === '(space(1))') {
			$this->descripcio = $v;
			$this->modifiedColumns[] = TabuladoPeer::DESCRIPCIO;
		}

	} 
	
	public function setPorcVent($v)
	{

		if ($this->porc_vent !== $v || $v === 0) {
			$this->porc_vent = $v;
			$this->modifiedColumns[] = TabuladoPeer::PORC_VENT;
		}

	} 
	
	public function setPorcComp($v)
	{

		if ($this->porc_comp !== $v || $v === 0) {
			$this->porc_comp = $v;
			$this->modifiedColumns[] = TabuladoPeer::PORC_COMP;
		}

	} 
	
	public function setPorcCxs($v)
	{

		if ($this->porc_cxs !== $v || $v === 0) {
			$this->porc_cxs = $v;
			$this->modifiedColumns[] = TabuladoPeer::PORC_CXS;
		}

	} 
	
	public function setPorcOtro($v)
	{

		if ($this->porc_otro !== $v || $v === 0) {
			$this->porc_otro = $v;
			$this->modifiedColumns[] = TabuladoPeer::PORC_OTRO;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === '(space(1))') {
			$this->revisado = $v;
			$this->modifiedColumns[] = TabuladoPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === '(space(1))') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = TabuladoPeer::TRASNFE;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = TabuladoPeer::ROWGUID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->tipo = $rs->getString($startcol + 0);

			$this->descripcio = $rs->getString($startcol + 1);

			$this->porc_vent = $rs->getFloat($startcol + 2);

			$this->porc_comp = $rs->getFloat($startcol + 3);

			$this->porc_cxs = $rs->getFloat($startcol + 4);

			$this->porc_otro = $rs->getFloat($startcol + 5);

			$this->revisado = $rs->getString($startcol + 6);

			$this->trasnfe = $rs->getString($startcol + 7);

			$this->rowguid = $rs->getString($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Tabulado object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TabuladoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TabuladoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TabuladoPeer::DATABASE_NAME);
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
					$pk = TabuladoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += TabuladoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collArts !== null) {
				foreach($this->collArts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collRengFacs !== null) {
				foreach($this->collRengFacs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDocumCcs !== null) {
				foreach($this->collDocumCcs as $referrerFK) {
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


			if (($retval = TabuladoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collArts !== null) {
					foreach($this->collArts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collRengFacs !== null) {
					foreach($this->collRengFacs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDocumCcs !== null) {
					foreach($this->collDocumCcs as $referrerFK) {
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
		$pos = TabuladoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTipo();
				break;
			case 1:
				return $this->getDescripcio();
				break;
			case 2:
				return $this->getPorcVent();
				break;
			case 3:
				return $this->getPorcComp();
				break;
			case 4:
				return $this->getPorcCxs();
				break;
			case 5:
				return $this->getPorcOtro();
				break;
			case 6:
				return $this->getRevisado();
				break;
			case 7:
				return $this->getTrasnfe();
				break;
			case 8:
				return $this->getRowguid();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TabuladoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTipo(),
			$keys[1] => $this->getDescripcio(),
			$keys[2] => $this->getPorcVent(),
			$keys[3] => $this->getPorcComp(),
			$keys[4] => $this->getPorcCxs(),
			$keys[5] => $this->getPorcOtro(),
			$keys[6] => $this->getRevisado(),
			$keys[7] => $this->getTrasnfe(),
			$keys[8] => $this->getRowguid(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TabuladoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTipo($value);
				break;
			case 1:
				$this->setDescripcio($value);
				break;
			case 2:
				$this->setPorcVent($value);
				break;
			case 3:
				$this->setPorcComp($value);
				break;
			case 4:
				$this->setPorcCxs($value);
				break;
			case 5:
				$this->setPorcOtro($value);
				break;
			case 6:
				$this->setRevisado($value);
				break;
			case 7:
				$this->setTrasnfe($value);
				break;
			case 8:
				$this->setRowguid($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TabuladoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTipo($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDescripcio($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPorcVent($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPorcComp($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPorcCxs($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPorcOtro($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRevisado($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTrasnfe($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setRowguid($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TabuladoPeer::DATABASE_NAME);

		if ($this->isColumnModified(TabuladoPeer::TIPO)) $criteria->add(TabuladoPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(TabuladoPeer::DESCRIPCIO)) $criteria->add(TabuladoPeer::DESCRIPCIO, $this->descripcio);
		if ($this->isColumnModified(TabuladoPeer::PORC_VENT)) $criteria->add(TabuladoPeer::PORC_VENT, $this->porc_vent);
		if ($this->isColumnModified(TabuladoPeer::PORC_COMP)) $criteria->add(TabuladoPeer::PORC_COMP, $this->porc_comp);
		if ($this->isColumnModified(TabuladoPeer::PORC_CXS)) $criteria->add(TabuladoPeer::PORC_CXS, $this->porc_cxs);
		if ($this->isColumnModified(TabuladoPeer::PORC_OTRO)) $criteria->add(TabuladoPeer::PORC_OTRO, $this->porc_otro);
		if ($this->isColumnModified(TabuladoPeer::REVISADO)) $criteria->add(TabuladoPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(TabuladoPeer::TRASNFE)) $criteria->add(TabuladoPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(TabuladoPeer::ROWGUID)) $criteria->add(TabuladoPeer::ROWGUID, $this->rowguid);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TabuladoPeer::DATABASE_NAME);

		$criteria->add(TabuladoPeer::TIPO, $this->tipo);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getTipo();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setTipo($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDescripcio($this->descripcio);

		$copyObj->setPorcVent($this->porc_vent);

		$copyObj->setPorcComp($this->porc_comp);

		$copyObj->setPorcCxs($this->porc_cxs);

		$copyObj->setPorcOtro($this->porc_otro);

		$copyObj->setRevisado($this->revisado);

		$copyObj->setTrasnfe($this->trasnfe);

		$copyObj->setRowguid($this->rowguid);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getArts() as $relObj) {
				$copyObj->addArt($relObj->copy($deepCopy));
			}

			foreach($this->getRengFacs() as $relObj) {
				$copyObj->addRengFac($relObj->copy($deepCopy));
			}

			foreach($this->getDocumCcs() as $relObj) {
				$copyObj->addDocumCc($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setTipo(NULL); 
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
			self::$peer = new TabuladoPeer();
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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				ArtPeer::addSelectColumns($criteria);
				$this->collArts = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

		$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArt(Art $l)
	{
		$this->collArts[] = $l;
		$l->setTabulado($this);
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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedByUniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

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

				$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::TIPO_IMP, $this->getTipo());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
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

				$criteria->add(RengFacPeer::TIPO_IMP, $this->getTipo());

				RengFacPeer::addSelectColumns($criteria);
				$this->collRengFacs = RengFacPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(RengFacPeer::TIPO_IMP, $this->getTipo());

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

		$criteria->add(RengFacPeer::TIPO_IMP, $this->getTipo());

		return RengFacPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addRengFac(RengFac $l)
	{
		$this->collRengFacs[] = $l;
		$l->setTabulado($this);
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

				$criteria->add(RengFacPeer::TIPO_IMP, $this->getTipo());

				$this->collRengFacs = RengFacPeer::doSelectJoinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(RengFacPeer::TIPO_IMP, $this->getTipo());

			if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
				$this->collRengFacs = RengFacPeer::doSelectJoinArt($criteria, $con);
			}
		}
		$this->lastRengFacCriteria = $criteria;

		return $this->collRengFacs;
	}


	
	public function getRengFacsJoinSubAlma($criteria = null, $con = null)
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

				$criteria->add(RengFacPeer::TIPO_IMP, $this->getTipo());

				$this->collRengFacs = RengFacPeer::doSelectJoinSubAlma($criteria, $con);
			}
		} else {
									
			$criteria->add(RengFacPeer::TIPO_IMP, $this->getTipo());

			if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
				$this->collRengFacs = RengFacPeer::doSelectJoinSubAlma($criteria, $con);
			}
		}
		$this->lastRengFacCriteria = $criteria;

		return $this->collRengFacs;
	}

	
	public function initDocumCcs()
	{
		if ($this->collDocumCcs === null) {
			$this->collDocumCcs = array();
		}
	}

	
	public function getDocumCcs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
			   $this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

				DocumCcPeer::addSelectColumns($criteria);
				$this->collDocumCcs = DocumCcPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

				DocumCcPeer::addSelectColumns($criteria);
				if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
					$this->collDocumCcs = DocumCcPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastDocumCcCriteria = $criteria;
		return $this->collDocumCcs;
	}

	
	public function countDocumCcs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

		return DocumCcPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDocumCc(DocumCc $l)
	{
		$this->collDocumCcs[] = $l;
		$l->setTabulado($this);
	}


	
	public function getDocumCcsJoinClientes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}


	
	public function getDocumCcsJoinVendedor($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinVendedor($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}


	
	public function getDocumCcsJoinMoneda($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinMoneda($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}


	
	public function getDocumCcsJoinAlmacen($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDocumCcPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocumCcs === null) {
			if ($this->isNew()) {
				$this->collDocumCcs = array();
			} else {

				$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::TIPO, $this->getTipo());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinAlmacen($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}

} 