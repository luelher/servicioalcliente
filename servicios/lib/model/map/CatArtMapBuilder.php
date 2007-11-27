<?php



class CatArtMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CatArtMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cat_art');
		$tMap->setPhpName('CatArt');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_CAT', 'CoCat', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('CAT_DES', 'CatDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('CAMPO1', 'Campo1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CO_US_IN', 'CoUsIn', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_IN', 'FeUsIn', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CO_US_MO', 'CoUsMo', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_MO', 'FeUsMo', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CO_US_EL', 'CoUsEl', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_EL', 'FeUsEl', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('CO_IMUN', 'CoImun', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('CO_RETEN', 'CoReten', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('ROW_ID', 'RowId', 'string', CreoleTypes::BINARY, true, null);

		$tMap->addColumn('MOVIL', 'Movil', 'boolean', CreoleTypes::BOOLEAN, true, null);

	} 
} 