<?php


abstract class BaseFacturaPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'factura';

	
	const CLASS_DEFAULT = 'lib.model.Factura';

	
	const NUM_COLUMNS = 75;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const FACT_NUM = 'factura.FACT_NUM';

	
	const CONTRIB = 'factura.CONTRIB';

	
	const NOMBRE = 'factura.NOMBRE';

	
	const RIF = 'factura.RIF';

	
	const NIT = 'factura.NIT';

	
	const NUM_CONTROL = 'factura.NUM_CONTROL';

	
	const STATUS = 'factura.STATUS';

	
	const COMENTARIO = 'factura.COMENTARIO';

	
	const DESCRIP = 'factura.DESCRIP';

	
	const SALDO = 'factura.SALDO';

	
	const FEC_EMIS = 'factura.FEC_EMIS';

	
	const FEC_VENC = 'factura.FEC_VENC';

	
	const CO_CLI = 'factura.CO_CLI';

	
	const CO_VEN = 'factura.CO_VEN';

	
	const CO_TRAN = 'factura.CO_TRAN';

	
	const DIR_ENT = 'factura.DIR_ENT';

	
	const FORMA_PAG = 'factura.FORMA_PAG';

	
	const TOT_BRUTO = 'factura.TOT_BRUTO';

	
	const TOT_NETO = 'factura.TOT_NETO';

	
	const GLOB_DESC = 'factura.GLOB_DESC';

	
	const TOT_RECA = 'factura.TOT_RECA';

	
	const PORC_GDESC = 'factura.PORC_GDESC';

	
	const PORC_RECA = 'factura.PORC_RECA';

	
	const TOTAL_UC = 'factura.TOTAL_UC';

	
	const TOTAL_CP = 'factura.TOTAL_CP';

	
	const TOT_FLETE = 'factura.TOT_FLETE';

	
	const MONTO_DEV = 'factura.MONTO_DEV';

	
	const TOTKLU = 'factura.TOTKLU';

	
	const ANULADA = 'factura.ANULADA';

	
	const IMPRESA = 'factura.IMPRESA';

	
	const IVA = 'factura.IVA';

	
	const IVA_DEV = 'factura.IVA_DEV';

	
	const FECCOM = 'factura.FECCOM';

	
	const NUMCOM = 'factura.NUMCOM';

	
	const TASA = 'factura.TASA';

	
	const MONEDA = 'factura.MONEDA';

	
	const DIS_CEN = 'factura.DIS_CEN';

	
	const VUELTO = 'factura.VUELTO';

	
	const SERIALES = 'factura.SERIALES';

	
	const TASAG = 'factura.TASAG';

	
	const TASAG10 = 'factura.TASAG10';

	
	const TASAG20 = 'factura.TASAG20';

	
	const CAMPO1 = 'factura.CAMPO1';

	
	const CAMPO2 = 'factura.CAMPO2';

	
	const CAMPO3 = 'factura.CAMPO3';

	
	const CAMPO4 = 'factura.CAMPO4';

	
	const CAMPO5 = 'factura.CAMPO5';

	
	const CAMPO6 = 'factura.CAMPO6';

	
	const CAMPO7 = 'factura.CAMPO7';

	
	const CAMPO8 = 'factura.CAMPO8';

	
	const CO_US_IN = 'factura.CO_US_IN';

	
	const FE_US_IN = 'factura.FE_US_IN';

	
	const CO_US_MO = 'factura.CO_US_MO';

	
	const FE_US_MO = 'factura.FE_US_MO';

	
	const CO_US_EL = 'factura.CO_US_EL';

	
	const FE_US_EL = 'factura.FE_US_EL';

	
	const REVISADO = 'factura.REVISADO';

	
	const TRASNFE = 'factura.TRASNFE';

	
	const NUMCON = 'factura.NUMCON';

	
	const CO_SUCU = 'factura.CO_SUCU';

	
	const ROWGUID = 'factura.ROWGUID';

	
	const MON_ILC = 'factura.MON_ILC';

	
	const OTROS1 = 'factura.OTROS1';

	
	const OTROS2 = 'factura.OTROS2';

	
	const OTROS3 = 'factura.OTROS3';

	
	const NUM_TURNO = 'factura.NUM_TURNO';

	
	const AUX01 = 'factura.AUX01';

	
	const AUX02 = 'factura.AUX02';

	
	const ID = 'factura.ID';

	
	const SALESTAX = 'factura.SALESTAX';

	
	const ORIGEN = 'factura.ORIGEN';

	
	const ORIGEN_D = 'factura.ORIGEN_D';

	
	const FEC_REG = 'factura.FEC_REG';

	
	const TELEFONO = 'factura.TELEFONO';

	
	const STA_PROD = 'factura.STA_PROD';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('FactNum', 'Contrib', 'Nombre', 'Rif', 'Nit', 'NumControl', 'Status', 'Comentario', 'Descrip', 'Saldo', 'FecEmis', 'FecVenc', 'CoCli', 'CoVen', 'CoTran', 'DirEnt', 'FormaPag', 'TotBruto', 'TotNeto', 'GlobDesc', 'TotReca', 'PorcGdesc', 'PorcReca', 'TotalUc', 'TotalCp', 'TotFlete', 'MontoDev', 'Totklu', 'Anulada', 'Impresa', 'Iva', 'IvaDev', 'Feccom', 'Numcom', 'Tasa', 'Moneda', 'DisCen', 'Vuelto', 'Seriales', 'Tasag', 'Tasag10', 'Tasag20', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'Numcon', 'CoSucu', 'Rowguid', 'MonIlc', 'Otros1', 'Otros2', 'Otros3', 'NumTurno', 'Aux01', 'Aux02', 'Id', 'Salestax', 'Origen', 'OrigenD', 'FecReg', 'Telefono', 'StaProd', ),
		BasePeer::TYPE_COLNAME => array (FacturaPeer::FACT_NUM, FacturaPeer::CONTRIB, FacturaPeer::NOMBRE, FacturaPeer::RIF, FacturaPeer::NIT, FacturaPeer::NUM_CONTROL, FacturaPeer::STATUS, FacturaPeer::COMENTARIO, FacturaPeer::DESCRIP, FacturaPeer::SALDO, FacturaPeer::FEC_EMIS, FacturaPeer::FEC_VENC, FacturaPeer::CO_CLI, FacturaPeer::CO_VEN, FacturaPeer::CO_TRAN, FacturaPeer::DIR_ENT, FacturaPeer::FORMA_PAG, FacturaPeer::TOT_BRUTO, FacturaPeer::TOT_NETO, FacturaPeer::GLOB_DESC, FacturaPeer::TOT_RECA, FacturaPeer::PORC_GDESC, FacturaPeer::PORC_RECA, FacturaPeer::TOTAL_UC, FacturaPeer::TOTAL_CP, FacturaPeer::TOT_FLETE, FacturaPeer::MONTO_DEV, FacturaPeer::TOTKLU, FacturaPeer::ANULADA, FacturaPeer::IMPRESA, FacturaPeer::IVA, FacturaPeer::IVA_DEV, FacturaPeer::FECCOM, FacturaPeer::NUMCOM, FacturaPeer::TASA, FacturaPeer::MONEDA, FacturaPeer::DIS_CEN, FacturaPeer::VUELTO, FacturaPeer::SERIALES, FacturaPeer::TASAG, FacturaPeer::TASAG10, FacturaPeer::TASAG20, FacturaPeer::CAMPO1, FacturaPeer::CAMPO2, FacturaPeer::CAMPO3, FacturaPeer::CAMPO4, FacturaPeer::CAMPO5, FacturaPeer::CAMPO6, FacturaPeer::CAMPO7, FacturaPeer::CAMPO8, FacturaPeer::CO_US_IN, FacturaPeer::FE_US_IN, FacturaPeer::CO_US_MO, FacturaPeer::FE_US_MO, FacturaPeer::CO_US_EL, FacturaPeer::FE_US_EL, FacturaPeer::REVISADO, FacturaPeer::TRASNFE, FacturaPeer::NUMCON, FacturaPeer::CO_SUCU, FacturaPeer::ROWGUID, FacturaPeer::MON_ILC, FacturaPeer::OTROS1, FacturaPeer::OTROS2, FacturaPeer::OTROS3, FacturaPeer::NUM_TURNO, FacturaPeer::AUX01, FacturaPeer::AUX02, FacturaPeer::ID, FacturaPeer::SALESTAX, FacturaPeer::ORIGEN, FacturaPeer::ORIGEN_D, FacturaPeer::FEC_REG, FacturaPeer::TELEFONO, FacturaPeer::STA_PROD, ),
		BasePeer::TYPE_FIELDNAME => array ('fact_num', 'contrib', 'nombre', 'rif', 'nit', 'num_control', 'status', 'comentario', 'descrip', 'saldo', 'fec_emis', 'fec_venc', 'co_cli', 'co_ven', 'co_tran', 'dir_ent', 'forma_pag', 'tot_bruto', 'tot_neto', 'glob_desc', 'tot_reca', 'porc_gdesc', 'porc_reca', 'total_uc', 'total_cp', 'tot_flete', 'monto_dev', 'totklu', 'anulada', 'impresa', 'iva', 'iva_dev', 'feccom', 'numcom', 'tasa', 'moneda', 'dis_cen', 'vuelto', 'seriales', 'tasag', 'tasag10', 'tasag20', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'numcon', 'co_sucu', 'rowguid', 'mon_ilc', 'otros1', 'otros2', 'otros3', 'num_turno', 'aux01', 'aux02', 'ID', 'salestax', 'origen', 'origen_d', 'fec_reg', 'telefono', 'sta_prod', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('FactNum' => 0, 'Contrib' => 1, 'Nombre' => 2, 'Rif' => 3, 'Nit' => 4, 'NumControl' => 5, 'Status' => 6, 'Comentario' => 7, 'Descrip' => 8, 'Saldo' => 9, 'FecEmis' => 10, 'FecVenc' => 11, 'CoCli' => 12, 'CoVen' => 13, 'CoTran' => 14, 'DirEnt' => 15, 'FormaPag' => 16, 'TotBruto' => 17, 'TotNeto' => 18, 'GlobDesc' => 19, 'TotReca' => 20, 'PorcGdesc' => 21, 'PorcReca' => 22, 'TotalUc' => 23, 'TotalCp' => 24, 'TotFlete' => 25, 'MontoDev' => 26, 'Totklu' => 27, 'Anulada' => 28, 'Impresa' => 29, 'Iva' => 30, 'IvaDev' => 31, 'Feccom' => 32, 'Numcom' => 33, 'Tasa' => 34, 'Moneda' => 35, 'DisCen' => 36, 'Vuelto' => 37, 'Seriales' => 38, 'Tasag' => 39, 'Tasag10' => 40, 'Tasag20' => 41, 'Campo1' => 42, 'Campo2' => 43, 'Campo3' => 44, 'Campo4' => 45, 'Campo5' => 46, 'Campo6' => 47, 'Campo7' => 48, 'Campo8' => 49, 'CoUsIn' => 50, 'FeUsIn' => 51, 'CoUsMo' => 52, 'FeUsMo' => 53, 'CoUsEl' => 54, 'FeUsEl' => 55, 'Revisado' => 56, 'Trasnfe' => 57, 'Numcon' => 58, 'CoSucu' => 59, 'Rowguid' => 60, 'MonIlc' => 61, 'Otros1' => 62, 'Otros2' => 63, 'Otros3' => 64, 'NumTurno' => 65, 'Aux01' => 66, 'Aux02' => 67, 'Id' => 68, 'Salestax' => 69, 'Origen' => 70, 'OrigenD' => 71, 'FecReg' => 72, 'Telefono' => 73, 'StaProd' => 74, ),
		BasePeer::TYPE_COLNAME => array (FacturaPeer::FACT_NUM => 0, FacturaPeer::CONTRIB => 1, FacturaPeer::NOMBRE => 2, FacturaPeer::RIF => 3, FacturaPeer::NIT => 4, FacturaPeer::NUM_CONTROL => 5, FacturaPeer::STATUS => 6, FacturaPeer::COMENTARIO => 7, FacturaPeer::DESCRIP => 8, FacturaPeer::SALDO => 9, FacturaPeer::FEC_EMIS => 10, FacturaPeer::FEC_VENC => 11, FacturaPeer::CO_CLI => 12, FacturaPeer::CO_VEN => 13, FacturaPeer::CO_TRAN => 14, FacturaPeer::DIR_ENT => 15, FacturaPeer::FORMA_PAG => 16, FacturaPeer::TOT_BRUTO => 17, FacturaPeer::TOT_NETO => 18, FacturaPeer::GLOB_DESC => 19, FacturaPeer::TOT_RECA => 20, FacturaPeer::PORC_GDESC => 21, FacturaPeer::PORC_RECA => 22, FacturaPeer::TOTAL_UC => 23, FacturaPeer::TOTAL_CP => 24, FacturaPeer::TOT_FLETE => 25, FacturaPeer::MONTO_DEV => 26, FacturaPeer::TOTKLU => 27, FacturaPeer::ANULADA => 28, FacturaPeer::IMPRESA => 29, FacturaPeer::IVA => 30, FacturaPeer::IVA_DEV => 31, FacturaPeer::FECCOM => 32, FacturaPeer::NUMCOM => 33, FacturaPeer::TASA => 34, FacturaPeer::MONEDA => 35, FacturaPeer::DIS_CEN => 36, FacturaPeer::VUELTO => 37, FacturaPeer::SERIALES => 38, FacturaPeer::TASAG => 39, FacturaPeer::TASAG10 => 40, FacturaPeer::TASAG20 => 41, FacturaPeer::CAMPO1 => 42, FacturaPeer::CAMPO2 => 43, FacturaPeer::CAMPO3 => 44, FacturaPeer::CAMPO4 => 45, FacturaPeer::CAMPO5 => 46, FacturaPeer::CAMPO6 => 47, FacturaPeer::CAMPO7 => 48, FacturaPeer::CAMPO8 => 49, FacturaPeer::CO_US_IN => 50, FacturaPeer::FE_US_IN => 51, FacturaPeer::CO_US_MO => 52, FacturaPeer::FE_US_MO => 53, FacturaPeer::CO_US_EL => 54, FacturaPeer::FE_US_EL => 55, FacturaPeer::REVISADO => 56, FacturaPeer::TRASNFE => 57, FacturaPeer::NUMCON => 58, FacturaPeer::CO_SUCU => 59, FacturaPeer::ROWGUID => 60, FacturaPeer::MON_ILC => 61, FacturaPeer::OTROS1 => 62, FacturaPeer::OTROS2 => 63, FacturaPeer::OTROS3 => 64, FacturaPeer::NUM_TURNO => 65, FacturaPeer::AUX01 => 66, FacturaPeer::AUX02 => 67, FacturaPeer::ID => 68, FacturaPeer::SALESTAX => 69, FacturaPeer::ORIGEN => 70, FacturaPeer::ORIGEN_D => 71, FacturaPeer::FEC_REG => 72, FacturaPeer::TELEFONO => 73, FacturaPeer::STA_PROD => 74, ),
		BasePeer::TYPE_FIELDNAME => array ('fact_num' => 0, 'contrib' => 1, 'nombre' => 2, 'rif' => 3, 'nit' => 4, 'num_control' => 5, 'status' => 6, 'comentario' => 7, 'descrip' => 8, 'saldo' => 9, 'fec_emis' => 10, 'fec_venc' => 11, 'co_cli' => 12, 'co_ven' => 13, 'co_tran' => 14, 'dir_ent' => 15, 'forma_pag' => 16, 'tot_bruto' => 17, 'tot_neto' => 18, 'glob_desc' => 19, 'tot_reca' => 20, 'porc_gdesc' => 21, 'porc_reca' => 22, 'total_uc' => 23, 'total_cp' => 24, 'tot_flete' => 25, 'monto_dev' => 26, 'totklu' => 27, 'anulada' => 28, 'impresa' => 29, 'iva' => 30, 'iva_dev' => 31, 'feccom' => 32, 'numcom' => 33, 'tasa' => 34, 'moneda' => 35, 'dis_cen' => 36, 'vuelto' => 37, 'seriales' => 38, 'tasag' => 39, 'tasag10' => 40, 'tasag20' => 41, 'campo1' => 42, 'campo2' => 43, 'campo3' => 44, 'campo4' => 45, 'campo5' => 46, 'campo6' => 47, 'campo7' => 48, 'campo8' => 49, 'co_us_in' => 50, 'fe_us_in' => 51, 'co_us_mo' => 52, 'fe_us_mo' => 53, 'co_us_el' => 54, 'fe_us_el' => 55, 'revisado' => 56, 'trasnfe' => 57, 'numcon' => 58, 'co_sucu' => 59, 'rowguid' => 60, 'mon_ilc' => 61, 'otros1' => 62, 'otros2' => 63, 'otros3' => 64, 'num_turno' => 65, 'aux01' => 66, 'aux02' => 67, 'ID' => 68, 'salestax' => 69, 'origen' => 70, 'origen_d' => 71, 'fec_reg' => 72, 'telefono' => 73, 'sta_prod' => 74, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/FacturaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.FacturaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = FacturaPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(FacturaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(FacturaPeer::FACT_NUM);

		$criteria->addSelectColumn(FacturaPeer::CONTRIB);

		$criteria->addSelectColumn(FacturaPeer::NOMBRE);

		$criteria->addSelectColumn(FacturaPeer::RIF);

		$criteria->addSelectColumn(FacturaPeer::NIT);

		$criteria->addSelectColumn(FacturaPeer::NUM_CONTROL);

		$criteria->addSelectColumn(FacturaPeer::STATUS);

		$criteria->addSelectColumn(FacturaPeer::COMENTARIO);

		$criteria->addSelectColumn(FacturaPeer::DESCRIP);

		$criteria->addSelectColumn(FacturaPeer::SALDO);

		$criteria->addSelectColumn(FacturaPeer::FEC_EMIS);

		$criteria->addSelectColumn(FacturaPeer::FEC_VENC);

		$criteria->addSelectColumn(FacturaPeer::CO_CLI);

		$criteria->addSelectColumn(FacturaPeer::CO_VEN);

		$criteria->addSelectColumn(FacturaPeer::CO_TRAN);

		$criteria->addSelectColumn(FacturaPeer::DIR_ENT);

		$criteria->addSelectColumn(FacturaPeer::FORMA_PAG);

		$criteria->addSelectColumn(FacturaPeer::TOT_BRUTO);

		$criteria->addSelectColumn(FacturaPeer::TOT_NETO);

		$criteria->addSelectColumn(FacturaPeer::GLOB_DESC);

		$criteria->addSelectColumn(FacturaPeer::TOT_RECA);

		$criteria->addSelectColumn(FacturaPeer::PORC_GDESC);

		$criteria->addSelectColumn(FacturaPeer::PORC_RECA);

		$criteria->addSelectColumn(FacturaPeer::TOTAL_UC);

		$criteria->addSelectColumn(FacturaPeer::TOTAL_CP);

		$criteria->addSelectColumn(FacturaPeer::TOT_FLETE);

		$criteria->addSelectColumn(FacturaPeer::MONTO_DEV);

		$criteria->addSelectColumn(FacturaPeer::TOTKLU);

		$criteria->addSelectColumn(FacturaPeer::ANULADA);

		$criteria->addSelectColumn(FacturaPeer::IMPRESA);

		$criteria->addSelectColumn(FacturaPeer::IVA);

		$criteria->addSelectColumn(FacturaPeer::IVA_DEV);

		$criteria->addSelectColumn(FacturaPeer::FECCOM);

		$criteria->addSelectColumn(FacturaPeer::NUMCOM);

		$criteria->addSelectColumn(FacturaPeer::TASA);

		$criteria->addSelectColumn(FacturaPeer::MONEDA);

		$criteria->addSelectColumn(FacturaPeer::DIS_CEN);

		$criteria->addSelectColumn(FacturaPeer::VUELTO);

		$criteria->addSelectColumn(FacturaPeer::SERIALES);

		$criteria->addSelectColumn(FacturaPeer::TASAG);

		$criteria->addSelectColumn(FacturaPeer::TASAG10);

		$criteria->addSelectColumn(FacturaPeer::TASAG20);

		$criteria->addSelectColumn(FacturaPeer::CAMPO1);

		$criteria->addSelectColumn(FacturaPeer::CAMPO2);

		$criteria->addSelectColumn(FacturaPeer::CAMPO3);

		$criteria->addSelectColumn(FacturaPeer::CAMPO4);

		$criteria->addSelectColumn(FacturaPeer::CAMPO5);

		$criteria->addSelectColumn(FacturaPeer::CAMPO6);

		$criteria->addSelectColumn(FacturaPeer::CAMPO7);

		$criteria->addSelectColumn(FacturaPeer::CAMPO8);

		$criteria->addSelectColumn(FacturaPeer::CO_US_IN);

		$criteria->addSelectColumn(FacturaPeer::FE_US_IN);

		$criteria->addSelectColumn(FacturaPeer::CO_US_MO);

		$criteria->addSelectColumn(FacturaPeer::FE_US_MO);

		$criteria->addSelectColumn(FacturaPeer::CO_US_EL);

		$criteria->addSelectColumn(FacturaPeer::FE_US_EL);

		$criteria->addSelectColumn(FacturaPeer::REVISADO);

		$criteria->addSelectColumn(FacturaPeer::TRASNFE);

		$criteria->addSelectColumn(FacturaPeer::NUMCON);

		$criteria->addSelectColumn(FacturaPeer::CO_SUCU);

		$criteria->addSelectColumn(FacturaPeer::ROWGUID);

		$criteria->addSelectColumn(FacturaPeer::MON_ILC);

		$criteria->addSelectColumn(FacturaPeer::OTROS1);

		$criteria->addSelectColumn(FacturaPeer::OTROS2);

		$criteria->addSelectColumn(FacturaPeer::OTROS3);

		$criteria->addSelectColumn(FacturaPeer::NUM_TURNO);

		$criteria->addSelectColumn(FacturaPeer::AUX01);

		$criteria->addSelectColumn(FacturaPeer::AUX02);

		$criteria->addSelectColumn(FacturaPeer::ID);

		$criteria->addSelectColumn(FacturaPeer::SALESTAX);

		$criteria->addSelectColumn(FacturaPeer::ORIGEN);

		$criteria->addSelectColumn(FacturaPeer::ORIGEN_D);

		$criteria->addSelectColumn(FacturaPeer::FEC_REG);

		$criteria->addSelectColumn(FacturaPeer::TELEFONO);

		$criteria->addSelectColumn(FacturaPeer::STA_PROD);

	}

	const COUNT = 'COUNT(factura.FACT_NUM)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT factura.FACT_NUM)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = FacturaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return FacturaPeer::populateObjects(FacturaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			FacturaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = FacturaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinClientes(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinVendedor(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTranspor(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinCondicio(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinMoneda(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAlmacen(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinClientes(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ClientesPeer::addSelectColumns($c);

		$c->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFactura($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinVendedor(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		VendedorPeer::addSelectColumns($c);

		$c->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = VendedorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getVendedor(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFactura($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTranspor(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TransporPeer::addSelectColumns($c);

		$c->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TransporPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTranspor(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFactura($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinCondicio(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CondicioPeer::addSelectColumns($c);

		$c->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = CondicioPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getCondicio(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFactura($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinMoneda(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MonedaPeer::addSelectColumns($c);

		$c->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MonedaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getMoneda(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFactura($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAlmacen(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AlmacenPeer::addSelectColumns($c);

		$c->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AlmacenPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getAlmacen(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFactura($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$criteria->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$criteria->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol2 = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		TransporPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TransporPeer::NUM_COLUMNS;

		CondicioPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CondicioPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$c->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$c->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFactura($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1);
			}


					
			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFactura($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initFacturas();
				$obj3->addFactura($obj1);
			}


					
			$omClass = TransporPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTranspor(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFactura($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initFacturas();
				$obj4->addFactura($obj1);
			}


					
			$omClass = CondicioPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCondicio(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFactura($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initFacturas();
				$obj5->addFactura($obj1);
			}


					
			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getMoneda(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFactura($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initFacturas();
				$obj6->addFactura($obj1);
			}


					
			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7 = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getAlmacen(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addFactura($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj7->initFacturas();
				$obj7->addFactura($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptClientes(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$criteria->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$criteria->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptVendedor(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$criteria->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$criteria->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTranspor(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$criteria->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptCondicio(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$criteria->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptMoneda(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$criteria->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$criteria->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptAlmacen(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FacturaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FacturaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$criteria->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$criteria->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$rs = FacturaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptClientes(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol2 = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		VendedorPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + VendedorPeer::NUM_COLUMNS;

		TransporPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TransporPeer::NUM_COLUMNS;

		CondicioPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CondicioPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$c->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$c->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getVendedor(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1);
			}

			$omClass = TransporPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTranspor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initFacturas();
				$obj3->addFactura($obj1);
			}

			$omClass = CondicioPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCondicio(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initFacturas();
				$obj4->addFactura($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMoneda(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initFacturas();
				$obj5->addFactura($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getAlmacen(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initFacturas();
				$obj6->addFactura($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptVendedor(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol2 = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		TransporPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TransporPeer::NUM_COLUMNS;

		CondicioPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CondicioPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$c->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$c->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1);
			}

			$omClass = TransporPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTranspor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initFacturas();
				$obj3->addFactura($obj1);
			}

			$omClass = CondicioPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCondicio(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initFacturas();
				$obj4->addFactura($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMoneda(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initFacturas();
				$obj5->addFactura($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getAlmacen(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initFacturas();
				$obj6->addFactura($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTranspor(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol2 = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		CondicioPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CondicioPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$c->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initFacturas();
				$obj3->addFactura($obj1);
			}

			$omClass = CondicioPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCondicio(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initFacturas();
				$obj4->addFactura($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMoneda(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initFacturas();
				$obj5->addFactura($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getAlmacen(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initFacturas();
				$obj6->addFactura($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptCondicio(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol2 = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		TransporPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TransporPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$c->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initFacturas();
				$obj3->addFactura($obj1);
			}

			$omClass = TransporPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTranspor(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initFacturas();
				$obj4->addFactura($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMoneda(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initFacturas();
				$obj5->addFactura($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getAlmacen(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initFacturas();
				$obj6->addFactura($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptMoneda(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol2 = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		TransporPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TransporPeer::NUM_COLUMNS;

		CondicioPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CondicioPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$c->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$c->addJoin(FacturaPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initFacturas();
				$obj3->addFactura($obj1);
			}

			$omClass = TransporPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTranspor(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initFacturas();
				$obj4->addFactura($obj1);
			}

			$omClass = CondicioPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCondicio(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initFacturas();
				$obj5->addFactura($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getAlmacen(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initFacturas();
				$obj6->addFactura($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptAlmacen(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FacturaPeer::addSelectColumns($c);
		$startcol2 = (FacturaPeer::NUM_COLUMNS - FacturaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		TransporPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TransporPeer::NUM_COLUMNS;

		CondicioPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CondicioPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + MonedaPeer::NUM_COLUMNS;

		$c->addJoin(FacturaPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(FacturaPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(FacturaPeer::CO_TRAN, TransporPeer::CO_TRAN);

		$c->addJoin(FacturaPeer::FORMA_PAG, CondicioPeer::CO_COND);

		$c->addJoin(FacturaPeer::MONEDA, MonedaPeer::CO_MONE);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FacturaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initFacturas();
				$obj2->addFactura($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initFacturas();
				$obj3->addFactura($obj1);
			}

			$omClass = TransporPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTranspor(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initFacturas();
				$obj4->addFactura($obj1);
			}

			$omClass = CondicioPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCondicio(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initFacturas();
				$obj5->addFactura($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getMoneda(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFactura($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initFacturas();
				$obj6->addFactura($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return FacturaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}


				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(FacturaPeer::FACT_NUM);
			$selectCriteria->add(FacturaPeer::FACT_NUM, $criteria->remove(FacturaPeer::FACT_NUM), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(FacturaPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(FacturaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Factura) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(FacturaPeer::FACT_NUM, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Factura $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(FacturaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(FacturaPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(FacturaPeer::DATABASE_NAME, FacturaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = FacturaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(FacturaPeer::DATABASE_NAME);

		$criteria->add(FacturaPeer::FACT_NUM, $pk);


		$v = FacturaPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(FacturaPeer::FACT_NUM, $pks, Criteria::IN);
			$objs = FacturaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseFacturaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/FacturaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.FacturaMapBuilder');
}
