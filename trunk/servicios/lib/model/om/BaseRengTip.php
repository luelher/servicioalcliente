<?php


abstract class BaseRengTip extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $cob_num;


	
	protected $reng_num;


	
	protected $tip_cob = ' ';


	
	protected $movi = 0;


	
	protected $num_doc = ' ';


	
	protected $mont_doc = 0;


	
	protected $mont_tmp = 0;


	
	protected $moneda = ' ';


	
	protected $banco = ' ';


	
	protected $cod_caja = ' ';


	
	protected $des_caja = ' ';


	
	protected $fec_cheq;


	
	protected $nombre_ban = ' ';


	
	protected $numero = ' ';


	
	protected $devuelto = false;


	
	protected $rowguid = '(newid())';


	
	protected $operador = ' ';


	
	protected $clave = ' ';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCobNum()
	{

		return $this->cob_num;
	}

	
	public function getRengNum()
	{

		return $this->reng_num;
	}

	
	public function getTipCob()
	{

		return $this->tip_cob;
	}

	
	public function getMovi()
	{

		return $this->movi;
	}

	
	public function getNumDoc()
	{

		return $this->num_doc;
	}

	
	public function getMontDoc()
	{

		return $this->mont_doc;
	}

	
	public function getMontTmp()
	{

		return $this->mont_tmp;
	}

	
	public function getMoneda()
	{

		return $this->moneda;
	}

	
	public function getBanco()
	{

		return $this->banco;
	}

	
	public function getCodCaja()
	{

		return $this->cod_caja;
	}

	
	public function getDesCaja()
	{

		return $this->des_caja;
	}

	
	public function getFecCheq($format = 'Y-m-d H:i:s')
	{

		if ($this->fec_cheq === null || $this->fec_cheq === '') {
			return null;
		} elseif (!is_int($this->fec_cheq)) {
						$ts = strtotime($this->fec_cheq);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fec_cheq] as date/time value: " . var_export($this->fec_cheq, true));
			}
		} else {
			$ts = $this->fec_cheq;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getNombreBan()
	{

		return $this->nombre_ban;
	}

	
	public function getNumero()
	{

		return $this->numero;
	}

	
	public function getDevuelto()
	{

		return $this->devuelto;
	}

	
	public function getRowguid()
	{

		return $this->rowguid;
	}

	
	public function getOperador()
	{

		return $this->operador;
	}

	
	public function getClave()
	{

		return $this->clave;
	}

	
	public function setCobNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cob_num !== $v) {
			$this->cob_num = $v;
			$this->modifiedColumns[] = RengTipPeer::COB_NUM;
		}

	} 
	
	public function setRengNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reng_num !== $v) {
			$this->reng_num = $v;
			$this->modifiedColumns[] = RengTipPeer::RENG_NUM;
		}

	} 
	
	public function setTipCob($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tip_cob !== $v || $v === ' ') {
			$this->tip_cob = $v;
			$this->modifiedColumns[] = RengTipPeer::TIP_COB;
		}

	} 
	
	public function setMovi($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->movi !== $v || $v === 0) {
			$this->movi = $v;
			$this->modifiedColumns[] = RengTipPeer::MOVI;
		}

	} 
	
	public function setNumDoc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->num_doc !== $v || $v === ' ') {
			$this->num_doc = $v;
			$this->modifiedColumns[] = RengTipPeer::NUM_DOC;
		}

	} 
	
	public function setMontDoc($v)
	{

		if ($this->mont_doc !== $v || $v === 0) {
			$this->mont_doc = $v;
			$this->modifiedColumns[] = RengTipPeer::MONT_DOC;
		}

	} 
	
	public function setMontTmp($v)
	{

		if ($this->mont_tmp !== $v || $v === 0) {
			$this->mont_tmp = $v;
			$this->modifiedColumns[] = RengTipPeer::MONT_TMP;
		}

	} 
	
	public function setMoneda($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moneda !== $v || $v === ' ') {
			$this->moneda = $v;
			$this->modifiedColumns[] = RengTipPeer::MONEDA;
		}

	} 
	
	public function setBanco($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->banco !== $v || $v === ' ') {
			$this->banco = $v;
			$this->modifiedColumns[] = RengTipPeer::BANCO;
		}

	} 
	
	public function setCodCaja($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cod_caja !== $v || $v === ' ') {
			$this->cod_caja = $v;
			$this->modifiedColumns[] = RengTipPeer::COD_CAJA;
		}

	} 
	
	public function setDesCaja($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_caja !== $v || $v === ' ') {
			$this->des_caja = $v;
			$this->modifiedColumns[] = RengTipPeer::DES_CAJA;
		}

	} 
	
	public function setFecCheq($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_cheq] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_cheq !== $ts) {
			$this->fec_cheq = $ts;
			$this->modifiedColumns[] = RengTipPeer::FEC_CHEQ;
		}

	} 
	
	public function setNombreBan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre_ban !== $v || $v === ' ') {
			$this->nombre_ban = $v;
			$this->modifiedColumns[] = RengTipPeer::NOMBRE_BAN;
		}

	} 
	
	public function setNumero($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numero !== $v || $v === ' ') {
			$this->numero = $v;
			$this->modifiedColumns[] = RengTipPeer::NUMERO;
		}

	} 
	
	public function setDevuelto($v)
	{

		if ($this->devuelto !== $v || $v === false) {
			$this->devuelto = $v;
			$this->modifiedColumns[] = RengTipPeer::DEVUELTO;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = RengTipPeer::ROWGUID;
		}

	} 
	
	public function setOperador($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->operador !== $v || $v === ' ') {
			$this->operador = $v;
			$this->modifiedColumns[] = RengTipPeer::OPERADOR;
		}

	} 
	
	public function setClave($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->clave !== $v || $v === ' ') {
			$this->clave = $v;
			$this->modifiedColumns[] = RengTipPeer::CLAVE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->cob_num = $rs->getInt($startcol + 0);

			$this->reng_num = $rs->getInt($startcol + 1);

			$this->tip_cob = $rs->getString($startcol + 2);

			$this->movi = $rs->getInt($startcol + 3);

			$this->num_doc = $rs->getString($startcol + 4);

			$this->mont_doc = $rs->getFloat($startcol + 5);

			$this->mont_tmp = $rs->getFloat($startcol + 6);

			$this->moneda = $rs->getString($startcol + 7);

			$this->banco = $rs->getString($startcol + 8);

			$this->cod_caja = $rs->getString($startcol + 9);

			$this->des_caja = $rs->getString($startcol + 10);

			$this->fec_cheq = $rs->getTimestamp($startcol + 11, null);

			$this->nombre_ban = $rs->getString($startcol + 12);

			$this->numero = $rs->getString($startcol + 13);

			$this->devuelto = $rs->getBoolean($startcol + 14);

			$this->rowguid = $rs->getString($startcol + 15);

			$this->operador = $rs->getString($startcol + 16);

			$this->clave = $rs->getString($startcol + 17);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 18; 
		} catch (Exception $e) {
			throw new PropelException("Error populating RengTip object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RengTipPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RengTipPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RengTipPeer::DATABASE_NAME);
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
					$pk = RengTipPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += RengTipPeer::doUpdate($this, $con);
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


			if (($retval = RengTipPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RengTipPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCobNum();
				break;
			case 1:
				return $this->getRengNum();
				break;
			case 2:
				return $this->getTipCob();
				break;
			case 3:
				return $this->getMovi();
				break;
			case 4:
				return $this->getNumDoc();
				break;
			case 5:
				return $this->getMontDoc();
				break;
			case 6:
				return $this->getMontTmp();
				break;
			case 7:
				return $this->getMoneda();
				break;
			case 8:
				return $this->getBanco();
				break;
			case 9:
				return $this->getCodCaja();
				break;
			case 10:
				return $this->getDesCaja();
				break;
			case 11:
				return $this->getFecCheq();
				break;
			case 12:
				return $this->getNombreBan();
				break;
			case 13:
				return $this->getNumero();
				break;
			case 14:
				return $this->getDevuelto();
				break;
			case 15:
				return $this->getRowguid();
				break;
			case 16:
				return $this->getOperador();
				break;
			case 17:
				return $this->getClave();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RengTipPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCobNum(),
			$keys[1] => $this->getRengNum(),
			$keys[2] => $this->getTipCob(),
			$keys[3] => $this->getMovi(),
			$keys[4] => $this->getNumDoc(),
			$keys[5] => $this->getMontDoc(),
			$keys[6] => $this->getMontTmp(),
			$keys[7] => $this->getMoneda(),
			$keys[8] => $this->getBanco(),
			$keys[9] => $this->getCodCaja(),
			$keys[10] => $this->getDesCaja(),
			$keys[11] => $this->getFecCheq(),
			$keys[12] => $this->getNombreBan(),
			$keys[13] => $this->getNumero(),
			$keys[14] => $this->getDevuelto(),
			$keys[15] => $this->getRowguid(),
			$keys[16] => $this->getOperador(),
			$keys[17] => $this->getClave(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RengTipPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCobNum($value);
				break;
			case 1:
				$this->setRengNum($value);
				break;
			case 2:
				$this->setTipCob($value);
				break;
			case 3:
				$this->setMovi($value);
				break;
			case 4:
				$this->setNumDoc($value);
				break;
			case 5:
				$this->setMontDoc($value);
				break;
			case 6:
				$this->setMontTmp($value);
				break;
			case 7:
				$this->setMoneda($value);
				break;
			case 8:
				$this->setBanco($value);
				break;
			case 9:
				$this->setCodCaja($value);
				break;
			case 10:
				$this->setDesCaja($value);
				break;
			case 11:
				$this->setFecCheq($value);
				break;
			case 12:
				$this->setNombreBan($value);
				break;
			case 13:
				$this->setNumero($value);
				break;
			case 14:
				$this->setDevuelto($value);
				break;
			case 15:
				$this->setRowguid($value);
				break;
			case 16:
				$this->setOperador($value);
				break;
			case 17:
				$this->setClave($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RengTipPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCobNum($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRengNum($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTipCob($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMovi($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNumDoc($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setMontDoc($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMontTmp($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMoneda($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setBanco($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCodCaja($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDesCaja($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFecCheq($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNombreBan($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setNumero($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDevuelto($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setRowguid($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setOperador($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setClave($arr[$keys[17]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RengTipPeer::DATABASE_NAME);

		if ($this->isColumnModified(RengTipPeer::COB_NUM)) $criteria->add(RengTipPeer::COB_NUM, $this->cob_num);
		if ($this->isColumnModified(RengTipPeer::RENG_NUM)) $criteria->add(RengTipPeer::RENG_NUM, $this->reng_num);
		if ($this->isColumnModified(RengTipPeer::TIP_COB)) $criteria->add(RengTipPeer::TIP_COB, $this->tip_cob);
		if ($this->isColumnModified(RengTipPeer::MOVI)) $criteria->add(RengTipPeer::MOVI, $this->movi);
		if ($this->isColumnModified(RengTipPeer::NUM_DOC)) $criteria->add(RengTipPeer::NUM_DOC, $this->num_doc);
		if ($this->isColumnModified(RengTipPeer::MONT_DOC)) $criteria->add(RengTipPeer::MONT_DOC, $this->mont_doc);
		if ($this->isColumnModified(RengTipPeer::MONT_TMP)) $criteria->add(RengTipPeer::MONT_TMP, $this->mont_tmp);
		if ($this->isColumnModified(RengTipPeer::MONEDA)) $criteria->add(RengTipPeer::MONEDA, $this->moneda);
		if ($this->isColumnModified(RengTipPeer::BANCO)) $criteria->add(RengTipPeer::BANCO, $this->banco);
		if ($this->isColumnModified(RengTipPeer::COD_CAJA)) $criteria->add(RengTipPeer::COD_CAJA, $this->cod_caja);
		if ($this->isColumnModified(RengTipPeer::DES_CAJA)) $criteria->add(RengTipPeer::DES_CAJA, $this->des_caja);
		if ($this->isColumnModified(RengTipPeer::FEC_CHEQ)) $criteria->add(RengTipPeer::FEC_CHEQ, $this->fec_cheq);
		if ($this->isColumnModified(RengTipPeer::NOMBRE_BAN)) $criteria->add(RengTipPeer::NOMBRE_BAN, $this->nombre_ban);
		if ($this->isColumnModified(RengTipPeer::NUMERO)) $criteria->add(RengTipPeer::NUMERO, $this->numero);
		if ($this->isColumnModified(RengTipPeer::DEVUELTO)) $criteria->add(RengTipPeer::DEVUELTO, $this->devuelto);
		if ($this->isColumnModified(RengTipPeer::ROWGUID)) $criteria->add(RengTipPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(RengTipPeer::OPERADOR)) $criteria->add(RengTipPeer::OPERADOR, $this->operador);
		if ($this->isColumnModified(RengTipPeer::CLAVE)) $criteria->add(RengTipPeer::CLAVE, $this->clave);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RengTipPeer::DATABASE_NAME);

		$criteria->add(RengTipPeer::COB_NUM, $this->cob_num);
		$criteria->add(RengTipPeer::RENG_NUM, $this->reng_num);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		$pks = array();

		$pks[0] = $this->getCobNum();

		$pks[1] = $this->getRengNum();

		return $pks;
	}

	
	public function setPrimaryKey($keys)
	{

		$this->setCobNum($keys[0]);

		$this->setRengNum($keys[1]);

	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTipCob($this->tip_cob);

		$copyObj->setMovi($this->movi);

		$copyObj->setNumDoc($this->num_doc);

		$copyObj->setMontDoc($this->mont_doc);

		$copyObj->setMontTmp($this->mont_tmp);

		$copyObj->setMoneda($this->moneda);

		$copyObj->setBanco($this->banco);

		$copyObj->setCodCaja($this->cod_caja);

		$copyObj->setDesCaja($this->des_caja);

		$copyObj->setFecCheq($this->fec_cheq);

		$copyObj->setNombreBan($this->nombre_ban);

		$copyObj->setNumero($this->numero);

		$copyObj->setDevuelto($this->devuelto);

		$copyObj->setRowguid($this->rowguid);

		$copyObj->setOperador($this->operador);

		$copyObj->setClave($this->clave);


		$copyObj->setNew(true);

		$copyObj->setCobNum(NULL); 
		$copyObj->setRengNum(NULL); 
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
			self::$peer = new RengTipPeer();
		}
		return self::$peer;
	}

} 