<?php


abstract class BaseClientes extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_cli;


	
	protected $cli_des;


	
	protected $direc1;


	
	protected $telefonos;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoCli()
	{

		return $this->co_cli;
	}

	
	public function getCliDes()
	{

		return $this->cli_des;
	}

	
	public function getDirec1()
	{

		return $this->direc1;
	}

	
	public function getTelefonos()
	{

		return $this->telefonos;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setCoCli($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cli !== $v) {
			$this->co_cli = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_CLI;
		}

	} 
	
	public function setCliDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cli_des !== $v) {
			$this->cli_des = $v;
			$this->modifiedColumns[] = ClientesPeer::CLI_DES;
		}

	} 
	
	public function setDirec1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->direc1 !== $v) {
			$this->direc1 = $v;
			$this->modifiedColumns[] = ClientesPeer::DIREC1;
		}

	} 
	
	public function setTelefonos($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->telefonos !== $v) {
			$this->telefonos = $v;
			$this->modifiedColumns[] = ClientesPeer::TELEFONOS;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ClientesPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_cli = $rs->getString($startcol + 0);

			$this->cli_des = $rs->getString($startcol + 1);

			$this->direc1 = $rs->getString($startcol + 2);

			$this->telefonos = $rs->getString($startcol + 3);

			$this->id = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Clientes object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ClientesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ClientesPeer::DATABASE_NAME);
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
					$pk = ClientesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ClientesPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


			if (($retval = ClientesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClientesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoCli();
				break;
			case 1:
				return $this->getCliDes();
				break;
			case 2:
				return $this->getDirec1();
				break;
			case 3:
				return $this->getTelefonos();
				break;
			case 4:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClientesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoCli(),
			$keys[1] => $this->getCliDes(),
			$keys[2] => $this->getDirec1(),
			$keys[3] => $this->getTelefonos(),
			$keys[4] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClientesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoCli($value);
				break;
			case 1:
				$this->setCliDes($value);
				break;
			case 2:
				$this->setDirec1($value);
				break;
			case 3:
				$this->setTelefonos($value);
				break;
			case 4:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClientesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoCli($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCliDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDirec1($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTelefonos($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setId($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ClientesPeer::DATABASE_NAME);

		if ($this->isColumnModified(ClientesPeer::CO_CLI)) $criteria->add(ClientesPeer::CO_CLI, $this->co_cli);
		if ($this->isColumnModified(ClientesPeer::CLI_DES)) $criteria->add(ClientesPeer::CLI_DES, $this->cli_des);
		if ($this->isColumnModified(ClientesPeer::DIREC1)) $criteria->add(ClientesPeer::DIREC1, $this->direc1);
		if ($this->isColumnModified(ClientesPeer::TELEFONOS)) $criteria->add(ClientesPeer::TELEFONOS, $this->telefonos);
		if ($this->isColumnModified(ClientesPeer::ID)) $criteria->add(ClientesPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ClientesPeer::DATABASE_NAME);

		$criteria->add(ClientesPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCoCli($this->co_cli);

		$copyObj->setCliDes($this->cli_des);

		$copyObj->setDirec1($this->direc1);

		$copyObj->setTelefonos($this->telefonos);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
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
			self::$peer = new ClientesPeer();
		}
		return self::$peer;
	}

} 