<?php


abstract class BaseArt extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_art;


	
	protected $art_des = ' ';


	
	protected $fecha_reg;


	
	protected $manj_ser = false;


	
	protected $co_lin = ' ';


	
	protected $co_cat = ' ';


	
	protected $co_subl = ' ';


	
	protected $co_color = ' ';


	
	protected $item = ' ';


	
	protected $ref = ' ';


	
	protected $modelo = ' ';


	
	protected $procedenci = ' ';


	
	protected $comentario = ' ';


	
	protected $co_prov = ' ';


	
	protected $ubicacion = ' ';


	
	protected $uni_venta = ' ';


	
	protected $uni_compra = ' ';


	
	protected $uni_relac = 0;


	
	protected $relac_aut = 0;


	
	protected $stock_act = 0;


	
	protected $stock_com = 0;


	
	protected $sstock_com = 0;


	
	protected $stock_lle = 0;


	
	protected $sstock_lle = 0;


	
	protected $stock_des = 0;


	
	protected $sstock_des = 0;


	
	protected $suni_venta = ' ';


	
	protected $suni_compr = ' ';


	
	protected $suni_relac = 0;


	
	protected $sstock_act = 0;


	
	protected $relac_comp = 0;


	
	protected $relac_vent = 0;


	
	protected $pto_pedido = 0;


	
	protected $stock_max = 0;


	
	protected $stock_min = 0;


	
	protected $prec_om = false;


	
	protected $prec_vta1 = 0;


	
	protected $fec_prec_v;


	
	protected $fec_prec_2;


	
	protected $prec_vta2 = 0;


	
	protected $fec_prec_3;


	
	protected $prec_vta3 = 0;


	
	protected $fec_prec_4;


	
	protected $prec_vta4 = 0;


	
	protected $fec_prec_5;


	
	protected $prec_vta5 = 0;


	
	protected $prec_agr1 = 0;


	
	protected $prec_agr2 = 0;


	
	protected $prec_agr3 = 0;


	
	protected $prec_agr4 = 0;


	
	protected $prec_agr5 = 0;


	
	protected $can_agr = 0;


	
	protected $fec_des_p5;


	
	protected $fec_has_p5;


	
	protected $co_imp = ' ';


	
	protected $margen_max = 0;


	
	protected $ult_cos_un = 0;


	
	protected $fec_ult_co;


	
	protected $cos_pro_un = 0;


	
	protected $fec_cos_pr;


	
	protected $cos_merc = 0;


	
	protected $fec_cos_me;


	
	protected $cos_prov = 0;


	
	protected $fec_cos_p2;


	
	protected $ult_cos_do = 0;


	
	protected $fec_cos_do;


	
	protected $cos_un_an = 0;


	
	protected $fec_cos_an;


	
	protected $ult_cos_om = 0;


	
	protected $fec_ult_om;


	
	protected $cos_pro_om = 0;


	
	protected $fec_pro_om;


	
	protected $tipo_cos = ' ';


	
	protected $mont_comi = 0;


	
	protected $porc_cos = 0;


	
	protected $mont_cos = 0;


	
	protected $porc_gas = 0;


	
	protected $mont_gas = 0;


	
	protected $f_cost;


	
	protected $fisico = false;


	
	protected $punt_cli = 0;


	
	protected $punt_pro = 0;


	
	protected $dias_repos = 0;


	
	protected $tipo = ' ';


	
	protected $alm_prin = ' ';


	
	protected $anulado = false;


	
	protected $tipo_imp = ' ';


	
	protected $dis_cen = ' ';


	
	protected $mon_ilc = 0;


	
	protected $capacidad = 0;


	
	protected $grado_al = 0;


	
	protected $tipo_licor = ' ';


	
	protected $compuesto = false;


	
	protected $picture;


	
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


	
	protected $tuni_venta = ' ';


	
	protected $equi_uni1 = 1;


	
	protected $equi_uni2 = 1;


	
	protected $equi_uni3 = 1;


	
	protected $lote = false;


	
	protected $serialp = ' ';


	
	protected $valido = false;


	
	protected $atributo1 = false;


	
	protected $vatributo1 = ' ';


	
	protected $atributo2 = false;


	
	protected $vatributo2 = ' ';


	
	protected $atributo3 = false;


	
	protected $vatributo3 = ' ';


	
	protected $atributo4 = false;


	
	protected $vatributo4 = ' ';


	
	protected $atributo5 = false;


	
	protected $vatributo5 = ' ';


	
	protected $atributo6 = false;


	
	protected $vatributo6 = ' ';


	
	protected $garantia = ' ';


	
	protected $peso = 0;


	
	protected $pie = 0;


	
	protected $margen1 = 0;


	
	protected $margen2 = 0;


	
	protected $margen3 = 0;


	
	protected $margen4 = 0;


	
	protected $margen5 = 0;


	
	protected $row_id;


	
	protected $imagen1 = ' ';


	
	protected $imagen2 = ' ';


	
	protected $i_art_des = ' ';


	
	protected $uni_emp = ' ';


	
	protected $rel_emp = 1;


	
	protected $movil = false;

	
	protected $aLinArt;

	
	protected $aCatArt;

	
	protected $aSubLin;

	
	protected $aColores;

	
	protected $aProceden;

	
	protected $aProv;

	
	protected $aUnidadesRelatedByUniVenta;

	
	protected $aUnidadesRelatedBySuniVenta;

	
	protected $aTabulado;

	
	protected $collRengFacs;

	
	protected $lastRengFacCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoArt()
	{

		return $this->co_art;
	}

	
	public function getArtDes()
	{

		return $this->art_des;
	}

	
	public function getFechaReg()
	{

		return $this->fecha_reg;
	}

	
	public function getManjSer()
	{

		return $this->manj_ser;
	}

	
	public function getCoLin()
	{

		return $this->co_lin;
	}

	
	public function getCoCat()
	{

		return $this->co_cat;
	}

	
	public function getCoSubl()
	{

		return $this->co_subl;
	}

	
	public function getCoColor()
	{

		return $this->co_color;
	}

	
	public function getItem()
	{

		return $this->item;
	}

	
	public function getRef()
	{

		return $this->ref;
	}

	
	public function getModelo()
	{

		return $this->modelo;
	}

	
	public function getProcedenci()
	{

		return $this->procedenci;
	}

	
	public function getComentario()
	{

		return $this->comentario;
	}

	
	public function getCoProv()
	{

		return $this->co_prov;
	}

	
	public function getUbicacion()
	{

		return $this->ubicacion;
	}

	
	public function getUniVenta()
	{

		return $this->uni_venta;
	}

	
	public function getUniCompra()
	{

		return $this->uni_compra;
	}

	
	public function getUniRelac()
	{

		return $this->uni_relac;
	}

	
	public function getRelacAut()
	{

		return $this->relac_aut;
	}

	
	public function getStockAct()
	{

		return $this->stock_act;
	}

	
	public function getStockCom()
	{

		return $this->stock_com;
	}

	
	public function getSstockCom()
	{

		return $this->sstock_com;
	}

	
	public function getStockLle()
	{

		return $this->stock_lle;
	}

	
	public function getSstockLle()
	{

		return $this->sstock_lle;
	}

	
	public function getStockDes()
	{

		return $this->stock_des;
	}

	
	public function getSstockDes()
	{

		return $this->sstock_des;
	}

	
	public function getSuniVenta()
	{

		return $this->suni_venta;
	}

	
	public function getSuniCompr()
	{

		return $this->suni_compr;
	}

	
	public function getSuniRelac()
	{

		return $this->suni_relac;
	}

	
	public function getSstockAct()
	{

		return $this->sstock_act;
	}

	
	public function getRelacComp()
	{

		return $this->relac_comp;
	}

	
	public function getRelacVent()
	{

		return $this->relac_vent;
	}

	
	public function getPtoPedido()
	{

		return $this->pto_pedido;
	}

	
	public function getStockMax()
	{

		return $this->stock_max;
	}

	
	public function getStockMin()
	{

		return $this->stock_min;
	}

	
	public function getPrecOm()
	{

		return $this->prec_om;
	}

	
	public function getPrecVta1()
	{

		return $this->prec_vta1;
	}

	
	public function getFecPrecV()
	{

		return $this->fec_prec_v;
	}

	
	public function getFecPrec2()
	{

		return $this->fec_prec_2;
	}

	
	public function getPrecVta2()
	{

		return $this->prec_vta2;
	}

	
	public function getFecPrec3()
	{

		return $this->fec_prec_3;
	}

	
	public function getPrecVta3()
	{

		return $this->prec_vta3;
	}

	
	public function getFecPrec4()
	{

		return $this->fec_prec_4;
	}

	
	public function getPrecVta4()
	{

		return $this->prec_vta4;
	}

	
	public function getFecPrec5()
	{

		return $this->fec_prec_5;
	}

	
	public function getPrecVta5()
	{

		return $this->prec_vta5;
	}

	
	public function getPrecAgr1()
	{

		return $this->prec_agr1;
	}

	
	public function getPrecAgr2()
	{

		return $this->prec_agr2;
	}

	
	public function getPrecAgr3()
	{

		return $this->prec_agr3;
	}

	
	public function getPrecAgr4()
	{

		return $this->prec_agr4;
	}

	
	public function getPrecAgr5()
	{

		return $this->prec_agr5;
	}

	
	public function getCanAgr()
	{

		return $this->can_agr;
	}

	
	public function getFecDesP5()
	{

		return $this->fec_des_p5;
	}

	
	public function getFecHasP5()
	{

		return $this->fec_has_p5;
	}

	
	public function getCoImp()
	{

		return $this->co_imp;
	}

	
	public function getMargenMax()
	{

		return $this->margen_max;
	}

	
	public function getUltCosUn()
	{

		return $this->ult_cos_un;
	}

	
	public function getFecUltCo()
	{

		return $this->fec_ult_co;
	}

	
	public function getCosProUn()
	{

		return $this->cos_pro_un;
	}

	
	public function getFecCosPr()
	{

		return $this->fec_cos_pr;
	}

	
	public function getCosMerc()
	{

		return $this->cos_merc;
	}

	
	public function getFecCosMe()
	{

		return $this->fec_cos_me;
	}

	
	public function getCosProv()
	{

		return $this->cos_prov;
	}

	
	public function getFecCosP2()
	{

		return $this->fec_cos_p2;
	}

	
	public function getUltCosDo()
	{

		return $this->ult_cos_do;
	}

	
	public function getFecCosDo()
	{

		return $this->fec_cos_do;
	}

	
	public function getCosUnAn()
	{

		return $this->cos_un_an;
	}

	
	public function getFecCosAn()
	{

		return $this->fec_cos_an;
	}

	
	public function getUltCosOm()
	{

		return $this->ult_cos_om;
	}

	
	public function getFecUltOm()
	{

		return $this->fec_ult_om;
	}

	
	public function getCosProOm()
	{

		return $this->cos_pro_om;
	}

	
	public function getFecProOm()
	{

		return $this->fec_pro_om;
	}

	
	public function getTipoCos()
	{

		return $this->tipo_cos;
	}

	
	public function getMontComi()
	{

		return $this->mont_comi;
	}

	
	public function getPorcCos()
	{

		return $this->porc_cos;
	}

	
	public function getMontCos()
	{

		return $this->mont_cos;
	}

	
	public function getPorcGas()
	{

		return $this->porc_gas;
	}

	
	public function getMontGas()
	{

		return $this->mont_gas;
	}

	
	public function getFCost()
	{

		return $this->f_cost;
	}

	
	public function getFisico()
	{

		return $this->fisico;
	}

	
	public function getPuntCli()
	{

		return $this->punt_cli;
	}

	
	public function getPuntPro()
	{

		return $this->punt_pro;
	}

	
	public function getDiasRepos()
	{

		return $this->dias_repos;
	}

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getAlmPrin()
	{

		return $this->alm_prin;
	}

	
	public function getAnulado()
	{

		return $this->anulado;
	}

	
	public function getTipoImp()
	{

		return $this->tipo_imp;
	}

	
	public function getDisCen()
	{

		return $this->dis_cen;
	}

	
	public function getMonIlc()
	{

		return $this->mon_ilc;
	}

	
	public function getCapacidad()
	{

		return $this->capacidad;
	}

	
	public function getGradoAl()
	{

		return $this->grado_al;
	}

	
	public function getTipoLicor()
	{

		return $this->tipo_licor;
	}

	
	public function getCompuesto()
	{

		return $this->compuesto;
	}

	
	public function getPicture()
	{

		return $this->picture;
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

	
	public function getTuniVenta()
	{

		return $this->tuni_venta;
	}

	
	public function getEquiUni1()
	{

		return $this->equi_uni1;
	}

	
	public function getEquiUni2()
	{

		return $this->equi_uni2;
	}

	
	public function getEquiUni3()
	{

		return $this->equi_uni3;
	}

	
	public function getLote()
	{

		return $this->lote;
	}

	
	public function getSerialp()
	{

		return $this->serialp;
	}

	
	public function getValido()
	{

		return $this->valido;
	}

	
	public function getAtributo1()
	{

		return $this->atributo1;
	}

	
	public function getVatributo1()
	{

		return $this->vatributo1;
	}

	
	public function getAtributo2()
	{

		return $this->atributo2;
	}

	
	public function getVatributo2()
	{

		return $this->vatributo2;
	}

	
	public function getAtributo3()
	{

		return $this->atributo3;
	}

	
	public function getVatributo3()
	{

		return $this->vatributo3;
	}

	
	public function getAtributo4()
	{

		return $this->atributo4;
	}

	
	public function getVatributo4()
	{

		return $this->vatributo4;
	}

	
	public function getAtributo5()
	{

		return $this->atributo5;
	}

	
	public function getVatributo5()
	{

		return $this->vatributo5;
	}

	
	public function getAtributo6()
	{

		return $this->atributo6;
	}

	
	public function getVatributo6()
	{

		return $this->vatributo6;
	}

	
	public function getGarantia()
	{

		return $this->garantia;
	}

	
	public function getPeso()
	{

		return $this->peso;
	}

	
	public function getPie()
	{

		return $this->pie;
	}

	
	public function getMargen1()
	{

		return $this->margen1;
	}

	
	public function getMargen2()
	{

		return $this->margen2;
	}

	
	public function getMargen3()
	{

		return $this->margen3;
	}

	
	public function getMargen4()
	{

		return $this->margen4;
	}

	
	public function getMargen5()
	{

		return $this->margen5;
	}

	
	public function getRowId()
	{

		return $this->row_id;
	}

	
	public function getImagen1()
	{

		return $this->imagen1;
	}

	
	public function getImagen2()
	{

		return $this->imagen2;
	}

	
	public function getIArtDes()
	{

		return $this->i_art_des;
	}

	
	public function getUniEmp()
	{

		return $this->uni_emp;
	}

	
	public function getRelEmp()
	{

		return $this->rel_emp;
	}

	
	public function getMovil()
	{

		return $this->movil;
	}

	
	public function setCoArt($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_art !== $v) {
			$this->co_art = $v;
			$this->modifiedColumns[] = ArtPeer::CO_ART;
		}

	} 
	
	public function setArtDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->art_des !== $v || $v === ' ') {
			$this->art_des = $v;
			$this->modifiedColumns[] = ArtPeer::ART_DES;
		}

	} 
	
	public function setFechaReg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fecha_reg !== $v) {
			$this->fecha_reg = $v;
			$this->modifiedColumns[] = ArtPeer::FECHA_REG;
		}

	} 
	
	public function setManjSer($v)
	{

		if ($this->manj_ser !== $v || $v === false) {
			$this->manj_ser = $v;
			$this->modifiedColumns[] = ArtPeer::MANJ_SER;
		}

	} 
	
	public function setCoLin($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_lin !== $v || $v === ' ') {
			$this->co_lin = $v;
			$this->modifiedColumns[] = ArtPeer::CO_LIN;
		}

		if ($this->aLinArt !== null && $this->aLinArt->getCoLin() !== $v) {
			$this->aLinArt = null;
		}

	} 
	
	public function setCoCat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_cat !== $v || $v === ' ') {
			$this->co_cat = $v;
			$this->modifiedColumns[] = ArtPeer::CO_CAT;
		}

		if ($this->aCatArt !== null && $this->aCatArt->getCoCat() !== $v) {
			$this->aCatArt = null;
		}

	} 
	
	public function setCoSubl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_subl !== $v || $v === ' ') {
			$this->co_subl = $v;
			$this->modifiedColumns[] = ArtPeer::CO_SUBL;
		}

		if ($this->aSubLin !== null && $this->aSubLin->getCoLin() !== $v) {
			$this->aSubLin = null;
		}

	} 
	
	public function setCoColor($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_color !== $v || $v === ' ') {
			$this->co_color = $v;
			$this->modifiedColumns[] = ArtPeer::CO_COLOR;
		}

		if ($this->aColores !== null && $this->aColores->getCoCol() !== $v) {
			$this->aColores = null;
		}

	} 
	
	public function setItem($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->item !== $v || $v === ' ') {
			$this->item = $v;
			$this->modifiedColumns[] = ArtPeer::ITEM;
		}

	} 
	
	public function setRef($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ref !== $v || $v === ' ') {
			$this->ref = $v;
			$this->modifiedColumns[] = ArtPeer::REF;
		}

	} 
	
	public function setModelo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modelo !== $v || $v === ' ') {
			$this->modelo = $v;
			$this->modifiedColumns[] = ArtPeer::MODELO;
		}

	} 
	
	public function setProcedenci($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->procedenci !== $v || $v === ' ') {
			$this->procedenci = $v;
			$this->modifiedColumns[] = ArtPeer::PROCEDENCI;
		}

		if ($this->aProceden !== null && $this->aProceden->getCodProc() !== $v) {
			$this->aProceden = null;
		}

	} 
	
	public function setComentario($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comentario !== $v || $v === ' ') {
			$this->comentario = $v;
			$this->modifiedColumns[] = ArtPeer::COMENTARIO;
		}

	} 
	
	public function setCoProv($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_prov !== $v || $v === ' ') {
			$this->co_prov = $v;
			$this->modifiedColumns[] = ArtPeer::CO_PROV;
		}

		if ($this->aProv !== null && $this->aProv->getCoProv() !== $v) {
			$this->aProv = null;
		}

	} 
	
	public function setUbicacion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ubicacion !== $v || $v === ' ') {
			$this->ubicacion = $v;
			$this->modifiedColumns[] = ArtPeer::UBICACION;
		}

	} 
	
	public function setUniVenta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->uni_venta !== $v || $v === ' ') {
			$this->uni_venta = $v;
			$this->modifiedColumns[] = ArtPeer::UNI_VENTA;
		}

		if ($this->aUnidadesRelatedByUniVenta !== null && $this->aUnidadesRelatedByUniVenta->getCoUni() !== $v) {
			$this->aUnidadesRelatedByUniVenta = null;
		}

	} 
	
	public function setUniCompra($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->uni_compra !== $v || $v === ' ') {
			$this->uni_compra = $v;
			$this->modifiedColumns[] = ArtPeer::UNI_COMPRA;
		}

	} 
	
	public function setUniRelac($v)
	{

		if ($this->uni_relac !== $v || $v === 0) {
			$this->uni_relac = $v;
			$this->modifiedColumns[] = ArtPeer::UNI_RELAC;
		}

	} 
	
	public function setRelacAut($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->relac_aut !== $v || $v === 0) {
			$this->relac_aut = $v;
			$this->modifiedColumns[] = ArtPeer::RELAC_AUT;
		}

	} 
	
	public function setStockAct($v)
	{

		if ($this->stock_act !== $v || $v === 0) {
			$this->stock_act = $v;
			$this->modifiedColumns[] = ArtPeer::STOCK_ACT;
		}

	} 
	
	public function setStockCom($v)
	{

		if ($this->stock_com !== $v || $v === 0) {
			$this->stock_com = $v;
			$this->modifiedColumns[] = ArtPeer::STOCK_COM;
		}

	} 
	
	public function setSstockCom($v)
	{

		if ($this->sstock_com !== $v || $v === 0) {
			$this->sstock_com = $v;
			$this->modifiedColumns[] = ArtPeer::SSTOCK_COM;
		}

	} 
	
	public function setStockLle($v)
	{

		if ($this->stock_lle !== $v || $v === 0) {
			$this->stock_lle = $v;
			$this->modifiedColumns[] = ArtPeer::STOCK_LLE;
		}

	} 
	
	public function setSstockLle($v)
	{

		if ($this->sstock_lle !== $v || $v === 0) {
			$this->sstock_lle = $v;
			$this->modifiedColumns[] = ArtPeer::SSTOCK_LLE;
		}

	} 
	
	public function setStockDes($v)
	{

		if ($this->stock_des !== $v || $v === 0) {
			$this->stock_des = $v;
			$this->modifiedColumns[] = ArtPeer::STOCK_DES;
		}

	} 
	
	public function setSstockDes($v)
	{

		if ($this->sstock_des !== $v || $v === 0) {
			$this->sstock_des = $v;
			$this->modifiedColumns[] = ArtPeer::SSTOCK_DES;
		}

	} 
	
	public function setSuniVenta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->suni_venta !== $v || $v === ' ') {
			$this->suni_venta = $v;
			$this->modifiedColumns[] = ArtPeer::SUNI_VENTA;
		}

		if ($this->aUnidadesRelatedBySuniVenta !== null && $this->aUnidadesRelatedBySuniVenta->getCoUni() !== $v) {
			$this->aUnidadesRelatedBySuniVenta = null;
		}

	} 
	
	public function setSuniCompr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->suni_compr !== $v || $v === ' ') {
			$this->suni_compr = $v;
			$this->modifiedColumns[] = ArtPeer::SUNI_COMPR;
		}

	} 
	
	public function setSuniRelac($v)
	{

		if ($this->suni_relac !== $v || $v === 0) {
			$this->suni_relac = $v;
			$this->modifiedColumns[] = ArtPeer::SUNI_RELAC;
		}

	} 
	
	public function setSstockAct($v)
	{

		if ($this->sstock_act !== $v || $v === 0) {
			$this->sstock_act = $v;
			$this->modifiedColumns[] = ArtPeer::SSTOCK_ACT;
		}

	} 
	
	public function setRelacComp($v)
	{

		if ($this->relac_comp !== $v || $v === 0) {
			$this->relac_comp = $v;
			$this->modifiedColumns[] = ArtPeer::RELAC_COMP;
		}

	} 
	
	public function setRelacVent($v)
	{

		if ($this->relac_vent !== $v || $v === 0) {
			$this->relac_vent = $v;
			$this->modifiedColumns[] = ArtPeer::RELAC_VENT;
		}

	} 
	
	public function setPtoPedido($v)
	{

		if ($this->pto_pedido !== $v || $v === 0) {
			$this->pto_pedido = $v;
			$this->modifiedColumns[] = ArtPeer::PTO_PEDIDO;
		}

	} 
	
	public function setStockMax($v)
	{

		if ($this->stock_max !== $v || $v === 0) {
			$this->stock_max = $v;
			$this->modifiedColumns[] = ArtPeer::STOCK_MAX;
		}

	} 
	
	public function setStockMin($v)
	{

		if ($this->stock_min !== $v || $v === 0) {
			$this->stock_min = $v;
			$this->modifiedColumns[] = ArtPeer::STOCK_MIN;
		}

	} 
	
	public function setPrecOm($v)
	{

		if ($this->prec_om !== $v || $v === false) {
			$this->prec_om = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_OM;
		}

	} 
	
	public function setPrecVta1($v)
	{

		if ($this->prec_vta1 !== $v || $v === 0) {
			$this->prec_vta1 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_VTA1;
		}

	} 
	
	public function setFecPrecV($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_prec_v !== $v) {
			$this->fec_prec_v = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_PREC_V;
		}

	} 
	
	public function setFecPrec2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_prec_2 !== $v) {
			$this->fec_prec_2 = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_PREC_2;
		}

	} 
	
	public function setPrecVta2($v)
	{

		if ($this->prec_vta2 !== $v || $v === 0) {
			$this->prec_vta2 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_VTA2;
		}

	} 
	
	public function setFecPrec3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_prec_3 !== $v) {
			$this->fec_prec_3 = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_PREC_3;
		}

	} 
	
	public function setPrecVta3($v)
	{

		if ($this->prec_vta3 !== $v || $v === 0) {
			$this->prec_vta3 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_VTA3;
		}

	} 
	
	public function setFecPrec4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_prec_4 !== $v) {
			$this->fec_prec_4 = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_PREC_4;
		}

	} 
	
	public function setPrecVta4($v)
	{

		if ($this->prec_vta4 !== $v || $v === 0) {
			$this->prec_vta4 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_VTA4;
		}

	} 
	
	public function setFecPrec5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_prec_5 !== $v) {
			$this->fec_prec_5 = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_PREC_5;
		}

	} 
	
	public function setPrecVta5($v)
	{

		if ($this->prec_vta5 !== $v || $v === 0) {
			$this->prec_vta5 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_VTA5;
		}

	} 
	
	public function setPrecAgr1($v)
	{

		if ($this->prec_agr1 !== $v || $v === 0) {
			$this->prec_agr1 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_AGR1;
		}

	} 
	
	public function setPrecAgr2($v)
	{

		if ($this->prec_agr2 !== $v || $v === 0) {
			$this->prec_agr2 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_AGR2;
		}

	} 
	
	public function setPrecAgr3($v)
	{

		if ($this->prec_agr3 !== $v || $v === 0) {
			$this->prec_agr3 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_AGR3;
		}

	} 
	
	public function setPrecAgr4($v)
	{

		if ($this->prec_agr4 !== $v || $v === 0) {
			$this->prec_agr4 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_AGR4;
		}

	} 
	
	public function setPrecAgr5($v)
	{

		if ($this->prec_agr5 !== $v || $v === 0) {
			$this->prec_agr5 = $v;
			$this->modifiedColumns[] = ArtPeer::PREC_AGR5;
		}

	} 
	
	public function setCanAgr($v)
	{

		if ($this->can_agr !== $v || $v === 0) {
			$this->can_agr = $v;
			$this->modifiedColumns[] = ArtPeer::CAN_AGR;
		}

	} 
	
	public function setFecDesP5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_des_p5 !== $v) {
			$this->fec_des_p5 = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_DES_P5;
		}

	} 
	
	public function setFecHasP5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_has_p5 !== $v) {
			$this->fec_has_p5 = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_HAS_P5;
		}

	} 
	
	public function setCoImp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_imp !== $v || $v === ' ') {
			$this->co_imp = $v;
			$this->modifiedColumns[] = ArtPeer::CO_IMP;
		}

	} 
	
	public function setMargenMax($v)
	{

		if ($this->margen_max !== $v || $v === 0) {
			$this->margen_max = $v;
			$this->modifiedColumns[] = ArtPeer::MARGEN_MAX;
		}

	} 
	
	public function setUltCosUn($v)
	{

		if ($this->ult_cos_un !== $v || $v === 0) {
			$this->ult_cos_un = $v;
			$this->modifiedColumns[] = ArtPeer::ULT_COS_UN;
		}

	} 
	
	public function setFecUltCo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_ult_co !== $v) {
			$this->fec_ult_co = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_ULT_CO;
		}

	} 
	
	public function setCosProUn($v)
	{

		if ($this->cos_pro_un !== $v || $v === 0) {
			$this->cos_pro_un = $v;
			$this->modifiedColumns[] = ArtPeer::COS_PRO_UN;
		}

	} 
	
	public function setFecCosPr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_cos_pr !== $v) {
			$this->fec_cos_pr = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_COS_PR;
		}

	} 
	
	public function setCosMerc($v)
	{

		if ($this->cos_merc !== $v || $v === 0) {
			$this->cos_merc = $v;
			$this->modifiedColumns[] = ArtPeer::COS_MERC;
		}

	} 
	
	public function setFecCosMe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_cos_me !== $v) {
			$this->fec_cos_me = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_COS_ME;
		}

	} 
	
	public function setCosProv($v)
	{

		if ($this->cos_prov !== $v || $v === 0) {
			$this->cos_prov = $v;
			$this->modifiedColumns[] = ArtPeer::COS_PROV;
		}

	} 
	
	public function setFecCosP2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_cos_p2 !== $v) {
			$this->fec_cos_p2 = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_COS_P2;
		}

	} 
	
	public function setUltCosDo($v)
	{

		if ($this->ult_cos_do !== $v || $v === 0) {
			$this->ult_cos_do = $v;
			$this->modifiedColumns[] = ArtPeer::ULT_COS_DO;
		}

	} 
	
	public function setFecCosDo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_cos_do !== $v) {
			$this->fec_cos_do = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_COS_DO;
		}

	} 
	
	public function setCosUnAn($v)
	{

		if ($this->cos_un_an !== $v || $v === 0) {
			$this->cos_un_an = $v;
			$this->modifiedColumns[] = ArtPeer::COS_UN_AN;
		}

	} 
	
	public function setFecCosAn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_cos_an !== $v) {
			$this->fec_cos_an = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_COS_AN;
		}

	} 
	
	public function setUltCosOm($v)
	{

		if ($this->ult_cos_om !== $v || $v === 0) {
			$this->ult_cos_om = $v;
			$this->modifiedColumns[] = ArtPeer::ULT_COS_OM;
		}

	} 
	
	public function setFecUltOm($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_ult_om !== $v) {
			$this->fec_ult_om = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_ULT_OM;
		}

	} 
	
	public function setCosProOm($v)
	{

		if ($this->cos_pro_om !== $v || $v === 0) {
			$this->cos_pro_om = $v;
			$this->modifiedColumns[] = ArtPeer::COS_PRO_OM;
		}

	} 
	
	public function setFecProOm($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fec_pro_om !== $v) {
			$this->fec_pro_om = $v;
			$this->modifiedColumns[] = ArtPeer::FEC_PRO_OM;
		}

	} 
	
	public function setTipoCos($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_cos !== $v || $v === ' ') {
			$this->tipo_cos = $v;
			$this->modifiedColumns[] = ArtPeer::TIPO_COS;
		}

	} 
	
	public function setMontComi($v)
	{

		if ($this->mont_comi !== $v || $v === 0) {
			$this->mont_comi = $v;
			$this->modifiedColumns[] = ArtPeer::MONT_COMI;
		}

	} 
	
	public function setPorcCos($v)
	{

		if ($this->porc_cos !== $v || $v === 0) {
			$this->porc_cos = $v;
			$this->modifiedColumns[] = ArtPeer::PORC_COS;
		}

	} 
	
	public function setMontCos($v)
	{

		if ($this->mont_cos !== $v || $v === 0) {
			$this->mont_cos = $v;
			$this->modifiedColumns[] = ArtPeer::MONT_COS;
		}

	} 
	
	public function setPorcGas($v)
	{

		if ($this->porc_gas !== $v || $v === 0) {
			$this->porc_gas = $v;
			$this->modifiedColumns[] = ArtPeer::PORC_GAS;
		}

	} 
	
	public function setMontGas($v)
	{

		if ($this->mont_gas !== $v || $v === 0) {
			$this->mont_gas = $v;
			$this->modifiedColumns[] = ArtPeer::MONT_GAS;
		}

	} 
	
	public function setFCost($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->f_cost !== $v) {
			$this->f_cost = $v;
			$this->modifiedColumns[] = ArtPeer::F_COST;
		}

	} 
	
	public function setFisico($v)
	{

		if ($this->fisico !== $v || $v === false) {
			$this->fisico = $v;
			$this->modifiedColumns[] = ArtPeer::FISICO;
		}

	} 
	
	public function setPuntCli($v)
	{

		if ($this->punt_cli !== $v || $v === 0) {
			$this->punt_cli = $v;
			$this->modifiedColumns[] = ArtPeer::PUNT_CLI;
		}

	} 
	
	public function setPuntPro($v)
	{

		if ($this->punt_pro !== $v || $v === 0) {
			$this->punt_pro = $v;
			$this->modifiedColumns[] = ArtPeer::PUNT_PRO;
		}

	} 
	
	public function setDiasRepos($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dias_repos !== $v || $v === 0) {
			$this->dias_repos = $v;
			$this->modifiedColumns[] = ArtPeer::DIAS_REPOS;
		}

	} 
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v || $v === ' ') {
			$this->tipo = $v;
			$this->modifiedColumns[] = ArtPeer::TIPO;
		}

	} 
	
	public function setAlmPrin($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->alm_prin !== $v || $v === ' ') {
			$this->alm_prin = $v;
			$this->modifiedColumns[] = ArtPeer::ALM_PRIN;
		}

	} 
	
	public function setAnulado($v)
	{

		if ($this->anulado !== $v || $v === false) {
			$this->anulado = $v;
			$this->modifiedColumns[] = ArtPeer::ANULADO;
		}

	} 
	
	public function setTipoImp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_imp !== $v || $v === ' ') {
			$this->tipo_imp = $v;
			$this->modifiedColumns[] = ArtPeer::TIPO_IMP;
		}

		if ($this->aTabulado !== null && $this->aTabulado->getTipo() !== $v) {
			$this->aTabulado = null;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = ArtPeer::DIS_CEN;
		}

	} 
	
	public function setMonIlc($v)
	{

		if ($this->mon_ilc !== $v || $v === 0) {
			$this->mon_ilc = $v;
			$this->modifiedColumns[] = ArtPeer::MON_ILC;
		}

	} 
	
	public function setCapacidad($v)
	{

		if ($this->capacidad !== $v || $v === 0) {
			$this->capacidad = $v;
			$this->modifiedColumns[] = ArtPeer::CAPACIDAD;
		}

	} 
	
	public function setGradoAl($v)
	{

		if ($this->grado_al !== $v || $v === 0) {
			$this->grado_al = $v;
			$this->modifiedColumns[] = ArtPeer::GRADO_AL;
		}

	} 
	
	public function setTipoLicor($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_licor !== $v || $v === ' ') {
			$this->tipo_licor = $v;
			$this->modifiedColumns[] = ArtPeer::TIPO_LICOR;
		}

	} 
	
	public function setCompuesto($v)
	{

		if ($this->compuesto !== $v || $v === false) {
			$this->compuesto = $v;
			$this->modifiedColumns[] = ArtPeer::COMPUESTO;
		}

	} 
	
	public function setPicture($v)
	{

								if ($v instanceof Lob && $v === $this->picture) {
			$changed = $v->isModified();
		} else {
			$changed = ($this->picture !== $v);
		}
		if ($changed) {
			if ( !($v instanceof Lob) ) {
				$obj = new Blob();
				$obj->setContents($v);
			} else {
				$obj = $v;
			}
			$this->picture = $obj;
			$this->modifiedColumns[] = ArtPeer::PICTURE;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === ' ') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === ' ') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === ' ') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === ' ') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO4;
		}

	} 
	
	public function setCampo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo5 !== $v || $v === ' ') {
			$this->campo5 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO5;
		}

	} 
	
	public function setCampo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo6 !== $v || $v === ' ') {
			$this->campo6 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO6;
		}

	} 
	
	public function setCampo7($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo7 !== $v || $v === ' ') {
			$this->campo7 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO7;
		}

	} 
	
	public function setCampo8($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo8 !== $v || $v === ' ') {
			$this->campo8 = $v;
			$this->modifiedColumns[] = ArtPeer::CAMPO8;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === ' ') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = ArtPeer::CO_US_IN;
		}

	} 
	
	public function setFeUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_in !== $v) {
			$this->fe_us_in = $v;
			$this->modifiedColumns[] = ArtPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === ' ') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = ArtPeer::CO_US_MO;
		}

	} 
	
	public function setFeUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_mo !== $v) {
			$this->fe_us_mo = $v;
			$this->modifiedColumns[] = ArtPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === ' ') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = ArtPeer::CO_US_EL;
		}

	} 
	
	public function setFeUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fe_us_el !== $v) {
			$this->fe_us_el = $v;
			$this->modifiedColumns[] = ArtPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === ' ') {
			$this->revisado = $v;
			$this->modifiedColumns[] = ArtPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === ' ') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = ArtPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === ' ') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = ArtPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = ArtPeer::ROWGUID;
		}

	} 
	
	public function setTuniVenta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tuni_venta !== $v || $v === ' ') {
			$this->tuni_venta = $v;
			$this->modifiedColumns[] = ArtPeer::TUNI_VENTA;
		}

	} 
	
	public function setEquiUni1($v)
	{

		if ($this->equi_uni1 !== $v || $v === 1) {
			$this->equi_uni1 = $v;
			$this->modifiedColumns[] = ArtPeer::EQUI_UNI1;
		}

	} 
	
	public function setEquiUni2($v)
	{

		if ($this->equi_uni2 !== $v || $v === 1) {
			$this->equi_uni2 = $v;
			$this->modifiedColumns[] = ArtPeer::EQUI_UNI2;
		}

	} 
	
	public function setEquiUni3($v)
	{

		if ($this->equi_uni3 !== $v || $v === 1) {
			$this->equi_uni3 = $v;
			$this->modifiedColumns[] = ArtPeer::EQUI_UNI3;
		}

	} 
	
	public function setLote($v)
	{

		if ($this->lote !== $v || $v === false) {
			$this->lote = $v;
			$this->modifiedColumns[] = ArtPeer::LOTE;
		}

	} 
	
	public function setSerialp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->serialp !== $v || $v === ' ') {
			$this->serialp = $v;
			$this->modifiedColumns[] = ArtPeer::SERIALP;
		}

	} 
	
	public function setValido($v)
	{

		if ($this->valido !== $v || $v === false) {
			$this->valido = $v;
			$this->modifiedColumns[] = ArtPeer::VALIDO;
		}

	} 
	
	public function setAtributo1($v)
	{

		if ($this->atributo1 !== $v || $v === false) {
			$this->atributo1 = $v;
			$this->modifiedColumns[] = ArtPeer::ATRIBUTO1;
		}

	} 
	
	public function setVatributo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vatributo1 !== $v || $v === ' ') {
			$this->vatributo1 = $v;
			$this->modifiedColumns[] = ArtPeer::VATRIBUTO1;
		}

	} 
	
	public function setAtributo2($v)
	{

		if ($this->atributo2 !== $v || $v === false) {
			$this->atributo2 = $v;
			$this->modifiedColumns[] = ArtPeer::ATRIBUTO2;
		}

	} 
	
	public function setVatributo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vatributo2 !== $v || $v === ' ') {
			$this->vatributo2 = $v;
			$this->modifiedColumns[] = ArtPeer::VATRIBUTO2;
		}

	} 
	
	public function setAtributo3($v)
	{

		if ($this->atributo3 !== $v || $v === false) {
			$this->atributo3 = $v;
			$this->modifiedColumns[] = ArtPeer::ATRIBUTO3;
		}

	} 
	
	public function setVatributo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vatributo3 !== $v || $v === ' ') {
			$this->vatributo3 = $v;
			$this->modifiedColumns[] = ArtPeer::VATRIBUTO3;
		}

	} 
	
	public function setAtributo4($v)
	{

		if ($this->atributo4 !== $v || $v === false) {
			$this->atributo4 = $v;
			$this->modifiedColumns[] = ArtPeer::ATRIBUTO4;
		}

	} 
	
	public function setVatributo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vatributo4 !== $v || $v === ' ') {
			$this->vatributo4 = $v;
			$this->modifiedColumns[] = ArtPeer::VATRIBUTO4;
		}

	} 
	
	public function setAtributo5($v)
	{

		if ($this->atributo5 !== $v || $v === false) {
			$this->atributo5 = $v;
			$this->modifiedColumns[] = ArtPeer::ATRIBUTO5;
		}

	} 
	
	public function setVatributo5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vatributo5 !== $v || $v === ' ') {
			$this->vatributo5 = $v;
			$this->modifiedColumns[] = ArtPeer::VATRIBUTO5;
		}

	} 
	
	public function setAtributo6($v)
	{

		if ($this->atributo6 !== $v || $v === false) {
			$this->atributo6 = $v;
			$this->modifiedColumns[] = ArtPeer::ATRIBUTO6;
		}

	} 
	
	public function setVatributo6($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vatributo6 !== $v || $v === ' ') {
			$this->vatributo6 = $v;
			$this->modifiedColumns[] = ArtPeer::VATRIBUTO6;
		}

	} 
	
	public function setGarantia($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garantia !== $v || $v === ' ') {
			$this->garantia = $v;
			$this->modifiedColumns[] = ArtPeer::GARANTIA;
		}

	} 
	
	public function setPeso($v)
	{

		if ($this->peso !== $v || $v === 0) {
			$this->peso = $v;
			$this->modifiedColumns[] = ArtPeer::PESO;
		}

	} 
	
	public function setPie($v)
	{

		if ($this->pie !== $v || $v === 0) {
			$this->pie = $v;
			$this->modifiedColumns[] = ArtPeer::PIE;
		}

	} 
	
	public function setMargen1($v)
	{

		if ($this->margen1 !== $v || $v === 0) {
			$this->margen1 = $v;
			$this->modifiedColumns[] = ArtPeer::MARGEN1;
		}

	} 
	
	public function setMargen2($v)
	{

		if ($this->margen2 !== $v || $v === 0) {
			$this->margen2 = $v;
			$this->modifiedColumns[] = ArtPeer::MARGEN2;
		}

	} 
	
	public function setMargen3($v)
	{

		if ($this->margen3 !== $v || $v === 0) {
			$this->margen3 = $v;
			$this->modifiedColumns[] = ArtPeer::MARGEN3;
		}

	} 
	
	public function setMargen4($v)
	{

		if ($this->margen4 !== $v || $v === 0) {
			$this->margen4 = $v;
			$this->modifiedColumns[] = ArtPeer::MARGEN4;
		}

	} 
	
	public function setMargen5($v)
	{

		if ($this->margen5 !== $v || $v === 0) {
			$this->margen5 = $v;
			$this->modifiedColumns[] = ArtPeer::MARGEN5;
		}

	} 
	
	public function setRowId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->row_id !== $v) {
			$this->row_id = $v;
			$this->modifiedColumns[] = ArtPeer::ROW_ID;
		}

	} 
	
	public function setImagen1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->imagen1 !== $v || $v === ' ') {
			$this->imagen1 = $v;
			$this->modifiedColumns[] = ArtPeer::IMAGEN1;
		}

	} 
	
	public function setImagen2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->imagen2 !== $v || $v === ' ') {
			$this->imagen2 = $v;
			$this->modifiedColumns[] = ArtPeer::IMAGEN2;
		}

	} 
	
	public function setIArtDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->i_art_des !== $v || $v === ' ') {
			$this->i_art_des = $v;
			$this->modifiedColumns[] = ArtPeer::I_ART_DES;
		}

	} 
	
	public function setUniEmp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->uni_emp !== $v || $v === ' ') {
			$this->uni_emp = $v;
			$this->modifiedColumns[] = ArtPeer::UNI_EMP;
		}

	} 
	
	public function setRelEmp($v)
	{

		if ($this->rel_emp !== $v || $v === 1) {
			$this->rel_emp = $v;
			$this->modifiedColumns[] = ArtPeer::REL_EMP;
		}

	} 
	
	public function setMovil($v)
	{

		if ($this->movil !== $v || $v === false) {
			$this->movil = $v;
			$this->modifiedColumns[] = ArtPeer::MOVIL;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_art = $rs->getString($startcol + 0);

			$this->art_des = $rs->getString($startcol + 1);

			$this->fecha_reg = $rs->getString($startcol + 2);

			$this->manj_ser = $rs->getBoolean($startcol + 3);

			$this->co_lin = $rs->getString($startcol + 4);

			$this->co_cat = $rs->getString($startcol + 5);

			$this->co_subl = $rs->getString($startcol + 6);

			$this->co_color = $rs->getString($startcol + 7);

			$this->item = $rs->getString($startcol + 8);

			$this->ref = $rs->getString($startcol + 9);

			$this->modelo = $rs->getString($startcol + 10);

			$this->procedenci = $rs->getString($startcol + 11);

			$this->comentario = $rs->getString($startcol + 12);

			$this->co_prov = $rs->getString($startcol + 13);

			$this->ubicacion = $rs->getString($startcol + 14);

			$this->uni_venta = $rs->getString($startcol + 15);

			$this->uni_compra = $rs->getString($startcol + 16);

			$this->uni_relac = $rs->getFloat($startcol + 17);

			$this->relac_aut = $rs->getInt($startcol + 18);

			$this->stock_act = $rs->getFloat($startcol + 19);

			$this->stock_com = $rs->getFloat($startcol + 20);

			$this->sstock_com = $rs->getFloat($startcol + 21);

			$this->stock_lle = $rs->getFloat($startcol + 22);

			$this->sstock_lle = $rs->getFloat($startcol + 23);

			$this->stock_des = $rs->getFloat($startcol + 24);

			$this->sstock_des = $rs->getFloat($startcol + 25);

			$this->suni_venta = $rs->getString($startcol + 26);

			$this->suni_compr = $rs->getString($startcol + 27);

			$this->suni_relac = $rs->getFloat($startcol + 28);

			$this->sstock_act = $rs->getFloat($startcol + 29);

			$this->relac_comp = $rs->getFloat($startcol + 30);

			$this->relac_vent = $rs->getFloat($startcol + 31);

			$this->pto_pedido = $rs->getFloat($startcol + 32);

			$this->stock_max = $rs->getFloat($startcol + 33);

			$this->stock_min = $rs->getFloat($startcol + 34);

			$this->prec_om = $rs->getBoolean($startcol + 35);

			$this->prec_vta1 = $rs->getFloat($startcol + 36);

			$this->fec_prec_v = $rs->getString($startcol + 37);

			$this->fec_prec_2 = $rs->getString($startcol + 38);

			$this->prec_vta2 = $rs->getFloat($startcol + 39);

			$this->fec_prec_3 = $rs->getString($startcol + 40);

			$this->prec_vta3 = $rs->getFloat($startcol + 41);

			$this->fec_prec_4 = $rs->getString($startcol + 42);

			$this->prec_vta4 = $rs->getFloat($startcol + 43);

			$this->fec_prec_5 = $rs->getString($startcol + 44);

			$this->prec_vta5 = $rs->getFloat($startcol + 45);

			$this->prec_agr1 = $rs->getFloat($startcol + 46);

			$this->prec_agr2 = $rs->getFloat($startcol + 47);

			$this->prec_agr3 = $rs->getFloat($startcol + 48);

			$this->prec_agr4 = $rs->getFloat($startcol + 49);

			$this->prec_agr5 = $rs->getFloat($startcol + 50);

			$this->can_agr = $rs->getFloat($startcol + 51);

			$this->fec_des_p5 = $rs->getString($startcol + 52);

			$this->fec_has_p5 = $rs->getString($startcol + 53);

			$this->co_imp = $rs->getString($startcol + 54);

			$this->margen_max = $rs->getFloat($startcol + 55);

			$this->ult_cos_un = $rs->getFloat($startcol + 56);

			$this->fec_ult_co = $rs->getString($startcol + 57);

			$this->cos_pro_un = $rs->getFloat($startcol + 58);

			$this->fec_cos_pr = $rs->getString($startcol + 59);

			$this->cos_merc = $rs->getFloat($startcol + 60);

			$this->fec_cos_me = $rs->getString($startcol + 61);

			$this->cos_prov = $rs->getFloat($startcol + 62);

			$this->fec_cos_p2 = $rs->getString($startcol + 63);

			$this->ult_cos_do = $rs->getFloat($startcol + 64);

			$this->fec_cos_do = $rs->getString($startcol + 65);

			$this->cos_un_an = $rs->getFloat($startcol + 66);

			$this->fec_cos_an = $rs->getString($startcol + 67);

			$this->ult_cos_om = $rs->getFloat($startcol + 68);

			$this->fec_ult_om = $rs->getString($startcol + 69);

			$this->cos_pro_om = $rs->getFloat($startcol + 70);

			$this->fec_pro_om = $rs->getString($startcol + 71);

			$this->tipo_cos = $rs->getString($startcol + 72);

			$this->mont_comi = $rs->getFloat($startcol + 73);

			$this->porc_cos = $rs->getFloat($startcol + 74);

			$this->mont_cos = $rs->getFloat($startcol + 75);

			$this->porc_gas = $rs->getFloat($startcol + 76);

			$this->mont_gas = $rs->getFloat($startcol + 77);

			$this->f_cost = $rs->getString($startcol + 78);

			$this->fisico = $rs->getBoolean($startcol + 79);

			$this->punt_cli = $rs->getFloat($startcol + 80);

			$this->punt_pro = $rs->getFloat($startcol + 81);

			$this->dias_repos = $rs->getInt($startcol + 82);

			$this->tipo = $rs->getString($startcol + 83);

			$this->alm_prin = $rs->getString($startcol + 84);

			$this->anulado = $rs->getBoolean($startcol + 85);

			$this->tipo_imp = $rs->getString($startcol + 86);

			$this->dis_cen = $rs->getString($startcol + 87);

			$this->mon_ilc = $rs->getFloat($startcol + 88);

			$this->capacidad = $rs->getFloat($startcol + 89);

			$this->grado_al = $rs->getFloat($startcol + 90);

			$this->tipo_licor = $rs->getString($startcol + 91);

			$this->compuesto = $rs->getBoolean($startcol + 92);

			$this->picture = $rs->getBlob($startcol + 93);

			$this->campo1 = $rs->getString($startcol + 94);

			$this->campo2 = $rs->getString($startcol + 95);

			$this->campo3 = $rs->getString($startcol + 96);

			$this->campo4 = $rs->getString($startcol + 97);

			$this->campo5 = $rs->getString($startcol + 98);

			$this->campo6 = $rs->getString($startcol + 99);

			$this->campo7 = $rs->getString($startcol + 100);

			$this->campo8 = $rs->getString($startcol + 101);

			$this->co_us_in = $rs->getString($startcol + 102);

			$this->fe_us_in = $rs->getString($startcol + 103);

			$this->co_us_mo = $rs->getString($startcol + 104);

			$this->fe_us_mo = $rs->getString($startcol + 105);

			$this->co_us_el = $rs->getString($startcol + 106);

			$this->fe_us_el = $rs->getString($startcol + 107);

			$this->revisado = $rs->getString($startcol + 108);

			$this->trasnfe = $rs->getString($startcol + 109);

			$this->co_sucu = $rs->getString($startcol + 110);

			$this->rowguid = $rs->getString($startcol + 111);

			$this->tuni_venta = $rs->getString($startcol + 112);

			$this->equi_uni1 = $rs->getFloat($startcol + 113);

			$this->equi_uni2 = $rs->getFloat($startcol + 114);

			$this->equi_uni3 = $rs->getFloat($startcol + 115);

			$this->lote = $rs->getBoolean($startcol + 116);

			$this->serialp = $rs->getString($startcol + 117);

			$this->valido = $rs->getBoolean($startcol + 118);

			$this->atributo1 = $rs->getBoolean($startcol + 119);

			$this->vatributo1 = $rs->getString($startcol + 120);

			$this->atributo2 = $rs->getBoolean($startcol + 121);

			$this->vatributo2 = $rs->getString($startcol + 122);

			$this->atributo3 = $rs->getBoolean($startcol + 123);

			$this->vatributo3 = $rs->getString($startcol + 124);

			$this->atributo4 = $rs->getBoolean($startcol + 125);

			$this->vatributo4 = $rs->getString($startcol + 126);

			$this->atributo5 = $rs->getBoolean($startcol + 127);

			$this->vatributo5 = $rs->getString($startcol + 128);

			$this->atributo6 = $rs->getBoolean($startcol + 129);

			$this->vatributo6 = $rs->getString($startcol + 130);

			$this->garantia = $rs->getString($startcol + 131);

			$this->peso = $rs->getFloat($startcol + 132);

			$this->pie = $rs->getFloat($startcol + 133);

			$this->margen1 = $rs->getFloat($startcol + 134);

			$this->margen2 = $rs->getFloat($startcol + 135);

			$this->margen3 = $rs->getFloat($startcol + 136);

			$this->margen4 = $rs->getFloat($startcol + 137);

			$this->margen5 = $rs->getFloat($startcol + 138);

			$this->row_id = $rs->getBlob($startcol + 139);

			$this->imagen1 = $rs->getString($startcol + 140);

			$this->imagen2 = $rs->getString($startcol + 141);

			$this->i_art_des = $rs->getString($startcol + 142);

			$this->uni_emp = $rs->getString($startcol + 143);

			$this->rel_emp = $rs->getFloat($startcol + 144);

			$this->movil = $rs->getBoolean($startcol + 145);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 146; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Art object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ArtPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ArtPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ArtPeer::DATABASE_NAME);
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


												
			if ($this->aLinArt !== null) {
				if ($this->aLinArt->isModified()) {
					$affectedRows += $this->aLinArt->save($con);
				}
				$this->setLinArt($this->aLinArt);
			}

			if ($this->aCatArt !== null) {
				if ($this->aCatArt->isModified()) {
					$affectedRows += $this->aCatArt->save($con);
				}
				$this->setCatArt($this->aCatArt);
			}

			if ($this->aSubLin !== null) {
				if ($this->aSubLin->isModified()) {
					$affectedRows += $this->aSubLin->save($con);
				}
				$this->setSubLin($this->aSubLin);
			}

			if ($this->aColores !== null) {
				if ($this->aColores->isModified()) {
					$affectedRows += $this->aColores->save($con);
				}
				$this->setColores($this->aColores);
			}

			if ($this->aProceden !== null) {
				if ($this->aProceden->isModified()) {
					$affectedRows += $this->aProceden->save($con);
				}
				$this->setProceden($this->aProceden);
			}

			if ($this->aProv !== null) {
				if ($this->aProv->isModified()) {
					$affectedRows += $this->aProv->save($con);
				}
				$this->setProv($this->aProv);
			}

			if ($this->aUnidadesRelatedByUniVenta !== null) {
				if ($this->aUnidadesRelatedByUniVenta->isModified()) {
					$affectedRows += $this->aUnidadesRelatedByUniVenta->save($con);
				}
				$this->setUnidadesRelatedByUniVenta($this->aUnidadesRelatedByUniVenta);
			}

			if ($this->aUnidadesRelatedBySuniVenta !== null) {
				if ($this->aUnidadesRelatedBySuniVenta->isModified()) {
					$affectedRows += $this->aUnidadesRelatedBySuniVenta->save($con);
				}
				$this->setUnidadesRelatedBySuniVenta($this->aUnidadesRelatedBySuniVenta);
			}

			if ($this->aTabulado !== null) {
				if ($this->aTabulado->isModified()) {
					$affectedRows += $this->aTabulado->save($con);
				}
				$this->setTabulado($this->aTabulado);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ArtPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ArtPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collRengFacs !== null) {
				foreach($this->collRengFacs as $referrerFK) {
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


												
			if ($this->aLinArt !== null) {
				if (!$this->aLinArt->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aLinArt->getValidationFailures());
				}
			}

			if ($this->aCatArt !== null) {
				if (!$this->aCatArt->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCatArt->getValidationFailures());
				}
			}

			if ($this->aSubLin !== null) {
				if (!$this->aSubLin->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSubLin->getValidationFailures());
				}
			}

			if ($this->aColores !== null) {
				if (!$this->aColores->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aColores->getValidationFailures());
				}
			}

			if ($this->aProceden !== null) {
				if (!$this->aProceden->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProceden->getValidationFailures());
				}
			}

			if ($this->aProv !== null) {
				if (!$this->aProv->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProv->getValidationFailures());
				}
			}

			if ($this->aUnidadesRelatedByUniVenta !== null) {
				if (!$this->aUnidadesRelatedByUniVenta->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUnidadesRelatedByUniVenta->getValidationFailures());
				}
			}

			if ($this->aUnidadesRelatedBySuniVenta !== null) {
				if (!$this->aUnidadesRelatedBySuniVenta->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUnidadesRelatedBySuniVenta->getValidationFailures());
				}
			}

			if ($this->aTabulado !== null) {
				if (!$this->aTabulado->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTabulado->getValidationFailures());
				}
			}


			if (($retval = ArtPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collRengFacs !== null) {
					foreach($this->collRengFacs as $referrerFK) {
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
		$pos = ArtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoArt();
				break;
			case 1:
				return $this->getArtDes();
				break;
			case 2:
				return $this->getFechaReg();
				break;
			case 3:
				return $this->getManjSer();
				break;
			case 4:
				return $this->getCoLin();
				break;
			case 5:
				return $this->getCoCat();
				break;
			case 6:
				return $this->getCoSubl();
				break;
			case 7:
				return $this->getCoColor();
				break;
			case 8:
				return $this->getItem();
				break;
			case 9:
				return $this->getRef();
				break;
			case 10:
				return $this->getModelo();
				break;
			case 11:
				return $this->getProcedenci();
				break;
			case 12:
				return $this->getComentario();
				break;
			case 13:
				return $this->getCoProv();
				break;
			case 14:
				return $this->getUbicacion();
				break;
			case 15:
				return $this->getUniVenta();
				break;
			case 16:
				return $this->getUniCompra();
				break;
			case 17:
				return $this->getUniRelac();
				break;
			case 18:
				return $this->getRelacAut();
				break;
			case 19:
				return $this->getStockAct();
				break;
			case 20:
				return $this->getStockCom();
				break;
			case 21:
				return $this->getSstockCom();
				break;
			case 22:
				return $this->getStockLle();
				break;
			case 23:
				return $this->getSstockLle();
				break;
			case 24:
				return $this->getStockDes();
				break;
			case 25:
				return $this->getSstockDes();
				break;
			case 26:
				return $this->getSuniVenta();
				break;
			case 27:
				return $this->getSuniCompr();
				break;
			case 28:
				return $this->getSuniRelac();
				break;
			case 29:
				return $this->getSstockAct();
				break;
			case 30:
				return $this->getRelacComp();
				break;
			case 31:
				return $this->getRelacVent();
				break;
			case 32:
				return $this->getPtoPedido();
				break;
			case 33:
				return $this->getStockMax();
				break;
			case 34:
				return $this->getStockMin();
				break;
			case 35:
				return $this->getPrecOm();
				break;
			case 36:
				return $this->getPrecVta1();
				break;
			case 37:
				return $this->getFecPrecV();
				break;
			case 38:
				return $this->getFecPrec2();
				break;
			case 39:
				return $this->getPrecVta2();
				break;
			case 40:
				return $this->getFecPrec3();
				break;
			case 41:
				return $this->getPrecVta3();
				break;
			case 42:
				return $this->getFecPrec4();
				break;
			case 43:
				return $this->getPrecVta4();
				break;
			case 44:
				return $this->getFecPrec5();
				break;
			case 45:
				return $this->getPrecVta5();
				break;
			case 46:
				return $this->getPrecAgr1();
				break;
			case 47:
				return $this->getPrecAgr2();
				break;
			case 48:
				return $this->getPrecAgr3();
				break;
			case 49:
				return $this->getPrecAgr4();
				break;
			case 50:
				return $this->getPrecAgr5();
				break;
			case 51:
				return $this->getCanAgr();
				break;
			case 52:
				return $this->getFecDesP5();
				break;
			case 53:
				return $this->getFecHasP5();
				break;
			case 54:
				return $this->getCoImp();
				break;
			case 55:
				return $this->getMargenMax();
				break;
			case 56:
				return $this->getUltCosUn();
				break;
			case 57:
				return $this->getFecUltCo();
				break;
			case 58:
				return $this->getCosProUn();
				break;
			case 59:
				return $this->getFecCosPr();
				break;
			case 60:
				return $this->getCosMerc();
				break;
			case 61:
				return $this->getFecCosMe();
				break;
			case 62:
				return $this->getCosProv();
				break;
			case 63:
				return $this->getFecCosP2();
				break;
			case 64:
				return $this->getUltCosDo();
				break;
			case 65:
				return $this->getFecCosDo();
				break;
			case 66:
				return $this->getCosUnAn();
				break;
			case 67:
				return $this->getFecCosAn();
				break;
			case 68:
				return $this->getUltCosOm();
				break;
			case 69:
				return $this->getFecUltOm();
				break;
			case 70:
				return $this->getCosProOm();
				break;
			case 71:
				return $this->getFecProOm();
				break;
			case 72:
				return $this->getTipoCos();
				break;
			case 73:
				return $this->getMontComi();
				break;
			case 74:
				return $this->getPorcCos();
				break;
			case 75:
				return $this->getMontCos();
				break;
			case 76:
				return $this->getPorcGas();
				break;
			case 77:
				return $this->getMontGas();
				break;
			case 78:
				return $this->getFCost();
				break;
			case 79:
				return $this->getFisico();
				break;
			case 80:
				return $this->getPuntCli();
				break;
			case 81:
				return $this->getPuntPro();
				break;
			case 82:
				return $this->getDiasRepos();
				break;
			case 83:
				return $this->getTipo();
				break;
			case 84:
				return $this->getAlmPrin();
				break;
			case 85:
				return $this->getAnulado();
				break;
			case 86:
				return $this->getTipoImp();
				break;
			case 87:
				return $this->getDisCen();
				break;
			case 88:
				return $this->getMonIlc();
				break;
			case 89:
				return $this->getCapacidad();
				break;
			case 90:
				return $this->getGradoAl();
				break;
			case 91:
				return $this->getTipoLicor();
				break;
			case 92:
				return $this->getCompuesto();
				break;
			case 93:
				return $this->getPicture();
				break;
			case 94:
				return $this->getCampo1();
				break;
			case 95:
				return $this->getCampo2();
				break;
			case 96:
				return $this->getCampo3();
				break;
			case 97:
				return $this->getCampo4();
				break;
			case 98:
				return $this->getCampo5();
				break;
			case 99:
				return $this->getCampo6();
				break;
			case 100:
				return $this->getCampo7();
				break;
			case 101:
				return $this->getCampo8();
				break;
			case 102:
				return $this->getCoUsIn();
				break;
			case 103:
				return $this->getFeUsIn();
				break;
			case 104:
				return $this->getCoUsMo();
				break;
			case 105:
				return $this->getFeUsMo();
				break;
			case 106:
				return $this->getCoUsEl();
				break;
			case 107:
				return $this->getFeUsEl();
				break;
			case 108:
				return $this->getRevisado();
				break;
			case 109:
				return $this->getTrasnfe();
				break;
			case 110:
				return $this->getCoSucu();
				break;
			case 111:
				return $this->getRowguid();
				break;
			case 112:
				return $this->getTuniVenta();
				break;
			case 113:
				return $this->getEquiUni1();
				break;
			case 114:
				return $this->getEquiUni2();
				break;
			case 115:
				return $this->getEquiUni3();
				break;
			case 116:
				return $this->getLote();
				break;
			case 117:
				return $this->getSerialp();
				break;
			case 118:
				return $this->getValido();
				break;
			case 119:
				return $this->getAtributo1();
				break;
			case 120:
				return $this->getVatributo1();
				break;
			case 121:
				return $this->getAtributo2();
				break;
			case 122:
				return $this->getVatributo2();
				break;
			case 123:
				return $this->getAtributo3();
				break;
			case 124:
				return $this->getVatributo3();
				break;
			case 125:
				return $this->getAtributo4();
				break;
			case 126:
				return $this->getVatributo4();
				break;
			case 127:
				return $this->getAtributo5();
				break;
			case 128:
				return $this->getVatributo5();
				break;
			case 129:
				return $this->getAtributo6();
				break;
			case 130:
				return $this->getVatributo6();
				break;
			case 131:
				return $this->getGarantia();
				break;
			case 132:
				return $this->getPeso();
				break;
			case 133:
				return $this->getPie();
				break;
			case 134:
				return $this->getMargen1();
				break;
			case 135:
				return $this->getMargen2();
				break;
			case 136:
				return $this->getMargen3();
				break;
			case 137:
				return $this->getMargen4();
				break;
			case 138:
				return $this->getMargen5();
				break;
			case 139:
				return $this->getRowId();
				break;
			case 140:
				return $this->getImagen1();
				break;
			case 141:
				return $this->getImagen2();
				break;
			case 142:
				return $this->getIArtDes();
				break;
			case 143:
				return $this->getUniEmp();
				break;
			case 144:
				return $this->getRelEmp();
				break;
			case 145:
				return $this->getMovil();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ArtPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoArt(),
			$keys[1] => $this->getArtDes(),
			$keys[2] => $this->getFechaReg(),
			$keys[3] => $this->getManjSer(),
			$keys[4] => $this->getCoLin(),
			$keys[5] => $this->getCoCat(),
			$keys[6] => $this->getCoSubl(),
			$keys[7] => $this->getCoColor(),
			$keys[8] => $this->getItem(),
			$keys[9] => $this->getRef(),
			$keys[10] => $this->getModelo(),
			$keys[11] => $this->getProcedenci(),
			$keys[12] => $this->getComentario(),
			$keys[13] => $this->getCoProv(),
			$keys[14] => $this->getUbicacion(),
			$keys[15] => $this->getUniVenta(),
			$keys[16] => $this->getUniCompra(),
			$keys[17] => $this->getUniRelac(),
			$keys[18] => $this->getRelacAut(),
			$keys[19] => $this->getStockAct(),
			$keys[20] => $this->getStockCom(),
			$keys[21] => $this->getSstockCom(),
			$keys[22] => $this->getStockLle(),
			$keys[23] => $this->getSstockLle(),
			$keys[24] => $this->getStockDes(),
			$keys[25] => $this->getSstockDes(),
			$keys[26] => $this->getSuniVenta(),
			$keys[27] => $this->getSuniCompr(),
			$keys[28] => $this->getSuniRelac(),
			$keys[29] => $this->getSstockAct(),
			$keys[30] => $this->getRelacComp(),
			$keys[31] => $this->getRelacVent(),
			$keys[32] => $this->getPtoPedido(),
			$keys[33] => $this->getStockMax(),
			$keys[34] => $this->getStockMin(),
			$keys[35] => $this->getPrecOm(),
			$keys[36] => $this->getPrecVta1(),
			$keys[37] => $this->getFecPrecV(),
			$keys[38] => $this->getFecPrec2(),
			$keys[39] => $this->getPrecVta2(),
			$keys[40] => $this->getFecPrec3(),
			$keys[41] => $this->getPrecVta3(),
			$keys[42] => $this->getFecPrec4(),
			$keys[43] => $this->getPrecVta4(),
			$keys[44] => $this->getFecPrec5(),
			$keys[45] => $this->getPrecVta5(),
			$keys[46] => $this->getPrecAgr1(),
			$keys[47] => $this->getPrecAgr2(),
			$keys[48] => $this->getPrecAgr3(),
			$keys[49] => $this->getPrecAgr4(),
			$keys[50] => $this->getPrecAgr5(),
			$keys[51] => $this->getCanAgr(),
			$keys[52] => $this->getFecDesP5(),
			$keys[53] => $this->getFecHasP5(),
			$keys[54] => $this->getCoImp(),
			$keys[55] => $this->getMargenMax(),
			$keys[56] => $this->getUltCosUn(),
			$keys[57] => $this->getFecUltCo(),
			$keys[58] => $this->getCosProUn(),
			$keys[59] => $this->getFecCosPr(),
			$keys[60] => $this->getCosMerc(),
			$keys[61] => $this->getFecCosMe(),
			$keys[62] => $this->getCosProv(),
			$keys[63] => $this->getFecCosP2(),
			$keys[64] => $this->getUltCosDo(),
			$keys[65] => $this->getFecCosDo(),
			$keys[66] => $this->getCosUnAn(),
			$keys[67] => $this->getFecCosAn(),
			$keys[68] => $this->getUltCosOm(),
			$keys[69] => $this->getFecUltOm(),
			$keys[70] => $this->getCosProOm(),
			$keys[71] => $this->getFecProOm(),
			$keys[72] => $this->getTipoCos(),
			$keys[73] => $this->getMontComi(),
			$keys[74] => $this->getPorcCos(),
			$keys[75] => $this->getMontCos(),
			$keys[76] => $this->getPorcGas(),
			$keys[77] => $this->getMontGas(),
			$keys[78] => $this->getFCost(),
			$keys[79] => $this->getFisico(),
			$keys[80] => $this->getPuntCli(),
			$keys[81] => $this->getPuntPro(),
			$keys[82] => $this->getDiasRepos(),
			$keys[83] => $this->getTipo(),
			$keys[84] => $this->getAlmPrin(),
			$keys[85] => $this->getAnulado(),
			$keys[86] => $this->getTipoImp(),
			$keys[87] => $this->getDisCen(),
			$keys[88] => $this->getMonIlc(),
			$keys[89] => $this->getCapacidad(),
			$keys[90] => $this->getGradoAl(),
			$keys[91] => $this->getTipoLicor(),
			$keys[92] => $this->getCompuesto(),
			$keys[93] => $this->getPicture(),
			$keys[94] => $this->getCampo1(),
			$keys[95] => $this->getCampo2(),
			$keys[96] => $this->getCampo3(),
			$keys[97] => $this->getCampo4(),
			$keys[98] => $this->getCampo5(),
			$keys[99] => $this->getCampo6(),
			$keys[100] => $this->getCampo7(),
			$keys[101] => $this->getCampo8(),
			$keys[102] => $this->getCoUsIn(),
			$keys[103] => $this->getFeUsIn(),
			$keys[104] => $this->getCoUsMo(),
			$keys[105] => $this->getFeUsMo(),
			$keys[106] => $this->getCoUsEl(),
			$keys[107] => $this->getFeUsEl(),
			$keys[108] => $this->getRevisado(),
			$keys[109] => $this->getTrasnfe(),
			$keys[110] => $this->getCoSucu(),
			$keys[111] => $this->getRowguid(),
			$keys[112] => $this->getTuniVenta(),
			$keys[113] => $this->getEquiUni1(),
			$keys[114] => $this->getEquiUni2(),
			$keys[115] => $this->getEquiUni3(),
			$keys[116] => $this->getLote(),
			$keys[117] => $this->getSerialp(),
			$keys[118] => $this->getValido(),
			$keys[119] => $this->getAtributo1(),
			$keys[120] => $this->getVatributo1(),
			$keys[121] => $this->getAtributo2(),
			$keys[122] => $this->getVatributo2(),
			$keys[123] => $this->getAtributo3(),
			$keys[124] => $this->getVatributo3(),
			$keys[125] => $this->getAtributo4(),
			$keys[126] => $this->getVatributo4(),
			$keys[127] => $this->getAtributo5(),
			$keys[128] => $this->getVatributo5(),
			$keys[129] => $this->getAtributo6(),
			$keys[130] => $this->getVatributo6(),
			$keys[131] => $this->getGarantia(),
			$keys[132] => $this->getPeso(),
			$keys[133] => $this->getPie(),
			$keys[134] => $this->getMargen1(),
			$keys[135] => $this->getMargen2(),
			$keys[136] => $this->getMargen3(),
			$keys[137] => $this->getMargen4(),
			$keys[138] => $this->getMargen5(),
			$keys[139] => $this->getRowId(),
			$keys[140] => $this->getImagen1(),
			$keys[141] => $this->getImagen2(),
			$keys[142] => $this->getIArtDes(),
			$keys[143] => $this->getUniEmp(),
			$keys[144] => $this->getRelEmp(),
			$keys[145] => $this->getMovil(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ArtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoArt($value);
				break;
			case 1:
				$this->setArtDes($value);
				break;
			case 2:
				$this->setFechaReg($value);
				break;
			case 3:
				$this->setManjSer($value);
				break;
			case 4:
				$this->setCoLin($value);
				break;
			case 5:
				$this->setCoCat($value);
				break;
			case 6:
				$this->setCoSubl($value);
				break;
			case 7:
				$this->setCoColor($value);
				break;
			case 8:
				$this->setItem($value);
				break;
			case 9:
				$this->setRef($value);
				break;
			case 10:
				$this->setModelo($value);
				break;
			case 11:
				$this->setProcedenci($value);
				break;
			case 12:
				$this->setComentario($value);
				break;
			case 13:
				$this->setCoProv($value);
				break;
			case 14:
				$this->setUbicacion($value);
				break;
			case 15:
				$this->setUniVenta($value);
				break;
			case 16:
				$this->setUniCompra($value);
				break;
			case 17:
				$this->setUniRelac($value);
				break;
			case 18:
				$this->setRelacAut($value);
				break;
			case 19:
				$this->setStockAct($value);
				break;
			case 20:
				$this->setStockCom($value);
				break;
			case 21:
				$this->setSstockCom($value);
				break;
			case 22:
				$this->setStockLle($value);
				break;
			case 23:
				$this->setSstockLle($value);
				break;
			case 24:
				$this->setStockDes($value);
				break;
			case 25:
				$this->setSstockDes($value);
				break;
			case 26:
				$this->setSuniVenta($value);
				break;
			case 27:
				$this->setSuniCompr($value);
				break;
			case 28:
				$this->setSuniRelac($value);
				break;
			case 29:
				$this->setSstockAct($value);
				break;
			case 30:
				$this->setRelacComp($value);
				break;
			case 31:
				$this->setRelacVent($value);
				break;
			case 32:
				$this->setPtoPedido($value);
				break;
			case 33:
				$this->setStockMax($value);
				break;
			case 34:
				$this->setStockMin($value);
				break;
			case 35:
				$this->setPrecOm($value);
				break;
			case 36:
				$this->setPrecVta1($value);
				break;
			case 37:
				$this->setFecPrecV($value);
				break;
			case 38:
				$this->setFecPrec2($value);
				break;
			case 39:
				$this->setPrecVta2($value);
				break;
			case 40:
				$this->setFecPrec3($value);
				break;
			case 41:
				$this->setPrecVta3($value);
				break;
			case 42:
				$this->setFecPrec4($value);
				break;
			case 43:
				$this->setPrecVta4($value);
				break;
			case 44:
				$this->setFecPrec5($value);
				break;
			case 45:
				$this->setPrecVta5($value);
				break;
			case 46:
				$this->setPrecAgr1($value);
				break;
			case 47:
				$this->setPrecAgr2($value);
				break;
			case 48:
				$this->setPrecAgr3($value);
				break;
			case 49:
				$this->setPrecAgr4($value);
				break;
			case 50:
				$this->setPrecAgr5($value);
				break;
			case 51:
				$this->setCanAgr($value);
				break;
			case 52:
				$this->setFecDesP5($value);
				break;
			case 53:
				$this->setFecHasP5($value);
				break;
			case 54:
				$this->setCoImp($value);
				break;
			case 55:
				$this->setMargenMax($value);
				break;
			case 56:
				$this->setUltCosUn($value);
				break;
			case 57:
				$this->setFecUltCo($value);
				break;
			case 58:
				$this->setCosProUn($value);
				break;
			case 59:
				$this->setFecCosPr($value);
				break;
			case 60:
				$this->setCosMerc($value);
				break;
			case 61:
				$this->setFecCosMe($value);
				break;
			case 62:
				$this->setCosProv($value);
				break;
			case 63:
				$this->setFecCosP2($value);
				break;
			case 64:
				$this->setUltCosDo($value);
				break;
			case 65:
				$this->setFecCosDo($value);
				break;
			case 66:
				$this->setCosUnAn($value);
				break;
			case 67:
				$this->setFecCosAn($value);
				break;
			case 68:
				$this->setUltCosOm($value);
				break;
			case 69:
				$this->setFecUltOm($value);
				break;
			case 70:
				$this->setCosProOm($value);
				break;
			case 71:
				$this->setFecProOm($value);
				break;
			case 72:
				$this->setTipoCos($value);
				break;
			case 73:
				$this->setMontComi($value);
				break;
			case 74:
				$this->setPorcCos($value);
				break;
			case 75:
				$this->setMontCos($value);
				break;
			case 76:
				$this->setPorcGas($value);
				break;
			case 77:
				$this->setMontGas($value);
				break;
			case 78:
				$this->setFCost($value);
				break;
			case 79:
				$this->setFisico($value);
				break;
			case 80:
				$this->setPuntCli($value);
				break;
			case 81:
				$this->setPuntPro($value);
				break;
			case 82:
				$this->setDiasRepos($value);
				break;
			case 83:
				$this->setTipo($value);
				break;
			case 84:
				$this->setAlmPrin($value);
				break;
			case 85:
				$this->setAnulado($value);
				break;
			case 86:
				$this->setTipoImp($value);
				break;
			case 87:
				$this->setDisCen($value);
				break;
			case 88:
				$this->setMonIlc($value);
				break;
			case 89:
				$this->setCapacidad($value);
				break;
			case 90:
				$this->setGradoAl($value);
				break;
			case 91:
				$this->setTipoLicor($value);
				break;
			case 92:
				$this->setCompuesto($value);
				break;
			case 93:
				$this->setPicture($value);
				break;
			case 94:
				$this->setCampo1($value);
				break;
			case 95:
				$this->setCampo2($value);
				break;
			case 96:
				$this->setCampo3($value);
				break;
			case 97:
				$this->setCampo4($value);
				break;
			case 98:
				$this->setCampo5($value);
				break;
			case 99:
				$this->setCampo6($value);
				break;
			case 100:
				$this->setCampo7($value);
				break;
			case 101:
				$this->setCampo8($value);
				break;
			case 102:
				$this->setCoUsIn($value);
				break;
			case 103:
				$this->setFeUsIn($value);
				break;
			case 104:
				$this->setCoUsMo($value);
				break;
			case 105:
				$this->setFeUsMo($value);
				break;
			case 106:
				$this->setCoUsEl($value);
				break;
			case 107:
				$this->setFeUsEl($value);
				break;
			case 108:
				$this->setRevisado($value);
				break;
			case 109:
				$this->setTrasnfe($value);
				break;
			case 110:
				$this->setCoSucu($value);
				break;
			case 111:
				$this->setRowguid($value);
				break;
			case 112:
				$this->setTuniVenta($value);
				break;
			case 113:
				$this->setEquiUni1($value);
				break;
			case 114:
				$this->setEquiUni2($value);
				break;
			case 115:
				$this->setEquiUni3($value);
				break;
			case 116:
				$this->setLote($value);
				break;
			case 117:
				$this->setSerialp($value);
				break;
			case 118:
				$this->setValido($value);
				break;
			case 119:
				$this->setAtributo1($value);
				break;
			case 120:
				$this->setVatributo1($value);
				break;
			case 121:
				$this->setAtributo2($value);
				break;
			case 122:
				$this->setVatributo2($value);
				break;
			case 123:
				$this->setAtributo3($value);
				break;
			case 124:
				$this->setVatributo3($value);
				break;
			case 125:
				$this->setAtributo4($value);
				break;
			case 126:
				$this->setVatributo4($value);
				break;
			case 127:
				$this->setAtributo5($value);
				break;
			case 128:
				$this->setVatributo5($value);
				break;
			case 129:
				$this->setAtributo6($value);
				break;
			case 130:
				$this->setVatributo6($value);
				break;
			case 131:
				$this->setGarantia($value);
				break;
			case 132:
				$this->setPeso($value);
				break;
			case 133:
				$this->setPie($value);
				break;
			case 134:
				$this->setMargen1($value);
				break;
			case 135:
				$this->setMargen2($value);
				break;
			case 136:
				$this->setMargen3($value);
				break;
			case 137:
				$this->setMargen4($value);
				break;
			case 138:
				$this->setMargen5($value);
				break;
			case 139:
				$this->setRowId($value);
				break;
			case 140:
				$this->setImagen1($value);
				break;
			case 141:
				$this->setImagen2($value);
				break;
			case 142:
				$this->setIArtDes($value);
				break;
			case 143:
				$this->setUniEmp($value);
				break;
			case 144:
				$this->setRelEmp($value);
				break;
			case 145:
				$this->setMovil($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ArtPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoArt($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setArtDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFechaReg($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setManjSer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCoLin($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCoCat($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCoSubl($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCoColor($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setItem($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setRef($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setModelo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setProcedenci($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setComentario($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCoProv($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setUbicacion($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUniVenta($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setUniCompra($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setUniRelac($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRelacAut($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setStockAct($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setStockCom($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setSstockCom($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setStockLle($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setSstockLle($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setStockDes($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setSstockDes($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setSuniVenta($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setSuniCompr($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setSuniRelac($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setSstockAct($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setRelacComp($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setRelacVent($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setPtoPedido($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setStockMax($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setStockMin($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setPrecOm($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setPrecVta1($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setFecPrecV($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setFecPrec2($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setPrecVta2($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setFecPrec3($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setPrecVta3($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setFecPrec4($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setPrecVta4($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setFecPrec5($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setPrecVta5($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setPrecAgr1($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setPrecAgr2($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setPrecAgr3($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setPrecAgr4($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setPrecAgr5($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setCanAgr($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setFecDesP5($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setFecHasP5($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setCoImp($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setMargenMax($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setUltCosUn($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setFecUltCo($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setCosProUn($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setFecCosPr($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setCosMerc($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setFecCosMe($arr[$keys[61]]);
		if (array_key_exists($keys[62], $arr)) $this->setCosProv($arr[$keys[62]]);
		if (array_key_exists($keys[63], $arr)) $this->setFecCosP2($arr[$keys[63]]);
		if (array_key_exists($keys[64], $arr)) $this->setUltCosDo($arr[$keys[64]]);
		if (array_key_exists($keys[65], $arr)) $this->setFecCosDo($arr[$keys[65]]);
		if (array_key_exists($keys[66], $arr)) $this->setCosUnAn($arr[$keys[66]]);
		if (array_key_exists($keys[67], $arr)) $this->setFecCosAn($arr[$keys[67]]);
		if (array_key_exists($keys[68], $arr)) $this->setUltCosOm($arr[$keys[68]]);
		if (array_key_exists($keys[69], $arr)) $this->setFecUltOm($arr[$keys[69]]);
		if (array_key_exists($keys[70], $arr)) $this->setCosProOm($arr[$keys[70]]);
		if (array_key_exists($keys[71], $arr)) $this->setFecProOm($arr[$keys[71]]);
		if (array_key_exists($keys[72], $arr)) $this->setTipoCos($arr[$keys[72]]);
		if (array_key_exists($keys[73], $arr)) $this->setMontComi($arr[$keys[73]]);
		if (array_key_exists($keys[74], $arr)) $this->setPorcCos($arr[$keys[74]]);
		if (array_key_exists($keys[75], $arr)) $this->setMontCos($arr[$keys[75]]);
		if (array_key_exists($keys[76], $arr)) $this->setPorcGas($arr[$keys[76]]);
		if (array_key_exists($keys[77], $arr)) $this->setMontGas($arr[$keys[77]]);
		if (array_key_exists($keys[78], $arr)) $this->setFCost($arr[$keys[78]]);
		if (array_key_exists($keys[79], $arr)) $this->setFisico($arr[$keys[79]]);
		if (array_key_exists($keys[80], $arr)) $this->setPuntCli($arr[$keys[80]]);
		if (array_key_exists($keys[81], $arr)) $this->setPuntPro($arr[$keys[81]]);
		if (array_key_exists($keys[82], $arr)) $this->setDiasRepos($arr[$keys[82]]);
		if (array_key_exists($keys[83], $arr)) $this->setTipo($arr[$keys[83]]);
		if (array_key_exists($keys[84], $arr)) $this->setAlmPrin($arr[$keys[84]]);
		if (array_key_exists($keys[85], $arr)) $this->setAnulado($arr[$keys[85]]);
		if (array_key_exists($keys[86], $arr)) $this->setTipoImp($arr[$keys[86]]);
		if (array_key_exists($keys[87], $arr)) $this->setDisCen($arr[$keys[87]]);
		if (array_key_exists($keys[88], $arr)) $this->setMonIlc($arr[$keys[88]]);
		if (array_key_exists($keys[89], $arr)) $this->setCapacidad($arr[$keys[89]]);
		if (array_key_exists($keys[90], $arr)) $this->setGradoAl($arr[$keys[90]]);
		if (array_key_exists($keys[91], $arr)) $this->setTipoLicor($arr[$keys[91]]);
		if (array_key_exists($keys[92], $arr)) $this->setCompuesto($arr[$keys[92]]);
		if (array_key_exists($keys[93], $arr)) $this->setPicture($arr[$keys[93]]);
		if (array_key_exists($keys[94], $arr)) $this->setCampo1($arr[$keys[94]]);
		if (array_key_exists($keys[95], $arr)) $this->setCampo2($arr[$keys[95]]);
		if (array_key_exists($keys[96], $arr)) $this->setCampo3($arr[$keys[96]]);
		if (array_key_exists($keys[97], $arr)) $this->setCampo4($arr[$keys[97]]);
		if (array_key_exists($keys[98], $arr)) $this->setCampo5($arr[$keys[98]]);
		if (array_key_exists($keys[99], $arr)) $this->setCampo6($arr[$keys[99]]);
		if (array_key_exists($keys[100], $arr)) $this->setCampo7($arr[$keys[100]]);
		if (array_key_exists($keys[101], $arr)) $this->setCampo8($arr[$keys[101]]);
		if (array_key_exists($keys[102], $arr)) $this->setCoUsIn($arr[$keys[102]]);
		if (array_key_exists($keys[103], $arr)) $this->setFeUsIn($arr[$keys[103]]);
		if (array_key_exists($keys[104], $arr)) $this->setCoUsMo($arr[$keys[104]]);
		if (array_key_exists($keys[105], $arr)) $this->setFeUsMo($arr[$keys[105]]);
		if (array_key_exists($keys[106], $arr)) $this->setCoUsEl($arr[$keys[106]]);
		if (array_key_exists($keys[107], $arr)) $this->setFeUsEl($arr[$keys[107]]);
		if (array_key_exists($keys[108], $arr)) $this->setRevisado($arr[$keys[108]]);
		if (array_key_exists($keys[109], $arr)) $this->setTrasnfe($arr[$keys[109]]);
		if (array_key_exists($keys[110], $arr)) $this->setCoSucu($arr[$keys[110]]);
		if (array_key_exists($keys[111], $arr)) $this->setRowguid($arr[$keys[111]]);
		if (array_key_exists($keys[112], $arr)) $this->setTuniVenta($arr[$keys[112]]);
		if (array_key_exists($keys[113], $arr)) $this->setEquiUni1($arr[$keys[113]]);
		if (array_key_exists($keys[114], $arr)) $this->setEquiUni2($arr[$keys[114]]);
		if (array_key_exists($keys[115], $arr)) $this->setEquiUni3($arr[$keys[115]]);
		if (array_key_exists($keys[116], $arr)) $this->setLote($arr[$keys[116]]);
		if (array_key_exists($keys[117], $arr)) $this->setSerialp($arr[$keys[117]]);
		if (array_key_exists($keys[118], $arr)) $this->setValido($arr[$keys[118]]);
		if (array_key_exists($keys[119], $arr)) $this->setAtributo1($arr[$keys[119]]);
		if (array_key_exists($keys[120], $arr)) $this->setVatributo1($arr[$keys[120]]);
		if (array_key_exists($keys[121], $arr)) $this->setAtributo2($arr[$keys[121]]);
		if (array_key_exists($keys[122], $arr)) $this->setVatributo2($arr[$keys[122]]);
		if (array_key_exists($keys[123], $arr)) $this->setAtributo3($arr[$keys[123]]);
		if (array_key_exists($keys[124], $arr)) $this->setVatributo3($arr[$keys[124]]);
		if (array_key_exists($keys[125], $arr)) $this->setAtributo4($arr[$keys[125]]);
		if (array_key_exists($keys[126], $arr)) $this->setVatributo4($arr[$keys[126]]);
		if (array_key_exists($keys[127], $arr)) $this->setAtributo5($arr[$keys[127]]);
		if (array_key_exists($keys[128], $arr)) $this->setVatributo5($arr[$keys[128]]);
		if (array_key_exists($keys[129], $arr)) $this->setAtributo6($arr[$keys[129]]);
		if (array_key_exists($keys[130], $arr)) $this->setVatributo6($arr[$keys[130]]);
		if (array_key_exists($keys[131], $arr)) $this->setGarantia($arr[$keys[131]]);
		if (array_key_exists($keys[132], $arr)) $this->setPeso($arr[$keys[132]]);
		if (array_key_exists($keys[133], $arr)) $this->setPie($arr[$keys[133]]);
		if (array_key_exists($keys[134], $arr)) $this->setMargen1($arr[$keys[134]]);
		if (array_key_exists($keys[135], $arr)) $this->setMargen2($arr[$keys[135]]);
		if (array_key_exists($keys[136], $arr)) $this->setMargen3($arr[$keys[136]]);
		if (array_key_exists($keys[137], $arr)) $this->setMargen4($arr[$keys[137]]);
		if (array_key_exists($keys[138], $arr)) $this->setMargen5($arr[$keys[138]]);
		if (array_key_exists($keys[139], $arr)) $this->setRowId($arr[$keys[139]]);
		if (array_key_exists($keys[140], $arr)) $this->setImagen1($arr[$keys[140]]);
		if (array_key_exists($keys[141], $arr)) $this->setImagen2($arr[$keys[141]]);
		if (array_key_exists($keys[142], $arr)) $this->setIArtDes($arr[$keys[142]]);
		if (array_key_exists($keys[143], $arr)) $this->setUniEmp($arr[$keys[143]]);
		if (array_key_exists($keys[144], $arr)) $this->setRelEmp($arr[$keys[144]]);
		if (array_key_exists($keys[145], $arr)) $this->setMovil($arr[$keys[145]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ArtPeer::DATABASE_NAME);

		if ($this->isColumnModified(ArtPeer::CO_ART)) $criteria->add(ArtPeer::CO_ART, $this->co_art);
		if ($this->isColumnModified(ArtPeer::ART_DES)) $criteria->add(ArtPeer::ART_DES, $this->art_des);
		if ($this->isColumnModified(ArtPeer::FECHA_REG)) $criteria->add(ArtPeer::FECHA_REG, $this->fecha_reg);
		if ($this->isColumnModified(ArtPeer::MANJ_SER)) $criteria->add(ArtPeer::MANJ_SER, $this->manj_ser);
		if ($this->isColumnModified(ArtPeer::CO_LIN)) $criteria->add(ArtPeer::CO_LIN, $this->co_lin);
		if ($this->isColumnModified(ArtPeer::CO_CAT)) $criteria->add(ArtPeer::CO_CAT, $this->co_cat);
		if ($this->isColumnModified(ArtPeer::CO_SUBL)) $criteria->add(ArtPeer::CO_SUBL, $this->co_subl);
		if ($this->isColumnModified(ArtPeer::CO_COLOR)) $criteria->add(ArtPeer::CO_COLOR, $this->co_color);
		if ($this->isColumnModified(ArtPeer::ITEM)) $criteria->add(ArtPeer::ITEM, $this->item);
		if ($this->isColumnModified(ArtPeer::REF)) $criteria->add(ArtPeer::REF, $this->ref);
		if ($this->isColumnModified(ArtPeer::MODELO)) $criteria->add(ArtPeer::MODELO, $this->modelo);
		if ($this->isColumnModified(ArtPeer::PROCEDENCI)) $criteria->add(ArtPeer::PROCEDENCI, $this->procedenci);
		if ($this->isColumnModified(ArtPeer::COMENTARIO)) $criteria->add(ArtPeer::COMENTARIO, $this->comentario);
		if ($this->isColumnModified(ArtPeer::CO_PROV)) $criteria->add(ArtPeer::CO_PROV, $this->co_prov);
		if ($this->isColumnModified(ArtPeer::UBICACION)) $criteria->add(ArtPeer::UBICACION, $this->ubicacion);
		if ($this->isColumnModified(ArtPeer::UNI_VENTA)) $criteria->add(ArtPeer::UNI_VENTA, $this->uni_venta);
		if ($this->isColumnModified(ArtPeer::UNI_COMPRA)) $criteria->add(ArtPeer::UNI_COMPRA, $this->uni_compra);
		if ($this->isColumnModified(ArtPeer::UNI_RELAC)) $criteria->add(ArtPeer::UNI_RELAC, $this->uni_relac);
		if ($this->isColumnModified(ArtPeer::RELAC_AUT)) $criteria->add(ArtPeer::RELAC_AUT, $this->relac_aut);
		if ($this->isColumnModified(ArtPeer::STOCK_ACT)) $criteria->add(ArtPeer::STOCK_ACT, $this->stock_act);
		if ($this->isColumnModified(ArtPeer::STOCK_COM)) $criteria->add(ArtPeer::STOCK_COM, $this->stock_com);
		if ($this->isColumnModified(ArtPeer::SSTOCK_COM)) $criteria->add(ArtPeer::SSTOCK_COM, $this->sstock_com);
		if ($this->isColumnModified(ArtPeer::STOCK_LLE)) $criteria->add(ArtPeer::STOCK_LLE, $this->stock_lle);
		if ($this->isColumnModified(ArtPeer::SSTOCK_LLE)) $criteria->add(ArtPeer::SSTOCK_LLE, $this->sstock_lle);
		if ($this->isColumnModified(ArtPeer::STOCK_DES)) $criteria->add(ArtPeer::STOCK_DES, $this->stock_des);
		if ($this->isColumnModified(ArtPeer::SSTOCK_DES)) $criteria->add(ArtPeer::SSTOCK_DES, $this->sstock_des);
		if ($this->isColumnModified(ArtPeer::SUNI_VENTA)) $criteria->add(ArtPeer::SUNI_VENTA, $this->suni_venta);
		if ($this->isColumnModified(ArtPeer::SUNI_COMPR)) $criteria->add(ArtPeer::SUNI_COMPR, $this->suni_compr);
		if ($this->isColumnModified(ArtPeer::SUNI_RELAC)) $criteria->add(ArtPeer::SUNI_RELAC, $this->suni_relac);
		if ($this->isColumnModified(ArtPeer::SSTOCK_ACT)) $criteria->add(ArtPeer::SSTOCK_ACT, $this->sstock_act);
		if ($this->isColumnModified(ArtPeer::RELAC_COMP)) $criteria->add(ArtPeer::RELAC_COMP, $this->relac_comp);
		if ($this->isColumnModified(ArtPeer::RELAC_VENT)) $criteria->add(ArtPeer::RELAC_VENT, $this->relac_vent);
		if ($this->isColumnModified(ArtPeer::PTO_PEDIDO)) $criteria->add(ArtPeer::PTO_PEDIDO, $this->pto_pedido);
		if ($this->isColumnModified(ArtPeer::STOCK_MAX)) $criteria->add(ArtPeer::STOCK_MAX, $this->stock_max);
		if ($this->isColumnModified(ArtPeer::STOCK_MIN)) $criteria->add(ArtPeer::STOCK_MIN, $this->stock_min);
		if ($this->isColumnModified(ArtPeer::PREC_OM)) $criteria->add(ArtPeer::PREC_OM, $this->prec_om);
		if ($this->isColumnModified(ArtPeer::PREC_VTA1)) $criteria->add(ArtPeer::PREC_VTA1, $this->prec_vta1);
		if ($this->isColumnModified(ArtPeer::FEC_PREC_V)) $criteria->add(ArtPeer::FEC_PREC_V, $this->fec_prec_v);
		if ($this->isColumnModified(ArtPeer::FEC_PREC_2)) $criteria->add(ArtPeer::FEC_PREC_2, $this->fec_prec_2);
		if ($this->isColumnModified(ArtPeer::PREC_VTA2)) $criteria->add(ArtPeer::PREC_VTA2, $this->prec_vta2);
		if ($this->isColumnModified(ArtPeer::FEC_PREC_3)) $criteria->add(ArtPeer::FEC_PREC_3, $this->fec_prec_3);
		if ($this->isColumnModified(ArtPeer::PREC_VTA3)) $criteria->add(ArtPeer::PREC_VTA3, $this->prec_vta3);
		if ($this->isColumnModified(ArtPeer::FEC_PREC_4)) $criteria->add(ArtPeer::FEC_PREC_4, $this->fec_prec_4);
		if ($this->isColumnModified(ArtPeer::PREC_VTA4)) $criteria->add(ArtPeer::PREC_VTA4, $this->prec_vta4);
		if ($this->isColumnModified(ArtPeer::FEC_PREC_5)) $criteria->add(ArtPeer::FEC_PREC_5, $this->fec_prec_5);
		if ($this->isColumnModified(ArtPeer::PREC_VTA5)) $criteria->add(ArtPeer::PREC_VTA5, $this->prec_vta5);
		if ($this->isColumnModified(ArtPeer::PREC_AGR1)) $criteria->add(ArtPeer::PREC_AGR1, $this->prec_agr1);
		if ($this->isColumnModified(ArtPeer::PREC_AGR2)) $criteria->add(ArtPeer::PREC_AGR2, $this->prec_agr2);
		if ($this->isColumnModified(ArtPeer::PREC_AGR3)) $criteria->add(ArtPeer::PREC_AGR3, $this->prec_agr3);
		if ($this->isColumnModified(ArtPeer::PREC_AGR4)) $criteria->add(ArtPeer::PREC_AGR4, $this->prec_agr4);
		if ($this->isColumnModified(ArtPeer::PREC_AGR5)) $criteria->add(ArtPeer::PREC_AGR5, $this->prec_agr5);
		if ($this->isColumnModified(ArtPeer::CAN_AGR)) $criteria->add(ArtPeer::CAN_AGR, $this->can_agr);
		if ($this->isColumnModified(ArtPeer::FEC_DES_P5)) $criteria->add(ArtPeer::FEC_DES_P5, $this->fec_des_p5);
		if ($this->isColumnModified(ArtPeer::FEC_HAS_P5)) $criteria->add(ArtPeer::FEC_HAS_P5, $this->fec_has_p5);
		if ($this->isColumnModified(ArtPeer::CO_IMP)) $criteria->add(ArtPeer::CO_IMP, $this->co_imp);
		if ($this->isColumnModified(ArtPeer::MARGEN_MAX)) $criteria->add(ArtPeer::MARGEN_MAX, $this->margen_max);
		if ($this->isColumnModified(ArtPeer::ULT_COS_UN)) $criteria->add(ArtPeer::ULT_COS_UN, $this->ult_cos_un);
		if ($this->isColumnModified(ArtPeer::FEC_ULT_CO)) $criteria->add(ArtPeer::FEC_ULT_CO, $this->fec_ult_co);
		if ($this->isColumnModified(ArtPeer::COS_PRO_UN)) $criteria->add(ArtPeer::COS_PRO_UN, $this->cos_pro_un);
		if ($this->isColumnModified(ArtPeer::FEC_COS_PR)) $criteria->add(ArtPeer::FEC_COS_PR, $this->fec_cos_pr);
		if ($this->isColumnModified(ArtPeer::COS_MERC)) $criteria->add(ArtPeer::COS_MERC, $this->cos_merc);
		if ($this->isColumnModified(ArtPeer::FEC_COS_ME)) $criteria->add(ArtPeer::FEC_COS_ME, $this->fec_cos_me);
		if ($this->isColumnModified(ArtPeer::COS_PROV)) $criteria->add(ArtPeer::COS_PROV, $this->cos_prov);
		if ($this->isColumnModified(ArtPeer::FEC_COS_P2)) $criteria->add(ArtPeer::FEC_COS_P2, $this->fec_cos_p2);
		if ($this->isColumnModified(ArtPeer::ULT_COS_DO)) $criteria->add(ArtPeer::ULT_COS_DO, $this->ult_cos_do);
		if ($this->isColumnModified(ArtPeer::FEC_COS_DO)) $criteria->add(ArtPeer::FEC_COS_DO, $this->fec_cos_do);
		if ($this->isColumnModified(ArtPeer::COS_UN_AN)) $criteria->add(ArtPeer::COS_UN_AN, $this->cos_un_an);
		if ($this->isColumnModified(ArtPeer::FEC_COS_AN)) $criteria->add(ArtPeer::FEC_COS_AN, $this->fec_cos_an);
		if ($this->isColumnModified(ArtPeer::ULT_COS_OM)) $criteria->add(ArtPeer::ULT_COS_OM, $this->ult_cos_om);
		if ($this->isColumnModified(ArtPeer::FEC_ULT_OM)) $criteria->add(ArtPeer::FEC_ULT_OM, $this->fec_ult_om);
		if ($this->isColumnModified(ArtPeer::COS_PRO_OM)) $criteria->add(ArtPeer::COS_PRO_OM, $this->cos_pro_om);
		if ($this->isColumnModified(ArtPeer::FEC_PRO_OM)) $criteria->add(ArtPeer::FEC_PRO_OM, $this->fec_pro_om);
		if ($this->isColumnModified(ArtPeer::TIPO_COS)) $criteria->add(ArtPeer::TIPO_COS, $this->tipo_cos);
		if ($this->isColumnModified(ArtPeer::MONT_COMI)) $criteria->add(ArtPeer::MONT_COMI, $this->mont_comi);
		if ($this->isColumnModified(ArtPeer::PORC_COS)) $criteria->add(ArtPeer::PORC_COS, $this->porc_cos);
		if ($this->isColumnModified(ArtPeer::MONT_COS)) $criteria->add(ArtPeer::MONT_COS, $this->mont_cos);
		if ($this->isColumnModified(ArtPeer::PORC_GAS)) $criteria->add(ArtPeer::PORC_GAS, $this->porc_gas);
		if ($this->isColumnModified(ArtPeer::MONT_GAS)) $criteria->add(ArtPeer::MONT_GAS, $this->mont_gas);
		if ($this->isColumnModified(ArtPeer::F_COST)) $criteria->add(ArtPeer::F_COST, $this->f_cost);
		if ($this->isColumnModified(ArtPeer::FISICO)) $criteria->add(ArtPeer::FISICO, $this->fisico);
		if ($this->isColumnModified(ArtPeer::PUNT_CLI)) $criteria->add(ArtPeer::PUNT_CLI, $this->punt_cli);
		if ($this->isColumnModified(ArtPeer::PUNT_PRO)) $criteria->add(ArtPeer::PUNT_PRO, $this->punt_pro);
		if ($this->isColumnModified(ArtPeer::DIAS_REPOS)) $criteria->add(ArtPeer::DIAS_REPOS, $this->dias_repos);
		if ($this->isColumnModified(ArtPeer::TIPO)) $criteria->add(ArtPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(ArtPeer::ALM_PRIN)) $criteria->add(ArtPeer::ALM_PRIN, $this->alm_prin);
		if ($this->isColumnModified(ArtPeer::ANULADO)) $criteria->add(ArtPeer::ANULADO, $this->anulado);
		if ($this->isColumnModified(ArtPeer::TIPO_IMP)) $criteria->add(ArtPeer::TIPO_IMP, $this->tipo_imp);
		if ($this->isColumnModified(ArtPeer::DIS_CEN)) $criteria->add(ArtPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(ArtPeer::MON_ILC)) $criteria->add(ArtPeer::MON_ILC, $this->mon_ilc);
		if ($this->isColumnModified(ArtPeer::CAPACIDAD)) $criteria->add(ArtPeer::CAPACIDAD, $this->capacidad);
		if ($this->isColumnModified(ArtPeer::GRADO_AL)) $criteria->add(ArtPeer::GRADO_AL, $this->grado_al);
		if ($this->isColumnModified(ArtPeer::TIPO_LICOR)) $criteria->add(ArtPeer::TIPO_LICOR, $this->tipo_licor);
		if ($this->isColumnModified(ArtPeer::COMPUESTO)) $criteria->add(ArtPeer::COMPUESTO, $this->compuesto);
		if ($this->isColumnModified(ArtPeer::PICTURE)) $criteria->add(ArtPeer::PICTURE, $this->picture);
		if ($this->isColumnModified(ArtPeer::CAMPO1)) $criteria->add(ArtPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(ArtPeer::CAMPO2)) $criteria->add(ArtPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(ArtPeer::CAMPO3)) $criteria->add(ArtPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(ArtPeer::CAMPO4)) $criteria->add(ArtPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(ArtPeer::CAMPO5)) $criteria->add(ArtPeer::CAMPO5, $this->campo5);
		if ($this->isColumnModified(ArtPeer::CAMPO6)) $criteria->add(ArtPeer::CAMPO6, $this->campo6);
		if ($this->isColumnModified(ArtPeer::CAMPO7)) $criteria->add(ArtPeer::CAMPO7, $this->campo7);
		if ($this->isColumnModified(ArtPeer::CAMPO8)) $criteria->add(ArtPeer::CAMPO8, $this->campo8);
		if ($this->isColumnModified(ArtPeer::CO_US_IN)) $criteria->add(ArtPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(ArtPeer::FE_US_IN)) $criteria->add(ArtPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(ArtPeer::CO_US_MO)) $criteria->add(ArtPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(ArtPeer::FE_US_MO)) $criteria->add(ArtPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(ArtPeer::CO_US_EL)) $criteria->add(ArtPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(ArtPeer::FE_US_EL)) $criteria->add(ArtPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(ArtPeer::REVISADO)) $criteria->add(ArtPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(ArtPeer::TRASNFE)) $criteria->add(ArtPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(ArtPeer::CO_SUCU)) $criteria->add(ArtPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(ArtPeer::ROWGUID)) $criteria->add(ArtPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(ArtPeer::TUNI_VENTA)) $criteria->add(ArtPeer::TUNI_VENTA, $this->tuni_venta);
		if ($this->isColumnModified(ArtPeer::EQUI_UNI1)) $criteria->add(ArtPeer::EQUI_UNI1, $this->equi_uni1);
		if ($this->isColumnModified(ArtPeer::EQUI_UNI2)) $criteria->add(ArtPeer::EQUI_UNI2, $this->equi_uni2);
		if ($this->isColumnModified(ArtPeer::EQUI_UNI3)) $criteria->add(ArtPeer::EQUI_UNI3, $this->equi_uni3);
		if ($this->isColumnModified(ArtPeer::LOTE)) $criteria->add(ArtPeer::LOTE, $this->lote);
		if ($this->isColumnModified(ArtPeer::SERIALP)) $criteria->add(ArtPeer::SERIALP, $this->serialp);
		if ($this->isColumnModified(ArtPeer::VALIDO)) $criteria->add(ArtPeer::VALIDO, $this->valido);
		if ($this->isColumnModified(ArtPeer::ATRIBUTO1)) $criteria->add(ArtPeer::ATRIBUTO1, $this->atributo1);
		if ($this->isColumnModified(ArtPeer::VATRIBUTO1)) $criteria->add(ArtPeer::VATRIBUTO1, $this->vatributo1);
		if ($this->isColumnModified(ArtPeer::ATRIBUTO2)) $criteria->add(ArtPeer::ATRIBUTO2, $this->atributo2);
		if ($this->isColumnModified(ArtPeer::VATRIBUTO2)) $criteria->add(ArtPeer::VATRIBUTO2, $this->vatributo2);
		if ($this->isColumnModified(ArtPeer::ATRIBUTO3)) $criteria->add(ArtPeer::ATRIBUTO3, $this->atributo3);
		if ($this->isColumnModified(ArtPeer::VATRIBUTO3)) $criteria->add(ArtPeer::VATRIBUTO3, $this->vatributo3);
		if ($this->isColumnModified(ArtPeer::ATRIBUTO4)) $criteria->add(ArtPeer::ATRIBUTO4, $this->atributo4);
		if ($this->isColumnModified(ArtPeer::VATRIBUTO4)) $criteria->add(ArtPeer::VATRIBUTO4, $this->vatributo4);
		if ($this->isColumnModified(ArtPeer::ATRIBUTO5)) $criteria->add(ArtPeer::ATRIBUTO5, $this->atributo5);
		if ($this->isColumnModified(ArtPeer::VATRIBUTO5)) $criteria->add(ArtPeer::VATRIBUTO5, $this->vatributo5);
		if ($this->isColumnModified(ArtPeer::ATRIBUTO6)) $criteria->add(ArtPeer::ATRIBUTO6, $this->atributo6);
		if ($this->isColumnModified(ArtPeer::VATRIBUTO6)) $criteria->add(ArtPeer::VATRIBUTO6, $this->vatributo6);
		if ($this->isColumnModified(ArtPeer::GARANTIA)) $criteria->add(ArtPeer::GARANTIA, $this->garantia);
		if ($this->isColumnModified(ArtPeer::PESO)) $criteria->add(ArtPeer::PESO, $this->peso);
		if ($this->isColumnModified(ArtPeer::PIE)) $criteria->add(ArtPeer::PIE, $this->pie);
		if ($this->isColumnModified(ArtPeer::MARGEN1)) $criteria->add(ArtPeer::MARGEN1, $this->margen1);
		if ($this->isColumnModified(ArtPeer::MARGEN2)) $criteria->add(ArtPeer::MARGEN2, $this->margen2);
		if ($this->isColumnModified(ArtPeer::MARGEN3)) $criteria->add(ArtPeer::MARGEN3, $this->margen3);
		if ($this->isColumnModified(ArtPeer::MARGEN4)) $criteria->add(ArtPeer::MARGEN4, $this->margen4);
		if ($this->isColumnModified(ArtPeer::MARGEN5)) $criteria->add(ArtPeer::MARGEN5, $this->margen5);
		if ($this->isColumnModified(ArtPeer::ROW_ID)) $criteria->add(ArtPeer::ROW_ID, $this->row_id);
		if ($this->isColumnModified(ArtPeer::IMAGEN1)) $criteria->add(ArtPeer::IMAGEN1, $this->imagen1);
		if ($this->isColumnModified(ArtPeer::IMAGEN2)) $criteria->add(ArtPeer::IMAGEN2, $this->imagen2);
		if ($this->isColumnModified(ArtPeer::I_ART_DES)) $criteria->add(ArtPeer::I_ART_DES, $this->i_art_des);
		if ($this->isColumnModified(ArtPeer::UNI_EMP)) $criteria->add(ArtPeer::UNI_EMP, $this->uni_emp);
		if ($this->isColumnModified(ArtPeer::REL_EMP)) $criteria->add(ArtPeer::REL_EMP, $this->rel_emp);
		if ($this->isColumnModified(ArtPeer::MOVIL)) $criteria->add(ArtPeer::MOVIL, $this->movil);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ArtPeer::DATABASE_NAME);

		$criteria->add(ArtPeer::CO_ART, $this->co_art);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoArt();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoArt($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setArtDes($this->art_des);

		$copyObj->setFechaReg($this->fecha_reg);

		$copyObj->setManjSer($this->manj_ser);

		$copyObj->setCoLin($this->co_lin);

		$copyObj->setCoCat($this->co_cat);

		$copyObj->setCoSubl($this->co_subl);

		$copyObj->setCoColor($this->co_color);

		$copyObj->setItem($this->item);

		$copyObj->setRef($this->ref);

		$copyObj->setModelo($this->modelo);

		$copyObj->setProcedenci($this->procedenci);

		$copyObj->setComentario($this->comentario);

		$copyObj->setCoProv($this->co_prov);

		$copyObj->setUbicacion($this->ubicacion);

		$copyObj->setUniVenta($this->uni_venta);

		$copyObj->setUniCompra($this->uni_compra);

		$copyObj->setUniRelac($this->uni_relac);

		$copyObj->setRelacAut($this->relac_aut);

		$copyObj->setStockAct($this->stock_act);

		$copyObj->setStockCom($this->stock_com);

		$copyObj->setSstockCom($this->sstock_com);

		$copyObj->setStockLle($this->stock_lle);

		$copyObj->setSstockLle($this->sstock_lle);

		$copyObj->setStockDes($this->stock_des);

		$copyObj->setSstockDes($this->sstock_des);

		$copyObj->setSuniVenta($this->suni_venta);

		$copyObj->setSuniCompr($this->suni_compr);

		$copyObj->setSuniRelac($this->suni_relac);

		$copyObj->setSstockAct($this->sstock_act);

		$copyObj->setRelacComp($this->relac_comp);

		$copyObj->setRelacVent($this->relac_vent);

		$copyObj->setPtoPedido($this->pto_pedido);

		$copyObj->setStockMax($this->stock_max);

		$copyObj->setStockMin($this->stock_min);

		$copyObj->setPrecOm($this->prec_om);

		$copyObj->setPrecVta1($this->prec_vta1);

		$copyObj->setFecPrecV($this->fec_prec_v);

		$copyObj->setFecPrec2($this->fec_prec_2);

		$copyObj->setPrecVta2($this->prec_vta2);

		$copyObj->setFecPrec3($this->fec_prec_3);

		$copyObj->setPrecVta3($this->prec_vta3);

		$copyObj->setFecPrec4($this->fec_prec_4);

		$copyObj->setPrecVta4($this->prec_vta4);

		$copyObj->setFecPrec5($this->fec_prec_5);

		$copyObj->setPrecVta5($this->prec_vta5);

		$copyObj->setPrecAgr1($this->prec_agr1);

		$copyObj->setPrecAgr2($this->prec_agr2);

		$copyObj->setPrecAgr3($this->prec_agr3);

		$copyObj->setPrecAgr4($this->prec_agr4);

		$copyObj->setPrecAgr5($this->prec_agr5);

		$copyObj->setCanAgr($this->can_agr);

		$copyObj->setFecDesP5($this->fec_des_p5);

		$copyObj->setFecHasP5($this->fec_has_p5);

		$copyObj->setCoImp($this->co_imp);

		$copyObj->setMargenMax($this->margen_max);

		$copyObj->setUltCosUn($this->ult_cos_un);

		$copyObj->setFecUltCo($this->fec_ult_co);

		$copyObj->setCosProUn($this->cos_pro_un);

		$copyObj->setFecCosPr($this->fec_cos_pr);

		$copyObj->setCosMerc($this->cos_merc);

		$copyObj->setFecCosMe($this->fec_cos_me);

		$copyObj->setCosProv($this->cos_prov);

		$copyObj->setFecCosP2($this->fec_cos_p2);

		$copyObj->setUltCosDo($this->ult_cos_do);

		$copyObj->setFecCosDo($this->fec_cos_do);

		$copyObj->setCosUnAn($this->cos_un_an);

		$copyObj->setFecCosAn($this->fec_cos_an);

		$copyObj->setUltCosOm($this->ult_cos_om);

		$copyObj->setFecUltOm($this->fec_ult_om);

		$copyObj->setCosProOm($this->cos_pro_om);

		$copyObj->setFecProOm($this->fec_pro_om);

		$copyObj->setTipoCos($this->tipo_cos);

		$copyObj->setMontComi($this->mont_comi);

		$copyObj->setPorcCos($this->porc_cos);

		$copyObj->setMontCos($this->mont_cos);

		$copyObj->setPorcGas($this->porc_gas);

		$copyObj->setMontGas($this->mont_gas);

		$copyObj->setFCost($this->f_cost);

		$copyObj->setFisico($this->fisico);

		$copyObj->setPuntCli($this->punt_cli);

		$copyObj->setPuntPro($this->punt_pro);

		$copyObj->setDiasRepos($this->dias_repos);

		$copyObj->setTipo($this->tipo);

		$copyObj->setAlmPrin($this->alm_prin);

		$copyObj->setAnulado($this->anulado);

		$copyObj->setTipoImp($this->tipo_imp);

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setMonIlc($this->mon_ilc);

		$copyObj->setCapacidad($this->capacidad);

		$copyObj->setGradoAl($this->grado_al);

		$copyObj->setTipoLicor($this->tipo_licor);

		$copyObj->setCompuesto($this->compuesto);

		$copyObj->setPicture($this->picture);

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

		$copyObj->setTuniVenta($this->tuni_venta);

		$copyObj->setEquiUni1($this->equi_uni1);

		$copyObj->setEquiUni2($this->equi_uni2);

		$copyObj->setEquiUni3($this->equi_uni3);

		$copyObj->setLote($this->lote);

		$copyObj->setSerialp($this->serialp);

		$copyObj->setValido($this->valido);

		$copyObj->setAtributo1($this->atributo1);

		$copyObj->setVatributo1($this->vatributo1);

		$copyObj->setAtributo2($this->atributo2);

		$copyObj->setVatributo2($this->vatributo2);

		$copyObj->setAtributo3($this->atributo3);

		$copyObj->setVatributo3($this->vatributo3);

		$copyObj->setAtributo4($this->atributo4);

		$copyObj->setVatributo4($this->vatributo4);

		$copyObj->setAtributo5($this->atributo5);

		$copyObj->setVatributo5($this->vatributo5);

		$copyObj->setAtributo6($this->atributo6);

		$copyObj->setVatributo6($this->vatributo6);

		$copyObj->setGarantia($this->garantia);

		$copyObj->setPeso($this->peso);

		$copyObj->setPie($this->pie);

		$copyObj->setMargen1($this->margen1);

		$copyObj->setMargen2($this->margen2);

		$copyObj->setMargen3($this->margen3);

		$copyObj->setMargen4($this->margen4);

		$copyObj->setMargen5($this->margen5);

		$copyObj->setRowId($this->row_id);

		$copyObj->setImagen1($this->imagen1);

		$copyObj->setImagen2($this->imagen2);

		$copyObj->setIArtDes($this->i_art_des);

		$copyObj->setUniEmp($this->uni_emp);

		$copyObj->setRelEmp($this->rel_emp);

		$copyObj->setMovil($this->movil);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getRengFacs() as $relObj) {
				$copyObj->addRengFac($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoArt(NULL); 
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
			self::$peer = new ArtPeer();
		}
		return self::$peer;
	}

	
	public function setLinArt($v)
	{


		if ($v === null) {
			$this->setCoLin(' ');
		} else {
			$this->setCoLin($v->getCoLin());
		}


		$this->aLinArt = $v;
	}


	
	public function getLinArt($con = null)
	{
				include_once 'lib/model/om/BaseLinArtPeer.php';

		if ($this->aLinArt === null && (($this->co_lin !== "" && $this->co_lin !== null))) {

			$this->aLinArt = LinArtPeer::retrieveByPK($this->co_lin, $con);

			
		}
		return $this->aLinArt;
	}

	
	public function setCatArt($v)
	{


		if ($v === null) {
			$this->setCoCat(' ');
		} else {
			$this->setCoCat($v->getCoCat());
		}


		$this->aCatArt = $v;
	}


	
	public function getCatArt($con = null)
	{
				include_once 'lib/model/om/BaseCatArtPeer.php';

		if ($this->aCatArt === null && (($this->co_cat !== "" && $this->co_cat !== null))) {

			$this->aCatArt = CatArtPeer::retrieveByPK($this->co_cat, $con);

			
		}
		return $this->aCatArt;
	}

	
	public function setSubLin($v)
	{


		if ($v === null) {
			$this->setCoSubl(' ');
		} else {
			$this->setCoSubl($v->getCoLin());
		}


		$this->aSubLin = $v;
	}


	
	public function getSubLin($con = null)
	{
				include_once 'lib/model/om/BaseSubLinPeer.php';

		if ($this->aSubLin === null && (($this->co_subl !== "" && $this->co_subl !== null))) {

			$this->aSubLin = SubLinPeer::retrieveByPK($this->co_subl, $con);

			
		}
		return $this->aSubLin;
	}

	
	public function setColores($v)
	{


		if ($v === null) {
			$this->setCoColor(' ');
		} else {
			$this->setCoColor($v->getCoCol());
		}


		$this->aColores = $v;
	}


	
	public function getColores($con = null)
	{
				include_once 'lib/model/om/BaseColoresPeer.php';

		if ($this->aColores === null && (($this->co_color !== "" && $this->co_color !== null))) {

			$this->aColores = ColoresPeer::retrieveByPK($this->co_color, $con);

			
		}
		return $this->aColores;
	}

	
	public function setProceden($v)
	{


		if ($v === null) {
			$this->setProcedenci(' ');
		} else {
			$this->setProcedenci($v->getCodProc());
		}


		$this->aProceden = $v;
	}


	
	public function getProceden($con = null)
	{
				include_once 'lib/model/om/BaseProcedenPeer.php';

		if ($this->aProceden === null && (($this->procedenci !== "" && $this->procedenci !== null))) {

			$this->aProceden = ProcedenPeer::retrieveByPK($this->procedenci, $con);

			
		}
		return $this->aProceden;
	}

	
	public function setProv($v)
	{


		if ($v === null) {
			$this->setCoProv(' ');
		} else {
			$this->setCoProv($v->getCoProv());
		}


		$this->aProv = $v;
	}


	
	public function getProv($con = null)
	{
				include_once 'lib/model/om/BaseProvPeer.php';

		if ($this->aProv === null && (($this->co_prov !== "" && $this->co_prov !== null))) {

			$this->aProv = ProvPeer::retrieveByPK($this->co_prov, $con);

			
		}
		return $this->aProv;
	}

	
	public function setUnidadesRelatedByUniVenta($v)
	{


		if ($v === null) {
			$this->setUniVenta(' ');
		} else {
			$this->setUniVenta($v->getCoUni());
		}


		$this->aUnidadesRelatedByUniVenta = $v;
	}


	
	public function getUnidadesRelatedByUniVenta($con = null)
	{
				include_once 'lib/model/om/BaseUnidadesPeer.php';

		if ($this->aUnidadesRelatedByUniVenta === null && (($this->uni_venta !== "" && $this->uni_venta !== null))) {

			$this->aUnidadesRelatedByUniVenta = UnidadesPeer::retrieveByPK($this->uni_venta, $con);

			
		}
		return $this->aUnidadesRelatedByUniVenta;
	}

	
	public function setUnidadesRelatedBySuniVenta($v)
	{


		if ($v === null) {
			$this->setSuniVenta(' ');
		} else {
			$this->setSuniVenta($v->getCoUni());
		}


		$this->aUnidadesRelatedBySuniVenta = $v;
	}


	
	public function getUnidadesRelatedBySuniVenta($con = null)
	{
				include_once 'lib/model/om/BaseUnidadesPeer.php';

		if ($this->aUnidadesRelatedBySuniVenta === null && (($this->suni_venta !== "" && $this->suni_venta !== null))) {

			$this->aUnidadesRelatedBySuniVenta = UnidadesPeer::retrieveByPK($this->suni_venta, $con);

			
		}
		return $this->aUnidadesRelatedBySuniVenta;
	}

	
	public function setTabulado($v)
	{


		if ($v === null) {
			$this->setTipoImp(' ');
		} else {
			$this->setTipoImp($v->getTipo());
		}


		$this->aTabulado = $v;
	}


	
	public function getTabulado($con = null)
	{
				include_once 'lib/model/om/BaseTabuladoPeer.php';

		if ($this->aTabulado === null && (($this->tipo_imp !== "" && $this->tipo_imp !== null))) {

			$this->aTabulado = TabuladoPeer::retrieveByPK($this->tipo_imp, $con);

			
		}
		return $this->aTabulado;
	}

	
	public function initRengFacs()
	{
		if ($this->collRengFacs === null) {
			$this->collRengFacs = array();
		}
	}

	
	public function getRengFacs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRengFacs === null) {
			if ($this->isNew()) {
			   $this->collRengFacs = array();
			} else {

				$criteria->add(RengFacPeer::CO_ART, $this->getCoArt());

				RengFacPeer::addSelectColumns($criteria);
				$this->collRengFacs = RengFacPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(RengFacPeer::CO_ART, $this->getCoArt());

				RengFacPeer::addSelectColumns($criteria);
				if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
					$this->collRengFacs = RengFacPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastRengFacCriteria = $criteria;
		return $this->collRengFacs;
	}

	
	public function countRengFacs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(RengFacPeer::CO_ART, $this->getCoArt());

		return RengFacPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addRengFac(RengFac $l)
	{
		$this->collRengFacs[] = $l;
		$l->setArt($this);
	}


	
	public function getRengFacsJoinSubAlma($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRengFacs === null) {
			if ($this->isNew()) {
				$this->collRengFacs = array();
			} else {

				$criteria->add(RengFacPeer::CO_ART, $this->getCoArt());

				$this->collRengFacs = RengFacPeer::doSelectJoinSubAlma($criteria, $con);
			}
		} else {
									
			$criteria->add(RengFacPeer::CO_ART, $this->getCoArt());

			if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
				$this->collRengFacs = RengFacPeer::doSelectJoinSubAlma($criteria, $con);
			}
		}
		$this->lastRengFacCriteria = $criteria;

		return $this->collRengFacs;
	}


	
	public function getRengFacsJoinTabulado($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRengFacPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRengFacs === null) {
			if ($this->isNew()) {
				$this->collRengFacs = array();
			} else {

				$criteria->add(RengFacPeer::CO_ART, $this->getCoArt());

				$this->collRengFacs = RengFacPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(RengFacPeer::CO_ART, $this->getCoArt());

			if (!isset($this->lastRengFacCriteria) || !$this->lastRengFacCriteria->equals($criteria)) {
				$this->collRengFacs = RengFacPeer::doSelectJoinTabulado($criteria, $con);
			}
		}
		$this->lastRengFacCriteria = $criteria;

		return $this->collRengFacs;
	}

} 