<?php


abstract class BaseCobros extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $cob_num;


	
	protected $recibo = '(space(1))';


	
	protected $co_cli = '(space(1))';


	
	protected $co_ven = '(space(1))';


	
	protected $fec_cob;


	
	protected $anulado = true;


	
	protected $monto = 0;


	
	protected $dppago = 0;


	
	protected $mont_ncr = 0;


	
	protected $ncr = 0;


	
	protected $tcomi_porc = 0;


	
	protected $tcomi_line = 0;


	
	protected $tcomi_art = 0;


	
	protected $tcomi_conc = 0;


	
	protected $feccom;


	
	protected $tasa = 0;


	
	protected $moneda = '(space(1))';


	
	protected $numcom = 0;


	
	protected $dis_cen = '(space(1))';


	
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


	
	protected $recargo = true;


	
	protected $adel_num = 0;


	
	protected $revisado = '(space(1))';


	
	protected $trasnfe = '(space(1))';


	
	protected $co_sucu = '(space(1))';


	
	protected $rowguid = '(newid())';


	
	protected $descrip = '(space(1))';


	
	protected $num_dev = 0;


	
	protected $devdinero = true;


	
	protected $num_turno = 0;


	
	protected $aux01 = 0;


	
	protected $aux02 = '(space(1))';


	
	protected $origen = '(space(1))';


	
	protected $origen_d = '(space(1))';

	
	protected $aClientes;

	
	protected $aVendedor;

	
	protected $aMoneda;

	
	protected $aAlmacen;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCobNum()
	{

		return $this->cob_num;
	}

	
	public function getRecibo()
	{

		return $this->recibo;
	}

	
	public function getCoCli()
	{

		return $this->co_cli;
	}

	
	public function getCoVen()
	{

		return $this->co_ven;
	}

	
	public function getFecCob($format = 'Y-m-d H:i:s')
	{

		if ($this->fec_cob === null || $this->fec_cob === '') {
			return null;
		} elseif (!is_int($this->fec_cob)) {
						$ts = strtotime($this->fec_cob);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fec_cob] as date/time value: " . var_export($this->fec_cob, true));
			}
		} else {
			$ts = $this->fec_cob;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getAnulado()
	{

		return $this->anulado;
	}

	
	public function getMonto()
	{

		return $this->monto;
	}

	
	public function getDppago()
	{

		return $this->dppago;
	}

	
	public function getMontNcr()
	{

		return $this->mont_ncr;
	}

	
	public function getNcr()
	{

		return $this->ncr;
	}

	
	public function getTcomiPorc()
	{

		return $this->tcomi_porc;
	}

	
	public function getTcomiLine()
	{

		return $this->tcomi_line;
	}

	
	public function getTcomiArt()
	{

		return $this->tcomi_art;
	}

	
	public function getTcomiConc()
	{

		return $this->tcomi_conc;
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

	
	public function getTasa()
	{

		return $this->tasa;
	}

	
	public function getMoneda()
	{

		return $this->moneda;
	}

	
	public function getNumcom()
	{

		return $this->numcom;
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

	
	public function getRecargo()
	{

		return $this->recargo;
	}

	
	public function getAdelNum()
	{

		return $this->adel_num;
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

	
	public function getDescrip()
	{

		return $this->descrip;
	}

	
	public function getNumDev()
	{

		return $this->num_dev;
	}

	
	public function getDevdinero()
	{

		return $this->devdinero;
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

	
	public function getOrigen()
	{

		return $this->origen;
	}

	
	public function getOrigenD()
	{

		return $this->origen_d;
	}

	
	public function setCobNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cob_num !== $v) {
			$this->cob_num = $v;
			$this->modifiedColumns[] = CobrosPeer::COB_NUM;
		}

	} 
	
	public function setRecibo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->recibo !== $v || $v === '(space(1))') {
			$this->recibo = $v;
			$this->modifiedColumns[] = CobrosPeer::RECIBO;
		}

	} 
	
	public function setCoCli($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cli !== $v || $v === '(space(1))') {
			$this->co_cli = $v;
			$this->modifiedColumns[] = CobrosPeer::CO_CLI;
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
			$this->modifiedColumns[] = CobrosPeer::CO_VEN;
		}

		if ($this->aVendedor !== null && $this->aVendedor->getCoVen() !== $v) {
			$this->aVendedor = null;
		}

	} 
	
	public function setFecCob($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_cob] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_cob !== $ts) {
			$this->fec_cob = $ts;
			$this->modifiedColumns[] = CobrosPeer::FEC_COB;
		}

	} 
	
	public function setAnulado($v)
	{

		if ($this->anulado !== $v || $v === true) {
			$this->anulado = $v;
			$this->modifiedColumns[] = CobrosPeer::ANULADO;
		}

	} 
	
	public function setMonto($v)
	{

		if ($this->monto !== $v || $v === 0) {
			$this->monto = $v;
			$this->modifiedColumns[] = CobrosPeer::MONTO;
		}

	} 
	
	public function setDppago($v)
	{

		if ($this->dppago !== $v || $v === 0) {
			$this->dppago = $v;
			$this->modifiedColumns[] = CobrosPeer::DPPAGO;
		}

	} 
	
	public function setMontNcr($v)
	{

		if ($this->mont_ncr !== $v || $v === 0) {
			$this->mont_ncr = $v;
			$this->modifiedColumns[] = CobrosPeer::MONT_NCR;
		}

	} 
	
	public function setNcr($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ncr !== $v || $v === 0) {
			$this->ncr = $v;
			$this->modifiedColumns[] = CobrosPeer::NCR;
		}

	} 
	
	public function setTcomiPorc($v)
	{

		if ($this->tcomi_porc !== $v || $v === 0) {
			$this->tcomi_porc = $v;
			$this->modifiedColumns[] = CobrosPeer::TCOMI_PORC;
		}

	} 
	
	public function setTcomiLine($v)
	{

		if ($this->tcomi_line !== $v || $v === 0) {
			$this->tcomi_line = $v;
			$this->modifiedColumns[] = CobrosPeer::TCOMI_LINE;
		}

	} 
	
	public function setTcomiArt($v)
	{

		if ($this->tcomi_art !== $v || $v === 0) {
			$this->tcomi_art = $v;
			$this->modifiedColumns[] = CobrosPeer::TCOMI_ART;
		}

	} 
	
	public function setTcomiConc($v)
	{

		if ($this->tcomi_conc !== $v || $v === 0) {
			$this->tcomi_conc = $v;
			$this->modifiedColumns[] = CobrosPeer::TCOMI_CONC;
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
			$this->modifiedColumns[] = CobrosPeer::FECCOM;
		}

	} 
	
	public function setTasa($v)
	{

		if ($this->tasa !== $v || $v === 0) {
			$this->tasa = $v;
			$this->modifiedColumns[] = CobrosPeer::TASA;
		}

	} 
	
	public function setMoneda($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moneda !== $v || $v === '(space(1))') {
			$this->moneda = $v;
			$this->modifiedColumns[] = CobrosPeer::MONEDA;
		}

		if ($this->aMoneda !== null && $this->aMoneda->getCoMone() !== $v) {
			$this->aMoneda = null;
		}

	} 
	
	public function setNumcom($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->numcom !== $v || $v === 0) {
			$this->numcom = $v;
			$this->modifiedColumns[] = CobrosPeer::NUMCOM;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === '(space(1))') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = CobrosPeer::DIS_CEN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === '(space(1))') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === '(space(1))') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === '(space(1))') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === '(space(1))') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO4;
		}

	} 
	
	public function setCampo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo5 !== $v || $v === '(space(1))') {
			$this->campo5 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO5;
		}

	} 
	
	public function setCampo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo6 !== $v || $v === '(space(1))') {
			$this->campo6 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO6;
		}

	} 
	
	public function setCampo7($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo7 !== $v || $v === '(space(1))') {
			$this->campo7 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO7;
		}

	} 
	
	public function setCampo8($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo8 !== $v || $v === '(space(1))') {
			$this->campo8 = $v;
			$this->modifiedColumns[] = CobrosPeer::CAMPO8;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === '(space(1))') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = CobrosPeer::CO_US_IN;
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
			$this->modifiedColumns[] = CobrosPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === '(space(1))') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = CobrosPeer::CO_US_MO;
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
			$this->modifiedColumns[] = CobrosPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === '(space(1))') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = CobrosPeer::CO_US_EL;
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
			$this->modifiedColumns[] = CobrosPeer::FE_US_EL;
		}

	} 
	
	public function setRecargo($v)
	{

		if ($this->recargo !== $v || $v === true) {
			$this->recargo = $v;
			$this->modifiedColumns[] = CobrosPeer::RECARGO;
		}

	} 
	
	public function setAdelNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->adel_num !== $v || $v === 0) {
			$this->adel_num = $v;
			$this->modifiedColumns[] = CobrosPeer::ADEL_NUM;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === '(space(1))') {
			$this->revisado = $v;
			$this->modifiedColumns[] = CobrosPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === '(space(1))') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = CobrosPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === '(space(1))') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = CobrosPeer::CO_SUCU;
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
			$this->modifiedColumns[] = CobrosPeer::ROWGUID;
		}

	} 
	
	public function setDescrip($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descrip !== $v || $v === '(space(1))') {
			$this->descrip = $v;
			$this->modifiedColumns[] = CobrosPeer::DESCRIP;
		}

	} 
	
	public function setNumDev($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_dev !== $v || $v === 0) {
			$this->num_dev = $v;
			$this->modifiedColumns[] = CobrosPeer::NUM_DEV;
		}

	} 
	
	public function setDevdinero($v)
	{

		if ($this->devdinero !== $v || $v === true) {
			$this->devdinero = $v;
			$this->modifiedColumns[] = CobrosPeer::DEVDINERO;
		}

	} 
	
	public function setNumTurno($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_turno !== $v || $v === 0) {
			$this->num_turno = $v;
			$this->modifiedColumns[] = CobrosPeer::NUM_TURNO;
		}

	} 
	
	public function setAux01($v)
	{

		if ($this->aux01 !== $v || $v === 0) {
			$this->aux01 = $v;
			$this->modifiedColumns[] = CobrosPeer::AUX01;
		}

	} 
	
	public function setAux02($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->aux02 !== $v || $v === '(space(1))') {
			$this->aux02 = $v;
			$this->modifiedColumns[] = CobrosPeer::AUX02;
		}

	} 
	
	public function setOrigen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->origen !== $v || $v === '(space(1))') {
			$this->origen = $v;
			$this->modifiedColumns[] = CobrosPeer::ORIGEN;
		}

	} 
	
	public function setOrigenD($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->origen_d !== $v || $v === '(space(1))') {
			$this->origen_d = $v;
			$this->modifiedColumns[] = CobrosPeer::ORIGEN_D;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->cob_num = $rs->getInt($startcol + 0);

			$this->recibo = $rs->getString($startcol + 1);

			$this->co_cli = $rs->getString($startcol + 2);

			$this->co_ven = $rs->getString($startcol + 3);

			$this->fec_cob = $rs->getTimestamp($startcol + 4, null);

			$this->anulado = $rs->getBoolean($startcol + 5);

			$this->monto = $rs->getFloat($startcol + 6);

			$this->dppago = $rs->getFloat($startcol + 7);

			$this->mont_ncr = $rs->getFloat($startcol + 8);

			$this->ncr = $rs->getInt($startcol + 9);

			$this->tcomi_porc = $rs->getFloat($startcol + 10);

			$this->tcomi_line = $rs->getFloat($startcol + 11);

			$this->tcomi_art = $rs->getFloat($startcol + 12);

			$this->tcomi_conc = $rs->getFloat($startcol + 13);

			$this->feccom = $rs->getTimestamp($startcol + 14, null);

			$this->tasa = $rs->getFloat($startcol + 15);

			$this->moneda = $rs->getString($startcol + 16);

			$this->numcom = $rs->getInt($startcol + 17);

			$this->dis_cen = $rs->getString($startcol + 18);

			$this->campo1 = $rs->getString($startcol + 19);

			$this->campo2 = $rs->getString($startcol + 20);

			$this->campo3 = $rs->getString($startcol + 21);

			$this->campo4 = $rs->getString($startcol + 22);

			$this->campo5 = $rs->getString($startcol + 23);

			$this->campo6 = $rs->getString($startcol + 24);

			$this->campo7 = $rs->getString($startcol + 25);

			$this->campo8 = $rs->getString($startcol + 26);

			$this->co_us_in = $rs->getString($startcol + 27);

			$this->fe_us_in = $rs->getTimestamp($startcol + 28, null);

			$this->co_us_mo = $rs->getString($startcol + 29);

			$this->fe_us_mo = $rs->getTimestamp($startcol + 30, null);

			$this->co_us_el = $rs->getString($startcol + 31);

			$this->fe_us_el = $rs->getTimestamp($startcol + 32, null);

			$this->recargo = $rs->getBoolean($startcol + 33);

			$this->adel_num = $rs->getInt($startcol + 34);

			$this->revisado = $rs->getString($startcol + 35);

			$this->trasnfe = $rs->getString($startcol + 36);

			$this->co_sucu = $rs->getString($startcol + 37);

			$this->rowguid = $rs->getString($startcol + 38);

			$this->descrip = $rs->getString($startcol + 39);

			$this->num_dev = $rs->getInt($startcol + 40);

			$this->devdinero = $rs->getBoolean($startcol + 41);

			$this->num_turno = $rs->getInt($startcol + 42);

			$this->aux01 = $rs->getFloat($startcol + 43);

			$this->aux02 = $rs->getString($startcol + 44);

			$this->origen = $rs->getString($startcol + 45);

			$this->origen_d = $rs->getString($startcol + 46);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 47; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Cobros object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CobrosPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CobrosPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CobrosPeer::DATABASE_NAME);
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
					$pk = CobrosPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += CobrosPeer::doUpdate($this, $con);
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


			if (($retval = CobrosPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CobrosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCobNum();
				break;
			case 1:
				return $this->getRecibo();
				break;
			case 2:
				return $this->getCoCli();
				break;
			case 3:
				return $this->getCoVen();
				break;
			case 4:
				return $this->getFecCob();
				break;
			case 5:
				return $this->getAnulado();
				break;
			case 6:
				return $this->getMonto();
				break;
			case 7:
				return $this->getDppago();
				break;
			case 8:
				return $this->getMontNcr();
				break;
			case 9:
				return $this->getNcr();
				break;
			case 10:
				return $this->getTcomiPorc();
				break;
			case 11:
				return $this->getTcomiLine();
				break;
			case 12:
				return $this->getTcomiArt();
				break;
			case 13:
				return $this->getTcomiConc();
				break;
			case 14:
				return $this->getFeccom();
				break;
			case 15:
				return $this->getTasa();
				break;
			case 16:
				return $this->getMoneda();
				break;
			case 17:
				return $this->getNumcom();
				break;
			case 18:
				return $this->getDisCen();
				break;
			case 19:
				return $this->getCampo1();
				break;
			case 20:
				return $this->getCampo2();
				break;
			case 21:
				return $this->getCampo3();
				break;
			case 22:
				return $this->getCampo4();
				break;
			case 23:
				return $this->getCampo5();
				break;
			case 24:
				return $this->getCampo6();
				break;
			case 25:
				return $this->getCampo7();
				break;
			case 26:
				return $this->getCampo8();
				break;
			case 27:
				return $this->getCoUsIn();
				break;
			case 28:
				return $this->getFeUsIn();
				break;
			case 29:
				return $this->getCoUsMo();
				break;
			case 30:
				return $this->getFeUsMo();
				break;
			case 31:
				return $this->getCoUsEl();
				break;
			case 32:
				return $this->getFeUsEl();
				break;
			case 33:
				return $this->getRecargo();
				break;
			case 34:
				return $this->getAdelNum();
				break;
			case 35:
				return $this->getRevisado();
				break;
			case 36:
				return $this->getTrasnfe();
				break;
			case 37:
				return $this->getCoSucu();
				break;
			case 38:
				return $this->getRowguid();
				break;
			case 39:
				return $this->getDescrip();
				break;
			case 40:
				return $this->getNumDev();
				break;
			case 41:
				return $this->getDevdinero();
				break;
			case 42:
				return $this->getNumTurno();
				break;
			case 43:
				return $this->getAux01();
				break;
			case 44:
				return $this->getAux02();
				break;
			case 45:
				return $this->getOrigen();
				break;
			case 46:
				return $this->getOrigenD();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CobrosPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCobNum(),
			$keys[1] => $this->getRecibo(),
			$keys[2] => $this->getCoCli(),
			$keys[3] => $this->getCoVen(),
			$keys[4] => $this->getFecCob(),
			$keys[5] => $this->getAnulado(),
			$keys[6] => $this->getMonto(),
			$keys[7] => $this->getDppago(),
			$keys[8] => $this->getMontNcr(),
			$keys[9] => $this->getNcr(),
			$keys[10] => $this->getTcomiPorc(),
			$keys[11] => $this->getTcomiLine(),
			$keys[12] => $this->getTcomiArt(),
			$keys[13] => $this->getTcomiConc(),
			$keys[14] => $this->getFeccom(),
			$keys[15] => $this->getTasa(),
			$keys[16] => $this->getMoneda(),
			$keys[17] => $this->getNumcom(),
			$keys[18] => $this->getDisCen(),
			$keys[19] => $this->getCampo1(),
			$keys[20] => $this->getCampo2(),
			$keys[21] => $this->getCampo3(),
			$keys[22] => $this->getCampo4(),
			$keys[23] => $this->getCampo5(),
			$keys[24] => $this->getCampo6(),
			$keys[25] => $this->getCampo7(),
			$keys[26] => $this->getCampo8(),
			$keys[27] => $this->getCoUsIn(),
			$keys[28] => $this->getFeUsIn(),
			$keys[29] => $this->getCoUsMo(),
			$keys[30] => $this->getFeUsMo(),
			$keys[31] => $this->getCoUsEl(),
			$keys[32] => $this->getFeUsEl(),
			$keys[33] => $this->getRecargo(),
			$keys[34] => $this->getAdelNum(),
			$keys[35] => $this->getRevisado(),
			$keys[36] => $this->getTrasnfe(),
			$keys[37] => $this->getCoSucu(),
			$keys[38] => $this->getRowguid(),
			$keys[39] => $this->getDescrip(),
			$keys[40] => $this->getNumDev(),
			$keys[41] => $this->getDevdinero(),
			$keys[42] => $this->getNumTurno(),
			$keys[43] => $this->getAux01(),
			$keys[44] => $this->getAux02(),
			$keys[45] => $this->getOrigen(),
			$keys[46] => $this->getOrigenD(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CobrosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCobNum($value);
				break;
			case 1:
				$this->setRecibo($value);
				break;
			case 2:
				$this->setCoCli($value);
				break;
			case 3:
				$this->setCoVen($value);
				break;
			case 4:
				$this->setFecCob($value);
				break;
			case 5:
				$this->setAnulado($value);
				break;
			case 6:
				$this->setMonto($value);
				break;
			case 7:
				$this->setDppago($value);
				break;
			case 8:
				$this->setMontNcr($value);
				break;
			case 9:
				$this->setNcr($value);
				break;
			case 10:
				$this->setTcomiPorc($value);
				break;
			case 11:
				$this->setTcomiLine($value);
				break;
			case 12:
				$this->setTcomiArt($value);
				break;
			case 13:
				$this->setTcomiConc($value);
				break;
			case 14:
				$this->setFeccom($value);
				break;
			case 15:
				$this->setTasa($value);
				break;
			case 16:
				$this->setMoneda($value);
				break;
			case 17:
				$this->setNumcom($value);
				break;
			case 18:
				$this->setDisCen($value);
				break;
			case 19:
				$this->setCampo1($value);
				break;
			case 20:
				$this->setCampo2($value);
				break;
			case 21:
				$this->setCampo3($value);
				break;
			case 22:
				$this->setCampo4($value);
				break;
			case 23:
				$this->setCampo5($value);
				break;
			case 24:
				$this->setCampo6($value);
				break;
			case 25:
				$this->setCampo7($value);
				break;
			case 26:
				$this->setCampo8($value);
				break;
			case 27:
				$this->setCoUsIn($value);
				break;
			case 28:
				$this->setFeUsIn($value);
				break;
			case 29:
				$this->setCoUsMo($value);
				break;
			case 30:
				$this->setFeUsMo($value);
				break;
			case 31:
				$this->setCoUsEl($value);
				break;
			case 32:
				$this->setFeUsEl($value);
				break;
			case 33:
				$this->setRecargo($value);
				break;
			case 34:
				$this->setAdelNum($value);
				break;
			case 35:
				$this->setRevisado($value);
				break;
			case 36:
				$this->setTrasnfe($value);
				break;
			case 37:
				$this->setCoSucu($value);
				break;
			case 38:
				$this->setRowguid($value);
				break;
			case 39:
				$this->setDescrip($value);
				break;
			case 40:
				$this->setNumDev($value);
				break;
			case 41:
				$this->setDevdinero($value);
				break;
			case 42:
				$this->setNumTurno($value);
				break;
			case 43:
				$this->setAux01($value);
				break;
			case 44:
				$this->setAux02($value);
				break;
			case 45:
				$this->setOrigen($value);
				break;
			case 46:
				$this->setOrigenD($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CobrosPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCobNum($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRecibo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCoCli($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCoVen($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFecCob($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAnulado($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMonto($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDppago($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMontNcr($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNcr($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTcomiPorc($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTcomiLine($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTcomiArt($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setTcomiConc($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFeccom($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTasa($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setMoneda($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setNumcom($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDisCen($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCampo1($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCampo2($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCampo3($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setCampo4($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setCampo5($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setCampo6($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setCampo7($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setCampo8($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCoUsIn($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setFeUsIn($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setCoUsMo($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setFeUsMo($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCoUsEl($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setFeUsEl($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setRecargo($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setAdelNum($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setRevisado($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setTrasnfe($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setCoSucu($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setRowguid($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setDescrip($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setNumDev($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setDevdinero($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setNumTurno($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setAux01($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setAux02($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setOrigen($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setOrigenD($arr[$keys[46]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CobrosPeer::DATABASE_NAME);

		if ($this->isColumnModified(CobrosPeer::COB_NUM)) $criteria->add(CobrosPeer::COB_NUM, $this->cob_num);
		if ($this->isColumnModified(CobrosPeer::RECIBO)) $criteria->add(CobrosPeer::RECIBO, $this->recibo);
		if ($this->isColumnModified(CobrosPeer::CO_CLI)) $criteria->add(CobrosPeer::CO_CLI, $this->co_cli);
		if ($this->isColumnModified(CobrosPeer::CO_VEN)) $criteria->add(CobrosPeer::CO_VEN, $this->co_ven);
		if ($this->isColumnModified(CobrosPeer::FEC_COB)) $criteria->add(CobrosPeer::FEC_COB, $this->fec_cob);
		if ($this->isColumnModified(CobrosPeer::ANULADO)) $criteria->add(CobrosPeer::ANULADO, $this->anulado);
		if ($this->isColumnModified(CobrosPeer::MONTO)) $criteria->add(CobrosPeer::MONTO, $this->monto);
		if ($this->isColumnModified(CobrosPeer::DPPAGO)) $criteria->add(CobrosPeer::DPPAGO, $this->dppago);
		if ($this->isColumnModified(CobrosPeer::MONT_NCR)) $criteria->add(CobrosPeer::MONT_NCR, $this->mont_ncr);
		if ($this->isColumnModified(CobrosPeer::NCR)) $criteria->add(CobrosPeer::NCR, $this->ncr);
		if ($this->isColumnModified(CobrosPeer::TCOMI_PORC)) $criteria->add(CobrosPeer::TCOMI_PORC, $this->tcomi_porc);
		if ($this->isColumnModified(CobrosPeer::TCOMI_LINE)) $criteria->add(CobrosPeer::TCOMI_LINE, $this->tcomi_line);
		if ($this->isColumnModified(CobrosPeer::TCOMI_ART)) $criteria->add(CobrosPeer::TCOMI_ART, $this->tcomi_art);
		if ($this->isColumnModified(CobrosPeer::TCOMI_CONC)) $criteria->add(CobrosPeer::TCOMI_CONC, $this->tcomi_conc);
		if ($this->isColumnModified(CobrosPeer::FECCOM)) $criteria->add(CobrosPeer::FECCOM, $this->feccom);
		if ($this->isColumnModified(CobrosPeer::TASA)) $criteria->add(CobrosPeer::TASA, $this->tasa);
		if ($this->isColumnModified(CobrosPeer::MONEDA)) $criteria->add(CobrosPeer::MONEDA, $this->moneda);
		if ($this->isColumnModified(CobrosPeer::NUMCOM)) $criteria->add(CobrosPeer::NUMCOM, $this->numcom);
		if ($this->isColumnModified(CobrosPeer::DIS_CEN)) $criteria->add(CobrosPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(CobrosPeer::CAMPO1)) $criteria->add(CobrosPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(CobrosPeer::CAMPO2)) $criteria->add(CobrosPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(CobrosPeer::CAMPO3)) $criteria->add(CobrosPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(CobrosPeer::CAMPO4)) $criteria->add(CobrosPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(CobrosPeer::CAMPO5)) $criteria->add(CobrosPeer::CAMPO5, $this->campo5);
		if ($this->isColumnModified(CobrosPeer::CAMPO6)) $criteria->add(CobrosPeer::CAMPO6, $this->campo6);
		if ($this->isColumnModified(CobrosPeer::CAMPO7)) $criteria->add(CobrosPeer::CAMPO7, $this->campo7);
		if ($this->isColumnModified(CobrosPeer::CAMPO8)) $criteria->add(CobrosPeer::CAMPO8, $this->campo8);
		if ($this->isColumnModified(CobrosPeer::CO_US_IN)) $criteria->add(CobrosPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(CobrosPeer::FE_US_IN)) $criteria->add(CobrosPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(CobrosPeer::CO_US_MO)) $criteria->add(CobrosPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(CobrosPeer::FE_US_MO)) $criteria->add(CobrosPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(CobrosPeer::CO_US_EL)) $criteria->add(CobrosPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(CobrosPeer::FE_US_EL)) $criteria->add(CobrosPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(CobrosPeer::RECARGO)) $criteria->add(CobrosPeer::RECARGO, $this->recargo);
		if ($this->isColumnModified(CobrosPeer::ADEL_NUM)) $criteria->add(CobrosPeer::ADEL_NUM, $this->adel_num);
		if ($this->isColumnModified(CobrosPeer::REVISADO)) $criteria->add(CobrosPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(CobrosPeer::TRASNFE)) $criteria->add(CobrosPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(CobrosPeer::CO_SUCU)) $criteria->add(CobrosPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(CobrosPeer::ROWGUID)) $criteria->add(CobrosPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(CobrosPeer::DESCRIP)) $criteria->add(CobrosPeer::DESCRIP, $this->descrip);
		if ($this->isColumnModified(CobrosPeer::NUM_DEV)) $criteria->add(CobrosPeer::NUM_DEV, $this->num_dev);
		if ($this->isColumnModified(CobrosPeer::DEVDINERO)) $criteria->add(CobrosPeer::DEVDINERO, $this->devdinero);
		if ($this->isColumnModified(CobrosPeer::NUM_TURNO)) $criteria->add(CobrosPeer::NUM_TURNO, $this->num_turno);
		if ($this->isColumnModified(CobrosPeer::AUX01)) $criteria->add(CobrosPeer::AUX01, $this->aux01);
		if ($this->isColumnModified(CobrosPeer::AUX02)) $criteria->add(CobrosPeer::AUX02, $this->aux02);
		if ($this->isColumnModified(CobrosPeer::ORIGEN)) $criteria->add(CobrosPeer::ORIGEN, $this->origen);
		if ($this->isColumnModified(CobrosPeer::ORIGEN_D)) $criteria->add(CobrosPeer::ORIGEN_D, $this->origen_d);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CobrosPeer::DATABASE_NAME);

		$criteria->add(CobrosPeer::COB_NUM, $this->cob_num);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCobNum();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCobNum($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setRecibo($this->recibo);

		$copyObj->setCoCli($this->co_cli);

		$copyObj->setCoVen($this->co_ven);

		$copyObj->setFecCob($this->fec_cob);

		$copyObj->setAnulado($this->anulado);

		$copyObj->setMonto($this->monto);

		$copyObj->setDppago($this->dppago);

		$copyObj->setMontNcr($this->mont_ncr);

		$copyObj->setNcr($this->ncr);

		$copyObj->setTcomiPorc($this->tcomi_porc);

		$copyObj->setTcomiLine($this->tcomi_line);

		$copyObj->setTcomiArt($this->tcomi_art);

		$copyObj->setTcomiConc($this->tcomi_conc);

		$copyObj->setFeccom($this->feccom);

		$copyObj->setTasa($this->tasa);

		$copyObj->setMoneda($this->moneda);

		$copyObj->setNumcom($this->numcom);

		$copyObj->setDisCen($this->dis_cen);

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

		$copyObj->setRecargo($this->recargo);

		$copyObj->setAdelNum($this->adel_num);

		$copyObj->setRevisado($this->revisado);

		$copyObj->setTrasnfe($this->trasnfe);

		$copyObj->setCoSucu($this->co_sucu);

		$copyObj->setRowguid($this->rowguid);

		$copyObj->setDescrip($this->descrip);

		$copyObj->setNumDev($this->num_dev);

		$copyObj->setDevdinero($this->devdinero);

		$copyObj->setNumTurno($this->num_turno);

		$copyObj->setAux01($this->aux01);

		$copyObj->setAux02($this->aux02);

		$copyObj->setOrigen($this->origen);

		$copyObj->setOrigenD($this->origen_d);


		$copyObj->setNew(true);

		$copyObj->setCobNum(NULL); 
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
			self::$peer = new CobrosPeer();
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