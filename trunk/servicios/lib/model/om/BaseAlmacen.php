<?php


abstract class BaseAlmacen extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $co_alma;


	
	protected $alma_des = '(space(1))';


	
	protected $nro_fact = 0;


	
	protected $num_fac_ini = 0;


	
	protected $num_fac_fin = 0;


	
	protected $campo1 = '(space(1))';


	
	protected $campo2 = '(space(1))';


	
	protected $campo3 = '(space(1))';


	
	protected $campo4 = '(space(1))';


	
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


	
	protected $nc_num = 0;


	
	protected $nd_num = 0;


	
	protected $ajus_num = 0;


	
	protected $tras_num = 0;


	
	protected $fisi_num = 0;


	
	protected $num_kit = 0;


	
	protected $genk_num = 0;


	
	protected $fact_num = 0;


	
	protected $ped_num = 0;


	
	protected $cotc_num = 0;


	
	protected $devc_num = 0;


	
	protected $nde_num = 0;


	
	protected $ndd_num = 0;


	
	protected $post_num = 0;


	
	protected $cfxg_num = 0;


	
	protected $chdv_num = 0;


	
	protected $giro_num = 0;


	
	protected $reten_num = 0;


	
	protected $cb_num = 0;


	
	protected $movb_num = 0;


	
	protected $movc_num = 0;


	
	protected $ordp_num = 0;


	
	protected $depc_num = 0;


	
	protected $comp_num = 0;


	
	protected $ord_num = 0;


	
	protected $cotp_num = 0;


	
	protected $devp_num = 0;


	
	protected $ndr_num = 0;


	
	protected $postcppnum = 0;


	
	protected $ccxg_num = 0;


	
	protected $chdvcppnum = 0;


	
	protected $girocppnum = 0;


	
	protected $nccpp_num = 0;


	
	protected $ndcpp_num = 0;


	
	protected $retencppnum = 0;


	
	protected $pg_num = 0;


	
	protected $aju_posm = 0;


	
	protected $aju_posa = 0;


	
	protected $aju_negm = 0;


	
	protected $aju_nega = 0;


	
	protected $aju_posmc = 0;


	
	protected $aju_posac = 0;


	
	protected $aju_negmc = 0;


	
	protected $aju_negac = 0;


	
	protected $pventa = 0;


	
	protected $turnosic = 0;


	
	protected $plv_num = 0;


	
	protected $plc_num = 0;


	
	protected $tabislr = 0;


	
	protected $imp_num = 0;


	
	protected $rma_cli = 0;


	
	protected $rma_prov = 0;


	
	protected $rma_entc = 0;


	
	protected $rma_entp = 0;


	
	protected $rma_regs = 0;


	
	protected $fact_s1 = '(space(1))';


	
	protected $fact_s2 = '(space(1))';


	
	protected $fact_s3 = '(space(1))';


	
	protected $fact_s4 = '(space(1))';


	
	protected $fact_s5 = '(space(1))';


	
	protected $nde_s1 = '(space(1))';


	
	protected $nde_s2 = '(space(1))';


	
	protected $nde_s3 = '(space(1))';


	
	protected $nde_s4 = '(space(1))';


	
	protected $nde_s5 = '(space(1))';


	
	protected $nc_s1 = '(space(1))';


	
	protected $nc_s2 = '(space(1))';


	
	protected $nc_s3 = '(space(1))';


	
	protected $nc_s4 = '(space(1))';


	
	protected $nc_s5 = '(space(1))';


	
	protected $nd_s1 = '(space(1))';


	
	protected $nd_s2 = '(space(1))';


	
	protected $nd_s3 = '(space(1))';


	
	protected $nd_s4 = '(space(1))';


	
	protected $nd_s5 = '(space(1))';


	
	protected $fact_f1 = 0;


	
	protected $fact_f2 = 0;


	
	protected $fact_f3 = 0;


	
	protected $fact_f4 = 0;


	
	protected $nde_f1 = 0;


	
	protected $nde_f2 = 0;


	
	protected $nde_f3 = 0;


	
	protected $nde_f4 = 0;


	
	protected $nc_f1 = 0;


	
	protected $nc_f2 = 0;


	
	protected $nc_f3 = 0;


	
	protected $nc_f4 = 0;


	
	protected $nd_f1 = 0;


	
	protected $nd_f2 = 0;


	
	protected $nd_f3 = 0;


	
	protected $nd_f4 = 0;


	
	protected $fact_p1 = 0;


	
	protected $fact_p2 = 0;


	
	protected $fact_p3 = 0;


	
	protected $fact_p4 = 0;


	
	protected $fact_p5 = 0;


	
	protected $nde_p1 = 0;


	
	protected $nde_p2 = 0;


	
	protected $nde_p3 = 0;


	
	protected $nde_p4 = 0;


	
	protected $nde_p5 = 0;


	
	protected $nc_p1 = 0;


	
	protected $nc_p2 = 0;


	
	protected $nc_p3 = 0;


	
	protected $nc_p4 = 0;


	
	protected $nc_p5 = 0;


	
	protected $nd_p1 = 0;


	
	protected $nd_p2 = 0;


	
	protected $nd_p3 = 0;


	
	protected $nd_p4 = 0;


	
	protected $nd_p5 = 0;


	
	protected $fact_num2 = 0;


	
	protected $fact_num3 = 0;


	
	protected $fact_num4 = 0;


	
	protected $fact_num5 = 0;


	
	protected $nde_num2 = 0;


	
	protected $nde_num3 = 0;


	
	protected $nde_num4 = 0;


	
	protected $nde_num5 = 0;


	
	protected $nc_num2 = 0;


	
	protected $nc_num3 = 0;


	
	protected $nc_num4 = 0;


	
	protected $nc_num5 = 0;


	
	protected $nd_num2 = 0;


	
	protected $nd_num3 = 0;


	
	protected $nd_num4 = 0;


	
	protected $nd_num5 = 0;


	
	protected $serie2 = true;


	
	protected $serie3 = true;


	
	protected $serie4 = true;


	
	protected $serie5 = true;


	
	protected $emp_num = 0;


	
	protected $dmc_num = 0;


	
	protected $tax_num = 0;


	
	protected $ced_num = 0;


	
	protected $ent_num = 0;


	
	protected $cie_num = 0;


	
	protected $odp_num = 0;


	
	protected $req_num = 0;


	
	protected $dev_num = 0;


	
	protected $exp_num = 0;


	
	protected $inp_num = 0;


	
	protected $cost_num = 0;


	
	protected $par_num = 0;


	
	protected $esc_num = 0;


	
	protected $pla_num = 0;


	
	protected $men_num = 0;


	
	protected $dist_num = 0;


	
	protected $exp_numi = 0;

	
	protected $collFacturas;

	
	protected $lastFacturaCriteria = null;

	
	protected $collDocumCcs;

	
	protected $lastDocumCcCriteria = null;

	
	protected $collCobross;

	
	protected $lastCobrosCriteria = null;

	
	protected $collSubAlmas;

	
	protected $lastSubAlmaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCoAlma()
	{

		return $this->co_alma;
	}

	
	public function getAlmaDes()
	{

		return $this->alma_des;
	}

	
	public function getNroFact()
	{

		return $this->nro_fact;
	}

	
	public function getNumFacIni()
	{

		return $this->num_fac_ini;
	}

	
	public function getNumFacFin()
	{

		return $this->num_fac_fin;
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

	
	public function getNcNum()
	{

		return $this->nc_num;
	}

	
	public function getNdNum()
	{

		return $this->nd_num;
	}

	
	public function getAjusNum()
	{

		return $this->ajus_num;
	}

	
	public function getTrasNum()
	{

		return $this->tras_num;
	}

	
	public function getFisiNum()
	{

		return $this->fisi_num;
	}

	
	public function getNumKit()
	{

		return $this->num_kit;
	}

	
	public function getGenkNum()
	{

		return $this->genk_num;
	}

	
	public function getFactNum()
	{

		return $this->fact_num;
	}

	
	public function getPedNum()
	{

		return $this->ped_num;
	}

	
	public function getCotcNum()
	{

		return $this->cotc_num;
	}

	
	public function getDevcNum()
	{

		return $this->devc_num;
	}

	
	public function getNdeNum()
	{

		return $this->nde_num;
	}

	
	public function getNddNum()
	{

		return $this->ndd_num;
	}

	
	public function getPostNum()
	{

		return $this->post_num;
	}

	
	public function getCfxgNum()
	{

		return $this->cfxg_num;
	}

	
	public function getChdvNum()
	{

		return $this->chdv_num;
	}

	
	public function getGiroNum()
	{

		return $this->giro_num;
	}

	
	public function getRetenNum()
	{

		return $this->reten_num;
	}

	
	public function getCbNum()
	{

		return $this->cb_num;
	}

	
	public function getMovbNum()
	{

		return $this->movb_num;
	}

	
	public function getMovcNum()
	{

		return $this->movc_num;
	}

	
	public function getOrdpNum()
	{

		return $this->ordp_num;
	}

	
	public function getDepcNum()
	{

		return $this->depc_num;
	}

	
	public function getCompNum()
	{

		return $this->comp_num;
	}

	
	public function getOrdNum()
	{

		return $this->ord_num;
	}

	
	public function getCotpNum()
	{

		return $this->cotp_num;
	}

	
	public function getDevpNum()
	{

		return $this->devp_num;
	}

	
	public function getNdrNum()
	{

		return $this->ndr_num;
	}

	
	public function getPostcppnum()
	{

		return $this->postcppnum;
	}

	
	public function getCcxgNum()
	{

		return $this->ccxg_num;
	}

	
	public function getChdvcppnum()
	{

		return $this->chdvcppnum;
	}

	
	public function getGirocppnum()
	{

		return $this->girocppnum;
	}

	
	public function getNccppNum()
	{

		return $this->nccpp_num;
	}

	
	public function getNdcppNum()
	{

		return $this->ndcpp_num;
	}

	
	public function getRetencppnum()
	{

		return $this->retencppnum;
	}

	
	public function getPgNum()
	{

		return $this->pg_num;
	}

	
	public function getAjuPosm()
	{

		return $this->aju_posm;
	}

	
	public function getAjuPosa()
	{

		return $this->aju_posa;
	}

	
	public function getAjuNegm()
	{

		return $this->aju_negm;
	}

	
	public function getAjuNega()
	{

		return $this->aju_nega;
	}

	
	public function getAjuPosmc()
	{

		return $this->aju_posmc;
	}

	
	public function getAjuPosac()
	{

		return $this->aju_posac;
	}

	
	public function getAjuNegmc()
	{

		return $this->aju_negmc;
	}

	
	public function getAjuNegac()
	{

		return $this->aju_negac;
	}

	
	public function getPventa()
	{

		return $this->pventa;
	}

	
	public function getTurnosic()
	{

		return $this->turnosic;
	}

	
	public function getPlvNum()
	{

		return $this->plv_num;
	}

	
	public function getPlcNum()
	{

		return $this->plc_num;
	}

	
	public function getTabislr()
	{

		return $this->tabislr;
	}

	
	public function getImpNum()
	{

		return $this->imp_num;
	}

	
	public function getRmaCli()
	{

		return $this->rma_cli;
	}

	
	public function getRmaProv()
	{

		return $this->rma_prov;
	}

	
	public function getRmaEntc()
	{

		return $this->rma_entc;
	}

	
	public function getRmaEntp()
	{

		return $this->rma_entp;
	}

	
	public function getRmaRegs()
	{

		return $this->rma_regs;
	}

	
	public function getFactS1()
	{

		return $this->fact_s1;
	}

	
	public function getFactS2()
	{

		return $this->fact_s2;
	}

	
	public function getFactS3()
	{

		return $this->fact_s3;
	}

	
	public function getFactS4()
	{

		return $this->fact_s4;
	}

	
	public function getFactS5()
	{

		return $this->fact_s5;
	}

	
	public function getNdeS1()
	{

		return $this->nde_s1;
	}

	
	public function getNdeS2()
	{

		return $this->nde_s2;
	}

	
	public function getNdeS3()
	{

		return $this->nde_s3;
	}

	
	public function getNdeS4()
	{

		return $this->nde_s4;
	}

	
	public function getNdeS5()
	{

		return $this->nde_s5;
	}

	
	public function getNcS1()
	{

		return $this->nc_s1;
	}

	
	public function getNcS2()
	{

		return $this->nc_s2;
	}

	
	public function getNcS3()
	{

		return $this->nc_s3;
	}

	
	public function getNcS4()
	{

		return $this->nc_s4;
	}

	
	public function getNcS5()
	{

		return $this->nc_s5;
	}

	
	public function getNdS1()
	{

		return $this->nd_s1;
	}

	
	public function getNdS2()
	{

		return $this->nd_s2;
	}

	
	public function getNdS3()
	{

		return $this->nd_s3;
	}

	
	public function getNdS4()
	{

		return $this->nd_s4;
	}

	
	public function getNdS5()
	{

		return $this->nd_s5;
	}

	
	public function getFactF1()
	{

		return $this->fact_f1;
	}

	
	public function getFactF2()
	{

		return $this->fact_f2;
	}

	
	public function getFactF3()
	{

		return $this->fact_f3;
	}

	
	public function getFactF4()
	{

		return $this->fact_f4;
	}

	
	public function getNdeF1()
	{

		return $this->nde_f1;
	}

	
	public function getNdeF2()
	{

		return $this->nde_f2;
	}

	
	public function getNdeF3()
	{

		return $this->nde_f3;
	}

	
	public function getNdeF4()
	{

		return $this->nde_f4;
	}

	
	public function getNcF1()
	{

		return $this->nc_f1;
	}

	
	public function getNcF2()
	{

		return $this->nc_f2;
	}

	
	public function getNcF3()
	{

		return $this->nc_f3;
	}

	
	public function getNcF4()
	{

		return $this->nc_f4;
	}

	
	public function getNdF1()
	{

		return $this->nd_f1;
	}

	
	public function getNdF2()
	{

		return $this->nd_f2;
	}

	
	public function getNdF3()
	{

		return $this->nd_f3;
	}

	
	public function getNdF4()
	{

		return $this->nd_f4;
	}

	
	public function getFactP1()
	{

		return $this->fact_p1;
	}

	
	public function getFactP2()
	{

		return $this->fact_p2;
	}

	
	public function getFactP3()
	{

		return $this->fact_p3;
	}

	
	public function getFactP4()
	{

		return $this->fact_p4;
	}

	
	public function getFactP5()
	{

		return $this->fact_p5;
	}

	
	public function getNdeP1()
	{

		return $this->nde_p1;
	}

	
	public function getNdeP2()
	{

		return $this->nde_p2;
	}

	
	public function getNdeP3()
	{

		return $this->nde_p3;
	}

	
	public function getNdeP4()
	{

		return $this->nde_p4;
	}

	
	public function getNdeP5()
	{

		return $this->nde_p5;
	}

	
	public function getNcP1()
	{

		return $this->nc_p1;
	}

	
	public function getNcP2()
	{

		return $this->nc_p2;
	}

	
	public function getNcP3()
	{

		return $this->nc_p3;
	}

	
	public function getNcP4()
	{

		return $this->nc_p4;
	}

	
	public function getNcP5()
	{

		return $this->nc_p5;
	}

	
	public function getNdP1()
	{

		return $this->nd_p1;
	}

	
	public function getNdP2()
	{

		return $this->nd_p2;
	}

	
	public function getNdP3()
	{

		return $this->nd_p3;
	}

	
	public function getNdP4()
	{

		return $this->nd_p4;
	}

	
	public function getNdP5()
	{

		return $this->nd_p5;
	}

	
	public function getFactNum2()
	{

		return $this->fact_num2;
	}

	
	public function getFactNum3()
	{

		return $this->fact_num3;
	}

	
	public function getFactNum4()
	{

		return $this->fact_num4;
	}

	
	public function getFactNum5()
	{

		return $this->fact_num5;
	}

	
	public function getNdeNum2()
	{

		return $this->nde_num2;
	}

	
	public function getNdeNum3()
	{

		return $this->nde_num3;
	}

	
	public function getNdeNum4()
	{

		return $this->nde_num4;
	}

	
	public function getNdeNum5()
	{

		return $this->nde_num5;
	}

	
	public function getNcNum2()
	{

		return $this->nc_num2;
	}

	
	public function getNcNum3()
	{

		return $this->nc_num3;
	}

	
	public function getNcNum4()
	{

		return $this->nc_num4;
	}

	
	public function getNcNum5()
	{

		return $this->nc_num5;
	}

	
	public function getNdNum2()
	{

		return $this->nd_num2;
	}

	
	public function getNdNum3()
	{

		return $this->nd_num3;
	}

	
	public function getNdNum4()
	{

		return $this->nd_num4;
	}

	
	public function getNdNum5()
	{

		return $this->nd_num5;
	}

	
	public function getSerie2()
	{

		return $this->serie2;
	}

	
	public function getSerie3()
	{

		return $this->serie3;
	}

	
	public function getSerie4()
	{

		return $this->serie4;
	}

	
	public function getSerie5()
	{

		return $this->serie5;
	}

	
	public function getEmpNum()
	{

		return $this->emp_num;
	}

	
	public function getDmcNum()
	{

		return $this->dmc_num;
	}

	
	public function getTaxNum()
	{

		return $this->tax_num;
	}

	
	public function getCedNum()
	{

		return $this->ced_num;
	}

	
	public function getEntNum()
	{

		return $this->ent_num;
	}

	
	public function getCieNum()
	{

		return $this->cie_num;
	}

	
	public function getOdpNum()
	{

		return $this->odp_num;
	}

	
	public function getReqNum()
	{

		return $this->req_num;
	}

	
	public function getDevNum()
	{

		return $this->dev_num;
	}

	
	public function getExpNum()
	{

		return $this->exp_num;
	}

	
	public function getInpNum()
	{

		return $this->inp_num;
	}

	
	public function getCostNum()
	{

		return $this->cost_num;
	}

	
	public function getParNum()
	{

		return $this->par_num;
	}

	
	public function getEscNum()
	{

		return $this->esc_num;
	}

	
	public function getPlaNum()
	{

		return $this->pla_num;
	}

	
	public function getMenNum()
	{

		return $this->men_num;
	}

	
	public function getDistNum()
	{

		return $this->dist_num;
	}

	
	public function getExpNumi()
	{

		return $this->exp_numi;
	}

	
	public function setCoAlma($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_alma !== $v) {
			$this->co_alma = $v;
			$this->modifiedColumns[] = AlmacenPeer::CO_ALMA;
		}

	} 
	
	public function setAlmaDes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->alma_des !== $v || $v === '(space(1))') {
			$this->alma_des = $v;
			$this->modifiedColumns[] = AlmacenPeer::ALMA_DES;
		}

	} 
	
	public function setNroFact($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nro_fact !== $v || $v === 0) {
			$this->nro_fact = $v;
			$this->modifiedColumns[] = AlmacenPeer::NRO_FACT;
		}

	} 
	
	public function setNumFacIni($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_fac_ini !== $v || $v === 0) {
			$this->num_fac_ini = $v;
			$this->modifiedColumns[] = AlmacenPeer::NUM_FAC_INI;
		}

	} 
	
	public function setNumFacFin($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_fac_fin !== $v || $v === 0) {
			$this->num_fac_fin = $v;
			$this->modifiedColumns[] = AlmacenPeer::NUM_FAC_FIN;
		}

	} 
	
	public function setCampo1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo1 !== $v || $v === '(space(1))') {
			$this->campo1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::CAMPO1;
		}

	} 
	
	public function setCampo2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo2 !== $v || $v === '(space(1))') {
			$this->campo2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::CAMPO2;
		}

	} 
	
	public function setCampo3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo3 !== $v || $v === '(space(1))') {
			$this->campo3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::CAMPO3;
		}

	} 
	
	public function setCampo4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->campo4 !== $v || $v === '(space(1))') {
			$this->campo4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::CAMPO4;
		}

	} 
	
	public function setCoUsIn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_in !== $v || $v === '(space(1))') {
			$this->co_us_in = $v;
			$this->modifiedColumns[] = AlmacenPeer::CO_US_IN;
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
			$this->modifiedColumns[] = AlmacenPeer::FE_US_IN;
		}

	} 
	
	public function setCoUsMo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_mo !== $v || $v === '(space(1))') {
			$this->co_us_mo = $v;
			$this->modifiedColumns[] = AlmacenPeer::CO_US_MO;
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
			$this->modifiedColumns[] = AlmacenPeer::FE_US_MO;
		}

	} 
	
	public function setCoUsEl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_us_el !== $v || $v === '(space(1))') {
			$this->co_us_el = $v;
			$this->modifiedColumns[] = AlmacenPeer::CO_US_EL;
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
			$this->modifiedColumns[] = AlmacenPeer::FE_US_EL;
		}

	} 
	
	public function setRevisado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revisado !== $v || $v === '(space(1))') {
			$this->revisado = $v;
			$this->modifiedColumns[] = AlmacenPeer::REVISADO;
		}

	} 
	
	public function setTrasnfe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->trasnfe !== $v || $v === '(space(1))') {
			$this->trasnfe = $v;
			$this->modifiedColumns[] = AlmacenPeer::TRASNFE;
		}

	} 
	
	public function setCoSucu($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->co_sucu !== $v || $v === '(space(1))') {
			$this->co_sucu = $v;
			$this->modifiedColumns[] = AlmacenPeer::CO_SUCU;
		}

	} 
	
	public function setRowguid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rowguid !== $v || $v === '(newid())') {
			$this->rowguid = $v;
			$this->modifiedColumns[] = AlmacenPeer::ROWGUID;
		}

	} 
	
	public function setNcNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_num !== $v || $v === 0) {
			$this->nc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_NUM;
		}

	} 
	
	public function setNdNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_num !== $v || $v === 0) {
			$this->nd_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_NUM;
		}

	} 
	
	public function setAjusNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ajus_num !== $v || $v === 0) {
			$this->ajus_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJUS_NUM;
		}

	} 
	
	public function setTrasNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tras_num !== $v || $v === 0) {
			$this->tras_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::TRAS_NUM;
		}

	} 
	
	public function setFisiNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fisi_num !== $v || $v === 0) {
			$this->fisi_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::FISI_NUM;
		}

	} 
	
	public function setNumKit($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->num_kit !== $v || $v === 0) {
			$this->num_kit = $v;
			$this->modifiedColumns[] = AlmacenPeer::NUM_KIT;
		}

	} 
	
	public function setGenkNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->genk_num !== $v || $v === 0) {
			$this->genk_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::GENK_NUM;
		}

	} 
	
	public function setFactNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_num !== $v || $v === 0) {
			$this->fact_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_NUM;
		}

	} 
	
	public function setPedNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ped_num !== $v || $v === 0) {
			$this->ped_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::PED_NUM;
		}

	} 
	
	public function setCotcNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cotc_num !== $v || $v === 0) {
			$this->cotc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::COTC_NUM;
		}

	} 
	
	public function setDevcNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->devc_num !== $v || $v === 0) {
			$this->devc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::DEVC_NUM;
		}

	} 
	
	public function setNdeNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_num !== $v || $v === 0) {
			$this->nde_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_NUM;
		}

	} 
	
	public function setNddNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ndd_num !== $v || $v === 0) {
			$this->ndd_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDD_NUM;
		}

	} 
	
	public function setPostNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->post_num !== $v || $v === 0) {
			$this->post_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::POST_NUM;
		}

	} 
	
	public function setCfxgNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cfxg_num !== $v || $v === 0) {
			$this->cfxg_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::CFXG_NUM;
		}

	} 
	
	public function setChdvNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chdv_num !== $v || $v === 0) {
			$this->chdv_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::CHDV_NUM;
		}

	} 
	
	public function setGiroNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->giro_num !== $v || $v === 0) {
			$this->giro_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::GIRO_NUM;
		}

	} 
	
	public function setRetenNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reten_num !== $v || $v === 0) {
			$this->reten_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::RETEN_NUM;
		}

	} 
	
	public function setCbNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cb_num !== $v || $v === 0) {
			$this->cb_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::CB_NUM;
		}

	} 
	
	public function setMovbNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->movb_num !== $v || $v === 0) {
			$this->movb_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::MOVB_NUM;
		}

	} 
	
	public function setMovcNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->movc_num !== $v || $v === 0) {
			$this->movc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::MOVC_NUM;
		}

	} 
	
	public function setOrdpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ordp_num !== $v || $v === 0) {
			$this->ordp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::ORDP_NUM;
		}

	} 
	
	public function setDepcNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->depc_num !== $v || $v === 0) {
			$this->depc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::DEPC_NUM;
		}

	} 
	
	public function setCompNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->comp_num !== $v || $v === 0) {
			$this->comp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::COMP_NUM;
		}

	} 
	
	public function setOrdNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ord_num !== $v || $v === 0) {
			$this->ord_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::ORD_NUM;
		}

	} 
	
	public function setCotpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cotp_num !== $v || $v === 0) {
			$this->cotp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::COTP_NUM;
		}

	} 
	
	public function setDevpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->devp_num !== $v || $v === 0) {
			$this->devp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::DEVP_NUM;
		}

	} 
	
	public function setNdrNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ndr_num !== $v || $v === 0) {
			$this->ndr_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDR_NUM;
		}

	} 
	
	public function setPostcppnum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->postcppnum !== $v || $v === 0) {
			$this->postcppnum = $v;
			$this->modifiedColumns[] = AlmacenPeer::POSTCPPNUM;
		}

	} 
	
	public function setCcxgNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ccxg_num !== $v || $v === 0) {
			$this->ccxg_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::CCXG_NUM;
		}

	} 
	
	public function setChdvcppnum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chdvcppnum !== $v || $v === 0) {
			$this->chdvcppnum = $v;
			$this->modifiedColumns[] = AlmacenPeer::CHDVCPPNUM;
		}

	} 
	
	public function setGirocppnum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->girocppnum !== $v || $v === 0) {
			$this->girocppnum = $v;
			$this->modifiedColumns[] = AlmacenPeer::GIROCPPNUM;
		}

	} 
	
	public function setNccppNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nccpp_num !== $v || $v === 0) {
			$this->nccpp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::NCCPP_NUM;
		}

	} 
	
	public function setNdcppNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ndcpp_num !== $v || $v === 0) {
			$this->ndcpp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDCPP_NUM;
		}

	} 
	
	public function setRetencppnum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->retencppnum !== $v || $v === 0) {
			$this->retencppnum = $v;
			$this->modifiedColumns[] = AlmacenPeer::RETENCPPNUM;
		}

	} 
	
	public function setPgNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->pg_num !== $v || $v === 0) {
			$this->pg_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::PG_NUM;
		}

	} 
	
	public function setAjuPosm($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_posm !== $v || $v === 0) {
			$this->aju_posm = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_POSM;
		}

	} 
	
	public function setAjuPosa($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_posa !== $v || $v === 0) {
			$this->aju_posa = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_POSA;
		}

	} 
	
	public function setAjuNegm($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_negm !== $v || $v === 0) {
			$this->aju_negm = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_NEGM;
		}

	} 
	
	public function setAjuNega($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_nega !== $v || $v === 0) {
			$this->aju_nega = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_NEGA;
		}

	} 
	
	public function setAjuPosmc($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_posmc !== $v || $v === 0) {
			$this->aju_posmc = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_POSMC;
		}

	} 
	
	public function setAjuPosac($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_posac !== $v || $v === 0) {
			$this->aju_posac = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_POSAC;
		}

	} 
	
	public function setAjuNegmc($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_negmc !== $v || $v === 0) {
			$this->aju_negmc = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_NEGMC;
		}

	} 
	
	public function setAjuNegac($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->aju_negac !== $v || $v === 0) {
			$this->aju_negac = $v;
			$this->modifiedColumns[] = AlmacenPeer::AJU_NEGAC;
		}

	} 
	
	public function setPventa($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->pventa !== $v || $v === 0) {
			$this->pventa = $v;
			$this->modifiedColumns[] = AlmacenPeer::PVENTA;
		}

	} 
	
	public function setTurnosic($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->turnosic !== $v || $v === 0) {
			$this->turnosic = $v;
			$this->modifiedColumns[] = AlmacenPeer::TURNOSIC;
		}

	} 
	
	public function setPlvNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->plv_num !== $v || $v === 0) {
			$this->plv_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::PLV_NUM;
		}

	} 
	
	public function setPlcNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->plc_num !== $v || $v === 0) {
			$this->plc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::PLC_NUM;
		}

	} 
	
	public function setTabislr($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tabislr !== $v || $v === 0) {
			$this->tabislr = $v;
			$this->modifiedColumns[] = AlmacenPeer::TABISLR;
		}

	} 
	
	public function setImpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->imp_num !== $v || $v === 0) {
			$this->imp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::IMP_NUM;
		}

	} 
	
	public function setRmaCli($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rma_cli !== $v || $v === 0) {
			$this->rma_cli = $v;
			$this->modifiedColumns[] = AlmacenPeer::RMA_CLI;
		}

	} 
	
	public function setRmaProv($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rma_prov !== $v || $v === 0) {
			$this->rma_prov = $v;
			$this->modifiedColumns[] = AlmacenPeer::RMA_PROV;
		}

	} 
	
	public function setRmaEntc($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rma_entc !== $v || $v === 0) {
			$this->rma_entc = $v;
			$this->modifiedColumns[] = AlmacenPeer::RMA_ENTC;
		}

	} 
	
	public function setRmaEntp($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rma_entp !== $v || $v === 0) {
			$this->rma_entp = $v;
			$this->modifiedColumns[] = AlmacenPeer::RMA_ENTP;
		}

	} 
	
	public function setRmaRegs($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rma_regs !== $v || $v === 0) {
			$this->rma_regs = $v;
			$this->modifiedColumns[] = AlmacenPeer::RMA_REGS;
		}

	} 
	
	public function setFactS1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fact_s1 !== $v || $v === '(space(1))') {
			$this->fact_s1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_S1;
		}

	} 
	
	public function setFactS2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fact_s2 !== $v || $v === '(space(1))') {
			$this->fact_s2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_S2;
		}

	} 
	
	public function setFactS3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fact_s3 !== $v || $v === '(space(1))') {
			$this->fact_s3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_S3;
		}

	} 
	
	public function setFactS4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fact_s4 !== $v || $v === '(space(1))') {
			$this->fact_s4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_S4;
		}

	} 
	
	public function setFactS5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fact_s5 !== $v || $v === '(space(1))') {
			$this->fact_s5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_S5;
		}

	} 
	
	public function setNdeS1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nde_s1 !== $v || $v === '(space(1))') {
			$this->nde_s1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_S1;
		}

	} 
	
	public function setNdeS2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nde_s2 !== $v || $v === '(space(1))') {
			$this->nde_s2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_S2;
		}

	} 
	
	public function setNdeS3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nde_s3 !== $v || $v === '(space(1))') {
			$this->nde_s3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_S3;
		}

	} 
	
	public function setNdeS4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nde_s4 !== $v || $v === '(space(1))') {
			$this->nde_s4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_S4;
		}

	} 
	
	public function setNdeS5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nde_s5 !== $v || $v === '(space(1))') {
			$this->nde_s5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_S5;
		}

	} 
	
	public function setNcS1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nc_s1 !== $v || $v === '(space(1))') {
			$this->nc_s1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_S1;
		}

	} 
	
	public function setNcS2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nc_s2 !== $v || $v === '(space(1))') {
			$this->nc_s2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_S2;
		}

	} 
	
	public function setNcS3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nc_s3 !== $v || $v === '(space(1))') {
			$this->nc_s3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_S3;
		}

	} 
	
	public function setNcS4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nc_s4 !== $v || $v === '(space(1))') {
			$this->nc_s4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_S4;
		}

	} 
	
	public function setNcS5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nc_s5 !== $v || $v === '(space(1))') {
			$this->nc_s5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_S5;
		}

	} 
	
	public function setNdS1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nd_s1 !== $v || $v === '(space(1))') {
			$this->nd_s1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_S1;
		}

	} 
	
	public function setNdS2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nd_s2 !== $v || $v === '(space(1))') {
			$this->nd_s2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_S2;
		}

	} 
	
	public function setNdS3($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nd_s3 !== $v || $v === '(space(1))') {
			$this->nd_s3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_S3;
		}

	} 
	
	public function setNdS4($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nd_s4 !== $v || $v === '(space(1))') {
			$this->nd_s4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_S4;
		}

	} 
	
	public function setNdS5($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nd_s5 !== $v || $v === '(space(1))') {
			$this->nd_s5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_S5;
		}

	} 
	
	public function setFactF1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_f1 !== $v || $v === 0) {
			$this->fact_f1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_F1;
		}

	} 
	
	public function setFactF2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_f2 !== $v || $v === 0) {
			$this->fact_f2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_F2;
		}

	} 
	
	public function setFactF3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_f3 !== $v || $v === 0) {
			$this->fact_f3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_F3;
		}

	} 
	
	public function setFactF4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_f4 !== $v || $v === 0) {
			$this->fact_f4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_F4;
		}

	} 
	
	public function setNdeF1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_f1 !== $v || $v === 0) {
			$this->nde_f1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_F1;
		}

	} 
	
	public function setNdeF2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_f2 !== $v || $v === 0) {
			$this->nde_f2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_F2;
		}

	} 
	
	public function setNdeF3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_f3 !== $v || $v === 0) {
			$this->nde_f3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_F3;
		}

	} 
	
	public function setNdeF4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_f4 !== $v || $v === 0) {
			$this->nde_f4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_F4;
		}

	} 
	
	public function setNcF1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_f1 !== $v || $v === 0) {
			$this->nc_f1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_F1;
		}

	} 
	
	public function setNcF2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_f2 !== $v || $v === 0) {
			$this->nc_f2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_F2;
		}

	} 
	
	public function setNcF3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_f3 !== $v || $v === 0) {
			$this->nc_f3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_F3;
		}

	} 
	
	public function setNcF4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_f4 !== $v || $v === 0) {
			$this->nc_f4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_F4;
		}

	} 
	
	public function setNdF1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_f1 !== $v || $v === 0) {
			$this->nd_f1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_F1;
		}

	} 
	
	public function setNdF2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_f2 !== $v || $v === 0) {
			$this->nd_f2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_F2;
		}

	} 
	
	public function setNdF3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_f3 !== $v || $v === 0) {
			$this->nd_f3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_F3;
		}

	} 
	
	public function setNdF4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_f4 !== $v || $v === 0) {
			$this->nd_f4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_F4;
		}

	} 
	
	public function setFactP1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_p1 !== $v || $v === 0) {
			$this->fact_p1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_P1;
		}

	} 
	
	public function setFactP2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_p2 !== $v || $v === 0) {
			$this->fact_p2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_P2;
		}

	} 
	
	public function setFactP3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_p3 !== $v || $v === 0) {
			$this->fact_p3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_P3;
		}

	} 
	
	public function setFactP4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_p4 !== $v || $v === 0) {
			$this->fact_p4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_P4;
		}

	} 
	
	public function setFactP5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_p5 !== $v || $v === 0) {
			$this->fact_p5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_P5;
		}

	} 
	
	public function setNdeP1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_p1 !== $v || $v === 0) {
			$this->nde_p1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_P1;
		}

	} 
	
	public function setNdeP2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_p2 !== $v || $v === 0) {
			$this->nde_p2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_P2;
		}

	} 
	
	public function setNdeP3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_p3 !== $v || $v === 0) {
			$this->nde_p3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_P3;
		}

	} 
	
	public function setNdeP4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_p4 !== $v || $v === 0) {
			$this->nde_p4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_P4;
		}

	} 
	
	public function setNdeP5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_p5 !== $v || $v === 0) {
			$this->nde_p5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_P5;
		}

	} 
	
	public function setNcP1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_p1 !== $v || $v === 0) {
			$this->nc_p1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_P1;
		}

	} 
	
	public function setNcP2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_p2 !== $v || $v === 0) {
			$this->nc_p2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_P2;
		}

	} 
	
	public function setNcP3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_p3 !== $v || $v === 0) {
			$this->nc_p3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_P3;
		}

	} 
	
	public function setNcP4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_p4 !== $v || $v === 0) {
			$this->nc_p4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_P4;
		}

	} 
	
	public function setNcP5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_p5 !== $v || $v === 0) {
			$this->nc_p5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_P5;
		}

	} 
	
	public function setNdP1($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_p1 !== $v || $v === 0) {
			$this->nd_p1 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_P1;
		}

	} 
	
	public function setNdP2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_p2 !== $v || $v === 0) {
			$this->nd_p2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_P2;
		}

	} 
	
	public function setNdP3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_p3 !== $v || $v === 0) {
			$this->nd_p3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_P3;
		}

	} 
	
	public function setNdP4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_p4 !== $v || $v === 0) {
			$this->nd_p4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_P4;
		}

	} 
	
	public function setNdP5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_p5 !== $v || $v === 0) {
			$this->nd_p5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_P5;
		}

	} 
	
	public function setFactNum2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_num2 !== $v || $v === 0) {
			$this->fact_num2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_NUM2;
		}

	} 
	
	public function setFactNum3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_num3 !== $v || $v === 0) {
			$this->fact_num3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_NUM3;
		}

	} 
	
	public function setFactNum4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_num4 !== $v || $v === 0) {
			$this->fact_num4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_NUM4;
		}

	} 
	
	public function setFactNum5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fact_num5 !== $v || $v === 0) {
			$this->fact_num5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::FACT_NUM5;
		}

	} 
	
	public function setNdeNum2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_num2 !== $v || $v === 0) {
			$this->nde_num2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_NUM2;
		}

	} 
	
	public function setNdeNum3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_num3 !== $v || $v === 0) {
			$this->nde_num3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_NUM3;
		}

	} 
	
	public function setNdeNum4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_num4 !== $v || $v === 0) {
			$this->nde_num4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_NUM4;
		}

	} 
	
	public function setNdeNum5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nde_num5 !== $v || $v === 0) {
			$this->nde_num5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NDE_NUM5;
		}

	} 
	
	public function setNcNum2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_num2 !== $v || $v === 0) {
			$this->nc_num2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_NUM2;
		}

	} 
	
	public function setNcNum3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_num3 !== $v || $v === 0) {
			$this->nc_num3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_NUM3;
		}

	} 
	
	public function setNcNum4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_num4 !== $v || $v === 0) {
			$this->nc_num4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_NUM4;
		}

	} 
	
	public function setNcNum5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc_num5 !== $v || $v === 0) {
			$this->nc_num5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::NC_NUM5;
		}

	} 
	
	public function setNdNum2($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_num2 !== $v || $v === 0) {
			$this->nd_num2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_NUM2;
		}

	} 
	
	public function setNdNum3($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_num3 !== $v || $v === 0) {
			$this->nd_num3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_NUM3;
		}

	} 
	
	public function setNdNum4($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_num4 !== $v || $v === 0) {
			$this->nd_num4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_NUM4;
		}

	} 
	
	public function setNdNum5($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nd_num5 !== $v || $v === 0) {
			$this->nd_num5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::ND_NUM5;
		}

	} 
	
	public function setSerie2($v)
	{

		if ($this->serie2 !== $v || $v === true) {
			$this->serie2 = $v;
			$this->modifiedColumns[] = AlmacenPeer::SERIE2;
		}

	} 
	
	public function setSerie3($v)
	{

		if ($this->serie3 !== $v || $v === true) {
			$this->serie3 = $v;
			$this->modifiedColumns[] = AlmacenPeer::SERIE3;
		}

	} 
	
	public function setSerie4($v)
	{

		if ($this->serie4 !== $v || $v === true) {
			$this->serie4 = $v;
			$this->modifiedColumns[] = AlmacenPeer::SERIE4;
		}

	} 
	
	public function setSerie5($v)
	{

		if ($this->serie5 !== $v || $v === true) {
			$this->serie5 = $v;
			$this->modifiedColumns[] = AlmacenPeer::SERIE5;
		}

	} 
	
	public function setEmpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->emp_num !== $v || $v === 0) {
			$this->emp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::EMP_NUM;
		}

	} 
	
	public function setDmcNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dmc_num !== $v || $v === 0) {
			$this->dmc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::DMC_NUM;
		}

	} 
	
	public function setTaxNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tax_num !== $v || $v === 0) {
			$this->tax_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::TAX_NUM;
		}

	} 
	
	public function setCedNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ced_num !== $v || $v === 0) {
			$this->ced_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::CED_NUM;
		}

	} 
	
	public function setEntNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ent_num !== $v || $v === 0) {
			$this->ent_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::ENT_NUM;
		}

	} 
	
	public function setCieNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cie_num !== $v || $v === 0) {
			$this->cie_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::CIE_NUM;
		}

	} 
	
	public function setOdpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->odp_num !== $v || $v === 0) {
			$this->odp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::ODP_NUM;
		}

	} 
	
	public function setReqNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->req_num !== $v || $v === 0) {
			$this->req_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::REQ_NUM;
		}

	} 
	
	public function setDevNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dev_num !== $v || $v === 0) {
			$this->dev_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::DEV_NUM;
		}

	} 
	
	public function setExpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->exp_num !== $v || $v === 0) {
			$this->exp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::EXP_NUM;
		}

	} 
	
	public function setInpNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->inp_num !== $v || $v === 0) {
			$this->inp_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::INP_NUM;
		}

	} 
	
	public function setCostNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cost_num !== $v || $v === 0) {
			$this->cost_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::COST_NUM;
		}

	} 
	
	public function setParNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->par_num !== $v || $v === 0) {
			$this->par_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::PAR_NUM;
		}

	} 
	
	public function setEscNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->esc_num !== $v || $v === 0) {
			$this->esc_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::ESC_NUM;
		}

	} 
	
	public function setPlaNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->pla_num !== $v || $v === 0) {
			$this->pla_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::PLA_NUM;
		}

	} 
	
	public function setMenNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->men_num !== $v || $v === 0) {
			$this->men_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::MEN_NUM;
		}

	} 
	
	public function setDistNum($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dist_num !== $v || $v === 0) {
			$this->dist_num = $v;
			$this->modifiedColumns[] = AlmacenPeer::DIST_NUM;
		}

	} 
	
	public function setExpNumi($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->exp_numi !== $v || $v === 0) {
			$this->exp_numi = $v;
			$this->modifiedColumns[] = AlmacenPeer::EXP_NUMI;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->co_alma = $rs->getString($startcol + 0);

			$this->alma_des = $rs->getString($startcol + 1);

			$this->nro_fact = $rs->getInt($startcol + 2);

			$this->num_fac_ini = $rs->getInt($startcol + 3);

			$this->num_fac_fin = $rs->getInt($startcol + 4);

			$this->campo1 = $rs->getString($startcol + 5);

			$this->campo2 = $rs->getString($startcol + 6);

			$this->campo3 = $rs->getString($startcol + 7);

			$this->campo4 = $rs->getString($startcol + 8);

			$this->co_us_in = $rs->getString($startcol + 9);

			$this->fe_us_in = $rs->getTimestamp($startcol + 10, null);

			$this->co_us_mo = $rs->getString($startcol + 11);

			$this->fe_us_mo = $rs->getTimestamp($startcol + 12, null);

			$this->co_us_el = $rs->getString($startcol + 13);

			$this->fe_us_el = $rs->getTimestamp($startcol + 14, null);

			$this->revisado = $rs->getString($startcol + 15);

			$this->trasnfe = $rs->getString($startcol + 16);

			$this->co_sucu = $rs->getString($startcol + 17);

			$this->rowguid = $rs->getString($startcol + 18);

			$this->nc_num = $rs->getInt($startcol + 19);

			$this->nd_num = $rs->getInt($startcol + 20);

			$this->ajus_num = $rs->getInt($startcol + 21);

			$this->tras_num = $rs->getInt($startcol + 22);

			$this->fisi_num = $rs->getInt($startcol + 23);

			$this->num_kit = $rs->getInt($startcol + 24);

			$this->genk_num = $rs->getInt($startcol + 25);

			$this->fact_num = $rs->getInt($startcol + 26);

			$this->ped_num = $rs->getInt($startcol + 27);

			$this->cotc_num = $rs->getInt($startcol + 28);

			$this->devc_num = $rs->getInt($startcol + 29);

			$this->nde_num = $rs->getInt($startcol + 30);

			$this->ndd_num = $rs->getInt($startcol + 31);

			$this->post_num = $rs->getInt($startcol + 32);

			$this->cfxg_num = $rs->getInt($startcol + 33);

			$this->chdv_num = $rs->getInt($startcol + 34);

			$this->giro_num = $rs->getInt($startcol + 35);

			$this->reten_num = $rs->getInt($startcol + 36);

			$this->cb_num = $rs->getInt($startcol + 37);

			$this->movb_num = $rs->getInt($startcol + 38);

			$this->movc_num = $rs->getInt($startcol + 39);

			$this->ordp_num = $rs->getInt($startcol + 40);

			$this->depc_num = $rs->getInt($startcol + 41);

			$this->comp_num = $rs->getInt($startcol + 42);

			$this->ord_num = $rs->getInt($startcol + 43);

			$this->cotp_num = $rs->getInt($startcol + 44);

			$this->devp_num = $rs->getInt($startcol + 45);

			$this->ndr_num = $rs->getInt($startcol + 46);

			$this->postcppnum = $rs->getInt($startcol + 47);

			$this->ccxg_num = $rs->getInt($startcol + 48);

			$this->chdvcppnum = $rs->getInt($startcol + 49);

			$this->girocppnum = $rs->getInt($startcol + 50);

			$this->nccpp_num = $rs->getInt($startcol + 51);

			$this->ndcpp_num = $rs->getInt($startcol + 52);

			$this->retencppnum = $rs->getInt($startcol + 53);

			$this->pg_num = $rs->getInt($startcol + 54);

			$this->aju_posm = $rs->getInt($startcol + 55);

			$this->aju_posa = $rs->getInt($startcol + 56);

			$this->aju_negm = $rs->getInt($startcol + 57);

			$this->aju_nega = $rs->getInt($startcol + 58);

			$this->aju_posmc = $rs->getInt($startcol + 59);

			$this->aju_posac = $rs->getInt($startcol + 60);

			$this->aju_negmc = $rs->getInt($startcol + 61);

			$this->aju_negac = $rs->getInt($startcol + 62);

			$this->pventa = $rs->getInt($startcol + 63);

			$this->turnosic = $rs->getInt($startcol + 64);

			$this->plv_num = $rs->getInt($startcol + 65);

			$this->plc_num = $rs->getInt($startcol + 66);

			$this->tabislr = $rs->getInt($startcol + 67);

			$this->imp_num = $rs->getInt($startcol + 68);

			$this->rma_cli = $rs->getInt($startcol + 69);

			$this->rma_prov = $rs->getInt($startcol + 70);

			$this->rma_entc = $rs->getInt($startcol + 71);

			$this->rma_entp = $rs->getInt($startcol + 72);

			$this->rma_regs = $rs->getInt($startcol + 73);

			$this->fact_s1 = $rs->getString($startcol + 74);

			$this->fact_s2 = $rs->getString($startcol + 75);

			$this->fact_s3 = $rs->getString($startcol + 76);

			$this->fact_s4 = $rs->getString($startcol + 77);

			$this->fact_s5 = $rs->getString($startcol + 78);

			$this->nde_s1 = $rs->getString($startcol + 79);

			$this->nde_s2 = $rs->getString($startcol + 80);

			$this->nde_s3 = $rs->getString($startcol + 81);

			$this->nde_s4 = $rs->getString($startcol + 82);

			$this->nde_s5 = $rs->getString($startcol + 83);

			$this->nc_s1 = $rs->getString($startcol + 84);

			$this->nc_s2 = $rs->getString($startcol + 85);

			$this->nc_s3 = $rs->getString($startcol + 86);

			$this->nc_s4 = $rs->getString($startcol + 87);

			$this->nc_s5 = $rs->getString($startcol + 88);

			$this->nd_s1 = $rs->getString($startcol + 89);

			$this->nd_s2 = $rs->getString($startcol + 90);

			$this->nd_s3 = $rs->getString($startcol + 91);

			$this->nd_s4 = $rs->getString($startcol + 92);

			$this->nd_s5 = $rs->getString($startcol + 93);

			$this->fact_f1 = $rs->getInt($startcol + 94);

			$this->fact_f2 = $rs->getInt($startcol + 95);

			$this->fact_f3 = $rs->getInt($startcol + 96);

			$this->fact_f4 = $rs->getInt($startcol + 97);

			$this->nde_f1 = $rs->getInt($startcol + 98);

			$this->nde_f2 = $rs->getInt($startcol + 99);

			$this->nde_f3 = $rs->getInt($startcol + 100);

			$this->nde_f4 = $rs->getInt($startcol + 101);

			$this->nc_f1 = $rs->getInt($startcol + 102);

			$this->nc_f2 = $rs->getInt($startcol + 103);

			$this->nc_f3 = $rs->getInt($startcol + 104);

			$this->nc_f4 = $rs->getInt($startcol + 105);

			$this->nd_f1 = $rs->getInt($startcol + 106);

			$this->nd_f2 = $rs->getInt($startcol + 107);

			$this->nd_f3 = $rs->getInt($startcol + 108);

			$this->nd_f4 = $rs->getInt($startcol + 109);

			$this->fact_p1 = $rs->getInt($startcol + 110);

			$this->fact_p2 = $rs->getInt($startcol + 111);

			$this->fact_p3 = $rs->getInt($startcol + 112);

			$this->fact_p4 = $rs->getInt($startcol + 113);

			$this->fact_p5 = $rs->getInt($startcol + 114);

			$this->nde_p1 = $rs->getInt($startcol + 115);

			$this->nde_p2 = $rs->getInt($startcol + 116);

			$this->nde_p3 = $rs->getInt($startcol + 117);

			$this->nde_p4 = $rs->getInt($startcol + 118);

			$this->nde_p5 = $rs->getInt($startcol + 119);

			$this->nc_p1 = $rs->getInt($startcol + 120);

			$this->nc_p2 = $rs->getInt($startcol + 121);

			$this->nc_p3 = $rs->getInt($startcol + 122);

			$this->nc_p4 = $rs->getInt($startcol + 123);

			$this->nc_p5 = $rs->getInt($startcol + 124);

			$this->nd_p1 = $rs->getInt($startcol + 125);

			$this->nd_p2 = $rs->getInt($startcol + 126);

			$this->nd_p3 = $rs->getInt($startcol + 127);

			$this->nd_p4 = $rs->getInt($startcol + 128);

			$this->nd_p5 = $rs->getInt($startcol + 129);

			$this->fact_num2 = $rs->getInt($startcol + 130);

			$this->fact_num3 = $rs->getInt($startcol + 131);

			$this->fact_num4 = $rs->getInt($startcol + 132);

			$this->fact_num5 = $rs->getInt($startcol + 133);

			$this->nde_num2 = $rs->getInt($startcol + 134);

			$this->nde_num3 = $rs->getInt($startcol + 135);

			$this->nde_num4 = $rs->getInt($startcol + 136);

			$this->nde_num5 = $rs->getInt($startcol + 137);

			$this->nc_num2 = $rs->getInt($startcol + 138);

			$this->nc_num3 = $rs->getInt($startcol + 139);

			$this->nc_num4 = $rs->getInt($startcol + 140);

			$this->nc_num5 = $rs->getInt($startcol + 141);

			$this->nd_num2 = $rs->getInt($startcol + 142);

			$this->nd_num3 = $rs->getInt($startcol + 143);

			$this->nd_num4 = $rs->getInt($startcol + 144);

			$this->nd_num5 = $rs->getInt($startcol + 145);

			$this->serie2 = $rs->getBoolean($startcol + 146);

			$this->serie3 = $rs->getBoolean($startcol + 147);

			$this->serie4 = $rs->getBoolean($startcol + 148);

			$this->serie5 = $rs->getBoolean($startcol + 149);

			$this->emp_num = $rs->getInt($startcol + 150);

			$this->dmc_num = $rs->getInt($startcol + 151);

			$this->tax_num = $rs->getInt($startcol + 152);

			$this->ced_num = $rs->getInt($startcol + 153);

			$this->ent_num = $rs->getInt($startcol + 154);

			$this->cie_num = $rs->getInt($startcol + 155);

			$this->odp_num = $rs->getInt($startcol + 156);

			$this->req_num = $rs->getInt($startcol + 157);

			$this->dev_num = $rs->getInt($startcol + 158);

			$this->exp_num = $rs->getInt($startcol + 159);

			$this->inp_num = $rs->getInt($startcol + 160);

			$this->cost_num = $rs->getInt($startcol + 161);

			$this->par_num = $rs->getInt($startcol + 162);

			$this->esc_num = $rs->getInt($startcol + 163);

			$this->pla_num = $rs->getInt($startcol + 164);

			$this->men_num = $rs->getInt($startcol + 165);

			$this->dist_num = $rs->getInt($startcol + 166);

			$this->exp_numi = $rs->getInt($startcol + 167);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 168; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Almacen object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AlmacenPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AlmacenPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AlmacenPeer::DATABASE_NAME);
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
					$pk = AlmacenPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += AlmacenPeer::doUpdate($this, $con);
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

			if ($this->collSubAlmas !== null) {
				foreach($this->collSubAlmas as $referrerFK) {
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


			if (($retval = AlmacenPeer::doValidate($this, $columns)) !== true) {
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

				if ($this->collSubAlmas !== null) {
					foreach($this->collSubAlmas as $referrerFK) {
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
		$pos = AlmacenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoAlma();
				break;
			case 1:
				return $this->getAlmaDes();
				break;
			case 2:
				return $this->getNroFact();
				break;
			case 3:
				return $this->getNumFacIni();
				break;
			case 4:
				return $this->getNumFacFin();
				break;
			case 5:
				return $this->getCampo1();
				break;
			case 6:
				return $this->getCampo2();
				break;
			case 7:
				return $this->getCampo3();
				break;
			case 8:
				return $this->getCampo4();
				break;
			case 9:
				return $this->getCoUsIn();
				break;
			case 10:
				return $this->getFeUsIn();
				break;
			case 11:
				return $this->getCoUsMo();
				break;
			case 12:
				return $this->getFeUsMo();
				break;
			case 13:
				return $this->getCoUsEl();
				break;
			case 14:
				return $this->getFeUsEl();
				break;
			case 15:
				return $this->getRevisado();
				break;
			case 16:
				return $this->getTrasnfe();
				break;
			case 17:
				return $this->getCoSucu();
				break;
			case 18:
				return $this->getRowguid();
				break;
			case 19:
				return $this->getNcNum();
				break;
			case 20:
				return $this->getNdNum();
				break;
			case 21:
				return $this->getAjusNum();
				break;
			case 22:
				return $this->getTrasNum();
				break;
			case 23:
				return $this->getFisiNum();
				break;
			case 24:
				return $this->getNumKit();
				break;
			case 25:
				return $this->getGenkNum();
				break;
			case 26:
				return $this->getFactNum();
				break;
			case 27:
				return $this->getPedNum();
				break;
			case 28:
				return $this->getCotcNum();
				break;
			case 29:
				return $this->getDevcNum();
				break;
			case 30:
				return $this->getNdeNum();
				break;
			case 31:
				return $this->getNddNum();
				break;
			case 32:
				return $this->getPostNum();
				break;
			case 33:
				return $this->getCfxgNum();
				break;
			case 34:
				return $this->getChdvNum();
				break;
			case 35:
				return $this->getGiroNum();
				break;
			case 36:
				return $this->getRetenNum();
				break;
			case 37:
				return $this->getCbNum();
				break;
			case 38:
				return $this->getMovbNum();
				break;
			case 39:
				return $this->getMovcNum();
				break;
			case 40:
				return $this->getOrdpNum();
				break;
			case 41:
				return $this->getDepcNum();
				break;
			case 42:
				return $this->getCompNum();
				break;
			case 43:
				return $this->getOrdNum();
				break;
			case 44:
				return $this->getCotpNum();
				break;
			case 45:
				return $this->getDevpNum();
				break;
			case 46:
				return $this->getNdrNum();
				break;
			case 47:
				return $this->getPostcppnum();
				break;
			case 48:
				return $this->getCcxgNum();
				break;
			case 49:
				return $this->getChdvcppnum();
				break;
			case 50:
				return $this->getGirocppnum();
				break;
			case 51:
				return $this->getNccppNum();
				break;
			case 52:
				return $this->getNdcppNum();
				break;
			case 53:
				return $this->getRetencppnum();
				break;
			case 54:
				return $this->getPgNum();
				break;
			case 55:
				return $this->getAjuPosm();
				break;
			case 56:
				return $this->getAjuPosa();
				break;
			case 57:
				return $this->getAjuNegm();
				break;
			case 58:
				return $this->getAjuNega();
				break;
			case 59:
				return $this->getAjuPosmc();
				break;
			case 60:
				return $this->getAjuPosac();
				break;
			case 61:
				return $this->getAjuNegmc();
				break;
			case 62:
				return $this->getAjuNegac();
				break;
			case 63:
				return $this->getPventa();
				break;
			case 64:
				return $this->getTurnosic();
				break;
			case 65:
				return $this->getPlvNum();
				break;
			case 66:
				return $this->getPlcNum();
				break;
			case 67:
				return $this->getTabislr();
				break;
			case 68:
				return $this->getImpNum();
				break;
			case 69:
				return $this->getRmaCli();
				break;
			case 70:
				return $this->getRmaProv();
				break;
			case 71:
				return $this->getRmaEntc();
				break;
			case 72:
				return $this->getRmaEntp();
				break;
			case 73:
				return $this->getRmaRegs();
				break;
			case 74:
				return $this->getFactS1();
				break;
			case 75:
				return $this->getFactS2();
				break;
			case 76:
				return $this->getFactS3();
				break;
			case 77:
				return $this->getFactS4();
				break;
			case 78:
				return $this->getFactS5();
				break;
			case 79:
				return $this->getNdeS1();
				break;
			case 80:
				return $this->getNdeS2();
				break;
			case 81:
				return $this->getNdeS3();
				break;
			case 82:
				return $this->getNdeS4();
				break;
			case 83:
				return $this->getNdeS5();
				break;
			case 84:
				return $this->getNcS1();
				break;
			case 85:
				return $this->getNcS2();
				break;
			case 86:
				return $this->getNcS3();
				break;
			case 87:
				return $this->getNcS4();
				break;
			case 88:
				return $this->getNcS5();
				break;
			case 89:
				return $this->getNdS1();
				break;
			case 90:
				return $this->getNdS2();
				break;
			case 91:
				return $this->getNdS3();
				break;
			case 92:
				return $this->getNdS4();
				break;
			case 93:
				return $this->getNdS5();
				break;
			case 94:
				return $this->getFactF1();
				break;
			case 95:
				return $this->getFactF2();
				break;
			case 96:
				return $this->getFactF3();
				break;
			case 97:
				return $this->getFactF4();
				break;
			case 98:
				return $this->getNdeF1();
				break;
			case 99:
				return $this->getNdeF2();
				break;
			case 100:
				return $this->getNdeF3();
				break;
			case 101:
				return $this->getNdeF4();
				break;
			case 102:
				return $this->getNcF1();
				break;
			case 103:
				return $this->getNcF2();
				break;
			case 104:
				return $this->getNcF3();
				break;
			case 105:
				return $this->getNcF4();
				break;
			case 106:
				return $this->getNdF1();
				break;
			case 107:
				return $this->getNdF2();
				break;
			case 108:
				return $this->getNdF3();
				break;
			case 109:
				return $this->getNdF4();
				break;
			case 110:
				return $this->getFactP1();
				break;
			case 111:
				return $this->getFactP2();
				break;
			case 112:
				return $this->getFactP3();
				break;
			case 113:
				return $this->getFactP4();
				break;
			case 114:
				return $this->getFactP5();
				break;
			case 115:
				return $this->getNdeP1();
				break;
			case 116:
				return $this->getNdeP2();
				break;
			case 117:
				return $this->getNdeP3();
				break;
			case 118:
				return $this->getNdeP4();
				break;
			case 119:
				return $this->getNdeP5();
				break;
			case 120:
				return $this->getNcP1();
				break;
			case 121:
				return $this->getNcP2();
				break;
			case 122:
				return $this->getNcP3();
				break;
			case 123:
				return $this->getNcP4();
				break;
			case 124:
				return $this->getNcP5();
				break;
			case 125:
				return $this->getNdP1();
				break;
			case 126:
				return $this->getNdP2();
				break;
			case 127:
				return $this->getNdP3();
				break;
			case 128:
				return $this->getNdP4();
				break;
			case 129:
				return $this->getNdP5();
				break;
			case 130:
				return $this->getFactNum2();
				break;
			case 131:
				return $this->getFactNum3();
				break;
			case 132:
				return $this->getFactNum4();
				break;
			case 133:
				return $this->getFactNum5();
				break;
			case 134:
				return $this->getNdeNum2();
				break;
			case 135:
				return $this->getNdeNum3();
				break;
			case 136:
				return $this->getNdeNum4();
				break;
			case 137:
				return $this->getNdeNum5();
				break;
			case 138:
				return $this->getNcNum2();
				break;
			case 139:
				return $this->getNcNum3();
				break;
			case 140:
				return $this->getNcNum4();
				break;
			case 141:
				return $this->getNcNum5();
				break;
			case 142:
				return $this->getNdNum2();
				break;
			case 143:
				return $this->getNdNum3();
				break;
			case 144:
				return $this->getNdNum4();
				break;
			case 145:
				return $this->getNdNum5();
				break;
			case 146:
				return $this->getSerie2();
				break;
			case 147:
				return $this->getSerie3();
				break;
			case 148:
				return $this->getSerie4();
				break;
			case 149:
				return $this->getSerie5();
				break;
			case 150:
				return $this->getEmpNum();
				break;
			case 151:
				return $this->getDmcNum();
				break;
			case 152:
				return $this->getTaxNum();
				break;
			case 153:
				return $this->getCedNum();
				break;
			case 154:
				return $this->getEntNum();
				break;
			case 155:
				return $this->getCieNum();
				break;
			case 156:
				return $this->getOdpNum();
				break;
			case 157:
				return $this->getReqNum();
				break;
			case 158:
				return $this->getDevNum();
				break;
			case 159:
				return $this->getExpNum();
				break;
			case 160:
				return $this->getInpNum();
				break;
			case 161:
				return $this->getCostNum();
				break;
			case 162:
				return $this->getParNum();
				break;
			case 163:
				return $this->getEscNum();
				break;
			case 164:
				return $this->getPlaNum();
				break;
			case 165:
				return $this->getMenNum();
				break;
			case 166:
				return $this->getDistNum();
				break;
			case 167:
				return $this->getExpNumi();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AlmacenPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoAlma(),
			$keys[1] => $this->getAlmaDes(),
			$keys[2] => $this->getNroFact(),
			$keys[3] => $this->getNumFacIni(),
			$keys[4] => $this->getNumFacFin(),
			$keys[5] => $this->getCampo1(),
			$keys[6] => $this->getCampo2(),
			$keys[7] => $this->getCampo3(),
			$keys[8] => $this->getCampo4(),
			$keys[9] => $this->getCoUsIn(),
			$keys[10] => $this->getFeUsIn(),
			$keys[11] => $this->getCoUsMo(),
			$keys[12] => $this->getFeUsMo(),
			$keys[13] => $this->getCoUsEl(),
			$keys[14] => $this->getFeUsEl(),
			$keys[15] => $this->getRevisado(),
			$keys[16] => $this->getTrasnfe(),
			$keys[17] => $this->getCoSucu(),
			$keys[18] => $this->getRowguid(),
			$keys[19] => $this->getNcNum(),
			$keys[20] => $this->getNdNum(),
			$keys[21] => $this->getAjusNum(),
			$keys[22] => $this->getTrasNum(),
			$keys[23] => $this->getFisiNum(),
			$keys[24] => $this->getNumKit(),
			$keys[25] => $this->getGenkNum(),
			$keys[26] => $this->getFactNum(),
			$keys[27] => $this->getPedNum(),
			$keys[28] => $this->getCotcNum(),
			$keys[29] => $this->getDevcNum(),
			$keys[30] => $this->getNdeNum(),
			$keys[31] => $this->getNddNum(),
			$keys[32] => $this->getPostNum(),
			$keys[33] => $this->getCfxgNum(),
			$keys[34] => $this->getChdvNum(),
			$keys[35] => $this->getGiroNum(),
			$keys[36] => $this->getRetenNum(),
			$keys[37] => $this->getCbNum(),
			$keys[38] => $this->getMovbNum(),
			$keys[39] => $this->getMovcNum(),
			$keys[40] => $this->getOrdpNum(),
			$keys[41] => $this->getDepcNum(),
			$keys[42] => $this->getCompNum(),
			$keys[43] => $this->getOrdNum(),
			$keys[44] => $this->getCotpNum(),
			$keys[45] => $this->getDevpNum(),
			$keys[46] => $this->getNdrNum(),
			$keys[47] => $this->getPostcppnum(),
			$keys[48] => $this->getCcxgNum(),
			$keys[49] => $this->getChdvcppnum(),
			$keys[50] => $this->getGirocppnum(),
			$keys[51] => $this->getNccppNum(),
			$keys[52] => $this->getNdcppNum(),
			$keys[53] => $this->getRetencppnum(),
			$keys[54] => $this->getPgNum(),
			$keys[55] => $this->getAjuPosm(),
			$keys[56] => $this->getAjuPosa(),
			$keys[57] => $this->getAjuNegm(),
			$keys[58] => $this->getAjuNega(),
			$keys[59] => $this->getAjuPosmc(),
			$keys[60] => $this->getAjuPosac(),
			$keys[61] => $this->getAjuNegmc(),
			$keys[62] => $this->getAjuNegac(),
			$keys[63] => $this->getPventa(),
			$keys[64] => $this->getTurnosic(),
			$keys[65] => $this->getPlvNum(),
			$keys[66] => $this->getPlcNum(),
			$keys[67] => $this->getTabislr(),
			$keys[68] => $this->getImpNum(),
			$keys[69] => $this->getRmaCli(),
			$keys[70] => $this->getRmaProv(),
			$keys[71] => $this->getRmaEntc(),
			$keys[72] => $this->getRmaEntp(),
			$keys[73] => $this->getRmaRegs(),
			$keys[74] => $this->getFactS1(),
			$keys[75] => $this->getFactS2(),
			$keys[76] => $this->getFactS3(),
			$keys[77] => $this->getFactS4(),
			$keys[78] => $this->getFactS5(),
			$keys[79] => $this->getNdeS1(),
			$keys[80] => $this->getNdeS2(),
			$keys[81] => $this->getNdeS3(),
			$keys[82] => $this->getNdeS4(),
			$keys[83] => $this->getNdeS5(),
			$keys[84] => $this->getNcS1(),
			$keys[85] => $this->getNcS2(),
			$keys[86] => $this->getNcS3(),
			$keys[87] => $this->getNcS4(),
			$keys[88] => $this->getNcS5(),
			$keys[89] => $this->getNdS1(),
			$keys[90] => $this->getNdS2(),
			$keys[91] => $this->getNdS3(),
			$keys[92] => $this->getNdS4(),
			$keys[93] => $this->getNdS5(),
			$keys[94] => $this->getFactF1(),
			$keys[95] => $this->getFactF2(),
			$keys[96] => $this->getFactF3(),
			$keys[97] => $this->getFactF4(),
			$keys[98] => $this->getNdeF1(),
			$keys[99] => $this->getNdeF2(),
			$keys[100] => $this->getNdeF3(),
			$keys[101] => $this->getNdeF4(),
			$keys[102] => $this->getNcF1(),
			$keys[103] => $this->getNcF2(),
			$keys[104] => $this->getNcF3(),
			$keys[105] => $this->getNcF4(),
			$keys[106] => $this->getNdF1(),
			$keys[107] => $this->getNdF2(),
			$keys[108] => $this->getNdF3(),
			$keys[109] => $this->getNdF4(),
			$keys[110] => $this->getFactP1(),
			$keys[111] => $this->getFactP2(),
			$keys[112] => $this->getFactP3(),
			$keys[113] => $this->getFactP4(),
			$keys[114] => $this->getFactP5(),
			$keys[115] => $this->getNdeP1(),
			$keys[116] => $this->getNdeP2(),
			$keys[117] => $this->getNdeP3(),
			$keys[118] => $this->getNdeP4(),
			$keys[119] => $this->getNdeP5(),
			$keys[120] => $this->getNcP1(),
			$keys[121] => $this->getNcP2(),
			$keys[122] => $this->getNcP3(),
			$keys[123] => $this->getNcP4(),
			$keys[124] => $this->getNcP5(),
			$keys[125] => $this->getNdP1(),
			$keys[126] => $this->getNdP2(),
			$keys[127] => $this->getNdP3(),
			$keys[128] => $this->getNdP4(),
			$keys[129] => $this->getNdP5(),
			$keys[130] => $this->getFactNum2(),
			$keys[131] => $this->getFactNum3(),
			$keys[132] => $this->getFactNum4(),
			$keys[133] => $this->getFactNum5(),
			$keys[134] => $this->getNdeNum2(),
			$keys[135] => $this->getNdeNum3(),
			$keys[136] => $this->getNdeNum4(),
			$keys[137] => $this->getNdeNum5(),
			$keys[138] => $this->getNcNum2(),
			$keys[139] => $this->getNcNum3(),
			$keys[140] => $this->getNcNum4(),
			$keys[141] => $this->getNcNum5(),
			$keys[142] => $this->getNdNum2(),
			$keys[143] => $this->getNdNum3(),
			$keys[144] => $this->getNdNum4(),
			$keys[145] => $this->getNdNum5(),
			$keys[146] => $this->getSerie2(),
			$keys[147] => $this->getSerie3(),
			$keys[148] => $this->getSerie4(),
			$keys[149] => $this->getSerie5(),
			$keys[150] => $this->getEmpNum(),
			$keys[151] => $this->getDmcNum(),
			$keys[152] => $this->getTaxNum(),
			$keys[153] => $this->getCedNum(),
			$keys[154] => $this->getEntNum(),
			$keys[155] => $this->getCieNum(),
			$keys[156] => $this->getOdpNum(),
			$keys[157] => $this->getReqNum(),
			$keys[158] => $this->getDevNum(),
			$keys[159] => $this->getExpNum(),
			$keys[160] => $this->getInpNum(),
			$keys[161] => $this->getCostNum(),
			$keys[162] => $this->getParNum(),
			$keys[163] => $this->getEscNum(),
			$keys[164] => $this->getPlaNum(),
			$keys[165] => $this->getMenNum(),
			$keys[166] => $this->getDistNum(),
			$keys[167] => $this->getExpNumi(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AlmacenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoAlma($value);
				break;
			case 1:
				$this->setAlmaDes($value);
				break;
			case 2:
				$this->setNroFact($value);
				break;
			case 3:
				$this->setNumFacIni($value);
				break;
			case 4:
				$this->setNumFacFin($value);
				break;
			case 5:
				$this->setCampo1($value);
				break;
			case 6:
				$this->setCampo2($value);
				break;
			case 7:
				$this->setCampo3($value);
				break;
			case 8:
				$this->setCampo4($value);
				break;
			case 9:
				$this->setCoUsIn($value);
				break;
			case 10:
				$this->setFeUsIn($value);
				break;
			case 11:
				$this->setCoUsMo($value);
				break;
			case 12:
				$this->setFeUsMo($value);
				break;
			case 13:
				$this->setCoUsEl($value);
				break;
			case 14:
				$this->setFeUsEl($value);
				break;
			case 15:
				$this->setRevisado($value);
				break;
			case 16:
				$this->setTrasnfe($value);
				break;
			case 17:
				$this->setCoSucu($value);
				break;
			case 18:
				$this->setRowguid($value);
				break;
			case 19:
				$this->setNcNum($value);
				break;
			case 20:
				$this->setNdNum($value);
				break;
			case 21:
				$this->setAjusNum($value);
				break;
			case 22:
				$this->setTrasNum($value);
				break;
			case 23:
				$this->setFisiNum($value);
				break;
			case 24:
				$this->setNumKit($value);
				break;
			case 25:
				$this->setGenkNum($value);
				break;
			case 26:
				$this->setFactNum($value);
				break;
			case 27:
				$this->setPedNum($value);
				break;
			case 28:
				$this->setCotcNum($value);
				break;
			case 29:
				$this->setDevcNum($value);
				break;
			case 30:
				$this->setNdeNum($value);
				break;
			case 31:
				$this->setNddNum($value);
				break;
			case 32:
				$this->setPostNum($value);
				break;
			case 33:
				$this->setCfxgNum($value);
				break;
			case 34:
				$this->setChdvNum($value);
				break;
			case 35:
				$this->setGiroNum($value);
				break;
			case 36:
				$this->setRetenNum($value);
				break;
			case 37:
				$this->setCbNum($value);
				break;
			case 38:
				$this->setMovbNum($value);
				break;
			case 39:
				$this->setMovcNum($value);
				break;
			case 40:
				$this->setOrdpNum($value);
				break;
			case 41:
				$this->setDepcNum($value);
				break;
			case 42:
				$this->setCompNum($value);
				break;
			case 43:
				$this->setOrdNum($value);
				break;
			case 44:
				$this->setCotpNum($value);
				break;
			case 45:
				$this->setDevpNum($value);
				break;
			case 46:
				$this->setNdrNum($value);
				break;
			case 47:
				$this->setPostcppnum($value);
				break;
			case 48:
				$this->setCcxgNum($value);
				break;
			case 49:
				$this->setChdvcppnum($value);
				break;
			case 50:
				$this->setGirocppnum($value);
				break;
			case 51:
				$this->setNccppNum($value);
				break;
			case 52:
				$this->setNdcppNum($value);
				break;
			case 53:
				$this->setRetencppnum($value);
				break;
			case 54:
				$this->setPgNum($value);
				break;
			case 55:
				$this->setAjuPosm($value);
				break;
			case 56:
				$this->setAjuPosa($value);
				break;
			case 57:
				$this->setAjuNegm($value);
				break;
			case 58:
				$this->setAjuNega($value);
				break;
			case 59:
				$this->setAjuPosmc($value);
				break;
			case 60:
				$this->setAjuPosac($value);
				break;
			case 61:
				$this->setAjuNegmc($value);
				break;
			case 62:
				$this->setAjuNegac($value);
				break;
			case 63:
				$this->setPventa($value);
				break;
			case 64:
				$this->setTurnosic($value);
				break;
			case 65:
				$this->setPlvNum($value);
				break;
			case 66:
				$this->setPlcNum($value);
				break;
			case 67:
				$this->setTabislr($value);
				break;
			case 68:
				$this->setImpNum($value);
				break;
			case 69:
				$this->setRmaCli($value);
				break;
			case 70:
				$this->setRmaProv($value);
				break;
			case 71:
				$this->setRmaEntc($value);
				break;
			case 72:
				$this->setRmaEntp($value);
				break;
			case 73:
				$this->setRmaRegs($value);
				break;
			case 74:
				$this->setFactS1($value);
				break;
			case 75:
				$this->setFactS2($value);
				break;
			case 76:
				$this->setFactS3($value);
				break;
			case 77:
				$this->setFactS4($value);
				break;
			case 78:
				$this->setFactS5($value);
				break;
			case 79:
				$this->setNdeS1($value);
				break;
			case 80:
				$this->setNdeS2($value);
				break;
			case 81:
				$this->setNdeS3($value);
				break;
			case 82:
				$this->setNdeS4($value);
				break;
			case 83:
				$this->setNdeS5($value);
				break;
			case 84:
				$this->setNcS1($value);
				break;
			case 85:
				$this->setNcS2($value);
				break;
			case 86:
				$this->setNcS3($value);
				break;
			case 87:
				$this->setNcS4($value);
				break;
			case 88:
				$this->setNcS5($value);
				break;
			case 89:
				$this->setNdS1($value);
				break;
			case 90:
				$this->setNdS2($value);
				break;
			case 91:
				$this->setNdS3($value);
				break;
			case 92:
				$this->setNdS4($value);
				break;
			case 93:
				$this->setNdS5($value);
				break;
			case 94:
				$this->setFactF1($value);
				break;
			case 95:
				$this->setFactF2($value);
				break;
			case 96:
				$this->setFactF3($value);
				break;
			case 97:
				$this->setFactF4($value);
				break;
			case 98:
				$this->setNdeF1($value);
				break;
			case 99:
				$this->setNdeF2($value);
				break;
			case 100:
				$this->setNdeF3($value);
				break;
			case 101:
				$this->setNdeF4($value);
				break;
			case 102:
				$this->setNcF1($value);
				break;
			case 103:
				$this->setNcF2($value);
				break;
			case 104:
				$this->setNcF3($value);
				break;
			case 105:
				$this->setNcF4($value);
				break;
			case 106:
				$this->setNdF1($value);
				break;
			case 107:
				$this->setNdF2($value);
				break;
			case 108:
				$this->setNdF3($value);
				break;
			case 109:
				$this->setNdF4($value);
				break;
			case 110:
				$this->setFactP1($value);
				break;
			case 111:
				$this->setFactP2($value);
				break;
			case 112:
				$this->setFactP3($value);
				break;
			case 113:
				$this->setFactP4($value);
				break;
			case 114:
				$this->setFactP5($value);
				break;
			case 115:
				$this->setNdeP1($value);
				break;
			case 116:
				$this->setNdeP2($value);
				break;
			case 117:
				$this->setNdeP3($value);
				break;
			case 118:
				$this->setNdeP4($value);
				break;
			case 119:
				$this->setNdeP5($value);
				break;
			case 120:
				$this->setNcP1($value);
				break;
			case 121:
				$this->setNcP2($value);
				break;
			case 122:
				$this->setNcP3($value);
				break;
			case 123:
				$this->setNcP4($value);
				break;
			case 124:
				$this->setNcP5($value);
				break;
			case 125:
				$this->setNdP1($value);
				break;
			case 126:
				$this->setNdP2($value);
				break;
			case 127:
				$this->setNdP3($value);
				break;
			case 128:
				$this->setNdP4($value);
				break;
			case 129:
				$this->setNdP5($value);
				break;
			case 130:
				$this->setFactNum2($value);
				break;
			case 131:
				$this->setFactNum3($value);
				break;
			case 132:
				$this->setFactNum4($value);
				break;
			case 133:
				$this->setFactNum5($value);
				break;
			case 134:
				$this->setNdeNum2($value);
				break;
			case 135:
				$this->setNdeNum3($value);
				break;
			case 136:
				$this->setNdeNum4($value);
				break;
			case 137:
				$this->setNdeNum5($value);
				break;
			case 138:
				$this->setNcNum2($value);
				break;
			case 139:
				$this->setNcNum3($value);
				break;
			case 140:
				$this->setNcNum4($value);
				break;
			case 141:
				$this->setNcNum5($value);
				break;
			case 142:
				$this->setNdNum2($value);
				break;
			case 143:
				$this->setNdNum3($value);
				break;
			case 144:
				$this->setNdNum4($value);
				break;
			case 145:
				$this->setNdNum5($value);
				break;
			case 146:
				$this->setSerie2($value);
				break;
			case 147:
				$this->setSerie3($value);
				break;
			case 148:
				$this->setSerie4($value);
				break;
			case 149:
				$this->setSerie5($value);
				break;
			case 150:
				$this->setEmpNum($value);
				break;
			case 151:
				$this->setDmcNum($value);
				break;
			case 152:
				$this->setTaxNum($value);
				break;
			case 153:
				$this->setCedNum($value);
				break;
			case 154:
				$this->setEntNum($value);
				break;
			case 155:
				$this->setCieNum($value);
				break;
			case 156:
				$this->setOdpNum($value);
				break;
			case 157:
				$this->setReqNum($value);
				break;
			case 158:
				$this->setDevNum($value);
				break;
			case 159:
				$this->setExpNum($value);
				break;
			case 160:
				$this->setInpNum($value);
				break;
			case 161:
				$this->setCostNum($value);
				break;
			case 162:
				$this->setParNum($value);
				break;
			case 163:
				$this->setEscNum($value);
				break;
			case 164:
				$this->setPlaNum($value);
				break;
			case 165:
				$this->setMenNum($value);
				break;
			case 166:
				$this->setDistNum($value);
				break;
			case 167:
				$this->setExpNumi($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AlmacenPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoAlma($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAlmaDes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNroFact($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNumFacIni($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNumFacFin($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCampo1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCampo2($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCampo3($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCampo4($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCoUsIn($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFeUsIn($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCoUsMo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFeUsMo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCoUsEl($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFeUsEl($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setRevisado($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTrasnfe($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCoSucu($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRowguid($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setNcNum($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setNdNum($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setAjusNum($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setTrasNum($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setFisiNum($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setNumKit($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setGenkNum($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setFactNum($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setPedNum($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setCotcNum($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setDevcNum($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setNdeNum($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setNddNum($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setPostNum($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setCfxgNum($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setChdvNum($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setGiroNum($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setRetenNum($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setCbNum($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setMovbNum($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setMovcNum($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setOrdpNum($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setDepcNum($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setCompNum($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setOrdNum($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setCotpNum($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setDevpNum($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setNdrNum($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setPostcppnum($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setCcxgNum($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setChdvcppnum($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setGirocppnum($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setNccppNum($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setNdcppNum($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setRetencppnum($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setPgNum($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setAjuPosm($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setAjuPosa($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setAjuNegm($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setAjuNega($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setAjuPosmc($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setAjuPosac($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setAjuNegmc($arr[$keys[61]]);
		if (array_key_exists($keys[62], $arr)) $this->setAjuNegac($arr[$keys[62]]);
		if (array_key_exists($keys[63], $arr)) $this->setPventa($arr[$keys[63]]);
		if (array_key_exists($keys[64], $arr)) $this->setTurnosic($arr[$keys[64]]);
		if (array_key_exists($keys[65], $arr)) $this->setPlvNum($arr[$keys[65]]);
		if (array_key_exists($keys[66], $arr)) $this->setPlcNum($arr[$keys[66]]);
		if (array_key_exists($keys[67], $arr)) $this->setTabislr($arr[$keys[67]]);
		if (array_key_exists($keys[68], $arr)) $this->setImpNum($arr[$keys[68]]);
		if (array_key_exists($keys[69], $arr)) $this->setRmaCli($arr[$keys[69]]);
		if (array_key_exists($keys[70], $arr)) $this->setRmaProv($arr[$keys[70]]);
		if (array_key_exists($keys[71], $arr)) $this->setRmaEntc($arr[$keys[71]]);
		if (array_key_exists($keys[72], $arr)) $this->setRmaEntp($arr[$keys[72]]);
		if (array_key_exists($keys[73], $arr)) $this->setRmaRegs($arr[$keys[73]]);
		if (array_key_exists($keys[74], $arr)) $this->setFactS1($arr[$keys[74]]);
		if (array_key_exists($keys[75], $arr)) $this->setFactS2($arr[$keys[75]]);
		if (array_key_exists($keys[76], $arr)) $this->setFactS3($arr[$keys[76]]);
		if (array_key_exists($keys[77], $arr)) $this->setFactS4($arr[$keys[77]]);
		if (array_key_exists($keys[78], $arr)) $this->setFactS5($arr[$keys[78]]);
		if (array_key_exists($keys[79], $arr)) $this->setNdeS1($arr[$keys[79]]);
		if (array_key_exists($keys[80], $arr)) $this->setNdeS2($arr[$keys[80]]);
		if (array_key_exists($keys[81], $arr)) $this->setNdeS3($arr[$keys[81]]);
		if (array_key_exists($keys[82], $arr)) $this->setNdeS4($arr[$keys[82]]);
		if (array_key_exists($keys[83], $arr)) $this->setNdeS5($arr[$keys[83]]);
		if (array_key_exists($keys[84], $arr)) $this->setNcS1($arr[$keys[84]]);
		if (array_key_exists($keys[85], $arr)) $this->setNcS2($arr[$keys[85]]);
		if (array_key_exists($keys[86], $arr)) $this->setNcS3($arr[$keys[86]]);
		if (array_key_exists($keys[87], $arr)) $this->setNcS4($arr[$keys[87]]);
		if (array_key_exists($keys[88], $arr)) $this->setNcS5($arr[$keys[88]]);
		if (array_key_exists($keys[89], $arr)) $this->setNdS1($arr[$keys[89]]);
		if (array_key_exists($keys[90], $arr)) $this->setNdS2($arr[$keys[90]]);
		if (array_key_exists($keys[91], $arr)) $this->setNdS3($arr[$keys[91]]);
		if (array_key_exists($keys[92], $arr)) $this->setNdS4($arr[$keys[92]]);
		if (array_key_exists($keys[93], $arr)) $this->setNdS5($arr[$keys[93]]);
		if (array_key_exists($keys[94], $arr)) $this->setFactF1($arr[$keys[94]]);
		if (array_key_exists($keys[95], $arr)) $this->setFactF2($arr[$keys[95]]);
		if (array_key_exists($keys[96], $arr)) $this->setFactF3($arr[$keys[96]]);
		if (array_key_exists($keys[97], $arr)) $this->setFactF4($arr[$keys[97]]);
		if (array_key_exists($keys[98], $arr)) $this->setNdeF1($arr[$keys[98]]);
		if (array_key_exists($keys[99], $arr)) $this->setNdeF2($arr[$keys[99]]);
		if (array_key_exists($keys[100], $arr)) $this->setNdeF3($arr[$keys[100]]);
		if (array_key_exists($keys[101], $arr)) $this->setNdeF4($arr[$keys[101]]);
		if (array_key_exists($keys[102], $arr)) $this->setNcF1($arr[$keys[102]]);
		if (array_key_exists($keys[103], $arr)) $this->setNcF2($arr[$keys[103]]);
		if (array_key_exists($keys[104], $arr)) $this->setNcF3($arr[$keys[104]]);
		if (array_key_exists($keys[105], $arr)) $this->setNcF4($arr[$keys[105]]);
		if (array_key_exists($keys[106], $arr)) $this->setNdF1($arr[$keys[106]]);
		if (array_key_exists($keys[107], $arr)) $this->setNdF2($arr[$keys[107]]);
		if (array_key_exists($keys[108], $arr)) $this->setNdF3($arr[$keys[108]]);
		if (array_key_exists($keys[109], $arr)) $this->setNdF4($arr[$keys[109]]);
		if (array_key_exists($keys[110], $arr)) $this->setFactP1($arr[$keys[110]]);
		if (array_key_exists($keys[111], $arr)) $this->setFactP2($arr[$keys[111]]);
		if (array_key_exists($keys[112], $arr)) $this->setFactP3($arr[$keys[112]]);
		if (array_key_exists($keys[113], $arr)) $this->setFactP4($arr[$keys[113]]);
		if (array_key_exists($keys[114], $arr)) $this->setFactP5($arr[$keys[114]]);
		if (array_key_exists($keys[115], $arr)) $this->setNdeP1($arr[$keys[115]]);
		if (array_key_exists($keys[116], $arr)) $this->setNdeP2($arr[$keys[116]]);
		if (array_key_exists($keys[117], $arr)) $this->setNdeP3($arr[$keys[117]]);
		if (array_key_exists($keys[118], $arr)) $this->setNdeP4($arr[$keys[118]]);
		if (array_key_exists($keys[119], $arr)) $this->setNdeP5($arr[$keys[119]]);
		if (array_key_exists($keys[120], $arr)) $this->setNcP1($arr[$keys[120]]);
		if (array_key_exists($keys[121], $arr)) $this->setNcP2($arr[$keys[121]]);
		if (array_key_exists($keys[122], $arr)) $this->setNcP3($arr[$keys[122]]);
		if (array_key_exists($keys[123], $arr)) $this->setNcP4($arr[$keys[123]]);
		if (array_key_exists($keys[124], $arr)) $this->setNcP5($arr[$keys[124]]);
		if (array_key_exists($keys[125], $arr)) $this->setNdP1($arr[$keys[125]]);
		if (array_key_exists($keys[126], $arr)) $this->setNdP2($arr[$keys[126]]);
		if (array_key_exists($keys[127], $arr)) $this->setNdP3($arr[$keys[127]]);
		if (array_key_exists($keys[128], $arr)) $this->setNdP4($arr[$keys[128]]);
		if (array_key_exists($keys[129], $arr)) $this->setNdP5($arr[$keys[129]]);
		if (array_key_exists($keys[130], $arr)) $this->setFactNum2($arr[$keys[130]]);
		if (array_key_exists($keys[131], $arr)) $this->setFactNum3($arr[$keys[131]]);
		if (array_key_exists($keys[132], $arr)) $this->setFactNum4($arr[$keys[132]]);
		if (array_key_exists($keys[133], $arr)) $this->setFactNum5($arr[$keys[133]]);
		if (array_key_exists($keys[134], $arr)) $this->setNdeNum2($arr[$keys[134]]);
		if (array_key_exists($keys[135], $arr)) $this->setNdeNum3($arr[$keys[135]]);
		if (array_key_exists($keys[136], $arr)) $this->setNdeNum4($arr[$keys[136]]);
		if (array_key_exists($keys[137], $arr)) $this->setNdeNum5($arr[$keys[137]]);
		if (array_key_exists($keys[138], $arr)) $this->setNcNum2($arr[$keys[138]]);
		if (array_key_exists($keys[139], $arr)) $this->setNcNum3($arr[$keys[139]]);
		if (array_key_exists($keys[140], $arr)) $this->setNcNum4($arr[$keys[140]]);
		if (array_key_exists($keys[141], $arr)) $this->setNcNum5($arr[$keys[141]]);
		if (array_key_exists($keys[142], $arr)) $this->setNdNum2($arr[$keys[142]]);
		if (array_key_exists($keys[143], $arr)) $this->setNdNum3($arr[$keys[143]]);
		if (array_key_exists($keys[144], $arr)) $this->setNdNum4($arr[$keys[144]]);
		if (array_key_exists($keys[145], $arr)) $this->setNdNum5($arr[$keys[145]]);
		if (array_key_exists($keys[146], $arr)) $this->setSerie2($arr[$keys[146]]);
		if (array_key_exists($keys[147], $arr)) $this->setSerie3($arr[$keys[147]]);
		if (array_key_exists($keys[148], $arr)) $this->setSerie4($arr[$keys[148]]);
		if (array_key_exists($keys[149], $arr)) $this->setSerie5($arr[$keys[149]]);
		if (array_key_exists($keys[150], $arr)) $this->setEmpNum($arr[$keys[150]]);
		if (array_key_exists($keys[151], $arr)) $this->setDmcNum($arr[$keys[151]]);
		if (array_key_exists($keys[152], $arr)) $this->setTaxNum($arr[$keys[152]]);
		if (array_key_exists($keys[153], $arr)) $this->setCedNum($arr[$keys[153]]);
		if (array_key_exists($keys[154], $arr)) $this->setEntNum($arr[$keys[154]]);
		if (array_key_exists($keys[155], $arr)) $this->setCieNum($arr[$keys[155]]);
		if (array_key_exists($keys[156], $arr)) $this->setOdpNum($arr[$keys[156]]);
		if (array_key_exists($keys[157], $arr)) $this->setReqNum($arr[$keys[157]]);
		if (array_key_exists($keys[158], $arr)) $this->setDevNum($arr[$keys[158]]);
		if (array_key_exists($keys[159], $arr)) $this->setExpNum($arr[$keys[159]]);
		if (array_key_exists($keys[160], $arr)) $this->setInpNum($arr[$keys[160]]);
		if (array_key_exists($keys[161], $arr)) $this->setCostNum($arr[$keys[161]]);
		if (array_key_exists($keys[162], $arr)) $this->setParNum($arr[$keys[162]]);
		if (array_key_exists($keys[163], $arr)) $this->setEscNum($arr[$keys[163]]);
		if (array_key_exists($keys[164], $arr)) $this->setPlaNum($arr[$keys[164]]);
		if (array_key_exists($keys[165], $arr)) $this->setMenNum($arr[$keys[165]]);
		if (array_key_exists($keys[166], $arr)) $this->setDistNum($arr[$keys[166]]);
		if (array_key_exists($keys[167], $arr)) $this->setExpNumi($arr[$keys[167]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AlmacenPeer::DATABASE_NAME);

		if ($this->isColumnModified(AlmacenPeer::CO_ALMA)) $criteria->add(AlmacenPeer::CO_ALMA, $this->co_alma);
		if ($this->isColumnModified(AlmacenPeer::ALMA_DES)) $criteria->add(AlmacenPeer::ALMA_DES, $this->alma_des);
		if ($this->isColumnModified(AlmacenPeer::NRO_FACT)) $criteria->add(AlmacenPeer::NRO_FACT, $this->nro_fact);
		if ($this->isColumnModified(AlmacenPeer::NUM_FAC_INI)) $criteria->add(AlmacenPeer::NUM_FAC_INI, $this->num_fac_ini);
		if ($this->isColumnModified(AlmacenPeer::NUM_FAC_FIN)) $criteria->add(AlmacenPeer::NUM_FAC_FIN, $this->num_fac_fin);
		if ($this->isColumnModified(AlmacenPeer::CAMPO1)) $criteria->add(AlmacenPeer::CAMPO1, $this->campo1);
		if ($this->isColumnModified(AlmacenPeer::CAMPO2)) $criteria->add(AlmacenPeer::CAMPO2, $this->campo2);
		if ($this->isColumnModified(AlmacenPeer::CAMPO3)) $criteria->add(AlmacenPeer::CAMPO3, $this->campo3);
		if ($this->isColumnModified(AlmacenPeer::CAMPO4)) $criteria->add(AlmacenPeer::CAMPO4, $this->campo4);
		if ($this->isColumnModified(AlmacenPeer::CO_US_IN)) $criteria->add(AlmacenPeer::CO_US_IN, $this->co_us_in);
		if ($this->isColumnModified(AlmacenPeer::FE_US_IN)) $criteria->add(AlmacenPeer::FE_US_IN, $this->fe_us_in);
		if ($this->isColumnModified(AlmacenPeer::CO_US_MO)) $criteria->add(AlmacenPeer::CO_US_MO, $this->co_us_mo);
		if ($this->isColumnModified(AlmacenPeer::FE_US_MO)) $criteria->add(AlmacenPeer::FE_US_MO, $this->fe_us_mo);
		if ($this->isColumnModified(AlmacenPeer::CO_US_EL)) $criteria->add(AlmacenPeer::CO_US_EL, $this->co_us_el);
		if ($this->isColumnModified(AlmacenPeer::FE_US_EL)) $criteria->add(AlmacenPeer::FE_US_EL, $this->fe_us_el);
		if ($this->isColumnModified(AlmacenPeer::REVISADO)) $criteria->add(AlmacenPeer::REVISADO, $this->revisado);
		if ($this->isColumnModified(AlmacenPeer::TRASNFE)) $criteria->add(AlmacenPeer::TRASNFE, $this->trasnfe);
		if ($this->isColumnModified(AlmacenPeer::CO_SUCU)) $criteria->add(AlmacenPeer::CO_SUCU, $this->co_sucu);
		if ($this->isColumnModified(AlmacenPeer::ROWGUID)) $criteria->add(AlmacenPeer::ROWGUID, $this->rowguid);
		if ($this->isColumnModified(AlmacenPeer::NC_NUM)) $criteria->add(AlmacenPeer::NC_NUM, $this->nc_num);
		if ($this->isColumnModified(AlmacenPeer::ND_NUM)) $criteria->add(AlmacenPeer::ND_NUM, $this->nd_num);
		if ($this->isColumnModified(AlmacenPeer::AJUS_NUM)) $criteria->add(AlmacenPeer::AJUS_NUM, $this->ajus_num);
		if ($this->isColumnModified(AlmacenPeer::TRAS_NUM)) $criteria->add(AlmacenPeer::TRAS_NUM, $this->tras_num);
		if ($this->isColumnModified(AlmacenPeer::FISI_NUM)) $criteria->add(AlmacenPeer::FISI_NUM, $this->fisi_num);
		if ($this->isColumnModified(AlmacenPeer::NUM_KIT)) $criteria->add(AlmacenPeer::NUM_KIT, $this->num_kit);
		if ($this->isColumnModified(AlmacenPeer::GENK_NUM)) $criteria->add(AlmacenPeer::GENK_NUM, $this->genk_num);
		if ($this->isColumnModified(AlmacenPeer::FACT_NUM)) $criteria->add(AlmacenPeer::FACT_NUM, $this->fact_num);
		if ($this->isColumnModified(AlmacenPeer::PED_NUM)) $criteria->add(AlmacenPeer::PED_NUM, $this->ped_num);
		if ($this->isColumnModified(AlmacenPeer::COTC_NUM)) $criteria->add(AlmacenPeer::COTC_NUM, $this->cotc_num);
		if ($this->isColumnModified(AlmacenPeer::DEVC_NUM)) $criteria->add(AlmacenPeer::DEVC_NUM, $this->devc_num);
		if ($this->isColumnModified(AlmacenPeer::NDE_NUM)) $criteria->add(AlmacenPeer::NDE_NUM, $this->nde_num);
		if ($this->isColumnModified(AlmacenPeer::NDD_NUM)) $criteria->add(AlmacenPeer::NDD_NUM, $this->ndd_num);
		if ($this->isColumnModified(AlmacenPeer::POST_NUM)) $criteria->add(AlmacenPeer::POST_NUM, $this->post_num);
		if ($this->isColumnModified(AlmacenPeer::CFXG_NUM)) $criteria->add(AlmacenPeer::CFXG_NUM, $this->cfxg_num);
		if ($this->isColumnModified(AlmacenPeer::CHDV_NUM)) $criteria->add(AlmacenPeer::CHDV_NUM, $this->chdv_num);
		if ($this->isColumnModified(AlmacenPeer::GIRO_NUM)) $criteria->add(AlmacenPeer::GIRO_NUM, $this->giro_num);
		if ($this->isColumnModified(AlmacenPeer::RETEN_NUM)) $criteria->add(AlmacenPeer::RETEN_NUM, $this->reten_num);
		if ($this->isColumnModified(AlmacenPeer::CB_NUM)) $criteria->add(AlmacenPeer::CB_NUM, $this->cb_num);
		if ($this->isColumnModified(AlmacenPeer::MOVB_NUM)) $criteria->add(AlmacenPeer::MOVB_NUM, $this->movb_num);
		if ($this->isColumnModified(AlmacenPeer::MOVC_NUM)) $criteria->add(AlmacenPeer::MOVC_NUM, $this->movc_num);
		if ($this->isColumnModified(AlmacenPeer::ORDP_NUM)) $criteria->add(AlmacenPeer::ORDP_NUM, $this->ordp_num);
		if ($this->isColumnModified(AlmacenPeer::DEPC_NUM)) $criteria->add(AlmacenPeer::DEPC_NUM, $this->depc_num);
		if ($this->isColumnModified(AlmacenPeer::COMP_NUM)) $criteria->add(AlmacenPeer::COMP_NUM, $this->comp_num);
		if ($this->isColumnModified(AlmacenPeer::ORD_NUM)) $criteria->add(AlmacenPeer::ORD_NUM, $this->ord_num);
		if ($this->isColumnModified(AlmacenPeer::COTP_NUM)) $criteria->add(AlmacenPeer::COTP_NUM, $this->cotp_num);
		if ($this->isColumnModified(AlmacenPeer::DEVP_NUM)) $criteria->add(AlmacenPeer::DEVP_NUM, $this->devp_num);
		if ($this->isColumnModified(AlmacenPeer::NDR_NUM)) $criteria->add(AlmacenPeer::NDR_NUM, $this->ndr_num);
		if ($this->isColumnModified(AlmacenPeer::POSTCPPNUM)) $criteria->add(AlmacenPeer::POSTCPPNUM, $this->postcppnum);
		if ($this->isColumnModified(AlmacenPeer::CCXG_NUM)) $criteria->add(AlmacenPeer::CCXG_NUM, $this->ccxg_num);
		if ($this->isColumnModified(AlmacenPeer::CHDVCPPNUM)) $criteria->add(AlmacenPeer::CHDVCPPNUM, $this->chdvcppnum);
		if ($this->isColumnModified(AlmacenPeer::GIROCPPNUM)) $criteria->add(AlmacenPeer::GIROCPPNUM, $this->girocppnum);
		if ($this->isColumnModified(AlmacenPeer::NCCPP_NUM)) $criteria->add(AlmacenPeer::NCCPP_NUM, $this->nccpp_num);
		if ($this->isColumnModified(AlmacenPeer::NDCPP_NUM)) $criteria->add(AlmacenPeer::NDCPP_NUM, $this->ndcpp_num);
		if ($this->isColumnModified(AlmacenPeer::RETENCPPNUM)) $criteria->add(AlmacenPeer::RETENCPPNUM, $this->retencppnum);
		if ($this->isColumnModified(AlmacenPeer::PG_NUM)) $criteria->add(AlmacenPeer::PG_NUM, $this->pg_num);
		if ($this->isColumnModified(AlmacenPeer::AJU_POSM)) $criteria->add(AlmacenPeer::AJU_POSM, $this->aju_posm);
		if ($this->isColumnModified(AlmacenPeer::AJU_POSA)) $criteria->add(AlmacenPeer::AJU_POSA, $this->aju_posa);
		if ($this->isColumnModified(AlmacenPeer::AJU_NEGM)) $criteria->add(AlmacenPeer::AJU_NEGM, $this->aju_negm);
		if ($this->isColumnModified(AlmacenPeer::AJU_NEGA)) $criteria->add(AlmacenPeer::AJU_NEGA, $this->aju_nega);
		if ($this->isColumnModified(AlmacenPeer::AJU_POSMC)) $criteria->add(AlmacenPeer::AJU_POSMC, $this->aju_posmc);
		if ($this->isColumnModified(AlmacenPeer::AJU_POSAC)) $criteria->add(AlmacenPeer::AJU_POSAC, $this->aju_posac);
		if ($this->isColumnModified(AlmacenPeer::AJU_NEGMC)) $criteria->add(AlmacenPeer::AJU_NEGMC, $this->aju_negmc);
		if ($this->isColumnModified(AlmacenPeer::AJU_NEGAC)) $criteria->add(AlmacenPeer::AJU_NEGAC, $this->aju_negac);
		if ($this->isColumnModified(AlmacenPeer::PVENTA)) $criteria->add(AlmacenPeer::PVENTA, $this->pventa);
		if ($this->isColumnModified(AlmacenPeer::TURNOSIC)) $criteria->add(AlmacenPeer::TURNOSIC, $this->turnosic);
		if ($this->isColumnModified(AlmacenPeer::PLV_NUM)) $criteria->add(AlmacenPeer::PLV_NUM, $this->plv_num);
		if ($this->isColumnModified(AlmacenPeer::PLC_NUM)) $criteria->add(AlmacenPeer::PLC_NUM, $this->plc_num);
		if ($this->isColumnModified(AlmacenPeer::TABISLR)) $criteria->add(AlmacenPeer::TABISLR, $this->tabislr);
		if ($this->isColumnModified(AlmacenPeer::IMP_NUM)) $criteria->add(AlmacenPeer::IMP_NUM, $this->imp_num);
		if ($this->isColumnModified(AlmacenPeer::RMA_CLI)) $criteria->add(AlmacenPeer::RMA_CLI, $this->rma_cli);
		if ($this->isColumnModified(AlmacenPeer::RMA_PROV)) $criteria->add(AlmacenPeer::RMA_PROV, $this->rma_prov);
		if ($this->isColumnModified(AlmacenPeer::RMA_ENTC)) $criteria->add(AlmacenPeer::RMA_ENTC, $this->rma_entc);
		if ($this->isColumnModified(AlmacenPeer::RMA_ENTP)) $criteria->add(AlmacenPeer::RMA_ENTP, $this->rma_entp);
		if ($this->isColumnModified(AlmacenPeer::RMA_REGS)) $criteria->add(AlmacenPeer::RMA_REGS, $this->rma_regs);
		if ($this->isColumnModified(AlmacenPeer::FACT_S1)) $criteria->add(AlmacenPeer::FACT_S1, $this->fact_s1);
		if ($this->isColumnModified(AlmacenPeer::FACT_S2)) $criteria->add(AlmacenPeer::FACT_S2, $this->fact_s2);
		if ($this->isColumnModified(AlmacenPeer::FACT_S3)) $criteria->add(AlmacenPeer::FACT_S3, $this->fact_s3);
		if ($this->isColumnModified(AlmacenPeer::FACT_S4)) $criteria->add(AlmacenPeer::FACT_S4, $this->fact_s4);
		if ($this->isColumnModified(AlmacenPeer::FACT_S5)) $criteria->add(AlmacenPeer::FACT_S5, $this->fact_s5);
		if ($this->isColumnModified(AlmacenPeer::NDE_S1)) $criteria->add(AlmacenPeer::NDE_S1, $this->nde_s1);
		if ($this->isColumnModified(AlmacenPeer::NDE_S2)) $criteria->add(AlmacenPeer::NDE_S2, $this->nde_s2);
		if ($this->isColumnModified(AlmacenPeer::NDE_S3)) $criteria->add(AlmacenPeer::NDE_S3, $this->nde_s3);
		if ($this->isColumnModified(AlmacenPeer::NDE_S4)) $criteria->add(AlmacenPeer::NDE_S4, $this->nde_s4);
		if ($this->isColumnModified(AlmacenPeer::NDE_S5)) $criteria->add(AlmacenPeer::NDE_S5, $this->nde_s5);
		if ($this->isColumnModified(AlmacenPeer::NC_S1)) $criteria->add(AlmacenPeer::NC_S1, $this->nc_s1);
		if ($this->isColumnModified(AlmacenPeer::NC_S2)) $criteria->add(AlmacenPeer::NC_S2, $this->nc_s2);
		if ($this->isColumnModified(AlmacenPeer::NC_S3)) $criteria->add(AlmacenPeer::NC_S3, $this->nc_s3);
		if ($this->isColumnModified(AlmacenPeer::NC_S4)) $criteria->add(AlmacenPeer::NC_S4, $this->nc_s4);
		if ($this->isColumnModified(AlmacenPeer::NC_S5)) $criteria->add(AlmacenPeer::NC_S5, $this->nc_s5);
		if ($this->isColumnModified(AlmacenPeer::ND_S1)) $criteria->add(AlmacenPeer::ND_S1, $this->nd_s1);
		if ($this->isColumnModified(AlmacenPeer::ND_S2)) $criteria->add(AlmacenPeer::ND_S2, $this->nd_s2);
		if ($this->isColumnModified(AlmacenPeer::ND_S3)) $criteria->add(AlmacenPeer::ND_S3, $this->nd_s3);
		if ($this->isColumnModified(AlmacenPeer::ND_S4)) $criteria->add(AlmacenPeer::ND_S4, $this->nd_s4);
		if ($this->isColumnModified(AlmacenPeer::ND_S5)) $criteria->add(AlmacenPeer::ND_S5, $this->nd_s5);
		if ($this->isColumnModified(AlmacenPeer::FACT_F1)) $criteria->add(AlmacenPeer::FACT_F1, $this->fact_f1);
		if ($this->isColumnModified(AlmacenPeer::FACT_F2)) $criteria->add(AlmacenPeer::FACT_F2, $this->fact_f2);
		if ($this->isColumnModified(AlmacenPeer::FACT_F3)) $criteria->add(AlmacenPeer::FACT_F3, $this->fact_f3);
		if ($this->isColumnModified(AlmacenPeer::FACT_F4)) $criteria->add(AlmacenPeer::FACT_F4, $this->fact_f4);
		if ($this->isColumnModified(AlmacenPeer::NDE_F1)) $criteria->add(AlmacenPeer::NDE_F1, $this->nde_f1);
		if ($this->isColumnModified(AlmacenPeer::NDE_F2)) $criteria->add(AlmacenPeer::NDE_F2, $this->nde_f2);
		if ($this->isColumnModified(AlmacenPeer::NDE_F3)) $criteria->add(AlmacenPeer::NDE_F3, $this->nde_f3);
		if ($this->isColumnModified(AlmacenPeer::NDE_F4)) $criteria->add(AlmacenPeer::NDE_F4, $this->nde_f4);
		if ($this->isColumnModified(AlmacenPeer::NC_F1)) $criteria->add(AlmacenPeer::NC_F1, $this->nc_f1);
		if ($this->isColumnModified(AlmacenPeer::NC_F2)) $criteria->add(AlmacenPeer::NC_F2, $this->nc_f2);
		if ($this->isColumnModified(AlmacenPeer::NC_F3)) $criteria->add(AlmacenPeer::NC_F3, $this->nc_f3);
		if ($this->isColumnModified(AlmacenPeer::NC_F4)) $criteria->add(AlmacenPeer::NC_F4, $this->nc_f4);
		if ($this->isColumnModified(AlmacenPeer::ND_F1)) $criteria->add(AlmacenPeer::ND_F1, $this->nd_f1);
		if ($this->isColumnModified(AlmacenPeer::ND_F2)) $criteria->add(AlmacenPeer::ND_F2, $this->nd_f2);
		if ($this->isColumnModified(AlmacenPeer::ND_F3)) $criteria->add(AlmacenPeer::ND_F3, $this->nd_f3);
		if ($this->isColumnModified(AlmacenPeer::ND_F4)) $criteria->add(AlmacenPeer::ND_F4, $this->nd_f4);
		if ($this->isColumnModified(AlmacenPeer::FACT_P1)) $criteria->add(AlmacenPeer::FACT_P1, $this->fact_p1);
		if ($this->isColumnModified(AlmacenPeer::FACT_P2)) $criteria->add(AlmacenPeer::FACT_P2, $this->fact_p2);
		if ($this->isColumnModified(AlmacenPeer::FACT_P3)) $criteria->add(AlmacenPeer::FACT_P3, $this->fact_p3);
		if ($this->isColumnModified(AlmacenPeer::FACT_P4)) $criteria->add(AlmacenPeer::FACT_P4, $this->fact_p4);
		if ($this->isColumnModified(AlmacenPeer::FACT_P5)) $criteria->add(AlmacenPeer::FACT_P5, $this->fact_p5);
		if ($this->isColumnModified(AlmacenPeer::NDE_P1)) $criteria->add(AlmacenPeer::NDE_P1, $this->nde_p1);
		if ($this->isColumnModified(AlmacenPeer::NDE_P2)) $criteria->add(AlmacenPeer::NDE_P2, $this->nde_p2);
		if ($this->isColumnModified(AlmacenPeer::NDE_P3)) $criteria->add(AlmacenPeer::NDE_P3, $this->nde_p3);
		if ($this->isColumnModified(AlmacenPeer::NDE_P4)) $criteria->add(AlmacenPeer::NDE_P4, $this->nde_p4);
		if ($this->isColumnModified(AlmacenPeer::NDE_P5)) $criteria->add(AlmacenPeer::NDE_P5, $this->nde_p5);
		if ($this->isColumnModified(AlmacenPeer::NC_P1)) $criteria->add(AlmacenPeer::NC_P1, $this->nc_p1);
		if ($this->isColumnModified(AlmacenPeer::NC_P2)) $criteria->add(AlmacenPeer::NC_P2, $this->nc_p2);
		if ($this->isColumnModified(AlmacenPeer::NC_P3)) $criteria->add(AlmacenPeer::NC_P3, $this->nc_p3);
		if ($this->isColumnModified(AlmacenPeer::NC_P4)) $criteria->add(AlmacenPeer::NC_P4, $this->nc_p4);
		if ($this->isColumnModified(AlmacenPeer::NC_P5)) $criteria->add(AlmacenPeer::NC_P5, $this->nc_p5);
		if ($this->isColumnModified(AlmacenPeer::ND_P1)) $criteria->add(AlmacenPeer::ND_P1, $this->nd_p1);
		if ($this->isColumnModified(AlmacenPeer::ND_P2)) $criteria->add(AlmacenPeer::ND_P2, $this->nd_p2);
		if ($this->isColumnModified(AlmacenPeer::ND_P3)) $criteria->add(AlmacenPeer::ND_P3, $this->nd_p3);
		if ($this->isColumnModified(AlmacenPeer::ND_P4)) $criteria->add(AlmacenPeer::ND_P4, $this->nd_p4);
		if ($this->isColumnModified(AlmacenPeer::ND_P5)) $criteria->add(AlmacenPeer::ND_P5, $this->nd_p5);
		if ($this->isColumnModified(AlmacenPeer::FACT_NUM2)) $criteria->add(AlmacenPeer::FACT_NUM2, $this->fact_num2);
		if ($this->isColumnModified(AlmacenPeer::FACT_NUM3)) $criteria->add(AlmacenPeer::FACT_NUM3, $this->fact_num3);
		if ($this->isColumnModified(AlmacenPeer::FACT_NUM4)) $criteria->add(AlmacenPeer::FACT_NUM4, $this->fact_num4);
		if ($this->isColumnModified(AlmacenPeer::FACT_NUM5)) $criteria->add(AlmacenPeer::FACT_NUM5, $this->fact_num5);
		if ($this->isColumnModified(AlmacenPeer::NDE_NUM2)) $criteria->add(AlmacenPeer::NDE_NUM2, $this->nde_num2);
		if ($this->isColumnModified(AlmacenPeer::NDE_NUM3)) $criteria->add(AlmacenPeer::NDE_NUM3, $this->nde_num3);
		if ($this->isColumnModified(AlmacenPeer::NDE_NUM4)) $criteria->add(AlmacenPeer::NDE_NUM4, $this->nde_num4);
		if ($this->isColumnModified(AlmacenPeer::NDE_NUM5)) $criteria->add(AlmacenPeer::NDE_NUM5, $this->nde_num5);
		if ($this->isColumnModified(AlmacenPeer::NC_NUM2)) $criteria->add(AlmacenPeer::NC_NUM2, $this->nc_num2);
		if ($this->isColumnModified(AlmacenPeer::NC_NUM3)) $criteria->add(AlmacenPeer::NC_NUM3, $this->nc_num3);
		if ($this->isColumnModified(AlmacenPeer::NC_NUM4)) $criteria->add(AlmacenPeer::NC_NUM4, $this->nc_num4);
		if ($this->isColumnModified(AlmacenPeer::NC_NUM5)) $criteria->add(AlmacenPeer::NC_NUM5, $this->nc_num5);
		if ($this->isColumnModified(AlmacenPeer::ND_NUM2)) $criteria->add(AlmacenPeer::ND_NUM2, $this->nd_num2);
		if ($this->isColumnModified(AlmacenPeer::ND_NUM3)) $criteria->add(AlmacenPeer::ND_NUM3, $this->nd_num3);
		if ($this->isColumnModified(AlmacenPeer::ND_NUM4)) $criteria->add(AlmacenPeer::ND_NUM4, $this->nd_num4);
		if ($this->isColumnModified(AlmacenPeer::ND_NUM5)) $criteria->add(AlmacenPeer::ND_NUM5, $this->nd_num5);
		if ($this->isColumnModified(AlmacenPeer::SERIE2)) $criteria->add(AlmacenPeer::SERIE2, $this->serie2);
		if ($this->isColumnModified(AlmacenPeer::SERIE3)) $criteria->add(AlmacenPeer::SERIE3, $this->serie3);
		if ($this->isColumnModified(AlmacenPeer::SERIE4)) $criteria->add(AlmacenPeer::SERIE4, $this->serie4);
		if ($this->isColumnModified(AlmacenPeer::SERIE5)) $criteria->add(AlmacenPeer::SERIE5, $this->serie5);
		if ($this->isColumnModified(AlmacenPeer::EMP_NUM)) $criteria->add(AlmacenPeer::EMP_NUM, $this->emp_num);
		if ($this->isColumnModified(AlmacenPeer::DMC_NUM)) $criteria->add(AlmacenPeer::DMC_NUM, $this->dmc_num);
		if ($this->isColumnModified(AlmacenPeer::TAX_NUM)) $criteria->add(AlmacenPeer::TAX_NUM, $this->tax_num);
		if ($this->isColumnModified(AlmacenPeer::CED_NUM)) $criteria->add(AlmacenPeer::CED_NUM, $this->ced_num);
		if ($this->isColumnModified(AlmacenPeer::ENT_NUM)) $criteria->add(AlmacenPeer::ENT_NUM, $this->ent_num);
		if ($this->isColumnModified(AlmacenPeer::CIE_NUM)) $criteria->add(AlmacenPeer::CIE_NUM, $this->cie_num);
		if ($this->isColumnModified(AlmacenPeer::ODP_NUM)) $criteria->add(AlmacenPeer::ODP_NUM, $this->odp_num);
		if ($this->isColumnModified(AlmacenPeer::REQ_NUM)) $criteria->add(AlmacenPeer::REQ_NUM, $this->req_num);
		if ($this->isColumnModified(AlmacenPeer::DEV_NUM)) $criteria->add(AlmacenPeer::DEV_NUM, $this->dev_num);
		if ($this->isColumnModified(AlmacenPeer::EXP_NUM)) $criteria->add(AlmacenPeer::EXP_NUM, $this->exp_num);
		if ($this->isColumnModified(AlmacenPeer::INP_NUM)) $criteria->add(AlmacenPeer::INP_NUM, $this->inp_num);
		if ($this->isColumnModified(AlmacenPeer::COST_NUM)) $criteria->add(AlmacenPeer::COST_NUM, $this->cost_num);
		if ($this->isColumnModified(AlmacenPeer::PAR_NUM)) $criteria->add(AlmacenPeer::PAR_NUM, $this->par_num);
		if ($this->isColumnModified(AlmacenPeer::ESC_NUM)) $criteria->add(AlmacenPeer::ESC_NUM, $this->esc_num);
		if ($this->isColumnModified(AlmacenPeer::PLA_NUM)) $criteria->add(AlmacenPeer::PLA_NUM, $this->pla_num);
		if ($this->isColumnModified(AlmacenPeer::MEN_NUM)) $criteria->add(AlmacenPeer::MEN_NUM, $this->men_num);
		if ($this->isColumnModified(AlmacenPeer::DIST_NUM)) $criteria->add(AlmacenPeer::DIST_NUM, $this->dist_num);
		if ($this->isColumnModified(AlmacenPeer::EXP_NUMI)) $criteria->add(AlmacenPeer::EXP_NUMI, $this->exp_numi);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AlmacenPeer::DATABASE_NAME);

		$criteria->add(AlmacenPeer::CO_ALMA, $this->co_alma);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getCoAlma();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setCoAlma($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setAlmaDes($this->alma_des);

		$copyObj->setNroFact($this->nro_fact);

		$copyObj->setNumFacIni($this->num_fac_ini);

		$copyObj->setNumFacFin($this->num_fac_fin);

		$copyObj->setCampo1($this->campo1);

		$copyObj->setCampo2($this->campo2);

		$copyObj->setCampo3($this->campo3);

		$copyObj->setCampo4($this->campo4);

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

		$copyObj->setNcNum($this->nc_num);

		$copyObj->setNdNum($this->nd_num);

		$copyObj->setAjusNum($this->ajus_num);

		$copyObj->setTrasNum($this->tras_num);

		$copyObj->setFisiNum($this->fisi_num);

		$copyObj->setNumKit($this->num_kit);

		$copyObj->setGenkNum($this->genk_num);

		$copyObj->setFactNum($this->fact_num);

		$copyObj->setPedNum($this->ped_num);

		$copyObj->setCotcNum($this->cotc_num);

		$copyObj->setDevcNum($this->devc_num);

		$copyObj->setNdeNum($this->nde_num);

		$copyObj->setNddNum($this->ndd_num);

		$copyObj->setPostNum($this->post_num);

		$copyObj->setCfxgNum($this->cfxg_num);

		$copyObj->setChdvNum($this->chdv_num);

		$copyObj->setGiroNum($this->giro_num);

		$copyObj->setRetenNum($this->reten_num);

		$copyObj->setCbNum($this->cb_num);

		$copyObj->setMovbNum($this->movb_num);

		$copyObj->setMovcNum($this->movc_num);

		$copyObj->setOrdpNum($this->ordp_num);

		$copyObj->setDepcNum($this->depc_num);

		$copyObj->setCompNum($this->comp_num);

		$copyObj->setOrdNum($this->ord_num);

		$copyObj->setCotpNum($this->cotp_num);

		$copyObj->setDevpNum($this->devp_num);

		$copyObj->setNdrNum($this->ndr_num);

		$copyObj->setPostcppnum($this->postcppnum);

		$copyObj->setCcxgNum($this->ccxg_num);

		$copyObj->setChdvcppnum($this->chdvcppnum);

		$copyObj->setGirocppnum($this->girocppnum);

		$copyObj->setNccppNum($this->nccpp_num);

		$copyObj->setNdcppNum($this->ndcpp_num);

		$copyObj->setRetencppnum($this->retencppnum);

		$copyObj->setPgNum($this->pg_num);

		$copyObj->setAjuPosm($this->aju_posm);

		$copyObj->setAjuPosa($this->aju_posa);

		$copyObj->setAjuNegm($this->aju_negm);

		$copyObj->setAjuNega($this->aju_nega);

		$copyObj->setAjuPosmc($this->aju_posmc);

		$copyObj->setAjuPosac($this->aju_posac);

		$copyObj->setAjuNegmc($this->aju_negmc);

		$copyObj->setAjuNegac($this->aju_negac);

		$copyObj->setPventa($this->pventa);

		$copyObj->setTurnosic($this->turnosic);

		$copyObj->setPlvNum($this->plv_num);

		$copyObj->setPlcNum($this->plc_num);

		$copyObj->setTabislr($this->tabislr);

		$copyObj->setImpNum($this->imp_num);

		$copyObj->setRmaCli($this->rma_cli);

		$copyObj->setRmaProv($this->rma_prov);

		$copyObj->setRmaEntc($this->rma_entc);

		$copyObj->setRmaEntp($this->rma_entp);

		$copyObj->setRmaRegs($this->rma_regs);

		$copyObj->setFactS1($this->fact_s1);

		$copyObj->setFactS2($this->fact_s2);

		$copyObj->setFactS3($this->fact_s3);

		$copyObj->setFactS4($this->fact_s4);

		$copyObj->setFactS5($this->fact_s5);

		$copyObj->setNdeS1($this->nde_s1);

		$copyObj->setNdeS2($this->nde_s2);

		$copyObj->setNdeS3($this->nde_s3);

		$copyObj->setNdeS4($this->nde_s4);

		$copyObj->setNdeS5($this->nde_s5);

		$copyObj->setNcS1($this->nc_s1);

		$copyObj->setNcS2($this->nc_s2);

		$copyObj->setNcS3($this->nc_s3);

		$copyObj->setNcS4($this->nc_s4);

		$copyObj->setNcS5($this->nc_s5);

		$copyObj->setNdS1($this->nd_s1);

		$copyObj->setNdS2($this->nd_s2);

		$copyObj->setNdS3($this->nd_s3);

		$copyObj->setNdS4($this->nd_s4);

		$copyObj->setNdS5($this->nd_s5);

		$copyObj->setFactF1($this->fact_f1);

		$copyObj->setFactF2($this->fact_f2);

		$copyObj->setFactF3($this->fact_f3);

		$copyObj->setFactF4($this->fact_f4);

		$copyObj->setNdeF1($this->nde_f1);

		$copyObj->setNdeF2($this->nde_f2);

		$copyObj->setNdeF3($this->nde_f3);

		$copyObj->setNdeF4($this->nde_f4);

		$copyObj->setNcF1($this->nc_f1);

		$copyObj->setNcF2($this->nc_f2);

		$copyObj->setNcF3($this->nc_f3);

		$copyObj->setNcF4($this->nc_f4);

		$copyObj->setNdF1($this->nd_f1);

		$copyObj->setNdF2($this->nd_f2);

		$copyObj->setNdF3($this->nd_f3);

		$copyObj->setNdF4($this->nd_f4);

		$copyObj->setFactP1($this->fact_p1);

		$copyObj->setFactP2($this->fact_p2);

		$copyObj->setFactP3($this->fact_p3);

		$copyObj->setFactP4($this->fact_p4);

		$copyObj->setFactP5($this->fact_p5);

		$copyObj->setNdeP1($this->nde_p1);

		$copyObj->setNdeP2($this->nde_p2);

		$copyObj->setNdeP3($this->nde_p3);

		$copyObj->setNdeP4($this->nde_p4);

		$copyObj->setNdeP5($this->nde_p5);

		$copyObj->setNcP1($this->nc_p1);

		$copyObj->setNcP2($this->nc_p2);

		$copyObj->setNcP3($this->nc_p3);

		$copyObj->setNcP4($this->nc_p4);

		$copyObj->setNcP5($this->nc_p5);

		$copyObj->setNdP1($this->nd_p1);

		$copyObj->setNdP2($this->nd_p2);

		$copyObj->setNdP3($this->nd_p3);

		$copyObj->setNdP4($this->nd_p4);

		$copyObj->setNdP5($this->nd_p5);

		$copyObj->setFactNum2($this->fact_num2);

		$copyObj->setFactNum3($this->fact_num3);

		$copyObj->setFactNum4($this->fact_num4);

		$copyObj->setFactNum5($this->fact_num5);

		$copyObj->setNdeNum2($this->nde_num2);

		$copyObj->setNdeNum3($this->nde_num3);

		$copyObj->setNdeNum4($this->nde_num4);

		$copyObj->setNdeNum5($this->nde_num5);

		$copyObj->setNcNum2($this->nc_num2);

		$copyObj->setNcNum3($this->nc_num3);

		$copyObj->setNcNum4($this->nc_num4);

		$copyObj->setNcNum5($this->nc_num5);

		$copyObj->setNdNum2($this->nd_num2);

		$copyObj->setNdNum3($this->nd_num3);

		$copyObj->setNdNum4($this->nd_num4);

		$copyObj->setNdNum5($this->nd_num5);

		$copyObj->setSerie2($this->serie2);

		$copyObj->setSerie3($this->serie3);

		$copyObj->setSerie4($this->serie4);

		$copyObj->setSerie5($this->serie5);

		$copyObj->setEmpNum($this->emp_num);

		$copyObj->setDmcNum($this->dmc_num);

		$copyObj->setTaxNum($this->tax_num);

		$copyObj->setCedNum($this->ced_num);

		$copyObj->setEntNum($this->ent_num);

		$copyObj->setCieNum($this->cie_num);

		$copyObj->setOdpNum($this->odp_num);

		$copyObj->setReqNum($this->req_num);

		$copyObj->setDevNum($this->dev_num);

		$copyObj->setExpNum($this->exp_num);

		$copyObj->setInpNum($this->inp_num);

		$copyObj->setCostNum($this->cost_num);

		$copyObj->setParNum($this->par_num);

		$copyObj->setEscNum($this->esc_num);

		$copyObj->setPlaNum($this->pla_num);

		$copyObj->setMenNum($this->men_num);

		$copyObj->setDistNum($this->dist_num);

		$copyObj->setExpNumi($this->exp_numi);


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

			foreach($this->getSubAlmas() as $relObj) {
				$copyObj->addSubAlma($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setCoAlma(NULL); 
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
			self::$peer = new AlmacenPeer();
		}
		return self::$peer;
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

				$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

				FacturaPeer::addSelectColumns($criteria);
				$this->collFacturas = FacturaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

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

		$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

		return FacturaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFactura(Factura $l)
	{
		$this->collFacturas[] = $l;
		$l->setAlmacen($this);
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

				$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

				$this->collFacturas = FacturaPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastFacturaCriteria = $criteria;

		return $this->collFacturas;
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

				$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

				$this->collFacturas = FacturaPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

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

				$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

				$this->collFacturas = FacturaPeer::doSelectJoinTranspor($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

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

				$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

				$this->collFacturas = FacturaPeer::doSelectJoinCondicio($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

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

				$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

				$this->collFacturas = FacturaPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(FacturaPeer::CO_SUCU, $this->getCoAlma());

			if (!isset($this->lastFacturaCriteria) || !$this->lastFacturaCriteria->equals($criteria)) {
				$this->collFacturas = FacturaPeer::doSelectJoinMoneda($criteria, $con);
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

				$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

				DocumCcPeer::addSelectColumns($criteria);
				$this->collDocumCcs = DocumCcPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

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

		$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

		return DocumCcPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDocumCc(DocumCc $l)
	{
		$this->collDocumCcs[] = $l;
		$l->setAlmacen($this);
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

				$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastDocumCcCriteria = $criteria;

		return $this->collDocumCcs;
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

				$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

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

				$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinTabulado($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

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

				$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

				$this->collDocumCcs = DocumCcPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(DocumCcPeer::CO_SUCU, $this->getCoAlma());

			if (!isset($this->lastDocumCcCriteria) || !$this->lastDocumCcCriteria->equals($criteria)) {
				$this->collDocumCcs = DocumCcPeer::doSelectJoinMoneda($criteria, $con);
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

				$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

				CobrosPeer::addSelectColumns($criteria);
				$this->collCobross = CobrosPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

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

		$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

		return CobrosPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCobros(Cobros $l)
	{
		$this->collCobross[] = $l;
		$l->setAlmacen($this);
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

				$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

				$this->collCobross = CobrosPeer::doSelectJoinClientes($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinClientes($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
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

				$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

				$this->collCobross = CobrosPeer::doSelectJoinVendedor($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

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

				$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

				$this->collCobross = CobrosPeer::doSelectJoinMoneda($criteria, $con);
			}
		} else {
									
			$criteria->add(CobrosPeer::CO_SUCU, $this->getCoAlma());

			if (!isset($this->lastCobrosCriteria) || !$this->lastCobrosCriteria->equals($criteria)) {
				$this->collCobross = CobrosPeer::doSelectJoinMoneda($criteria, $con);
			}
		}
		$this->lastCobrosCriteria = $criteria;

		return $this->collCobross;
	}

	
	public function initSubAlmas()
	{
		if ($this->collSubAlmas === null) {
			$this->collSubAlmas = array();
		}
	}

	
	public function getSubAlmas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSubAlmaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSubAlmas === null) {
			if ($this->isNew()) {
			   $this->collSubAlmas = array();
			} else {

				$criteria->add(SubAlmaPeer::CO_ALMA, $this->getCoAlma());

				SubAlmaPeer::addSelectColumns($criteria);
				$this->collSubAlmas = SubAlmaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SubAlmaPeer::CO_ALMA, $this->getCoAlma());

				SubAlmaPeer::addSelectColumns($criteria);
				if (!isset($this->lastSubAlmaCriteria) || !$this->lastSubAlmaCriteria->equals($criteria)) {
					$this->collSubAlmas = SubAlmaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSubAlmaCriteria = $criteria;
		return $this->collSubAlmas;
	}

	
	public function countSubAlmas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSubAlmaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SubAlmaPeer::CO_ALMA, $this->getCoAlma());

		return SubAlmaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSubAlma(SubAlma $l)
	{
		$this->collSubAlmas[] = $l;
		$l->setAlmacen($this);
	}

} 