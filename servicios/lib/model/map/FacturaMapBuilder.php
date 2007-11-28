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

		$tMap->addColumn('FEC_EMIS', 'FecEmis', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('FEC_VENC', 'FecVenc', 'string', CreoleTypes::VARCHAR, true, null);

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

		$tMap->addColumn('NUMCOM', 'Numcom', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TASA', 'Tasa', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('VUELTO', 'Vuelto', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SERIALES', 'Seriales', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TASAG', 'Tasag', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TASAG10', 'Tasag10', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TASAG20', 'Tasag20', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 