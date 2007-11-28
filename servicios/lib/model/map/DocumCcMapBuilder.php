<?php



class DocumCcMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.DocumCcMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('docum_cc');
		$tMap->setPhpName('DocumCc');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('TIPO_DOC', 'TipoDoc', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addPrimaryKey('NRO_DOC', 'NroDoc', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ANULADO', 'Anulado', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('MOVI', 'Movi', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AUT', 'Aut', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('NUM_CONTROL', 'NumControl', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('CO_CLI', 'CoCli', 'string', CreoleTypes::CHAR, 'clientes', 'CO_CLI', true, 10);

		$tMap->addColumn('CONTRIB', 'Contrib', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('FEC_EMIS', 'FecEmis', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('FEC_VENC', 'FecVenc', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('OBSERVA', 'Observa', 'string', CreoleTypes::VARCHAR, true, 120);

		$tMap->addColumn('DOC_ORIG', 'DocOrig', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('NRO_ORIG', 'NroOrig', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CO_BAN', 'CoBan', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('NRO_CHE', 'NroChe', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addForeignKey('CO_VEN', 'CoVen', 'string', CreoleTypes::CHAR, 'vendedor', 'CO_VEN', true, 6);

		$tMap->addForeignKey('TIPO', 'Tipo', 'string', CreoleTypes::CHAR, 'tabulado', 'TIPO', true, 1);

		$tMap->addColumn('TASA', 'Tasa', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addForeignKey('MONEDA', 'Moneda', 'string', CreoleTypes::CHAR, 'moneda', 'CO_MONE', true, 6);

		$tMap->addColumn('MONTO_IMP', 'MontoImp', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_GEN', 'MontoGen', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_A1', 'MontoA1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_A2', 'MontoA2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_BRU', 'MontoBru', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('DESCUENTOS', 'Descuentos', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('MONTO_DES', 'MontoDes', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RECARGO', 'Recargo', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('MONTO_REC', 'MontoRec', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_OTR', 'MontoOtr', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONTO_NET', 'MontoNet', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SALDO', 'Saldo', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FECCOM', 'Feccom', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('NUMCOM', 'Numcom', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('COMIS1', 'Comis1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS2', 'Comis2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS3', 'Comis3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS4', 'Comis4', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ADICIONAL', 'Adicional', 'double', CreoleTypes::DECIMAL, true, 20);

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

		$tMap->addColumn('NUMCON', 'Numcon', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addForeignKey('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, 'almacen', 'CO_ALMA', true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('MON_ILC', 'MonIlc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('OTROS1', 'Otros1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('OTROS2', 'Otros2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('OTROS3', 'Otros3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RENG_SI', 'RengSi', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('COMIS5', 'Comis5', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('COMIS6', 'Comis6', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ROW_ID', 'RowId', 'string', CreoleTypes::BINARY, true, null);

		$tMap->addColumn('AUX01', 'Aux01', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('AUX02', 'Aux02', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('SALESTAX', 'Salestax', 'string', CreoleTypes::CHAR, true, 8);

		$tMap->addColumn('ORIGEN', 'Origen', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('ORIGEN_D', 'OrigenD', 'string', CreoleTypes::CHAR, false, 20);

		$tMap->addColumn('FEC_REG', 'FecReg', 'string', CreoleTypes::VARCHAR, true, null);

	} 
} 