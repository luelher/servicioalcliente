<?php


abstract class BaseFactura extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $fact_num;


	
	protected $contrib = false;


	
	protected $nombre = ' ';


	
	protected $rif = ' ';


	
	protected $nit = ' ';


	
	protected $num_control = 0;


	
	protected $status = ' ';


	
	protected $comentario = ' ';


	
	protected $descrip = ' ';


	
	protected $saldo = 0;


	
	protected $fec_emis;


	
	protected $fec_venc;


	
	protected $co_cli = ' ';


	
	protected $co_ven = ' ';


	
	protected $co_tran = ' ';


	
	protected $dir_ent = ' ';


	
	protected $forma_pag = ' ';


	
	protected $tot_bruto = 0;


	
	protected $tot_neto = 0;


	
	protected $glob_desc = 0;


	
	protected $tot_reca = 0;


	
	protected $porc_gdesc = ' ';


	
	protected $porc_reca = ' ';


	
	protected $total_uc = 0;


	
	protected $total_cp = 0;


	
	protected $tot_flete = 0;


	
	protected $monto_dev = 0;


	
	protected $totklu = 0;


	
	protected $anulada = false;


	
	protected $impresa = false;


	
	protected $iva = 0;


	
	protected $iva_dev = 0;


	
	protected $numcom = 0;


	
	protected $tasa = 1;


	
	protected $dis_cen = ' ';


	
	protected $vuelto = 0;


	
	protected $seriales = 0;


	
	protected $tasag = 0;


	
	protected $tasag10 = 0;


	
	protected $tasag20 = 0;


	
	protected $id = -1;

	
	protected $aClientes;

	
	protected $aVendedor;

	
	protected $aTranspor;

	
	protected $aCondicio;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getFactNum()
	{

		return $this->fact_num;
	}

	
	public function getContrib()
	{

		return $this->contrib;
	}

	
	public function getNombre()
	{

		return $this->nombre;
	}

	
	public function getRif()
	{

		return $this->rif;
	}

	
	public function getNit()
	{

		return $this->nit;
	}

	
	public function getNumControl()
	{

		return $this->num_control;
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getComentario()
	{

		return $this->comentario;
	}

	
	public function getDescrip()
	{

		return $this->descrip;
	}

	
	public function getSaldo()
	{

		return $this->saldo;
	}

	
	public function getFecEmis()
	{

		return $this->fec_emis;
	}

	
	public function getFecVenc()
	{

		return $this->fec_venc;
	}

	
	public function getCoCli()
	{

		return $this->co_cli;
	}

	
	public function getCoVen()
	{

		return $this->co_ven;
	}

	
	public function getCoTran()
	{

		return $this->co_tran;
	}

	
	public function getDirEnt()
	{

		return $this->dir_ent;
	}

	
	public function getFormaPag()
	{

		return $this->forma_pag;
	}

	
	public function getTotBruto()
	{

		return $this->tot_bruto;
	}

	
	public function getTotNeto()
	{

		return $this->tot_neto;
	}

	
	public function getGlobDesc()
	{

		return $this->glob_desc;
	}

	
	public function getTotReca()
	{

		return $this->tot_reca;
	}

	
	public function getPorcGdesc()
	{

		return $this->porc_gdesc;
	}

	
	public function getPorcReca()
	{

		return $this->porc_reca;
	}

	
	public function getTotalUc()
	{

		return $this->total_uc;
	}

	
	public function getTotalCp()
	{

		return $this->total_cp;
	}

	
	public function getTotFlete()
	{

		return $this->tot_flete;
	}

	
	public function getMontoDev()
	{

		return $this->monto_dev;
	}

	
	public function getTotklu()
	{

		return $this->totklu;
	}

	
	public function getAnulada()
	{

		return $this->anulada;
	}

	
	public function getImpresa()
	{

		return $this->impresa;
	}

	
	public function getIva()
	{

		return $this->iva;
	}

	
	public function getIvaDev()
	{

		return $this->iva_dev;
	}

	
	public function getNumcom()
	{

		return $this->numcom;
	}

	
	public function getTasa()
	{

		return $this->tasa;
	}

	
	public function getDisCen()
	{

		return $this->dis_cen;
	}

	
	public function getVuelto()
	{

		return $this->vuelto;
	}

	
	public function getSeriales()
	{

		return $this->seriales;
	}

	
	public function getTasag()
	{

		return $this->tasag;
	}

	
	public function getTasag10()
	{

		return $this->tasag10;
	}

	
	public function getTasag20()
	{

		return $this->tasag20;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setFactNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_num !== $v) {
			$this->fact_num = $v;
			$this->modifiedColumns[] = FacturaPeer::FACT_NUM;
		}

	} 
	
	public function setContrib($v)
	{

		if ($this->contrib !== $v || $v === false) {
			$this->contrib = $v;
			$this->modifiedColumns[] = FacturaPeer::CONTRIB;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v || $v === ' ') {
			$this->nombre = $v;
			$this->modifiedColumns[] = FacturaPeer::NOMBRE;
		}

	} 
	
	public function setRif($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rif !== $v || $v === ' ') {
			$this->rif = $v;
			$this->modifiedColumns[] = FacturaPeer::RIF;
		}

	} 
	
	public function setNit($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nit !== $v || $v === ' ') {
			$this->nit = $v;
			$this->modifiedColumns[] = FacturaPeer::NIT;
		}

	} 
	
	public function setNumControl($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_control !== $v || $v === 0) {
			$this->num_control = $v;
			$this->modifiedColumns[] = FacturaPeer::NUM_CONTROL;
		}

	} 
	
	public function setStatus($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v || $v === ' ') {
			$this->status = $v;
			$this->modifiedColumns[] = FacturaPeer::STATUS;
		}

	} 
	
	public function setComentario($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comentario !== $v || $v === ' ') {
			$this->comentario = $v;
			$this->modifiedColumns[] = FacturaPeer::COMENTARIO;
		}

	} 
	
	public function setDescrip($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descrip !== $v || $v === ' ') {
			$this->descrip = $v;
			$this->modifiedColumns[] = FacturaPeer::DESCRIP;
		}

	} 
	
	public function setSaldo($v)
	{

		if ($this->saldo !== $v || $v === 0) {
			$this->saldo = $v;
			$this->modifiedColumns[] = FacturaPeer::SALDO;
		}

	} 
	
	public function setFecEmis($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_emis !== $v) {
			$this->fec_emis = $v;
			$this->modifiedColumns[] = FacturaPeer::FEC_EMIS;
		}

	} 
	
	public function setFecVenc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_venc !== $v) {
			$this->fec_venc = $v;
			$this->modifiedColumns[] = FacturaPeer::FEC_VENC;
		}

	} 
	
	public function setCoCli($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cli !== $v || $v === ' ') {
			$this->co_cli = $v;
			$this->modifiedColumns[] = FacturaPeer::CO_CLI;
		}

		if ($this->aClientes !== null && $this->aClientes->getCoCli() !== $v) {
			$this->aClientes = null;
		}

	} 
	
	public function setCoVen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ven !== $v || $v === ' ') {
			$this->co_ven = $v;
			$this->modifiedColumns[] = FacturaPeer::CO_VEN;
		}

		if ($this->aVendedor !== null && $this->aVendedor->getCoVen() !== $v) {
			$this->aVendedor = null;
		}

	} 
	
	public function setCoTran($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_tran !== $v || $v === ' ') {
			$this->co_tran = $v;
			$this->modifiedColumns[] = FacturaPeer::CO_TRAN;
		}

		if ($this->aTranspor !== null && $this->aTranspor->getCoTran() !== $v) {
			$this->aTranspor = null;
		}

	} 
	
	public function setDirEnt($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dir_ent !== $v || $v === ' ') {
			$this->dir_ent = $v;
			$this->modifiedColumns[] = FacturaPeer::DIR_ENT;
		}

	} 
	
	public function setFormaPag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->forma_pag !== $v || $v === ' ') {
			$this->forma_pag = $v;
			$this->modifiedColumns[] = FacturaPeer::FORMA_PAG;
		}

		if ($this->aCondicio !== null && $this->aCondicio->getCoCond() !== $v) {
			$this->aCondicio = null;
		}

	} 
	
	public function setTotBruto($v)
	{

		if ($this->tot_bruto !== $v || $v === 0) {
			$this->tot_bruto = $v;
			$this->modifiedColumns[] = FacturaPeer::TOT_BRUTO;
		}

	} 
	
	public function setTotNeto($v)
	{

		if ($this->tot_neto !== $v || $v === 0) {
			$this->tot_neto = $v;
			$this->modifiedColumns[] = FacturaPeer::TOT_NETO;
		}

	} 
	
	public function setGlobDesc($v)
	{

		if ($this->glob_desc !== $v || $v === 0) {
			$this->glob_desc = $v;
			$this->modifiedColumns[] = FacturaPeer::GLOB_DESC;
		}

	} 
	
	public function setTotReca($v)
	{

		if ($this->tot_reca !== $v || $v === 0) {
			$this->tot_reca = $v;
			$this->modifiedColumns[] = FacturaPeer::TOT_RECA;
		}

	} 
	
	public function setPorcGdesc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->porc_gdesc !== $v || $v === ' ') {
			$this->porc_gdesc = $v;
			$this->modifiedColumns[] = FacturaPeer::PORC_GDESC;
		}

	} 
	
	public function setPorcReca($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->porc_reca !== $v || $v === ' ') {
			$this->porc_reca = $v;
			$this->modifiedColumns[] = FacturaPeer::PORC_RECA;
		}

	} 
	
	public function setTotalUc($v)
	{

		if ($this->total_uc !== $v || $v === 0) {
			$this->total_uc = $v;
			$this->modifiedColumns[] = FacturaPeer::TOTAL_UC;
		}

	} 
	
	public function setTotalCp($v)
	{

		if ($this->total_cp !== $v || $v === 0) {
			$this->total_cp = $v;
			$this->modifiedColumns[] = FacturaPeer::TOTAL_CP;
		}

	} 
	
	public function setTotFlete($v)
	{

		if ($this->tot_flete !== $v || $v === 0) {
			$this->tot_flete = $v;
			$this->modifiedColumns[] = FacturaPeer::TOT_FLETE;
		}

	} 
	
	public function setMontoDev($v)
	{

		if ($this->monto_dev !== $v || $v === 0) {
			$this->monto_dev = $v;
			$this->modifiedColumns[] = FacturaPeer::MONTO_DEV;
		}

	} 
	
	public function setTotklu($v)
	{

		if ($this->totklu !== $v || $v === 0) {
			$this->totklu = $v;
			$this->modifiedColumns[] = FacturaPeer::TOTKLU;
		}

	} 
	
	public function setAnulada($v)
	{

		if ($this->anulada !== $v || $v === false) {
			$this->anulada = $v;
			$this->modifiedColumns[] = FacturaPeer::ANULADA;
		}

	} 
	
	public function setImpresa($v)
	{

		if ($this->impresa !== $v || $v === false) {
			$this->impresa = $v;
			$this->modifiedColumns[] = FacturaPeer::IMPRESA;
		}

	} 
	
	public function setIva($v)
	{

		if ($this->iva !== $v || $v === 0) {
			$this->iva = $v;
			$this->modifiedColumns[] = FacturaPeer::IVA;
		}

	} 
	
	public function setIvaDev($v)
	{

		if ($this->iva_dev !== $v || $v === 0) {
			$this->iva_dev = $v;
			$this->modifiedColumns[] = FacturaPeer::IVA_DEV;
		}

	} 
	
	public function setNumcom($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->numcom !== $v || $v === 0) {
			$this->numcom = $v;
			$this->modifiedColumns[] = FacturaPeer::NUMCOM;
		}

	} 
	
	public function setTasa($v)
	{

		if ($this->tasa !== $v || $v === 1) {
			$this->tasa = $v;
			$this->modifiedColumns[] = FacturaPeer::TASA;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = FacturaPeer::DIS_CEN;
		}

	} 
	
	public function setVuelto($v)
	{

		if ($this->vuelto !== $v || $v === 0) {
			$this->vuelto = $v;
			$this->modifiedColumns[] = FacturaPeer::VUELTO;
		}

	} 
	
	public function setSeriales($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seriales !== $v || $v === 0) {
			$this->seriales = $v;
			$this->modifiedColumns[] = FacturaPeer::SERIALES;
		}

	} 
	
	public function setTasag($v)
	{

		if ($this->tasag !== $v || $v === 0) {
			$this->tasag = $v;
			$this->modifiedColumns[] = FacturaPeer::TASAG;
		}

	} 
	
	public function setTasag10($v)
	{

		if ($this->tasag10 !== $v || $v === 0) {
			$this->tasag10 = $v;
			$this->modifiedColumns[] = FacturaPeer::TASAG10;
		}

	} 
	
	public function setTasag20($v)
	{

		if ($this->tasag20 !== $v || $v === 0) {
			$this->tasag20 = $v;
			$this->modifiedColumns[] = FacturaPeer::TASAG20;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v || $v === -1) {
			$this->id = $v;
			$this->modifiedColumns[] = FacturaPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->fact_num = $rs->getInt($startcol + 0);

			$this->contrib = $rs->getBoolean($startcol + 1);

			$this->nombre = $rs->getString($startcol + 2);

			$this->rif = $rs->getString($startcol + 3);

			$this->nit = $rs->getString($startcol + 4);

			$this->num_control = $rs->getInt($startcol + 5);

			$this->status = $rs->getString($startcol + 6);

			$this->comentario = $rs->getString($startcol + 7);

			$this->descrip = $rs->getString($startcol + 8);

			$this->saldo = $rs->getFloat($startcol + 9);

			$this->fec_emis = $rs->getString($startcol + 10);

			$this->fec_venc = $rs->getString($startcol + 11);

			$this->co_cli = $rs->getString($startcol + 12);

			$this->co_ven = $rs->getString($startcol + 13);

			$this->co_tran = $rs->getString($startcol + 14);

			$this->dir_ent = $rs->getString($startcol + 15);

			$this->forma_pag = $rs->getString($startcol + 16);

			$this->tot_bruto = $rs->getFloat($startcol + 17);

			$this->tot_neto = $rs->getFloat($startcol + 18);

			$this->glob_desc = $rs->getFloat($startcol + 19);

			$this->tot_reca = $rs->getFloat($startcol + 20);

			$this->porc_gdesc = $rs->getString($startcol + 21);

			$this->porc_reca = $rs->getString($startcol + 22);

			$this->total_uc = $rs->getFloat($startcol + 23);

			$this->total_cp = $rs->getFloat($startcol + 24);

			$this->tot_flete = $rs->getFloat($startcol + 25);

			$this->monto_dev = $rs->getFloat($startcol + 26);

			$this->totklu = $rs->getFloat($startcol + 27);

			$this->anulada = $rs->getBoolean($startcol + 28);

			$this->impresa = $rs->getBoolean($startcol + 29);

			$this->iva = $rs->getFloat($startcol + 30);

			$this->iva_dev = $rs->getFloat($startcol + 31);

			$this->numcom = $rs->getInt($startcol + 32);

			$this->tasa = $rs->getFloat($startcol + 33);

			$this->dis_cen = $rs->getString($startcol + 34);

			$this->vuelto = $rs->getFloat($startcol + 35);

			$this->seriales = $rs->getInt($startcol + 36);

			$this->tasag = $rs->getFloat($startcol + 37);

			$this->tasag10 = $rs->getFloat($startcol + 38);

			$this->tasag20 = $rs->getFloat($startcol + 39);

			$this->id = $rs->getInt($startcol + 40);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 41; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Factura object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FacturaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FacturaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FacturaPeer::DATABASE_NAME);
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


												
			if ($this->aClientes !== null) {
				if ($this->aClientes->isModified()) {
					$affectedRows += $this->aClientes->save($con);
				}
				$this->setClientes($this->aClientes);
			}

			if ($this->aVendedor !== null) {
				if ($this->aVendedor->isModified()) {
					$affectedRows += $this->aVendedor->save($con);
				}
				$this->setVendedor($this->aVendedor);
			}

			if ($this->aTranspor !== null) {
				if ($this->aTranspor->isModified()) {
					$affectedRows += $this->aTranspor->save($con);
				}
				$this->setTranspor($this->aTranspor);
			}

			if ($this->aCondicio !== null) {
				if ($this->aCondicio->isModified()) {
					$affectedRows += $this->aCondicio->save($con);
				}
				$this->setCondicio($this->aCondicio);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = FacturaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += FacturaPeer::doUpdate($this, $con);
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


												
			if ($this->aClientes !== null) {
				if (!$this->aClientes->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aClientes->getValidationFailures());
				}
			}

			if ($this->aVendedor !== null) {
				if (!$this->aVendedor->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVendedor->getValidationFailures());
				}
			}

			if ($this->aTranspor !== null) {
				if (!$this->aTranspor->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTranspor->getValidationFailures());
				}
			}

			if ($this->aCondicio !== null) {
				if (!$this->aCondicio->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCondicio->getValidationFailures());
				}
			}


			if (($retval = FacturaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getFactNum();
				break;
			case 1:
				return $this->getContrib();
				break;
			case 2:
				return $this->getNombre();
				break;
			case 3:
				return $this->getRif();
				break;
			case 4:
				return $this->getNit();
				break;
			case 5:
				return $this->getNumControl();
				break;
			case 6:
				return $this->getStatus();
				break;
			case 7:
				return $this->getComentario();
				break;
			case 8:
				return $this->getDescrip();
				break;
			case 9:
				return $this->getSaldo();
				break;
			case 10:
				return $this->getFecEmis();
				break;
			case 11:
				return $this->getFecVenc();
				break;
			case 12:
				return $this->getCoCli();
				break;
			case 13:
				return $this->getCoVen();
				break;
			case 14:
				return $this->getCoTran();
				break;
			case 15:
				return $this->getDirEnt();
				break;
			case 16:
				return $this->getFormaPag();
				break;
			case 17:
				return $this->getTotBruto();
				break;
			case 18:
				return $this->getTotNeto();
				break;
			case 19:
				return $this->getGlobDesc();
				break;
			case 20:
				return $this->getTotReca();
				break;
			case 21:
				return $this->getPorcGdesc();
				break;
			case 22:
				return $this->getPorcReca();
				break;
			case 23:
				return $this->getTotalUc();
				break;
			case 24:
				return $this->getTotalCp();
				break;
			case 25:
				return $this->getTotFlete();
				break;
			case 26:
				return $this->getMontoDev();
				break;
			case 27:
				return $this->getTotklu();
				break;
			case 28:
				return $this->getAnulada();
				break;
			case 29:
				return $this->getImpresa();
				break;
			case 30:
				return $this->getIva();
				break;
			case 31:
				return $this->getIvaDev();
				break;
			case 32:
				return $this->getNumcom();
				break;
			case 33:
				return $this->getTasa();
				break;
			case 34:
				return $this->getDisCen();
				break;
			case 35:
				return $this->getVuelto();
				break;
			case 36:
				return $this->getSeriales();
				break;
			case 37:
				return $this->getTasag();
				break;
			case 38:
				return $this->getTasag10();
				break;
			case 39:
				return $this->getTasag20();
				break;
			case 40:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FacturaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getFactNum(),
			$keys[1] => $this->getContrib(),
			$keys[2] => $this->getNombre(),
			$keys[3] => $this->getRif(),
			$keys[4] => $this->getNit(),
			$keys[5] => $this->getNumControl(),
			$keys[6] => $this->getStatus(),
			$keys[7] => $this->getComentario(),
			$keys[8] => $this->getDescrip(),
			$keys[9] => $this->getSaldo(),
			$keys[10] => $this->getFecEmis(),
			$keys[11] => $this->getFecVenc(),
			$keys[12] => $this->getCoCli(),
			$keys[13] => $this->getCoVen(),
			$keys[14] => $this->getCoTran(),
			$keys[15] => $this->getDirEnt(),
			$keys[16] => $this->getFormaPag(),
			$keys[17] => $this->getTotBruto(),
			$keys[18] => $this->getTotNeto(),
			$keys[19] => $this->getGlobDesc(),
			$keys[20] => $this->getTotReca(),
			$keys[21] => $this->getPorcGdesc(),
			$keys[22] => $this->getPorcReca(),
			$keys[23] => $this->getTotalUc(),
			$keys[24] => $this->getTotalCp(),
			$keys[25] => $this->getTotFlete(),
			$keys[26] => $this->getMontoDev(),
			$keys[27] => $this->getTotklu(),
			$keys[28] => $this->getAnulada(),
			$keys[29] => $this->getImpresa(),
			$keys[30] => $this->getIva(),
			$keys[31] => $this->getIvaDev(),
			$keys[32] => $this->getNumcom(),
			$keys[33] => $this->getTasa(),
			$keys[34] => $this->getDisCen(),
			$keys[35] => $this->getVuelto(),
			$keys[36] => $this->getSeriales(),
			$keys[37] => $this->getTasag(),
			$keys[38] => $this->getTasag10(),
			$keys[39] => $this->getTasag20(),
			$keys[40] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setFactNum($value);
				break;
			case 1:
				$this->setContrib($value);
				break;
			case 2:
				$this->setNombre($value);
				break;
			case 3:
				$this->setRif($value);
				break;
			case 4:
				$this->setNit($value);
				break;
			case 5:
				$this->setNumControl($value);
				break;
			case 6:
				$this->setStatus($value);
				break;
			case 7:
				$this->setComentario($value);
				break;
			case 8:
				$this->setDescrip($value);
				break;
			case 9:
				$this->setSaldo($value);
				break;
			case 10:
				$this->setFecEmis($value);
				break;
			case 11:
				$this->setFecVenc($value);
				break;
			case 12:
				$this->setCoCli($value);
				break;
			case 13:
				$this->setCoVen($value);
				break;
			case 14:
				$this->setCoTran($value);
				break;
			case 15:
				$this->setDirEnt($value);
				break;
			case 16:
				$this->setFormaPag($value);
				break;
			case 17:
				$this->setTotBruto($value);
				break;
			case 18:
				$this->setTotNeto($value);
				break;
			case 19:
				$this->setGlobDesc($value);
				break;
			case 20:
				$this->setTotReca($value);
				break;
			case 21:
				$this->setPorcGdesc($value);
				break;
			case 22:
				$this->setPorcReca($value);
				break;
			case 23:
				$this->setTotalUc($value);
				break;
			case 24:
				$this->setTotalCp($value);
				break;
			case 25:
				$this->setTotFlete($value);
				break;
			case 26:
				$this->setMontoDev($value);
				break;
			case 27:
				$this->setTotklu($value);
				break;
			case 28:
				$this->setAnulada($value);
				break;
			case 29:
				$this->setImpresa($value);
				break;
			case 30:
				$this->setIva($value);
				break;
			case 31:
				$this->setIvaDev($value);
				break;
			case 32:
				$this->setNumcom($value);
				break;
			case 33:
				$this->setTasa($value);
				break;
			case 34:
				$this->setDisCen($value);
				break;
			case 35:
				$this->setVuelto($value);
				break;
			case 36:
				$this->setSeriales($value);
				break;
			case 37:
				$this->setTasag($value);
				break;
			case 38:
				$this->setTasag10($value);
				break;
			case 39:
				$this->setTasag20($value);
				break;
			case 40:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FacturaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setFactNum($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setContrib($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRif($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNit($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNumControl($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStatus($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setComentario($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDescrip($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSaldo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFecEmis($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFecVenc($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCoCli($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCoVen($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCoTran($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDirEnt($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setFormaPag($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTotBruto($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTotNeto($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setGlobDesc($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTotReca($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setPorcGdesc($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setPorcReca($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setTotalUc($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setTotalCp($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setTotFlete($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setMontoDev($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setTotklu($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setAnulada($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setImpresa($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setIva($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setIvaDev($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setNumcom($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setTasa($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setDisCen($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setVuelto($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setSeriales($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setTasag($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setTasag10($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setTasag20($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setId($arr[$keys[40]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FacturaPeer::DATABASE_NAME);

		if ($this->isColumnModified(FacturaPeer::FACT_NUM)) $criteria->add(FacturaPeer::FACT_NUM, $this->fact_num);
		if ($this->isColumnModified(FacturaPeer::CONTRIB)) $criteria->add(FacturaPeer::CONTRIB, $this->contrib);
		if ($this->isColumnModified(FacturaPeer::NOMBRE)) $criteria->add(FacturaPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(FacturaPeer::RIF)) $criteria->add(FacturaPeer::RIF, $this->rif);
		if ($this->isColumnModified(FacturaPeer::NIT)) $criteria->add(FacturaPeer::NIT, $this->nit);
		if ($this->isColumnModified(FacturaPeer::NUM_CONTROL)) $criteria->add(FacturaPeer::NUM_CONTROL, $this->num_control);
		if ($this->isColumnModified(FacturaPeer::STATUS)) $criteria->add(FacturaPeer::STATUS, $this->status);
		if ($this->isColumnModified(FacturaPeer::COMENTARIO)) $criteria->add(FacturaPeer::COMENTARIO, $this->comentario);
		if ($this->isColumnModified(FacturaPeer::DESCRIP)) $criteria->add(FacturaPeer::DESCRIP, $this->descrip);
		if ($this->isColumnModified(FacturaPeer::SALDO)) $criteria->add(FacturaPeer::SALDO, $this->saldo);
		if ($this->isColumnModified(FacturaPeer::FEC_EMIS)) $criteria->add(FacturaPeer::FEC_EMIS, $this->fec_emis);
		if ($this->isColumnModified(FacturaPeer::FEC_VENC)) $criteria->add(FacturaPeer::FEC_VENC, $this->fec_venc);
		if ($this->isColumnModified(FacturaPeer::CO_CLI)) $criteria->add(FacturaPeer::CO_CLI, $this->co_cli);
		if ($this->isColumnModified(FacturaPeer::CO_VEN)) $criteria->add(FacturaPeer::CO_VEN, $this->co_ven);
		if ($this->isColumnModified(FacturaPeer::CO_TRAN)) $criteria->add(FacturaPeer::CO_TRAN, $this->co_tran);
		if ($this->isColumnModified(FacturaPeer::DIR_ENT)) $criteria->add(FacturaPeer::DIR_ENT, $this->dir_ent);
		if ($this->isColumnModified(FacturaPeer::FORMA_PAG)) $criteria->add(FacturaPeer::FORMA_PAG, $this->forma_pag);
		if ($this->isColumnModified(FacturaPeer::TOT_BRUTO)) $criteria->add(FacturaPeer::TOT_BRUTO, $this->tot_bruto);
		if ($this->isColumnModified(FacturaPeer::TOT_NETO)) $criteria->add(FacturaPeer::TOT_NETO, $this->tot_neto);
		if ($this->isColumnModified(FacturaPeer::GLOB_DESC)) $criteria->add(FacturaPeer::GLOB_DESC, $this->glob_desc);
		if ($this->isColumnModified(FacturaPeer::TOT_RECA)) $criteria->add(FacturaPeer::TOT_RECA, $this->tot_reca);
		if ($this->isColumnModified(FacturaPeer::PORC_GDESC)) $criteria->add(FacturaPeer::PORC_GDESC, $this->porc_gdesc);
		if ($this->isColumnModified(FacturaPeer::PORC_RECA)) $criteria->add(FacturaPeer::PORC_RECA, $this->porc_reca);
		if ($this->isColumnModified(FacturaPeer::TOTAL_UC)) $criteria->add(FacturaPeer::TOTAL_UC, $this->total_uc);
		if ($this->isColumnModified(FacturaPeer::TOTAL_CP)) $criteria->add(FacturaPeer::TOTAL_CP, $this->total_cp);
		if ($this->isColumnModified(FacturaPeer::TOT_FLETE)) $criteria->add(FacturaPeer::TOT_FLETE, $this->tot_flete);
		if ($this->isColumnModified(FacturaPeer::MONTO_DEV)) $criteria->add(FacturaPeer::MONTO_DEV, $this->monto_dev);
		if ($this->isColumnModified(FacturaPeer::TOTKLU)) $criteria->add(FacturaPeer::TOTKLU, $this->totklu);
		if ($this->isColumnModified(FacturaPeer::ANULADA)) $criteria->add(FacturaPeer::ANULADA, $this->anulada);
		if ($this->isColumnModified(FacturaPeer::IMPRESA)) $criteria->add(FacturaPeer::IMPRESA, $this->impresa);
		if ($this->isColumnModified(FacturaPeer::IVA)) $criteria->add(FacturaPeer::IVA, $this->iva);
		if ($this->isColumnModified(FacturaPeer::IVA_DEV)) $criteria->add(FacturaPeer::IVA_DEV, $this->iva_dev);
		if ($this->isColumnModified(FacturaPeer::NUMCOM)) $criteria->add(FacturaPeer::NUMCOM, $this->numcom);
		if ($this->isColumnModified(FacturaPeer::TASA)) $criteria->add(FacturaPeer::TASA, $this->tasa);
		if ($this->isColumnModified(FacturaPeer::DIS_CEN)) $criteria->add(FacturaPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(FacturaPeer::VUELTO)) $criteria->add(FacturaPeer::VUELTO, $this->vuelto);
		if ($this->isColumnModified(FacturaPeer::SERIALES)) $criteria->add(FacturaPeer::SERIALES, $this->seriales);
		if ($this->isColumnModified(FacturaPeer::TASAG)) $criteria->add(FacturaPeer::TASAG, $this->tasag);
		if ($this->isColumnModified(FacturaPeer::TASAG10)) $criteria->add(FacturaPeer::TASAG10, $this->tasag10);
		if ($this->isColumnModified(FacturaPeer::TASAG20)) $criteria->add(FacturaPeer::TASAG20, $this->tasag20);
		if ($this->isColumnModified(FacturaPeer::ID)) $criteria->add(FacturaPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FacturaPeer::DATABASE_NAME);

		$criteria->add(FacturaPeer::FACT_NUM, $this->fact_num);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getFactNum();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setFactNum($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setContrib($this->contrib);

		$copyObj->setNombre($this->nombre);

		$copyObj->setRif($this->rif);

		$copyObj->setNit($this->nit);

		$copyObj->setNumControl($this->num_control);

		$copyObj->setStatus($this->status);

		$copyObj->setComentario($this->comentario);

		$copyObj->setDescrip($this->descrip);

		$copyObj->setSaldo($this->saldo);

		$copyObj->setFecEmis($this->fec_emis);

		$copyObj->setFecVenc($this->fec_venc);

		$copyObj->setCoCli($this->co_cli);

		$copyObj->setCoVen($this->co_ven);

		$copyObj->setCoTran($this->co_tran);

		$copyObj->setDirEnt($this->dir_ent);

		$copyObj->setFormaPag($this->forma_pag);

		$copyObj->setTotBruto($this->tot_bruto);

		$copyObj->setTotNeto($this->tot_neto);

		$copyObj->setGlobDesc($this->glob_desc);

		$copyObj->setTotReca($this->tot_reca);

		$copyObj->setPorcGdesc($this->porc_gdesc);

		$copyObj->setPorcReca($this->porc_reca);

		$copyObj->setTotalUc($this->total_uc);

		$copyObj->setTotalCp($this->total_cp);

		$copyObj->setTotFlete($this->tot_flete);

		$copyObj->setMontoDev($this->monto_dev);

		$copyObj->setTotklu($this->totklu);

		$copyObj->setAnulada($this->anulada);

		$copyObj->setImpresa($this->impresa);

		$copyObj->setIva($this->iva);

		$copyObj->setIvaDev($this->iva_dev);

		$copyObj->setNumcom($this->numcom);

		$copyObj->setTasa($this->tasa);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setVuelto($this->vuelto);

		$copyObj->setSeriales($this->seriales);

		$copyObj->setTasag($this->tasag);

		$copyObj->setTasag10($this->tasag10);

		$copyObj->setTasag20($this->tasag20);

		$copyObj->setId($this->id);


		$copyObj->setNew(true);

		$copyObj->setFactNum(NULL); 
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
			self::$peer = new FacturaPeer();
		}
		return self::$peer;
	}

	
	public function setClientes($v)
	{


		if ($v === null) {
			$this->setCoCli(' ');
		} else {
			$this->setCoCli($v->getCoCli());
		}


		$this->aClientes = $v;
	}


	
	public function getClientes($con = null)
	{
				include_once 'lib/model/om/BaseClientesPeer.php';

		if ($this->aClientes === null && (($this->co_cli !== "" && $this->co_cli !== null))) {

			$this->aClientes = ClientesPeer::retrieveByPK($this->co_cli, $con);

			
		}
		return $this->aClientes;
	}

	
	public function setVendedor($v)
	{


		if ($v === null) {
			$this->setCoVen(' ');
		} else {
			$this->setCoVen($v->getCoVen());
		}


		$this->aVendedor = $v;
	}


	
	public function getVendedor($con = null)
	{
				include_once 'lib/model/om/BaseVendedorPeer.php';

		if ($this->aVendedor === null && (($this->co_ven !== "" && $this->co_ven !== null))) {

			$this->aVendedor = VendedorPeer::retrieveByPK($this->co_ven, $con);

			
		}
		return $this->aVendedor;
	}

	
	public function setTranspor($v)
	{


		if ($v === null) {
			$this->setCoTran(' ');
		} else {
			$this->setCoTran($v->getCoTran());
		}


		$this->aTranspor = $v;
	}


	
	public function getTranspor($con = null)
	{
				include_once 'lib/model/om/BaseTransporPeer.php';

		if ($this->aTranspor === null && (($this->co_tran !== "" && $this->co_tran !== null))) {

			$this->aTranspor = TransporPeer::retrieveByPK($this->co_tran, $con);

			
		}
		return $this->aTranspor;
	}

	
	public function setCondicio($v)
	{


		if ($v === null) {
			$this->setFormaPag(' ');
		} else {
			$this->setFormaPag($v->getCoCond());
		}


		$this->aCondicio = $v;
	}


	
	public function getCondicio($con = null)
	{
				include_once 'lib/model/om/BaseCondicioPeer.php';

		if ($this->aCondicio === null && (($this->forma_pag !== "" && $this->forma_pag !== null))) {

			$this->aCondicio = CondicioPeer::retrieveByPK($this->forma_pag, $con);

			
		}
		return $this->aCondicio;
	}

} 