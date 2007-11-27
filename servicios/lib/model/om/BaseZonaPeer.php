<?php


abstract class BaseZonaPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'zona';

	
	const CLASS_DEFAULT = 'lib.model.Zona';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_ZON = 'zona.CO_ZON';

	
	const ZON_DES = 'zona.ZON_DES';

	
	const DIS_CEN = 'zona.DIS_CEN';

	
	const CAMPO1 = 'zona.CAMPO1';

	
	const CAMPO2 = 'zona.CAMPO2';

	
	const CAMPO3 = 'zona.CAMPO3';

	
	const CAMPO4 = 'zona.CAMPO4';

	
	const CO_US_IN = 'zona.CO_US_IN';

	
	const FE_US_IN = 'zona.FE_US_IN';

	
	const CO_US_MO = 'zona.CO_US_MO';

	
	const FE_US_MO = 'zona.FE_US_MO';

	
	const CO_US_EL = 'zona.CO_US_EL';

	
	const FE_US_EL = 'zona.FE_US_EL';

	
	const REVISADO = 'zona.REVISADO';

	
	const TRASNFE = 'zona.TRASNFE';

	
	const CO_SUCU = 'zona.CO_SUCU';

	
	const ROWGUID = 'zona.ROWGUID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoZon', 'ZonDes', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_COLNAME => array (ZonaPeer::CO_ZON, ZonaPeer::ZON_DES, ZonaPeer::DIS_CEN, ZonaPeer::CAMPO1, ZonaPeer::CAMPO2, ZonaPeer::CAMPO3, ZonaPeer::CAMPO4, ZonaPeer::CO_US_IN, ZonaPeer::FE_US_IN, ZonaPeer::CO_US_MO, ZonaPeer::FE_US_MO, ZonaPeer::CO_US_EL, ZonaPeer::FE_US_EL, ZonaPeer::REVISADO, ZonaPeer::TRASNFE, ZonaPeer::CO_SUCU, ZonaPeer::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_zon', 'zon_des', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoZon' => 0, 'ZonDes' => 1, 'DisCen' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'CoUsIn' => 7, 'FeUsIn' => 8, 'CoUsMo' => 9, 'FeUsMo' => 10, 'CoUsEl' => 11, 'FeUsEl' => 12, 'Revisado' => 13, 'Trasnfe' => 14, 'CoSucu' => 15, 'Rowguid' => 16, ),
		BasePeer::TYPE_COLNAME => array (ZonaPeer::CO_ZON => 0, ZonaPeer::ZON_DES => 1, ZonaPeer::DIS_CEN => 2, ZonaPeer::CAMPO1 => 3, ZonaPeer::CAMPO2 => 4, ZonaPeer::CAMPO3 => 5, ZonaPeer::CAMPO4 => 6, ZonaPeer::CO_US_IN => 7, ZonaPeer::FE_US_IN => 8, ZonaPeer::CO_US_MO => 9, ZonaPeer::FE_US_MO => 10, ZonaPeer::CO_US_EL => 11, ZonaPeer::FE_US_EL => 12, ZonaPeer::REVISADO => 13, ZonaPeer::TRASNFE => 14, ZonaPeer::CO_SUCU => 15, ZonaPeer::ROWGUID => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('co_zon' => 0, 'zon_des' => 1, 'dis_cen' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'co_us_in' => 7, 'fe_us_in' => 8, 'co_us_mo' => 9, 'fe_us_mo' => 10, 'co_us_el' => 11, 'fe_us_el' => 12, 'revisado' => 13, 'trasnfe' => 14, 'co_sucu' => 15, 'rowguid' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ZonaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ZonaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ZonaPeer::getTableMap();
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
		return str_replace(ZonaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ZonaPeer::CO_ZON);

		$criteria->addSelectColumn(ZonaPeer::ZON_DES);

		$criteria->addSelectColumn(ZonaPeer::DIS_CEN);

		$criteria->addSelectColumn(ZonaPeer::CAMPO1);

		$criteria->addSelectColumn(ZonaPeer::CAMPO2);

		$criteria->addSelectColumn(ZonaPeer::CAMPO3);

		$criteria->addSelectColumn(ZonaPeer::CAMPO4);

		$criteria->addSelectColumn(ZonaPeer::CO_US_IN);

		$criteria->addSelectColumn(ZonaPeer::FE_US_IN);

		$criteria->addSelectColumn(ZonaPeer::CO_US_MO);

		$criteria->addSelectColumn(ZonaPeer::FE_US_MO);

		$criteria->addSelectColumn(ZonaPeer::CO_US_EL);

		$criteria->addSelectColumn(ZonaPeer::FE_US_EL);

		$criteria->addSelectColumn(ZonaPeer::REVISADO);

		$criteria->addSelectColumn(ZonaPeer::TRASNFE);

		$criteria->addSelectColumn(ZonaPeer::CO_SUCU);

		$criteria->addSelectColumn(ZonaPeer::ROWGUID);

	}

	const COUNT = 'COUNT(zona.CO_ZON)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT zona.CO_ZON)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ZonaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ZonaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ZonaPeer::doSelectRS($criteria, $con);
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
		$objects = ZonaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ZonaPeer::populateObjects(ZonaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ZonaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ZonaPeer::getOMClass();
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
		return ZonaPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(ZonaPeer::CO_ZON);
			$selectCriteria->add(ZonaPeer::CO_ZON, $criteria->remove(ZonaPeer::CO_ZON), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ZonaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ZonaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Zona) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ZonaPeer::CO_ZON, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Zona $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ZonaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ZonaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ZonaPeer::DATABASE_NAME, ZonaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ZonaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ZonaPeer::DATABASE_NAME);

		$criteria->add(ZonaPeer::CO_ZON, $pk);


		$v = ZonaPeer::doSelect($criteria, $con);

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
			$criteria->add(ZonaPeer::CO_ZON, $pks, Criteria::IN);
			$objs = ZonaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseZonaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ZonaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ZonaMapBuilder');
}
