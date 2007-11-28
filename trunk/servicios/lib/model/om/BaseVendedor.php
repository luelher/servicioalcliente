<?php


abstract class BaseVendedor extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_ven;


	
	protected $tipo = ' ';


	
	protected $ven_des = ' ';


	
	protected $dis_cen = ' ';


	
	protected $cedula = ' ';


	
	protected $direc1 = ' ';


	
	protected $direc2 = ' ';


	
	protected $telefonos = ' ';


	
	protected $fecha_reg;


	
	protected $condic = false;


	
	protected $comision = 0;


	
	protected $comen = ' ';


	
	protected $fun_cob = false;


	
	protected $fun_ven = false;


	
	protected $comisionv = 0;


	
	protected $fac_ult_ve = 0;


	
	protected $fec_ult_ve;


	
	protected $net_ult_ve = 0;


	
	protected $cli_ult_ve = ' ';


	
	protected $cta_contab = ' ';


	
	protected $campo1 = ' ';


	
	protected $campo2 = ' ';


	
	protected $campo3 = ' ';


	
	protected $campo4 = ' ';


	
	protected $campo5 = ' ';


	
	protected $campo6 = ' ';


	
	protected $campo7 = ' ';


	
	protected $campo8 = ' ';


	
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


	
	protected $login = ' ';


	
	protected $password = ' ';


	
	protected $email = ' ';


	
	protected $psw_m = ' ';

	
	protected $collClientess;

	
	protected $lastClientesCriteria = null;

	
	protected $collFacturas;

	
	protected $lastFacturaCriteria = null;

	
	protected $collDocumCcs;

	
	protected $lastDocumCcCriteria = null;

	
	protected $collCobross;

	
	protected $lastCobrosCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoVen()
	{

		return $this->co_ven;
	}

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getVenDes()
	{

		return $this->ven_des;
	}

	
	public function getDisCen()
	{

		return $this->dis_cen;
	}

	
	public function getCedula()
	{

		return $this->cedula;
	}

	
	public function getDirec1()
	{

		return $this->direc1;
	}

	
	public function getDirec2()
	{

		return $this->direc2;
	}

	
	public function getTelefonos()
	{

		return $this->telefonos;
	}

	
	public function getFechaReg()
	{

		return $this->fecha_reg;
	}

	
	public function getCondic()
	{

		return $this->condic;
	}

	
	public function getComision()
	{

		return $this->comision;
	}

	
	public function getComen()
	{

		return $this->comen;
	}

	
	public function getFunCob()
	{

		return $this->fun_cob;
	}

	
	public function getFunVen()
	{

		return $this->fun_ven;
	}

	
	public function getComisionv()
	{

		return $this->comisionv;
	}

	
	public function getFacUltVe()
	{

		return $this->fac_ult_ve;
	}

	
	public function getFecUltVe()
	{

		return $this->fec_ult_ve;
	}

	
	public function getNetUltVe()
	{

		return $this->net_ult_ve;
	}

	
	public function getCliUltVe()
	{

		return $this->cli_ult_ve;
	}

	
	public function getCtaContab()
	{

		return $this->cta_contab;
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

	
	public function getCampo5()
	{

		return $this->campo5;
	}

	
	public function getCampo6()
	{

		return $this->campo6;
	}

	
	public function getCampo7()
	{

		return $this->campo7;
	}

	
	public function getCampo8()
	{

		return $this->campo8;
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

	
	public function getLogin()
	{

		return $this->login;
	}

	
	public function getPassword()
	{

		return $this->password;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getPswM()
	{

		return $this->psw_m;
	}

	
	public function setCoVen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ven !== $v) {
			$this->co_ven = $v;
			$this->modifiedColumns[] = VendedorPeer::CO_VEN;
		}

	} 
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v || $v === ' ') {
			$this->tipo = $v;
			$this->modifiedColumns[] = VendedorPeer::TIPO;
		}

	} 
	
	public function setVenDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ven_des !== $v || $v === ' ') {
			$this->ven_des = $v;
			$this->modifiedColumns[] = VendedorPeer::VEN_DES;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = VendedorPeer::DIS_CEN;
		}

	} 
	
	public function setCedula($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cedula !== $v || $v === ' ') {
			$this->cedula = $v;
			$this->modifiedColumns[] = VendedorPeer::CEDULA;
		}

	} 
	
	public function setDirec1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->direc1 !== $v || $v === ' ') {
			$this->direc1 = $v;
			$this->modifiedColumns[] = VendedorPeer::DIREC1;
		}

	} 
	
	public function setDirec2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->direc2 !== $v || $v === ' ') {
			$this->direc2 = $v;
			$this->modifiedColumns[] = VendedorPeer::DIREC2;
		}

	} 
	
	public function setTelefonos($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->telefonos !== $v || $v === ' ') {
			$this->telefonos = $v;
			$this->modifiedColumns[] = VendedorPeer::TELEFONOS;
		}

	} 
	
	public function setFechaReg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fecha_reg !== $v) {
			$this->fecha_reg = $v;
			$this->modifiedColumns[] = VendedorPeer::FECHA_REG;
		}

	} 
	
	public function setCondic($v)
	{

		if ($this->condic !== $v || $v === false) {
			$this->condic = $v;
			$this->modifiedColumns[] = VendedorPeer::CONDIC;
		}

	} 
	
	public function setComision($v)
	{

		if ($this->comision !== $v || $v === 0) {
			$this->comision = $v;
			$this->modifiedColumns[] = VendedorPeer::COMISION;
		}

	} 
	
	public function setComen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comen !== $v || $v === ' ') {
			$this->comen = $v;
			$this->modifiedColumns[] = VendedorPeer::COMEN;
		}

	} 
	
	public function setFunCob($v)
	{

		if ($this->fun_cob !== $v || $v === false) {
			$this->fun_cob = $v;
			$this->modifiedColumns[] = VendedorPeer::FUN_COB;
		}

	} 
	
	public function setFunVen($v)
	{

		if ($this->fun_ven !== $v || $v === false) {
			$this->fun_ven = $v;
			$this->modifiedColumns[] = VendedorPeer::FUN_VEN;
		}

	} 
	
	public function setComisionv($v)
	{

		if ($this->comisionv !== $v || $v === 0) {
			$this->comisionv = $v;
			$this->modifiedColumns[] = VendedorPeer::COMISIONV;
		}

	} 
	
	public function setFacUltVe($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fac_ult_ve !== $v || $v === 0) {
			$this->fac_ult_ve = $v;
			$this->modifiedColumns[] = VendedorPeer::FAC_ULT_VE;
		}

	} 
	
	public function setFecUltVe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_ult_ve !== $v) {
			$this->fec_ult_ve = $v;
			$this->modifiedColumns[] = VendedorPeer::FEC_ULT_VE;
		}

	} 
	
	public function setNetUltVe($v)
	{

		if ($this->net_ult_ve !== $v || $v === 0) {
			$this->net_ult_ve = $v;
			$this->modifiedColumns[] = VendedorPeer::NET_ULT_VE;
		}

	} 
	
	public function setCliUltVe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cli_ult_ve !== $v || $v === ' ') {
			$this->cli_ult_ve = $v;
			$this->modifiedColumns[] = VendedorPeer::CLI_ULT_VE;
		}

	} 
	
	public function setCtaContab($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cta_contab !== $v || $v === ' ') {
			$this->cta_contab = $v;
			$this->modifiedColumns[] = VendedorPeer::CTA_CONTAB;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO4;
		}

	} 
	
	public function setCampo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo5 !== $v || $v === ' ') {
			$this->campo5 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO5;
		}

	} 
	
	public function setCampo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo6 !== $v || $v === ' ') {
			$this->campo6 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO6;
		}

	} 
	
	public function setCampo7($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo7 !== $v || $v === ' ') {
			$this->campo7 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO7;
		}

	} 
	
	public function setCampo8($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo8 !== $v || $v === ' ') {
			$this->campo8 = $v;
			$this->modifiedColumns[] = VendedorPeer::CAMPO8;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = VendedorPeer::CO_US_IN;
		}

	} 
	
	public function setFeUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_in !== $v) {
			$this->fe_us_in = $v;
			$this->modifiedColumns[] = VendedorPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = VendedorPeer::CO_US_MO;
		}

	} 
	
	public function setFeUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_mo !== $v) {
			$this->fe_us_mo = $v;
			$this->modifiedColumns[] = VendedorPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = VendedorPeer::CO_US_EL;
		}

	} 
	
	public function setFeUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_el !== $v) {
			$this->fe_us_el = $v;
			$this->modifiedColumns[] = VendedorPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = VendedorPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = VendedorPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = VendedorPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = VendedorPeer::ROWGUID;
		}

	} 
	
	public function setLogin($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->login !== $v || $v === ' ') {
			$this->login = $v;
			$this->modifiedColumns[] = VendedorPeer::LOGIN;
		}

	} 
	
	public function setPassword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->password !== $v || $v === ' ') {
			$this->password = $v;
			$this->modifiedColumns[] = VendedorPeer::PASSWORD;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === ' ') {
			$this->email = $v;
			$this->modifiedColumns[] = VendedorPeer::EMAIL;
		}

	} 
	
	public function setPswM($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->psw_m !== $v || $v === ' ') {
			$this->psw_m = $v;
			$this->modifiedColumns[] = VendedorPeer::PSW_M;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_ven = $rs->getString($startcol + 0);

			$this->tipo = $rs->getString($startcol + 1);

			$this->ven_des = $rs->getString($startcol + 2);

			$this->dis_cen = $rs->getString($startcol + 3);

			$this->cedula = $rs->getString($startcol + 4);

			$this->direc1 = $rs->getString($startcol + 5);

			$this->direc2 = $rs->getString($startcol + 6);

			$this->telefonos = $rs->getString($startcol + 7);

			$this->fecha_reg = $rs->getString($startcol + 8);

			$this->condic = $rs->getBoolean($startcol + 9);

			$this->comision = $rs->getFloat($startcol + 10);

			$this->comen = $rs->getString($startcol + 11);

			$this->fun_cob = $rs->getBoolean($startcol + 12);

			$this->fun_ven = $rs->getBoolean($startcol + 13);

			$this->comisionv = $rs->getFloat($startcol + 14);

			$this->fac_ult_ve = $rs->getInt($startcol + 15);

			$this->fec_ult_ve = $rs->getString($startcol + 16);

			$this->net_ult_ve = $rs->getFloat($startcol + 17);

			$this->cli_ult_ve = $rs->getString($startcol + 18);

			$this->cta_contab = $rs->getString($startcol + 19);

			$this->campo1 = $rs->getString($startcol + 20);

			$this->campo2 = $rs->getString($startcol + 21);

			$this->campo3 = $rs->getString($startcol + 22);

			$this->campo4 = $rs->getString($startcol + 23);

			$this->campo5 = $rs->getString($startcol + 24);

			$this->campo6 = $rs->getString($startcol + 25);

			$this->campo7 = $rs->getString($startcol + 26);

			$this->campo8 = $rs->getString($startcol + 27);

			$this->co_us_in = $rs->getString($startcol + 28);

			$this->fe_us_in = $rs->getString($startcol + 29);

			$this->co_us_mo = $rs->getString($startcol + 30);

			$this->fe_us_mo = $rs->getString($startcol + 31);

			$this->co_us_el = $rs->getString($startcol + 32);

			$this->fe_us_el = $rs->getString($startcol + 33);

			$this->revisado = $rs->getString($startcol + 34);

			$this->trasnfe = $rs->getString($startcol + 35);

			$this->co_sucu = $rs->getString($startcol + 36);

			$this->rowguid = $rs->getString($startcol + 37);

			$this->login = $rs->getString($startcol + 38);

			$this->password = $rs->getString($startcol + 39);

			$this->email = $rs->getString($startcol + 40);

			$this->psw_m = $rs->getString($startcol + 41);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 42; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Vendedor object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			VendedorPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME);
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
					$pk = VendedorPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += VendedorPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collClientess !== null) {
				foreach($this->collClientess as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFacturas !== null) {
				foreach($this->collFacturas as $referrerFK) {
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

			if ($this->collCobross !== null) {
				foreach($this->collCobross as $referrerFK) {
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


			if (($retval = VendedorPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collClientess !== null) {
					foreach($this->collClientess as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFacturas !== null) {
					foreach($this->collFacturas as $referrerFK) {
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

				if ($this->collCobross !== null) {
					foreach($this->collCobross as $referrerFK) {
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
		$pos = VendedorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoVen();
				break;
			case 1:
				return $this->getTipo();
				break;
			case 2:
				return $this->getVenDes();
				break;
			case 3:
				return $this->getDisCen();
				break;
			case 4:
				return $this->getCedula();
				break;
			case 5:
				return $this->getDirec1();
				break;
			case 6:
				return $this->getDirec2();
				break;
			case 7:
				return $this->getTelefonos();
				break;
			case 8:
				return $this->getFechaReg();
				break;
			case 9:
				return $this->getCondic();
				break;
			case 10:
				return $this->getComision();
				break;
			case 11:
				return $this->getComen();
				break;
			case 12:
				return $this->getFunCob();
				break;
			case 13:
				return $this->getFunVen();
				break;
			case 14:
				return $this->getComisionv();
				break;
			case 15:
				return $this->getFacUltVe();
				break;
			case 16:
				return $this->getFecUltVe();
				break;
			case 17:
				return $this->getNetUltVe();
				break;
			case 18:
				return $this->getCliUltVe();
				break;
			case 19:
				return $this->getCtaContab();
				break;
			case 20:
				return $this->getCampo1();
				break;
			case 21:
				return $this->getCampo2();
				break;
			case 22:
				return $this->getCampo3();
				break;
			case 23:
				return $this->getCampo4();
				break;
			case 24:
				return $this->getCampo5();
				break;
			case 25:
				return $this->getCampo6();
				break;
			case 26:
				return $this->getCampo7();
				break;
			case 27:
				return $this->getCampo8();
				break;
			case 28:
				return $this->getCoUsIn();
				break;
			case 29:
				return $this->getFeUsIn();
				break;
			case 30:
				return $this->getCoUsMo();
				break;
			case 31:
				return $this->getFeUsMo();
				break;
			case 32:
				return $this->getCoUsEl();
				break;
			case 33:
				return $this->getFeUsEl();
				break;
			case 34:
				return $this->getRevisado();
				break;
			case 35:
				return $this->getTrasnfe();
				break;
			case 36:
				return $this->getCoSucu();
				break;
			case 37:
				return $this->getRowguid();
				break;
			case 38:
				return $this->getLogin();
				break;
			case 39:
				return $this->getPassword();
				break;
			case 40:
				return $this->getEmail();
				break;
			case 41:
				return $this->getPswM();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VendedorPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoVen(),
			$keys[1] => $this->getTipo(),
			$keys[2] => $this->getVenDes(),
			$keys[3] => $this->getDisCen(),
			$keys[4] => $this->getCedula(),
			$keys[5] => $this->getDirec1(),
			$keys[6] => $this->getDirec2(),
			$keys[7] => $this->getTelefonos(),
			$keys[8] => $this->getFechaReg(),
			$keys[9] => $this->getCondic(),
			$keys[10] => $this->getComision(),
			$keys[11] => $this->getComen(),
			$keys[12] => $this->getFunCob(),
			$keys[13] => $this->getFunVen(),
			$keys[14] => $this->getComisionv(),
			$keys[15] => $this->getFacUltVe(),
			$keys[16] => $this->getFecUltVe(),
			$keys[17] => $this->getNetUltVe(),
			$keys[18] => $this->getCliUltVe(),
			$keys[19] => $this->getCtaContab(),
			$keys[20] => $this->getCampo1(),
			$keys[21] => $this->getCampo2(),
			$keys[22] => $this->getCampo3(),
			$keys[23] => $this->getCampo4(),
			$keys[24] => $this->getCampo5(),
			$keys[25] => $this->getCampo6(),
			$keys[26] => $this->getCampo7(),
			$keys[27] => $this->getCampo8(),
			$keys[28] => $this->getCoUsIn(),
			$keys[29] => $this->getFeUsIn(),
			$keys[30] => $this->getCoUsMo(),
			$keys[31] => $this->getFeUsMo(),
			$keys[32] => $this->getCoUsEl(),
			$keys[33] => $this->getFeUsEl(),
			$keys[34] => $this->getRevisado(),
			$keys[35] => $this->getTrasnfe(),
			$keys[36] => $this->getCoSucu(),
			$keys[37] => $this->getRowguid(),
			$keys[38] => $this->getLogin(),
			$keys[39] => $this->getPassword(),
			$keys[40] => $this->getEmail(),
			$keys[41] => $this->getPswM(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VendedorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoVen($value);
				break;
			case 1:
				$this->setTipo($value);
				break;
			case 2:
				$this->setVenDes($value);
				break;
			case 3:
				$this->setDisCen($value);
				break;
			case 4:
				$this->setCedula($value);
				break;
			case 5:
				$this->setDirec1($value);
				break;
			case 6:
				$this->setDirec2($value);
				break;
			case 7:
				$this->setTelefonos($value);
				break;
			case 8:
				$this->setFechaReg($value);
				break;
			case 9:
				$this->setCondic($value);
				break;
			case 10:
				$this->setComision($value);
				break;
			case 11:
				$this->setComen($value);
				break;
			case 12:
				$this->setFunCob($value);
				break;
			case 13:
				$this->setFunVen($value);
				break;
			case 14:
				$this->setComisionv($value);
				break;
			case 15:
				$this->setFacUltVe($value);
				break;
			case 16:
				$this->setFecUltVe($value);
				break;
			case 17:
				$this->setNetUltVe($value);
				break;
			case 18:
				$this->setCliUltVe($value);
				break;
			case 19:
				$this->setCtaContab($value);
				break;
			case 20:
				$this->setCampo1($value);
				break;
			case 21:
				$this->setCampo2($value);
				break;
			case 22:
				$this->setCampo3($value);
				break;
			case 23:
				$this->setCampo4($value);
				break;
			case 24:
				$this->setCampo5($value);
				break;
			case 25:
				$this->setCampo6($value);
				break;
			case 26:
				$this->setCampo7($value);
				break;
			case 27:
				$this->setCampo8($value);
				break;
			case 28:
				$this->setCoUsIn($value);
				break;
			case 29:
				$this->setFeUsIn($value);
				break;
			case 30:
				$this->setCoUsMo($value);
				break;
			case 31:
				$this->setFeUsMo($value);
				break;
			case 32:
				$this->setCoUsEl($value);
				break;
			case 33:
				$this->setFeUsEl($value);
				break;
			case 34:
				$this->setRevisado($value);
				break;
			case 35:
				$this->setTrasnfe($value);
				break;
			case 36:
				$this->setCoSucu($value);
				break;
			case 37:
				$this->setRowguid($value);
				break;
			case 38:
				$this->setLogin($value);
				break;
			case 39:
				$this->setPassword($value);
				break;
			case 40:
				$this->setEmail($value);
				break;
			case 41:
				$this->setPswM($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VendedorPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoVen($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTipo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setVenDes($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDisCen($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCedula($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDirec1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDirec2($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTelefonos($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setFechaReg($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCondic($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setComision($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setComen($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFunCob($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setFunVen($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setComisionv($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setFacUltVe($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setFecUltVe($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setNetUltVe($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCliUltVe($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCtaContab($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCampo1($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCampo2($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setCampo3($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setCampo4($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setCampo5($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setCampo6($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setCampo7($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCampo8($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setCoUsIn($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setFeUsIn($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setCoUsMo($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setFeUsMo($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setCoUsEl($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setFeUsEl($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setRevisado($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setTrasnfe($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setCoSucu($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setRowguid($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setLogin($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setPassword($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setEmail($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setPswM($arr[$keys[41]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(VendedorPeer::DATABASE_NAME);

		if ($this->isColumnModified(VendedorPeer::CO_VEN)) $criteria->add(VendedorPeer::CO_VEN, $this->co_ven);
		if ($this->isColumnModified(VendedorPeer::TIPO)) $criteria->add(VendedorPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(VendedorPeer::VEN_DES)) $criteria->add(VendedorPeer::VEN_DES, $this->ven_des);
		if ($this->isColumnModified(VendedorPeer::DIS_CEN)) $criteria->add(VendedorPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(VendedorPeer::CEDULA)) $criteria->add(VendedorPeer::CEDULA, $this->cedula);
		if ($this->isColumnModified(VendedorPeer::DIREC1)) $criteria->add(VendedorPeer::DIREC1, $this->direc1);
		if ($this->isColumnModified(VendedorPeer::DIREC2)) $criteria->add(VendedorPeer::DIREC2, $this->direc2);
		if ($this->isColumnModified(VendedorPeer::TELEFONOS)) $criteria->add(VendedorPeer::TELEFONOS, $this->telefonos);
		if ($this->isColumnModified(VendedorPeer::FECHA_REG)) $criteria->add(VendedorPeer::FECHA_REG, $this->fecha_reg);
		if ($this->isColumnModified(VendedorPeer::CONDIC)) $criteria->add(VendedorPeer::CONDIC, $this->condic);
		if ($this->isColumnModified(VendedorPeer::COMISION)) $criteria->add(VendedorPeer::COMISION, $this->comision);
		if ($this->isColumnModified(VendedorPeer::COMEN)) $criteria->add(VendedorPeer::COMEN, $this->comen);
		if ($this->isColumnModified(VendedorPeer::FUN_COB)) $criteria->add(VendedorPeer::FUN_COB, $this->fun_cob);
		if ($this->isColumnModified(VendedorPeer::FUN_VEN)) $criteria->add(VendedorPeer::FUN_VEN, $this->fun_ven);
		if ($this->isColumnModified(VendedorPeer::COMISIONV)) $criteria->add(VendedorPeer::COMISIONV, $this->comisionv);
		if ($this->isColumnModified(VendedorPeer::FAC_ULT_VE)) $criteria->add(VendedorPeer::FAC_ULT_VE, $this->fac_ult_ve);
		if ($this->isColumnModified(VendedorPeer::FEC_ULT_VE)) $criteria->add(VendedorPeer::FEC_ULT_VE, $this->fec_ult_ve);
		if ($this->isColumnModified(VendedorPeer::NET_ULT_VE)) $criteria->add(VendedorPeer::NET_ULT_VE, $this->net_ult_ve);
		if ($this->isColumnModified(VendedorPeer::CLI_ULT_VE)) $criteria->add(VendedorPeer::CLI_ULT_VE, $this->cli_ult_ve);
		if ($this->isColumnModified(VendedorPeer::CTA_CONTAB)) $criteria->add(VendedorPeer::CTA_CONTAB, $this->cta_contab);
		if ($this->isColumnModified(VendedorPeer::CAMPO1)) $criteria->add(VendedorPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(VendedorPeer::CAMPO2)) $criteria->add(VendedorPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(VendedorPeer::CAMPO3)) $criteria->add(VendedorPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(VendedorPeer::CAMPO4)) $criteria->add(VendedorPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(VendedorPeer::CAMPO5)) $criteria->add(VendedorPeer::CAMPO5, $this->campo5);
		if ($this->isColumnModified(VendedorPeer::CAMPO6)) $criteria->add(VendedorPeer::CAMPO6, $this->campo6);
		if ($this->isColumnModified(VendedorPeer::CAMPO7)) $criteria->add(VendedorPeer::CAMPO7, $this->campo7);
		if ($this->isColumnModified(VendedorPeer::CAMPO8)) $criteria->add(VendedorPeer::CAMPO8, $this->campo8);
		if ($this->isColumnModified(VendedorPeer::CO_US_IN)) $criteria->add(VendedorPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(VendedorPeer::FE_US_IN)) $criteria->add(VendedorPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(VendedorPeer::CO_US_MO)) $criteria->add(VendedorPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(VendedorPeer::FE_US_MO)) $criteria->add(VendedorPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(VendedorPeer::CO_US_EL)) $criteria->add(VendedorPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(VendedorPeer::FE_US_EL)) $criteria->add(VendedorPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(VendedorPeer::REVISADO)) $criteria->add(VendedorPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(VendedorPeer::TRASNFE)) $criteria->add(VendedorPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(VendedorPeer::CO_SUCU)) $criteria->add(VendedorPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(VendedorPeer::ROWGUID)) $criteria->add(VendedorPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(VendedorPeer::LOGIN)) $criteria->add(VendedorPeer::LOGIN, $this->login);
		if ($this->isColumnModified(VendedorPeer::PASSWORD)) $criteria->add(VendedorPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(VendedorPeer::EMAIL)) $criteria->add(VendedorPeer::EMAIL, $this->email);
		if ($this->isColumnModified(VendedorPeer::PSW_M)) $criteria->add(VendedorPeer::PSW_M, $this->psw_m);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(VendedorPeer::DATABASE_NAME);

		$criteria->add(VendedorPeer::CO_VEN, $this->co_ven);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoVen();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoVen($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTipo($this->tipo);

		$copyObj->setVenDes($this->ven_des);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setCedula($this->cedula);

		$copyObj->setDirec1($this->direc1);

		$copyObj->setDirec2($this->direc2);

		$copyObj->setTelefonos($this->telefonos);

		$copyObj->setFechaReg($this->fecha_reg);

		$copyObj->setCondic($this->condic);

		$copyObj->setComision($this->comision);

		$copyObj->setComen($this->comen);

		$copyObj->setFunCob($this->fun_cob);

		$copyObj->setFunVen($this->fun_ven);

		$copyObj->setComisionv($this->comisionv);

		$copyObj->setFacUltVe($this->fac_ult_ve);

		$copyObj->setFecUltVe($this->fec_ult_ve);

		$copyObj->setNetUltVe($this->net_ult_ve);

		$copyObj->setCliUltVe($this->cli_ult_ve);

		$copyObj->setCtaContab($this->cta_contab);

		$copyObj->setCampo1($this->campo1);

		$copyObj->setCampo2($this->campo2);

		$copyObj->setCampo3($this->campo3);

		$copyObj->setCampo4($this->campo4);

		$copyObj->setCampo5($this->campo5);

		$copyObj->setCampo6($this->campo6);

		$copyObj->setCampo7($this->campo7);

		$copyObj->setCampo8($this->campo8);

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

		$copyObj->setLogin($this->login);

		$copyObj->setPassword($this->password);

		$copyObj->setEmail($this->email);

		$copyObj->setPswM($this->psw_m);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getClientess() as $relObj) {
				$copyObj->addClientes($relObj->copy($deepCopy));
			}

			foreach($this->getFacturas() as $relObj) {
				$copyObj->addFactura($relObj->copy($deepCopy));
			}

			foreach($this->getDocumCcs() as $relObj) {
				$copyObj->addDocumCc($relObj->copy($deepCopy));
			}

			foreach($this->getCobross() as $relObj) {
				$copyObj->addCobros($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoVen(NULL); 
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
			self::$peer = new VendedorPeer();
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

				$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

				ClientesPeer::addSelectColumns($criteria);
				$this->collClientess = ClientesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

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

		$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

		return ClientesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClientes(Clientes $l)
	{
		$this->collClientess[] = $l;
		$l->setVendedor($this);
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

				$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

				$this->collClientess = ClientesPeer::doSelectJoinTipoCli($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

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

				$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

				$this->collClientess = ClientesPeer::doSelectJoinZona($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

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

				$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

				$this->collClientess = ClientesPeer::doSelectJoinSegmento($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinSegmento($criteria, $con);
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

				$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

				$this->collClientess = ClientesPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		} else {
									
			$criteria->add(ClientesPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastClientesCriteria) || !$this->lastClientesCriteria->equals($criteria)) {
				$this->collClientess = ClientesPeer::doSelectJoinCtaIngr($criteria, $con);
			}
		}
		$this->lastClientesCriteria = $criteria;

		return $this->collClientess;
	}

	
	public function initFacturas()
	{
		if ($this->collFacturas === null) {
			$this->collFacturas = array();
		}
	}

	
	public function getFacturas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
			   $this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

				FacturaPeer::addSelectColumns($criteria);
				$this->collFacturas = FacturaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

				FacturaPeer::addSelectColumns($criteria);
				if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
					$this->collFacturas = FacturaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFacturaCriteria = $criteria;
		return $this->collFacturas;
	}

	
	public function countFacturas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

		return FacturaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFactura(Factura $l)
	{
		$this->collFacturas[] = $l;
		$l->setVendedor($this);
	}


	
	public function getFacturasJoinClientes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
				$this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

				$this->collFacturas = FacturaPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}


	
	public function getFacturasJoinTranspor($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
				$this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

				$this->collFacturas = FacturaPeer::doSelectJoinTranspor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinTranspor($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}


	
	public function getFacturasJoinCondicio($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFacturaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFacturas === null) {
			if ($this->isNew()) {
				$this->collFacturas = array();
			} else {

				$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

				$this->collFacturas = FacturaPeer::doSelectJoinCondicio($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinCondicio($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
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

				$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

				DocumCcPeer::addSelectColumns($criteria);
				$this->collDocumCcs = DocumCcPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

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

		$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

		return DocumCcPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDocumCc(DocumCc $l)
	{
		$this->collDocumCcs[] = $l;
		$l->setVendedor($this);
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

				$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}


	
	public function getDocumCcsJoinTabulado($criteria = null, $con = null)
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

				$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinTabulado($criteria, $con);
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

				$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

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

				$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinAlmacen($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
	}

	
	public function initCobross()
	{
		if ($this->collCobross === null) {
			$this->collCobross = array();
		}
	}

	
	public function getCobross($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
			   $this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

				CobrosPeer::addSelectColumns($criteria);
				$this->collCobross = CobrosPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

				CobrosPeer::addSelectColumns($criteria);
				if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
					$this->collCobross = CobrosPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCobrosCriteria = $criteria;
		return $this->collCobross;
	}

	
	public function countCobross($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

		return CobrosPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCobros(Cobros $l)
	{
		$this->collCobross[] = $l;
		$l->setVendedor($this);
	}


	
	public function getCobrossJoinClientes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
				$this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

				$this->collCobross = CobrosPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}


	
	public function getCobrossJoinMoneda($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
				$this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

				$this->collCobross = CobrosPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinMoneda($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}


	
	public function getCobrossJoinAlmacen($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCobrosPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCobross === null) {
			if ($this->isNew()) {
				$this->collCobross = array();
			} else {

				$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

				$this->collCobross = CobrosPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_VEN, $this->getCoVen());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinAlmacen($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}

} 