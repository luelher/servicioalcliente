<?php



class RengCobMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.RengCobMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('reng_cob');
		$tMap->setPhpName('RengCob');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('COB_NUM', 'CobNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('RENG_NUM', 'RengNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TP_DOC_COB', 'TpDocCob', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('DOC_NUM', 'DocNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NETO', 'Neto', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('NETO_TMP', 'NetoTmp', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('DPPAGO', 'Dppago', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('DPPAGO_TMP', 'DppagoTmp', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RENG_NCR', 'RengNcr', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CO_VEN', 'CoVen', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('COMIS1', 'Comis1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS2', 'Comis2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS3', 'Comis3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS4', 'Comis4', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SIGN_AJU_C', 'SignAjuC', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('PORC_AJU_C', 'PorcAjuC', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('POR_COB', 'PorCob', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMI_COB', 'ComiCob', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONT_COB', 'MontCob', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SINO_PAGO', 'SinoPago', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('SINO_RETEN', 'SinoReten', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('MONTO_DPPAGO', 'MontoDppago', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_RETEN', 'MontoReten', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('IMP_PAGO', 'ImpPago', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_OBJ', 'MontoObj', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ISV', 'Isv', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('NRO_FACT', 'NroFact', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('MONEDA', 'Moneda', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('TASA', 'Tasa', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('NUMCON', 'Numcon', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('SUSTRAEN', 'Sustraen', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('CO_ISLR', 'CoIslr', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('FEC_EMIS', 'FecEmis', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('FEC_VENC', 'FecVenc', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('COMIS5', 'Comis5', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS6', 'Comis6', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FACT_IVA', 'FactIva', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RET_IVA', 'RetIva', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PORC_RETN', 'PorcRetn', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PORC_DESC', 'PorcDesc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('AUX01', 'Aux01', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('AUX02', 'Aux02', 'string', CreoleTypes::VARCHAR, true, 30);

	} 
} 