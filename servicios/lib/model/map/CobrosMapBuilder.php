<?php



class CobrosMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CobrosMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cobros');
		$tMap->setPhpName('Cobros');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('COB_NUM', 'CobNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RECIBO', 'Recibo', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addForeignKey('CO_CLI', 'CoCli', 'string', CreoleTypes::CHAR, 'clientes', 'CO_CLI', true, 10);

		$tMap->addForeignKey('CO_VEN', 'CoVen', 'string', CreoleTypes::CHAR, 'vendedor', 'CO_VEN', true, 6);

		$tMap->addColumn('FEC_COB', 'FecCob', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('ANULADO', 'Anulado', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('MONTO', 'Monto', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('DPPAGO', 'Dppago', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONT_NCR', 'MontNcr', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('NCR', 'Ncr', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TCOMI_PORC', 'TcomiPorc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TCOMI_LINE', 'TcomiLine', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TCOMI_ART', 'TcomiArt', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TCOMI_CONC', 'TcomiConc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FECCOM', 'Feccom', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('TASA', 'Tasa', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addForeignKey('MONEDA', 'Moneda', 'string', CreoleTypes::CHAR, 'moneda', 'CO_MONE', true, 6);

		$tMap->addColumn('NUMCOM', 'Numcom', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('CAMPO1', 'Campo1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO5', 'Campo5', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO6', 'Campo6', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO7', 'Campo7', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO8', 'Campo8', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CO_US_IN', 'CoUsIn', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_IN', 'FeUsIn', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CO_US_MO', 'CoUsMo', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_MO', 'FeUsMo', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CO_US_EL', 'CoUsEl', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_EL', 'FeUsEl', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('RECARGO', 'Recargo', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('ADEL_NUM', 'AdelNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addForeignKey('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, 'almacen', 'CO_ALMA', true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('DESCRIP', 'Descrip', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('NUM_DEV', 'NumDev', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEVDINERO', 'Devdinero', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('NUM_TURNO', 'NumTurno', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AUX01', 'Aux01', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('AUX02', 'Aux02', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('ORIGEN', 'Origen', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('ORIGEN_D', 'OrigenD', 'string', CreoleTypes::CHAR, false, 20);

	} 
} 