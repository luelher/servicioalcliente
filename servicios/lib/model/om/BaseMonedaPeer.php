<?php


abstract class BaseMonedaPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'moneda';

	
	const CLASS_DEFAULT = 'lib.model.Moneda';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_MONE = 'moneda.CO_MONE';

	
	const MONE_DES = 'moneda.MONE_DES';

	
	const CAMBIO = 'moneda.CAMBIO';

	
	const CAMPO1 = 'moneda.CAMPO1';

	
	const CAMPO2 = 'moneda.CAMPO2';

	
	const CAMPO3 = 'moneda.CAMPO3';

	
	const CAMPO4 = 'moneda.CAMPO4';

	
	const CO_US_IN = 'moneda.CO_US_IN';

	
	const FE_US_IN = 'moneda.FE_US_IN';

	
	const CO_US_MO = 'moneda.CO_US_MO';

	
	const FE_US_MO = 'moneda.FE_US_MO';

	
	const CO_US_EL = 'moneda.CO_US_EL';

	
	const FE_US_EL = 'moneda.FE_US_EL';

	
	const REVISADO = 'moneda.REVISADO';

	
	const TRASNFE = 'moneda.TRASNFE';

	
	const CO_SUCU = 'moneda.CO_SUCU';

	
	const ROWGUID = 'moneda.ROWGUID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoMone', 'MoneDes', 'Cambio', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_COLNAME => array (MonedaPeer::CO_MONE, MonedaPeer::MONE_DES, MonedaPeer::CAMBIO, MonedaPeer::CAMPO1, MonedaPeer::CAMPO2, MonedaPeer::CAMPO3, MonedaPeer::CAMPO4, MonedaPeer::CO_US_IN, MonedaPeer::FE_US_IN, MonedaPeer::CO_US_MO, MonedaPeer::FE_US_MO, MonedaPeer::CO_US_EL, MonedaPeer::FE_US_EL, MonedaPeer::REVISADO, MonedaPeer::TRASNFE, MonedaPeer::CO_SUCU, MonedaPeer::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_mone', 'mone_des', 'cambio', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoMone' => 0, 'MoneDes' => 1, 'Cambio' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'CoUsIn' => 7, 'FeUsIn' => 8, 'CoUsMo' => 9, 'FeUsMo' => 10, 'CoUsEl' => 11, 'FeUsEl' => 12, 'Revisado' => 13, 'Trasnfe' => 14, 'CoSucu' => 15, 'Rowguid' => 16, ),
		BasePeer::TYPE_COLNAME => array (MonedaPeer::CO_MONE => 0, MonedaPeer::MONE_DES => 1, MonedaPeer::CAMBIO => 2, MonedaPeer::CAMPO1 => 3, MonedaPeer::CAMPO2 => 4, MonedaPeer::CAMPO3 => 5, MonedaPeer::CAMPO4 => 6, MonedaPeer::CO_US_IN => 7, MonedaPeer::FE_US_IN => 8, MonedaPeer::CO_US_MO => 9, MonedaPeer::FE_US_MO => 10, MonedaPeer::CO_US_EL => 11, MonedaPeer::FE_US_EL => 12, MonedaPeer::REVISADO => 13, MonedaPeer::TRASNFE => 14, MonedaPeer::CO_SUCU => 15, MonedaPeer::ROWGUID => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('co_mone' => 0, 'mone_des' => 1, 'cambio' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'co_us_in' => 7, 'fe_us_in' => 8, 'co_us_mo' => 9, 'fe_us_mo' => 10, 'co_us_el' => 11, 'fe_us_el' => 12, 'revisado' => 13, 'trasnfe' => 14, 'co_sucu' => 15, 'rowguid' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/MonedaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.MonedaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = MonedaPeer::getTableMap();
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
		return str_replace(MonedaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(MonedaPeer::CO_MONE);

		$criteria->addSelectColumn(MonedaPeer::MONE_DES);

		$criteria->addSelectColumn(MonedaPeer::CAMBIO);

		$criteria->addSelectColumn(MonedaPeer::CAMPO1);

		$criteria->addSelectColumn(MonedaPeer::CAMPO2);

		$criteria->addSelectColumn(MonedaPeer::CAMPO3);

		$criteria->addSelectColumn(MonedaPeer::CAMPO4);

		$criteria->addSelectColumn(MonedaPeer::CO_US_IN);

		$criteria->addSelectColumn(MonedaPeer::FE_US_IN);

		$criteria->addSelectColumn(MonedaPeer::CO_US_MO);

		$criteria->addSelectColumn(MonedaPeer::FE_US_MO);

		$criteria->addSelectColumn(MonedaPeer::CO_US_EL);

		$criteria->addSelectColumn(MonedaPeer::FE_US_EL);

		$criteria->addSelectColumn(MonedaPeer::REVISADO);

		$criteria->addSelectColumn(MonedaPeer::TRASNFE);

		$criteria->addSelectColumn(MonedaPeer::CO_SUCU);

		$criteria->addSelectColumn(MonedaPeer::ROWGUID);

	}

	const COUNT = 'COUNT(moneda.CO_MONE)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT moneda.CO_MONE)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MonedaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MonedaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = MonedaPeer::doSelectRS($criteria, $con);
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
		$objects = MonedaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return MonedaPeer::populateObjects(MonedaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			MonedaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = MonedaPeer::getOMClass();
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
		return MonedaPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(MonedaPeer::CO_MONE);
			$selectCriteria->add(MonedaPeer::CO_MONE, $criteria->remove(MonedaPeer::CO_MONE), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(MonedaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(MonedaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Moneda) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(MonedaPeer::CO_MONE, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Moneda $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(MonedaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(MonedaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(MonedaPeer::DATABASE_NAME, MonedaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = MonedaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(MonedaPeer::DATABASE_NAME);

		$criteria->add(MonedaPeer::CO_MONE, $pk);


		$v = MonedaPeer::doSelect($criteria, $con);

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
			$criteria->add(MonedaPeer::CO_MONE, $pks, Criteria::IN);
			$objs = MonedaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseMonedaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/MonedaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.MonedaMapBuilder');
}
