<?php


abstract class BaseAlmacenPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'almacen';

	
	const CLASS_DEFAULT = 'lib.model.Almacen';

	
	const NUM_COLUMNS = 168;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_ALMA = 'almacen.CO_ALMA';

	
	const ALMA_DES = 'almacen.ALMA_DES';

	
	const NRO_FACT = 'almacen.NRO_FACT';

	
	const NUM_FAC_INI = 'almacen.NUM_FAC_INI';

	
	const NUM_FAC_FIN = 'almacen.NUM_FAC_FIN';

	
	const CAMPO1 = 'almacen.CAMPO1';

	
	const CAMPO2 = 'almacen.CAMPO2';

	
	const CAMPO3 = 'almacen.CAMPO3';

	
	const CAMPO4 = 'almacen.CAMPO4';

	
	const CO_US_IN = 'almacen.CO_US_IN';

	
	const FE_US_IN = 'almacen.FE_US_IN';

	
	const CO_US_MO = 'almacen.CO_US_MO';

	
	const FE_US_MO = 'almacen.FE_US_MO';

	
	const CO_US_EL = 'almacen.CO_US_EL';

	
	const FE_US_EL = 'almacen.FE_US_EL';

	
	const REVISADO = 'almacen.REVISADO';

	
	const TRASNFE = 'almacen.TRASNFE';

	
	const CO_SUCU = 'almacen.CO_SUCU';

	
	const ROWGUID = 'almacen.ROWGUID';

	
	const NC_NUM = 'almacen.NC_NUM';

	
	const ND_NUM = 'almacen.ND_NUM';

	
	const AJUS_NUM = 'almacen.AJUS_NUM';

	
	const TRAS_NUM = 'almacen.TRAS_NUM';

	
	const FISI_NUM = 'almacen.FISI_NUM';

	
	const NUM_KIT = 'almacen.NUM_KIT';

	
	const GENK_NUM = 'almacen.GENK_NUM';

	
	const FACT_NUM = 'almacen.FACT_NUM';

	
	const PED_NUM = 'almacen.PED_NUM';

	
	const COTC_NUM = 'almacen.COTC_NUM';

	
	const DEVC_NUM = 'almacen.DEVC_NUM';

	
	const NDE_NUM = 'almacen.NDE_NUM';

	
	const NDD_NUM = 'almacen.NDD_NUM';

	
	const POST_NUM = 'almacen.POST_NUM';

	
	const CFXG_NUM = 'almacen.CFXG_NUM';

	
	const CHDV_NUM = 'almacen.CHDV_NUM';

	
	const GIRO_NUM = 'almacen.GIRO_NUM';

	
	const RETEN_NUM = 'almacen.RETEN_NUM';

	
	const CB_NUM = 'almacen.CB_NUM';

	
	const MOVB_NUM = 'almacen.MOVB_NUM';

	
	const MOVC_NUM = 'almacen.MOVC_NUM';

	
	const ORDP_NUM = 'almacen.ORDP_NUM';

	
	const DEPC_NUM = 'almacen.DEPC_NUM';

	
	const COMP_NUM = 'almacen.COMP_NUM';

	
	const ORD_NUM = 'almacen.ORD_NUM';

	
	const COTP_NUM = 'almacen.COTP_NUM';

	
	const DEVP_NUM = 'almacen.DEVP_NUM';

	
	const NDR_NUM = 'almacen.NDR_NUM';

	
	const POSTCPPNUM = 'almacen.POSTCPPNUM';

	
	const CCXG_NUM = 'almacen.CCXG_NUM';

	
	const CHDVCPPNUM = 'almacen.CHDVCPPNUM';

	
	const GIROCPPNUM = 'almacen.GIROCPPNUM';

	
	const NCCPP_NUM = 'almacen.NCCPP_NUM';

	
	const NDCPP_NUM = 'almacen.NDCPP_NUM';

	
	const RETENCPPNUM = 'almacen.RETENCPPNUM';

	
	const PG_NUM = 'almacen.PG_NUM';

	
	const AJU_POSM = 'almacen.AJU_POSM';

	
	const AJU_POSA = 'almacen.AJU_POSA';

	
	const AJU_NEGM = 'almacen.AJU_NEGM';

	
	const AJU_NEGA = 'almacen.AJU_NEGA';

	
	const AJU_POSMC = 'almacen.AJU_POSMC';

	
	const AJU_POSAC = 'almacen.AJU_POSAC';

	
	const AJU_NEGMC = 'almacen.AJU_NEGMC';

	
	const AJU_NEGAC = 'almacen.AJU_NEGAC';

	
	const PVENTA = 'almacen.PVENTA';

	
	const TURNOSIC = 'almacen.TURNOSIC';

	
	const PLV_NUM = 'almacen.PLV_NUM';

	
	const PLC_NUM = 'almacen.PLC_NUM';

	
	const TABISLR = 'almacen.TABISLR';

	
	const IMP_NUM = 'almacen.IMP_NUM';

	
	const RMA_CLI = 'almacen.RMA_CLI';

	
	const RMA_PROV = 'almacen.RMA_PROV';

	
	const RMA_ENTC = 'almacen.RMA_ENTC';

	
	const RMA_ENTP = 'almacen.RMA_ENTP';

	
	const RMA_REGS = 'almacen.RMA_REGS';

	
	const FACT_S1 = 'almacen.FACT_S1';

	
	const FACT_S2 = 'almacen.FACT_S2';

	
	const FACT_S3 = 'almacen.FACT_S3';

	
	const FACT_S4 = 'almacen.FACT_S4';

	
	const FACT_S5 = 'almacen.FACT_S5';

	
	const NDE_S1 = 'almacen.NDE_S1';

	
	const NDE_S2 = 'almacen.NDE_S2';

	
	const NDE_S3 = 'almacen.NDE_S3';

	
	const NDE_S4 = 'almacen.NDE_S4';

	
	const NDE_S5 = 'almacen.NDE_S5';

	
	const NC_S1 = 'almacen.NC_S1';

	
	const NC_S2 = 'almacen.NC_S2';

	
	const NC_S3 = 'almacen.NC_S3';

	
	const NC_S4 = 'almacen.NC_S4';

	
	const NC_S5 = 'almacen.NC_S5';

	
	const ND_S1 = 'almacen.ND_S1';

	
	const ND_S2 = 'almacen.ND_S2';

	
	const ND_S3 = 'almacen.ND_S3';

	
	const ND_S4 = 'almacen.ND_S4';

	
	const ND_S5 = 'almacen.ND_S5';

	
	const FACT_F1 = 'almacen.FACT_F1';

	
	const FACT_F2 = 'almacen.FACT_F2';

	
	const FACT_F3 = 'almacen.FACT_F3';

	
	const FACT_F4 = 'almacen.FACT_F4';

	
	const NDE_F1 = 'almacen.NDE_F1';

	
	const NDE_F2 = 'almacen.NDE_F2';

	
	const NDE_F3 = 'almacen.NDE_F3';

	
	const NDE_F4 = 'almacen.NDE_F4';

	
	const NC_F1 = 'almacen.NC_F1';

	
	const NC_F2 = 'almacen.NC_F2';

	
	const NC_F3 = 'almacen.NC_F3';

	
	const NC_F4 = 'almacen.NC_F4';

	
	const ND_F1 = 'almacen.ND_F1';

	
	const ND_F2 = 'almacen.ND_F2';

	
	const ND_F3 = 'almacen.ND_F3';

	
	const ND_F4 = 'almacen.ND_F4';

	
	const FACT_P1 = 'almacen.FACT_P1';

	
	const FACT_P2 = 'almacen.FACT_P2';

	
	const FACT_P3 = 'almacen.FACT_P3';

	
	const FACT_P4 = 'almacen.FACT_P4';

	
	const FACT_P5 = 'almacen.FACT_P5';

	
	const NDE_P1 = 'almacen.NDE_P1';

	
	const NDE_P2 = 'almacen.NDE_P2';

	
	const NDE_P3 = 'almacen.NDE_P3';

	
	const NDE_P4 = 'almacen.NDE_P4';

	
	const NDE_P5 = 'almacen.NDE_P5';

	
	const NC_P1 = 'almacen.NC_P1';

	
	const NC_P2 = 'almacen.NC_P2';

	
	const NC_P3 = 'almacen.NC_P3';

	
	const NC_P4 = 'almacen.NC_P4';

	
	const NC_P5 = 'almacen.NC_P5';

	
	const ND_P1 = 'almacen.ND_P1';

	
	const ND_P2 = 'almacen.ND_P2';

	
	const ND_P3 = 'almacen.ND_P3';

	
	const ND_P4 = 'almacen.ND_P4';

	
	const ND_P5 = 'almacen.ND_P5';

	
	const FACT_NUM2 = 'almacen.FACT_NUM2';

	
	const FACT_NUM3 = 'almacen.FACT_NUM3';

	
	const FACT_NUM4 = 'almacen.FACT_NUM4';

	
	const FACT_NUM5 = 'almacen.FACT_NUM5';

	
	const NDE_NUM2 = 'almacen.NDE_NUM2';

	
	const NDE_NUM3 = 'almacen.NDE_NUM3';

	
	const NDE_NUM4 = 'almacen.NDE_NUM4';

	
	const NDE_NUM5 = 'almacen.NDE_NUM5';

	
	const NC_NUM2 = 'almacen.NC_NUM2';

	
	const NC_NUM3 = 'almacen.NC_NUM3';

	
	const NC_NUM4 = 'almacen.NC_NUM4';

	
	const NC_NUM5 = 'almacen.NC_NUM5';

	
	const ND_NUM2 = 'almacen.ND_NUM2';

	
	const ND_NUM3 = 'almacen.ND_NUM3';

	
	const ND_NUM4 = 'almacen.ND_NUM4';

	
	const ND_NUM5 = 'almacen.ND_NUM5';

	
	const SERIE2 = 'almacen.SERIE2';

	
	const SERIE3 = 'almacen.SERIE3';

	
	const SERIE4 = 'almacen.SERIE4';

	
	const SERIE5 = 'almacen.SERIE5';

	
	const EMP_NUM = 'almacen.EMP_NUM';

	
	const DMC_NUM = 'almacen.DMC_NUM';

	
	const TAX_NUM = 'almacen.TAX_NUM';

	
	const CED_NUM = 'almacen.CED_NUM';

	
	const ENT_NUM = 'almacen.ENT_NUM';

	
	const CIE_NUM = 'almacen.CIE_NUM';

	
	const ODP_NUM = 'almacen.ODP_NUM';

	
	const REQ_NUM = 'almacen.REQ_NUM';

	
	const DEV_NUM = 'almacen.DEV_NUM';

	
	const EXP_NUM = 'almacen.EXP_NUM';

	
	const INP_NUM = 'almacen.INP_NUM';

	
	const COST_NUM = 'almacen.COST_NUM';

	
	const PAR_NUM = 'almacen.PAR_NUM';

	
	const ESC_NUM = 'almacen.ESC_NUM';

	
	const PLA_NUM = 'almacen.PLA_NUM';

	
	const MEN_NUM = 'almacen.MEN_NUM';

	
	const DIST_NUM = 'almacen.DIST_NUM';

	
	const EXP_NUMI = 'almacen.EXP_NUMI';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoAlma', 'AlmaDes', 'NroFact', 'NumFacIni', 'NumFacFin', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'NcNum', 'NdNum', 'AjusNum', 'TrasNum', 'FisiNum', 'NumKit', 'GenkNum', 'FactNum', 'PedNum', 'CotcNum', 'DevcNum', 'NdeNum', 'NddNum', 'PostNum', 'CfxgNum', 'ChdvNum', 'GiroNum', 'RetenNum', 'CbNum', 'MovbNum', 'MovcNum', 'OrdpNum', 'DepcNum', 'CompNum', 'OrdNum', 'CotpNum', 'DevpNum', 'NdrNum', 'Postcppnum', 'CcxgNum', 'Chdvcppnum', 'Girocppnum', 'NccppNum', 'NdcppNum', 'Retencppnum', 'PgNum', 'AjuPosm', 'AjuPosa', 'AjuNegm', 'AjuNega', 'AjuPosmc', 'AjuPosac', 'AjuNegmc', 'AjuNegac', 'Pventa', 'Turnosic', 'PlvNum', 'PlcNum', 'Tabislr', 'ImpNum', 'RmaCli', 'RmaProv', 'RmaEntc', 'RmaEntp', 'RmaRegs', 'FactS1', 'FactS2', 'FactS3', 'FactS4', 'FactS5', 'NdeS1', 'NdeS2', 'NdeS3', 'NdeS4', 'NdeS5', 'NcS1', 'NcS2', 'NcS3', 'NcS4', 'NcS5', 'NdS1', 'NdS2', 'NdS3', 'NdS4', 'NdS5', 'FactF1', 'FactF2', 'FactF3', 'FactF4', 'NdeF1', 'NdeF2', 'NdeF3', 'NdeF4', 'NcF1', 'NcF2', 'NcF3', 'NcF4', 'NdF1', 'NdF2', 'NdF3', 'NdF4', 'FactP1', 'FactP2', 'FactP3', 'FactP4', 'FactP5', 'NdeP1', 'NdeP2', 'NdeP3', 'NdeP4', 'NdeP5', 'NcP1', 'NcP2', 'NcP3', 'NcP4', 'NcP5', 'NdP1', 'NdP2', 'NdP3', 'NdP4', 'NdP5', 'FactNum2', 'FactNum3', 'FactNum4', 'FactNum5', 'NdeNum2', 'NdeNum3', 'NdeNum4', 'NdeNum5', 'NcNum2', 'NcNum3', 'NcNum4', 'NcNum5', 'NdNum2', 'NdNum3', 'NdNum4', 'NdNum5', 'Serie2', 'Serie3', 'Serie4', 'Serie5', 'EmpNum', 'DmcNum', 'TaxNum', 'CedNum', 'EntNum', 'CieNum', 'OdpNum', 'ReqNum', 'DevNum', 'ExpNum', 'InpNum', 'CostNum', 'ParNum', 'EscNum', 'PlaNum', 'MenNum', 'DistNum', 'ExpNumi', ),
		BasePeer::TYPE_COLNAME => array (AlmacenPeer::CO_ALMA, AlmacenPeer::ALMA_DES, AlmacenPeer::NRO_FACT, AlmacenPeer::NUM_FAC_INI, AlmacenPeer::NUM_FAC_FIN, AlmacenPeer::CAMPO1, AlmacenPeer::CAMPO2, AlmacenPeer::CAMPO3, AlmacenPeer::CAMPO4, AlmacenPeer::CO_US_IN, AlmacenPeer::FE_US_IN, AlmacenPeer::CO_US_MO, AlmacenPeer::FE_US_MO, AlmacenPeer::CO_US_EL, AlmacenPeer::FE_US_EL, AlmacenPeer::REVISADO, AlmacenPeer::TRASNFE, AlmacenPeer::CO_SUCU, AlmacenPeer::ROWGUID, AlmacenPeer::NC_NUM, AlmacenPeer::ND_NUM, AlmacenPeer::AJUS_NUM, AlmacenPeer::TRAS_NUM, AlmacenPeer::FISI_NUM, AlmacenPeer::NUM_KIT, AlmacenPeer::GENK_NUM, AlmacenPeer::FACT_NUM, AlmacenPeer::PED_NUM, AlmacenPeer::COTC_NUM, AlmacenPeer::DEVC_NUM, AlmacenPeer::NDE_NUM, AlmacenPeer::NDD_NUM, AlmacenPeer::POST_NUM, AlmacenPeer::CFXG_NUM, AlmacenPeer::CHDV_NUM, AlmacenPeer::GIRO_NUM, AlmacenPeer::RETEN_NUM, AlmacenPeer::CB_NUM, AlmacenPeer::MOVB_NUM, AlmacenPeer::MOVC_NUM, AlmacenPeer::ORDP_NUM, AlmacenPeer::DEPC_NUM, AlmacenPeer::COMP_NUM, AlmacenPeer::ORD_NUM, AlmacenPeer::COTP_NUM, AlmacenPeer::DEVP_NUM, AlmacenPeer::NDR_NUM, AlmacenPeer::POSTCPPNUM, AlmacenPeer::CCXG_NUM, AlmacenPeer::CHDVCPPNUM, AlmacenPeer::GIROCPPNUM, AlmacenPeer::NCCPP_NUM, AlmacenPeer::NDCPP_NUM, AlmacenPeer::RETENCPPNUM, AlmacenPeer::PG_NUM, AlmacenPeer::AJU_POSM, AlmacenPeer::AJU_POSA, AlmacenPeer::AJU_NEGM, AlmacenPeer::AJU_NEGA, AlmacenPeer::AJU_POSMC, AlmacenPeer::AJU_POSAC, AlmacenPeer::AJU_NEGMC, AlmacenPeer::AJU_NEGAC, AlmacenPeer::PVENTA, AlmacenPeer::TURNOSIC, AlmacenPeer::PLV_NUM, AlmacenPeer::PLC_NUM, AlmacenPeer::TABISLR, AlmacenPeer::IMP_NUM, AlmacenPeer::RMA_CLI, AlmacenPeer::RMA_PROV, AlmacenPeer::RMA_ENTC, AlmacenPeer::RMA_ENTP, AlmacenPeer::RMA_REGS, AlmacenPeer::FACT_S1, AlmacenPeer::FACT_S2, AlmacenPeer::FACT_S3, AlmacenPeer::FACT_S4, AlmacenPeer::FACT_S5, AlmacenPeer::NDE_S1, AlmacenPeer::NDE_S2, AlmacenPeer::NDE_S3, AlmacenPeer::NDE_S4, AlmacenPeer::NDE_S5, AlmacenPeer::NC_S1, AlmacenPeer::NC_S2, AlmacenPeer::NC_S3, AlmacenPeer::NC_S4, AlmacenPeer::NC_S5, AlmacenPeer::ND_S1, AlmacenPeer::ND_S2, AlmacenPeer::ND_S3, AlmacenPeer::ND_S4, AlmacenPeer::ND_S5, AlmacenPeer::FACT_F1, AlmacenPeer::FACT_F2, AlmacenPeer::FACT_F3, AlmacenPeer::FACT_F4, AlmacenPeer::NDE_F1, AlmacenPeer::NDE_F2, AlmacenPeer::NDE_F3, AlmacenPeer::NDE_F4, AlmacenPeer::NC_F1, AlmacenPeer::NC_F2, AlmacenPeer::NC_F3, AlmacenPeer::NC_F4, AlmacenPeer::ND_F1, AlmacenPeer::ND_F2, AlmacenPeer::ND_F3, AlmacenPeer::ND_F4, AlmacenPeer::FACT_P1, AlmacenPeer::FACT_P2, AlmacenPeer::FACT_P3, AlmacenPeer::FACT_P4, AlmacenPeer::FACT_P5, AlmacenPeer::NDE_P1, AlmacenPeer::NDE_P2, AlmacenPeer::NDE_P3, AlmacenPeer::NDE_P4, AlmacenPeer::NDE_P5, AlmacenPeer::NC_P1, AlmacenPeer::NC_P2, AlmacenPeer::NC_P3, AlmacenPeer::NC_P4, AlmacenPeer::NC_P5, AlmacenPeer::ND_P1, AlmacenPeer::ND_P2, AlmacenPeer::ND_P3, AlmacenPeer::ND_P4, AlmacenPeer::ND_P5, AlmacenPeer::FACT_NUM2, AlmacenPeer::FACT_NUM3, AlmacenPeer::FACT_NUM4, AlmacenPeer::FACT_NUM5, AlmacenPeer::NDE_NUM2, AlmacenPeer::NDE_NUM3, AlmacenPeer::NDE_NUM4, AlmacenPeer::NDE_NUM5, AlmacenPeer::NC_NUM2, AlmacenPeer::NC_NUM3, AlmacenPeer::NC_NUM4, AlmacenPeer::NC_NUM5, AlmacenPeer::ND_NUM2, AlmacenPeer::ND_NUM3, AlmacenPeer::ND_NUM4, AlmacenPeer::ND_NUM5, AlmacenPeer::SERIE2, AlmacenPeer::SERIE3, AlmacenPeer::SERIE4, AlmacenPeer::SERIE5, AlmacenPeer::EMP_NUM, AlmacenPeer::DMC_NUM, AlmacenPeer::TAX_NUM, AlmacenPeer::CED_NUM, AlmacenPeer::ENT_NUM, AlmacenPeer::CIE_NUM, AlmacenPeer::ODP_NUM, AlmacenPeer::REQ_NUM, AlmacenPeer::DEV_NUM, AlmacenPeer::EXP_NUM, AlmacenPeer::INP_NUM, AlmacenPeer::COST_NUM, AlmacenPeer::PAR_NUM, AlmacenPeer::ESC_NUM, AlmacenPeer::PLA_NUM, AlmacenPeer::MEN_NUM, AlmacenPeer::DIST_NUM, AlmacenPeer::EXP_NUMI, ),
		BasePeer::TYPE_FIELDNAME => array ('co_alma', 'alma_des', 'nro_fact', 'num_fac_ini', 'num_fac_fin', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'nc_num', 'nd_num', 'ajus_num', 'tras_num', 'fisi_num', 'num_kit', 'genk_num', 'fact_num', 'ped_num', 'cotc_num', 'devc_num', 'nde_num', 'ndd_num', 'post_num', 'cfxg_num', 'chdv_num', 'giro_num', 'reten_num', 'cb_num', 'movb_num', 'movc_num', 'ordp_num', 'depc_num', 'comp_num', 'ord_num', 'cotp_num', 'devp_num', 'ndr_num', 'postcppnum', 'ccxg_num', 'chdvcppnum', 'girocppnum', 'nccpp_num', 'ndcpp_num', 'retencppnum', 'pg_num', 'aju_posm', 'aju_posa', 'aju_negm', 'aju_nega', 'aju_posmc', 'aju_posac', 'aju_negmc', 'aju_negac', 'pventa', 'turnosic', 'plv_num', 'plc_num', 'tabislr', 'imp_num', 'rma_cli', 'rma_prov', 'rma_entc', 'rma_entp', 'rma_regs', 'fact_s1', 'fact_s2', 'fact_s3', 'fact_s4', 'fact_s5', 'nde_s1', 'nde_s2', 'nde_s3', 'nde_s4', 'nde_s5', 'nc_s1', 'nc_s2', 'nc_s3', 'nc_s4', 'nc_s5', 'nd_s1', 'nd_s2', 'nd_s3', 'nd_s4', 'nd_s5', 'fact_f1', 'fact_f2', 'fact_f3', 'fact_f4', 'nde_f1', 'nde_f2', 'nde_f3', 'nde_f4', 'nc_f1', 'nc_f2', 'nc_f3', 'nc_f4', 'nd_f1', 'nd_f2', 'nd_f3', 'nd_f4', 'fact_p1', 'fact_p2', 'fact_p3', 'fact_p4', 'fact_p5', 'nde_p1', 'nde_p2', 'nde_p3', 'nde_p4', 'nde_p5', 'nc_p1', 'nc_p2', 'nc_p3', 'nc_p4', 'nc_p5', 'nd_p1', 'nd_p2', 'nd_p3', 'nd_p4', 'nd_p5', 'fact_num2', 'fact_num3', 'fact_num4', 'fact_num5', 'nde_num2', 'nde_num3', 'nde_num4', 'nde_num5', 'nc_num2', 'nc_num3', 'nc_num4', 'nc_num5', 'nd_num2', 'nd_num3', 'nd_num4', 'nd_num5', 'serie2', 'serie3', 'serie4', 'serie5', 'emp_num', 'dmc_num', 'tax_num', 'ced_num', 'ent_num', 'cie_num', 'odp_num', 'req_num', 'dev_num', 'exp_num', 'inp_num', 'cost_num', 'par_num', 'esc_num', 'pla_num', 'men_num', 'dist_num', 'exp_numi', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoAlma' => 0, 'AlmaDes' => 1, 'NroFact' => 2, 'NumFacIni' => 3, 'NumFacFin' => 4, 'Campo1' => 5, 'Campo2' => 6, 'Campo3' => 7, 'Campo4' => 8, 'CoUsIn' => 9, 'FeUsIn' => 10, 'CoUsMo' => 11, 'FeUsMo' => 12, 'CoUsEl' => 13, 'FeUsEl' => 14, 'Revisado' => 15, 'Trasnfe' => 16, 'CoSucu' => 17, 'Rowguid' => 18, 'NcNum' => 19, 'NdNum' => 20, 'AjusNum' => 21, 'TrasNum' => 22, 'FisiNum' => 23, 'NumKit' => 24, 'GenkNum' => 25, 'FactNum' => 26, 'PedNum' => 27, 'CotcNum' => 28, 'DevcNum' => 29, 'NdeNum' => 30, 'NddNum' => 31, 'PostNum' => 32, 'CfxgNum' => 33, 'ChdvNum' => 34, 'GiroNum' => 35, 'RetenNum' => 36, 'CbNum' => 37, 'MovbNum' => 38, 'MovcNum' => 39, 'OrdpNum' => 40, 'DepcNum' => 41, 'CompNum' => 42, 'OrdNum' => 43, 'CotpNum' => 44, 'DevpNum' => 45, 'NdrNum' => 46, 'Postcppnum' => 47, 'CcxgNum' => 48, 'Chdvcppnum' => 49, 'Girocppnum' => 50, 'NccppNum' => 51, 'NdcppNum' => 52, 'Retencppnum' => 53, 'PgNum' => 54, 'AjuPosm' => 55, 'AjuPosa' => 56, 'AjuNegm' => 57, 'AjuNega' => 58, 'AjuPosmc' => 59, 'AjuPosac' => 60, 'AjuNegmc' => 61, 'AjuNegac' => 62, 'Pventa' => 63, 'Turnosic' => 64, 'PlvNum' => 65, 'PlcNum' => 66, 'Tabislr' => 67, 'ImpNum' => 68, 'RmaCli' => 69, 'RmaProv' => 70, 'RmaEntc' => 71, 'RmaEntp' => 72, 'RmaRegs' => 73, 'FactS1' => 74, 'FactS2' => 75, 'FactS3' => 76, 'FactS4' => 77, 'FactS5' => 78, 'NdeS1' => 79, 'NdeS2' => 80, 'NdeS3' => 81, 'NdeS4' => 82, 'NdeS5' => 83, 'NcS1' => 84, 'NcS2' => 85, 'NcS3' => 86, 'NcS4' => 87, 'NcS5' => 88, 'NdS1' => 89, 'NdS2' => 90, 'NdS3' => 91, 'NdS4' => 92, 'NdS5' => 93, 'FactF1' => 94, 'FactF2' => 95, 'FactF3' => 96, 'FactF4' => 97, 'NdeF1' => 98, 'NdeF2' => 99, 'NdeF3' => 100, 'NdeF4' => 101, 'NcF1' => 102, 'NcF2' => 103, 'NcF3' => 104, 'NcF4' => 105, 'NdF1' => 106, 'NdF2' => 107, 'NdF3' => 108, 'NdF4' => 109, 'FactP1' => 110, 'FactP2' => 111, 'FactP3' => 112, 'FactP4' => 113, 'FactP5' => 114, 'NdeP1' => 115, 'NdeP2' => 116, 'NdeP3' => 117, 'NdeP4' => 118, 'NdeP5' => 119, 'NcP1' => 120, 'NcP2' => 121, 'NcP3' => 122, 'NcP4' => 123, 'NcP5' => 124, 'NdP1' => 125, 'NdP2' => 126, 'NdP3' => 127, 'NdP4' => 128, 'NdP5' => 129, 'FactNum2' => 130, 'FactNum3' => 131, 'FactNum4' => 132, 'FactNum5' => 133, 'NdeNum2' => 134, 'NdeNum3' => 135, 'NdeNum4' => 136, 'NdeNum5' => 137, 'NcNum2' => 138, 'NcNum3' => 139, 'NcNum4' => 140, 'NcNum5' => 141, 'NdNum2' => 142, 'NdNum3' => 143, 'NdNum4' => 144, 'NdNum5' => 145, 'Serie2' => 146, 'Serie3' => 147, 'Serie4' => 148, 'Serie5' => 149, 'EmpNum' => 150, 'DmcNum' => 151, 'TaxNum' => 152, 'CedNum' => 153, 'EntNum' => 154, 'CieNum' => 155, 'OdpNum' => 156, 'ReqNum' => 157, 'DevNum' => 158, 'ExpNum' => 159, 'InpNum' => 160, 'CostNum' => 161, 'ParNum' => 162, 'EscNum' => 163, 'PlaNum' => 164, 'MenNum' => 165, 'DistNum' => 166, 'ExpNumi' => 167, ),
		BasePeer::TYPE_COLNAME => array (AlmacenPeer::CO_ALMA => 0, AlmacenPeer::ALMA_DES => 1, AlmacenPeer::NRO_FACT => 2, AlmacenPeer::NUM_FAC_INI => 3, AlmacenPeer::NUM_FAC_FIN => 4, AlmacenPeer::CAMPO1 => 5, AlmacenPeer::CAMPO2 => 6, AlmacenPeer::CAMPO3 => 7, AlmacenPeer::CAMPO4 => 8, AlmacenPeer::CO_US_IN => 9, AlmacenPeer::FE_US_IN => 10, AlmacenPeer::CO_US_MO => 11, AlmacenPeer::FE_US_MO => 12, AlmacenPeer::CO_US_EL => 13, AlmacenPeer::FE_US_EL => 14, AlmacenPeer::REVISADO => 15, AlmacenPeer::TRASNFE => 16, AlmacenPeer::CO_SUCU => 17, AlmacenPeer::ROWGUID => 18, AlmacenPeer::NC_NUM => 19, AlmacenPeer::ND_NUM => 20, AlmacenPeer::AJUS_NUM => 21, AlmacenPeer::TRAS_NUM => 22, AlmacenPeer::FISI_NUM => 23, AlmacenPeer::NUM_KIT => 24, AlmacenPeer::GENK_NUM => 25, AlmacenPeer::FACT_NUM => 26, AlmacenPeer::PED_NUM => 27, AlmacenPeer::COTC_NUM => 28, AlmacenPeer::DEVC_NUM => 29, AlmacenPeer::NDE_NUM => 30, AlmacenPeer::NDD_NUM => 31, AlmacenPeer::POST_NUM => 32, AlmacenPeer::CFXG_NUM => 33, AlmacenPeer::CHDV_NUM => 34, AlmacenPeer::GIRO_NUM => 35, AlmacenPeer::RETEN_NUM => 36, AlmacenPeer::CB_NUM => 37, AlmacenPeer::MOVB_NUM => 38, AlmacenPeer::MOVC_NUM => 39, AlmacenPeer::ORDP_NUM => 40, AlmacenPeer::DEPC_NUM => 41, AlmacenPeer::COMP_NUM => 42, AlmacenPeer::ORD_NUM => 43, AlmacenPeer::COTP_NUM => 44, AlmacenPeer::DEVP_NUM => 45, AlmacenPeer::NDR_NUM => 46, AlmacenPeer::POSTCPPNUM => 47, AlmacenPeer::CCXG_NUM => 48, AlmacenPeer::CHDVCPPNUM => 49, AlmacenPeer::GIROCPPNUM => 50, AlmacenPeer::NCCPP_NUM => 51, AlmacenPeer::NDCPP_NUM => 52, AlmacenPeer::RETENCPPNUM => 53, AlmacenPeer::PG_NUM => 54, AlmacenPeer::AJU_POSM => 55, AlmacenPeer::AJU_POSA => 56, AlmacenPeer::AJU_NEGM => 57, AlmacenPeer::AJU_NEGA => 58, AlmacenPeer::AJU_POSMC => 59, AlmacenPeer::AJU_POSAC => 60, AlmacenPeer::AJU_NEGMC => 61, AlmacenPeer::AJU_NEGAC => 62, AlmacenPeer::PVENTA => 63, AlmacenPeer::TURNOSIC => 64, AlmacenPeer::PLV_NUM => 65, AlmacenPeer::PLC_NUM => 66, AlmacenPeer::TABISLR => 67, AlmacenPeer::IMP_NUM => 68, AlmacenPeer::RMA_CLI => 69, AlmacenPeer::RMA_PROV => 70, AlmacenPeer::RMA_ENTC => 71, AlmacenPeer::RMA_ENTP => 72, AlmacenPeer::RMA_REGS => 73, AlmacenPeer::FACT_S1 => 74, AlmacenPeer::FACT_S2 => 75, AlmacenPeer::FACT_S3 => 76, AlmacenPeer::FACT_S4 => 77, AlmacenPeer::FACT_S5 => 78, AlmacenPeer::NDE_S1 => 79, AlmacenPeer::NDE_S2 => 80, AlmacenPeer::NDE_S3 => 81, AlmacenPeer::NDE_S4 => 82, AlmacenPeer::NDE_S5 => 83, AlmacenPeer::NC_S1 => 84, AlmacenPeer::NC_S2 => 85, AlmacenPeer::NC_S3 => 86, AlmacenPeer::NC_S4 => 87, AlmacenPeer::NC_S5 => 88, AlmacenPeer::ND_S1 => 89, AlmacenPeer::ND_S2 => 90, AlmacenPeer::ND_S3 => 91, AlmacenPeer::ND_S4 => 92, AlmacenPeer::ND_S5 => 93, AlmacenPeer::FACT_F1 => 94, AlmacenPeer::FACT_F2 => 95, AlmacenPeer::FACT_F3 => 96, AlmacenPeer::FACT_F4 => 97, AlmacenPeer::NDE_F1 => 98, AlmacenPeer::NDE_F2 => 99, AlmacenPeer::NDE_F3 => 100, AlmacenPeer::NDE_F4 => 101, AlmacenPeer::NC_F1 => 102, AlmacenPeer::NC_F2 => 103, AlmacenPeer::NC_F3 => 104, AlmacenPeer::NC_F4 => 105, AlmacenPeer::ND_F1 => 106, AlmacenPeer::ND_F2 => 107, AlmacenPeer::ND_F3 => 108, AlmacenPeer::ND_F4 => 109, AlmacenPeer::FACT_P1 => 110, AlmacenPeer::FACT_P2 => 111, AlmacenPeer::FACT_P3 => 112, AlmacenPeer::FACT_P4 => 113, AlmacenPeer::FACT_P5 => 114, AlmacenPeer::NDE_P1 => 115, AlmacenPeer::NDE_P2 => 116, AlmacenPeer::NDE_P3 => 117, AlmacenPeer::NDE_P4 => 118, AlmacenPeer::NDE_P5 => 119, AlmacenPeer::NC_P1 => 120, AlmacenPeer::NC_P2 => 121, AlmacenPeer::NC_P3 => 122, AlmacenPeer::NC_P4 => 123, AlmacenPeer::NC_P5 => 124, AlmacenPeer::ND_P1 => 125, AlmacenPeer::ND_P2 => 126, AlmacenPeer::ND_P3 => 127, AlmacenPeer::ND_P4 => 128, AlmacenPeer::ND_P5 => 129, AlmacenPeer::FACT_NUM2 => 130, AlmacenPeer::FACT_NUM3 => 131, AlmacenPeer::FACT_NUM4 => 132, AlmacenPeer::FACT_NUM5 => 133, AlmacenPeer::NDE_NUM2 => 134, AlmacenPeer::NDE_NUM3 => 135, AlmacenPeer::NDE_NUM4 => 136, AlmacenPeer::NDE_NUM5 => 137, AlmacenPeer::NC_NUM2 => 138, AlmacenPeer::NC_NUM3 => 139, AlmacenPeer::NC_NUM4 => 140, AlmacenPeer::NC_NUM5 => 141, AlmacenPeer::ND_NUM2 => 142, AlmacenPeer::ND_NUM3 => 143, AlmacenPeer::ND_NUM4 => 144, AlmacenPeer::ND_NUM5 => 145, AlmacenPeer::SERIE2 => 146, AlmacenPeer::SERIE3 => 147, AlmacenPeer::SERIE4 => 148, AlmacenPeer::SERIE5 => 149, AlmacenPeer::EMP_NUM => 150, AlmacenPeer::DMC_NUM => 151, AlmacenPeer::TAX_NUM => 152, AlmacenPeer::CED_NUM => 153, AlmacenPeer::ENT_NUM => 154, AlmacenPeer::CIE_NUM => 155, AlmacenPeer::ODP_NUM => 156, AlmacenPeer::REQ_NUM => 157, AlmacenPeer::DEV_NUM => 158, AlmacenPeer::EXP_NUM => 159, AlmacenPeer::INP_NUM => 160, AlmacenPeer::COST_NUM => 161, AlmacenPeer::PAR_NUM => 162, AlmacenPeer::ESC_NUM => 163, AlmacenPeer::PLA_NUM => 164, AlmacenPeer::MEN_NUM => 165, AlmacenPeer::DIST_NUM => 166, AlmacenPeer::EXP_NUMI => 167, ),
		BasePeer::TYPE_FIELDNAME => array ('co_alma' => 0, 'alma_des' => 1, 'nro_fact' => 2, 'num_fac_ini' => 3, 'num_fac_fin' => 4, 'campo1' => 5, 'campo2' => 6, 'campo3' => 7, 'campo4' => 8, 'co_us_in' => 9, 'fe_us_in' => 10, 'co_us_mo' => 11, 'fe_us_mo' => 12, 'co_us_el' => 13, 'fe_us_el' => 14, 'revisado' => 15, 'trasnfe' => 16, 'co_sucu' => 17, 'rowguid' => 18, 'nc_num' => 19, 'nd_num' => 20, 'ajus_num' => 21, 'tras_num' => 22, 'fisi_num' => 23, 'num_kit' => 24, 'genk_num' => 25, 'fact_num' => 26, 'ped_num' => 27, 'cotc_num' => 28, 'devc_num' => 29, 'nde_num' => 30, 'ndd_num' => 31, 'post_num' => 32, 'cfxg_num' => 33, 'chdv_num' => 34, 'giro_num' => 35, 'reten_num' => 36, 'cb_num' => 37, 'movb_num' => 38, 'movc_num' => 39, 'ordp_num' => 40, 'depc_num' => 41, 'comp_num' => 42, 'ord_num' => 43, 'cotp_num' => 44, 'devp_num' => 45, 'ndr_num' => 46, 'postcppnum' => 47, 'ccxg_num' => 48, 'chdvcppnum' => 49, 'girocppnum' => 50, 'nccpp_num' => 51, 'ndcpp_num' => 52, 'retencppnum' => 53, 'pg_num' => 54, 'aju_posm' => 55, 'aju_posa' => 56, 'aju_negm' => 57, 'aju_nega' => 58, 'aju_posmc' => 59, 'aju_posac' => 60, 'aju_negmc' => 61, 'aju_negac' => 62, 'pventa' => 63, 'turnosic' => 64, 'plv_num' => 65, 'plc_num' => 66, 'tabislr' => 67, 'imp_num' => 68, 'rma_cli' => 69, 'rma_prov' => 70, 'rma_entc' => 71, 'rma_entp' => 72, 'rma_regs' => 73, 'fact_s1' => 74, 'fact_s2' => 75, 'fact_s3' => 76, 'fact_s4' => 77, 'fact_s5' => 78, 'nde_s1' => 79, 'nde_s2' => 80, 'nde_s3' => 81, 'nde_s4' => 82, 'nde_s5' => 83, 'nc_s1' => 84, 'nc_s2' => 85, 'nc_s3' => 86, 'nc_s4' => 87, 'nc_s5' => 88, 'nd_s1' => 89, 'nd_s2' => 90, 'nd_s3' => 91, 'nd_s4' => 92, 'nd_s5' => 93, 'fact_f1' => 94, 'fact_f2' => 95, 'fact_f3' => 96, 'fact_f4' => 97, 'nde_f1' => 98, 'nde_f2' => 99, 'nde_f3' => 100, 'nde_f4' => 101, 'nc_f1' => 102, 'nc_f2' => 103, 'nc_f3' => 104, 'nc_f4' => 105, 'nd_f1' => 106, 'nd_f2' => 107, 'nd_f3' => 108, 'nd_f4' => 109, 'fact_p1' => 110, 'fact_p2' => 111, 'fact_p3' => 112, 'fact_p4' => 113, 'fact_p5' => 114, 'nde_p1' => 115, 'nde_p2' => 116, 'nde_p3' => 117, 'nde_p4' => 118, 'nde_p5' => 119, 'nc_p1' => 120, 'nc_p2' => 121, 'nc_p3' => 122, 'nc_p4' => 123, 'nc_p5' => 124, 'nd_p1' => 125, 'nd_p2' => 126, 'nd_p3' => 127, 'nd_p4' => 128, 'nd_p5' => 129, 'fact_num2' => 130, 'fact_num3' => 131, 'fact_num4' => 132, 'fact_num5' => 133, 'nde_num2' => 134, 'nde_num3' => 135, 'nde_num4' => 136, 'nde_num5' => 137, 'nc_num2' => 138, 'nc_num3' => 139, 'nc_num4' => 140, 'nc_num5' => 141, 'nd_num2' => 142, 'nd_num3' => 143, 'nd_num4' => 144, 'nd_num5' => 145, 'serie2' => 146, 'serie3' => 147, 'serie4' => 148, 'serie5' => 149, 'emp_num' => 150, 'dmc_num' => 151, 'tax_num' => 152, 'ced_num' => 153, 'ent_num' => 154, 'cie_num' => 155, 'odp_num' => 156, 'req_num' => 157, 'dev_num' => 158, 'exp_num' => 159, 'inp_num' => 160, 'cost_num' => 161, 'par_num' => 162, 'esc_num' => 163, 'pla_num' => 164, 'men_num' => 165, 'dist_num' => 166, 'exp_numi' => 167, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/AlmacenMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.AlmacenMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AlmacenPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(AlmacenPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AlmacenPeer::CO_ALMA);

		$criteria->addSelectColumn(AlmacenPeer::ALMA_DES);

		$criteria->addSelectColumn(AlmacenPeer::NRO_FACT);

		$criteria->addSelectColumn(AlmacenPeer::NUM_FAC_INI);

		$criteria->addSelectColumn(AlmacenPeer::NUM_FAC_FIN);

		$criteria->addSelectColumn(AlmacenPeer::CAMPO1);

		$criteria->addSelectColumn(AlmacenPeer::CAMPO2);

		$criteria->addSelectColumn(AlmacenPeer::CAMPO3);

		$criteria->addSelectColumn(AlmacenPeer::CAMPO4);

		$criteria->addSelectColumn(AlmacenPeer::CO_US_IN);

		$criteria->addSelectColumn(AlmacenPeer::FE_US_IN);

		$criteria->addSelectColumn(AlmacenPeer::CO_US_MO);

		$criteria->addSelectColumn(AlmacenPeer::FE_US_MO);

		$criteria->addSelectColumn(AlmacenPeer::CO_US_EL);

		$criteria->addSelectColumn(AlmacenPeer::FE_US_EL);

		$criteria->addSelectColumn(AlmacenPeer::REVISADO);

		$criteria->addSelectColumn(AlmacenPeer::TRASNFE);

		$criteria->addSelectColumn(AlmacenPeer::CO_SUCU);

		$criteria->addSelectColumn(AlmacenPeer::ROWGUID);

		$criteria->addSelectColumn(AlmacenPeer::NC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::ND_NUM);

		$criteria->addSelectColumn(AlmacenPeer::AJUS_NUM);

		$criteria->addSelectColumn(AlmacenPeer::TRAS_NUM);

		$criteria->addSelectColumn(AlmacenPeer::FISI_NUM);

		$criteria->addSelectColumn(AlmacenPeer::NUM_KIT);

		$criteria->addSelectColumn(AlmacenPeer::GENK_NUM);

		$criteria->addSelectColumn(AlmacenPeer::FACT_NUM);

		$criteria->addSelectColumn(AlmacenPeer::PED_NUM);

		$criteria->addSelectColumn(AlmacenPeer::COTC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::DEVC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::NDE_NUM);

		$criteria->addSelectColumn(AlmacenPeer::NDD_NUM);

		$criteria->addSelectColumn(AlmacenPeer::POST_NUM);

		$criteria->addSelectColumn(AlmacenPeer::CFXG_NUM);

		$criteria->addSelectColumn(AlmacenPeer::CHDV_NUM);

		$criteria->addSelectColumn(AlmacenPeer::GIRO_NUM);

		$criteria->addSelectColumn(AlmacenPeer::RETEN_NUM);

		$criteria->addSelectColumn(AlmacenPeer::CB_NUM);

		$criteria->addSelectColumn(AlmacenPeer::MOVB_NUM);

		$criteria->addSelectColumn(AlmacenPeer::MOVC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::ORDP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::DEPC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::COMP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::ORD_NUM);

		$criteria->addSelectColumn(AlmacenPeer::COTP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::DEVP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::NDR_NUM);

		$criteria->addSelectColumn(AlmacenPeer::POSTCPPNUM);

		$criteria->addSelectColumn(AlmacenPeer::CCXG_NUM);

		$criteria->addSelectColumn(AlmacenPeer::CHDVCPPNUM);

		$criteria->addSelectColumn(AlmacenPeer::GIROCPPNUM);

		$criteria->addSelectColumn(AlmacenPeer::NCCPP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::NDCPP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::RETENCPPNUM);

		$criteria->addSelectColumn(AlmacenPeer::PG_NUM);

		$criteria->addSelectColumn(AlmacenPeer::AJU_POSM);

		$criteria->addSelectColumn(AlmacenPeer::AJU_POSA);

		$criteria->addSelectColumn(AlmacenPeer::AJU_NEGM);

		$criteria->addSelectColumn(AlmacenPeer::AJU_NEGA);

		$criteria->addSelectColumn(AlmacenPeer::AJU_POSMC);

		$criteria->addSelectColumn(AlmacenPeer::AJU_POSAC);

		$criteria->addSelectColumn(AlmacenPeer::AJU_NEGMC);

		$criteria->addSelectColumn(AlmacenPeer::AJU_NEGAC);

		$criteria->addSelectColumn(AlmacenPeer::PVENTA);

		$criteria->addSelectColumn(AlmacenPeer::TURNOSIC);

		$criteria->addSelectColumn(AlmacenPeer::PLV_NUM);

		$criteria->addSelectColumn(AlmacenPeer::PLC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::TABISLR);

		$criteria->addSelectColumn(AlmacenPeer::IMP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::RMA_CLI);

		$criteria->addSelectColumn(AlmacenPeer::RMA_PROV);

		$criteria->addSelectColumn(AlmacenPeer::RMA_ENTC);

		$criteria->addSelectColumn(AlmacenPeer::RMA_ENTP);

		$criteria->addSelectColumn(AlmacenPeer::RMA_REGS);

		$criteria->addSelectColumn(AlmacenPeer::FACT_S1);

		$criteria->addSelectColumn(AlmacenPeer::FACT_S2);

		$criteria->addSelectColumn(AlmacenPeer::FACT_S3);

		$criteria->addSelectColumn(AlmacenPeer::FACT_S4);

		$criteria->addSelectColumn(AlmacenPeer::FACT_S5);

		$criteria->addSelectColumn(AlmacenPeer::NDE_S1);

		$criteria->addSelectColumn(AlmacenPeer::NDE_S2);

		$criteria->addSelectColumn(AlmacenPeer::NDE_S3);

		$criteria->addSelectColumn(AlmacenPeer::NDE_S4);

		$criteria->addSelectColumn(AlmacenPeer::NDE_S5);

		$criteria->addSelectColumn(AlmacenPeer::NC_S1);

		$criteria->addSelectColumn(AlmacenPeer::NC_S2);

		$criteria->addSelectColumn(AlmacenPeer::NC_S3);

		$criteria->addSelectColumn(AlmacenPeer::NC_S4);

		$criteria->addSelectColumn(AlmacenPeer::NC_S5);

		$criteria->addSelectColumn(AlmacenPeer::ND_S1);

		$criteria->addSelectColumn(AlmacenPeer::ND_S2);

		$criteria->addSelectColumn(AlmacenPeer::ND_S3);

		$criteria->addSelectColumn(AlmacenPeer::ND_S4);

		$criteria->addSelectColumn(AlmacenPeer::ND_S5);

		$criteria->addSelectColumn(AlmacenPeer::FACT_F1);

		$criteria->addSelectColumn(AlmacenPeer::FACT_F2);

		$criteria->addSelectColumn(AlmacenPeer::FACT_F3);

		$criteria->addSelectColumn(AlmacenPeer::FACT_F4);

		$criteria->addSelectColumn(AlmacenPeer::NDE_F1);

		$criteria->addSelectColumn(AlmacenPeer::NDE_F2);

		$criteria->addSelectColumn(AlmacenPeer::NDE_F3);

		$criteria->addSelectColumn(AlmacenPeer::NDE_F4);

		$criteria->addSelectColumn(AlmacenPeer::NC_F1);

		$criteria->addSelectColumn(AlmacenPeer::NC_F2);

		$criteria->addSelectColumn(AlmacenPeer::NC_F3);

		$criteria->addSelectColumn(AlmacenPeer::NC_F4);

		$criteria->addSelectColumn(AlmacenPeer::ND_F1);

		$criteria->addSelectColumn(AlmacenPeer::ND_F2);

		$criteria->addSelectColumn(AlmacenPeer::ND_F3);

		$criteria->addSelectColumn(AlmacenPeer::ND_F4);

		$criteria->addSelectColumn(AlmacenPeer::FACT_P1);

		$criteria->addSelectColumn(AlmacenPeer::FACT_P2);

		$criteria->addSelectColumn(AlmacenPeer::FACT_P3);

		$criteria->addSelectColumn(AlmacenPeer::FACT_P4);

		$criteria->addSelectColumn(AlmacenPeer::FACT_P5);

		$criteria->addSelectColumn(AlmacenPeer::NDE_P1);

		$criteria->addSelectColumn(AlmacenPeer::NDE_P2);

		$criteria->addSelectColumn(AlmacenPeer::NDE_P3);

		$criteria->addSelectColumn(AlmacenPeer::NDE_P4);

		$criteria->addSelectColumn(AlmacenPeer::NDE_P5);

		$criteria->addSelectColumn(AlmacenPeer::NC_P1);

		$criteria->addSelectColumn(AlmacenPeer::NC_P2);

		$criteria->addSelectColumn(AlmacenPeer::NC_P3);

		$criteria->addSelectColumn(AlmacenPeer::NC_P4);

		$criteria->addSelectColumn(AlmacenPeer::NC_P5);

		$criteria->addSelectColumn(AlmacenPeer::ND_P1);

		$criteria->addSelectColumn(AlmacenPeer::ND_P2);

		$criteria->addSelectColumn(AlmacenPeer::ND_P3);

		$criteria->addSelectColumn(AlmacenPeer::ND_P4);

		$criteria->addSelectColumn(AlmacenPeer::ND_P5);

		$criteria->addSelectColumn(AlmacenPeer::FACT_NUM2);

		$criteria->addSelectColumn(AlmacenPeer::FACT_NUM3);

		$criteria->addSelectColumn(AlmacenPeer::FACT_NUM4);

		$criteria->addSelectColumn(AlmacenPeer::FACT_NUM5);

		$criteria->addSelectColumn(AlmacenPeer::NDE_NUM2);

		$criteria->addSelectColumn(AlmacenPeer::NDE_NUM3);

		$criteria->addSelectColumn(AlmacenPeer::NDE_NUM4);

		$criteria->addSelectColumn(AlmacenPeer::NDE_NUM5);

		$criteria->addSelectColumn(AlmacenPeer::NC_NUM2);

		$criteria->addSelectColumn(AlmacenPeer::NC_NUM3);

		$criteria->addSelectColumn(AlmacenPeer::NC_NUM4);

		$criteria->addSelectColumn(AlmacenPeer::NC_NUM5);

		$criteria->addSelectColumn(AlmacenPeer::ND_NUM2);

		$criteria->addSelectColumn(AlmacenPeer::ND_NUM3);

		$criteria->addSelectColumn(AlmacenPeer::ND_NUM4);

		$criteria->addSelectColumn(AlmacenPeer::ND_NUM5);

		$criteria->addSelectColumn(AlmacenPeer::SERIE2);

		$criteria->addSelectColumn(AlmacenPeer::SERIE3);

		$criteria->addSelectColumn(AlmacenPeer::SERIE4);

		$criteria->addSelectColumn(AlmacenPeer::SERIE5);

		$criteria->addSelectColumn(AlmacenPeer::EMP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::DMC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::TAX_NUM);

		$criteria->addSelectColumn(AlmacenPeer::CED_NUM);

		$criteria->addSelectColumn(AlmacenPeer::ENT_NUM);

		$criteria->addSelectColumn(AlmacenPeer::CIE_NUM);

		$criteria->addSelectColumn(AlmacenPeer::ODP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::REQ_NUM);

		$criteria->addSelectColumn(AlmacenPeer::DEV_NUM);

		$criteria->addSelectColumn(AlmacenPeer::EXP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::INP_NUM);

		$criteria->addSelectColumn(AlmacenPeer::COST_NUM);

		$criteria->addSelectColumn(AlmacenPeer::PAR_NUM);

		$criteria->addSelectColumn(AlmacenPeer::ESC_NUM);

		$criteria->addSelectColumn(AlmacenPeer::PLA_NUM);

		$criteria->addSelectColumn(AlmacenPeer::MEN_NUM);

		$criteria->addSelectColumn(AlmacenPeer::DIST_NUM);

		$criteria->addSelectColumn(AlmacenPeer::EXP_NUMI);

	}

	const COUNT = 'COUNT(almacen.CO_ALMA)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT almacen.CO_ALMA)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlmacenPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlmacenPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AlmacenPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = AlmacenPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AlmacenPeer::populateObjects(AlmacenPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AlmacenPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AlmacenPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return AlmacenPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}


				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(AlmacenPeer::CO_ALMA);
			$selectCriteria->add(AlmacenPeer::CO_ALMA, $criteria->remove(AlmacenPeer::CO_ALMA), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(AlmacenPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(AlmacenPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Almacen) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AlmacenPeer::CO_ALMA, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Almacen $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AlmacenPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AlmacenPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(AlmacenPeer::DATABASE_NAME, AlmacenPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AlmacenPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(AlmacenPeer::DATABASE_NAME);

		$criteria->add(AlmacenPeer::CO_ALMA, $pk);


		$v = AlmacenPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(AlmacenPeer::CO_ALMA, $pks, Criteria::IN);
			$objs = AlmacenPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAlmacenPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/AlmacenMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.AlmacenMapBuilder');
}
