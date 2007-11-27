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

		$tMap->addPrimaryKey('CO_CLI', 'CoCli', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addForeignKey('TIPO', 'Tipo', 'string', CreoleTypes::CHAR, 'tipo_cli', 'TIP_CLI', true, 6);

		$tMap->addColumn('CLI_DES', 'CliDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('DIREC1', 'Direc1', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('DIREC2', 'Direc2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('TELEFONOS', 'Telefonos', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('FAX', 'Fax', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('INACTIVO', 'Inactivo', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('RESPONS', 'Respons', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('FECHA_REG', 'FechaReg', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('PUNTAJE', 'Puntaje', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SALDO', 'Saldo', 'double', CreoleTypes::FLOAT, true, 8);

		$tMap->addColumn('SALDO_INI', 'SaldoIni', 'double', CreoleTypes::FLOAT, true, 8);

		$tMap->addColumn('FAC_ULT_VE', 'FacUltVe', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FEC_ULT_VE', 'FecUltVe', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('NET_ULT_VE', 'NetUltVe', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONT_CRE', 'MontCre', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PLAZ_PAG', 'PlazPag', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DESC_PPAGO', 'DescPpago', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addForeignKey('CO_ZON', 'CoZon', 'string', CreoleTypes::CHAR, 'zona', 'CO_ZON', true, 6);

		$tMap->addForeignKey('CO_SEG', 'CoSeg', 'string', CreoleTypes::CHAR, 'segmento', 'CO_SEG', true, 6);

		$tMap->addForeignKey('CO_VEN', 'CoVen', 'string', CreoleTypes::CHAR, 'vendedor', 'CO_VEN', true, 6);

		$tMap->addColumn('DESC_GLOB', 'DescGlob', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('HORAR_CAJA', 'HorarCaja', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('FRECU_VIST', 'FrecuVist', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('LUNES', 'Lunes', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('MARTES', 'Martes', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('MIERCOLES', 'Miercoles', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('JUEVES', 'Jueves', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('VIERNES', 'Viernes', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('SABADO', 'Sabado', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('DOMINGO', 'Domingo', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('DIR_ENT2', 'DirEnt2', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('TIPO_IVA', 'TipoIva', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('IVA', 'Iva', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RIF', 'Rif', 'string', CreoleTypes::CHAR, true, 18);

		$tMap->addColumn('CONTRIBU', 'Contribu', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('NIT', 'Nit', 'string', CreoleTypes::CHAR, true, 18);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addForeignKey('CO_INGR', 'CoIngr', 'string', CreoleTypes::CHAR, 'cta_ingr', 'CO_INGR', true, 6);

		$tMap->addColumn('CAMPO1', 'Campo1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO5', 'Campo5', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO6', 'Campo6', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO7', 'Campo7', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO8', 'Campo8', 'string', CreoleTypes::VARCHAR, true, 60);

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

		$tMap->addColumn('JURIDICO', 'Juridico', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('TIPO_ADI', 'TipoAdi', 'double', CreoleTypes::NUMERIC, true, 3);

		$tMap->addColumn('MATRIZ', 'Matriz', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('CO_TAB', 'CoTab', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TIPO_PER', 'TipoPer', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('SERIALP', 'Serialp', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addColumn('VALIDO', 'Valido', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('ROW_ID', 'RowId', 'string', CreoleTypes::BINARY, true, null);

		$tMap->addColumn('ESTADO', 'Estado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CO_PAIS', 'CoPais', 'string', CreoleTypes::VARCHAR, true, 6);

		$tMap->addColumn('CIUDAD', 'Ciudad', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('ZIP', 'Zip', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('LOGIN', 'Login', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('PASSWORD', 'Password', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('WEBSITE', 'Website', 'string', CreoleTypes::VARCHAR, true, 200);

		$tMap->addColumn('SALESTAX', 'Salestax', 'string', CreoleTypes::CHAR, true, 8);

		$tMap->addColumn('CONTRIBU_E', 'ContribuE', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('PORC_ESP', 'PorcEsp', 'double', CreoleTypes::FLOAT, true, 8);

	} 
} 