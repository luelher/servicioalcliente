<?php



class VendedorMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.VendedorMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('vendedor');
		$tMap->setPhpName('Vendedor');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_VEN', 'CoVen', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('TIPO', 'Tipo', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('VEN_DES', 'VenDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('CEDULA', 'Cedula', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('DIREC1', 'Direc1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('DIREC2', 'Direc2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('TELEFONOS', 'Telefonos', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('FECHA_REG', 'FechaReg', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CONDIC', 'Condic', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('COMISION', 'Comision', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMEN', 'Comen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('FUN_COB', 'FunCob', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('FUN_VEN', 'FunVen', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('COMISIONV', 'Comisionv', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FAC_ULT_VE', 'FacUltVe', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FEC_ULT_VE', 'FecUltVe', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('NET_ULT_VE', 'NetUltVe', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('CLI_ULT_VE', 'CliUltVe', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('CTA_CONTAB', 'CtaContab', 'string', CreoleTypes::CHAR, true, 20);

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

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('LOGIN', 'Login', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('PASSWORD', 'Password', 'string', CreoleTypes::CHAR, true, 50);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::CHAR, true, 40);

		$tMap->addColumn('PSW_M', 'PswM', 'string', CreoleTypes::CHAR, true, 20);

	} 
} 