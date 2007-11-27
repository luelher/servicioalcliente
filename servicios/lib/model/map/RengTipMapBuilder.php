<?php



class RengTipMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.RengTipMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('reng_tip');
		$tMap->setPhpName('RengTip');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('COB_NUM', 'CobNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('RENG_NUM', 'RengNum', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TIP_COB', 'TipCob', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('MOVI', 'Movi', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUM_DOC', 'NumDoc', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('MONT_DOC', 'MontDoc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONT_TMP', 'MontTmp', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONEDA', 'Moneda', 'string', CreoleTypes::CHAR, true, 8);

		$tMap->addColumn('BANCO', 'Banco', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('COD_CAJA', 'CodCaja', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('DES_CAJA', 'DesCaja', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('FEC_CHEQ', 'FecCheq', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('NOMBRE_BAN', 'NombreBan', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('NUMERO', 'Numero', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('DEVUELTO', 'Devuelto', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('OPERADOR', 'Operador', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('CLAVE', 'Clave', 'string', CreoleTypes::CHAR, true, 6);

	} 
} 