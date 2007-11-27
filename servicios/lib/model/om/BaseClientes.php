<?php


abstract class BaseClientes extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_cli;


	
	protected $tipo = '(space(1))';


	
	protected $cli_des = '(space(1))';


	
	protected $direc1 = '(space(1))';


	
	protected $direc2 = '(space(1))';


	
	protected $telefonos = '(space(1))';


	
	protected $fax = '(space(1))';


	
	protected $inactivo = true;


	
	protected $comentario = '(space(1))';


	
	protected $respons = '(space(1))';


	
	protected $fecha_reg;


	
	protected $puntaje = 0;


	
	protected $saldo = 0;


	
	protected $saldo_ini = 0;


	
	protected $fac_ult_ve = 0;


	
	protected $fec_ult_ve;


	
	protected $net_ult_ve = 0;


	
	protected $mont_cre = 0;


	
	protected $plaz_pag = 0;


	
	protected $desc_ppago = 0;


	
	protected $co_zon = '(space(1))';


	
	protected $co_seg = '(space(1))';


	
	protected $co_ven = '(space(1))';


	
	protected $desc_glob = 0;


	
	protected $horar_caja = '(space(1))';


	
	protected $frecu_vist = '(space(1))';


	
	protected $lunes = true;


	
	protected $martes = true;


	
	protected $miercoles = true;


	
	protected $jueves = true;


	
	protected $viernes = true;


	
	protected $sabado = true;


	
	protected $domingo = true;


	
	protected $dir_ent2 = '(space(1))';


	
	protected $tipo_iva = '(space(1))';


	
	protected $iva = 0;


	
	protected $rif = '(space(1))';


	
	protected $contribu = true;


	
	protected $dis_cen = '(space(1))';


	
	protected $nit = '(space(1))';


	
	protected $email = '(space(1))';


	
	protected $co_ingr = '(space(1))';


	
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


	
	protected $co_sucu = '(space(1))';


	
	protected $rowguid = '(newid())';


	
	protected $juridico = true;


	
	protected $tipo_adi = 0;


	
	protected $matriz = '(space(1))';


	
	protected $co_tab = 0;


	
	protected $tipo_per = '(space(1))';


	
	protected $serialp = '(space(0))';


	
	protected $valido = true;


	
	protected $row_id;


	
	protected $estado = '(\'A\')';


	
	protected $id = 0;


	
	protected $co_pais = '(space(1))';


	
	protected $ciudad = '(space(1))';


	
	protected $zip = '(space(1))';


	
	protected $login = '(space(1))';


	
	protected $password = '(space(1))';


	
	protected $website = '(space(1))';


	
	protected $salestax = '(space(1))';


	
	protected $contribu_e = true;


	
	protected $porc_esp = 0;

	
	protected $aTipoCli;

	
	protected $aZona;

	
	protected $aSegmento;

	
	protected $aVendedor;

	
	protected $aCtaIngr;

	
	protected $collFacturas;

	
	protected $lastFacturaCriteria = null;

	
	protected $collDocumCcs;

	
	protected $lastDocumCcCriteria = null;

	
	protected $collCobross;

	
	protected $lastCobrosCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoCli()
	{

		return $this->co_cli;
	}

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getCliDes()
	{

		return $this->cli_des;
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

	
	public function getFax()
	{

		return $this->fax;
	}

	
	public function getInactivo()
	{

		return $this->inactivo;
	}

	
	public function getComentario()
	{

		return $this->comentario;
	}

	
	public function getRespons()
	{

		return $this->respons;
	}

	
	public function getFechaReg($format = 'Y-m-d H:i:s')
	{

		if ($this->fecha_reg === null || $this->fecha_reg === '') {
			return null;
		} elseif (!is_int($this->fecha_reg)) {
						$ts = strtotime($this->fecha_reg);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_reg] as date/time value: " . var_export($this->fecha_reg, true));
			}
		} else {
			$ts = $this->fecha_reg;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPuntaje()
	{

		return $this->puntaje;
	}

	
	public function getSaldo()
	{

		return $this->saldo;
	}

	
	public function getSaldoIni()
	{

		return $this->saldo_ini;
	}

	
	public function getFacUltVe()
	{

		return $this->fac_ult_ve;
	}

	
	public function getFecUltVe($format = 'Y-m-d H:i:s')
	{

		if ($this->fec_ult_ve === null || $this->fec_ult_ve === '') {
			return null;
		} elseif (!is_int($this->fec_ult_ve)) {
						$ts = strtotime($this->fec_ult_ve);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fec_ult_ve] as date/time value: " . var_export($this->fec_ult_ve, true));
			}
		} else {
			$ts = $this->fec_ult_ve;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getNetUltVe()
	{

		return $this->net_ult_ve;
	}

	
	public function getMontCre()
	{

		return $this->mont_cre;
	}

	
	public function getPlazPag()
	{

		return $this->plaz_pag;
	}

	
	public function getDescPpago()
	{

		return $this->desc_ppago;
	}

	
	public function getCoZon()
	{

		return $this->co_zon;
	}

	
	public function getCoSeg()
	{

		return $this->co_seg;
	}

	
	public function getCoVen()
	{

		return $this->co_ven;
	}

	
	public function getDescGlob()
	{

		return $this->desc_glob;
	}

	
	public function getHorarCaja()
	{

		return $this->horar_caja;
	}

	
	public function getFrecuVist()
	{

		return $this->frecu_vist;
	}

	
	public function getLunes()
	{

		return $this->lunes;
	}

	
	public function getMartes()
	{

		return $this->martes;
	}

	
	public function getMiercoles()
	{

		return $this->miercoles;
	}

	
	public function getJueves()
	{

		return $this->jueves;
	}

	
	public function getViernes()
	{

		return $this->viernes;
	}

	
	public function getSabado()
	{

		return $this->sabado;
	}

	
	public function getDomingo()
	{

		return $this->domingo;
	}

	
	public function getDirEnt2()
	{

		return $this->dir_ent2;
	}

	
	public function getTipoIva()
	{

		return $this->tipo_iva;
	}

	
	public function getIva()
	{

		return $this->iva;
	}

	
	public function getRif()
	{

		return $this->rif;
	}

	
	public function getContribu()
	{

		return $this->contribu;
	}

	
	public function getDisCen()
	{

		return $this->dis_cen;
	}

	
	public function getNit()
	{

		return $this->nit;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getCoIngr()
	{

		return $this->co_ingr;
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

	
	public function getCoSucu()
	{

		return $this->co_sucu;
	}

	
	public function getRowguid()
	{

		return $this->rowguid;
	}

	
	public function getJuridico()
	{

		return $this->juridico;
	}

	
	public function getTipoAdi()
	{

		return $this->tipo_adi;
	}

	
	public function getMatriz()
	{

		return $this->matriz;
	}

	
	public function getCoTab()
	{

		return $this->co_tab;
	}

	
	public function getTipoPer()
	{

		return $this->tipo_per;
	}

	
	public function getSerialp()
	{

		return $this->serialp;
	}

	
	public function getValido()
	{

		return $this->valido;
	}

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function getEstado()
	{

		return $this->estado;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCoPais()
	{

		return $this->co_pais;
	}

	
	public function getCiudad()
	{

		return $this->ciudad;
	}

	
	public function getZip()
	{

		return $this->zip;
	}

	
	public function getLogin()
	{

		return $this->login;
	}

	
	public function getPassword()
	{

		return $this->password;
	}

	
	public function getWebsite()
	{

		return $this->website;
	}

	
	public function getSalestax()
	{

		return $this->salestax;
	}

	
	public function getContribuE()
	{

		return $this->contribu_e;
	}

	
	public function getPorcEsp()
	{

		return $this->porc_esp;
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
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v || $v === '(space(1))') {
			$this->tipo = $v;
			$this->modifiedColumns[] = ClientesPeer::TIPO;
		}

		if ($this->aTipoCli !== null && $this->aTipoCli->getTipCli() !== $v) {
			$this->aTipoCli = null;
		}

	} 
	
	public function setCliDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cli_des !== $v || $v === '(space(1))') {
			$this->cli_des = $v;
			$this->modifiedColumns[] = ClientesPeer::CLI_DES;
		}

	} 
	
	public function setDirec1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->direc1 !== $v || $v === '(space(1))') {
			$this->direc1 = $v;
			$this->modifiedColumns[] = ClientesPeer::DIREC1;
		}

	} 
	
	public function setDirec2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->direc2 !== $v || $v === '(space(1))') {
			$this->direc2 = $v;
			$this->modifiedColumns[] = ClientesPeer::DIREC2;
		}

	} 
	
	public function setTelefonos($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->telefonos !== $v || $v === '(space(1))') {
			$this->telefonos = $v;
			$this->modifiedColumns[] = ClientesPeer::TELEFONOS;
		}

	} 
	
	public function setFax($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fax !== $v || $v === '(space(1))') {
			$this->fax = $v;
			$this->modifiedColumns[] = ClientesPeer::FAX;
		}

	} 
	
	public function setInactivo($v)
	{

		if ($this->inactivo !== $v || $v === true) {
			$this->inactivo = $v;
			$this->modifiedColumns[] = ClientesPeer::INACTIVO;
		}

	} 
	
	public function setComentario($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comentario !== $v || $v === '(space(1))') {
			$this->comentario = $v;
			$this->modifiedColumns[] = ClientesPeer::COMENTARIO;
		}

	} 
	
	public function setRespons($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->respons !== $v || $v === '(space(1))') {
			$this->respons = $v;
			$this->modifiedColumns[] = ClientesPeer::RESPONS;
		}

	} 
	
	public function setFechaReg($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_reg] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_reg !== $ts) {
			$this->fecha_reg = $ts;
			$this->modifiedColumns[] = ClientesPeer::FECHA_REG;
		}

	} 
	
	public function setPuntaje($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->puntaje !== $v || $v === 0) {
			$this->puntaje = $v;
			$this->modifiedColumns[] = ClientesPeer::PUNTAJE;
		}

	} 
	
	public function setSaldo($v)
	{

		if ($this->saldo !== $v || $v === 0) {
			$this->saldo = $v;
			$this->modifiedColumns[] = ClientesPeer::SALDO;
		}

	} 
	
	public function setSaldoIni($v)
	{

		if ($this->saldo_ini !== $v || $v === 0) {
			$this->saldo_ini = $v;
			$this->modifiedColumns[] = ClientesPeer::SALDO_INI;
		}

	} 
	
	public function setFacUltVe($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fac_ult_ve !== $v || $v === 0) {
			$this->fac_ult_ve = $v;
			$this->modifiedColumns[] = ClientesPeer::FAC_ULT_VE;
		}

	} 
	
	public function setFecUltVe($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_ult_ve] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_ult_ve !== $ts) {
			$this->fec_ult_ve = $ts;
			$this->modifiedColumns[] = ClientesPeer::FEC_ULT_VE;
		}

	} 
	
	public function setNetUltVe($v)
	{

		if ($this->net_ult_ve !== $v || $v === 0) {
			$this->net_ult_ve = $v;
			$this->modifiedColumns[] = ClientesPeer::NET_ULT_VE;
		}

	} 
	
	public function setMontCre($v)
	{

		if ($this->mont_cre !== $v || $v === 0) {
			$this->mont_cre = $v;
			$this->modifiedColumns[] = ClientesPeer::MONT_CRE;
		}

	} 
	
	public function setPlazPag($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->plaz_pag !== $v || $v === 0) {
			$this->plaz_pag = $v;
			$this->modifiedColumns[] = ClientesPeer::PLAZ_PAG;
		}

	} 
	
	public function setDescPpago($v)
	{

		if ($this->desc_ppago !== $v || $v === 0) {
			$this->desc_ppago = $v;
			$this->modifiedColumns[] = ClientesPeer::DESC_PPAGO;
		}

	} 
	
	public function setCoZon($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_zon !== $v || $v === '(space(1))') {
			$this->co_zon = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_ZON;
		}

		if ($this->aZona !== null && $this->aZona->getCoZon() !== $v) {
			$this->aZona = null;
		}

	} 
	
	public function setCoSeg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_seg !== $v || $v === '(space(1))') {
			$this->co_seg = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_SEG;
		}

		if ($this->aSegmento !== null && $this->aSegmento->getCoSeg() !== $v) {
			$this->aSegmento = null;
		}

	} 
	
	public function setCoVen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ven !== $v || $v === '(space(1))') {
			$this->co_ven = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_VEN;
		}

		if ($this->aVendedor !== null && $this->aVendedor->getCoVen() !== $v) {
			$this->aVendedor = null;
		}

	} 
	
	public function setDescGlob($v)
	{

		if ($this->desc_glob !== $v || $v === 0) {
			$this->desc_glob = $v;
			$this->modifiedColumns[] = ClientesPeer::DESC_GLOB;
		}

	} 
	
	public function setHorarCaja($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->horar_caja !== $v || $v === '(space(1))') {
			$this->horar_caja = $v;
			$this->modifiedColumns[] = ClientesPeer::HORAR_CAJA;
		}

	} 
	
	public function setFrecuVist($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->frecu_vist !== $v || $v === '(space(1))') {
			$this->frecu_vist = $v;
			$this->modifiedColumns[] = ClientesPeer::FRECU_VIST;
		}

	} 
	
	public function setLunes($v)
	{

		if ($this->lunes !== $v || $v === true) {
			$this->lunes = $v;
			$this->modifiedColumns[] = ClientesPeer::LUNES;
		}

	} 
	
	public function setMartes($v)
	{

		if ($this->martes !== $v || $v === true) {
			$this->martes = $v;
			$this->modifiedColumns[] = ClientesPeer::MARTES;
		}

	} 
	
	public function setMiercoles($v)
	{

		if ($this->miercoles !== $v || $v === true) {
			$this->miercoles = $v;
			$this->modifiedColumns[] = ClientesPeer::MIERCOLES;
		}

	} 
	
	public function setJueves($v)
	{

		if ($this->jueves !== $v || $v === true) {
			$this->jueves = $v;
			$this->modifiedColumns[] = ClientesPeer::JUEVES;
		}

	} 
	
	public function setViernes($v)
	{

		if ($this->viernes !== $v || $v === true) {
			$this->viernes = $v;
			$this->modifiedColumns[] = ClientesPeer::VIERNES;
		}

	} 
	
	public function setSabado($v)
	{

		if ($this->sabado !== $v || $v === true) {
			$this->sabado = $v;
			$this->modifiedColumns[] = ClientesPeer::SABADO;
		}

	} 
	
	public function setDomingo($v)
	{

		if ($this->domingo !== $v || $v === true) {
			$this->domingo = $v;
			$this->modifiedColumns[] = ClientesPeer::DOMINGO;
		}

	} 
	
	public function setDirEnt2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dir_ent2 !== $v || $v === '(space(1))') {
			$this->dir_ent2 = $v;
			$this->modifiedColumns[] = ClientesPeer::DIR_ENT2;
		}

	} 
	
	public function setTipoIva($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_iva !== $v || $v === '(space(1))') {
			$this->tipo_iva = $v;
			$this->modifiedColumns[] = ClientesPeer::TIPO_IVA;
		}

	} 
	
	public function setIva($v)
	{

		if ($this->iva !== $v || $v === 0) {
			$this->iva = $v;
			$this->modifiedColumns[] = ClientesPeer::IVA;
		}

	} 
	
	public function setRif($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rif !== $v || $v === '(space(1))') {
			$this->rif = $v;
			$this->modifiedColumns[] = ClientesPeer::RIF;
		}

	} 
	
	public function setContribu($v)
	{

		if ($this->contribu !== $v || $v === true) {
			$this->contribu = $v;
			$this->modifiedColumns[] = ClientesPeer::CONTRIBU;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === '(space(1))') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = ClientesPeer::DIS_CEN;
		}

	} 
	
	public function setNit($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nit !== $v || $v === '(space(1))') {
			$this->nit = $v;
			$this->modifiedColumns[] = ClientesPeer::NIT;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === '(space(1))') {
			$this->email = $v;
			$this->modifiedColumns[] = ClientesPeer::EMAIL;
		}

	} 
	
	public function setCoIngr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ingr !== $v || $v === '(space(1))') {
			$this->co_ingr = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_INGR;
		}

		if ($this->aCtaIngr !== null && $this->aCtaIngr->getCoIngr() !== $v) {
			$this->aCtaIngr = null;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === '(space(1))') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === '(space(1))') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === '(space(1))') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === '(space(1))') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO4;
		}

	} 
	
	public function setCampo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo5 !== $v || $v === '(space(1))') {
			$this->campo5 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO5;
		}

	} 
	
	public function setCampo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo6 !== $v || $v === '(space(1))') {
			$this->campo6 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO6;
		}

	} 
	
	public function setCampo7($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo7 !== $v || $v === '(space(1))') {
			$this->campo7 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO7;
		}

	} 
	
	public function setCampo8($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo8 !== $v || $v === '(space(1))') {
			$this->campo8 = $v;
			$this->modifiedColumns[] = ClientesPeer::CAMPO8;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === '(space(1))') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_US_IN;
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
			$this->modifiedColumns[] = ClientesPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === '(space(1))') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_US_MO;
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
			$this->modifiedColumns[] = ClientesPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === '(space(1))') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_US_EL;
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
			$this->modifiedColumns[] = ClientesPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === '(space(1))') {
			$this->revisado = $v;
			$this->modifiedColumns[] = ClientesPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === '(space(1))') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = ClientesPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === '(space(1))') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = ClientesPeer::ROWGUID;
		}

	} 
	
	public function setJuridico($v)
	{

		if ($this->juridico !== $v || $v === true) {
			$this->juridico = $v;
			$this->modifiedColumns[] = ClientesPeer::JURIDICO;
		}

	} 
	
	public function setTipoAdi($v)
	{

		if ($this->tipo_adi !== $v || $v === 0) {
			$this->tipo_adi = $v;
			$this->modifiedColumns[] = ClientesPeer::TIPO_ADI;
		}

	} 
	
	public function setMatriz($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->matriz !== $v || $v === '(space(1))') {
			$this->matriz = $v;
			$this->modifiedColumns[] = ClientesPeer::MATRIZ;
		}

	} 
	
	public function setCoTab($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->co_tab !== $v || $v === 0) {
			$this->co_tab = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_TAB;
		}

	} 
	
	public function setTipoPer($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_per !== $v || $v === '(space(1))') {
			$this->tipo_per = $v;
			$this->modifiedColumns[] = ClientesPeer::TIPO_PER;
		}

	} 
	
	public function setSerialp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->serialp !== $v || $v === '(space(0))') {
			$this->serialp = $v;
			$this->modifiedColumns[] = ClientesPeer::SERIALP;
		}

	} 
	
	public function setValido($v)
	{

		if ($this->valido !== $v || $v === true) {
			$this->valido = $v;
			$this->modifiedColumns[] = ClientesPeer::VALIDO;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = ClientesPeer::ROW_ID;
		}

	} 
	
	public function setEstado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->estado !== $v || $v === '(\'A\')') {
			$this->estado = $v;
			$this->modifiedColumns[] = ClientesPeer::ESTADO;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = ClientesPeer::ID;
		}

	} 
	
	public function setCoPais($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_pais !== $v || $v === '(space(1))') {
			$this->co_pais = $v;
			$this->modifiedColumns[] = ClientesPeer::CO_PAIS;
		}

	} 
	
	public function setCiudad($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ciudad !== $v || $v === '(space(1))') {
			$this->ciudad = $v;
			$this->modifiedColumns[] = ClientesPeer::CIUDAD;
		}

	} 
	
	public function setZip($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->zip !== $v || $v === '(space(1))') {
			$this->zip = $v;
			$this->modifiedColumns[] = ClientesPeer::ZIP;
		}

	} 
	
	public function setLogin($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->login !== $v || $v === '(space(1))') {
			$this->login = $v;
			$this->modifiedColumns[] = ClientesPeer::LOGIN;
		}

	} 
	
	public function setPassword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->password !== $v || $v === '(space(1))') {
			$this->password = $v;
			$this->modifiedColumns[] = ClientesPeer::PASSWORD;
		}

	} 
	
	public function setWebsite($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->website !== $v || $v === '(space(1))') {
			$this->website = $v;
			$this->modifiedColumns[] = ClientesPeer::WEBSITE;
		}

	} 
	
	public function setSalestax($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->salestax !== $v || $v === '(space(1))') {
			$this->salestax = $v;
			$this->modifiedColumns[] = ClientesPeer::SALESTAX;
		}

	} 
	
	public function setContribuE($v)
	{

		if ($this->contribu_e !== $v || $v === true) {
			$this->contribu_e = $v;
			$this->modifiedColumns[] = ClientesPeer::CONTRIBU_E;
		}

	} 
	
	public function setPorcEsp($v)
	{

		if ($this->porc_esp !== $v || $v === 0) {
			$this->porc_esp = $v;
			$this->modifiedColumns[] = ClientesPeer::PORC_ESP;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_cli = $rs->getString($startcol + 0);

			$this->tipo = $rs->getString($startcol + 1);

			$this->cli_des = $rs->getString($startcol + 2);

			$this->direc1 = $rs->getString($startcol + 3);

			$this->direc2 = $rs->getString($startcol + 4);

			$this->telefonos = $rs->getString($startcol + 5);

			$this->fax = $rs->getString($startcol + 6);

			$this->inactivo = $rs->getBoolean($startcol + 7);

			$this->comentario = $rs->getString($startcol + 8);

			$this->respons = $rs->getString($startcol + 9);

			$this->fecha_reg = $rs->getTimestamp($startcol + 10, null);

			$this->puntaje = $rs->getInt($startcol + 11);

			$this->saldo = $rs->getFloat($startcol + 12);

			$this->saldo_ini = $rs->getFloat($startcol + 13);

			$this->fac_ult_ve = $rs->getInt($startcol + 14);

			$this->fec_ult_ve = $rs->getTimestamp($startcol + 15, null);

			$this->net_ult_ve = $rs->getFloat($startcol + 16);

			$this->mont_cre = $rs->getFloat($startcol + 17);

			$this->plaz_pag = $rs->getInt($startcol + 18);

			$this->desc_ppago = $rs->getFloat($startcol + 19);

			$this->co_zon = $rs->getString($startcol + 20);

			$this->co_seg = $rs->getString($startcol + 21);

			$this->co_ven = $rs->getString($startcol + 22);

			$this->desc_glob = $rs->getFloat($startcol + 23);

			$this->horar_caja = $rs->getString($startcol + 24);

			$this->frecu_vist = $rs->getString($startcol + 25);

			$this->lunes = $rs->getBoolean($startcol + 26);

			$this->martes = $rs->getBoolean($startcol + 27);

			$this->miercoles = $rs->getBoolean($startcol + 28);

			$this->jueves = $rs->getBoolean($startcol + 29);

			$this->viernes = $rs->getBoolean($startcol + 30);

			$this->sabado = $rs->getBoolean($startcol + 31);

			$this->domingo = $rs->getBoolean($startcol + 32);

			$this->dir_ent2 = $rs->getString($startcol + 33);

			$this->tipo_iva = $rs->getString($startcol + 34);

			$this->iva = $rs->getFloat($startcol + 35);

			$this->rif = $rs->getString($startcol + 36);

			$this->contribu = $rs->getBoolean($startcol + 37);

			$this->dis_cen = $rs->getString($startcol + 38);

			$this->nit = $rs->getString($startcol + 39);

			$this->email = $rs->getString($startcol + 40);

			$this->co_ingr = $rs->getString($startcol + 41);

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

			$this->co_sucu = $rs->getString($startcol + 58);

			$this->rowguid = $rs->getString($startcol + 59);

			$this->juridico = $rs->getBoolean($startcol + 60);

			$this->tipo_adi = $rs->getFloat($startcol + 61);

			$this->matriz = $rs->getString($startcol + 62);

			$this->co_tab = $rs->getInt($startcol + 63);

			$this->tipo_per = $rs->getString($startcol + 64);

			$this->serialp = $rs->getString($startcol + 65);

			$this->valido = $rs->getBoolean($startcol + 66);

			$this->row_id = $rs->getBlob($startcol + 67);

			$this->estado = $rs->getString($startcol + 68);

			$this->id = $rs->getInt($startcol + 69);

			$this->co_pais = $rs->getString($startcol + 70);

			$this->ciudad = $rs->getString($startcol + 71);

			$this->zip = $rs->getString($startcol + 72);

			$this->login = $rs->getString($startcol + 73);

			$this->password = $rs->getString($startcol + 74);

			$this->website = $rs->getString($startcol + 75);

			$this->salestax = $rs->getString($startcol + 76);

			$this->contribu_e = $rs->getBoolean($startcol + 77);

			$this->porc_esp = $rs->getFloat($startcol + 78);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 79; 
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


												
			if ($this->aTipoCli !== null) {
				if ($this->aTipoCli->isModified()) {
					$affectedRows += $this->aTipoCli->save($con);
				}
				$this->setTipoCli($this->aTipoCli);
			}

			if ($this->aZona !== null) {
				if ($this->aZona->isModified()) {
					$affectedRows += $this->aZona->save($con);
				}
				$this->setZona($this->aZona);
			}

			if ($this->aSegmento !== null) {
				if ($this->aSegmento->isModified()) {
					$affectedRows += $this->aSegmento->save($con);
				}
				$this->setSegmento($this->aSegmento);
			}

			if ($this->aVendedor !== null) {
				if ($this->aVendedor->isModified()) {
					$affectedRows += $this->aVendedor->save($con);
				}
				$this->setVendedor($this->aVendedor);
			}

			if ($this->aCtaIngr !== null) {
				if ($this->aCtaIngr->isModified()) {
					$affectedRows += $this->aCtaIngr->save($con);
				}
				$this->setCtaIngr($this->aCtaIngr);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ClientesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ClientesPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


												
			if ($this->aTipoCli !== null) {
				if (!$this->aTipoCli->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTipoCli->getValidationFailures());
				}
			}

			if ($this->aZona !== null) {
				if (!$this->aZona->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aZona->getValidationFailures());
				}
			}

			if ($this->aSegmento !== null) {
				if (!$this->aSegmento->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSegmento->getValidationFailures());
				}
			}

			if ($this->aVendedor !== null) {
				if (!$this->aVendedor->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVendedor->getValidationFailures());
				}
			}

			if ($this->aCtaIngr !== null) {
				if (!$this->aCtaIngr->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCtaIngr->getValidationFailures());
				}
			}


			if (($retval = ClientesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
				return $this->getTipo();
				break;
			case 2:
				return $this->getCliDes();
				break;
			case 3:
				return $this->getDirec1();
				break;
			case 4:
				return $this->getDirec2();
				break;
			case 5:
				return $this->getTelefonos();
				break;
			case 6:
				return $this->getFax();
				break;
			case 7:
				return $this->getInactivo();
				break;
			case 8:
				return $this->getComentario();
				break;
			case 9:
				return $this->getRespons();
				break;
			case 10:
				return $this->getFechaReg();
				break;
			case 11:
				return $this->getPuntaje();
				break;
			case 12:
				return $this->getSaldo();
				break;
			case 13:
				return $this->getSaldoIni();
				break;
			case 14:
				return $this->getFacUltVe();
				break;
			case 15:
				return $this->getFecUltVe();
				break;
			case 16:
				return $this->getNetUltVe();
				break;
			case 17:
				return $this->getMontCre();
				break;
			case 18:
				return $this->getPlazPag();
				break;
			case 19:
				return $this->getDescPpago();
				break;
			case 20:
				return $this->getCoZon();
				break;
			case 21:
				return $this->getCoSeg();
				break;
			case 22:
				return $this->getCoVen();
				break;
			case 23:
				return $this->getDescGlob();
				break;
			case 24:
				return $this->getHorarCaja();
				break;
			case 25:
				return $this->getFrecuVist();
				break;
			case 26:
				return $this->getLunes();
				break;
			case 27:
				return $this->getMartes();
				break;
			case 28:
				return $this->getMiercoles();
				break;
			case 29:
				return $this->getJueves();
				break;
			case 30:
				return $this->getViernes();
				break;
			case 31:
				return $this->getSabado();
				break;
			case 32:
				return $this->getDomingo();
				break;
			case 33:
				return $this->getDirEnt2();
				break;
			case 34:
				return $this->getTipoIva();
				break;
			case 35:
				return $this->getIva();
				break;
			case 36:
				return $this->getRif();
				break;
			case 37:
				return $this->getContribu();
				break;
			case 38:
				return $this->getDisCen();
				break;
			case 39:
				return $this->getNit();
				break;
			case 40:
				return $this->getEmail();
				break;
			case 41:
				return $this->getCoIngr();
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
				return $this->getCoSucu();
				break;
			case 59:
				return $this->getRowguid();
				break;
			case 60:
				return $this->getJuridico();
				break;
			case 61:
				return $this->getTipoAdi();
				break;
			case 62:
				return $this->getMatriz();
				break;
			case 63:
				return $this->getCoTab();
				break;
			case 64:
				return $this->getTipoPer();
				break;
			case 65:
				return $this->getSerialp();
				break;
			case 66:
				return $this->getValido();
				break;
			case 67:
				return $this->getRowId();
				break;
			case 68:
				return $this->getEstado();
				break;
			case 69:
				return $this->getId();
				break;
			case 70:
				return $this->getCoPais();
				break;
			case 71:
				return $this->getCiudad();
				break;
			case 72:
				return $this->getZip();
				break;
			case 73:
				return $this->getLogin();
				break;
			case 74:
				return $this->getPassword();
				break;
			case 75:
				return $this->getWebsite();
				break;
			case 76:
				return $this->getSalestax();
				break;
			case 77:
				return $this->getContribuE();
				break;
			case 78:
				return $this->getPorcEsp();
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
			$keys[1] => $this->getTipo(),
			$keys[2] => $this->getCliDes(),
			$keys[3] => $this->getDirec1(),
			$keys[4] => $this->getDirec2(),
			$keys[5] => $this->getTelefonos(),
			$keys[6] => $this->getFax(),
			$keys[7] => $this->getInactivo(),
			$keys[8] => $this->getComentario(),
			$keys[9] => $this->getRespons(),
			$keys[10] => $this->getFechaReg(),
			$keys[11] => $this->getPuntaje(),
			$keys[12] => $this->getSaldo(),
			$keys[13] => $this->getSaldoIni(),
			$keys[14] => $this->getFacUltVe(),
			$keys[15] => $this->getFecUltVe(),
			$keys[16] => $this->getNetUltVe(),
			$keys[17] => $this->getMontCre(),
			$keys[18] => $this->getPlazPag(),
			$keys[19] => $this->getDescPpago(),
			$keys[20] => $this->getCoZon(),
			$keys[21] => $this->getCoSeg(),
			$keys[22] => $this->getCoVen(),
			$keys[23] => $this->getDescGlob(),
			$keys[24] => $this->getHorarCaja(),
			$keys[25] => $this->getFrecuVist(),
			$keys[26] => $this->getLunes(),
			$keys[27] => $this->getMartes(),
			$keys[28] => $this->getMiercoles(),
			$keys[29] => $this->getJueves(),
			$keys[30] => $this->getViernes(),
			$keys[31] => $this->getSabado(),
			$keys[32] => $this->getDomingo(),
			$keys[33] => $this->getDirEnt2(),
			$keys[34] => $this->getTipoIva(),
			$keys[35] => $this->getIva(),
			$keys[36] => $this->getRif(),
			$keys[37] => $this->getContribu(),
			$keys[38] => $this->getDisCen(),
			$keys[39] => $this->getNit(),
			$keys[40] => $this->getEmail(),
			$keys[41] => $this->getCoIngr(),
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
			$keys[58] => $this->getCoSucu(),
			$keys[59] => $this->getRowguid(),
			$keys[60] => $this->getJuridico(),
			$keys[61] => $this->getTipoAdi(),
			$keys[62] => $this->getMatriz(),
			$keys[63] => $this->getCoTab(),
			$keys[64] => $this->getTipoPer(),
			$keys[65] => $this->getSerialp(),
			$keys[66] => $this->getValido(),
			$keys[67] => $this->getRowId(),
			$keys[68] => $this->getEstado(),
			$keys[69] => $this->getId(),
			$keys[70] => $this->getCoPais(),
			$keys[71] => $this->getCiudad(),
			$keys[72] => $this->getZip(),
			$keys[73] => $this->getLogin(),
			$keys[74] => $this->getPassword(),
			$keys[75] => $this->getWebsite(),
			$keys[76] => $this->getSalestax(),
			$keys[77] => $this->getContribuE(),
			$keys[78] => $this->getPorcEsp(),
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
				$this->setTipo($value);
				break;
			case 2:
				$this->setCliDes($value);
				break;
			case 3:
				$this->setDirec1($value);
				break;
			case 4:
				$this->setDirec2($value);
				break;
			case 5:
				$this->setTelefonos($value);
				break;
			case 6:
				$this->setFax($value);
				break;
			case 7:
				$this->setInactivo($value);
				break;
			case 8:
				$this->setComentario($value);
				break;
			case 9:
				$this->setRespons($value);
				break;
			case 10:
				$this->setFechaReg($value);
				break;
			case 11:
				$this->setPuntaje($value);
				break;
			case 12:
				$this->setSaldo($value);
				break;
			case 13:
				$this->setSaldoIni($value);
				break;
			case 14:
				$this->setFacUltVe($value);
				break;
			case 15:
				$this->setFecUltVe($value);
				break;
			case 16:
				$this->setNetUltVe($value);
				break;
			case 17:
				$this->setMontCre($value);
				break;
			case 18:
				$this->setPlazPag($value);
				break;
			case 19:
				$this->setDescPpago($value);
				break;
			case 20:
				$this->setCoZon($value);
				break;
			case 21:
				$this->setCoSeg($value);
				break;
			case 22:
				$this->setCoVen($value);
				break;
			case 23:
				$this->setDescGlob($value);
				break;
			case 24:
				$this->setHorarCaja($value);
				break;
			case 25:
				$this->setFrecuVist($value);
				break;
			case 26:
				$this->setLunes($value);
				break;
			case 27:
				$this->setMartes($value);
				break;
			case 28:
				$this->setMiercoles($value);
				break;
			case 29:
				$this->setJueves($value);
				break;
			case 30:
				$this->setViernes($value);
				break;
			case 31:
				$this->setSabado($value);
				break;
			case 32:
				$this->setDomingo($value);
				break;
			case 33:
				$this->setDirEnt2($value);
				break;
			case 34:
				$this->setTipoIva($value);
				break;
			case 35:
				$this->setIva($value);
				break;
			case 36:
				$this->setRif($value);
				break;
			case 37:
				$this->setContribu($value);
				break;
			case 38:
				$this->setDisCen($value);
				break;
			case 39:
				$this->setNit($value);
				break;
			case 40:
				$this->setEmail($value);
				break;
			case 41:
				$this->setCoIngr($value);
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
				$this->setCoSucu($value);
				break;
			case 59:
				$this->setRowguid($value);
				break;
			case 60:
				$this->setJuridico($value);
				break;
			case 61:
				$this->setTipoAdi($value);
				break;
			case 62:
				$this->setMatriz($value);
				break;
			case 63:
				$this->setCoTab($value);
				break;
			case 64:
				$this->setTipoPer($value);
				break;
			case 65:
				$this->setSerialp($value);
				break;
			case 66:
				$this->setValido($value);
				break;
			case 67:
				$this->setRowId($value);
				break;
			case 68:
				$this->setEstado($value);
				break;
			case 69:
				$this->setId($value);
				break;
			case 70:
				$this->setCoPais($value);
				break;
			case 71:
				$this->setCiudad($value);
				break;
			case 72:
				$this->setZip($value);
				break;
			case 73:
				$this->setLogin($value);
				break;
			case 74:
				$this->setPassword($value);
				break;
			case 75:
				$this->setWebsite($value);
				break;
			case 76:
				$this->setSalestax($value);
				break;
			case 77:
				$this->setContribuE($value);
				break;
			case 78:
				$this->setPorcEsp($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClientesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoCli($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTipo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCliDes($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDirec1($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDirec2($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTelefonos($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFax($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setInactivo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setComentario($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setRespons($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFechaReg($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPuntaje($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSaldo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSaldoIni($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFacUltVe($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setFecUltVe($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNetUltVe($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setMontCre($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setPlazPag($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDescPpago($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCoZon($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCoSeg($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setCoVen($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDescGlob($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setHorarCaja($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setFrecuVist($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setLunes($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setMartes($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setMiercoles($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setJueves($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setViernes($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setSabado($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDomingo($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setDirEnt2($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setTipoIva($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setIva($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setRif($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setContribu($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setDisCen($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setNit($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setEmail($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setCoIngr($arr[$keys[41]]);
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
		if (array_key_exists($keys[58], $arr)) $this->setCoSucu($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setRowguid($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setJuridico($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setTipoAdi($arr[$keys[61]]);
		if (array_key_exists($keys[62], $arr)) $this->setMatriz($arr[$keys[62]]);
		if (array_key_exists($keys[63], $arr)) $this->setCoTab($arr[$keys[63]]);
		if (array_key_exists($keys[64], $arr)) $this->setTipoPer($arr[$keys[64]]);
		if (array_key_exists($keys[65], $arr)) $this->setSerialp($arr[$keys[65]]);
		if (array_key_exists($keys[66], $arr)) $this->setValido($arr[$keys[66]]);
		if (array_key_exists($keys[67], $arr)) $this->setRowId($arr[$keys[67]]);
		if (array_key_exists($keys[68], $arr)) $this->setEstado($arr[$keys[68]]);
		if (array_key_exists($keys[69], $arr)) $this->setId($arr[$keys[69]]);
		if (array_key_exists($keys[70], $arr)) $this->setCoPais($arr[$keys[70]]);
		if (array_key_exists($keys[71], $arr)) $this->setCiudad($arr[$keys[71]]);
		if (array_key_exists($keys[72], $arr)) $this->setZip($arr[$keys[72]]);
		if (array_key_exists($keys[73], $arr)) $this->setLogin($arr[$keys[73]]);
		if (array_key_exists($keys[74], $arr)) $this->setPassword($arr[$keys[74]]);
		if (array_key_exists($keys[75], $arr)) $this->setWebsite($arr[$keys[75]]);
		if (array_key_exists($keys[76], $arr)) $this->setSalestax($arr[$keys[76]]);
		if (array_key_exists($keys[77], $arr)) $this->setContribuE($arr[$keys[77]]);
		if (array_key_exists($keys[78], $arr)) $this->setPorcEsp($arr[$keys[78]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ClientesPeer::DATABASE_NAME);

		if ($this->isColumnModified(ClientesPeer::CO_CLI)) $criteria->add(ClientesPeer::CO_CLI, $this->co_cli);
		if ($this->isColumnModified(ClientesPeer::TIPO)) $criteria->add(ClientesPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(ClientesPeer::CLI_DES)) $criteria->add(ClientesPeer::CLI_DES, $this->cli_des);
		if ($this->isColumnModified(ClientesPeer::DIREC1)) $criteria->add(ClientesPeer::DIREC1, $this->direc1);
		if ($this->isColumnModified(ClientesPeer::DIREC2)) $criteria->add(ClientesPeer::DIREC2, $this->direc2);
		if ($this->isColumnModified(ClientesPeer::TELEFONOS)) $criteria->add(ClientesPeer::TELEFONOS, $this->telefonos);
		if ($this->isColumnModified(ClientesPeer::FAX)) $criteria->add(ClientesPeer::FAX, $this->fax);
		if ($this->isColumnModified(ClientesPeer::INACTIVO)) $criteria->add(ClientesPeer::INACTIVO, $this->inactivo);
		if ($this->isColumnModified(ClientesPeer::COMENTARIO)) $criteria->add(ClientesPeer::COMENTARIO, $this->comentario);
		if ($this->isColumnModified(ClientesPeer::RESPONS)) $criteria->add(ClientesPeer::RESPONS, $this->respons);
		if ($this->isColumnModified(ClientesPeer::FECHA_REG)) $criteria->add(ClientesPeer::FECHA_REG, $this->fecha_reg);
		if ($this->isColumnModified(ClientesPeer::PUNTAJE)) $criteria->add(ClientesPeer::PUNTAJE, $this->puntaje);
		if ($this->isColumnModified(ClientesPeer::SALDO)) $criteria->add(ClientesPeer::SALDO, $this->saldo);
		if ($this->isColumnModified(ClientesPeer::SALDO_INI)) $criteria->add(ClientesPeer::SALDO_INI, $this->saldo_ini);
		if ($this->isColumnModified(ClientesPeer::FAC_ULT_VE)) $criteria->add(ClientesPeer::FAC_ULT_VE, $this->fac_ult_ve);
		if ($this->isColumnModified(ClientesPeer::FEC_ULT_VE)) $criteria->add(ClientesPeer::FEC_ULT_VE, $this->fec_ult_ve);
		if ($this->isColumnModified(ClientesPeer::NET_ULT_VE)) $criteria->add(ClientesPeer::NET_ULT_VE, $this->net_ult_ve);
		if ($this->isColumnModified(ClientesPeer::MONT_CRE)) $criteria->add(ClientesPeer::MONT_CRE, $this->mont_cre);
		if ($this->isColumnModified(ClientesPeer::PLAZ_PAG)) $criteria->add(ClientesPeer::PLAZ_PAG, $this->plaz_pag);
		if ($this->isColumnModified(ClientesPeer::DESC_PPAGO)) $criteria->add(ClientesPeer::DESC_PPAGO, $this->desc_ppago);
		if ($this->isColumnModified(ClientesPeer::CO_ZON)) $criteria->add(ClientesPeer::CO_ZON, $this->co_zon);
		if ($this->isColumnModified(ClientesPeer::CO_SEG)) $criteria->add(ClientesPeer::CO_SEG, $this->co_seg);
		if ($this->isColumnModified(ClientesPeer::CO_VEN)) $criteria->add(ClientesPeer::CO_VEN, $this->co_ven);
		if ($this->isColumnModified(ClientesPeer::DESC_GLOB)) $criteria->add(ClientesPeer::DESC_GLOB, $this->desc_glob);
		if ($this->isColumnModified(ClientesPeer::HORAR_CAJA)) $criteria->add(ClientesPeer::HORAR_CAJA, $this->horar_caja);
		if ($this->isColumnModified(ClientesPeer::FRECU_VIST)) $criteria->add(ClientesPeer::FRECU_VIST, $this->frecu_vist);
		if ($this->isColumnModified(ClientesPeer::LUNES)) $criteria->add(ClientesPeer::LUNES, $this->lunes);
		if ($this->isColumnModified(ClientesPeer::MARTES)) $criteria->add(ClientesPeer::MARTES, $this->martes);
		if ($this->isColumnModified(ClientesPeer::MIERCOLES)) $criteria->add(ClientesPeer::MIERCOLES, $this->miercoles);
		if ($this->isColumnModified(ClientesPeer::JUEVES)) $criteria->add(ClientesPeer::JUEVES, $this->jueves);
		if ($this->isColumnModified(ClientesPeer::VIERNES)) $criteria->add(ClientesPeer::VIERNES, $this->viernes);
		if ($this->isColumnModified(ClientesPeer::SABADO)) $criteria->add(ClientesPeer::SABADO, $this->sabado);
		if ($this->isColumnModified(ClientesPeer::DOMINGO)) $criteria->add(ClientesPeer::DOMINGO, $this->domingo);
		if ($this->isColumnModified(ClientesPeer::DIR_ENT2)) $criteria->add(ClientesPeer::DIR_ENT2, $this->dir_ent2);
		if ($this->isColumnModified(ClientesPeer::TIPO_IVA)) $criteria->add(ClientesPeer::TIPO_IVA, $this->tipo_iva);
		if ($this->isColumnModified(ClientesPeer::IVA)) $criteria->add(ClientesPeer::IVA, $this->iva);
		if ($this->isColumnModified(ClientesPeer::RIF)) $criteria->add(ClientesPeer::RIF, $this->rif);
		if ($this->isColumnModified(ClientesPeer::CONTRIBU)) $criteria->add(ClientesPeer::CONTRIBU, $this->contribu);
		if ($this->isColumnModified(ClientesPeer::DIS_CEN)) $criteria->add(ClientesPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(ClientesPeer::NIT)) $criteria->add(ClientesPeer::NIT, $this->nit);
		if ($this->isColumnModified(ClientesPeer::EMAIL)) $criteria->add(ClientesPeer::EMAIL, $this->email);
		if ($this->isColumnModified(ClientesPeer::CO_INGR)) $criteria->add(ClientesPeer::CO_INGR, $this->co_ingr);
		if ($this->isColumnModified(ClientesPeer::CAMPO1)) $criteria->add(ClientesPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(ClientesPeer::CAMPO2)) $criteria->add(ClientesPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(ClientesPeer::CAMPO3)) $criteria->add(ClientesPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(ClientesPeer::CAMPO4)) $criteria->add(ClientesPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(ClientesPeer::CAMPO5)) $criteria->add(ClientesPeer::CAMPO5, $this->campo5);
		if ($this->isColumnModified(ClientesPeer::CAMPO6)) $criteria->add(ClientesPeer::CAMPO6, $this->campo6);
		if ($this->isColumnModified(ClientesPeer::CAMPO7)) $criteria->add(ClientesPeer::CAMPO7, $this->campo7);
		if ($this->isColumnModified(ClientesPeer::CAMPO8)) $criteria->add(ClientesPeer::CAMPO8, $this->campo8);
		if ($this->isColumnModified(ClientesPeer::CO_US_IN)) $criteria->add(ClientesPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(ClientesPeer::FE_US_IN)) $criteria->add(ClientesPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(ClientesPeer::CO_US_MO)) $criteria->add(ClientesPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(ClientesPeer::FE_US_MO)) $criteria->add(ClientesPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(ClientesPeer::CO_US_EL)) $criteria->add(ClientesPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(ClientesPeer::FE_US_EL)) $criteria->add(ClientesPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(ClientesPeer::REVISADO)) $criteria->add(ClientesPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(ClientesPeer::TRASNFE)) $criteria->add(ClientesPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(ClientesPeer::CO_SUCU)) $criteria->add(ClientesPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(ClientesPeer::ROWGUID)) $criteria->add(ClientesPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(ClientesPeer::JURIDICO)) $criteria->add(ClientesPeer::JURIDICO, $this->juridico);
		if ($this->isColumnModified(ClientesPeer::TIPO_ADI)) $criteria->add(ClientesPeer::TIPO_ADI, $this->tipo_adi);
		if ($this->isColumnModified(ClientesPeer::MATRIZ)) $criteria->add(ClientesPeer::MATRIZ, $this->matriz);
		if ($this->isColumnModified(ClientesPeer::CO_TAB)) $criteria->add(ClientesPeer::CO_TAB, $this->co_tab);
		if ($this->isColumnModified(ClientesPeer::TIPO_PER)) $criteria->add(ClientesPeer::TIPO_PER, $this->tipo_per);
		if ($this->isColumnModified(ClientesPeer::SERIALP)) $criteria->add(ClientesPeer::SERIALP, $this->serialp);
		if ($this->isColumnModified(ClientesPeer::VALIDO)) $criteria->add(ClientesPeer::VALIDO, $this->valido);
		if ($this->isColumnModified(ClientesPeer::ROW_ID)) $criteria->add(ClientesPeer::ROW_ID, $this->row_id);
		if ($this->isColumnModified(ClientesPeer::ESTADO)) $criteria->add(ClientesPeer::ESTADO, $this->estado);
		if ($this->isColumnModified(ClientesPeer::ID)) $criteria->add(ClientesPeer::ID, $this->id);
		if ($this->isColumnModified(ClientesPeer::CO_PAIS)) $criteria->add(ClientesPeer::CO_PAIS, $this->co_pais);
		if ($this->isColumnModified(ClientesPeer::CIUDAD)) $criteria->add(ClientesPeer::CIUDAD, $this->ciudad);
		if ($this->isColumnModified(ClientesPeer::ZIP)) $criteria->add(ClientesPeer::ZIP, $this->zip);
		if ($this->isColumnModified(ClientesPeer::LOGIN)) $criteria->add(ClientesPeer::LOGIN, $this->login);
		if ($this->isColumnModified(ClientesPeer::PASSWORD)) $criteria->add(ClientesPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(ClientesPeer::WEBSITE)) $criteria->add(ClientesPeer::WEBSITE, $this->website);
		if ($this->isColumnModified(ClientesPeer::SALESTAX)) $criteria->add(ClientesPeer::SALESTAX, $this->salestax);
		if ($this->isColumnModified(ClientesPeer::CONTRIBU_E)) $criteria->add(ClientesPeer::CONTRIBU_E, $this->contribu_e);
		if ($this->isColumnModified(ClientesPeer::PORC_ESP)) $criteria->add(ClientesPeer::PORC_ESP, $this->porc_esp);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ClientesPeer::DATABASE_NAME);

		$criteria->add(ClientesPeer::CO_CLI, $this->co_cli);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoCli();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoCli($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTipo($this->tipo);

		$copyObj->setCliDes($this->cli_des);

		$copyObj->setDirec1($this->direc1);

		$copyObj->setDirec2($this->direc2);

		$copyObj->setTelefonos($this->telefonos);

		$copyObj->setFax($this->fax);

		$copyObj->setInactivo($this->inactivo);

		$copyObj->setComentario($this->comentario);

		$copyObj->setRespons($this->respons);

		$copyObj->setFechaReg($this->fecha_reg);

		$copyObj->setPuntaje($this->puntaje);

		$copyObj->setSaldo($this->saldo);

		$copyObj->setSaldoIni($this->saldo_ini);

		$copyObj->setFacUltVe($this->fac_ult_ve);

		$copyObj->setFecUltVe($this->fec_ult_ve);

		$copyObj->setNetUltVe($this->net_ult_ve);

		$copyObj->setMontCre($this->mont_cre);

		$copyObj->setPlazPag($this->plaz_pag);

		$copyObj->setDescPpago($this->desc_ppago);

		$copyObj->setCoZon($this->co_zon);

		$copyObj->setCoSeg($this->co_seg);

		$copyObj->setCoVen($this->co_ven);

		$copyObj->setDescGlob($this->desc_glob);

		$copyObj->setHorarCaja($this->horar_caja);

		$copyObj->setFrecuVist($this->frecu_vist);

		$copyObj->setLunes($this->lunes);

		$copyObj->setMartes($this->martes);

		$copyObj->setMiercoles($this->miercoles);

		$copyObj->setJueves($this->jueves);

		$copyObj->setViernes($this->viernes);

		$copyObj->setSabado($this->sabado);

		$copyObj->setDomingo($this->domingo);

		$copyObj->setDirEnt2($this->dir_ent2);

		$copyObj->setTipoIva($this->tipo_iva);

		$copyObj->setIva($this->iva);

		$copyObj->setRif($this->rif);

		$copyObj->setContribu($this->contribu);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setNit($this->nit);

		$copyObj->setEmail($this->email);

		$copyObj->setCoIngr($this->co_ingr);

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

		$copyObj->setJuridico($this->juridico);

		$copyObj->setTipoAdi($this->tipo_adi);

		$copyObj->setMatriz($this->matriz);

		$copyObj->setCoTab($this->co_tab);

		$copyObj->setTipoPer($this->tipo_per);

		$copyObj->setSerialp($this->serialp);

		$copyObj->setValido($this->valido);

		$copyObj->setRowId($this->row_id);

		$copyObj->setEstado($this->estado);

		$copyObj->setId($this->id);

		$copyObj->setCoPais($this->co_pais);

		$copyObj->setCiudad($this->ciudad);

		$copyObj->setZip($this->zip);

		$copyObj->setLogin($this->login);

		$copyObj->setPassword($this->password);

		$copyObj->setWebsite($this->website);

		$copyObj->setSalestax($this->salestax);

		$copyObj->setContribuE($this->contribu_e);

		$copyObj->setPorcEsp($this->porc_esp);


		if ($deepCopy) {
									$copyObj->setNew(false);

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

		$copyObj->setCoCli(NULL); 
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

	
	public function setTipoCli($v)
	{


		if ($v === null) {
			$this->setTipo('(space(1))');
		} else {
			$this->setTipo($v->getTipCli());
		}


		$this->aTipoCli = $v;
	}


	
	public function getTipoCli($con = null)
	{
				include_once 'lib/model/om/BaseTipoCliPeer.php';

		if ($this->aTipoCli === null && (($this->tipo !== "" && $this->tipo !== null))) {

			$this->aTipoCli = TipoCliPeer::retrieveByPK($this->tipo, $con);

			
		}
		return $this->aTipoCli;
	}

	
	public function setZona($v)
	{


		if ($v === null) {
			$this->setCoZon('(space(1))');
		} else {
			$this->setCoZon($v->getCoZon());
		}


		$this->aZona = $v;
	}


	
	public function getZona($con = null)
	{
				include_once 'lib/model/om/BaseZonaPeer.php';

		if ($this->aZona === null && (($this->co_zon !== "" && $this->co_zon !== null))) {

			$this->aZona = ZonaPeer::retrieveByPK($this->co_zon, $con);

			
		}
		return $this->aZona;
	}

	
	public function setSegmento($v)
	{


		if ($v === null) {
			$this->setCoSeg('(space(1))');
		} else {
			$this->setCoSeg($v->getCoSeg());
		}


		$this->aSegmento = $v;
	}


	
	public function getSegmento($con = null)
	{
				include_once 'lib/model/om/BaseSegmentoPeer.php';

		if ($this->aSegmento === null && (($this->co_seg !== "" && $this->co_seg !== null))) {

			$this->aSegmento = SegmentoPeer::retrieveByPK($this->co_seg, $con);

			
		}
		return $this->aSegmento;
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

	
	public function setCtaIngr($v)
	{


		if ($v === null) {
			$this->setCoIngr('(space(1))');
		} else {
			$this->setCoIngr($v->getCoIngr());
		}


		$this->aCtaIngr = $v;
	}


	
	public function getCtaIngr($con = null)
	{
				include_once 'lib/model/om/BaseCtaIngrPeer.php';

		if ($this->aCtaIngr === null && (($this->co_ingr !== "" && $this->co_ingr !== null))) {

			$this->aCtaIngr = CtaIngrPeer::retrieveByPK($this->co_ingr, $con);

			
		}
		return $this->aCtaIngr;
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

				$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

				FacturaPeer::addSelectColumns($criteria);
				$this->collFacturas = FacturaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

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

		$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

		return FacturaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFactura(Factura $l)
	{
		$this->collFacturas[] = $l;
		$l->setClientes($this);
	}


	
	public function getFacturasJoinVendedor($criteria = null, $con = null)
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

				$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

				$this->collFacturas = FacturaPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinVendedor($criteria, $con);
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

				$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

				$this->collFacturas = FacturaPeer::doSelectJoinTranspor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

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

				$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

				$this->collFacturas = FacturaPeer::doSelectJoinCondicio($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinCondicio($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}


	
	public function getFacturasJoinMoneda($criteria = null, $con = null)
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

				$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

				$this->collFacturas = FacturaPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinMoneda($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
	}


	
	public function getFacturasJoinAlmacen($criteria = null, $con = null)
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

				$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

				$this->collFacturas = FacturaPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_CLI, $this->getCoCli());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinAlmacen($criteria, $con);
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

				$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

				DocumCcPeer::addSelectColumns($criteria);
				$this->collDocumCcs = DocumCcPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

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

		$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

		return DocumCcPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDocumCc(DocumCc $l)
	{
		$this->collDocumCcs[] = $l;
		$l->setClientes($this);
	}


	
	public function getDocumCcsJoinVendedor($criteria = null, $con = null)
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

				$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinVendedor($criteria, $con);
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

				$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

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

				$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

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

				$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_CLI, $this->getCoCli());

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

				$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

				CobrosPeer::addSelectColumns($criteria);
				$this->collCobross = CobrosPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

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

		$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

		return CobrosPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCobros(Cobros $l)
	{
		$this->collCobross[] = $l;
		$l->setClientes($this);
	}


	
	public function getCobrossJoinVendedor($criteria = null, $con = null)
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

				$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

				$this->collCobross = CobrosPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinVendedor($criteria, $con);
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

				$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

				$this->collCobross = CobrosPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

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

				$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

				$this->collCobross = CobrosPeer::doSelectJoinAlmacen($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_CLI, $this->getCoCli());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinAlmacen($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}

} 