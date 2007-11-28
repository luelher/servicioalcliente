<?php


abstract class BaseRengFac extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $fact_num;


	
	protected $reng_num;


	
	protected $dis_cen = ' ';


	
	protected $tipo_doc = ' ';


	
	protected $reng_doc = 0;


	
	protected $num_doc = 0;


	
	protected $co_art = ' ';


	
	protected $co_alma = ' ';


	
	protected $total_art = 0;


	
	protected $stotal_art = 0;


	
	protected $pendiente = 0;


	
	protected $uni_venta = ' ';


	
	protected $prec_vta = 0;


	
	protected $porc_desc = ' ';


	
	protected $tipo_imp = ' ';


	
	protected $isv = 0;


	
	protected $reng_neto = 0;


	
	protected $cos_pro_un = 0;


	
	protected $ult_cos_un = 0;


	
	protected $ult_cos_om = 0;


	
	protected $cos_pro_om = 0;


	
	protected $total_dev = 0;


	
	protected $monto_dev = 0;


	
	protected $prec_vta2 = 0;


	
	protected $anulado = false;


	
	protected $des_art = ' ';


	
	protected $seleccion = false;


	
	protected $cant_imp = 0;


	
	protected $comentario = ' ';


	
	protected $rowguid = '(newid())';


	
	protected $total_uni = 1;


	
	protected $mon_ilc = 0;


	
	protected $otros = 0;


	
	protected $nro_lote = ' ';


	
	protected $fec_lote;


	
	protected $pendiente2 = 0;


	
	protected $tipo_doc2 = ' ';


	
	protected $reng_doc2 = 0;


	
	protected $num_doc2 = 0;


	
	protected $tipo_prec = ' ';


	
	protected $co_alma2 = ' ';


	
	protected $aux01 = 0;


	
	protected $aux02 = ' ';


	
	protected $cant_prod = 0;


	
	protected $imp_prod = 0;

	
	protected $aArt;

	
	protected $aSubAlma;

	
	protected $aTabulado;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getFactNum()
	{

		return $this->fact_num;
	}

	
	public function getRengNum()
	{

		return $this->reng_num;
	}

	
	public function getDisCen()
	{

		return $this->dis_cen;
	}

	
	public function getTipoDoc()
	{

		return $this->tipo_doc;
	}

	
	public function getRengDoc()
	{

		return $this->reng_doc;
	}

	
	public function getNumDoc()
	{

		return $this->num_doc;
	}

	
	public function getCoArt()
	{

		return $this->co_art;
	}

	
	public function getCoAlma()
	{

		return $this->co_alma;
	}

	
	public function getTotalArt()
	{

		return $this->total_art;
	}

	
	public function getStotalArt()
	{

		return $this->stotal_art;
	}

	
	public function getPendiente()
	{

		return $this->pendiente;
	}

	
	public function getUniVenta()
	{

		return $this->uni_venta;
	}

	
	public function getPrecVta()
	{

		return $this->prec_vta;
	}

	
	public function getPorcDesc()
	{

		return $this->porc_desc;
	}

	
	public function getTipoImp()
	{

		return $this->tipo_imp;
	}

	
	public function getIsv()
	{

		return $this->isv;
	}

	
	public function getRengNeto()
	{

		return $this->reng_neto;
	}

	
	public function getCosProUn()
	{

		return $this->cos_pro_un;
	}

	
	public function getUltCosUn()
	{

		return $this->ult_cos_un;
	}

	
	public function getUltCosOm()
	{

		return $this->ult_cos_om;
	}

	
	public function getCosProOm()
	{

		return $this->cos_pro_om;
	}

	
	public function getTotalDev()
	{

		return $this->total_dev;
	}

	
	public function getMontoDev()
	{

		return $this->monto_dev;
	}

	
	public function getPrecVta2()
	{

		return $this->prec_vta2;
	}

	
	public function getAnulado()
	{

		return $this->anulado;
	}

	
	public function getDesArt()
	{

		return $this->des_art;
	}

	
	public function getSeleccion()
	{

		return $this->seleccion;
	}

	
	public function getCantImp()
	{

		return $this->cant_imp;
	}

	
	public function getComentario()
	{

		return $this->comentario;
	}

	
	public function getRowguid()
	{

		return $this->rowguid;
	}

	
	public function getTotalUni()
	{

		return $this->total_uni;
	}

	
	public function getMonIlc()
	{

		return $this->mon_ilc;
	}

	
	public function getOtros()
	{

		return $this->otros;
	}

	
	public function getNroLote()
	{

		return $this->nro_lote;
	}

	
	public function getFecLote($format = 'Y-m-d H:i:s')
	{

		if ($this->fec_lote === null || $this->fec_lote === '') {
			return null;
		} elseif (!is_int($this->fec_lote)) {
						$ts = strtotime($this->fec_lote);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fec_lote] as date/time value: " . var_export($this->fec_lote, true));
			}
		} else {
			$ts = $this->fec_lote;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPendiente2()
	{

		return $this->pendiente2;
	}

	
	public function getTipoDoc2()
	{

		return $this->tipo_doc2;
	}

	
	public function getRengDoc2()
	{

		return $this->reng_doc2;
	}

	
	public function getNumDoc2()
	{

		return $this->num_doc2;
	}

	
	public function getTipoPrec()
	{

		return $this->tipo_prec;
	}

	
	public function getCoAlma2()
	{

		return $this->co_alma2;
	}

	
	public function getAux01()
	{

		return $this->aux01;
	}

	
	public function getAux02()
	{

		return $this->aux02;
	}

	
	public function getCantProd()
	{

		return $this->cant_prod;
	}

	
	public function getImpProd()
	{

		return $this->imp_prod;
	}

	
	public function setFactNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_num !== $v) {
			$this->fact_num = $v;
			$this->modifiedColumns[] = RengFacPeer::FACT_NUM;
		}

	} 
	
	public function setRengNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reng_num !== $v) {
			$this->reng_num = $v;
			$this->modifiedColumns[] = RengFacPeer::RENG_NUM;
		}

	} 
	
	public function setDisCen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dis_cen !== $v || $v === ' ') {
			$this->dis_cen = $v;
			$this->modifiedColumns[] = RengFacPeer::DIS_CEN;
		}

	} 
	
	public function setTipoDoc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_doc !== $v || $v === ' ') {
			$this->tipo_doc = $v;
			$this->modifiedColumns[] = RengFacPeer::TIPO_DOC;
		}

	} 
	
	public function setRengDoc($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reng_doc !== $v || $v === 0) {
			$this->reng_doc = $v;
			$this->modifiedColumns[] = RengFacPeer::RENG_DOC;
		}

	} 
	
	public function setNumDoc($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_doc !== $v || $v === 0) {
			$this->num_doc = $v;
			$this->modifiedColumns[] = RengFacPeer::NUM_DOC;
		}

	} 
	
	public function setCoArt($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_art !== $v || $v === ' ') {
			$this->co_art = $v;
			$this->modifiedColumns[] = RengFacPeer::CO_ART;
		}

		if ($this->aArt !== null && $this->aArt->getCoArt() !== $v) {
			$this->aArt = null;
		}

	} 
	
	public function setCoAlma($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_alma !== $v || $v === ' ') {
			$this->co_alma = $v;
			$this->modifiedColumns[] = RengFacPeer::CO_ALMA;
		}

		if ($this->aSubAlma !== null && $this->aSubAlma->getCoSub() !== $v) {
			$this->aSubAlma = null;
		}

	} 
	
	public function setTotalArt($v)
	{

		if ($this->total_art !== $v || $v === 0) {
			$this->total_art = $v;
			$this->modifiedColumns[] = RengFacPeer::TOTAL_ART;
		}

	} 
	
	public function setStotalArt($v)
	{

		if ($this->stotal_art !== $v || $v === 0) {
			$this->stotal_art = $v;
			$this->modifiedColumns[] = RengFacPeer::STOTAL_ART;
		}

	} 
	
	public function setPendiente($v)
	{

		if ($this->pendiente !== $v || $v === 0) {
			$this->pendiente = $v;
			$this->modifiedColumns[] = RengFacPeer::PENDIENTE;
		}

	} 
	
	public function setUniVenta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->uni_venta !== $v || $v === ' ') {
			$this->uni_venta = $v;
			$this->modifiedColumns[] = RengFacPeer::UNI_VENTA;
		}

	} 
	
	public function setPrecVta($v)
	{

		if ($this->prec_vta !== $v || $v === 0) {
			$this->prec_vta = $v;
			$this->modifiedColumns[] = RengFacPeer::PREC_VTA;
		}

	} 
	
	public function setPorcDesc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->porc_desc !== $v || $v === ' ') {
			$this->porc_desc = $v;
			$this->modifiedColumns[] = RengFacPeer::PORC_DESC;
		}

	} 
	
	public function setTipoImp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_imp !== $v || $v === ' ') {
			$this->tipo_imp = $v;
			$this->modifiedColumns[] = RengFacPeer::TIPO_IMP;
		}

		if ($this->aTabulado !== null && $this->aTabulado->getTipo() !== $v) {
			$this->aTabulado = null;
		}

	} 
	
	public function setIsv($v)
	{

		if ($this->isv !== $v || $v === 0) {
			$this->isv = $v;
			$this->modifiedColumns[] = RengFacPeer::ISV;
		}

	} 
	
	public function setRengNeto($v)
	{

		if ($this->reng_neto !== $v || $v === 0) {
			$this->reng_neto = $v;
			$this->modifiedColumns[] = RengFacPeer::RENG_NETO;
		}

	} 
	
	public function setCosProUn($v)
	{

		if ($this->cos_pro_un !== $v || $v === 0) {
			$this->cos_pro_un = $v;
			$this->modifiedColumns[] = RengFacPeer::COS_PRO_UN;
		}

	} 
	
	public function setUltCosUn($v)
	{

		if ($this->ult_cos_un !== $v || $v === 0) {
			$this->ult_cos_un = $v;
			$this->modifiedColumns[] = RengFacPeer::ULT_COS_UN;
		}

	} 
	
	public function setUltCosOm($v)
	{

		if ($this->ult_cos_om !== $v || $v === 0) {
			$this->ult_cos_om = $v;
			$this->modifiedColumns[] = RengFacPeer::ULT_COS_OM;
		}

	} 
	
	public function setCosProOm($v)
	{

		if ($this->cos_pro_om !== $v || $v === 0) {
			$this->cos_pro_om = $v;
			$this->modifiedColumns[] = RengFacPeer::COS_PRO_OM;
		}

	} 
	
	public function setTotalDev($v)
	{

		if ($this->total_dev !== $v || $v === 0) {
			$this->total_dev = $v;
			$this->modifiedColumns[] = RengFacPeer::TOTAL_DEV;
		}

	} 
	
	public function setMontoDev($v)
	{

		if ($this->monto_dev !== $v || $v === 0) {
			$this->monto_dev = $v;
			$this->modifiedColumns[] = RengFacPeer::MONTO_DEV;
		}

	} 
	
	public function setPrecVta2($v)
	{

		if ($this->prec_vta2 !== $v || $v === 0) {
			$this->prec_vta2 = $v;
			$this->modifiedColumns[] = RengFacPeer::PREC_VTA2;
		}

	} 
	
	public function setAnulado($v)
	{

		if ($this->anulado !== $v || $v === false) {
			$this->anulado = $v;
			$this->modifiedColumns[] = RengFacPeer::ANULADO;
		}

	} 
	
	public function setDesArt($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->des_art !== $v || $v === ' ') {
			$this->des_art = $v;
			$this->modifiedColumns[] = RengFacPeer::DES_ART;
		}

	} 
	
	public function setSeleccion($v)
	{

		if ($this->seleccion !== $v || $v === false) {
			$this->seleccion = $v;
			$this->modifiedColumns[] = RengFacPeer::SELECCION;
		}

	} 
	
	public function setCantImp($v)
	{

		if ($this->cant_imp !== $v || $v === 0) {
			$this->cant_imp = $v;
			$this->modifiedColumns[] = RengFacPeer::CANT_IMP;
		}

	} 
	
	public function setComentario($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comentario !== $v || $v === ' ') {
			$this->comentario = $v;
			$this->modifiedColumns[] = RengFacPeer::COMENTARIO;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = RengFacPeer::ROWGUID;
		}

	} 
	
	public function setTotalUni($v)
	{

		if ($this->total_uni !== $v || $v === 1) {
			$this->total_uni = $v;
			$this->modifiedColumns[] = RengFacPeer::TOTAL_UNI;
		}

	} 
	
	public function setMonIlc($v)
	{

		if ($this->mon_ilc !== $v || $v === 0) {
			$this->mon_ilc = $v;
			$this->modifiedColumns[] = RengFacPeer::MON_ILC;
		}

	} 
	
	public function setOtros($v)
	{

		if ($this->otros !== $v || $v === 0) {
			$this->otros = $v;
			$this->modifiedColumns[] = RengFacPeer::OTROS;
		}

	} 
	
	public function setNroLote($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nro_lote !== $v || $v === ' ') {
			$this->nro_lote = $v;
			$this->modifiedColumns[] = RengFacPeer::NRO_LOTE;
		}

	} 
	
	public function setFecLote($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fec_lote] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fec_lote !== $ts) {
			$this->fec_lote = $ts;
			$this->modifiedColumns[] = RengFacPeer::FEC_LOTE;
		}

	} 
	
	public function setPendiente2($v)
	{

		if ($this->pendiente2 !== $v || $v === 0) {
			$this->pendiente2 = $v;
			$this->modifiedColumns[] = RengFacPeer::PENDIENTE2;
		}

	} 
	
	public function setTipoDoc2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_doc2 !== $v || $v === ' ') {
			$this->tipo_doc2 = $v;
			$this->modifiedColumns[] = RengFacPeer::TIPO_DOC2;
		}

	} 
	
	public function setRengDoc2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reng_doc2 !== $v || $v === 0) {
			$this->reng_doc2 = $v;
			$this->modifiedColumns[] = RengFacPeer::RENG_DOC2;
		}

	} 
	
	public function setNumDoc2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_doc2 !== $v || $v === 0) {
			$this->num_doc2 = $v;
			$this->modifiedColumns[] = RengFacPeer::NUM_DOC2;
		}

	} 
	
	public function setTipoPrec($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_prec !== $v || $v === ' ') {
			$this->tipo_prec = $v;
			$this->modifiedColumns[] = RengFacPeer::TIPO_PREC;
		}

	} 
	
	public function setCoAlma2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_alma2 !== $v || $v === ' ') {
			$this->co_alma2 = $v;
			$this->modifiedColumns[] = RengFacPeer::CO_ALMA2;
		}

	} 
	
	public function setAux01($v)
	{

		if ($this->aux01 !== $v || $v === 0) {
			$this->aux01 = $v;
			$this->modifiedColumns[] = RengFacPeer::AUX01;
		}

	} 
	
	public function setAux02($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->aux02 !== $v || $v === ' ') {
			$this->aux02 = $v;
			$this->modifiedColumns[] = RengFacPeer::AUX02;
		}

	} 
	
	public function setCantProd($v)
	{

		if ($this->cant_prod !== $v || $v === 0) {
			$this->cant_prod = $v;
			$this->modifiedColumns[] = RengFacPeer::CANT_PROD;
		}

	} 
	
	public function setImpProd($v)
	{

		if ($this->imp_prod !== $v || $v === 0) {
			$this->imp_prod = $v;
			$this->modifiedColumns[] = RengFacPeer::IMP_PROD;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->fact_num = $rs->getInt($startcol + 0);

			$this->reng_num = $rs->getInt($startcol + 1);

			$this->dis_cen = $rs->getString($startcol + 2);

			$this->tipo_doc = $rs->getString($startcol + 3);

			$this->reng_doc = $rs->getInt($startcol + 4);

			$this->num_doc = $rs->getInt($startcol + 5);

			$this->co_art = $rs->getString($startcol + 6);

			$this->co_alma = $rs->getString($startcol + 7);

			$this->total_art = $rs->getFloat($startcol + 8);

			$this->stotal_art = $rs->getFloat($startcol + 9);

			$this->pendiente = $rs->getFloat($startcol + 10);

			$this->uni_venta = $rs->getString($startcol + 11);

			$this->prec_vta = $rs->getFloat($startcol + 12);

			$this->porc_desc = $rs->getString($startcol + 13);

			$this->tipo_imp = $rs->getString($startcol + 14);

			$this->isv = $rs->getFloat($startcol + 15);

			$this->reng_neto = $rs->getFloat($startcol + 16);

			$this->cos_pro_un = $rs->getFloat($startcol + 17);

			$this->ult_cos_un = $rs->getFloat($startcol + 18);

			$this->ult_cos_om = $rs->getFloat($startcol + 19);

			$this->cos_pro_om = $rs->getFloat($startcol + 20);

			$this->total_dev = $rs->getFloat($startcol + 21);

			$this->monto_dev = $rs->getFloat($startcol + 22);

			$this->prec_vta2 = $rs->getFloat($startcol + 23);

			$this->anulado = $rs->getBoolean($startcol + 24);

			$this->des_art = $rs->getString($startcol + 25);

			$this->seleccion = $rs->getBoolean($startcol + 26);

			$this->cant_imp = $rs->getFloat($startcol + 27);

			$this->comentario = $rs->getString($startcol + 28);

			$this->rowguid = $rs->getString($startcol + 29);

			$this->total_uni = $rs->getFloat($startcol + 30);

			$this->mon_ilc = $rs->getFloat($startcol + 31);

			$this->otros = $rs->getFloat($startcol + 32);

			$this->nro_lote = $rs->getString($startcol + 33);

			$this->fec_lote = $rs->getTimestamp($startcol + 34, null);

			$this->pendiente2 = $rs->getFloat($startcol + 35);

			$this->tipo_doc2 = $rs->getString($startcol + 36);

			$this->reng_doc2 = $rs->getInt($startcol + 37);

			$this->num_doc2 = $rs->getInt($startcol + 38);

			$this->tipo_prec = $rs->getString($startcol + 39);

			$this->co_alma2 = $rs->getString($startcol + 40);

			$this->aux01 = $rs->getFloat($startcol + 41);

			$this->aux02 = $rs->getString($startcol + 42);

			$this->cant_prod = $rs->getFloat($startcol + 43);

			$this->imp_prod = $rs->getFloat($startcol + 44);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 45; 
		} catch (Exception $e) {
			throw new PropelException("Error populating RengFac object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RengFacPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RengFacPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RengFacPeer::DATABASE_NAME);
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


												
			if ($this->aArt !== null) {
				if ($this->aArt->isModified()) {
					$affectedRows += $this->aArt->save($con);
				}
				$this->setArt($this->aArt);
			}

			if ($this->aSubAlma !== null) {
				if ($this->aSubAlma->isModified()) {
					$affectedRows += $this->aSubAlma->save($con);
				}
				$this->setSubAlma($this->aSubAlma);
			}

			if ($this->aTabulado !== null) {
				if ($this->aTabulado->isModified()) {
					$affectedRows += $this->aTabulado->save($con);
				}
				$this->setTabulado($this->aTabulado);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = RengFacPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += RengFacPeer::doUpdate($this, $con);
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


												
			if ($this->aArt !== null) {
				if (!$this->aArt->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aArt->getValidationFailures());
				}
			}

			if ($this->aSubAlma !== null) {
				if (!$this->aSubAlma->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSubAlma->getValidationFailures());
				}
			}

			if ($this->aTabulado !== null) {
				if (!$this->aTabulado->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTabulado->getValidationFailures());
				}
			}


			if (($retval = RengFacPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RengFacPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getFactNum();
				break;
			case 1:
				return $this->getRengNum();
				break;
			case 2:
				return $this->getDisCen();
				break;
			case 3:
				return $this->getTipoDoc();
				break;
			case 4:
				return $this->getRengDoc();
				break;
			case 5:
				return $this->getNumDoc();
				break;
			case 6:
				return $this->getCoArt();
				break;
			case 7:
				return $this->getCoAlma();
				break;
			case 8:
				return $this->getTotalArt();
				break;
			case 9:
				return $this->getStotalArt();
				break;
			case 10:
				return $this->getPendiente();
				break;
			case 11:
				return $this->getUniVenta();
				break;
			case 12:
				return $this->getPrecVta();
				break;
			case 13:
				return $this->getPorcDesc();
				break;
			case 14:
				return $this->getTipoImp();
				break;
			case 15:
				return $this->getIsv();
				break;
			case 16:
				return $this->getRengNeto();
				break;
			case 17:
				return $this->getCosProUn();
				break;
			case 18:
				return $this->getUltCosUn();
				break;
			case 19:
				return $this->getUltCosOm();
				break;
			case 20:
				return $this->getCosProOm();
				break;
			case 21:
				return $this->getTotalDev();
				break;
			case 22:
				return $this->getMontoDev();
				break;
			case 23:
				return $this->getPrecVta2();
				break;
			case 24:
				return $this->getAnulado();
				break;
			case 25:
				return $this->getDesArt();
				break;
			case 26:
				return $this->getSeleccion();
				break;
			case 27:
				return $this->getCantImp();
				break;
			case 28:
				return $this->getComentario();
				break;
			case 29:
				return $this->getRowguid();
				break;
			case 30:
				return $this->getTotalUni();
				break;
			case 31:
				return $this->getMonIlc();
				break;
			case 32:
				return $this->getOtros();
				break;
			case 33:
				return $this->getNroLote();
				break;
			case 34:
				return $this->getFecLote();
				break;
			case 35:
				return $this->getPendiente2();
				break;
			case 36:
				return $this->getTipoDoc2();
				break;
			case 37:
				return $this->getRengDoc2();
				break;
			case 38:
				return $this->getNumDoc2();
				break;
			case 39:
				return $this->getTipoPrec();
				break;
			case 40:
				return $this->getCoAlma2();
				break;
			case 41:
				return $this->getAux01();
				break;
			case 42:
				return $this->getAux02();
				break;
			case 43:
				return $this->getCantProd();
				break;
			case 44:
				return $this->getImpProd();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RengFacPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getFactNum(),
			$keys[1] => $this->getRengNum(),
			$keys[2] => $this->getDisCen(),
			$keys[3] => $this->getTipoDoc(),
			$keys[4] => $this->getRengDoc(),
			$keys[5] => $this->getNumDoc(),
			$keys[6] => $this->getCoArt(),
			$keys[7] => $this->getCoAlma(),
			$keys[8] => $this->getTotalArt(),
			$keys[9] => $this->getStotalArt(),
			$keys[10] => $this->getPendiente(),
			$keys[11] => $this->getUniVenta(),
			$keys[12] => $this->getPrecVta(),
			$keys[13] => $this->getPorcDesc(),
			$keys[14] => $this->getTipoImp(),
			$keys[15] => $this->getIsv(),
			$keys[16] => $this->getRengNeto(),
			$keys[17] => $this->getCosProUn(),
			$keys[18] => $this->getUltCosUn(),
			$keys[19] => $this->getUltCosOm(),
			$keys[20] => $this->getCosProOm(),
			$keys[21] => $this->getTotalDev(),
			$keys[22] => $this->getMontoDev(),
			$keys[23] => $this->getPrecVta2(),
			$keys[24] => $this->getAnulado(),
			$keys[25] => $this->getDesArt(),
			$keys[26] => $this->getSeleccion(),
			$keys[27] => $this->getCantImp(),
			$keys[28] => $this->getComentario(),
			$keys[29] => $this->getRowguid(),
			$keys[30] => $this->getTotalUni(),
			$keys[31] => $this->getMonIlc(),
			$keys[32] => $this->getOtros(),
			$keys[33] => $this->getNroLote(),
			$keys[34] => $this->getFecLote(),
			$keys[35] => $this->getPendiente2(),
			$keys[36] => $this->getTipoDoc2(),
			$keys[37] => $this->getRengDoc2(),
			$keys[38] => $this->getNumDoc2(),
			$keys[39] => $this->getTipoPrec(),
			$keys[40] => $this->getCoAlma2(),
			$keys[41] => $this->getAux01(),
			$keys[42] => $this->getAux02(),
			$keys[43] => $this->getCantProd(),
			$keys[44] => $this->getImpProd(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RengFacPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setFactNum($value);
				break;
			case 1:
				$this->setRengNum($value);
				break;
			case 2:
				$this->setDisCen($value);
				break;
			case 3:
				$this->setTipoDoc($value);
				break;
			case 4:
				$this->setRengDoc($value);
				break;
			case 5:
				$this->setNumDoc($value);
				break;
			case 6:
				$this->setCoArt($value);
				break;
			case 7:
				$this->setCoAlma($value);
				break;
			case 8:
				$this->setTotalArt($value);
				break;
			case 9:
				$this->setStotalArt($value);
				break;
			case 10:
				$this->setPendiente($value);
				break;
			case 11:
				$this->setUniVenta($value);
				break;
			case 12:
				$this->setPrecVta($value);
				break;
			case 13:
				$this->setPorcDesc($value);
				break;
			case 14:
				$this->setTipoImp($value);
				break;
			case 15:
				$this->setIsv($value);
				break;
			case 16:
				$this->setRengNeto($value);
				break;
			case 17:
				$this->setCosProUn($value);
				break;
			case 18:
				$this->setUltCosUn($value);
				break;
			case 19:
				$this->setUltCosOm($value);
				break;
			case 20:
				$this->setCosProOm($value);
				break;
			case 21:
				$this->setTotalDev($value);
				break;
			case 22:
				$this->setMontoDev($value);
				break;
			case 23:
				$this->setPrecVta2($value);
				break;
			case 24:
				$this->setAnulado($value);
				break;
			case 25:
				$this->setDesArt($value);
				break;
			case 26:
				$this->setSeleccion($value);
				break;
			case 27:
				$this->setCantImp($value);
				break;
			case 28:
				$this->setComentario($value);
				break;
			case 29:
				$this->setRowguid($value);
				break;
			case 30:
				$this->setTotalUni($value);
				break;
			case 31:
				$this->setMonIlc($value);
				break;
			case 32:
				$this->setOtros($value);
				break;
			case 33:
				$this->setNroLote($value);
				break;
			case 34:
				$this->setFecLote($value);
				break;
			case 35:
				$this->setPendiente2($value);
				break;
			case 36:
				$this->setTipoDoc2($value);
				break;
			case 37:
				$this->setRengDoc2($value);
				break;
			case 38:
				$this->setNumDoc2($value);
				break;
			case 39:
				$this->setTipoPrec($value);
				break;
			case 40:
				$this->setCoAlma2($value);
				break;
			case 41:
				$this->setAux01($value);
				break;
			case 42:
				$this->setAux02($value);
				break;
			case 43:
				$this->setCantProd($value);
				break;
			case 44:
				$this->setImpProd($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RengFacPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setFactNum($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRengNum($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDisCen($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTipoDoc($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRengDoc($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNumDoc($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCoArt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCoAlma($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTotalArt($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStotalArt($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPendiente($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setUniVenta($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPrecVta($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPorcDesc($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setTipoImp($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setIsv($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setRengNeto($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCosProUn($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setUltCosUn($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setUltCosOm($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCosProOm($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setTotalDev($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setMontoDev($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setPrecVta2($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setAnulado($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setDesArt($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setSeleccion($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCantImp($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setComentario($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setRowguid($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setTotalUni($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setMonIlc($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setOtros($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setNroLote($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setFecLote($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setPendiente2($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setTipoDoc2($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setRengDoc2($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setNumDoc2($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setTipoPrec($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setCoAlma2($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setAux01($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setAux02($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setCantProd($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setImpProd($arr[$keys[44]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RengFacPeer::DATABASE_NAME);

		if ($this->isColumnModified(RengFacPeer::FACT_NUM)) $criteria->add(RengFacPeer::FACT_NUM, $this->fact_num);
		if ($this->isColumnModified(RengFacPeer::RENG_NUM)) $criteria->add(RengFacPeer::RENG_NUM, $this->reng_num);
		if ($this->isColumnModified(RengFacPeer::DIS_CEN)) $criteria->add(RengFacPeer::DIS_CEN, $this->dis_cen);
		if ($this->isColumnModified(RengFacPeer::TIPO_DOC)) $criteria->add(RengFacPeer::TIPO_DOC, $this->tipo_doc);
		if ($this->isColumnModified(RengFacPeer::RENG_DOC)) $criteria->add(RengFacPeer::RENG_DOC, $this->reng_doc);
		if ($this->isColumnModified(RengFacPeer::NUM_DOC)) $criteria->add(RengFacPeer::NUM_DOC, $this->num_doc);
		if ($this->isColumnModified(RengFacPeer::CO_ART)) $criteria->add(RengFacPeer::CO_ART, $this->co_art);
		if ($this->isColumnModified(RengFacPeer::CO_ALMA)) $criteria->add(RengFacPeer::CO_ALMA, $this->co_alma);
		if ($this->isColumnModified(RengFacPeer::TOTAL_ART)) $criteria->add(RengFacPeer::TOTAL_ART, $this->total_art);
		if ($this->isColumnModified(RengFacPeer::STOTAL_ART)) $criteria->add(RengFacPeer::STOTAL_ART, $this->stotal_art);
		if ($this->isColumnModified(RengFacPeer::PENDIENTE)) $criteria->add(RengFacPeer::PENDIENTE, $this->pendiente);
		if ($this->isColumnModified(RengFacPeer::UNI_VENTA)) $criteria->add(RengFacPeer::UNI_VENTA, $this->uni_venta);
		if ($this->isColumnModified(RengFacPeer::PREC_VTA)) $criteria->add(RengFacPeer::PREC_VTA, $this->prec_vta);
		if ($this->isColumnModified(RengFacPeer::PORC_DESC)) $criteria->add(RengFacPeer::PORC_DESC, $this->porc_desc);
		if ($this->isColumnModified(RengFacPeer::TIPO_IMP)) $criteria->add(RengFacPeer::TIPO_IMP, $this->tipo_imp);
		if ($this->isColumnModified(RengFacPeer::ISV)) $criteria->add(RengFacPeer::ISV, $this->isv);
		if ($this->isColumnModified(RengFacPeer::RENG_NETO)) $criteria->add(RengFacPeer::RENG_NETO, $this->reng_neto);
		if ($this->isColumnModified(RengFacPeer::COS_PRO_UN)) $criteria->add(RengFacPeer::COS_PRO_UN, $this->cos_pro_un);
		if ($this->isColumnModified(RengFacPeer::ULT_COS_UN)) $criteria->add(RengFacPeer::ULT_COS_UN, $this->ult_cos_un);
		if ($this->isColumnModified(RengFacPeer::ULT_COS_OM)) $criteria->add(RengFacPeer::ULT_COS_OM, $this->ult_cos_om);
		if ($this->isColumnModified(RengFacPeer::COS_PRO_OM)) $criteria->add(RengFacPeer::COS_PRO_OM, $this->cos_pro_om);
		if ($this->isColumnModified(RengFacPeer::TOTAL_DEV)) $criteria->add(RengFacPeer::TOTAL_DEV, $this->total_dev);
		if ($this->isColumnModified(RengFacPeer::MONTO_DEV)) $criteria->add(RengFacPeer::MONTO_DEV, $this->monto_dev);
		if ($this->isColumnModified(RengFacPeer::PREC_VTA2)) $criteria->add(RengFacPeer::PREC_VTA2, $this->prec_vta2);
		if ($this->isColumnModified(RengFacPeer::ANULADO)) $criteria->add(RengFacPeer::ANULADO, $this->anulado);
		if ($this->isColumnModified(RengFacPeer::DES_ART)) $criteria->add(RengFacPeer::DES_ART, $this->des_art);
		if ($this->isColumnModified(RengFacPeer::SELECCION)) $criteria->add(RengFacPeer::SELECCION, $this->seleccion);
		if ($this->isColumnModified(RengFacPeer::CANT_IMP)) $criteria->add(RengFacPeer::CANT_IMP, $this->cant_imp);
		if ($this->isColumnModified(RengFacPeer::COMENTARIO)) $criteria->add(RengFacPeer::COMENTARIO, $this->comentario);
		if ($this->isColumnModified(RengFacPeer::ROWGUID)) $criteria->add(RengFacPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(RengFacPeer::TOTAL_UNI)) $criteria->add(RengFacPeer::TOTAL_UNI, $this->total_uni);
		if ($this->isColumnModified(RengFacPeer::MON_ILC)) $criteria->add(RengFacPeer::MON_ILC, $this->mon_ilc);
		if ($this->isColumnModified(RengFacPeer::OTROS)) $criteria->add(RengFacPeer::OTROS, $this->otros);
		if ($this->isColumnModified(RengFacPeer::NRO_LOTE)) $criteria->add(RengFacPeer::NRO_LOTE, $this->nro_lote);
		if ($this->isColumnModified(RengFacPeer::FEC_LOTE)) $criteria->add(RengFacPeer::FEC_LOTE, $this->fec_lote);
		if ($this->isColumnModified(RengFacPeer::PENDIENTE2)) $criteria->add(RengFacPeer::PENDIENTE2, $this->pendiente2);
		if ($this->isColumnModified(RengFacPeer::TIPO_DOC2)) $criteria->add(RengFacPeer::TIPO_DOC2, $this->tipo_doc2);
		if ($this->isColumnModified(RengFacPeer::RENG_DOC2)) $criteria->add(RengFacPeer::RENG_DOC2, $this->reng_doc2);
		if ($this->isColumnModified(RengFacPeer::NUM_DOC2)) $criteria->add(RengFacPeer::NUM_DOC2, $this->num_doc2);
		if ($this->isColumnModified(RengFacPeer::TIPO_PREC)) $criteria->add(RengFacPeer::TIPO_PREC, $this->tipo_prec);
		if ($this->isColumnModified(RengFacPeer::CO_ALMA2)) $criteria->add(RengFacPeer::CO_ALMA2, $this->co_alma2);
		if ($this->isColumnModified(RengFacPeer::AUX01)) $criteria->add(RengFacPeer::AUX01, $this->aux01);
		if ($this->isColumnModified(RengFacPeer::AUX02)) $criteria->add(RengFacPeer::AUX02, $this->aux02);
		if ($this->isColumnModified(RengFacPeer::CANT_PROD)) $criteria->add(RengFacPeer::CANT_PROD, $this->cant_prod);
		if ($this->isColumnModified(RengFacPeer::IMP_PROD)) $criteria->add(RengFacPeer::IMP_PROD, $this->imp_prod);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RengFacPeer::DATABASE_NAME);

		$criteria->add(RengFacPeer::FACT_NUM, $this->fact_num);
		$criteria->add(RengFacPeer::RENG_NUM, $this->reng_num);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		$pks = array();

		$pks[0] = $this->getFactNum();

		$pks[1] = $this->getRengNum();

		return $pks;
	}

	
	public function setPrimaryKey($keys)
	{

		$this->setFactNum($keys[0]);

		$this->setRengNum($keys[1]);

	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDisCen($this->dis_cen);

		$copyObj->setTipoDoc($this->tipo_doc);

		$copyObj->setRengDoc($this->reng_doc);

		$copyObj->setNumDoc($this->num_doc);

		$copyObj->setCoArt($this->co_art);

		$copyObj->setCoAlma($this->co_alma);

		$copyObj->setTotalArt($this->total_art);

		$copyObj->setStotalArt($this->stotal_art);

		$copyObj->setPendiente($this->pendiente);

		$copyObj->setUniVenta($this->uni_venta);

		$copyObj->setPrecVta($this->prec_vta);

		$copyObj->setPorcDesc($this->porc_desc);

		$copyObj->setTipoImp($this->tipo_imp);

		$copyObj->setIsv($this->isv);

		$copyObj->setRengNeto($this->reng_neto);

		$copyObj->setCosProUn($this->cos_pro_un);

		$copyObj->setUltCosUn($this->ult_cos_un);

		$copyObj->setUltCosOm($this->ult_cos_om);

		$copyObj->setCosProOm($this->cos_pro_om);

		$copyObj->setTotalDev($this->total_dev);

		$copyObj->setMontoDev($this->monto_dev);

		$copyObj->setPrecVta2($this->prec_vta2);

		$copyObj->setAnulado($this->anulado);

		$copyObj->setDesArt($this->des_art);

		$copyObj->setSeleccion($this->seleccion);

		$copyObj->setCantImp($this->cant_imp);

		$copyObj->setComentario($this->comentario);

		$copyObj->setRowguid($this->rowguid);

		$copyObj->setTotalUni($this->total_uni);

		$copyObj->setMonIlc($this->mon_ilc);

		$copyObj->setOtros($this->otros);

		$copyObj->setNroLote($this->nro_lote);

		$copyObj->setFecLote($this->fec_lote);

		$copyObj->setPendiente2($this->pendiente2);

		$copyObj->setTipoDoc2($this->tipo_doc2);

		$copyObj->setRengDoc2($this->reng_doc2);

		$copyObj->setNumDoc2($this->num_doc2);

		$copyObj->setTipoPrec($this->tipo_prec);

		$copyObj->setCoAlma2($this->co_alma2);

		$copyObj->setAux01($this->aux01);

		$copyObj->setAux02($this->aux02);

		$copyObj->setCantProd($this->cant_prod);

		$copyObj->setImpProd($this->imp_prod);


		$copyObj->setNew(true);

		$copyObj->setFactNum(NULL); 
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
			self::$peer = new RengFacPeer();
		}
		return self::$peer;
	}

	
	public function setArt($v)
	{


		if ($v === null) {
			$this->setCoArt(' ');
		} else {
			$this->setCoArt($v->getCoArt());
		}


		$this->aArt = $v;
	}


	
	public function getArt($con = null)
	{
				include_once 'lib/model/om/BaseArtPeer.php';

		if ($this->aArt === null && (($this->co_art !== "" && $this->co_art !== null))) {

			$this->aArt = ArtPeer::retrieveByPK($this->co_art, $con);

			
		}
		return $this->aArt;
	}

	
	public function setSubAlma($v)
	{


		if ($v === null) {
			$this->setCoAlma(' ');
		} else {
			$this->setCoAlma($v->getCoSub());
		}


		$this->aSubAlma = $v;
	}


	
	public function getSubAlma($con = null)
	{
				include_once 'lib/model/om/BaseSubAlmaPeer.php';

		if ($this->aSubAlma === null && (($this->co_alma !== "" && $this->co_alma !== null))) {

			$this->aSubAlma = SubAlmaPeer::retrieveByPK($this->co_alma, $con);

			
		}
		return $this->aSubAlma;
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

} 