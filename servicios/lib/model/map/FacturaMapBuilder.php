<?php



class FacturaMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FacturaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('factura');
		$tMap->setPhpName('Factura');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('FACT_NUM', 'FactNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CONTRIB', 'Contrib', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('NOMBRE', 'Nombre', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('RIF', 'Rif', 'string', CreoleTypes::CHAR, true, 18);

		$tMap->addColumn('NIT', 'Nit', 'string', CreoleTypes::CHAR, true, 18);

		$tMap->addColumn('NUM_CONTROL', 'NumControl', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('DESCRIP', 'Descrip', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('SALDO', 'Saldo', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_EMIS', 'FecEmis', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('FEC_VENC', 'FecVenc', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addForeignKey('CO_CLI', 'CoCli', 'string', CreoleTypes::CHAR, 'clientes', 'CO_CLI', true, 10);

		$tMap->addForeignKey('CO_VEN', 'CoVen', 'string', CreoleTypes::CHAR, 'vendedor', 'CO_VEN', true, 6);

		$tMap->addForeignKey('CO_TRAN', 'CoTran', 'string', CreoleTypes::CHAR, 'transpor', 'CO_TRAN', true, 6);

		$tMap->addColumn('DIR_ENT', 'DirEnt', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addForeignKey('FORMA_PAG', 'FormaPag', 'string', CreoleTypes::CHAR, 'condicio', 'CO_COND', true, 6);

		$tMap->addColumn('TOT_BRUTO', 'TotBruto', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TOT_NETO', 'TotNeto', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('GLOB_DESC', 'GlobDesc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TOT_RECA', 'TotReca', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PORC_GDESC', 'PorcGdesc', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('PORC_RECA', 'PorcReca', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('TOTAL_UC', 'TotalUc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TOTAL_CP', 'TotalCp', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TOT_FLETE', 'TotFlete', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_DEV', 'MontoDev', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TOTKLU', 'Totklu', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ANULADA', 'Anulada', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('IMPRESA', 'Impresa', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('IVA', 'Iva', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('IVA_DEV', 'IvaDev', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FECCOM', 'Feccom', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('NUMCOM', 'Numcom', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TASA', 'Tasa', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addForeignKey('MONEDA', 'Moneda', 'string', CreoleTypes::CHAR, 'moneda', 'CO_MONE', true, 6);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('VUELTO', 'Vuelto', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SERIALES', 'Seriales', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TASAG', 'Tasag', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TASAG10', 'Tasag10', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TASAG20', 'Tasag20', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('CAMPO1', 'Campo1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO5', 'Campo5', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO6', 'Campo6', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO7', 'Campo7', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO8', 'Campo8', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CO_US_IN', 'CoUsIn', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_IN', 'FeUsIn', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CO_US_MO', 'CoUsMo', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_MO', 'FeUsMo', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CO_US_EL', 'CoUsEl', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_EL', 'FeUsEl', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('NUMCON', 'Numcon', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addForeignKey('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, 'almacen', 'CO_ALMA', true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('MON_ILC', 'MonIlc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('OTROS1', 'Otros1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('OTROS2', 'Otros2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('OTROS3', 'Otros3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('NUM_TURNO', 'NumTurno', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AUX01', 'Aux01', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('AUX02', 'Aux02', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SALESTAX', 'Salestax', 'string', CreoleTypes::CHAR, true, 8);

		$tMap->addColumn('ORIGEN', 'Origen', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('ORIGEN_D', 'OrigenD', 'string', CreoleTypes::CHAR, false, 20);

		$tMap->addColumn('FEC_REG', 'FecReg', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('TELEFONO', 'Telefono', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('STA_PROD', 'StaProd', 'string', CreoleTypes::CHAR, true, 1);

	} 
} 