<?php



class TabuladoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TabuladoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tabulado');
		$tMap->setPhpName('Tabulado');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('TIPO', 'Tipo', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('DESCRIPCIO', 'Descripcio', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('PORC_VENT', 'PorcVent', 'double', CreoleTypes::DECIMAL, true, 12);

		$tMap->addColumn('PORC_COMP', 'PorcComp', 'double', CreoleTypes::DECIMAL, true, 12);

		$tMap->addColumn('PORC_CXS', 'PorcCxs', 'double', CreoleTypes::DECIMAL, true, 12);

		$tMap->addColumn('PORC_OTRO', 'PorcOtro', 'double', CreoleTypes::DECIMAL, true, 12);

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

	} 
} 