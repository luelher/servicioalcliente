<?php


abstract class BaseVendedorPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'vendedor';

	
	const CLASS_DEFAULT = 'lib.model.Vendedor';

	
	const NUM_COLUMNS = 42;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_VEN = 'vendedor.CO_VEN';

	
	const TIPO = 'vendedor.TIPO';

	
	const VEN_DES = 'vendedor.VEN_DES';

	
	const DIS_CEN = 'vendedor.DIS_CEN';

	
	const CEDULA = 'vendedor.CEDULA';

	
	const DIREC1 = 'vendedor.DIREC1';

	
	const DIREC2 = 'vendedor.DIREC2';

	
	const TELEFONOS = 'vendedor.TELEFONOS';

	
	const FECHA_REG = 'vendedor.FECHA_REG';

	
	const CONDIC = 'vendedor.CONDIC';

	
	const COMISION = 'vendedor.COMISION';

	
	const COMEN = 'vendedor.COMEN';

	
	const FUN_COB = 'vendedor.FUN_COB';

	
	const FUN_VEN = 'vendedor.FUN_VEN';

	
	const COMISIONV = 'vendedor.COMISIONV';

	
	const FAC_ULT_VE = 'vendedor.FAC_ULT_VE';

	
	const FEC_ULT_VE = 'vendedor.FEC_ULT_VE';

	
	const NET_ULT_VE = 'vendedor.NET_ULT_VE';

	
	const CLI_ULT_VE = 'vendedor.CLI_ULT_VE';

	
	const CTA_CONTAB = 'vendedor.CTA_CONTAB';

	
	const CAMPO1 = 'vendedor.CAMPO1';

	
	const CAMPO2 = 'vendedor.CAMPO2';

	
	const CAMPO3 = 'vendedor.CAMPO3';

	
	const CAMPO4 = 'vendedor.CAMPO4';

	
	const CAMPO5 = 'vendedor.CAMPO5';

	
	const CAMPO6 = 'vendedor.CAMPO6';

	
	const CAMPO7 = 'vendedor.CAMPO7';

	
	const CAMPO8 = 'vendedor.CAMPO8';

	
	const CO_US_IN = 'vendedor.CO_US_IN';

	
	const FE_US_IN = 'vendedor.FE_US_IN';

	
	const CO_US_MO = 'vendedor.CO_US_MO';

	
	const FE_US_MO = 'vendedor.FE_US_MO';

	
	const CO_US_EL = 'vendedor.CO_US_EL';

	
	const FE_US_EL = 'vendedor.FE_US_EL';

	
	const REVISADO = 'vendedor.REVISADO';

	
	const TRASNFE = 'vendedor.TRASNFE';

	
	const CO_SUCU = 'vendedor.CO_SUCU';

	
	const ROWGUID = 'vendedor.ROWGUID';

	
	const LOGIN = 'vendedor.LOGIN';

	
	const PASSWORD = 'vendedor.PASSWORD';

	
	const EMAIL = 'vendedor.EMAIL';

	
	const PSW_M = 'vendedor.PSW_M';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoVen', 'Tipo', 'VenDes', 'DisCen', 'Cedula', 'Direc1', 'Direc2', 'Telefonos', 'FechaReg', 'Condic', 'Comision', 'Comen', 'FunCob', 'FunVen', 'Comisionv', 'FacUltVe', 'FecUltVe', 'NetUltVe', 'CliUltVe', 'CtaContab', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'Login', 'Password', 'Email', 'PswM', ),
		BasePeer::TYPE_COLNAME => array (VendedorPeer::CO_VEN, VendedorPeer::TIPO, VendedorPeer::VEN_DES, VendedorPeer::DIS_CEN, VendedorPeer::CEDULA, VendedorPeer::DIREC1, VendedorPeer::DIREC2, VendedorPeer::TELEFONOS, VendedorPeer::FECHA_REG, VendedorPeer::CONDIC, VendedorPeer::COMISION, VendedorPeer::COMEN, VendedorPeer::FUN_COB, VendedorPeer::FUN_VEN, VendedorPeer::COMISIONV, VendedorPeer::FAC_ULT_VE, VendedorPeer::FEC_ULT_VE, VendedorPeer::NET_ULT_VE, VendedorPeer::CLI_ULT_VE, VendedorPeer::CTA_CONTAB, VendedorPeer::CAMPO1, VendedorPeer::CAMPO2, VendedorPeer::CAMPO3, VendedorPeer::CAMPO4, VendedorPeer::CAMPO5, VendedorPeer::CAMPO6, VendedorPeer::CAMPO7, VendedorPeer::CAMPO8, VendedorPeer::CO_US_IN, VendedorPeer::FE_US_IN, VendedorPeer::CO_US_MO, VendedorPeer::FE_US_MO, VendedorPeer::CO_US_EL, VendedorPeer::FE_US_EL, VendedorPeer::REVISADO, VendedorPeer::TRASNFE, VendedorPeer::CO_SUCU, VendedorPeer::ROWGUID, VendedorPeer::LOGIN, VendedorPeer::PASSWORD, VendedorPeer::EMAIL, VendedorPeer::PSW_M, ),
		BasePeer::TYPE_FIELDNAME => array ('co_ven', 'tipo', 'ven_des', 'dis_cen', 'cedula', 'direc1', 'direc2', 'telefonos', 'fecha_reg', 'condic', 'comision', 'comen', 'fun_cob', 'fun_ven', 'comisionv', 'fac_ult_ve', 'fec_ult_ve', 'net_ult_ve', 'cli_ult_ve', 'cta_contab', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'login', 'password', 'email', 'PSW_M', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoVen' => 0, 'Tipo' => 1, 'VenDes' => 2, 'DisCen' => 3, 'Cedula' => 4, 'Direc1' => 5, 'Direc2' => 6, 'Telefonos' => 7, 'FechaReg' => 8, 'Condic' => 9, 'Comision' => 10, 'Comen' => 11, 'FunCob' => 12, 'FunVen' => 13, 'Comisionv' => 14, 'FacUltVe' => 15, 'FecUltVe' => 16, 'NetUltVe' => 17, 'CliUltVe' => 18, 'CtaContab' => 19, 'Campo1' => 20, 'Campo2' => 21, 'Campo3' => 22, 'Campo4' => 23, 'Campo5' => 24, 'Campo6' => 25, 'Campo7' => 26, 'Campo8' => 27, 'CoUsIn' => 28, 'FeUsIn' => 29, 'CoUsMo' => 30, 'FeUsMo' => 31, 'CoUsEl' => 32, 'FeUsEl' => 33, 'Revisado' => 34, 'Trasnfe' => 35, 'CoSucu' => 36, 'Rowguid' => 37, 'Login' => 38, 'Password' => 39, 'Email' => 40, 'PswM' => 41, ),
		BasePeer::TYPE_COLNAME => array (VendedorPeer::CO_VEN => 0, VendedorPeer::TIPO => 1, VendedorPeer::VEN_DES => 2, VendedorPeer::DIS_CEN => 3, VendedorPeer::CEDULA => 4, VendedorPeer::DIREC1 => 5, VendedorPeer::DIREC2 => 6, VendedorPeer::TELEFONOS => 7, VendedorPeer::FECHA_REG => 8, VendedorPeer::CONDIC => 9, VendedorPeer::COMISION => 10, VendedorPeer::COMEN => 11, VendedorPeer::FUN_COB => 12, VendedorPeer::FUN_VEN => 13, VendedorPeer::COMISIONV => 14, VendedorPeer::FAC_ULT_VE => 15, VendedorPeer::FEC_ULT_VE => 16, VendedorPeer::NET_ULT_VE => 17, VendedorPeer::CLI_ULT_VE => 18, VendedorPeer::CTA_CONTAB => 19, VendedorPeer::CAMPO1 => 20, VendedorPeer::CAMPO2 => 21, VendedorPeer::CAMPO3 => 22, VendedorPeer::CAMPO4 => 23, VendedorPeer::CAMPO5 => 24, VendedorPeer::CAMPO6 => 25, VendedorPeer::CAMPO7 => 26, VendedorPeer::CAMPO8 => 27, VendedorPeer::CO_US_IN => 28, VendedorPeer::FE_US_IN => 29, VendedorPeer::CO_US_MO => 30, VendedorPeer::FE_US_MO => 31, VendedorPeer::CO_US_EL => 32, VendedorPeer::FE_US_EL => 33, VendedorPeer::REVISADO => 34, VendedorPeer::TRASNFE => 35, VendedorPeer::CO_SUCU => 36, VendedorPeer::ROWGUID => 37, VendedorPeer::LOGIN => 38, VendedorPeer::PASSWORD => 39, VendedorPeer::EMAIL => 40, VendedorPeer::PSW_M => 41, ),
		BasePeer::TYPE_FIELDNAME => array ('co_ven' => 0, 'tipo' => 1, 'ven_des' => 2, 'dis_cen' => 3, 'cedula' => 4, 'direc1' => 5, 'direc2' => 6, 'telefonos' => 7, 'fecha_reg' => 8, 'condic' => 9, 'comision' => 10, 'comen' => 11, 'fun_cob' => 12, 'fun_ven' => 13, 'comisionv' => 14, 'fac_ult_ve' => 15, 'fec_ult_ve' => 16, 'net_ult_ve' => 17, 'cli_ult_ve' => 18, 'cta_contab' => 19, 'campo1' => 20, 'campo2' => 21, 'campo3' => 22, 'campo4' => 23, 'campo5' => 24, 'campo6' => 25, 'campo7' => 26, 'campo8' => 27, 'co_us_in' => 28, 'fe_us_in' => 29, 'co_us_mo' => 30, 'fe_us_mo' => 31, 'co_us_el' => 32, 'fe_us_el' => 33, 'revisado' => 34, 'trasnfe' => 35, 'co_sucu' => 36, 'rowguid' => 37, 'login' => 38, 'password' => 39, 'email' => 40, 'PSW_M' => 41, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/VendedorMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.VendedorMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = VendedorPeer::getTableMap();
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
		return str_replace(VendedorPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(VendedorPeer::CO_VEN);

		$criteria->addSelectColumn(VendedorPeer::TIPO);

		$criteria->addSelectColumn(VendedorPeer::VEN_DES);

		$criteria->addSelectColumn(VendedorPeer::DIS_CEN);

		$criteria->addSelectColumn(VendedorPeer::CEDULA);

		$criteria->addSelectColumn(VendedorPeer::DIREC1);

		$criteria->addSelectColumn(VendedorPeer::DIREC2);

		$criteria->addSelectColumn(VendedorPeer::TELEFONOS);

		$criteria->addSelectColumn(VendedorPeer::FECHA_REG);

		$criteria->addSelectColumn(VendedorPeer::CONDIC);

		$criteria->addSelectColumn(VendedorPeer::COMISION);

		$criteria->addSelectColumn(VendedorPeer::COMEN);

		$criteria->addSelectColumn(VendedorPeer::FUN_COB);

		$criteria->addSelectColumn(VendedorPeer::FUN_VEN);

		$criteria->addSelectColumn(VendedorPeer::COMISIONV);

		$criteria->addSelectColumn(VendedorPeer::FAC_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::FEC_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::NET_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::CLI_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::CTA_CONTAB);

		$criteria->addSelectColumn(VendedorPeer::CAMPO1);

		$criteria->addSelectColumn(VendedorPeer::CAMPO2);

		$criteria->addSelectColumn(VendedorPeer::CAMPO3);

		$criteria->addSelectColumn(VendedorPeer::CAMPO4);

		$criteria->addSelectColumn(VendedorPeer::CAMPO5);

		$criteria->addSelectColumn(VendedorPeer::CAMPO6);

		$criteria->addSelectColumn(VendedorPeer::CAMPO7);

		$criteria->addSelectColumn(VendedorPeer::CAMPO8);

		$criteria->addSelectColumn(VendedorPeer::CO_US_IN);

		$criteria->addSelectColumn(VendedorPeer::FE_US_IN);

		$criteria->addSelectColumn(VendedorPeer::CO_US_MO);

		$criteria->addSelectColumn(VendedorPeer::FE_US_MO);

		$criteria->addSelectColumn(VendedorPeer::CO_US_EL);

		$criteria->addSelectColumn(VendedorPeer::FE_US_EL);

		$criteria->addSelectColumn(VendedorPeer::REVISADO);

		$criteria->addSelectColumn(VendedorPeer::TRASNFE);

		$criteria->addSelectColumn(VendedorPeer::CO_SUCU);

		$criteria->addSelectColumn(VendedorPeer::ROWGUID);

		$criteria->addSelectColumn(VendedorPeer::LOGIN);

		$criteria->addSelectColumn(VendedorPeer::PASSWORD);

		$criteria->addSelectColumn(VendedorPeer::EMAIL);

		$criteria->addSelectColumn(VendedorPeer::PSW_M);

	}

	const COUNT = 'COUNT(vendedor.CO_VEN)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT vendedor.CO_VEN)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(VendedorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(VendedorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = VendedorPeer::doSelectRS($criteria, $con);
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
		$objects = VendedorPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return VendedorPeer::populateObjects(VendedorPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			VendedorPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = VendedorPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return VendedorPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(VendedorPeer::CO_VEN);
			$selectCriteria->add(VendedorPeer::CO_VEN, $criteria->remove(VendedorPeer::CO_VEN), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(VendedorPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Vendedor) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(VendedorPeer::CO_VEN, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Vendedor $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(VendedorPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(VendedorPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(VendedorPeer::DATABASE_NAME, VendedorPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = VendedorPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(VendedorPeer::DATABASE_NAME);

		$criteria->add(VendedorPeer::CO_VEN, $pk);


		$v = VendedorPeer::doSelect($criteria, $con);

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
			$criteria->add(VendedorPeer::CO_VEN, $pks, Criteria::IN);
			$objs = VendedorPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseVendedorPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/VendedorMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.VendedorMapBuilder');
}
