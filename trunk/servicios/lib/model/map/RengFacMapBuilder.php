<?php



class RengFacMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.RengFacMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('reng_fac');
		$tMap->setPhpName('RengFac');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('FACT_NUM', 'FactNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('RENG_NUM', 'RengNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('TIPO_DOC', 'TipoDoc', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('RENG_DOC', 'RengDoc', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUM_DOC', 'NumDoc', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('CO_ART', 'CoArt', 'string', CreoleTypes::CHAR, 'art', 'CO_ART', true, 30);

		$tMap->addForeignKey('CO_ALMA', 'CoAlma', 'string', CreoleTypes::CHAR, 'sub_alma', 'CO_SUB', true, 6);

		$tMap->addColumn('TOTAL_ART', 'TotalArt', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('STOTAL_ART', 'StotalArt', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PENDIENTE', 'Pendiente', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('UNI_VENTA', 'UniVenta', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('PREC_VTA', 'PrecVta', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PORC_DESC', 'PorcDesc', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addForeignKey('TIPO_IMP', 'TipoImp', 'string', CreoleTypes::CHAR, 'tabulado', 'TIPO', true, 1);

		$tMap->addColumn('ISV', 'Isv', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RENG_NETO', 'RengNeto', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COS_PRO_UN', 'CosProUn', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ULT_COS_UN', 'UltCosUn', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ULT_COS_OM', 'UltCosOm', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COS_PRO_OM', 'CosProOm', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TOTAL_DEV', 'TotalDev', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_DEV', 'MontoDev', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PREC_VTA2', 'PrecVta2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ANULADO', 'Anulado', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('DES_ART', 'DesArt', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('SELECCION', 'Seleccion', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('CANT_IMP', 'CantImp', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('TOTAL_UNI', 'TotalUni', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MON_ILC', 'MonIlc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('OTROS', 'Otros', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('NRO_LOTE', 'NroLote', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('FEC_LOTE', 'FecLote', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('PENDIENTE2', 'Pendiente2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TIPO_DOC2', 'TipoDoc2', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('RENG_DOC2', 'RengDoc2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUM_DOC2', 'NumDoc2', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TIPO_PREC', 'TipoPrec', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CO_ALMA2', 'CoAlma2', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('AUX01', 'Aux01', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('AUX02', 'Aux02', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('CANT_PROD', 'CantProd', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('IMP_PROD', 'ImpProd', 'double', CreoleTypes::DECIMAL, true, 20);

	} 
} 