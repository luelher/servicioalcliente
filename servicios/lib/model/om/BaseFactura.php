<?php


abstract class BaseFactura extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $fact_num;


	
	protected $contrib = true;


	
	protected $nombre = '(space(1))';


	
	protected $rif = '(space(1))';


	
	protected $nit = '(space(1))';


	
	protected $num_control = 0;


	
	protected $status = '(space(1))';


	
	protected $comentario = '(space(1))';


	
	protected $descrip = '(space(1))';


	
	protected $saldo = 0;


	
	protected $fec_emis;


	
	protected $fec_venc;


	
	protected $co_cli = '(space(1))';


	
	protected $co_ven = '(space(1))';


	
	protected $co_tran = '(space(1))';


	
	protected $dir_ent = '(space(1))';


	
	protected $forma_pag = '(space(1))';


	
	protected $tot_bruto = 0;


	
	protected $tot_neto = 0;


	
	protected $glob_desc = 0;


	
	protected $tot_reca = 0;


	
	protected $porc_gdesc = '(space(1))';


	
	protected $porc_reca = '(space(1))';


	
	protected $total_uc = 0;


	
	protected $total_cp = 0;


	
	protected $tot_flete = 0;


	
	protected $monto_dev = 0;


	
	protected $totklu = 0;


	
	protected $anulada = true;


	
	protected $impresa = true;


	
	protected $iva = 0;


	
	protected $iva_dev = 0;


	
	protected $feccom;


	
	protected $numcom = 0;


	
	protected $tasa = 0;


	
	protected $moneda = '(space(1))';


	
	protected $dis_cen = '(space(1))';


	
	protected $vuelto = 0;


	
	protected $seriales = 0;


	
	protected $tasag = 0;


	
	protected $tasag10 = 0;


	
	protected $tasag20 = 0;


	
	protected $campo1 = '(space(1))';


	
	protected $campo2 = '(space(1))';


	
	protected $campo3 = '(space(1))';


	
	protected $campo4 = '(space(1))';


	
	protected $campo5 = '(space(1))';


	
	protected $campo6 = '(space(1))';


	
	protected $campo7 = '(space(1))';


	
	protected $campo8 = '(space(1))';


	
	protected $co_us_in = '(space(1))';


	
	protected $fe_us_in;


	
	protected $co_us_mo = '(space(1))';


	
	protected $fe_us_mo;


	
	protected $co_us_el = '(space(1))';


	
	protected $fe_us_el;


	
	protected $revisado = '(space(1))';


	
	protected $trasnfe = '(space(1))';


	
	protected $numcon = '(space(1))';


	
	protected $co_sucu = '(space(1))';


	
	protected $rowguid = '(newid())';


	
	protected $mon_ilc = 0;


	
	protected $otros1 = 0;


	
	protected $otros2 = 0;


	
	protected $otros3 = 0;


	
	protected $num_turno = 0;


	
	protected $aux01 = 0;


	
	protected $aux02 = '(space(1))';


	
	protected $id = 0;


	
	protected $salestax = '(space(1))';


	
	protected $origen = '(space(1))';


	
	protected $origen_d = '(space(1))';


	
	protected $fec_reg;


	
	protected $telefono = '(space(60))';


	
	protected $sta_prod = '(space(1))';

	
	protected $aClientes;

	
	protected $aVendedor;

	
	protected $aTranspor;

	
	protected $aCondicio;

	
	protected $aMoneda;

	
	protected $aAlmacen;

	
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

	
	public function getFecEmis($format = 'Y-m-d H:i:s')
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

	
	public function getFecVenc($format = 'Y-m-d H:i:s')
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

	
	public function getFeccom($format = 'Y-m-d H:i:s')
	{

		if ($this->feccom === null || $this->feccom === '') {
			return null;
		} elseif (!is_int($this->feccom)) {
						$ts = strtotime($this->feccom);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [feccom] as date/time value: " . var_export($this->feccom, true));
			}
		} else {
			$ts = $this->feccom;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getNumcom()
	{

		return $this->numcom;
	}

	
	public function getTasa()
	{

		return $this->tasa;
	}

	
	public function getMoneda()
	{

		return $this->moneda;
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

	
	public function getFeUsIn($format = 'Y-m-d H:i:s')
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

	
	public function getFeUsMo($format = 'Y-m-d H:i:s')
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

	
	public function getFeUsEl($format = 'Y-m-d H:i:s')
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

	
	public function getNumcon()
	{

		return $this->numcon;
	}

	
	public function getCoSucu()
	{

		return $this->co_sucu;
	}

	
	public function getRowguid()
	{

		return $this->rowguid;
	}

	
	public function getMonIlc()
	{

		return $this->mon_ilc;
	}

	
	public function getOtros1()
	{

		return $this->otros1;
	}

	
	public function getOtros2()
	{

		return $this->otros2;
	}

	
	public function getOtros3()
	{

		return $this->otros3;
	}

	
	public function getNumTurno()
	{

		return $this->num_turno;
	}

	
	public function getAux01()
	{

		return $this->aux01;
	}

	
	public function getAux02()
	{

		return $this->aux02;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getSalestax()
	{

		return $this->salestax;
	}

	
	public function getOrigen()
	{

		return $this->origen;
	}

	
	public function getOrigenD()
	{

		return $this->origen_d;
	}

	
	public function getFecReg($format = 'Y-m-d H:i:s')
	{

		if ($this->fec_reg === null || $this->fec_reg === '') {
			return null;
		} elseif (!is_int($this->fec_reg)) {
						$ts = strtotime($this->fec_reg);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fec_reg] as date/time value: " . var_export($this->fec_reg, true));
			}
		} else {
			$ts = $this->fec_reg;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTelefono()
	{

		return $this->telefono;
	}

	
	public function getStaProd()
	{

		return $this->sta_prod;
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

		if ($this->contrib !== $v || $v === true) {
			$this->contrib = $v;
			$this->modifiedColumns[] = FacturaPeer::CONTRIB;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v || $v === '(space(1))') {
			$this->nombre = $v;
			$this->modifiedColumns[] = FacturaPeer::NOMBRE;
		}

	} 
	
	public function setRif($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rif !== $v || $v === '(space(1))') {
			$this->rif = $v;
			$this->modifiedColumns[] = FacturaPeer::RIF;
		}

	} 
	
	public function setNit($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nit !== $v || $v === '(space(1))') {
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

		if ($this->status !== $v || $v === '(space(1))') {
			$this->status = $v;
			$this->modifiedColumns[] = FacturaPeer::STATUS;
		}

	} 
	
	public function setComentario($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comentario !== $v || $v === '(space(1))') {
			$this->comentario = $v;
			$this->modifiedColumns[] = FacturaPeer::COMENTARIO;
		}

	} 
	
	public function setDescrip($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descrip !== $v || $v === '(space(1))') {
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

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_emis] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_emis !== $ts) {
			$this->fec_emis = $ts;
			$this->modifiedColumns[] = FacturaPeer::FEC_EMIS;
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
			$this->modifiedColumns[] = FacturaPeer::FEC_VENC;
		}

	} 
	
	public function setCoCli($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cli !== $v || $v === '(space(1))') {
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

		if ($this->co_ven !== $v || $v === '(space(1))') {
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

		if ($this->co_tran !== $v || $v === '(space(1))') {
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

		if ($this->dir_ent !== $v || $v === '(space(1))') {
			$this->dir_ent = $v;
			$this->modifiedColumns[] = FacturaPeer::DIR_ENT;
		}

	} 
	
	public function setFormaPag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->forma_pag !== $v || $v === '(space(1))') {
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

		if ($this->porc_gdesc !== $v || $v === '(space(1))') {
			$this->porc_gdesc = $v;
			$this->modifiedColumns[] = FacturaPeer::PORC_GDESC;
		}

	} 
	
	public function setPorcReca($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->porc_reca !== $v || $v === '(space(1))') {
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

		if ($this->anulada !== $v || $v === true) {
			$this->anulada = $v;
			$this->modifiedColumns[] = FacturaPeer::ANULADA;
		}

	} 
	
	public function setImpresa($v)
	{

		if ($this->impresa !== $v || $v === true) {
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
	
	public function setFeccom($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [feccom] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->feccom !== $ts) {
			$this->feccom = $ts;
			$this->modifiedColumns[] = FacturaPeer::FECCOM;
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

		if ($this->tasa !== $v || $v === 0) {
			$this->tasa = $v;
			$this->modifiedColumns[] = FacturaPeer::TASA;
		}

	} 
	
	public function setMoneda($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moneda !== $v || $v === '(space(1))') {
			$this->moneda = $v;
			$this->modifiedColumns[] = FacturaPeer::MONEDA;
		}

		if ($this->aMoneda !== null && $this->aMoneda->getCoMone() !== $v) {
			$this->aMoneda = null;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === '(space(1))') {
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
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === '(space(1))') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === '(space(1))') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === '(space(1))') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === '(space(1))') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO4;
		}

	} 
	
	public function setCampo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo5 !== $v || $v === '(space(1))') {
			$this->campo5 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO5;
		}

	} 
	
	public function setCampo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo6 !== $v || $v === '(space(1))') {
			$this->campo6 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO6;
		}

	} 
	
	public function setCampo7($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo7 !== $v || $v === '(space(1))') {
			$this->campo7 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO7;
		}

	} 
	
	public function setCampo8($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo8 !== $v || $v === '(space(1))') {
			$this->campo8 = $v;
			$this->modifiedColumns[] = FacturaPeer::CAMPO8;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === '(space(1))') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = FacturaPeer::CO_US_IN;
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
			$this->modifiedColumns[] = FacturaPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === '(space(1))') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = FacturaPeer::CO_US_MO;
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
			$this->modifiedColumns[] = FacturaPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === '(space(1))') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = FacturaPeer::CO_US_EL;
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
			$this->modifiedColumns[] = FacturaPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === '(space(1))') {
			$this->revisado = $v;
			$this->modifiedColumns[] = FacturaPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === '(space(1))') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = FacturaPeer::TRASNFE;
		}

	} 
	
	public function setNumcon($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numcon !== $v || $v === '(space(1))') {
			$this->numcon = $v;
			$this->modifiedColumns[] = FacturaPeer::NUMCON;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === '(space(1))') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = FacturaPeer::CO_SUCU;
		}

		if ($this->aAlmacen !== null && $this->aAlmacen->getCoAlma() !== $v) {
			$this->aAlmacen = null;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = FacturaPeer::ROWGUID;
		}

	} 
	
	public function setMonIlc($v)
	{

		if ($this->mon_ilc !== $v || $v === 0) {
			$this->mon_ilc = $v;
			$this->modifiedColumns[] = FacturaPeer::MON_ILC;
		}

	} 
	
	public function setOtros1($v)
	{

		if ($this->otros1 !== $v || $v === 0) {
			$this->otros1 = $v;
			$this->modifiedColumns[] = FacturaPeer::OTROS1;
		}

	} 
	
	public function setOtros2($v)
	{

		if ($this->otros2 !== $v || $v === 0) {
			$this->otros2 = $v;
			$this->modifiedColumns[] = FacturaPeer::OTROS2;
		}

	} 
	
	public function setOtros3($v)
	{

		if ($this->otros3 !== $v || $v === 0) {
			$this->otros3 = $v;
			$this->modifiedColumns[] = FacturaPeer::OTROS3;
		}

	} 
	
	public function setNumTurno($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_turno !== $v || $v === 0) {
			$this->num_turno = $v;
			$this->modifiedColumns[] = FacturaPeer::NUM_TURNO;
		}

	} 
	
	public function setAux01($v)
	{

		if ($this->aux01 !== $v || $v === 0) {
			$this->aux01 = $v;
			$this->modifiedColumns[] = FacturaPeer::AUX01;
		}

	} 
	
	public function setAux02($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->aux02 !== $v || $v === '(space(1))') {
			$this->aux02 = $v;
			$this->modifiedColumns[] = FacturaPeer::AUX02;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = FacturaPeer::ID;
		}

	} 
	
	public function setSalestax($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->salestax !== $v || $v === '(space(1))') {
			$this->salestax = $v;
			$this->modifiedColumns[] = FacturaPeer::SALESTAX;
		}

	} 
	
	public function setOrigen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->origen !== $v || $v === '(space(1))') {
			$this->origen = $v;
			$this->modifiedColumns[] = FacturaPeer::ORIGEN;
		}

	} 
	
	public function setOrigenD($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->origen_d !== $v || $v === '(space(1))') {
			$this->origen_d = $v;
			$this->modifiedColumns[] = FacturaPeer::ORIGEN_D;
		}

	} 
	
	public function setFecReg($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_reg] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_reg !== $ts) {
			$this->fec_reg = $ts;
			$this->modifiedColumns[] = FacturaPeer::FEC_REG;
		}

	} 
	
	public function setTelefono($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->telefono !== $v || $v === '(space(60))') {
			$this->telefono = $v;
			$this->modifiedColumns[] = FacturaPeer::TELEFONO;
		}

	} 
	
	public function setStaProd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sta_prod !== $v || $v === '(space(1))') {
			$this->sta_prod = $v;
			$this->modifiedColumns[] = FacturaPeer::STA_PROD;
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

			$this->fec_emis = $rs->getTimestamp($startcol + 10, null);

			$this->fec_venc = $rs->getTimestamp($startcol + 11, null);

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

			$this->feccom = $rs->getTimestamp($startcol + 32, null);

			$this->numcom = $rs->getInt($startcol + 33);

			$this->tasa = $rs->getFloat($startcol + 34);

			$this->moneda = $rs->getString($startcol + 35);

			$this->dis_cen = $rs->getString($startcol + 36);

			$this->vuelto = $rs->getFloat($startcol + 37);

			$this->seriales = $rs->getInt($startcol + 38);

			$this->tasag = $rs->getFloat($startcol + 39);

			$this->tasag10 = $rs->getFloat($startcol + 40);

			$this->tasag20 = $rs->getFloat($startcol + 41);

			$this->campo1 = $rs->getString($startcol + 42);

			$this->campo2 = $rs->getString($startcol + 43);

			$this->campo3 = $rs->getString($startcol + 44);

			$this->campo4 = $rs->getString($startcol + 45);

			$this->campo5 = $rs->getString($startcol + 46);

			$this->campo6 = $rs->getString($startcol + 47);

			$this->campo7 = $rs->getString($startcol + 48);

			$this->campo8 = $rs->getString($startcol + 49);

			$this->co_us_in = $rs->getString($startcol + 50);

			$this->fe_us_in = $rs->getTimestamp($startcol + 51, null);

			$this->co_us_mo = $rs->getString($startcol + 52);

			$this->fe_us_mo = $rs->getTimestamp($startcol + 53, null);

			$this->co_us_el = $rs->getString($startcol + 54);

			$this->fe_us_el = $rs->getTimestamp($startcol + 55, null);

			$this->revisado = $rs->getString($startcol + 56);

			$this->trasnfe = $rs->getString($startcol + 57);

			$this->numcon = $rs->getString($startcol + 58);

			$this->co_sucu = $rs->getString($startcol + 59);

			$this->rowguid = $rs->getString($startcol + 60);

			$this->mon_ilc = $rs->getFloat($startcol + 61);

			$this->otros1 = $rs->getFloat($startcol + 62);

			$this->otros2 = $rs->getFloat($startcol + 63);

			$this->otros3 = $rs->getFloat($startcol + 64);

			$this->num_turno = $rs->getInt($startcol + 65);

			$this->aux01 = $rs->getFloat($startcol + 66);

			$this->aux02 = $rs->getString($startcol + 67);

			$this->id = $rs->getInt($startcol + 68);

			$this->salestax = $rs->getString($startcol + 69);

			$this->origen = $rs->getString($startcol + 70);

			$this->origen_d = $rs->getString($startcol + 71);

			$this->fec_reg = $rs->getTimestamp($startcol + 72, null);

			$this->telefono = $rs->getString($startcol + 73);

			$this->sta_prod = $rs->getString($startcol + 74);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 75; 
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

			if ($this->aMoneda !== null) {
				if ($this->aMoneda->isModified()) {
					$affectedRows += $this->aMoneda->save($con);
				}
				$this->setMoneda($this->aMoneda);
			}

			if ($this->aAlmacen !== null) {
				if ($this->aAlmacen->isModified()) {
					$affectedRows += $this->aAlmacen->save($con);
				}
				$this->setAlmacen($this->aAlmacen);
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

			if ($this->aMoneda !== null) {
				if (!$this->aMoneda->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMoneda->getValidationFailures());
				}
			}

			if ($this->aAlmacen !== null) {
				if (!$this->aAlmacen->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAlmacen->getValidationFailures());
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
				return $this->getFeccom();
				break;
			case 33:
				return $this->getNumcom();
				break;
			case 34:
				return $this->getTasa();
				break;
			case 35:
				return $this->getMoneda();
				break;
			case 36:
				return $this->getDisCen();
				break;
			case 37:
				return $this->getVuelto();
				break;
			case 38:
				return $this->getSeriales();
				break;
			case 39:
				return $this->getTasag();
				break;
			case 40:
				return $this->getTasag10();
				break;
			case 41:
				return $this->getTasag20();
				break;
			case 42:
				return $this->getCampo1();
				break;
			case 43:
				return $this->getCampo2();
				break;
			case 44:
				return $this->getCampo3();
				break;
			case 45:
				return $this->getCampo4();
				break;
			case 46:
				return $this->getCampo5();
				break;
			case 47:
				return $this->getCampo6();
				break;
			case 48:
				return $this->getCampo7();
				break;
			case 49:
				return $this->getCampo8();
				break;
			case 50:
				return $this->getCoUsIn();
				break;
			case 51:
				return $this->getFeUsIn();
				break;
			case 52:
				return $this->getCoUsMo();
				break;
			case 53:
				return $this->getFeUsMo();
				break;
			case 54:
				return $this->getCoUsEl();
				break;
			case 55:
				return $this->getFeUsEl();
				break;
			case 56:
				return $this->getRevisado();
				break;
			case 57:
				return $this->getTrasnfe();
				break;
			case 58:
				return $this->getNumcon();
				break;
			case 59:
				return $this->getCoSucu();
				break;
			case 60:
				return $this->getRowguid();
				break;
			case 61:
				return $this->getMonIlc();
				break;
			case 62:
				return $this->getOtros1();
				break;
			case 63:
				return $this->getOtros2();
				break;
			case 64:
				return $this->getOtros3();
				break;
			case 65:
				return $this->getNumTurno();
				break;
			case 66:
				return $this->getAux01();
				break;
			case 67:
				return $this->getAux02();
				break;
			case 68:
				return $this->getId();
				break;
			case 69:
				return $this->getSalestax();
				break;
			case 70:
				return $this->getOrigen();
				break;
			case 71:
				return $this->getOrigenD();
				break;
			case 72:
				return $this->getFecReg();
				break;
			case 73:
				return $this->getTelefono();
				break;
			case 74:
				return $this->getStaProd();
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
			$keys[32] => $this->getFeccom(),
			$keys[33] => $this->getNumcom(),
			$keys[34] => $this->getTasa(),
			$keys[35] => $this->getMoneda(),
			$keys[36] => $this->getDisCen(),
			$keys[37] => $this->getVuelto(),
			$keys[38] => $this->getSeriales(),
			$keys[39] => $this->getTasag(),
			$keys[40] => $this->getTasag10(),
			$keys[41] => $this->getTasag20(),
			$keys[42] => $this->getCampo1(),
			$keys[43] => $this->getCampo2(),
			$keys[44] => $this->getCampo3(),
			$keys[45] => $this->getCampo4(),
			$keys[46] => $this->getCampo5(),
			$keys[47] => $this->getCampo6(),
			$keys[48] => $this->getCampo7(),
			$keys[49] => $this->getCampo8(),
			$keys[50] => $this->getCoUsIn(),
			$keys[51] => $this->getFeUsIn(),
			$keys[52] => $this->getCoUsMo(),
			$keys[53] => $this->getFeUsMo(),
			$keys[54] => $this->getCoUsEl(),
			$keys[55] => $this->getFeUsEl(),
			$keys[56] => $this->getRevisado(),
			$keys[57] => $this->getTrasnfe(),
			$keys[58] => $this->getNumcon(),
			$keys[59] => $this->getCoSucu(),
			$keys[60] => $this->getRowguid(),
			$keys[61] => $this->getMonIlc(),
			$keys[62] => $this->getOtros1(),
			$keys[63] => $this->getOtros2(),
			$keys[64] => $this->getOtros3(),
			$keys[65] => $this->getNumTurno(),
			$keys[66] => $this->getAux01(),
			$keys[67] => $this->getAux02(),
			$keys[68] => $this->getId(),
			$keys[69] => $this->getSalestax(),
			$keys[70] => $this->getOrigen(),
			$keys[71] => $this->getOrigenD(),
			$keys[72] => $this->getFecReg(),
			$keys[73] => $this->getTelefono(),
			$keys[74] => $this->getStaProd(),
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
				$this->setFeccom($value);
				break;
			case 33:
				$this->setNumcom($value);
				break;
			case 34:
				$this->setTasa($value);
				break;
			case 35:
				$this->setMoneda($value);
				break;
			case 36:
				$this->setDisCen($value);
				break;
			case 37:
				$this->setVuelto($value);
				break;
			case 38:
				$this->setSeriales($value);
				break;
			case 39:
				$this->setTasag($value);
				break;
			case 40:
				$this->setTasag10($value);
				break;
			case 41:
				$this->setTasag20($value);
				break;
			case 42:
				$this->setCampo1($value);
				break;
			case 43:
				$this->setCampo2($value);
				break;
			case 44:
				$this->setCampo3($value);
				break;
			case 45:
				$this->setCampo4($value);
				break;
			case 46:
				$this->setCampo5($value);
				break;
			case 47:
				$this->setCampo6($value);
				break;
			case 48:
				$this->setCampo7($value);
				break;
			case 49:
				$this->setCampo8($value);
				break;
			case 50:
				$this->setCoUsIn($value);
				break;
			case 51:
				$this->setFeUsIn($value);
				break;
			case 52:
				$this->setCoUsMo($value);
				break;
			case 53:
				$this->setFeUsMo($value);
				break;
			case 54:
				$this->setCoUsEl($value);
				break;
			case 55:
				$this->setFeUsEl($value);
				break;
			case 56:
				$this->setRevisado($value);
				break;
			case 57:
				$this->setTrasnfe($value);
				break;
			case 58:
				$this->setNumcon($value);
				break;
			case 59:
				$this->setCoSucu($value);
				break;
			case 60:
				$this->setRowguid($value);
				break;
			case 61:
				$this->setMonIlc($value);
				break;
			case 62:
				$this->setOtros1($value);
				break;
			case 63:
				$this->setOtros2($value);
				break;
			case 64:
				$this->setOtros3($value);
				break;
			case 65:
				$this->setNumTurno($value);
				break;
			case 66:
				$this->setAux01($value);
				break;
			case 67:
				$this->setAux02($value);
				break;
			case 68:
				$this->setId($value);
				break;
			case 69:
				$this->setSalestax($value);
				break;
			case 70:
				$this->setOrigen($value);
				break;
			case 71:
				$this->setOrigenD($value);
				break;
			case 72:
				$this->setFecReg($value);
				break;
			case 73:
				$this->setTelefono($value);
				break;
			case 74:
				$this->setStaProd($value);
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
		if (array_key_exists($keys[32], $arr)) $this->setFeccom($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setNumcom($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setTasa($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setMoneda($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setDisCen($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setVuelto($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setSeriales($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setTasag($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setTasag10($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setTasag20($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setCampo1($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setCampo2($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setCampo3($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setCampo4($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setCampo5($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setCampo6($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setCampo7($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setCampo8($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setCoUsIn($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setFeUsIn($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setCoUsMo($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setFeUsMo($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setCoUsEl($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setFeUsEl($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setRevisado($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setTrasnfe($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setNumcon($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setCoSucu($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setRowguid($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setMonIlc($arr[$keys[61]]);
		if (array_key_exists($keys[62], $arr)) $this->setOtros1($arr[$keys[62]]);
		if (array_key_exists($keys[63], $arr)) $this->setOtros2($arr[$keys[63]]);
		if (array_key_exists($keys[64], $arr)) $this->setOtros3($arr[$keys[64]]);
		if (array_key_exists($keys[65], $arr)) $this->setNumTurno($arr[$keys[65]]);
		if (array_key_exists($keys[66], $arr)) $this->setAux01($arr[$keys[66]]);
		if (array_key_exists($keys[67], $arr)) $this->setAux02($arr[$keys[67]]);
		if (array_key_exists($keys[68], $arr)) $this->setId($arr[$keys[68]]);
		if (array_key_exists($keys[69], $arr)) $this->setSalestax($arr[$keys[69]]);
		if (array_key_exists($keys[70], $arr)) $this->setOrigen($arr[$keys[70]]);
		if (array_key_exists($keys[71], $arr)) $this->setOrigenD($arr[$keys[71]]);
		if (array_key_exists($keys[72], $arr)) $this->setFecReg($arr[$keys[72]]);
		if (array_key_exists($keys[73], $arr)) $this->setTelefono($arr[$keys[73]]);
		if (array_key_exists($keys[74], $arr)) $this->setStaProd($arr[$keys[74]]);
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
		if ($this->isColumnModified(FacturaPeer::FECCOM)) $criteria->add(FacturaPeer::FECCOM, $this->feccom);
		if ($this->isColumnModified(FacturaPeer::NUMCOM)) $criteria->add(FacturaPeer::NUMCOM, $this->numcom);
		if ($this->isColumnModified(FacturaPeer::TASA)) $criteria->add(FacturaPeer::TASA, $this->tasa);
		if ($this->isColumnModified(FacturaPeer::MONEDA)) $criteria->add(FacturaPeer::MONEDA, $this->moneda);
		if ($this->isColumnModified(FacturaPeer::DIS_CEN)) $criteria->add(FacturaPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(FacturaPeer::VUELTO)) $criteria->add(FacturaPeer::VUELTO, $this->vuelto);
		if ($this->isColumnModified(FacturaPeer::SERIALES)) $criteria->add(FacturaPeer::SERIALES, $this->seriales);
		if ($this->isColumnModified(FacturaPeer::TASAG)) $criteria->add(FacturaPeer::TASAG, $this->tasag);
		if ($this->isColumnModified(FacturaPeer::TASAG10)) $criteria->add(FacturaPeer::TASAG10, $this->tasag10);
		if ($this->isColumnModified(FacturaPeer::TASAG20)) $criteria->add(FacturaPeer::TASAG20, $this->tasag20);
		if ($this->isColumnModified(FacturaPeer::CAMPO1)) $criteria->add(FacturaPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(FacturaPeer::CAMPO2)) $criteria->add(FacturaPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(FacturaPeer::CAMPO3)) $criteria->add(FacturaPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(FacturaPeer::CAMPO4)) $criteria->add(FacturaPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(FacturaPeer::CAMPO5)) $criteria->add(FacturaPeer::CAMPO5, $this->campo5);
		if ($this->isColumnModified(FacturaPeer::CAMPO6)) $criteria->add(FacturaPeer::CAMPO6, $this->campo6);
		if ($this->isColumnModified(FacturaPeer::CAMPO7)) $criteria->add(FacturaPeer::CAMPO7, $this->campo7);
		if ($this->isColumnModified(FacturaPeer::CAMPO8)) $criteria->add(FacturaPeer::CAMPO8, $this->campo8);
		if ($this->isColumnModified(FacturaPeer::CO_US_IN)) $criteria->add(FacturaPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(FacturaPeer::FE_US_IN)) $criteria->add(FacturaPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(FacturaPeer::CO_US_MO)) $criteria->add(FacturaPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(FacturaPeer::FE_US_MO)) $criteria->add(FacturaPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(FacturaPeer::CO_US_EL)) $criteria->add(FacturaPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(FacturaPeer::FE_US_EL)) $criteria->add(FacturaPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(FacturaPeer::REVISADO)) $criteria->add(FacturaPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(FacturaPeer::TRASNFE)) $criteria->add(FacturaPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(FacturaPeer::NUMCON)) $criteria->add(FacturaPeer::NUMCON, $this->numcon);
		if ($this->isColumnModified(FacturaPeer::CO_SUCU)) $criteria->add(FacturaPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(FacturaPeer::ROWGUID)) $criteria->add(FacturaPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(FacturaPeer::MON_ILC)) $criteria->add(FacturaPeer::MON_ILC, $this->mon_ilc);
		if ($this->isColumnModified(FacturaPeer::OTROS1)) $criteria->add(FacturaPeer::OTROS1, $this->otros1);
		if ($this->isColumnModified(FacturaPeer::OTROS2)) $criteria->add(FacturaPeer::OTROS2, $this->otros2);
		if ($this->isColumnModified(FacturaPeer::OTROS3)) $criteria->add(FacturaPeer::OTROS3, $this->otros3);
		if ($this->isColumnModified(FacturaPeer::NUM_TURNO)) $criteria->add(FacturaPeer::NUM_TURNO, $this->num_turno);
		if ($this->isColumnModified(FacturaPeer::AUX01)) $criteria->add(FacturaPeer::AUX01, $this->aux01);
		if ($this->isColumnModified(FacturaPeer::AUX02)) $criteria->add(FacturaPeer::AUX02, $this->aux02);
		if ($this->isColumnModified(FacturaPeer::ID)) $criteria->add(FacturaPeer::ID, $this->id);
		if ($this->isColumnModified(FacturaPeer::SALESTAX)) $criteria->add(FacturaPeer::SALESTAX, $this->salestax);
		if ($this->isColumnModified(FacturaPeer::ORIGEN)) $criteria->add(FacturaPeer::ORIGEN, $this->origen);
		if ($this->isColumnModified(FacturaPeer::ORIGEN_D)) $criteria->add(FacturaPeer::ORIGEN_D, $this->origen_d);
		if ($this->isColumnModified(FacturaPeer::FEC_REG)) $criteria->add(FacturaPeer::FEC_REG, $this->fec_reg);
		if ($this->isColumnModified(FacturaPeer::TELEFONO)) $criteria->add(FacturaPeer::TELEFONO, $this->telefono);
		if ($this->isColumnModified(FacturaPeer::STA_PROD)) $criteria->add(FacturaPeer::STA_PROD, $this->sta_prod);

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

		$copyObj->setFeccom($this->feccom);

		$copyObj->setNumcom($this->numcom);

		$copyObj->setTasa($this->tasa);

		$copyObj->setMoneda($this->moneda);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setVuelto($this->vuelto);

		$copyObj->setSeriales($this->seriales);

		$copyObj->setTasag($this->tasag);

		$copyObj->setTasag10($this->tasag10);

		$copyObj->setTasag20($this->tasag20);

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

		$copyObj->setNumcon($this->numcon);

		$copyObj->setCoSucu($this->co_sucu);

		$copyObj->setRowguid($this->rowguid);

		$copyObj->setMonIlc($this->mon_ilc);

		$copyObj->setOtros1($this->otros1);

		$copyObj->setOtros2($this->otros2);

		$copyObj->setOtros3($this->otros3);

		$copyObj->setNumTurno($this->num_turno);

		$copyObj->setAux01($this->aux01);

		$copyObj->setAux02($this->aux02);

		$copyObj->setId($this->id);

		$copyObj->setSalestax($this->salestax);

		$copyObj->setOrigen($this->origen);

		$copyObj->setOrigenD($this->origen_d);

		$copyObj->setFecReg($this->fec_reg);

		$copyObj->setTelefono($this->telefono);

		$copyObj->setStaProd($this->sta_prod);


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
			$this->setCoCli('(space(1))');
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
			$this->setCoVen('(space(1))');
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
			$this->setCoTran('(space(1))');
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
			$this->setFormaPag('(space(1))');
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

	
	public function setMoneda($v)
	{


		if ($v === null) {
			$this->setMoneda('(space(1))');
		} else {
			$this->setMoneda($v->getCoMone());
		}


		$this->aMoneda = $v;
	}


	
	public function getMoneda($con = null)
	{
				include_once 'lib/model/om/BaseMonedaPeer.php';

		if ($this->aMoneda === null && (($this->moneda !== "" && $this->moneda !== null))) {

			$this->aMoneda = MonedaPeer::retrieveByPK($this->moneda, $con);

			
		}
		return $this->aMoneda;
	}

	
	public function setAlmacen($v)
	{


		if ($v === null) {
			$this->setCoSucu('(space(1))');
		} else {
			$this->setCoSucu($v->getCoAlma());
		}


		$this->aAlmacen = $v;
	}


	
	public function getAlmacen($con = null)
	{
				include_once 'lib/model/om/BaseAlmacenPeer.php';

		if ($this->aAlmacen === null && (($this->co_sucu !== "" && $this->co_sucu !== null))) {

			$this->aAlmacen = AlmacenPeer::retrieveByPK($this->co_sucu, $con);

			
		}
		return $this->aAlmacen;
	}

} 