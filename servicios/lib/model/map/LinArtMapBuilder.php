<?php



class LinArtMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.LinArtMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('lin_art');
		$tMap->setPhpName('LinArt');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_LIN', 'CoLin', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('LIN_DES', 'LinDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

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

		$tMap->addColumn('CO_IMUN', 'CoImun', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('CO_RETEN', 'CoReten', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('COMI_LIN', 'ComiLin', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMI_LIN2', 'ComiLin2', 'double', CreoleTypes::NUMERIC, true, 8);

		$tMap->addColumn('ROW_ID', 'RowId', 'string', CreoleTypes::BINARY, true, null);

		$tMap->addColumn('VA', 'Va', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('I_LIN_DES', 'ILinDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('MOVIL', 'Movil', 'boolean', CreoleTypes::BOOLEAN, true, null);

	} 
} 