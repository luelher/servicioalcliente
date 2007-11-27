<?php


abstract class BaseCobrosPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'cobros';

	
	const CLASS_DEFAULT = 'lib.model.Cobros';

	
	const NUM_COLUMNS = 47;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const COB_NUM = 'cobros.COB_NUM';

	
	const RECIBO = 'cobros.RECIBO';

	
	const CO_CLI = 'cobros.CO_CLI';

	
	const CO_VEN = 'cobros.CO_VEN';

	
	const FEC_COB = 'cobros.FEC_COB';

	
	const ANULADO = 'cobros.ANULADO';

	
	const MONTO = 'cobros.MONTO';

	
	const DPPAGO = 'cobros.DPPAGO';

	
	const MONT_NCR = 'cobros.MONT_NCR';

	
	const NCR = 'cobros.NCR';

	
	const TCOMI_PORC = 'cobros.TCOMI_PORC';

	
	const TCOMI_LINE = 'cobros.TCOMI_LINE';

	
	const TCOMI_ART = 'cobros.TCOMI_ART';

	
	const TCOMI_CONC = 'cobros.TCOMI_CONC';

	
	const FECCOM = 'cobros.FECCOM';

	
	const TASA = 'cobros.TASA';

	
	const MONEDA = 'cobros.MONEDA';

	
	const NUMCOM = 'cobros.NUMCOM';

	
	const DIS_CEN = 'cobros.DIS_CEN';

	
	const CAMPO1 = 'cobros.CAMPO1';

	
	const CAMPO2 = 'cobros.CAMPO2';

	
	const CAMPO3 = 'cobros.CAMPO3';

	
	const CAMPO4 = 'cobros.CAMPO4';

	
	const CAMPO5 = 'cobros.CAMPO5';

	
	const CAMPO6 = 'cobros.CAMPO6';

	
	const CAMPO7 = 'cobros.CAMPO7';

	
	const CAMPO8 = 'cobros.CAMPO8';

	
	const CO_US_IN = 'cobros.CO_US_IN';

	
	const FE_US_IN = 'cobros.FE_US_IN';

	
	const CO_US_MO = 'cobros.CO_US_MO';

	
	const FE_US_MO = 'cobros.FE_US_MO';

	
	const CO_US_EL = 'cobros.CO_US_EL';

	
	const FE_US_EL = 'cobros.FE_US_EL';

	
	const RECARGO = 'cobros.RECARGO';

	
	const ADEL_NUM = 'cobros.ADEL_NUM';

	
	const REVISADO = 'cobros.REVISADO';

	
	const TRASNFE = 'cobros.TRASNFE';

	
	const CO_SUCU = 'cobros.CO_SUCU';

	
	const ROWGUID = 'cobros.ROWGUID';

	
	const DESCRIP = 'cobros.DESCRIP';

	
	const NUM_DEV = 'cobros.NUM_DEV';

	
	const DEVDINERO = 'cobros.DEVDINERO';

	
	const NUM_TURNO = 'cobros.NUM_TURNO';

	
	const AUX01 = 'cobros.AUX01';

	
	const AUX02 = 'cobros.AUX02';

	
	const ORIGEN = 'cobros.ORIGEN';

	
	const ORIGEN_D = 'cobros.ORIGEN_D';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CobNum', 'Recibo', 'CoCli', 'CoVen', 'FecCob', 'Anulado', 'Monto', 'Dppago', 'MontNcr', 'Ncr', 'TcomiPorc', 'TcomiLine', 'TcomiArt', 'TcomiConc', 'Feccom', 'Tasa', 'Moneda', 'Numcom', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Recargo', 'AdelNum', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'Descrip', 'NumDev', 'Devdinero', 'NumTurno', 'Aux01', 'Aux02', 'Origen', 'OrigenD', ),
		BasePeer::TYPE_COLNAME => array (CobrosPeer::COB_NUM, CobrosPeer::RECIBO, CobrosPeer::CO_CLI, CobrosPeer::CO_VEN, CobrosPeer::FEC_COB, CobrosPeer::ANULADO, CobrosPeer::MONTO, CobrosPeer::DPPAGO, CobrosPeer::MONT_NCR, CobrosPeer::NCR, CobrosPeer::TCOMI_PORC, CobrosPeer::TCOMI_LINE, CobrosPeer::TCOMI_ART, CobrosPeer::TCOMI_CONC, CobrosPeer::FECCOM, CobrosPeer::TASA, CobrosPeer::MONEDA, CobrosPeer::NUMCOM, CobrosPeer::DIS_CEN, CobrosPeer::CAMPO1, CobrosPeer::CAMPO2, CobrosPeer::CAMPO3, CobrosPeer::CAMPO4, CobrosPeer::CAMPO5, CobrosPeer::CAMPO6, CobrosPeer::CAMPO7, CobrosPeer::CAMPO8, CobrosPeer::CO_US_IN, CobrosPeer::FE_US_IN, CobrosPeer::CO_US_MO, CobrosPeer::FE_US_MO, CobrosPeer::CO_US_EL, CobrosPeer::FE_US_EL, CobrosPeer::RECARGO, CobrosPeer::ADEL_NUM, CobrosPeer::REVISADO, CobrosPeer::TRASNFE, CobrosPeer::CO_SUCU, CobrosPeer::ROWGUID, CobrosPeer::DESCRIP, CobrosPeer::NUM_DEV, CobrosPeer::DEVDINERO, CobrosPeer::NUM_TURNO, CobrosPeer::AUX01, CobrosPeer::AUX02, CobrosPeer::ORIGEN, CobrosPeer::ORIGEN_D, ),
		BasePeer::TYPE_FIELDNAME => array ('cob_num', 'recibo', 'co_cli', 'co_ven', 'fec_cob', 'anulado', 'monto', 'dppago', 'mont_ncr', 'ncr', 'tcomi_porc', 'tcomi_line', 'tcomi_art', 'tcomi_conc', 'feccom', 'tasa', 'moneda', 'numcom', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'recargo', 'adel_num', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'descrip', 'num_dev', 'devdinero', 'num_turno', 'aux01', 'aux02', 'origen', 'origen_d', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CobNum' => 0, 'Recibo' => 1, 'CoCli' => 2, 'CoVen' => 3, 'FecCob' => 4, 'Anulado' => 5, 'Monto' => 6, 'Dppago' => 7, 'MontNcr' => 8, 'Ncr' => 9, 'TcomiPorc' => 10, 'TcomiLine' => 11, 'TcomiArt' => 12, 'TcomiConc' => 13, 'Feccom' => 14, 'Tasa' => 15, 'Moneda' => 16, 'Numcom' => 17, 'DisCen' => 18, 'Campo1' => 19, 'Campo2' => 20, 'Campo3' => 21, 'Campo4' => 22, 'Campo5' => 23, 'Campo6' => 24, 'Campo7' => 25, 'Campo8' => 26, 'CoUsIn' => 27, 'FeUsIn' => 28, 'CoUsMo' => 29, 'FeUsMo' => 30, 'CoUsEl' => 31, 'FeUsEl' => 32, 'Recargo' => 33, 'AdelNum' => 34, 'Revisado' => 35, 'Trasnfe' => 36, 'CoSucu' => 37, 'Rowguid' => 38, 'Descrip' => 39, 'NumDev' => 40, 'Devdinero' => 41, 'NumTurno' => 42, 'Aux01' => 43, 'Aux02' => 44, 'Origen' => 45, 'OrigenD' => 46, ),
		BasePeer::TYPE_COLNAME => array (CobrosPeer::COB_NUM => 0, CobrosPeer::RECIBO => 1, CobrosPeer::CO_CLI => 2, CobrosPeer::CO_VEN => 3, CobrosPeer::FEC_COB => 4, CobrosPeer::ANULADO => 5, CobrosPeer::MONTO => 6, CobrosPeer::DPPAGO => 7, CobrosPeer::MONT_NCR => 8, CobrosPeer::NCR => 9, CobrosPeer::TCOMI_PORC => 10, CobrosPeer::TCOMI_LINE => 11, CobrosPeer::TCOMI_ART => 12, CobrosPeer::TCOMI_CONC => 13, CobrosPeer::FECCOM => 14, CobrosPeer::TASA => 15, CobrosPeer::MONEDA => 16, CobrosPeer::NUMCOM => 17, CobrosPeer::DIS_CEN => 18, CobrosPeer::CAMPO1 => 19, CobrosPeer::CAMPO2 => 20, CobrosPeer::CAMPO3 => 21, CobrosPeer::CAMPO4 => 22, CobrosPeer::CAMPO5 => 23, CobrosPeer::CAMPO6 => 24, CobrosPeer::CAMPO7 => 25, CobrosPeer::CAMPO8 => 26, CobrosPeer::CO_US_IN => 27, CobrosPeer::FE_US_IN => 28, CobrosPeer::CO_US_MO => 29, CobrosPeer::FE_US_MO => 30, CobrosPeer::CO_US_EL => 31, CobrosPeer::FE_US_EL => 32, CobrosPeer::RECARGO => 33, CobrosPeer::ADEL_NUM => 34, CobrosPeer::REVISADO => 35, CobrosPeer::TRASNFE => 36, CobrosPeer::CO_SUCU => 37, CobrosPeer::ROWGUID => 38, CobrosPeer::DESCRIP => 39, CobrosPeer::NUM_DEV => 40, CobrosPeer::DEVDINERO => 41, CobrosPeer::NUM_TURNO => 42, CobrosPeer::AUX01 => 43, CobrosPeer::AUX02 => 44, CobrosPeer::ORIGEN => 45, CobrosPeer::ORIGEN_D => 46, ),
		BasePeer::TYPE_FIELDNAME => array ('cob_num' => 0, 'recibo' => 1, 'co_cli' => 2, 'co_ven' => 3, 'fec_cob' => 4, 'anulado' => 5, 'monto' => 6, 'dppago' => 7, 'mont_ncr' => 8, 'ncr' => 9, 'tcomi_porc' => 10, 'tcomi_line' => 11, 'tcomi_art' => 12, 'tcomi_conc' => 13, 'feccom' => 14, 'tasa' => 15, 'moneda' => 16, 'numcom' => 17, 'dis_cen' => 18, 'campo1' => 19, 'campo2' => 20, 'campo3' => 21, 'campo4' => 22, 'campo5' => 23, 'campo6' => 24, 'campo7' => 25, 'campo8' => 26, 'co_us_in' => 27, 'fe_us_in' => 28, 'co_us_mo' => 29, 'fe_us_mo' => 30, 'co_us_el' => 31, 'fe_us_el' => 32, 'recargo' => 33, 'adel_num' => 34, 'revisado' => 35, 'trasnfe' => 36, 'co_sucu' => 37, 'rowguid' => 38, 'descrip' => 39, 'num_dev' => 40, 'devdinero' => 41, 'num_turno' => 42, 'aux01' => 43, 'aux02' => 44, 'origen' => 45, 'origen_d' => 46, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/CobrosMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.CobrosMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CobrosPeer::getTableMap();
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
		return str_replace(CobrosPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CobrosPeer::COB_NUM);

		$criteria->addSelectColumn(CobrosPeer::RECIBO);

		$criteria->addSelectColumn(CobrosPeer::CO_CLI);

		$criteria->addSelectColumn(CobrosPeer::CO_VEN);

		$criteria->addSelectColumn(CobrosPeer::FEC_COB);

		$criteria->addSelectColumn(CobrosPeer::ANULADO);

		$criteria->addSelectColumn(CobrosPeer::MONTO);

		$criteria->addSelectColumn(CobrosPeer::DPPAGO);

		$criteria->addSelectColumn(CobrosPeer::MONT_NCR);

		$criteria->addSelectColumn(CobrosPeer::NCR);

		$criteria->addSelectColumn(CobrosPeer::TCOMI_PORC);

		$criteria->addSelectColumn(CobrosPeer::TCOMI_LINE);

		$criteria->addSelectColumn(CobrosPeer::TCOMI_ART);

		$criteria->addSelectColumn(CobrosPeer::TCOMI_CONC);

		$criteria->addSelectColumn(CobrosPeer::FECCOM);

		$criteria->addSelectColumn(CobrosPeer::TASA);

		$criteria->addSelectColumn(CobrosPeer::MONEDA);

		$criteria->addSelectColumn(CobrosPeer::NUMCOM);

		$criteria->addSelectColumn(CobrosPeer::DIS_CEN);

		$criteria->addSelectColumn(CobrosPeer::CAMPO1);

		$criteria->addSelectColumn(CobrosPeer::CAMPO2);

		$criteria->addSelectColumn(CobrosPeer::CAMPO3);

		$criteria->addSelectColumn(CobrosPeer::CAMPO4);

		$criteria->addSelectColumn(CobrosPeer::CAMPO5);

		$criteria->addSelectColumn(CobrosPeer::CAMPO6);

		$criteria->addSelectColumn(CobrosPeer::CAMPO7);

		$criteria->addSelectColumn(CobrosPeer::CAMPO8);

		$criteria->addSelectColumn(CobrosPeer::CO_US_IN);

		$criteria->addSelectColumn(CobrosPeer::FE_US_IN);

		$criteria->addSelectColumn(CobrosPeer::CO_US_MO);

		$criteria->addSelectColumn(CobrosPeer::FE_US_MO);

		$criteria->addSelectColumn(CobrosPeer::CO_US_EL);

		$criteria->addSelectColumn(CobrosPeer::FE_US_EL);

		$criteria->addSelectColumn(CobrosPeer::RECARGO);

		$criteria->addSelectColumn(CobrosPeer::ADEL_NUM);

		$criteria->addSelectColumn(CobrosPeer::REVISADO);

		$criteria->addSelectColumn(CobrosPeer::TRASNFE);

		$criteria->addSelectColumn(CobrosPeer::CO_SUCU);

		$criteria->addSelectColumn(CobrosPeer::ROWGUID);

		$criteria->addSelectColumn(CobrosPeer::DESCRIP);

		$criteria->addSelectColumn(CobrosPeer::NUM_DEV);

		$criteria->addSelectColumn(CobrosPeer::DEVDINERO);

		$criteria->addSelectColumn(CobrosPeer::NUM_TURNO);

		$criteria->addSelectColumn(CobrosPeer::AUX01);

		$criteria->addSelectColumn(CobrosPeer::AUX02);

		$criteria->addSelectColumn(CobrosPeer::ORIGEN);

		$criteria->addSelectColumn(CobrosPeer::ORIGEN_D);

	}

	const COUNT = 'COUNT(cobros.COB_NUM)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT cobros.COB_NUM)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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
		$objects = CobrosPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CobrosPeer::populateObjects(CobrosPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CobrosPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CobrosPeer::getOMClass();
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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

		CobrosPeer::addSelectColumns($c);
		$startcol = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ClientesPeer::addSelectColumns($c);

		$c->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
										$temp_obj2->addCobros($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1); 			}
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

		CobrosPeer::addSelectColumns($c);
		$startcol = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		VendedorPeer::addSelectColumns($c);

		$c->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
										$temp_obj2->addCobros($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1); 			}
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

		CobrosPeer::addSelectColumns($c);
		$startcol = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MonedaPeer::addSelectColumns($c);

		$c->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
										$temp_obj2->addCobros($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1); 			}
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

		CobrosPeer::addSelectColumns($c);
		$startcol = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AlmacenPeer::addSelectColumns($c);

		$c->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
										$temp_obj2->addCobros($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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

		CobrosPeer::addSelectColumns($c);
		$startcol2 = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();


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
					$temp_obj2->addCobros($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1);
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
					$temp_obj3->addCobros($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initCobross();
				$obj3->addCobros($obj1);
			}


					
			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getMoneda(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCobros($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initCobross();
				$obj4->addCobros($obj1);
			}


					
			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getAlmacen(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addCobros($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initCobross();
				$obj5->addCobros($obj1);
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CobrosPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CobrosPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$rs = CobrosPeer::doSelectRS($criteria, $con);
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

		CobrosPeer::addSelectColumns($c);
		$startcol2 = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		VendedorPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + VendedorPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
					$temp_obj2->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getMoneda(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCobross();
				$obj3->addCobros($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getAlmacen(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initCobross();
				$obj4->addCobros($obj1);
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

		CobrosPeer::addSelectColumns($c);
		$startcol2 = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
					$temp_obj2->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getMoneda(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCobross();
				$obj3->addCobros($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getAlmacen(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initCobross();
				$obj4->addCobros($obj1);
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

		CobrosPeer::addSelectColumns($c);
		$startcol2 = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(CobrosPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
					$temp_obj2->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1);
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
					$temp_obj3->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCobross();
				$obj3->addCobros($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getAlmacen(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initCobross();
				$obj4->addCobros($obj1);
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

		CobrosPeer::addSelectColumns($c);
		$startcol2 = (CobrosPeer::NUM_COLUMNS - CobrosPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + MonedaPeer::NUM_COLUMNS;

		$c->addJoin(CobrosPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(CobrosPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(CobrosPeer::MONEDA, MonedaPeer::CO_MONE);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CobrosPeer::getOMClass();

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
					$temp_obj2->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCobross();
				$obj2->addCobros($obj1);
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
					$temp_obj3->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCobross();
				$obj3->addCobros($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getMoneda(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCobros($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initCobross();
				$obj4->addCobros($obj1);
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
		return CobrosPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(CobrosPeer::COB_NUM);
			$selectCriteria->add(CobrosPeer::COB_NUM, $criteria->remove(CobrosPeer::COB_NUM), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CobrosPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CobrosPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Cobros) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CobrosPeer::COB_NUM, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Cobros $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CobrosPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CobrosPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CobrosPeer::DATABASE_NAME, CobrosPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CobrosPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CobrosPeer::DATABASE_NAME);

		$criteria->add(CobrosPeer::COB_NUM, $pk);


		$v = CobrosPeer::doSelect($criteria, $con);

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
			$criteria->add(CobrosPeer::COB_NUM, $pks, Criteria::IN);
			$objs = CobrosPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCobrosPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/CobrosMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.CobrosMapBuilder');
}
