<?php



class ProvMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ProvMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('prov');
		$tMap->setPhpName('Prov');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_PROV', 'CoProv', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('PROV_DES', 'ProvDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addForeignKey('CO_SEG', 'CoSeg', 'string', CreoleTypes::CHAR, 'segmento', 'CO_SEG', true, 6);

		$tMap->addForeignKey('CO_ZON', 'CoZon', 'string', CreoleTypes::CHAR, 'zona', 'CO_ZON', true, 6);

		$tMap->addColumn('INACTIVO', 'Inactivo', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('PRODUCTOS', 'Productos', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('DIREC1', 'Direc1', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('DIREC2', 'Direc2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('TELEFONOS', 'Telefonos', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('FAX', 'Fax', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('RESPONS', 'Respons', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('FECHA_REG', 'FechaReg', 'int', CreoleTypes::DATE, true, null);

		$tMap->addForeignKey('TIPO', 'Tipo', 'string', CreoleTypes::CHAR, 'tipo_pro', 'TIP_PRO', true, 6);

		$tMap->addColumn('COM_ULT_CO', 'ComUltCo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FEC_ULT_CO', 'FecUltCo', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('NET_ULT_CO', 'NetUltCo', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SALDO', 'Saldo', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SALDO_INI', 'SaldoIni', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONT_CRE', 'MontCre', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PLAZ_PAG', 'PlazPag', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DESC_PPAGO', 'DescPpago', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('DESC_GLOB', 'DescGlob', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('TIPO_IVA', 'TipoIva', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('IVA', 'Iva', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RIF', 'Rif', 'string', CreoleTypes::CHAR, true, 18);

		$tMap->addColumn('NACIONAL', 'Nacional', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('NIT', 'Nit', 'string', CreoleTypes::CHAR, true, 18);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addForeignKey('CO_INGR', 'CoIngr', 'string', CreoleTypes::CHAR, 'cta_ingr', 'CO_INGR', true, 6);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('CAMPO1', 'Campo1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO5', 'Campo5', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO6', 'Campo6', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO7', 'Campo7', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO8', 'Campo8', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CO_US_IN', 'CoUsIn', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_IN', 'FeUsIn', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('CO_US_MO', 'CoUsMo', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_MO', 'FeUsMo', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('CO_US_EL', 'CoUsEl', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_EL', 'FeUsEl', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('JURIDICO', 'Juridico', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('TIPO_ADI', 'TipoAdi', 'double', CreoleTypes::NUMERIC, true, 3);

		$tMap->addColumn('MATRIZ', 'Matriz', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('CO_TAB', 'CoTab', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TIPO_PER', 'TipoPer', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CO_PAIS', 'CoPais', 'string', CreoleTypes::VARCHAR, true, 6);

		$tMap->addColumn('CIUDAD', 'Ciudad', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('ZIP', 'Zip', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('WEBSITE', 'Website', 'string', CreoleTypes::CHAR, true, 200);

		$tMap->addColumn('FORMTYPE', 'Formtype', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addColumn('TAXID', 'Taxid', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('CONTRIBU_E', 'ContribuE', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('PORC_ESP', 'PorcEsp', 'double', CreoleTypes::FLOAT, true, 8);

	} 
} 