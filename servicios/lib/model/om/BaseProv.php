<?php


abstract class BaseProv extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_prov;


	
	protected $prov_des = ' ';


	
	protected $co_seg = ' ';


	
	protected $co_zon = ' ';


	
	protected $inactivo = false;


	
	protected $productos = ' ';


	
	protected $direc1 = ' ';


	
	protected $direc2 = ' ';


	
	protected $telefonos = ' ';


	
	protected $fax = ' ';


	
	protected $respons = ' ';


	
	protected $fecha_reg;


	
	protected $tipo = ' ';


	
	protected $com_ult_co = 0;


	
	protected $fec_ult_co;


	
	protected $net_ult_co = 0;


	
	protected $saldo = 0;


	
	protected $saldo_ini = 0;


	
	protected $mont_cre = 0;


	
	protected $plaz_pag = 0;


	
	protected $desc_ppago = 0;


	
	protected $desc_glob = 0;


	
	protected $tipo_iva = ' ';


	
	protected $iva = 0;


	
	protected $rif = ' ';


	
	protected $nacional = false;


	
	protected $dis_cen = ' ';


	
	protected $nit = ' ';


	
	protected $email = ' ';


	
	protected $co_ingr = ' ';


	
	protected $comentario = ' ';


	
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


	
	protected $juridico = false;


	
	protected $tipo_adi = 1;


	
	protected $matriz = ' ';


	
	protected $co_tab = 0;


	
	protected $tipo_per = ' ';


	
	protected $co_pais = ' ';


	
	protected $ciudad = ' ';


	
	protected $zip = ' ';


	
	protected $website = ' ';


	
	protected $formtype = ' ';


	
	protected $taxid = ' ';


	
	protected $contribu_e = false;


	
	protected $porc_esp = 0;

	
	protected $aSegmento;

	
	protected $aZona;

	
	protected $aTipoPro;

	
	protected $aCtaIngr;

	
	protected $collArts;

	
	protected $lastArtCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoProv()
	{

		return $this->co_prov;
	}

	
	public function getProvDes()
	{

		return $this->prov_des;
	}

	
	public function getCoSeg()
	{

		return $this->co_seg;
	}

	
	public function getCoZon()
	{

		return $this->co_zon;
	}

	
	public function getInactivo()
	{

		return $this->inactivo;
	}

	
	public function getProductos()
	{

		return $this->productos;
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

	
	public function getRespons()
	{

		return $this->respons;
	}

	
	public function getFechaReg()
	{

		return $this->fecha_reg;
	}

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getComUltCo()
	{

		return $this->com_ult_co;
	}

	
	public function getFecUltCo()
	{

		return $this->fec_ult_co;
	}

	
	public function getNetUltCo()
	{

		return $this->net_ult_co;
	}

	
	public function getSaldo()
	{

		return $this->saldo;
	}

	
	public function getSaldoIni()
	{

		return $this->saldo_ini;
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

	
	public function getDescGlob()
	{

		return $this->desc_glob;
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

	
	public function getNacional()
	{

		return $this->nacional;
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

	
	public function getComentario()
	{

		return $this->comentario;
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

	
	public function getWebsite()
	{

		return $this->website;
	}

	
	public function getFormtype()
	{

		return $this->formtype;
	}

	
	public function getTaxid()
	{

		return $this->taxid;
	}

	
	public function getContribuE()
	{

		return $this->contribu_e;
	}

	
	public function getPorcEsp()
	{

		return $this->porc_esp;
	}

	
	public function setCoProv($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_prov !== $v) {
			$this->co_prov = $v;
			$this->modifiedColumns[] = ProvPeer::CO_PROV;
		}

	} 
	
	public function setProvDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prov_des !== $v || $v === ' ') {
			$this->prov_des = $v;
			$this->modifiedColumns[] = ProvPeer::PROV_DES;
		}

	} 
	
	public function setCoSeg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_seg !== $v || $v === ' ') {
			$this->co_seg = $v;
			$this->modifiedColumns[] = ProvPeer::CO_SEG;
		}

		if ($this->aSegmento !== null && $this->aSegmento->getCoSeg() !== $v) {
			$this->aSegmento = null;
		}

	} 
	
	public function setCoZon($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_zon !== $v || $v === ' ') {
			$this->co_zon = $v;
			$this->modifiedColumns[] = ProvPeer::CO_ZON;
		}

		if ($this->aZona !== null && $this->aZona->getCoZon() !== $v) {
			$this->aZona = null;
		}

	} 
	
	public function setInactivo($v)
	{

		if ($this->inactivo !== $v || $v === false) {
			$this->inactivo = $v;
			$this->modifiedColumns[] = ProvPeer::INACTIVO;
		}

	} 
	
	public function setProductos($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->productos !== $v || $v === ' ') {
			$this->productos = $v;
			$this->modifiedColumns[] = ProvPeer::PRODUCTOS;
		}

	} 
	
	public function setDirec1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->direc1 !== $v || $v === ' ') {
			$this->direc1 = $v;
			$this->modifiedColumns[] = ProvPeer::DIREC1;
		}

	} 
	
	public function setDirec2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->direc2 !== $v || $v === ' ') {
			$this->direc2 = $v;
			$this->modifiedColumns[] = ProvPeer::DIREC2;
		}

	} 
	
	public function setTelefonos($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->telefonos !== $v || $v === ' ') {
			$this->telefonos = $v;
			$this->modifiedColumns[] = ProvPeer::TELEFONOS;
		}

	} 
	
	public function setFax($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fax !== $v || $v === ' ') {
			$this->fax = $v;
			$this->modifiedColumns[] = ProvPeer::FAX;
		}

	} 
	
	public function setRespons($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->respons !== $v || $v === ' ') {
			$this->respons = $v;
			$this->modifiedColumns[] = ProvPeer::RESPONS;
		}

	} 
	
	public function setFechaReg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fecha_reg !== $v) {
			$this->fecha_reg = $v;
			$this->modifiedColumns[] = ProvPeer::FECHA_REG;
		}

	} 
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v || $v === ' ') {
			$this->tipo = $v;
			$this->modifiedColumns[] = ProvPeer::TIPO;
		}

		if ($this->aTipoPro !== null && $this->aTipoPro->getTipPro() !== $v) {
			$this->aTipoPro = null;
		}

	} 
	
	public function setComUltCo($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->com_ult_co !== $v || $v === 0) {
			$this->com_ult_co = $v;
			$this->modifiedColumns[] = ProvPeer::COM_ULT_CO;
		}

	} 
	
	public function setFecUltCo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_ult_co !== $v) {
			$this->fec_ult_co = $v;
			$this->modifiedColumns[] = ProvPeer::FEC_ULT_CO;
		}

	} 
	
	public function setNetUltCo($v)
	{

		if ($this->net_ult_co !== $v || $v === 0) {
			$this->net_ult_co = $v;
			$this->modifiedColumns[] = ProvPeer::NET_ULT_CO;
		}

	} 
	
	public function setSaldo($v)
	{

		if ($this->saldo !== $v || $v === 0) {
			$this->saldo = $v;
			$this->modifiedColumns[] = ProvPeer::SALDO;
		}

	} 
	
	public function setSaldoIni($v)
	{

		if ($this->saldo_ini !== $v || $v === 0) {
			$this->saldo_ini = $v;
			$this->modifiedColumns[] = ProvPeer::SALDO_INI;
		}

	} 
	
	public function setMontCre($v)
	{

		if ($this->mont_cre !== $v || $v === 0) {
			$this->mont_cre = $v;
			$this->modifiedColumns[] = ProvPeer::MONT_CRE;
		}

	} 
	
	public function setPlazPag($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->plaz_pag !== $v || $v === 0) {
			$this->plaz_pag = $v;
			$this->modifiedColumns[] = ProvPeer::PLAZ_PAG;
		}

	} 
	
	public function setDescPpago($v)
	{

		if ($this->desc_ppago !== $v || $v === 0) {
			$this->desc_ppago = $v;
			$this->modifiedColumns[] = ProvPeer::DESC_PPAGO;
		}

	} 
	
	public function setDescGlob($v)
	{

		if ($this->desc_glob !== $v || $v === 0) {
			$this->desc_glob = $v;
			$this->modifiedColumns[] = ProvPeer::DESC_GLOB;
		}

	} 
	
	public function setTipoIva($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_iva !== $v || $v === ' ') {
			$this->tipo_iva = $v;
			$this->modifiedColumns[] = ProvPeer::TIPO_IVA;
		}

	} 
	
	public function setIva($v)
	{

		if ($this->iva !== $v || $v === 0) {
			$this->iva = $v;
			$this->modifiedColumns[] = ProvPeer::IVA;
		}

	} 
	
	public function setRif($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rif !== $v || $v === ' ') {
			$this->rif = $v;
			$this->modifiedColumns[] = ProvPeer::RIF;
		}

	} 
	
	public function setNacional($v)
	{

		if ($this->nacional !== $v || $v === false) {
			$this->nacional = $v;
			$this->modifiedColumns[] = ProvPeer::NACIONAL;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = ProvPeer::DIS_CEN;
		}

	} 
	
	public function setNit($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nit !== $v || $v === ' ') {
			$this->nit = $v;
			$this->modifiedColumns[] = ProvPeer::NIT;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === ' ') {
			$this->email = $v;
			$this->modifiedColumns[] = ProvPeer::EMAIL;
		}

	} 
	
	public function setCoIngr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_ingr !== $v || $v === ' ') {
			$this->co_ingr = $v;
			$this->modifiedColumns[] = ProvPeer::CO_INGR;
		}

		if ($this->aCtaIngr !== null && $this->aCtaIngr->getCoIngr() !== $v) {
			$this->aCtaIngr = null;
		}

	} 
	
	public function setComentario($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comentario !== $v || $v === ' ') {
			$this->comentario = $v;
			$this->modifiedColumns[] = ProvPeer::COMENTARIO;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO4;
		}

	} 
	
	public function setCampo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo5 !== $v || $v === ' ') {
			$this->campo5 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO5;
		}

	} 
	
	public function setCampo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo6 !== $v || $v === ' ') {
			$this->campo6 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO6;
		}

	} 
	
	public function setCampo7($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo7 !== $v || $v === ' ') {
			$this->campo7 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO7;
		}

	} 
	
	public function setCampo8($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo8 !== $v || $v === ' ') {
			$this->campo8 = $v;
			$this->modifiedColumns[] = ProvPeer::CAMPO8;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = ProvPeer::CO_US_IN;
		}

	} 
	
	public function setFeUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_in !== $v) {
			$this->fe_us_in = $v;
			$this->modifiedColumns[] = ProvPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = ProvPeer::CO_US_MO;
		}

	} 
	
	public function setFeUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_mo !== $v) {
			$this->fe_us_mo = $v;
			$this->modifiedColumns[] = ProvPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = ProvPeer::CO_US_EL;
		}

	} 
	
	public function setFeUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_el !== $v) {
			$this->fe_us_el = $v;
			$this->modifiedColumns[] = ProvPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = ProvPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = ProvPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = ProvPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = ProvPeer::ROWGUID;
		}

	} 
	
	public function setJuridico($v)
	{

		if ($this->juridico !== $v || $v === false) {
			$this->juridico = $v;
			$this->modifiedColumns[] = ProvPeer::JURIDICO;
		}

	} 
	
	public function setTipoAdi($v)
	{

		if ($this->tipo_adi !== $v || $v === 1) {
			$this->tipo_adi = $v;
			$this->modifiedColumns[] = ProvPeer::TIPO_ADI;
		}

	} 
	
	public function setMatriz($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->matriz !== $v || $v === ' ') {
			$this->matriz = $v;
			$this->modifiedColumns[] = ProvPeer::MATRIZ;
		}

	} 
	
	public function setCoTab($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->co_tab !== $v || $v === 0) {
			$this->co_tab = $v;
			$this->modifiedColumns[] = ProvPeer::CO_TAB;
		}

	} 
	
	public function setTipoPer($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_per !== $v || $v === ' ') {
			$this->tipo_per = $v;
			$this->modifiedColumns[] = ProvPeer::TIPO_PER;
		}

	} 
	
	public function setCoPais($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_pais !== $v || $v === ' ') {
			$this->co_pais = $v;
			$this->modifiedColumns[] = ProvPeer::CO_PAIS;
		}

	} 
	
	public function setCiudad($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ciudad !== $v || $v === ' ') {
			$this->ciudad = $v;
			$this->modifiedColumns[] = ProvPeer::CIUDAD;
		}

	} 
	
	public function setZip($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->zip !== $v || $v === ' ') {
			$this->zip = $v;
			$this->modifiedColumns[] = ProvPeer::ZIP;
		}

	} 
	
	public function setWebsite($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->website !== $v || $v === ' ') {
			$this->website = $v;
			$this->modifiedColumns[] = ProvPeer::WEBSITE;
		}

	} 
	
	public function setFormtype($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->formtype !== $v || $v === ' ') {
			$this->formtype = $v;
			$this->modifiedColumns[] = ProvPeer::FORMTYPE;
		}

	} 
	
	public function setTaxid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->taxid !== $v || $v === ' ') {
			$this->taxid = $v;
			$this->modifiedColumns[] = ProvPeer::TAXID;
		}

	} 
	
	public function setContribuE($v)
	{

		if ($this->contribu_e !== $v || $v === false) {
			$this->contribu_e = $v;
			$this->modifiedColumns[] = ProvPeer::CONTRIBU_E;
		}

	} 
	
	public function setPorcEsp($v)
	{

		if ($this->porc_esp !== $v || $v === 0) {
			$this->porc_esp = $v;
			$this->modifiedColumns[] = ProvPeer::PORC_ESP;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_prov = $rs->getString($startcol + 0);

			$this->prov_des = $rs->getString($startcol + 1);

			$this->co_seg = $rs->getString($startcol + 2);

			$this->co_zon = $rs->getString($startcol + 3);

			$this->inactivo = $rs->getBoolean($startcol + 4);

			$this->productos = $rs->getString($startcol + 5);

			$this->direc1 = $rs->getString($startcol + 6);

			$this->direc2 = $rs->getString($startcol + 7);

			$this->telefonos = $rs->getString($startcol + 8);

			$this->fax = $rs->getString($startcol + 9);

			$this->respons = $rs->getString($startcol + 10);

			$this->fecha_reg = $rs->getString($startcol + 11);

			$this->tipo = $rs->getString($startcol + 12);

			$this->com_ult_co = $rs->getInt($startcol + 13);

			$this->fec_ult_co = $rs->getString($startcol + 14);

			$this->net_ult_co = $rs->getFloat($startcol + 15);

			$this->saldo = $rs->getFloat($startcol + 16);

			$this->saldo_ini = $rs->getFloat($startcol + 17);

			$this->mont_cre = $rs->getFloat($startcol + 18);

			$this->plaz_pag = $rs->getInt($startcol + 19);

			$this->desc_ppago = $rs->getFloat($startcol + 20);

			$this->desc_glob = $rs->getFloat($startcol + 21);

			$this->tipo_iva = $rs->getString($startcol + 22);

			$this->iva = $rs->getFloat($startcol + 23);

			$this->rif = $rs->getString($startcol + 24);

			$this->nacional = $rs->getBoolean($startcol + 25);

			$this->dis_cen = $rs->getString($startcol + 26);

			$this->nit = $rs->getString($startcol + 27);

			$this->email = $rs->getString($startcol + 28);

			$this->co_ingr = $rs->getString($startcol + 29);

			$this->comentario = $rs->getString($startcol + 30);

			$this->campo1 = $rs->getString($startcol + 31);

			$this->campo2 = $rs->getString($startcol + 32);

			$this->campo3 = $rs->getString($startcol + 33);

			$this->campo4 = $rs->getString($startcol + 34);

			$this->campo5 = $rs->getString($startcol + 35);

			$this->campo6 = $rs->getString($startcol + 36);

			$this->campo7 = $rs->getString($startcol + 37);

			$this->campo8 = $rs->getString($startcol + 38);

			$this->co_us_in = $rs->getString($startcol + 39);

			$this->fe_us_in = $rs->getString($startcol + 40);

			$this->co_us_mo = $rs->getString($startcol + 41);

			$this->fe_us_mo = $rs->getString($startcol + 42);

			$this->co_us_el = $rs->getString($startcol + 43);

			$this->fe_us_el = $rs->getString($startcol + 44);

			$this->revisado = $rs->getString($startcol + 45);

			$this->trasnfe = $rs->getString($startcol + 46);

			$this->co_sucu = $rs->getString($startcol + 47);

			$this->rowguid = $rs->getString($startcol + 48);

			$this->juridico = $rs->getBoolean($startcol + 49);

			$this->tipo_adi = $rs->getFloat($startcol + 50);

			$this->matriz = $rs->getString($startcol + 51);

			$this->co_tab = $rs->getInt($startcol + 52);

			$this->tipo_per = $rs->getString($startcol + 53);

			$this->co_pais = $rs->getString($startcol + 54);

			$this->ciudad = $rs->getString($startcol + 55);

			$this->zip = $rs->getString($startcol + 56);

			$this->website = $rs->getString($startcol + 57);

			$this->formtype = $rs->getString($startcol + 58);

			$this->taxid = $rs->getString($startcol + 59);

			$this->contribu_e = $rs->getBoolean($startcol + 60);

			$this->porc_esp = $rs->getFloat($startcol + 61);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 62; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Prov object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProvPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProvPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProvPeer::DATABASE_NAME);
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


												
			if ($this->aSegmento !== null) {
				if ($this->aSegmento->isModified()) {
					$affectedRows += $this->aSegmento->save($con);
				}
				$this->setSegmento($this->aSegmento);
			}

			if ($this->aZona !== null) {
				if ($this->aZona->isModified()) {
					$affectedRows += $this->aZona->save($con);
				}
				$this->setZona($this->aZona);
			}

			if ($this->aTipoPro !== null) {
				if ($this->aTipoPro->isModified()) {
					$affectedRows += $this->aTipoPro->save($con);
				}
				$this->setTipoPro($this->aTipoPro);
			}

			if ($this->aCtaIngr !== null) {
				if ($this->aCtaIngr->isModified()) {
					$affectedRows += $this->aCtaIngr->save($con);
				}
				$this->setCtaIngr($this->aCtaIngr);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProvPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ProvPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collArts !== null) {
				foreach($this->collArts as $referrerFK) {
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


												
			if ($this->aSegmento !== null) {
				if (!$this->aSegmento->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSegmento->getValidationFailures());
				}
			}

			if ($this->aZona !== null) {
				if (!$this->aZona->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aZona->getValidationFailures());
				}
			}

			if ($this->aTipoPro !== null) {
				if (!$this->aTipoPro->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTipoPro->getValidationFailures());
				}
			}

			if ($this->aCtaIngr !== null) {
				if (!$this->aCtaIngr->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCtaIngr->getValidationFailures());
				}
			}


			if (($retval = ProvPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collArts !== null) {
					foreach($this->collArts as $referrerFK) {
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
		$pos = ProvPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoProv();
				break;
			case 1:
				return $this->getProvDes();
				break;
			case 2:
				return $this->getCoSeg();
				break;
			case 3:
				return $this->getCoZon();
				break;
			case 4:
				return $this->getInactivo();
				break;
			case 5:
				return $this->getProductos();
				break;
			case 6:
				return $this->getDirec1();
				break;
			case 7:
				return $this->getDirec2();
				break;
			case 8:
				return $this->getTelefonos();
				break;
			case 9:
				return $this->getFax();
				break;
			case 10:
				return $this->getRespons();
				break;
			case 11:
				return $this->getFechaReg();
				break;
			case 12:
				return $this->getTipo();
				break;
			case 13:
				return $this->getComUltCo();
				break;
			case 14:
				return $this->getFecUltCo();
				break;
			case 15:
				return $this->getNetUltCo();
				break;
			case 16:
				return $this->getSaldo();
				break;
			case 17:
				return $this->getSaldoIni();
				break;
			case 18:
				return $this->getMontCre();
				break;
			case 19:
				return $this->getPlazPag();
				break;
			case 20:
				return $this->getDescPpago();
				break;
			case 21:
				return $this->getDescGlob();
				break;
			case 22:
				return $this->getTipoIva();
				break;
			case 23:
				return $this->getIva();
				break;
			case 24:
				return $this->getRif();
				break;
			case 25:
				return $this->getNacional();
				break;
			case 26:
				return $this->getDisCen();
				break;
			case 27:
				return $this->getNit();
				break;
			case 28:
				return $this->getEmail();
				break;
			case 29:
				return $this->getCoIngr();
				break;
			case 30:
				return $this->getComentario();
				break;
			case 31:
				return $this->getCampo1();
				break;
			case 32:
				return $this->getCampo2();
				break;
			case 33:
				return $this->getCampo3();
				break;
			case 34:
				return $this->getCampo4();
				break;
			case 35:
				return $this->getCampo5();
				break;
			case 36:
				return $this->getCampo6();
				break;
			case 37:
				return $this->getCampo7();
				break;
			case 38:
				return $this->getCampo8();
				break;
			case 39:
				return $this->getCoUsIn();
				break;
			case 40:
				return $this->getFeUsIn();
				break;
			case 41:
				return $this->getCoUsMo();
				break;
			case 42:
				return $this->getFeUsMo();
				break;
			case 43:
				return $this->getCoUsEl();
				break;
			case 44:
				return $this->getFeUsEl();
				break;
			case 45:
				return $this->getRevisado();
				break;
			case 46:
				return $this->getTrasnfe();
				break;
			case 47:
				return $this->getCoSucu();
				break;
			case 48:
				return $this->getRowguid();
				break;
			case 49:
				return $this->getJuridico();
				break;
			case 50:
				return $this->getTipoAdi();
				break;
			case 51:
				return $this->getMatriz();
				break;
			case 52:
				return $this->getCoTab();
				break;
			case 53:
				return $this->getTipoPer();
				break;
			case 54:
				return $this->getCoPais();
				break;
			case 55:
				return $this->getCiudad();
				break;
			case 56:
				return $this->getZip();
				break;
			case 57:
				return $this->getWebsite();
				break;
			case 58:
				return $this->getFormtype();
				break;
			case 59:
				return $this->getTaxid();
				break;
			case 60:
				return $this->getContribuE();
				break;
			case 61:
				return $this->getPorcEsp();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProvPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoProv(),
			$keys[1] => $this->getProvDes(),
			$keys[2] => $this->getCoSeg(),
			$keys[3] => $this->getCoZon(),
			$keys[4] => $this->getInactivo(),
			$keys[5] => $this->getProductos(),
			$keys[6] => $this->getDirec1(),
			$keys[7] => $this->getDirec2(),
			$keys[8] => $this->getTelefonos(),
			$keys[9] => $this->getFax(),
			$keys[10] => $this->getRespons(),
			$keys[11] => $this->getFechaReg(),
			$keys[12] => $this->getTipo(),
			$keys[13] => $this->getComUltCo(),
			$keys[14] => $this->getFecUltCo(),
			$keys[15] => $this->getNetUltCo(),
			$keys[16] => $this->getSaldo(),
			$keys[17] => $this->getSaldoIni(),
			$keys[18] => $this->getMontCre(),
			$keys[19] => $this->getPlazPag(),
			$keys[20] => $this->getDescPpago(),
			$keys[21] => $this->getDescGlob(),
			$keys[22] => $this->getTipoIva(),
			$keys[23] => $this->getIva(),
			$keys[24] => $this->getRif(),
			$keys[25] => $this->getNacional(),
			$keys[26] => $this->getDisCen(),
			$keys[27] => $this->getNit(),
			$keys[28] => $this->getEmail(),
			$keys[29] => $this->getCoIngr(),
			$keys[30] => $this->getComentario(),
			$keys[31] => $this->getCampo1(),
			$keys[32] => $this->getCampo2(),
			$keys[33] => $this->getCampo3(),
			$keys[34] => $this->getCampo4(),
			$keys[35] => $this->getCampo5(),
			$keys[36] => $this->getCampo6(),
			$keys[37] => $this->getCampo7(),
			$keys[38] => $this->getCampo8(),
			$keys[39] => $this->getCoUsIn(),
			$keys[40] => $this->getFeUsIn(),
			$keys[41] => $this->getCoUsMo(),
			$keys[42] => $this->getFeUsMo(),
			$keys[43] => $this->getCoUsEl(),
			$keys[44] => $this->getFeUsEl(),
			$keys[45] => $this->getRevisado(),
			$keys[46] => $this->getTrasnfe(),
			$keys[47] => $this->getCoSucu(),
			$keys[48] => $this->getRowguid(),
			$keys[49] => $this->getJuridico(),
			$keys[50] => $this->getTipoAdi(),
			$keys[51] => $this->getMatriz(),
			$keys[52] => $this->getCoTab(),
			$keys[53] => $this->getTipoPer(),
			$keys[54] => $this->getCoPais(),
			$keys[55] => $this->getCiudad(),
			$keys[56] => $this->getZip(),
			$keys[57] => $this->getWebsite(),
			$keys[58] => $this->getFormtype(),
			$keys[59] => $this->getTaxid(),
			$keys[60] => $this->getContribuE(),
			$keys[61] => $this->getPorcEsp(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProvPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoProv($value);
				break;
			case 1:
				$this->setProvDes($value);
				break;
			case 2:
				$this->setCoSeg($value);
				break;
			case 3:
				$this->setCoZon($value);
				break;
			case 4:
				$this->setInactivo($value);
				break;
			case 5:
				$this->setProductos($value);
				break;
			case 6:
				$this->setDirec1($value);
				break;
			case 7:
				$this->setDirec2($value);
				break;
			case 8:
				$this->setTelefonos($value);
				break;
			case 9:
				$this->setFax($value);
				break;
			case 10:
				$this->setRespons($value);
				break;
			case 11:
				$this->setFechaReg($value);
				break;
			case 12:
				$this->setTipo($value);
				break;
			case 13:
				$this->setComUltCo($value);
				break;
			case 14:
				$this->setFecUltCo($value);
				break;
			case 15:
				$this->setNetUltCo($value);
				break;
			case 16:
				$this->setSaldo($value);
				break;
			case 17:
				$this->setSaldoIni($value);
				break;
			case 18:
				$this->setMontCre($value);
				break;
			case 19:
				$this->setPlazPag($value);
				break;
			case 20:
				$this->setDescPpago($value);
				break;
			case 21:
				$this->setDescGlob($value);
				break;
			case 22:
				$this->setTipoIva($value);
				break;
			case 23:
				$this->setIva($value);
				break;
			case 24:
				$this->setRif($value);
				break;
			case 25:
				$this->setNacional($value);
				break;
			case 26:
				$this->setDisCen($value);
				break;
			case 27:
				$this->setNit($value);
				break;
			case 28:
				$this->setEmail($value);
				break;
			case 29:
				$this->setCoIngr($value);
				break;
			case 30:
				$this->setComentario($value);
				break;
			case 31:
				$this->setCampo1($value);
				break;
			case 32:
				$this->setCampo2($value);
				break;
			case 33:
				$this->setCampo3($value);
				break;
			case 34:
				$this->setCampo4($value);
				break;
			case 35:
				$this->setCampo5($value);
				break;
			case 36:
				$this->setCampo6($value);
				break;
			case 37:
				$this->setCampo7($value);
				break;
			case 38:
				$this->setCampo8($value);
				break;
			case 39:
				$this->setCoUsIn($value);
				break;
			case 40:
				$this->setFeUsIn($value);
				break;
			case 41:
				$this->setCoUsMo($value);
				break;
			case 42:
				$this->setFeUsMo($value);
				break;
			case 43:
				$this->setCoUsEl($value);
				break;
			case 44:
				$this->setFeUsEl($value);
				break;
			case 45:
				$this->setRevisado($value);
				break;
			case 46:
				$this->setTrasnfe($value);
				break;
			case 47:
				$this->setCoSucu($value);
				break;
			case 48:
				$this->setRowguid($value);
				break;
			case 49:
				$this->setJuridico($value);
				break;
			case 50:
				$this->setTipoAdi($value);
				break;
			case 51:
				$this->setMatriz($value);
				break;
			case 52:
				$this->setCoTab($value);
				break;
			case 53:
				$this->setTipoPer($value);
				break;
			case 54:
				$this->setCoPais($value);
				break;
			case 55:
				$this->setCiudad($value);
				break;
			case 56:
				$this->setZip($value);
				break;
			case 57:
				$this->setWebsite($value);
				break;
			case 58:
				$this->setFormtype($value);
				break;
			case 59:
				$this->setTaxid($value);
				break;
			case 60:
				$this->setContribuE($value);
				break;
			case 61:
				$this->setPorcEsp($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProvPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoProv($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProvDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCoSeg($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCoZon($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setInactivo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setProductos($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDirec1($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDirec2($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTelefonos($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFax($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setRespons($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFechaReg($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTipo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setComUltCo($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFecUltCo($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNetUltCo($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setSaldo($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setSaldoIni($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setMontCre($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setPlazPag($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDescPpago($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDescGlob($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setTipoIva($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setIva($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setRif($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setNacional($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDisCen($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setNit($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setEmail($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setCoIngr($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setComentario($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCampo1($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setCampo2($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setCampo3($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setCampo4($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setCampo5($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setCampo6($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setCampo7($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setCampo8($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setCoUsIn($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setFeUsIn($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setCoUsMo($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setFeUsMo($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setCoUsEl($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setFeUsEl($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setRevisado($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setTrasnfe($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setCoSucu($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setRowguid($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setJuridico($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setTipoAdi($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setMatriz($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setCoTab($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setTipoPer($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setCoPais($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setCiudad($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setZip($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setWebsite($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setFormtype($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setTaxid($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setContribuE($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setPorcEsp($arr[$keys[61]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProvPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProvPeer::CO_PROV)) $criteria->add(ProvPeer::CO_PROV, $this->co_prov);
		if ($this->isColumnModified(ProvPeer::PROV_DES)) $criteria->add(ProvPeer::PROV_DES, $this->prov_des);
		if ($this->isColumnModified(ProvPeer::CO_SEG)) $criteria->add(ProvPeer::CO_SEG, $this->co_seg);
		if ($this->isColumnModified(ProvPeer::CO_ZON)) $criteria->add(ProvPeer::CO_ZON, $this->co_zon);
		if ($this->isColumnModified(ProvPeer::INACTIVO)) $criteria->add(ProvPeer::INACTIVO, $this->inactivo);
		if ($this->isColumnModified(ProvPeer::PRODUCTOS)) $criteria->add(ProvPeer::PRODUCTOS, $this->productos);
		if ($this->isColumnModified(ProvPeer::DIREC1)) $criteria->add(ProvPeer::DIREC1, $this->direc1);
		if ($this->isColumnModified(ProvPeer::DIREC2)) $criteria->add(ProvPeer::DIREC2, $this->direc2);
		if ($this->isColumnModified(ProvPeer::TELEFONOS)) $criteria->add(ProvPeer::TELEFONOS, $this->telefonos);
		if ($this->isColumnModified(ProvPeer::FAX)) $criteria->add(ProvPeer::FAX, $this->fax);
		if ($this->isColumnModified(ProvPeer::RESPONS)) $criteria->add(ProvPeer::RESPONS, $this->respons);
		if ($this->isColumnModified(ProvPeer::FECHA_REG)) $criteria->add(ProvPeer::FECHA_REG, $this->fecha_reg);
		if ($this->isColumnModified(ProvPeer::TIPO)) $criteria->add(ProvPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(ProvPeer::COM_ULT_CO)) $criteria->add(ProvPeer::COM_ULT_CO, $this->com_ult_co);
		if ($this->isColumnModified(ProvPeer::FEC_ULT_CO)) $criteria->add(ProvPeer::FEC_ULT_CO, $this->fec_ult_co);
		if ($this->isColumnModified(ProvPeer::NET_ULT_CO)) $criteria->add(ProvPeer::NET_ULT_CO, $this->net_ult_co);
		if ($this->isColumnModified(ProvPeer::SALDO)) $criteria->add(ProvPeer::SALDO, $this->saldo);
		if ($this->isColumnModified(ProvPeer::SALDO_INI)) $criteria->add(ProvPeer::SALDO_INI, $this->saldo_ini);
		if ($this->isColumnModified(ProvPeer::MONT_CRE)) $criteria->add(ProvPeer::MONT_CRE, $this->mont_cre);
		if ($this->isColumnModified(ProvPeer::PLAZ_PAG)) $criteria->add(ProvPeer::PLAZ_PAG, $this->plaz_pag);
		if ($this->isColumnModified(ProvPeer::DESC_PPAGO)) $criteria->add(ProvPeer::DESC_PPAGO, $this->desc_ppago);
		if ($this->isColumnModified(ProvPeer::DESC_GLOB)) $criteria->add(ProvPeer::DESC_GLOB, $this->desc_glob);
		if ($this->isColumnModified(ProvPeer::TIPO_IVA)) $criteria->add(ProvPeer::TIPO_IVA, $this->tipo_iva);
		if ($this->isColumnModified(ProvPeer::IVA)) $criteria->add(ProvPeer::IVA, $this->iva);
		if ($this->isColumnModified(ProvPeer::RIF)) $criteria->add(ProvPeer::RIF, $this->rif);
		if ($this->isColumnModified(ProvPeer::NACIONAL)) $criteria->add(ProvPeer::NACIONAL, $this->nacional);
		if ($this->isColumnModified(ProvPeer::DIS_CEN)) $criteria->add(ProvPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(ProvPeer::NIT)) $criteria->add(ProvPeer::NIT, $this->nit);
		if ($this->isColumnModified(ProvPeer::EMAIL)) $criteria->add(ProvPeer::EMAIL, $this->email);
		if ($this->isColumnModified(ProvPeer::CO_INGR)) $criteria->add(ProvPeer::CO_INGR, $this->co_ingr);
		if ($this->isColumnModified(ProvPeer::COMENTARIO)) $criteria->add(ProvPeer::COMENTARIO, $this->comentario);
		if ($this->isColumnModified(ProvPeer::CAMPO1)) $criteria->add(ProvPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(ProvPeer::CAMPO2)) $criteria->add(ProvPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(ProvPeer::CAMPO3)) $criteria->add(ProvPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(ProvPeer::CAMPO4)) $criteria->add(ProvPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(ProvPeer::CAMPO5)) $criteria->add(ProvPeer::CAMPO5, $this->campo5);
		if ($this->isColumnModified(ProvPeer::CAMPO6)) $criteria->add(ProvPeer::CAMPO6, $this->campo6);
		if ($this->isColumnModified(ProvPeer::CAMPO7)) $criteria->add(ProvPeer::CAMPO7, $this->campo7);
		if ($this->isColumnModified(ProvPeer::CAMPO8)) $criteria->add(ProvPeer::CAMPO8, $this->campo8);
		if ($this->isColumnModified(ProvPeer::CO_US_IN)) $criteria->add(ProvPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(ProvPeer::FE_US_IN)) $criteria->add(ProvPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(ProvPeer::CO_US_MO)) $criteria->add(ProvPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(ProvPeer::FE_US_MO)) $criteria->add(ProvPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(ProvPeer::CO_US_EL)) $criteria->add(ProvPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(ProvPeer::FE_US_EL)) $criteria->add(ProvPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(ProvPeer::REVISADO)) $criteria->add(ProvPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(ProvPeer::TRASNFE)) $criteria->add(ProvPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(ProvPeer::CO_SUCU)) $criteria->add(ProvPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(ProvPeer::ROWGUID)) $criteria->add(ProvPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(ProvPeer::JURIDICO)) $criteria->add(ProvPeer::JURIDICO, $this->juridico);
		if ($this->isColumnModified(ProvPeer::TIPO_ADI)) $criteria->add(ProvPeer::TIPO_ADI, $this->tipo_adi);
		if ($this->isColumnModified(ProvPeer::MATRIZ)) $criteria->add(ProvPeer::MATRIZ, $this->matriz);
		if ($this->isColumnModified(ProvPeer::CO_TAB)) $criteria->add(ProvPeer::CO_TAB, $this->co_tab);
		if ($this->isColumnModified(ProvPeer::TIPO_PER)) $criteria->add(ProvPeer::TIPO_PER, $this->tipo_per);
		if ($this->isColumnModified(ProvPeer::CO_PAIS)) $criteria->add(ProvPeer::CO_PAIS, $this->co_pais);
		if ($this->isColumnModified(ProvPeer::CIUDAD)) $criteria->add(ProvPeer::CIUDAD, $this->ciudad);
		if ($this->isColumnModified(ProvPeer::ZIP)) $criteria->add(ProvPeer::ZIP, $this->zip);
		if ($this->isColumnModified(ProvPeer::WEBSITE)) $criteria->add(ProvPeer::WEBSITE, $this->website);
		if ($this->isColumnModified(ProvPeer::FORMTYPE)) $criteria->add(ProvPeer::FORMTYPE, $this->formtype);
		if ($this->isColumnModified(ProvPeer::TAXID)) $criteria->add(ProvPeer::TAXID, $this->taxid);
		if ($this->isColumnModified(ProvPeer::CONTRIBU_E)) $criteria->add(ProvPeer::CONTRIBU_E, $this->contribu_e);
		if ($this->isColumnModified(ProvPeer::PORC_ESP)) $criteria->add(ProvPeer::PORC_ESP, $this->porc_esp);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProvPeer::DATABASE_NAME);

		$criteria->add(ProvPeer::CO_PROV, $this->co_prov);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoProv();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoProv($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setProvDes($this->prov_des);

		$copyObj->setCoSeg($this->co_seg);

		$copyObj->setCoZon($this->co_zon);

		$copyObj->setInactivo($this->inactivo);

		$copyObj->setProductos($this->productos);

		$copyObj->setDirec1($this->direc1);

		$copyObj->setDirec2($this->direc2);

		$copyObj->setTelefonos($this->telefonos);

		$copyObj->setFax($this->fax);

		$copyObj->setRespons($this->respons);

		$copyObj->setFechaReg($this->fecha_reg);

		$copyObj->setTipo($this->tipo);

		$copyObj->setComUltCo($this->com_ult_co);

		$copyObj->setFecUltCo($this->fec_ult_co);

		$copyObj->setNetUltCo($this->net_ult_co);

		$copyObj->setSaldo($this->saldo);

		$copyObj->setSaldoIni($this->saldo_ini);

		$copyObj->setMontCre($this->mont_cre);

		$copyObj->setPlazPag($this->plaz_pag);

		$copyObj->setDescPpago($this->desc_ppago);

		$copyObj->setDescGlob($this->desc_glob);

		$copyObj->setTipoIva($this->tipo_iva);

		$copyObj->setIva($this->iva);

		$copyObj->setRif($this->rif);

		$copyObj->setNacional($this->nacional);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setNit($this->nit);

		$copyObj->setEmail($this->email);

		$copyObj->setCoIngr($this->co_ingr);

		$copyObj->setComentario($this->comentario);

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

		$copyObj->setCoPais($this->co_pais);

		$copyObj->setCiudad($this->ciudad);

		$copyObj->setZip($this->zip);

		$copyObj->setWebsite($this->website);

		$copyObj->setFormtype($this->formtype);

		$copyObj->setTaxid($this->taxid);

		$copyObj->setContribuE($this->contribu_e);

		$copyObj->setPorcEsp($this->porc_esp);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getArts() as $relObj) {
				$copyObj->addArt($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoProv(NULL); 
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
			self::$peer = new ProvPeer();
		}
		return self::$peer;
	}

	
	public function setSegmento($v)
	{


		if ($v === null) {
			$this->setCoSeg(' ');
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

	
	public function setZona($v)
	{


		if ($v === null) {
			$this->setCoZon(' ');
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

	
	public function setTipoPro($v)
	{


		if ($v === null) {
			$this->setTipo(' ');
		} else {
			$this->setTipo($v->getTipPro());
		}


		$this->aTipoPro = $v;
	}


	
	public function getTipoPro($con = null)
	{
				include_once 'lib/model/om/BaseTipoProPeer.php';

		if ($this->aTipoPro === null && (($this->tipo !== "" && $this->tipo !== null))) {

			$this->aTipoPro = TipoProPeer::retrieveByPK($this->tipo, $con);

			
		}
		return $this->aTipoPro;
	}

	
	public function setCtaIngr($v)
	{


		if ($v === null) {
			$this->setCoIngr(' ');
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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				ArtPeer::addSelectColumns($criteria);
				$this->collArts = ArtPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

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

		$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

		return ArtPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addArt(Art $l)
	{
		$this->collArts[] = $l;
		$l->setProv($this);
	}


	
	public function getArtsJoinLinArt($criteria = null, $con = null)
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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinLinArt($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinCatArt($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinSubLin($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinColores($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinProceden($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinProceden($criteria, $con);
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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedByUniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinUnidadesRelatedBySuniVenta($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

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

				$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(ArtPeer::CO_PROV, $this->getCoProv());

			if (!isset($this->lastArtCriteria) || !$this->lastArtCriteria->equals($criteria)) {
				$this->collArts = ArtPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastArtCriteria = $criteria;

		return $this->collArts;
	}

} 