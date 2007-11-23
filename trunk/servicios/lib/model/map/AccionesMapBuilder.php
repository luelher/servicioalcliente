<?php



class AccionesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AccionesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('acciones');
		$tMap->setPhpName('Acciones');

		$tMap->setUseIdGenerator(false);

		$tMap->addForeignKey('SERVICIOS_ID', 'ServiciosId', 'int', CreoleTypes::INTEGER, 'servicios', 'CLIENTE', true, null);

		$tMap->addColumn('ACCION', 'Accion', 'string', CreoleTypes::LONGVARCHAR, true, 1000);

		$tMap->addColumn('FECHA', 'Fecha', 'int', CreoleTypes::DATE, true, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 