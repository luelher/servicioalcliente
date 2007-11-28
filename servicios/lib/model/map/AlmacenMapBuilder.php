<?php



class AlmacenMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AlmacenMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('profit');

		$tMap = $this->dbMap->addTable('almacen');
		$tMap->setPhpName('Almacen');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_ALMA', 'CoAlma', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('ALMA_DES', 'AlmaDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('NRO_FACT', 'NroFact', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUM_FAC_INI', 'NumFacIni', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUM_FAC_FIN', 'NumFacFin', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CAMPO1', 'Campo1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CO_US_IN', 'CoUsIn', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_IN', 'FeUsIn', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CO_US_MO', 'CoUsMo', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_MO', 'FeUsMo', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CO_US_EL', 'CoUsEl', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_EL', 'FeUsEl', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('NC_NUM', 'NcNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_NUM', 'NdNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJUS_NUM', 'AjusNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRAS_NUM', 'TrasNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FISI_NUM', 'FisiNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUM_KIT', 'NumKit', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('GENK_NUM', 'GenkNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_NUM', 'FactNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PED_NUM', 'PedNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COTC_NUM', 'CotcNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEVC_NUM', 'DevcNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_NUM', 'NdeNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDD_NUM', 'NddNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('POST_NUM', 'PostNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CFXG_NUM', 'CfxgNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CHDV_NUM', 'ChdvNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('GIRO_NUM', 'GiroNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RETEN_NUM', 'RetenNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CB_NUM', 'CbNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('MOVB_NUM', 'MovbNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('MOVC_NUM', 'MovcNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ORDP_NUM', 'OrdpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEPC_NUM', 'DepcNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COMP_NUM', 'CompNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ORD_NUM', 'OrdNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COTP_NUM', 'CotpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEVP_NUM', 'DevpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDR_NUM', 'NdrNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('POSTCPPNUM', 'Postcppnum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CCXG_NUM', 'CcxgNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CHDVCPPNUM', 'Chdvcppnum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('GIROCPPNUM', 'Girocppnum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NCCPP_NUM', 'NccppNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDCPP_NUM', 'NdcppNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RETENCPPNUM', 'Retencppnum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PG_NUM', 'PgNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_POSM', 'AjuPosm', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_POSA', 'AjuPosa', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_NEGM', 'AjuNegm', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_NEGA', 'AjuNega', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_POSMC', 'AjuPosmc', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_POSAC', 'AjuPosac', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_NEGMC', 'AjuNegmc', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AJU_NEGAC', 'AjuNegac', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PVENTA', 'Pventa', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TURNOSIC', 'Turnosic', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PLV_NUM', 'PlvNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PLC_NUM', 'PlcNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TABISLR', 'Tabislr', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('IMP_NUM', 'ImpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RMA_CLI', 'RmaCli', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RMA_PROV', 'RmaProv', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RMA_ENTC', 'RmaEntc', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RMA_ENTP', 'RmaEntp', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RMA_REGS', 'RmaRegs', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_S1', 'FactS1', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('FACT_S2', 'FactS2', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('FACT_S3', 'FactS3', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('FACT_S4', 'FactS4', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('FACT_S5', 'FactS5', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NDE_S1', 'NdeS1', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NDE_S2', 'NdeS2', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NDE_S3', 'NdeS3', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NDE_S4', 'NdeS4', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NDE_S5', 'NdeS5', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NC_S1', 'NcS1', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NC_S2', 'NcS2', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NC_S3', 'NcS3', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NC_S4', 'NcS4', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('NC_S5', 'NcS5', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('ND_S1', 'NdS1', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('ND_S2', 'NdS2', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('ND_S3', 'NdS3', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('ND_S4', 'NdS4', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('ND_S5', 'NdS5', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('FACT_F1', 'FactF1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_F2', 'FactF2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_F3', 'FactF3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_F4', 'FactF4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_F1', 'NdeF1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_F2', 'NdeF2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_F3', 'NdeF3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_F4', 'NdeF4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_F1', 'NcF1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_F2', 'NcF2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_F3', 'NcF3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_F4', 'NcF4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_F1', 'NdF1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_F2', 'NdF2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_F3', 'NdF3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_F4', 'NdF4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_P1', 'FactP1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_P2', 'FactP2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_P3', 'FactP3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_P4', 'FactP4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_P5', 'FactP5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_P1', 'NdeP1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_P2', 'NdeP2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_P3', 'NdeP3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_P4', 'NdeP4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_P5', 'NdeP5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_P1', 'NcP1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_P2', 'NcP2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_P3', 'NcP3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_P4', 'NcP4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_P5', 'NcP5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_P1', 'NdP1', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_P2', 'NdP2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_P3', 'NdP3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_P4', 'NdP4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_P5', 'NdP5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_NUM2', 'FactNum2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_NUM3', 'FactNum3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_NUM4', 'FactNum4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FACT_NUM5', 'FactNum5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_NUM2', 'NdeNum2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_NUM3', 'NdeNum3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_NUM4', 'NdeNum4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NDE_NUM5', 'NdeNum5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_NUM2', 'NcNum2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_NUM3', 'NcNum3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_NUM4', 'NcNum4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NC_NUM5', 'NcNum5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_NUM2', 'NdNum2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_NUM3', 'NdNum3', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_NUM4', 'NdNum4', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ND_NUM5', 'NdNum5', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SERIE2', 'Serie2', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('SERIE3', 'Serie3', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('SERIE4', 'Serie4', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('SERIE5', 'Serie5', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('EMP_NUM', 'EmpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DMC_NUM', 'DmcNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TAX_NUM', 'TaxNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CED_NUM', 'CedNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ENT_NUM', 'EntNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CIE_NUM', 'CieNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ODP_NUM', 'OdpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('REQ_NUM', 'ReqNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEV_NUM', 'DevNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('EXP_NUM', 'ExpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('INP_NUM', 'InpNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COST_NUM', 'CostNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PAR_NUM', 'ParNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ESC_NUM', 'EscNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PLA_NUM', 'PlaNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('MEN_NUM', 'MenNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DIST_NUM', 'DistNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('EXP_NUMI', 'ExpNumi', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 