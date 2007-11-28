<?php


abstract class BaseTipoCli extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $tip_cli;


	
	protected $des_tipo = ' ';


	
	protected $precio_a = ' ';


	
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

	
	protected $collClientess;

	
	protected $lastClientesCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTipCli()
	{

		return $this->tip_cli;
	}

	
	public function getDesTipo()
	{

		return $this->des_tipo;
	}

	
	public function getPrecioA()
	{

		return $this->precio_a;
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

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function setTipCli($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tip_cli !== $v) {
			$this->tip_cli = $v;
			$this->modifiedColumns[] = TipoCliPeer::TIP_CLI;
		}

	} 
	
	public function setDesTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_tipo !== $v || $v === ' ') {
			$this->des_tipo = $v;
			$this->modifiedColumns[] = TipoCliPeer::DES_TIPO;
		}

	} 
	
	public function setPrecioA($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->precio_a !== $v || $v === ' ') {
			$this->precio_a = $v;
			$this->modifiedColumns[] = TipoCliPeer::PRECIO_A;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = TipoCliPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = TipoCliPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = TipoCliPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = TipoCliPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = TipoCliPeer::CO_US_IN;
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
			$this->modifiedColumns[] = TipoCliPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = TipoCliPeer::CO_US_MO;
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
			$this->modifiedColumns[] = TipoCliPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = TipoCliPeer::CO_US_EL;
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
			$this->modifiedColumns[] = TipoCliPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = TipoCliPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = TipoCliPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = TipoCliPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = TipoCliPeer::ROWGUID;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = TipoCliPeer::ROW_ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->tip_cli = $rs->getString($startcol + 0);

			$this->des_tipo = $rs->getString($startcol + 1);

			$this->precio_a = $rs->getString($startcol + 2);

			$this->campo1 = $rs->getString($startcol + 3);

			$this->campo2 = $rs->getString($startcol + 4);

			$this->campo3 = $rs->getString($startcol + 5);

			$this->campo4 = $rs->getString($startcol + 6);

			$this->co_us_in = $rs->getString($startcol + 7);

			$this->fe_us_in = $rs->getDate($startcol + 8, null);

			$this->co_us_mo = $rs->getString($startcol + 9);

			$this->fe_us_mo = $rs->getDate($startcol + 10, null);

			$this->co_us_el = $rs->getString($startcol + 11);

			$this->fe_us_el = $rs->getDate($startcol + 12, null);

			$this->revisado = $rs->getString($startcol + 13);

			$this->trasnfe = $rs->getString($startcol + 14);

			$this->co_sucu = $rs->getString($startcol + 15);

			$this->rowguid = $rs->getString($startcol + 16);

			$this->row_id = $rs->getBlob($startcol + 17);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 18; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TipoCli object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TipoCliPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TipoCliPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TipoCliPeer::DATABASE_NAME);
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
					$pk = TipoCliPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += TipoCliPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collClientess !== null) {
				foreach($this->collClientess as $referrerFK) {
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


			if (($retval = TipoCliPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collClientess !== null) {
					foreach($this->collClientess as $referrerFK) {
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
		$pos = TipoCliPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTipCli();
				break;
			case 1:
				return $this->getDesTipo();
				break;
			case 2:
				return $this->getPrecioA();
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
				return $this->getRowId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TipoCliPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTipCli(),
			$keys[1] => $this->getDesTipo(),
			$keys[2] => $this->getPrecioA(),
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
			$keys[17] => $this->getRowId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TipoCliPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTipCli($value);
				break;
			case 1:
				$this->setDesTipo($value);
				break;
			case 2:
				$this->setPrecioA($value);
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
				$this->setRowId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TipoCliPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTipCli($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesTipo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPrecioA($arr[$keys[2]]);
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
		if (array_key_exists($keys[17], $arr)) $this->setRowId($arr[$keys[17]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TipoCliPeer::DATABASE_NAME);

		if ($this->isColumnModified(TipoCliPeer::TIP_CLI)) $criteria->add(TipoCliPeer::TIP_CLI, $this->tip_cli);
		if ($this->isColumnModified(TipoCliPeer::DES_TIPO)) $criteria->add(TipoCliPeer::DES_TIPO, $this->des_tipo);
		if ($this->isColumnModified(TipoCliPeer::PRECIO_A)) $criteria->add(TipoCliPeer::PRECIO_A, $this->precio_a);
		if ($this->isColumnModified(TipoCliPeer::CAMPO1)) $criteria->add(TipoCliPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(TipoCliPeer::CAMPO2)) $criteria->add(TipoCliPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(TipoCliPeer::CAMPO3)) $criteria->add(TipoCliPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(TipoCliPeer::CAMPO4)) $criteria->add(TipoCliPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(TipoCliPeer::CO_US_IN)) $criteria->add(TipoCliPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(TipoCliPeer::FE_US_IN)) $criteria->add(TipoCliPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(TipoCliPeer::CO_US_MO)) $criteria->add(TipoCliPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(TipoCliPeer::FE_US_MO)) $criteria->add(TipoCliPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(TipoCliPeer::CO_US_EL)) $criteria->add(TipoCliPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(TipoCliPeer::FE_US_EL)) $criteria->add(TipoCliPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(TipoCliPeer::REVISADO)) $criteria->add(TipoCliPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(TipoCliPeer::TRASNFE)) $criteria->add(TipoCliPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(TipoCliPeer::CO_SUCU)) $criteria->add(TipoCliPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(TipoCliPeer::ROWGUID)) $criteria->add(TipoCliPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(TipoCliPeer::ROW_ID)) $criteria->add(TipoCliPeer::ROW_ID, $this->row_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TipoCliPeer::DATABASE_NAME);

		$criteria->add(TipoCliPeer::TIP_CLI, $this->tip_cli);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getTipCli();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setTipCli($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDesTipo($this->des_tipo);

		$copyObj->setPrecioA($this->precio_a);

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

			foreach($this->getClientess() as $relObj) {
				$copyObj->addClientes($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setTipCli(NULL); 
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
			self::$peer = new TipoCliPeer();
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

				$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

				ClientesPeer::addSelectColumns($criteria);
				$this->collClientess = ClientesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

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

		$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

		return ClientesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClientes(Clientes $l)
	{
		$this->collClientess[] = $l;
		$l->setTipoCli($this);
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

				$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

				$this->collClientess = ClientesPeer::doSelectJoinZona($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

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

				$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

				$this->collClientess = ClientesPeer::doSelectJoinSegmento($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

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

				$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

				$this->collClientess = ClientesPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

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

				$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

				$this->collClientess = ClientesPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::TIPO, $this->getTipCli());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		}
		$this->lastClientesCriteria = $criteria;

		return $this->collClientess;
	}

} 