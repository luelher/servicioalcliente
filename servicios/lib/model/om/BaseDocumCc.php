<?php


abstract class BaseDocumCc extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $tipo_doc;


	
	protected $nro_doc;


	
	protected $anulado = false;


	
	protected $movi = 0;


	
	protected $aut = false;


	
	protected $num_control = 0;


	
	protected $co_cli = ' ';


	
	protected $contrib = false;


	
	protected $fec_emis;


	
	protected $fec_venc;


	
	protected $observa = ' ';


	
	protected $doc_orig = ' ';


	
	protected $nro_orig = 0;


	
	protected $co_ban = '(\'0\')';


	
	protected $nro_che = ' ';


	
	protected $co_ven = ' ';


	
	protected $tipo = '(\'1\')';


	
	protected $tasa = 1;


	
	protected $moneda = ' ';


	
	protected $monto_imp = 0;


	
	protected $monto_gen = 0;


	
	protected $monto_a1 = 0;


	
	protected $monto_a2 = 0;


	
	protected $monto_bru = 0;


	
	protected $descuentos = ' ';


	
	protected $monto_des = 0;


	
	protected $recargo = ' ';


	
	protected $monto_rec = 0;


	
	protected $monto_otr = 0;


	
	protected $monto_net = 0;


	
	protected $saldo = 0;


	
	protected $feccom;


	
	protected $numcom = 0;


	
	protected $dis_cen = ' ';


	
	protected $comis1 = 0;


	
	protected $comis2 = 0;


	
	protected $comis3 = 0;


	
	protected $comis4 = 0;


	
	protected $adicional = 0;


	
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


	
	protected $numcon = ' ';


	
	protected $co_sucu = ' ';


	
	protected $rowguid = '(newid())';


	
	protected $mon_ilc = 0;


	
	protected $otros1 = 0;


	
	protected $otros2 = 0;


	
	protected $otros3 = 0;


	
	protected $reng_si = false;


	
	protected $comis5 = 0;


	
	protected $comis6 = 0;


	
	protected $row_id;


	
	protected $aux01 = 0;


	
	protected $aux02 = ' ';


	
	protected $salestax = ' ';


	
	protected $origen = ' ';


	
	protected $origen_d = ' ';


	
	protected $fec_reg;

	
	protected $aClientes;

	
	protected $aVendedor;

	
	protected $aTabulado;

	
	protected $aMoneda;

	
	protected $aAlmacen;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTipoDoc()
	{

		return $this->tipo_doc;
	}

	
	public function getNroDoc()
	{

		return $this->nro_doc;
	}

	
	public function getAnulado()
	{

		return $this->anulado;
	}

	
	public function getMovi()
	{

		return $this->movi;
	}

	
	public function getAut()
	{

		return $this->aut;
	}

	
	public function getNumControl()
	{

		return $this->num_control;
	}

	
	public function getCoCli()
	{

		return $this->co_cli;
	}

	
	public function getContrib()
	{

		return $this->contrib;
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

	
	public function getObserva()
	{

		return $this->observa;
	}

	
	public function getDocOrig()
	{

		return $this->doc_orig;
	}

	
	public function getNroOrig()
	{

		return $this->nro_orig;
	}

	
	public function getCoBan()
	{

		return $this->co_ban;
	}

	
	public function getNroChe()
	{

		return $this->nro_che;
	}

	
	public function getCoVen()
	{

		return $this->co_ven;
	}

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getTasa()
	{

		return $this->tasa;
	}

	
	public function getMoneda()
	{

		return $this->moneda;
	}

	
	public function getMontoImp()
	{

		return $this->monto_imp;
	}

	
	public function getMontoGen()
	{

		return $this->monto_gen;
	}

	
	public function getMontoA1()
	{

		return $this->monto_a1;
	}

	
	public function getMontoA2()
	{

		return $this->monto_a2;
	}

	
	public function getMontoBru()
	{

		return $this->monto_bru;
	}

	
	public function getDescuentos()
	{

		return $this->descuentos;
	}

	
	public function getMontoDes()
	{

		return $this->monto_des;
	}

	
	public function getRecargo()
	{

		return $this->recargo;
	}

	
	public function getMontoRec()
	{

		return $this->monto_rec;
	}

	
	public function getMontoOtr()
	{

		return $this->monto_otr;
	}

	
	public function getMontoNet()
	{

		return $this->monto_net;
	}

	
	public function getSaldo()
	{

		return $this->saldo;
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

	
	public function getDisCen()
	{

		return $this->dis_cen;
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

	
	public function getAdicional()
	{

		return $this->adicional;
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

	
	public function getRengSi()
	{

		return $this->reng_si;
	}

	
	public function getComis5()
	{

		return $this->comis5;
	}

	
	public function getComis6()
	{

		return $this->comis6;
	}

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function getAux01()
	{

		return $this->aux01;
	}

	
	public function getAux02()
	{

		return $this->aux02;
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

	
	public function setTipoDoc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_doc !== $v) {
			$this->tipo_doc = $v;
			$this->modifiedColumns[] = DocumCcPeer::TIPO_DOC;
		}

	} 
	
	public function setNroDoc($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nro_doc !== $v) {
			$this->nro_doc = $v;
			$this->modifiedColumns[] = DocumCcPeer::NRO_DOC;
		}

	} 
	
	public function setAnulado($v)
	{

		if ($this->anulado !== $v || $v === false) {
			$this->anulado = $v;
			$this->modifiedColumns[] = DocumCcPeer::ANULADO;
		}

	} 
	
	public function setMovi($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->movi !== $v || $v === 0) {
			$this->movi = $v;
			$this->modifiedColumns[] = DocumCcPeer::MOVI;
		}

	} 
	
	public function setAut($v)
	{

		if ($this->aut !== $v || $v === false) {
			$this->aut = $v;
			$this->modifiedColumns[] = DocumCcPeer::AUT;
		}

	} 
	
	public function setNumControl($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_control !== $v || $v === 0) {
			$this->num_control = $v;
			$this->modifiedColumns[] = DocumCcPeer::NUM_CONTROL;
		}

	} 
	
	public function setCoCli($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cli !== $v || $v === ' ') {
			$this->co_cli = $v;
			$this->modifiedColumns[] = DocumCcPeer::CO_CLI;
		}

		if ($this->aClientes !== null && $this->aClientes->getCoCli() !== $v) {
			$this->aClientes = null;
		}

	} 
	
	public function setContrib($v)
	{

		if ($this->contrib !== $v || $v === false) {
			$this->contrib = $v;
			$this->modifiedColumns[] = DocumCcPeer::CONTRIB;
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
			$this->modifiedColumns[] = DocumCcPeer::FEC_EMIS;
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
			$this->modifiedColumns[] = DocumCcPeer::FEC_VENC;
		}

	} 
	
	public function setObserva($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->observa !== $v || $v === ' ') {
			$this->observa = $v;
			$this->modifiedColumns[] = DocumCcPeer::OBSERVA;
		}

	} 
	
	public function setDocOrig($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->doc_orig !== $v || $v === ' ') {
			$this->doc_orig = $v;
			$this->modifiedColumns[] = DocumCcPeer::DOC_ORIG;
		}

	} 
	
	public function setNroOrig($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nro_orig !== $v || $v === 0) {
			$this->nro_orig = $v;
			$this->modifiedColumns[] = DocumCcPeer::NRO_ORIG;
		}

	} 
	
	public function setCoBan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ban !== $v || $v === '(\'0\')') {
			$this->co_ban = $v;
			$this->modifiedColumns[] = DocumCcPeer::CO_BAN;
		}

	} 
	
	public function setNroChe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nro_che !== $v || $v === ' ') {
			$this->nro_che = $v;
			$this->modifiedColumns[] = DocumCcPeer::NRO_CHE;
		}

	} 
	
	public function setCoVen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ven !== $v || $v === ' ') {
			$this->co_ven = $v;
			$this->modifiedColumns[] = DocumCcPeer::CO_VEN;
		}

		if ($this->aVendedor !== null && $this->aVendedor->getCoVen() !== $v) {
			$this->aVendedor = null;
		}

	} 
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v || $v === '(\'1\')') {
			$this->tipo = $v;
			$this->modifiedColumns[] = DocumCcPeer::TIPO;
		}

		if ($this->aTabulado !== null && $this->aTabulado->getTipo() !== $v) {
			$this->aTabulado = null;
		}

	} 
	
	public function setTasa($v)
	{

		if ($this->tasa !== $v || $v === 1) {
			$this->tasa = $v;
			$this->modifiedColumns[] = DocumCcPeer::TASA;
		}

	} 
	
	public function setMoneda($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moneda !== $v || $v === ' ') {
			$this->moneda = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONEDA;
		}

		if ($this->aMoneda !== null && $this->aMoneda->getCoMone() !== $v) {
			$this->aMoneda = null;
		}

	} 
	
	public function setMontoImp($v)
	{

		if ($this->monto_imp !== $v || $v === 0) {
			$this->monto_imp = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_IMP;
		}

	} 
	
	public function setMontoGen($v)
	{

		if ($this->monto_gen !== $v || $v === 0) {
			$this->monto_gen = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_GEN;
		}

	} 
	
	public function setMontoA1($v)
	{

		if ($this->monto_a1 !== $v || $v === 0) {
			$this->monto_a1 = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_A1;
		}

	} 
	
	public function setMontoA2($v)
	{

		if ($this->monto_a2 !== $v || $v === 0) {
			$this->monto_a2 = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_A2;
		}

	} 
	
	public function setMontoBru($v)
	{

		if ($this->monto_bru !== $v || $v === 0) {
			$this->monto_bru = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_BRU;
		}

	} 
	
	public function setDescuentos($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descuentos !== $v || $v === ' ') {
			$this->descuentos = $v;
			$this->modifiedColumns[] = DocumCcPeer::DESCUENTOS;
		}

	} 
	
	public function setMontoDes($v)
	{

		if ($this->monto_des !== $v || $v === 0) {
			$this->monto_des = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_DES;
		}

	} 
	
	public function setRecargo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->recargo !== $v || $v === ' ') {
			$this->recargo = $v;
			$this->modifiedColumns[] = DocumCcPeer::RECARGO;
		}

	} 
	
	public function setMontoRec($v)
	{

		if ($this->monto_rec !== $v || $v === 0) {
			$this->monto_rec = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_REC;
		}

	} 
	
	public function setMontoOtr($v)
	{

		if ($this->monto_otr !== $v || $v === 0) {
			$this->monto_otr = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_OTR;
		}

	} 
	
	public function setMontoNet($v)
	{

		if ($this->monto_net !== $v || $v === 0) {
			$this->monto_net = $v;
			$this->modifiedColumns[] = DocumCcPeer::MONTO_NET;
		}

	} 
	
	public function setSaldo($v)
	{

		if ($this->saldo !== $v || $v === 0) {
			$this->saldo = $v;
			$this->modifiedColumns[] = DocumCcPeer::SALDO;
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
			$this->modifiedColumns[] = DocumCcPeer::FECCOM;
		}

	} 
	
	public function setNumcom($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->numcom !== $v || $v === 0) {
			$this->numcom = $v;
			$this->modifiedColumns[] = DocumCcPeer::NUMCOM;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = DocumCcPeer::DIS_CEN;
		}

	} 
	
	public function setComis1($v)
	{

		if ($this->comis1 !== $v || $v === 0) {
			$this->comis1 = $v;
			$this->modifiedColumns[] = DocumCcPeer::COMIS1;
		}

	} 
	
	public function setComis2($v)
	{

		if ($this->comis2 !== $v || $v === 0) {
			$this->comis2 = $v;
			$this->modifiedColumns[] = DocumCcPeer::COMIS2;
		}

	} 
	
	public function setComis3($v)
	{

		if ($this->comis3 !== $v || $v === 0) {
			$this->comis3 = $v;
			$this->modifiedColumns[] = DocumCcPeer::COMIS3;
		}

	} 
	
	public function setComis4($v)
	{

		if ($this->comis4 !== $v || $v === 0) {
			$this->comis4 = $v;
			$this->modifiedColumns[] = DocumCcPeer::COMIS4;
		}

	} 
	
	public function setAdicional($v)
	{

		if ($this->adicional !== $v || $v === 0) {
			$this->adicional = $v;
			$this->modifiedColumns[] = DocumCcPeer::ADICIONAL;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO4;
		}

	} 
	
	public function setCampo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo5 !== $v || $v === ' ') {
			$this->campo5 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO5;
		}

	} 
	
	public function setCampo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo6 !== $v || $v === ' ') {
			$this->campo6 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO6;
		}

	} 
	
	public function setCampo7($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo7 !== $v || $v === ' ') {
			$this->campo7 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO7;
		}

	} 
	
	public function setCampo8($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo8 !== $v || $v === ' ') {
			$this->campo8 = $v;
			$this->modifiedColumns[] = DocumCcPeer::CAMPO8;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = DocumCcPeer::CO_US_IN;
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
			$this->modifiedColumns[] = DocumCcPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = DocumCcPeer::CO_US_MO;
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
			$this->modifiedColumns[] = DocumCcPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = DocumCcPeer::CO_US_EL;
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
			$this->modifiedColumns[] = DocumCcPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = DocumCcPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = DocumCcPeer::TRASNFE;
		}

	} 
	
	public function setNumcon($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numcon !== $v || $v === ' ') {
			$this->numcon = $v;
			$this->modifiedColumns[] = DocumCcPeer::NUMCON;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = DocumCcPeer::CO_SUCU;
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
			$this->modifiedColumns[] = DocumCcPeer::ROWGUID;
		}

	} 
	
	public function setMonIlc($v)
	{

		if ($this->mon_ilc !== $v || $v === 0) {
			$this->mon_ilc = $v;
			$this->modifiedColumns[] = DocumCcPeer::MON_ILC;
		}

	} 
	
	public function setOtros1($v)
	{

		if ($this->otros1 !== $v || $v === 0) {
			$this->otros1 = $v;
			$this->modifiedColumns[] = DocumCcPeer::OTROS1;
		}

	} 
	
	public function setOtros2($v)
	{

		if ($this->otros2 !== $v || $v === 0) {
			$this->otros2 = $v;
			$this->modifiedColumns[] = DocumCcPeer::OTROS2;
		}

	} 
	
	public function setOtros3($v)
	{

		if ($this->otros3 !== $v || $v === 0) {
			$this->otros3 = $v;
			$this->modifiedColumns[] = DocumCcPeer::OTROS3;
		}

	} 
	
	public function setRengSi($v)
	{

		if ($this->reng_si !== $v || $v === false) {
			$this->reng_si = $v;
			$this->modifiedColumns[] = DocumCcPeer::RENG_SI;
		}

	} 
	
	public function setComis5($v)
	{

		if ($this->comis5 !== $v || $v === 0) {
			$this->comis5 = $v;
			$this->modifiedColumns[] = DocumCcPeer::COMIS5;
		}

	} 
	
	public function setComis6($v)
	{

		if ($this->comis6 !== $v || $v === 0) {
			$this->comis6 = $v;
			$this->modifiedColumns[] = DocumCcPeer::COMIS6;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = DocumCcPeer::ROW_ID;
		}

	} 
	
	public function setAux01($v)
	{

		if ($this->aux01 !== $v || $v === 0) {
			$this->aux01 = $v;
			$this->modifiedColumns[] = DocumCcPeer::AUX01;
		}

	} 
	
	public function setAux02($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->aux02 !== $v || $v === ' ') {
			$this->aux02 = $v;
			$this->modifiedColumns[] = DocumCcPeer::AUX02;
		}

	} 
	
	public function setSalestax($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->salestax !== $v || $v === ' ') {
			$this->salestax = $v;
			$this->modifiedColumns[] = DocumCcPeer::SALESTAX;
		}

	} 
	
	public function setOrigen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->origen !== $v || $v === ' ') {
			$this->origen = $v;
			$this->modifiedColumns[] = DocumCcPeer::ORIGEN;
		}

	} 
	
	public function setOrigenD($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->origen_d !== $v || $v === ' ') {
			$this->origen_d = $v;
			$this->modifiedColumns[] = DocumCcPeer::ORIGEN_D;
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
			$this->modifiedColumns[] = DocumCcPeer::FEC_REG;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->tipo_doc = $rs->getString($startcol + 0);

			$this->nro_doc = $rs->getInt($startcol + 1);

			$this->anulado = $rs->getBoolean($startcol + 2);

			$this->movi = $rs->getInt($startcol + 3);

			$this->aut = $rs->getBoolean($startcol + 4);

			$this->num_control = $rs->getInt($startcol + 5);

			$this->co_cli = $rs->getString($startcol + 6);

			$this->contrib = $rs->getBoolean($startcol + 7);

			$this->fec_emis = $rs->getTimestamp($startcol + 8, null);

			$this->fec_venc = $rs->getTimestamp($startcol + 9, null);

			$this->observa = $rs->getString($startcol + 10);

			$this->doc_orig = $rs->getString($startcol + 11);

			$this->nro_orig = $rs->getInt($startcol + 12);

			$this->co_ban = $rs->getString($startcol + 13);

			$this->nro_che = $rs->getString($startcol + 14);

			$this->co_ven = $rs->getString($startcol + 15);

			$this->tipo = $rs->getString($startcol + 16);

			$this->tasa = $rs->getFloat($startcol + 17);

			$this->moneda = $rs->getString($startcol + 18);

			$this->monto_imp = $rs->getFloat($startcol + 19);

			$this->monto_gen = $rs->getFloat($startcol + 20);

			$this->monto_a1 = $rs->getFloat($startcol + 21);

			$this->monto_a2 = $rs->getFloat($startcol + 22);

			$this->monto_bru = $rs->getFloat($startcol + 23);

			$this->descuentos = $rs->getString($startcol + 24);

			$this->monto_des = $rs->getFloat($startcol + 25);

			$this->recargo = $rs->getString($startcol + 26);

			$this->monto_rec = $rs->getFloat($startcol + 27);

			$this->monto_otr = $rs->getFloat($startcol + 28);

			$this->monto_net = $rs->getFloat($startcol + 29);

			$this->saldo = $rs->getFloat($startcol + 30);

			$this->feccom = $rs->getTimestamp($startcol + 31, null);

			$this->numcom = $rs->getInt($startcol + 32);

			$this->dis_cen = $rs->getString($startcol + 33);

			$this->comis1 = $rs->getFloat($startcol + 34);

			$this->comis2 = $rs->getFloat($startcol + 35);

			$this->comis3 = $rs->getFloat($startcol + 36);

			$this->comis4 = $rs->getFloat($startcol + 37);

			$this->adicional = $rs->getFloat($startcol + 38);

			$this->campo1 = $rs->getString($startcol + 39);

			$this->campo2 = $rs->getString($startcol + 40);

			$this->campo3 = $rs->getString($startcol + 41);

			$this->campo4 = $rs->getString($startcol + 42);

			$this->campo5 = $rs->getString($startcol + 43);

			$this->campo6 = $rs->getString($startcol + 44);

			$this->campo7 = $rs->getString($startcol + 45);

			$this->campo8 = $rs->getString($startcol + 46);

			$this->co_us_in = $rs->getString($startcol + 47);

			$this->fe_us_in = $rs->getTimestamp($startcol + 48, null);

			$this->co_us_mo = $rs->getString($startcol + 49);

			$this->fe_us_mo = $rs->getTimestamp($startcol + 50, null);

			$this->co_us_el = $rs->getString($startcol + 51);

			$this->fe_us_el = $rs->getTimestamp($startcol + 52, null);

			$this->revisado = $rs->getString($startcol + 53);

			$this->trasnfe = $rs->getString($startcol + 54);

			$this->numcon = $rs->getString($startcol + 55);

			$this->co_sucu = $rs->getString($startcol + 56);

			$this->rowguid = $rs->getString($startcol + 57);

			$this->mon_ilc = $rs->getFloat($startcol + 58);

			$this->otros1 = $rs->getFloat($startcol + 59);

			$this->otros2 = $rs->getFloat($startcol + 60);

			$this->otros3 = $rs->getFloat($startcol + 61);

			$this->reng_si = $rs->getBoolean($startcol + 62);

			$this->comis5 = $rs->getFloat($startcol + 63);

			$this->comis6 = $rs->getFloat($startcol + 64);

			$this->row_id = $rs->getBlob($startcol + 65);

			$this->aux01 = $rs->getFloat($startcol + 66);

			$this->aux02 = $rs->getString($startcol + 67);

			$this->salestax = $rs->getString($startcol + 68);

			$this->origen = $rs->getString($startcol + 69);

			$this->origen_d = $rs->getString($startcol + 70);

			$this->fec_reg = $rs->getTimestamp($startcol + 71, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 72; 
		} catch (Exception $e) {
			throw new PropelException("Error populating DocumCc object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DocumCcPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DocumCcPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(DocumCcPeer::DATABASE_NAME);
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

			if ($this->aTabulado !== null) {
				if ($this->aTabulado->isModified()) {
					$affectedRows += $this->aTabulado->save($con);
				}
				$this->setTabulado($this->aTabulado);
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
					$pk = DocumCcPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += DocumCcPeer::doUpdate($this, $con);
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

			if ($this->aTabulado !== null) {
				if (!$this->aTabulado->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTabulado->getValidationFailures());
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


			if (($retval = DocumCcPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DocumCcPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTipoDoc();
				break;
			case 1:
				return $this->getNroDoc();
				break;
			case 2:
				return $this->getAnulado();
				break;
			case 3:
				return $this->getMovi();
				break;
			case 4:
				return $this->getAut();
				break;
			case 5:
				return $this->getNumControl();
				break;
			case 6:
				return $this->getCoCli();
				break;
			case 7:
				return $this->getContrib();
				break;
			case 8:
				return $this->getFecEmis();
				break;
			case 9:
				return $this->getFecVenc();
				break;
			case 10:
				return $this->getObserva();
				break;
			case 11:
				return $this->getDocOrig();
				break;
			case 12:
				return $this->getNroOrig();
				break;
			case 13:
				return $this->getCoBan();
				break;
			case 14:
				return $this->getNroChe();
				break;
			case 15:
				return $this->getCoVen();
				break;
			case 16:
				return $this->getTipo();
				break;
			case 17:
				return $this->getTasa();
				break;
			case 18:
				return $this->getMoneda();
				break;
			case 19:
				return $this->getMontoImp();
				break;
			case 20:
				return $this->getMontoGen();
				break;
			case 21:
				return $this->getMontoA1();
				break;
			case 22:
				return $this->getMontoA2();
				break;
			case 23:
				return $this->getMontoBru();
				break;
			case 24:
				return $this->getDescuentos();
				break;
			case 25:
				return $this->getMontoDes();
				break;
			case 26:
				return $this->getRecargo();
				break;
			case 27:
				return $this->getMontoRec();
				break;
			case 28:
				return $this->getMontoOtr();
				break;
			case 29:
				return $this->getMontoNet();
				break;
			case 30:
				return $this->getSaldo();
				break;
			case 31:
				return $this->getFeccom();
				break;
			case 32:
				return $this->getNumcom();
				break;
			case 33:
				return $this->getDisCen();
				break;
			case 34:
				return $this->getComis1();
				break;
			case 35:
				return $this->getComis2();
				break;
			case 36:
				return $this->getComis3();
				break;
			case 37:
				return $this->getComis4();
				break;
			case 38:
				return $this->getAdicional();
				break;
			case 39:
				return $this->getCampo1();
				break;
			case 40:
				return $this->getCampo2();
				break;
			case 41:
				return $this->getCampo3();
				break;
			case 42:
				return $this->getCampo4();
				break;
			case 43:
				return $this->getCampo5();
				break;
			case 44:
				return $this->getCampo6();
				break;
			case 45:
				return $this->getCampo7();
				break;
			case 46:
				return $this->getCampo8();
				break;
			case 47:
				return $this->getCoUsIn();
				break;
			case 48:
				return $this->getFeUsIn();
				break;
			case 49:
				return $this->getCoUsMo();
				break;
			case 50:
				return $this->getFeUsMo();
				break;
			case 51:
				return $this->getCoUsEl();
				break;
			case 52:
				return $this->getFeUsEl();
				break;
			case 53:
				return $this->getRevisado();
				break;
			case 54:
				return $this->getTrasnfe();
				break;
			case 55:
				return $this->getNumcon();
				break;
			case 56:
				return $this->getCoSucu();
				break;
			case 57:
				return $this->getRowguid();
				break;
			case 58:
				return $this->getMonIlc();
				break;
			case 59:
				return $this->getOtros1();
				break;
			case 60:
				return $this->getOtros2();
				break;
			case 61:
				return $this->getOtros3();
				break;
			case 62:
				return $this->getRengSi();
				break;
			case 63:
				return $this->getComis5();
				break;
			case 64:
				return $this->getComis6();
				break;
			case 65:
				return $this->getRowId();
				break;
			case 66:
				return $this->getAux01();
				break;
			case 67:
				return $this->getAux02();
				break;
			case 68:
				return $this->getSalestax();
				break;
			case 69:
				return $this->getOrigen();
				break;
			case 70:
				return $this->getOrigenD();
				break;
			case 71:
				return $this->getFecReg();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DocumCcPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTipoDoc(),
			$keys[1] => $this->getNroDoc(),
			$keys[2] => $this->getAnulado(),
			$keys[3] => $this->getMovi(),
			$keys[4] => $this->getAut(),
			$keys[5] => $this->getNumControl(),
			$keys[6] => $this->getCoCli(),
			$keys[7] => $this->getContrib(),
			$keys[8] => $this->getFecEmis(),
			$keys[9] => $this->getFecVenc(),
			$keys[10] => $this->getObserva(),
			$keys[11] => $this->getDocOrig(),
			$keys[12] => $this->getNroOrig(),
			$keys[13] => $this->getCoBan(),
			$keys[14] => $this->getNroChe(),
			$keys[15] => $this->getCoVen(),
			$keys[16] => $this->getTipo(),
			$keys[17] => $this->getTasa(),
			$keys[18] => $this->getMoneda(),
			$keys[19] => $this->getMontoImp(),
			$keys[20] => $this->getMontoGen(),
			$keys[21] => $this->getMontoA1(),
			$keys[22] => $this->getMontoA2(),
			$keys[23] => $this->getMontoBru(),
			$keys[24] => $this->getDescuentos(),
			$keys[25] => $this->getMontoDes(),
			$keys[26] => $this->getRecargo(),
			$keys[27] => $this->getMontoRec(),
			$keys[28] => $this->getMontoOtr(),
			$keys[29] => $this->getMontoNet(),
			$keys[30] => $this->getSaldo(),
			$keys[31] => $this->getFeccom(),
			$keys[32] => $this->getNumcom(),
			$keys[33] => $this->getDisCen(),
			$keys[34] => $this->getComis1(),
			$keys[35] => $this->getComis2(),
			$keys[36] => $this->getComis3(),
			$keys[37] => $this->getComis4(),
			$keys[38] => $this->getAdicional(),
			$keys[39] => $this->getCampo1(),
			$keys[40] => $this->getCampo2(),
			$keys[41] => $this->getCampo3(),
			$keys[42] => $this->getCampo4(),
			$keys[43] => $this->getCampo5(),
			$keys[44] => $this->getCampo6(),
			$keys[45] => $this->getCampo7(),
			$keys[46] => $this->getCampo8(),
			$keys[47] => $this->getCoUsIn(),
			$keys[48] => $this->getFeUsIn(),
			$keys[49] => $this->getCoUsMo(),
			$keys[50] => $this->getFeUsMo(),
			$keys[51] => $this->getCoUsEl(),
			$keys[52] => $this->getFeUsEl(),
			$keys[53] => $this->getRevisado(),
			$keys[54] => $this->getTrasnfe(),
			$keys[55] => $this->getNumcon(),
			$keys[56] => $this->getCoSucu(),
			$keys[57] => $this->getRowguid(),
			$keys[58] => $this->getMonIlc(),
			$keys[59] => $this->getOtros1(),
			$keys[60] => $this->getOtros2(),
			$keys[61] => $this->getOtros3(),
			$keys[62] => $this->getRengSi(),
			$keys[63] => $this->getComis5(),
			$keys[64] => $this->getComis6(),
			$keys[65] => $this->getRowId(),
			$keys[66] => $this->getAux01(),
			$keys[67] => $this->getAux02(),
			$keys[68] => $this->getSalestax(),
			$keys[69] => $this->getOrigen(),
			$keys[70] => $this->getOrigenD(),
			$keys[71] => $this->getFecReg(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DocumCcPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTipoDoc($value);
				break;
			case 1:
				$this->setNroDoc($value);
				break;
			case 2:
				$this->setAnulado($value);
				break;
			case 3:
				$this->setMovi($value);
				break;
			case 4:
				$this->setAut($value);
				break;
			case 5:
				$this->setNumControl($value);
				break;
			case 6:
				$this->setCoCli($value);
				break;
			case 7:
				$this->setContrib($value);
				break;
			case 8:
				$this->setFecEmis($value);
				break;
			case 9:
				$this->setFecVenc($value);
				break;
			case 10:
				$this->setObserva($value);
				break;
			case 11:
				$this->setDocOrig($value);
				break;
			case 12:
				$this->setNroOrig($value);
				break;
			case 13:
				$this->setCoBan($value);
				break;
			case 14:
				$this->setNroChe($value);
				break;
			case 15:
				$this->setCoVen($value);
				break;
			case 16:
				$this->setTipo($value);
				break;
			case 17:
				$this->setTasa($value);
				break;
			case 18:
				$this->setMoneda($value);
				break;
			case 19:
				$this->setMontoImp($value);
				break;
			case 20:
				$this->setMontoGen($value);
				break;
			case 21:
				$this->setMontoA1($value);
				break;
			case 22:
				$this->setMontoA2($value);
				break;
			case 23:
				$this->setMontoBru($value);
				break;
			case 24:
				$this->setDescuentos($value);
				break;
			case 25:
				$this->setMontoDes($value);
				break;
			case 26:
				$this->setRecargo($value);
				break;
			case 27:
				$this->setMontoRec($value);
				break;
			case 28:
				$this->setMontoOtr($value);
				break;
			case 29:
				$this->setMontoNet($value);
				break;
			case 30:
				$this->setSaldo($value);
				break;
			case 31:
				$this->setFeccom($value);
				break;
			case 32:
				$this->setNumcom($value);
				break;
			case 33:
				$this->setDisCen($value);
				break;
			case 34:
				$this->setComis1($value);
				break;
			case 35:
				$this->setComis2($value);
				break;
			case 36:
				$this->setComis3($value);
				break;
			case 37:
				$this->setComis4($value);
				break;
			case 38:
				$this->setAdicional($value);
				break;
			case 39:
				$this->setCampo1($value);
				break;
			case 40:
				$this->setCampo2($value);
				break;
			case 41:
				$this->setCampo3($value);
				break;
			case 42:
				$this->setCampo4($value);
				break;
			case 43:
				$this->setCampo5($value);
				break;
			case 44:
				$this->setCampo6($value);
				break;
			case 45:
				$this->setCampo7($value);
				break;
			case 46:
				$this->setCampo8($value);
				break;
			case 47:
				$this->setCoUsIn($value);
				break;
			case 48:
				$this->setFeUsIn($value);
				break;
			case 49:
				$this->setCoUsMo($value);
				break;
			case 50:
				$this->setFeUsMo($value);
				break;
			case 51:
				$this->setCoUsEl($value);
				break;
			case 52:
				$this->setFeUsEl($value);
				break;
			case 53:
				$this->setRevisado($value);
				break;
			case 54:
				$this->setTrasnfe($value);
				break;
			case 55:
				$this->setNumcon($value);
				break;
			case 56:
				$this->setCoSucu($value);
				break;
			case 57:
				$this->setRowguid($value);
				break;
			case 58:
				$this->setMonIlc($value);
				break;
			case 59:
				$this->setOtros1($value);
				break;
			case 60:
				$this->setOtros2($value);
				break;
			case 61:
				$this->setOtros3($value);
				break;
			case 62:
				$this->setRengSi($value);
				break;
			case 63:
				$this->setComis5($value);
				break;
			case 64:
				$this->setComis6($value);
				break;
			case 65:
				$this->setRowId($value);
				break;
			case 66:
				$this->setAux01($value);
				break;
			case 67:
				$this->setAux02($value);
				break;
			case 68:
				$this->setSalestax($value);
				break;
			case 69:
				$this->setOrigen($value);
				break;
			case 70:
				$this->setOrigenD($value);
				break;
			case 71:
				$this->setFecReg($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DocumCcPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTipoDoc($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNroDoc($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAnulado($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMovi($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAut($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNumControl($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCoCli($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setContrib($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setFecEmis($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFecVenc($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setObserva($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDocOrig($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNroOrig($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCoBan($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setNroChe($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCoVen($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTipo($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTasa($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setMoneda($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setMontoImp($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setMontoGen($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setMontoA1($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setMontoA2($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setMontoBru($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDescuentos($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setMontoDes($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setRecargo($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setMontoRec($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setMontoOtr($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setMontoNet($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setSaldo($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setFeccom($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setNumcom($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setDisCen($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setComis1($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setComis2($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setComis3($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setComis4($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setAdicional($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setCampo1($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setCampo2($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setCampo3($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setCampo4($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setCampo5($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setCampo6($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setCampo7($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setCampo8($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setCoUsIn($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setFeUsIn($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setCoUsMo($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setFeUsMo($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setCoUsEl($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setFeUsEl($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setRevisado($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setTrasnfe($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setNumcon($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setCoSucu($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setRowguid($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setMonIlc($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setOtros1($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setOtros2($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setOtros3($arr[$keys[61]]);
		if (array_key_exists($keys[62], $arr)) $this->setRengSi($arr[$keys[62]]);
		if (array_key_exists($keys[63], $arr)) $this->setComis5($arr[$keys[63]]);
		if (array_key_exists($keys[64], $arr)) $this->setComis6($arr[$keys[64]]);
		if (array_key_exists($keys[65], $arr)) $this->setRowId($arr[$keys[65]]);
		if (array_key_exists($keys[66], $arr)) $this->setAux01($arr[$keys[66]]);
		if (array_key_exists($keys[67], $arr)) $this->setAux02($arr[$keys[67]]);
		if (array_key_exists($keys[68], $arr)) $this->setSalestax($arr[$keys[68]]);
		if (array_key_exists($keys[69], $arr)) $this->setOrigen($arr[$keys[69]]);
		if (array_key_exists($keys[70], $arr)) $this->setOrigenD($arr[$keys[70]]);
		if (array_key_exists($keys[71], $arr)) $this->setFecReg($arr[$keys[71]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DocumCcPeer::DATABASE_NAME);

		if ($this->isColumnModified(DocumCcPeer::TIPO_DOC)) $criteria->add(DocumCcPeer::TIPO_DOC, $this->tipo_doc);
		if ($this->isColumnModified(DocumCcPeer::NRO_DOC)) $criteria->add(DocumCcPeer::NRO_DOC, $this->nro_doc);
		if ($this->isColumnModified(DocumCcPeer::ANULADO)) $criteria->add(DocumCcPeer::ANULADO, $this->anulado);
		if ($this->isColumnModified(DocumCcPeer::MOVI)) $criteria->add(DocumCcPeer::MOVI, $this->movi);
		if ($this->isColumnModified(DocumCcPeer::AUT)) $criteria->add(DocumCcPeer::AUT, $this->aut);
		if ($this->isColumnModified(DocumCcPeer::NUM_CONTROL)) $criteria->add(DocumCcPeer::NUM_CONTROL, $this->num_control);
		if ($this->isColumnModified(DocumCcPeer::CO_CLI)) $criteria->add(DocumCcPeer::CO_CLI, $this->co_cli);
		if ($this->isColumnModified(DocumCcPeer::CONTRIB)) $criteria->add(DocumCcPeer::CONTRIB, $this->contrib);
		if ($this->isColumnModified(DocumCcPeer::FEC_EMIS)) $criteria->add(DocumCcPeer::FEC_EMIS, $this->fec_emis);
		if ($this->isColumnModified(DocumCcPeer::FEC_VENC)) $criteria->add(DocumCcPeer::FEC_VENC, $this->fec_venc);
		if ($this->isColumnModified(DocumCcPeer::OBSERVA)) $criteria->add(DocumCcPeer::OBSERVA, $this->observa);
		if ($this->isColumnModified(DocumCcPeer::DOC_ORIG)) $criteria->add(DocumCcPeer::DOC_ORIG, $this->doc_orig);
		if ($this->isColumnModified(DocumCcPeer::NRO_ORIG)) $criteria->add(DocumCcPeer::NRO_ORIG, $this->nro_orig);
		if ($this->isColumnModified(DocumCcPeer::CO_BAN)) $criteria->add(DocumCcPeer::CO_BAN, $this->co_ban);
		if ($this->isColumnModified(DocumCcPeer::NRO_CHE)) $criteria->add(DocumCcPeer::NRO_CHE, $this->nro_che);
		if ($this->isColumnModified(DocumCcPeer::CO_VEN)) $criteria->add(DocumCcPeer::CO_VEN, $this->co_ven);
		if ($this->isColumnModified(DocumCcPeer::TIPO)) $criteria->add(DocumCcPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(DocumCcPeer::TASA)) $criteria->add(DocumCcPeer::TASA, $this->tasa);
		if ($this->isColumnModified(DocumCcPeer::MONEDA)) $criteria->add(DocumCcPeer::MONEDA, $this->moneda);
		if ($this->isColumnModified(DocumCcPeer::MONTO_IMP)) $criteria->add(DocumCcPeer::MONTO_IMP, $this->monto_imp);
		if ($this->isColumnModified(DocumCcPeer::MONTO_GEN)) $criteria->add(DocumCcPeer::MONTO_GEN, $this->monto_gen);
		if ($this->isColumnModified(DocumCcPeer::MONTO_A1)) $criteria->add(DocumCcPeer::MONTO_A1, $this->monto_a1);
		if ($this->isColumnModified(DocumCcPeer::MONTO_A2)) $criteria->add(DocumCcPeer::MONTO_A2, $this->monto_a2);
		if ($this->isColumnModified(DocumCcPeer::MONTO_BRU)) $criteria->add(DocumCcPeer::MONTO_BRU, $this->monto_bru);
		if ($this->isColumnModified(DocumCcPeer::DESCUENTOS)) $criteria->add(DocumCcPeer::DESCUENTOS, $this->descuentos);
		if ($this->isColumnModified(DocumCcPeer::MONTO_DES)) $criteria->add(DocumCcPeer::MONTO_DES, $this->monto_des);
		if ($this->isColumnModified(DocumCcPeer::RECARGO)) $criteria->add(DocumCcPeer::RECARGO, $this->recargo);
		if ($this->isColumnModified(DocumCcPeer::MONTO_REC)) $criteria->add(DocumCcPeer::MONTO_REC, $this->monto_rec);
		if ($this->isColumnModified(DocumCcPeer::MONTO_OTR)) $criteria->add(DocumCcPeer::MONTO_OTR, $this->monto_otr);
		if ($this->isColumnModified(DocumCcPeer::MONTO_NET)) $criteria->add(DocumCcPeer::MONTO_NET, $this->monto_net);
		if ($this->isColumnModified(DocumCcPeer::SALDO)) $criteria->add(DocumCcPeer::SALDO, $this->saldo);
		if ($this->isColumnModified(DocumCcPeer::FECCOM)) $criteria->add(DocumCcPeer::FECCOM, $this->feccom);
		if ($this->isColumnModified(DocumCcPeer::NUMCOM)) $criteria->add(DocumCcPeer::NUMCOM, $this->numcom);
		if ($this->isColumnModified(DocumCcPeer::DIS_CEN)) $criteria->add(DocumCcPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(DocumCcPeer::COMIS1)) $criteria->add(DocumCcPeer::COMIS1, $this->comis1);
		if ($this->isColumnModified(DocumCcPeer::COMIS2)) $criteria->add(DocumCcPeer::COMIS2, $this->comis2);
		if ($this->isColumnModified(DocumCcPeer::COMIS3)) $criteria->add(DocumCcPeer::COMIS3, $this->comis3);
		if ($this->isColumnModified(DocumCcPeer::COMIS4)) $criteria->add(DocumCcPeer::COMIS4, $this->comis4);
		if ($this->isColumnModified(DocumCcPeer::ADICIONAL)) $criteria->add(DocumCcPeer::ADICIONAL, $this->adicional);
		if ($this->isColumnModified(DocumCcPeer::CAMPO1)) $criteria->add(DocumCcPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(DocumCcPeer::CAMPO2)) $criteria->add(DocumCcPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(DocumCcPeer::CAMPO3)) $criteria->add(DocumCcPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(DocumCcPeer::CAMPO4)) $criteria->add(DocumCcPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(DocumCcPeer::CAMPO5)) $criteria->add(DocumCcPeer::CAMPO5, $this->campo5);
		if ($this->isColumnModified(DocumCcPeer::CAMPO6)) $criteria->add(DocumCcPeer::CAMPO6, $this->campo6);
		if ($this->isColumnModified(DocumCcPeer::CAMPO7)) $criteria->add(DocumCcPeer::CAMPO7, $this->campo7);
		if ($this->isColumnModified(DocumCcPeer::CAMPO8)) $criteria->add(DocumCcPeer::CAMPO8, $this->campo8);
		if ($this->isColumnModified(DocumCcPeer::CO_US_IN)) $criteria->add(DocumCcPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(DocumCcPeer::FE_US_IN)) $criteria->add(DocumCcPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(DocumCcPeer::CO_US_MO)) $criteria->add(DocumCcPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(DocumCcPeer::FE_US_MO)) $criteria->add(DocumCcPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(DocumCcPeer::CO_US_EL)) $criteria->add(DocumCcPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(DocumCcPeer::FE_US_EL)) $criteria->add(DocumCcPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(DocumCcPeer::REVISADO)) $criteria->add(DocumCcPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(DocumCcPeer::TRASNFE)) $criteria->add(DocumCcPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(DocumCcPeer::NUMCON)) $criteria->add(DocumCcPeer::NUMCON, $this->numcon);
		if ($this->isColumnModified(DocumCcPeer::CO_SUCU)) $criteria->add(DocumCcPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(DocumCcPeer::ROWGUID)) $criteria->add(DocumCcPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(DocumCcPeer::MON_ILC)) $criteria->add(DocumCcPeer::MON_ILC, $this->mon_ilc);
		if ($this->isColumnModified(DocumCcPeer::OTROS1)) $criteria->add(DocumCcPeer::OTROS1, $this->otros1);
		if ($this->isColumnModified(DocumCcPeer::OTROS2)) $criteria->add(DocumCcPeer::OTROS2, $this->otros2);
		if ($this->isColumnModified(DocumCcPeer::OTROS3)) $criteria->add(DocumCcPeer::OTROS3, $this->otros3);
		if ($this->isColumnModified(DocumCcPeer::RENG_SI)) $criteria->add(DocumCcPeer::RENG_SI, $this->reng_si);
		if ($this->isColumnModified(DocumCcPeer::COMIS5)) $criteria->add(DocumCcPeer::COMIS5, $this->comis5);
		if ($this->isColumnModified(DocumCcPeer::COMIS6)) $criteria->add(DocumCcPeer::COMIS6, $this->comis6);
		if ($this->isColumnModified(DocumCcPeer::ROW_ID)) $criteria->add(DocumCcPeer::ROW_ID, $this->row_id);
		if ($this->isColumnModified(DocumCcPeer::AUX01)) $criteria->add(DocumCcPeer::AUX01, $this->aux01);
		if ($this->isColumnModified(DocumCcPeer::AUX02)) $criteria->add(DocumCcPeer::AUX02, $this->aux02);
		if ($this->isColumnModified(DocumCcPeer::SALESTAX)) $criteria->add(DocumCcPeer::SALESTAX, $this->salestax);
		if ($this->isColumnModified(DocumCcPeer::ORIGEN)) $criteria->add(DocumCcPeer::ORIGEN, $this->origen);
		if ($this->isColumnModified(DocumCcPeer::ORIGEN_D)) $criteria->add(DocumCcPeer::ORIGEN_D, $this->origen_d);
		if ($this->isColumnModified(DocumCcPeer::FEC_REG)) $criteria->add(DocumCcPeer::FEC_REG, $this->fec_reg);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DocumCcPeer::DATABASE_NAME);

		$criteria->add(DocumCcPeer::TIPO_DOC, $this->tipo_doc);
		$criteria->add(DocumCcPeer::NRO_DOC, $this->nro_doc);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		$pks = array();

		$pks[0] = $this->getTipoDoc();

		$pks[1] = $this->getNroDoc();

		return $pks;
	}

	
	public function setPrimaryKey($keys)
	{

		$this->setTipoDoc($keys[0]);

		$this->setNroDoc($keys[1]);

	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setAnulado($this->anulado);

		$copyObj->setMovi($this->movi);

		$copyObj->setAut($this->aut);

		$copyObj->setNumControl($this->num_control);

		$copyObj->setCoCli($this->co_cli);

		$copyObj->setContrib($this->contrib);

		$copyObj->setFecEmis($this->fec_emis);

		$copyObj->setFecVenc($this->fec_venc);

		$copyObj->setObserva($this->observa);

		$copyObj->setDocOrig($this->doc_orig);

		$copyObj->setNroOrig($this->nro_orig);

		$copyObj->setCoBan($this->co_ban);

		$copyObj->setNroChe($this->nro_che);

		$copyObj->setCoVen($this->co_ven);

		$copyObj->setTipo($this->tipo);

		$copyObj->setTasa($this->tasa);

		$copyObj->setMoneda($this->moneda);

		$copyObj->setMontoImp($this->monto_imp);

		$copyObj->setMontoGen($this->monto_gen);

		$copyObj->setMontoA1($this->monto_a1);

		$copyObj->setMontoA2($this->monto_a2);

		$copyObj->setMontoBru($this->monto_bru);

		$copyObj->setDescuentos($this->descuentos);

		$copyObj->setMontoDes($this->monto_des);

		$copyObj->setRecargo($this->recargo);

		$copyObj->setMontoRec($this->monto_rec);

		$copyObj->setMontoOtr($this->monto_otr);

		$copyObj->setMontoNet($this->monto_net);

		$copyObj->setSaldo($this->saldo);

		$copyObj->setFeccom($this->feccom);

		$copyObj->setNumcom($this->numcom);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setComis1($this->comis1);

		$copyObj->setComis2($this->comis2);

		$copyObj->setComis3($this->comis3);

		$copyObj->setComis4($this->comis4);

		$copyObj->setAdicional($this->adicional);

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

		$copyObj->setRengSi($this->reng_si);

		$copyObj->setComis5($this->comis5);

		$copyObj->setComis6($this->comis6);

		$copyObj->setRowId($this->row_id);

		$copyObj->setAux01($this->aux01);

		$copyObj->setAux02($this->aux02);

		$copyObj->setSalestax($this->salestax);

		$copyObj->setOrigen($this->origen);

		$copyObj->setOrigenD($this->origen_d);

		$copyObj->setFecReg($this->fec_reg);


		$copyObj->setNew(true);

		$copyObj->setTipoDoc(NULL); 
		$copyObj->setNroDoc(NULL); 
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
			self::$peer = new DocumCcPeer();
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

	
	public function setTabulado($v)
	{


		if ($v === null) {
			$this->setTipo('(\'1\')');
		} else {
			$this->setTipo($v->getTipo());
		}


		$this->aTabulado = $v;
	}


	
	public function getTabulado($con = null)
	{
				include_once 'lib/model/om/BaseTabuladoPeer.php';

		if ($this->aTabulado === null && (($this->tipo !== "" && $this->tipo !== null))) {

			$this->aTabulado = TabuladoPeer::retrieveByPK($this->tipo, $con);

			
		}
		return $this->aTabulado;
	}

	
	public function setMoneda($v)
	{


		if ($v === null) {
			$this->setMoneda(' ');
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
			$this->setCoSucu(' ');
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