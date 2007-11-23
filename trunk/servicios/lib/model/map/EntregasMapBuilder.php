<?php



class EntregasMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.EntregasMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('agenciaroyal');

		$tMap = $this->dbMap->addTable('entregas');
		$tMap->setPhpName('Entregas');

		$tMap->setUseIdGenerator(false);

		$tMap->addForeignKey('SERVICIOS_ID', 'ServiciosId', 'int', CreoleTypes::INTEGER, 'servicios', 'CLIENTE', true, null);

		$tMap->addColumn('OBSERVACION', 'Observacion', 'string', CreoleTypes::LONGVARCHAR, false, 1000);

		$tMap->addColumn('FECHA', 'Fecha', 'int', CreoleTypes::DATE, true, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 