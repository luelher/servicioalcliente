<?php



class ClientesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ClientesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('clientes');
		$tMap->setPhpName('Clientes');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CO_CLI', 'CoCli', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CLI_DES', 'CliDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('DIREC1', 'Direc1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('TELEFONOS', 'Telefonos', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 