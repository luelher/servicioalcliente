<?php


abstract class BaseLinArt extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_lin;


	
	protected $lin_des = ' ';


	
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


	
	protected $comi_lin = 0;


	
	protected $comi_lin2 = 0;


	
	protected $row_id;


	
	protected $va = false;


	
	protected $i_lin_des = ' ';


	
	protected $movil = false;

	
	protected $collArts;

	
	protected $lastArtCriteria = null;

	
	protected $collSubLins;

	
	protected $lastSubLinCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoLin()
	{

		return $this->co_lin;
	}

	
	public function getLinDes()
	{

		return $this->lin_des;
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

	
	public function getCoImun()
	{

		return $this->co_imun;
	}

	
	public function getCoReten()
	{

		return $this->co_reten;
	}

	
	public function getComiLin()
	{

		return $this->comi_lin;
	}

	
	public function getComiLin2()
	{

		return $this->comi_lin2;
	}

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function getVa()
	{

		return $this->va;
	}

	
	public function getILinDes()
	{

		return $this->i_lin_des;
	}

	
	public function getMovil()
	{

		return $this->movil;
	}

	
	public function setCoLin($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_lin !== $v) {
			$this->co_lin = $v;
			$this->modifiedColumns[] = LinArtPeer::CO_LIN;
		}

	} 
	
	public function setLinDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lin_des !== $v || $v === ' ') {
			$this->lin_des = $v;
			$this->modifiedColumns[] = LinArtPeer::LIN_DES;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = LinArtPeer::DIS_CEN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = LinArtPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = LinArtPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = LinArtPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = LinArtPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = LinArtPeer::CO_US_IN;
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
			$this->modifiedColumns[] = LinArtPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = LinArtPeer::CO_US_MO;
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
			$this->modifiedColumns[] = LinArtPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = LinArtPeer::CO_US_EL;
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
			$this->modifiedColumns[] = LinArtPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = LinArtPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = LinArtPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = LinArtPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = LinArtPeer::ROWGUID;
		}

	} 
	
	public function setCoImun($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_imun !== $v || $v === ' ') {
			$this->co_imun = $v;
			$this->modifiedColumns[] = LinArtPeer::CO_IMUN;
		}

	} 
	
	public function setCoReten($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_reten !== $v || $v === ' ') {
			$this->co_reten = $v;
			$this->modifiedColumns[] = LinArtPeer::CO_RETEN;
		}

	} 
	
	public function setComiLin($v)
	{

		if ($this->comi_lin !== $v || $v === 0) {
			$this->comi_lin = $v;
			$this->modifiedColumns[] = LinArtPeer::COMI_LIN;
		}

	} 
	
	public function setComiLin2($v)
	{

		if ($this->comi_lin2 !== $v || $v === 0) {
			$this->comi_lin2 = $v;
			$this->modifiedColumns[] = LinArtPeer::COMI_LIN2;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = LinArtPeer::ROW_ID;
		}

	} 
	
	public function setVa($v)
	{

		if ($this->va !== $v || $v === false) {
			$this->va = $v;
			$this->modifiedColumns[] = LinArtPeer::VA;
		}

	} 
	
	public function setILinDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->i_lin_des !== $v || $v === ' ') {
			$this->i_lin_des = $v;
			$this->modifiedColumns[] = LinArtPeer::I_LIN_DES;
		}

	} 
	
	public function setMovil($v)
	{

		if ($this->movil !== $v || $v === false) {
			$this->movil = $v;
			$this->modifiedColumns[] = LinArtPeer::MOVIL;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_lin = $rs->getString($startcol + 0);

			$this->lin_des = $rs->getString($startcol + 1);

			$this->dis_cen = $rs->getString($startcol + 2);

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

			$this->co_imun = $rs->getString($startcol + 17);

			$this->co_reten = $rs->getString($startcol + 18);

			$this->comi_lin = $rs->getFloat($startcol + 19);

			$this->comi_lin2 = $rs->getFloat($startcol + 20);

			$this->row_id = $rs->getBlob($startcol + 21);

			$this->va = $rs->getBoolean($startcol + 22);

			$this->i_lin_des = $rs->getString($startcol + 23);

			$this->movil = $rs->getBoolean($startcol + 24);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 25; 
		} catch (Exception $e) {
			throw new PropelException("Error populating LinArt object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LinArtPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LinArtPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LinArtPeer::DATABASE_NAME);
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
					$pk = LinArtPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += LinArtPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collArts !== null) {
				foreach($this->collArts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collSubLins !== null) {
				foreach($this->collSubLins as $referrerFK) {
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


			if (($retval = LinArtPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collArts !== null) {
					foreach($this->collArts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collSubLins !== null) {
					foreach($this->collSubLins as $referrerFK) {
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
		$pos = LinArtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoLin();
				break;
			case 1:
				return $this->getLinDes();
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
				return $this->getComiLin();
				break;
			case 20:
				return $this->getComiLin2();
				break;
			case 21:
				return $this->getRowId();
				break;
			case 22:
				return $this->getVa();
				break;
			case 23:
				return $this->getILinDes();
				break;
			case 24:
				return $this->getMovil();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LinArtPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoLin(),
			$keys[1] => $this->getLinDes(),
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
			$keys[19] => $this->getComiLin(),
			$keys[20] => $this->getComiLin2(),
			$keys[21] => $this->getRowId(),
			$keys[22] => $this->getVa(),
			$keys[23] => $this->getILinDes(),
			$keys[24] => $this->getMovil(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LinArtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoLin($value);
				break;
			case 1:
				$this->setLinDes($value);
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
				$this->setComiLin($value);
				break;
			case 20:
				$this->setComiLin2($value);
				break;
			case 21:
				$this->setRowId($value);
				break;
			case 22:
				$this->setVa($value);
				break;
			case 23:
				$this->setILinDes($value);
				break;
			case 24:
				$this->setMovil($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LinArtPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoLin($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLinDes($arr[$keys[1]]);
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
		if (array_key_exists($keys[19], $arr)) $this->setComiLin($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setComiLin2($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setRowId($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setVa($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setILinDes($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setMovil($arr[$keys[24]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LinArtPeer::DATABASE_NAME);

		if ($this->isColumnModified(LinArtPeer::CO_LIN)) $criteria->add(LinArtPeer::CO_LIN, $this->co_lin);
		if ($this->isColumnModified(LinArtPeer::LIN_DES)) $criteria->add(LinArtPeer::LIN_DES, $this->lin_des);
		if ($this->isColumnModified(LinArtPeer::DIS_CEN)) $criteria->add(LinArtPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(LinArtPeer::CAMPO1)) $criteria->add(LinArtPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(LinArtPeer::CAMPO2)) $criteria->add(LinArtPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(LinArtPeer::CAMPO3)) $criteria->add(LinArtPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(LinArtPeer::CAMPO4)) $criteria->add(LinArtPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(LinArtPeer::CO_US_IN)) $criteria->add(LinArtPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(LinArtPeer::FE_US_IN)) $criteria->add(LinArtPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(LinArtPeer::CO_US_MO)) $criteria->add(LinArtPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(LinArtPeer::FE_US_MO)) $criteria->add(LinArtPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(LinArtPeer::CO_US_EL)) $criteria->add(LinArtPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(LinArtPeer::FE_US_EL)) $criteria->add(LinArtPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(LinArtPeer::REVISADO)) $criteria->add(LinArtPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(LinArtPeer::TRASNFE)) $criteria->add(LinArtPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(LinArtPeer::CO_SUCU)) $criteria->add(LinArtPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(LinArtPeer::ROWGUID)) $criteria->add(LinArtPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(LinArtPeer::CO_IMUN)) $criteria->add(LinArtPeer::CO_IMUN, $this->co_imun);
		if ($this->isColumnModified(LinArtPeer::CO_RETEN)) $criteria->add(LinArtPeer::CO_RETEN, $this->co_reten);
		if ($this->isColumnModified(LinArtPeer::COMI_LIN)) $criteria->add(LinArtPeer::COMI_LIN, $this->comi_lin);
		if ($this->isColumnModified(LinArtPeer::COMI_LIN2)) $criteria->add(LinArtPeer::COMI_LIN2, $this->comi_lin2);
		if ($this->isColumnModified(LinArtPeer::ROW_ID)) $criteria->add(LinArtPeer::ROW_ID, $this->row_id);
		if ($this->isColumnModified(LinArtPeer::VA)) $criteria->add(LinArtPeer::VA, $this->va);
		if ($this->isColumnModified(LinArtPeer::I_LIN_DES)) $criteria->add(LinArtPeer::I_LIN_DES, $this->i_lin_des);
		if ($this->isColumnModified(LinArtPeer::MOVIL)) $criteria->add(LinArtPeer::MOVIL, $this->movil);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LinArtPeer::DATABASE_NAME);

		$criteria->add(LinArtPeer::CO_LIN, $this->co_lin);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoLin();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoLin($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setLinDes($this->lin_des);

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

		$copyObj->setComiLin($this->comi_lin);

		$copyObj->setComiLin2($this->comi_lin2);

		$copyObj->setRowId($this->row_id);

		$copyObj->setVa($this->va);

		$copyObj->setILinDes($this->i_lin_des);

		$copyObj->setMovil($this->movil);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getArts() as $relObj) {
				$copyObj->addArt($relObj->copy($deepCopy));
			}

			foreach($this->getSubLins() as $relObj) {
				$copyObj->addSubLin($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoLin(NULL); 
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
			self::$peer = new LinArtPeer();
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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				ArtPeer::addSelectColumns($criteria);
				$this->collArts = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

		$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArt(Art $l)
	{
		$this->collArts[] = $l;
		$l->setLinArt($this);
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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinProv($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedByUniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

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

				$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_LIN, $this->getCoLin());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}

	
	public function initSubLins()
	{
		if ($this->collSubLins === null) {
			$this->collSubLins = array();
		}
	}

	
	public function getSubLins($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSubLinPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSubLins === null) {
			if ($this->isNew()) {
			   $this->collSubLins = array();
			} else {

				$criteria->add(SubLinPeer::CO_LIN, $this->getCoLin());

				SubLinPeer::addSelectColumns($criteria);
				$this->collSubLins = SubLinPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SubLinPeer::CO_LIN, $this->getCoLin());

				SubLinPeer::addSelectColumns($criteria);
				if (!isset($this->lastSubLinCriteria) || !$this->lastSubLinCriteria->equals($criteria)) {
					$this->collSubLins = SubLinPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSubLinCriteria = $criteria;
		return $this->collSubLins;
	}

	
	public function countSubLins($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSubLinPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SubLinPeer::CO_LIN, $this->getCoLin());

		return SubLinPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSubLin(SubLin $l)
	{
		$this->collSubLins[] = $l;
		$l->setLinArt($this);
	}

} 