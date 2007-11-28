<?php



class ServiciosMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ServiciosMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('servicios');
		$tMap->setPhpName('Servicios');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CLIENTE', 'Cliente', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('FACTURA', 'Factura', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ARTICULO', 'Articulo', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addColumn('SITUACION', 'Situacion', 'string', CreoleTypes::LONGVARCHAR, true, 1000);

		$tMap->addColumn('OBSERVACION', 'Observacion', 'string', CreoleTypes::LONGVARCHAR, true, 1000);

		$tMap->addColumn('FECHA', 'Fecha', 'int', CreoleTypes::DATE, true, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 