<?php


abstract class BaseRengCob extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $cob_num;


	
	protected $reng_num;


	
	protected $tp_doc_cob = ' ';


	
	protected $doc_num = 0;


	
	protected $neto = 0;


	
	protected $neto_tmp = 0;


	
	protected $dppago = 0;


	
	protected $dppago_tmp = 0;


	
	protected $reng_ncr = 0;


	
	protected $co_ven = ' ';


	
	protected $comis1 = 0;


	
	protected $comis2 = 0;


	
	protected $comis3 = 0;


	
	protected $comis4 = 0;


	
	protected $sign_aju_c = ' ';


	
	protected $porc_aju_c = 0;


	
	protected $por_cob = 0;


	
	protected $comi_cob = 0;


	
	protected $mont_cob = 0;


	
	protected $sino_pago = false;


	
	protected $sino_reten = false;


	
	protected $monto_dppago = 0;


	
	protected $monto_reten = 0;


	
	protected $imp_pago = 0;


	
	protected $monto_obj = 0;


	
	protected $isv = 0;


	
	protected $nro_fact = ' ';


	
	protected $moneda = ' ';


	
	protected $tasa = 1;


	
	protected $numcon = ' ';


	
	protected $sustraen = 0;


	
	protected $rowguid = '(newid())';


	
	protected $co_islr = ' ';


	
	protected $fec_emis;


	
	protected $fec_venc;


	
	protected $comis5 = 0;


	
	protected $comis6 = 0;


	
	protected $fact_iva = 0;


	
	protected $ret_iva = 0;


	
	protected $porc_retn = 0;


	
	protected $porc_desc = 0;


	
	protected $aux01 = 0;


	
	protected $aux02 = ' ';

	
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

	
	public function getTpDocCob()
	{

		return $this->tp_doc_cob;
	}

	
	public function getDocNum()
	{

		return $this->doc_num;
	}

	
	public function getNeto()
	{

		return $this->neto;
	}

	
	public function getNetoTmp()
	{

		return $this->neto_tmp;
	}

	
	public function getDppago()
	{

		return $this->dppago;
	}

	
	public function getDppagoTmp()
	{

		return $this->dppago_tmp;
	}

	
	public function getRengNcr()
	{

		return $this->reng_ncr;
	}

	
	public function getCoVen()
	{

		return $this->co_ven;
	}

	
	public function getComis1()
	{

		return $this->comis1;
	}

	
	public function getComis2()
	{

		return $this->comis2;
	}

	
	public function getComis3()
	{

		return $this->comis3;
	}

	
	public function getComis4()
	{

		return $this->comis4;
	}

	
	public function getSignAjuC()
	{

		return $this->sign_aju_c;
	}

	
	public function getPorcAjuC()
	{

		return $this->porc_aju_c;
	}

	
	public function getPorCob()
	{

		return $this->por_cob;
	}

	
	public function getComiCob()
	{

		return $this->comi_cob;
	}

	
	public function getMontCob()
	{

		return $this->mont_cob;
	}

	
	public function getSinoPago()
	{

		return $this->sino_pago;
	}

	
	public function getSinoReten()
	{

		return $this->sino_reten;
	}

	
	public function getMontoDppago()
	{

		return $this->monto_dppago;
	}

	
	public function getMontoReten()
	{

		return $this->monto_reten;
	}

	
	public function getImpPago()
	{

		return $this->imp_pago;
	}

	
	public function getMontoObj()
	{

		return $this->monto_obj;
	}

	
	public function getIsv()
	{

		return $this->isv;
	}

	
	public function getNroFact()
	{

		return $this->nro_fact;
	}

	
	public function getMoneda()
	{

		return $this->moneda;
	}

	
	public function getTasa()
	{

		return $this->tasa;
	}

	
	public function getNumcon()
	{

		return $this->numcon;
	}

	
	public function getSustraen()
	{

		return $this->sustraen;
	}

	
	public function getRowguid()
	{

		return $this->rowguid;
	}

	
	public function getCoIslr()
	{

		return $this->co_islr;
	}

	
	public function getFecEmis($format = 'Y-m-d')
	{

		if ($this->fec_emis === null || $this->fec_emis === '') {
			return null;
		} elseif (!is_int($this->fec_emis)) {
						$ts = strtotime($this->fec_emis);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fec_emis] as date/time value: " . var_export($this->fec_emis, true));
			}
		} else {
			$ts = $this->fec_emis;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFecVenc($format = 'Y-m-d')
	{

		if ($this->fec_venc === null || $this->fec_venc === '') {
			return null;
		} elseif (!is_int($this->fec_venc)) {
						$ts = strtotime($this->fec_venc);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fec_venc] as date/time value: " . var_export($this->fec_venc, true));
			}
		} else {
			$ts = $this->fec_venc;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getComis5()
	{

		return $this->comis5;
	}

	
	public function getComis6()
	{

		return $this->comis6;
	}

	
	public function getFactIva()
	{

		return $this->fact_iva;
	}

	
	public function getRetIva()
	{

		return $this->ret_iva;
	}

	
	public function getPorcRetn()
	{

		return $this->porc_retn;
	}

	
	public function getPorcDesc()
	{

		return $this->porc_desc;
	}

	
	public function getAux01()
	{

		return $this->aux01;
	}

	
	public function getAux02()
	{

		return $this->aux02;
	}

	
	public function setCobNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cob_num !== $v) {
			$this->cob_num = $v;
			$this->modifiedColumns[] = RengCobPeer::COB_NUM;
		}

	} 
	
	public function setRengNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reng_num !== $v) {
			$this->reng_num = $v;
			$this->modifiedColumns[] = RengCobPeer::RENG_NUM;
		}

	} 
	
	public function setTpDocCob($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_doc_cob !== $v || $v === ' ') {
			$this->tp_doc_cob = $v;
			$this->modifiedColumns[] = RengCobPeer::TP_DOC_COB;
		}

	} 
	
	public function setDocNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->doc_num !== $v || $v === 0) {
			$this->doc_num = $v;
			$this->modifiedColumns[] = RengCobPeer::DOC_NUM;
		}

	} 
	
	public function setNeto($v)
	{

		if ($this->neto !== $v || $v === 0) {
			$this->neto = $v;
			$this->modifiedColumns[] = RengCobPeer::NETO;
		}

	} 
	
	public function setNetoTmp($v)
	{

		if ($this->neto_tmp !== $v || $v === 0) {
			$this->neto_tmp = $v;
			$this->modifiedColumns[] = RengCobPeer::NETO_TMP;
		}

	} 
	
	public function setDppago($v)
	{

		if ($this->dppago !== $v || $v === 0) {
			$this->dppago = $v;
			$this->modifiedColumns[] = RengCobPeer::DPPAGO;
		}

	} 
	
	public function setDppagoTmp($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dppago_tmp !== $v || $v === 0) {
			$this->dppago_tmp = $v;
			$this->modifiedColumns[] = RengCobPeer::DPPAGO_TMP;
		}

	} 
	
	public function setRengNcr($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reng_ncr !== $v || $v === 0) {
			$this->reng_ncr = $v;
			$this->modifiedColumns[] = RengCobPeer::RENG_NCR;
		}

	} 
	
	public function setCoVen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ven !== $v || $v === ' ') {
			$this->co_ven = $v;
			$this->modifiedColumns[] = RengCobPeer::CO_VEN;
		}

	} 
	
	public function setComis1($v)
	{

		if ($this->comis1 !== $v || $v === 0) {
			$this->comis1 = $v;
			$this->modifiedColumns[] = RengCobPeer::COMIS1;
		}

	} 
	
	public function setComis2($v)
	{

		if ($this->comis2 !== $v || $v === 0) {
			$this->comis2 = $v;
			$this->modifiedColumns[] = RengCobPeer::COMIS2;
		}

	} 
	
	public function setComis3($v)
	{

		if ($this->comis3 !== $v || $v === 0) {
			$this->comis3 = $v;
			$this->modifiedColumns[] = RengCobPeer::COMIS3;
		}

	} 
	
	public function setComis4($v)
	{

		if ($this->comis4 !== $v || $v === 0) {
			$this->comis4 = $v;
			$this->modifiedColumns[] = RengCobPeer::COMIS4;
		}

	} 
	
	public function setSignAjuC($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sign_aju_c !== $v || $v === ' ') {
			$this->sign_aju_c = $v;
			$this->modifiedColumns[] = RengCobPeer::SIGN_AJU_C;
		}

	} 
	
	public function setPorcAjuC($v)
	{

		if ($this->porc_aju_c !== $v || $v === 0) {
			$this->porc_aju_c = $v;
			$this->modifiedColumns[] = RengCobPeer::PORC_AJU_C;
		}

	} 
	
	public function setPorCob($v)
	{

		if ($this->por_cob !== $v || $v === 0) {
			$this->por_cob = $v;
			$this->modifiedColumns[] = RengCobPeer::POR_COB;
		}

	} 
	
	public function setComiCob($v)
	{

		if ($this->comi_cob !== $v || $v === 0) {
			$this->comi_cob = $v;
			$this->modifiedColumns[] = RengCobPeer::COMI_COB;
		}

	} 
	
	public function setMontCob($v)
	{

		if ($this->mont_cob !== $v || $v === 0) {
			$this->mont_cob = $v;
			$this->modifiedColumns[] = RengCobPeer::MONT_COB;
		}

	} 
	
	public function setSinoPago($v)
	{

		if ($this->sino_pago !== $v || $v === false) {
			$this->sino_pago = $v;
			$this->modifiedColumns[] = RengCobPeer::SINO_PAGO;
		}

	} 
	
	public function setSinoReten($v)
	{

		if ($this->sino_reten !== $v || $v === false) {
			$this->sino_reten = $v;
			$this->modifiedColumns[] = RengCobPeer::SINO_RETEN;
		}

	} 
	
	public function setMontoDppago($v)
	{

		if ($this->monto_dppago !== $v || $v === 0) {
			$this->monto_dppago = $v;
			$this->modifiedColumns[] = RengCobPeer::MONTO_DPPAGO;
		}

	} 
	
	public function setMontoReten($v)
	{

		if ($this->monto_reten !== $v || $v === 0) {
			$this->monto_reten = $v;
			$this->modifiedColumns[] = RengCobPeer::MONTO_RETEN;
		}

	} 
	
	public function setImpPago($v)
	{

		if ($this->imp_pago !== $v || $v === 0) {
			$this->imp_pago = $v;
			$this->modifiedColumns[] = RengCobPeer::IMP_PAGO;
		}

	} 
	
	public function setMontoObj($v)
	{

		if ($this->monto_obj !== $v || $v === 0) {
			$this->monto_obj = $v;
			$this->modifiedColumns[] = RengCobPeer::MONTO_OBJ;
		}

	} 
	
	public function setIsv($v)
	{

		if ($this->isv !== $v || $v === 0) {
			$this->isv = $v;
			$this->modifiedColumns[] = RengCobPeer::ISV;
		}

	} 
	
	public function setNroFact($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nro_fact !== $v || $v === ' ') {
			$this->nro_fact = $v;
			$this->modifiedColumns[] = RengCobPeer::NRO_FACT;
		}

	} 
	
	public function setMoneda($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moneda !== $v || $v === ' ') {
			$this->moneda = $v;
			$this->modifiedColumns[] = RengCobPeer::MONEDA;
		}

	} 
	
	public function setTasa($v)
	{

		if ($this->tasa !== $v || $v === 1) {
			$this->tasa = $v;
			$this->modifiedColumns[] = RengCobPeer::TASA;
		}

	} 
	
	public function setNumcon($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numcon !== $v || $v === ' ') {
			$this->numcon = $v;
			$this->modifiedColumns[] = RengCobPeer::NUMCON;
		}

	} 
	
	public function setSustraen($v)
	{

		if ($this->sustraen !== $v || $v === 0) {
			$this->sustraen = $v;
			$this->modifiedColumns[] = RengCobPeer::SUSTRAEN;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = RengCobPeer::ROWGUID;
		}

	} 
	
	public function setCoIslr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_islr !== $v || $v === ' ') {
			$this->co_islr = $v;
			$this->modifiedColumns[] = RengCobPeer::CO_ISLR;
		}

	} 
	
	public function setFecEmis($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_emis] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_emis !== $ts) {
			$this->fec_emis = $ts;
			$this->modifiedColumns[] = RengCobPeer::FEC_EMIS;
		}

	} 
	
	public function setFecVenc($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_venc] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_venc !== $ts) {
			$this->fec_venc = $ts;
			$this->modifiedColumns[] = RengCobPeer::FEC_VENC;
		}

	} 
	
	public function setComis5($v)
	{

		if ($this->comis5 !== $v || $v === 0) {
			$this->comis5 = $v;
			$this->modifiedColumns[] = RengCobPeer::COMIS5;
		}

	} 
	
	public function setComis6($v)
	{

		if ($this->comis6 !== $v || $v === 0) {
			$this->comis6 = $v;
			$this->modifiedColumns[] = RengCobPeer::COMIS6;
		}

	} 
	
	public function setFactIva($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_iva !== $v || $v === 0) {
			$this->fact_iva = $v;
			$this->modifiedColumns[] = RengCobPeer::FACT_IVA;
		}

	} 
	
	public function setRetIva($v)
	{

		if ($this->ret_iva !== $v || $v === 0) {
			$this->ret_iva = $v;
			$this->modifiedColumns[] = RengCobPeer::RET_IVA;
		}

	} 
	
	public function setPorcRetn($v)
	{

		if ($this->porc_retn !== $v || $v === 0) {
			$this->porc_retn = $v;
			$this->modifiedColumns[] = RengCobPeer::PORC_RETN;
		}

	} 
	
	public function setPorcDesc($v)
	{

		if ($this->porc_desc !== $v || $v === 0) {
			$this->porc_desc = $v;
			$this->modifiedColumns[] = RengCobPeer::PORC_DESC;
		}

	} 
	
	public function setAux01($v)
	{

		if ($this->aux01 !== $v || $v === 0) {
			$this->aux01 = $v;
			$this->modifiedColumns[] = RengCobPeer::AUX01;
		}

	} 
	
	public function setAux02($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->aux02 !== $v || $v === ' ') {
			$this->aux02 = $v;
			$this->modifiedColumns[] = RengCobPeer::AUX02;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->cob_num = $rs->getInt($startcol + 0);

			$this->reng_num = $rs->getInt($startcol + 1);

			$this->tp_doc_cob = $rs->getString($startcol + 2);

			$this->doc_num = $rs->getInt($startcol + 3);

			$this->neto = $rs->getFloat($startcol + 4);

			$this->neto_tmp = $rs->getFloat($startcol + 5);

			$this->dppago = $rs->getFloat($startcol + 6);

			$this->dppago_tmp = $rs->getInt($startcol + 7);

			$this->reng_ncr = $rs->getInt($startcol + 8);

			$this->co_ven = $rs->getString($startcol + 9);

			$this->comis1 = $rs->getFloat($startcol + 10);

			$this->comis2 = $rs->getFloat($startcol + 11);

			$this->comis3 = $rs->getFloat($startcol + 12);

			$this->comis4 = $rs->getFloat($startcol + 13);

			$this->sign_aju_c = $rs->getString($startcol + 14);

			$this->porc_aju_c = $rs->getFloat($startcol + 15);

			$this->por_cob = $rs->getFloat($startcol + 16);

			$this->comi_cob = $rs->getFloat($startcol + 17);

			$this->mont_cob = $rs->getFloat($startcol + 18);

			$this->sino_pago = $rs->getBoolean($startcol + 19);

			$this->sino_reten = $rs->getBoolean($startcol + 20);

			$this->monto_dppago = $rs->getFloat($startcol + 21);

			$this->monto_reten = $rs->getFloat($startcol + 22);

			$this->imp_pago = $rs->getFloat($startcol + 23);

			$this->monto_obj = $rs->getFloat($startcol + 24);

			$this->isv = $rs->getFloat($startcol + 25);

			$this->nro_fact = $rs->getString($startcol + 26);

			$this->moneda = $rs->getString($startcol + 27);

			$this->tasa = $rs->getFloat($startcol + 28);

			$this->numcon = $rs->getString($startcol + 29);

			$this->sustraen = $rs->getFloat($startcol + 30);

			$this->rowguid = $rs->getString($startcol + 31);

			$this->co_islr = $rs->getString($startcol + 32);

			$this->fec_emis = $rs->getDate($startcol + 33, null);

			$this->fec_venc = $rs->getDate($startcol + 34, null);

			$this->comis5 = $rs->getFloat($startcol + 35);

			$this->comis6 = $rs->getFloat($startcol + 36);

			$this->fact_iva = $rs->getInt($startcol + 37);

			$this->ret_iva = $rs->getFloat($startcol + 38);

			$this->porc_retn = $rs->getFloat($startcol + 39);

			$this->porc_desc = $rs->getFloat($startcol + 40);

			$this->aux01 = $rs->getFloat($startcol + 41);

			$this->aux02 = $rs->getString($startcol + 42);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 43; 
		} catch (Exception $e) {
			throw new PropelException("Error populating RengCob object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RengCobPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RengCobPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RengCobPeer::DATABASE_NAME);
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
					$pk = RengCobPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += RengCobPeer::doUpdate($this, $con);
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


			if (($retval = RengCobPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RengCobPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTpDocCob();
				break;
			case 3:
				return $this->getDocNum();
				break;
			case 4:
				return $this->getNeto();
				break;
			case 5:
				return $this->getNetoTmp();
				break;
			case 6:
				return $this->getDppago();
				break;
			case 7:
				return $this->getDppagoTmp();
				break;
			case 8:
				return $this->getRengNcr();
				break;
			case 9:
				return $this->getCoVen();
				break;
			case 10:
				return $this->getComis1();
				break;
			case 11:
				return $this->getComis2();
				break;
			case 12:
				return $this->getComis3();
				break;
			case 13:
				return $this->getComis4();
				break;
			case 14:
				return $this->getSignAjuC();
				break;
			case 15:
				return $this->getPorcAjuC();
				break;
			case 16:
				return $this->getPorCob();
				break;
			case 17:
				return $this->getComiCob();
				break;
			case 18:
				return $this->getMontCob();
				break;
			case 19:
				return $this->getSinoPago();
				break;
			case 20:
				return $this->getSinoReten();
				break;
			case 21:
				return $this->getMontoDppago();
				break;
			case 22:
				return $this->getMontoReten();
				break;
			case 23:
				return $this->getImpPago();
				break;
			case 24:
				return $this->getMontoObj();
				break;
			case 25:
				return $this->getIsv();
				break;
			case 26:
				return $this->getNroFact();
				break;
			case 27:
				return $this->getMoneda();
				break;
			case 28:
				return $this->getTasa();
				break;
			case 29:
				return $this->getNumcon();
				break;
			case 30:
				return $this->getSustraen();
				break;
			case 31:
				return $this->getRowguid();
				break;
			case 32:
				return $this->getCoIslr();
				break;
			case 33:
				return $this->getFecEmis();
				break;
			case 34:
				return $this->getFecVenc();
				break;
			case 35:
				return $this->getComis5();
				break;
			case 36:
				return $this->getComis6();
				break;
			case 37:
				return $this->getFactIva();
				break;
			case 38:
				return $this->getRetIva();
				break;
			case 39:
				return $this->getPorcRetn();
				break;
			case 40:
				return $this->getPorcDesc();
				break;
			case 41:
				return $this->getAux01();
				break;
			case 42:
				return $this->getAux02();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RengCobPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCobNum(),
			$keys[1] => $this->getRengNum(),
			$keys[2] => $this->getTpDocCob(),
			$keys[3] => $this->getDocNum(),
			$keys[4] => $this->getNeto(),
			$keys[5] => $this->getNetoTmp(),
			$keys[6] => $this->getDppago(),
			$keys[7] => $this->getDppagoTmp(),
			$keys[8] => $this->getRengNcr(),
			$keys[9] => $this->getCoVen(),
			$keys[10] => $this->getComis1(),
			$keys[11] => $this->getComis2(),
			$keys[12] => $this->getComis3(),
			$keys[13] => $this->getComis4(),
			$keys[14] => $this->getSignAjuC(),
			$keys[15] => $this->getPorcAjuC(),
			$keys[16] => $this->getPorCob(),
			$keys[17] => $this->getComiCob(),
			$keys[18] => $this->getMontCob(),
			$keys[19] => $this->getSinoPago(),
			$keys[20] => $this->getSinoReten(),
			$keys[21] => $this->getMontoDppago(),
			$keys[22] => $this->getMontoReten(),
			$keys[23] => $this->getImpPago(),
			$keys[24] => $this->getMontoObj(),
			$keys[25] => $this->getIsv(),
			$keys[26] => $this->getNroFact(),
			$keys[27] => $this->getMoneda(),
			$keys[28] => $this->getTasa(),
			$keys[29] => $this->getNumcon(),
			$keys[30] => $this->getSustraen(),
			$keys[31] => $this->getRowguid(),
			$keys[32] => $this->getCoIslr(),
			$keys[33] => $this->getFecEmis(),
			$keys[34] => $this->getFecVenc(),
			$keys[35] => $this->getComis5(),
			$keys[36] => $this->getComis6(),
			$keys[37] => $this->getFactIva(),
			$keys[38] => $this->getRetIva(),
			$keys[39] => $this->getPorcRetn(),
			$keys[40] => $this->getPorcDesc(),
			$keys[41] => $this->getAux01(),
			$keys[42] => $this->getAux02(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RengCobPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTpDocCob($value);
				break;
			case 3:
				$this->setDocNum($value);
				break;
			case 4:
				$this->setNeto($value);
				break;
			case 5:
				$this->setNetoTmp($value);
				break;
			case 6:
				$this->setDppago($value);
				break;
			case 7:
				$this->setDppagoTmp($value);
				break;
			case 8:
				$this->setRengNcr($value);
				break;
			case 9:
				$this->setCoVen($value);
				break;
			case 10:
				$this->setComis1($value);
				break;
			case 11:
				$this->setComis2($value);
				break;
			case 12:
				$this->setComis3($value);
				break;
			case 13:
				$this->setComis4($value);
				break;
			case 14:
				$this->setSignAjuC($value);
				break;
			case 15:
				$this->setPorcAjuC($value);
				break;
			case 16:
				$this->setPorCob($value);
				break;
			case 17:
				$this->setComiCob($value);
				break;
			case 18:
				$this->setMontCob($value);
				break;
			case 19:
				$this->setSinoPago($value);
				break;
			case 20:
				$this->setSinoReten($value);
				break;
			case 21:
				$this->setMontoDppago($value);
				break;
			case 22:
				$this->setMontoReten($value);
				break;
			case 23:
				$this->setImpPago($value);
				break;
			case 24:
				$this->setMontoObj($value);
				break;
			case 25:
				$this->setIsv($value);
				break;
			case 26:
				$this->setNroFact($value);
				break;
			case 27:
				$this->setMoneda($value);
				break;
			case 28:
				$this->setTasa($value);
				break;
			case 29:
				$this->setNumcon($value);
				break;
			case 30:
				$this->setSustraen($value);
				break;
			case 31:
				$this->setRowguid($value);
				break;
			case 32:
				$this->setCoIslr($value);
				break;
			case 33:
				$this->setFecEmis($value);
				break;
			case 34:
				$this->setFecVenc($value);
				break;
			case 35:
				$this->setComis5($value);
				break;
			case 36:
				$this->setComis6($value);
				break;
			case 37:
				$this->setFactIva($value);
				break;
			case 38:
				$this->setRetIva($value);
				break;
			case 39:
				$this->setPorcRetn($value);
				break;
			case 40:
				$this->setPorcDesc($value);
				break;
			case 41:
				$this->setAux01($value);
				break;
			case 42:
				$this->setAux02($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RengCobPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCobNum($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRengNum($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTpDocCob($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDocNum($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNeto($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNetoTmp($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDppago($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDppagoTmp($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setRengNcr($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCoVen($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setComis1($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setComis2($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setComis3($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setComis4($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setSignAjuC($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setPorcAjuC($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setPorCob($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setComiCob($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setMontCob($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSinoPago($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setSinoReten($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setMontoDppago($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setMontoReten($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setImpPago($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setMontoObj($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setIsv($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setNroFact($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setMoneda($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setTasa($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setNumcon($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setSustraen($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setRowguid($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setCoIslr($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setFecEmis($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setFecVenc($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setComis5($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setComis6($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setFactIva($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setRetIva($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setPorcRetn($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setPorcDesc($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setAux01($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setAux02($arr[$keys[42]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RengCobPeer::DATABASE_NAME);

		if ($this->isColumnModified(RengCobPeer::COB_NUM)) $criteria->add(RengCobPeer::COB_NUM, $this->cob_num);
		if ($this->isColumnModified(RengCobPeer::RENG_NUM)) $criteria->add(RengCobPeer::RENG_NUM, $this->reng_num);
		if ($this->isColumnModified(RengCobPeer::TP_DOC_COB)) $criteria->add(RengCobPeer::TP_DOC_COB, $this->tp_doc_cob);
		if ($this->isColumnModified(RengCobPeer::DOC_NUM)) $criteria->add(RengCobPeer::DOC_NUM, $this->doc_num);
		if ($this->isColumnModified(RengCobPeer::NETO)) $criteria->add(RengCobPeer::NETO, $this->neto);
		if ($this->isColumnModified(RengCobPeer::NETO_TMP)) $criteria->add(RengCobPeer::NETO_TMP, $this->neto_tmp);
		if ($this->isColumnModified(RengCobPeer::DPPAGO)) $criteria->add(RengCobPeer::DPPAGO, $this->dppago);
		if ($this->isColumnModified(RengCobPeer::DPPAGO_TMP)) $criteria->add(RengCobPeer::DPPAGO_TMP, $this->dppago_tmp);
		if ($this->isColumnModified(RengCobPeer::RENG_NCR)) $criteria->add(RengCobPeer::RENG_NCR, $this->reng_ncr);
		if ($this->isColumnModified(RengCobPeer::CO_VEN)) $criteria->add(RengCobPeer::CO_VEN, $this->co_ven);
		if ($this->isColumnModified(RengCobPeer::COMIS1)) $criteria->add(RengCobPeer::COMIS1, $this->comis1);
		if ($this->isColumnModified(RengCobPeer::COMIS2)) $criteria->add(RengCobPeer::COMIS2, $this->comis2);
		if ($this->isColumnModified(RengCobPeer::COMIS3)) $criteria->add(RengCobPeer::COMIS3, $this->comis3);
		if ($this->isColumnModified(RengCobPeer::COMIS4)) $criteria->add(RengCobPeer::COMIS4, $this->comis4);
		if ($this->isColumnModified(RengCobPeer::SIGN_AJU_C)) $criteria->add(RengCobPeer::SIGN_AJU_C, $this->sign_aju_c);
		if ($this->isColumnModified(RengCobPeer::PORC_AJU_C)) $criteria->add(RengCobPeer::PORC_AJU_C, $this->porc_aju_c);
		if ($this->isColumnModified(RengCobPeer::POR_COB)) $criteria->add(RengCobPeer::POR_COB, $this->por_cob);
		if ($this->isColumnModified(RengCobPeer::COMI_COB)) $criteria->add(RengCobPeer::COMI_COB, $this->comi_cob);
		if ($this->isColumnModified(RengCobPeer::MONT_COB)) $criteria->add(RengCobPeer::MONT_COB, $this->mont_cob);
		if ($this->isColumnModified(RengCobPeer::SINO_PAGO)) $criteria->add(RengCobPeer::SINO_PAGO, $this->sino_pago);
		if ($this->isColumnModified(RengCobPeer::SINO_RETEN)) $criteria->add(RengCobPeer::SINO_RETEN, $this->sino_reten);
		if ($this->isColumnModified(RengCobPeer::MONTO_DPPAGO)) $criteria->add(RengCobPeer::MONTO_DPPAGO, $this->monto_dppago);
		if ($this->isColumnModified(RengCobPeer::MONTO_RETEN)) $criteria->add(RengCobPeer::MONTO_RETEN, $this->monto_reten);
		if ($this->isColumnModified(RengCobPeer::IMP_PAGO)) $criteria->add(RengCobPeer::IMP_PAGO, $this->imp_pago);
		if ($this->isColumnModified(RengCobPeer::MONTO_OBJ)) $criteria->add(RengCobPeer::MONTO_OBJ, $this->monto_obj);
		if ($this->isColumnModified(RengCobPeer::ISV)) $criteria->add(RengCobPeer::ISV, $this->isv);
		if ($this->isColumnModified(RengCobPeer::NRO_FACT)) $criteria->add(RengCobPeer::NRO_FACT, $this->nro_fact);
		if ($this->isColumnModified(RengCobPeer::MONEDA)) $criteria->add(RengCobPeer::MONEDA, $this->moneda);
		if ($this->isColumnModified(RengCobPeer::TASA)) $criteria->add(RengCobPeer::TASA, $this->tasa);
		if ($this->isColumnModified(RengCobPeer::NUMCON)) $criteria->add(RengCobPeer::NUMCON, $this->numcon);
		if ($this->isColumnModified(RengCobPeer::SUSTRAEN)) $criteria->add(RengCobPeer::SUSTRAEN, $this->sustraen);
		if ($this->isColumnModified(RengCobPeer::ROWGUID)) $criteria->add(RengCobPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(RengCobPeer::CO_ISLR)) $criteria->add(RengCobPeer::CO_ISLR, $this->co_islr);
		if ($this->isColumnModified(RengCobPeer::FEC_EMIS)) $criteria->add(RengCobPeer::FEC_EMIS, $this->fec_emis);
		if ($this->isColumnModified(RengCobPeer::FEC_VENC)) $criteria->add(RengCobPeer::FEC_VENC, $this->fec_venc);
		if ($this->isColumnModified(RengCobPeer::COMIS5)) $criteria->add(RengCobPeer::COMIS5, $this->comis5);
		if ($this->isColumnModified(RengCobPeer::COMIS6)) $criteria->add(RengCobPeer::COMIS6, $this->comis6);
		if ($this->isColumnModified(RengCobPeer::FACT_IVA)) $criteria->add(RengCobPeer::FACT_IVA, $this->fact_iva);
		if ($this->isColumnModified(RengCobPeer::RET_IVA)) $criteria->add(RengCobPeer::RET_IVA, $this->ret_iva);
		if ($this->isColumnModified(RengCobPeer::PORC_RETN)) $criteria->add(RengCobPeer::PORC_RETN, $this->porc_retn);
		if ($this->isColumnModified(RengCobPeer::PORC_DESC)) $criteria->add(RengCobPeer::PORC_DESC, $this->porc_desc);
		if ($this->isColumnModified(RengCobPeer::AUX01)) $criteria->add(RengCobPeer::AUX01, $this->aux01);
		if ($this->isColumnModified(RengCobPeer::AUX02)) $criteria->add(RengCobPeer::AUX02, $this->aux02);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RengCobPeer::DATABASE_NAME);

		$criteria->add(RengCobPeer::COB_NUM, $this->cob_num);
		$criteria->add(RengCobPeer::RENG_NUM, $this->reng_num);

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

		$copyObj->setTpDocCob($this->tp_doc_cob);

		$copyObj->setDocNum($this->doc_num);

		$copyObj->setNeto($this->neto);

		$copyObj->setNetoTmp($this->neto_tmp);

		$copyObj->setDppago($this->dppago);

		$copyObj->setDppagoTmp($this->dppago_tmp);

		$copyObj->setRengNcr($this->reng_ncr);

		$copyObj->setCoVen($this->co_ven);

		$copyObj->setComis1($this->comis1);

		$copyObj->setComis2($this->comis2);

		$copyObj->setComis3($this->comis3);

		$copyObj->setComis4($this->comis4);

		$copyObj->setSignAjuC($this->sign_aju_c);

		$copyObj->setPorcAjuC($this->porc_aju_c);

		$copyObj->setPorCob($this->por_cob);

		$copyObj->setComiCob($this->comi_cob);

		$copyObj->setMontCob($this->mont_cob);

		$copyObj->setSinoPago($this->sino_pago);

		$copyObj->setSinoReten($this->sino_reten);

		$copyObj->setMontoDppago($this->monto_dppago);

		$copyObj->setMontoReten($this->monto_reten);

		$copyObj->setImpPago($this->imp_pago);

		$copyObj->setMontoObj($this->monto_obj);

		$copyObj->setIsv($this->isv);

		$copyObj->setNroFact($this->nro_fact);

		$copyObj->setMoneda($this->moneda);

		$copyObj->setTasa($this->tasa);

		$copyObj->setNumcon($this->numcon);

		$copyObj->setSustraen($this->sustraen);

		$copyObj->setRowguid($this->rowguid);

		$copyObj->setCoIslr($this->co_islr);

		$copyObj->setFecEmis($this->fec_emis);

		$copyObj->setFecVenc($this->fec_venc);

		$copyObj->setComis5($this->comis5);

		$copyObj->setComis6($this->comis6);

		$copyObj->setFactIva($this->fact_iva);

		$copyObj->setRetIva($this->ret_iva);

		$copyObj->setPorcRetn($this->porc_retn);

		$copyObj->setPorcDesc($this->porc_desc);

		$copyObj->setAux01($this->aux01);

		$copyObj->setAux02($this->aux02);


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
			self::$peer = new RengCobPeer();
		}
		return self::$peer;
	}

} 