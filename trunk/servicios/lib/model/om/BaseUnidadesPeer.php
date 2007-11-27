<?php


abstract class BaseUnidadesPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'unidades';

	
	const CLASS_DEFAULT = 'lib.model.Unidades';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_UNI = 'unidades.CO_UNI';

	
	const DES_UNI = 'unidades.DES_UNI';

	
	const CAMPO1 = 'unidades.CAMPO1';

	
	const CAMPO2 = 'unidades.CAMPO2';

	
	const CAMPO3 = 'unidades.CAMPO3';

	
	const CAMPO4 = 'unidades.CAMPO4';

	
	const CO_US_IN = 'unidades.CO_US_IN';

	
	const FE_US_IN = 'unidades.FE_US_IN';

	
	const CO_US_MO = 'unidades.CO_US_MO';

	
	const FE_US_MO = 'unidades.FE_US_MO';

	
	const CO_US_EL = 'unidades.CO_US_EL';

	
	const FE_US_EL = 'unidades.FE_US_EL';

	
	const REVISADO = 'unidades.REVISADO';

	
	const TRASNFE = 'unidades.TRASNFE';

	
	const CO_SUCU = 'unidades.CO_SUCU';

	
	const ROWGUID = 'unidades.ROWGUID';

	
	const ROW_ID = 'unidades.ROW_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoUni', 'DesUni', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'RowId', ),
		BasePeer::TYPE_COLNAME => array (UnidadesPeer::CO_UNI, UnidadesPeer::DES_UNI, UnidadesPeer::CAMPO1, UnidadesPeer::CAMPO2, UnidadesPeer::CAMPO3, UnidadesPeer::CAMPO4, UnidadesPeer::CO_US_IN, UnidadesPeer::FE_US_IN, UnidadesPeer::CO_US_MO, UnidadesPeer::FE_US_MO, UnidadesPeer::CO_US_EL, UnidadesPeer::FE_US_EL, UnidadesPeer::REVISADO, UnidadesPeer::TRASNFE, UnidadesPeer::CO_SUCU, UnidadesPeer::ROWGUID, UnidadesPeer::ROW_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_uni', 'des_uni', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'row_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoUni' => 0, 'DesUni' => 1, 'Campo1' => 2, 'Campo2' => 3, 'Campo3' => 4, 'Campo4' => 5, 'CoUsIn' => 6, 'FeUsIn' => 7, 'CoUsMo' => 8, 'FeUsMo' => 9, 'CoUsEl' => 10, 'FeUsEl' => 11, 'Revisado' => 12, 'Trasnfe' => 13, 'CoSucu' => 14, 'Rowguid' => 15, 'RowId' => 16, ),
		BasePeer::TYPE_COLNAME => array (UnidadesPeer::CO_UNI => 0, UnidadesPeer::DES_UNI => 1, UnidadesPeer::CAMPO1 => 2, UnidadesPeer::CAMPO2 => 3, UnidadesPeer::CAMPO3 => 4, UnidadesPeer::CAMPO4 => 5, UnidadesPeer::CO_US_IN => 6, UnidadesPeer::FE_US_IN => 7, UnidadesPeer::CO_US_MO => 8, UnidadesPeer::FE_US_MO => 9, UnidadesPeer::CO_US_EL => 10, UnidadesPeer::FE_US_EL => 11, UnidadesPeer::REVISADO => 12, UnidadesPeer::TRASNFE => 13, UnidadesPeer::CO_SUCU => 14, UnidadesPeer::ROWGUID => 15, UnidadesPeer::ROW_ID => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('co_uni' => 0, 'des_uni' => 1, 'campo1' => 2, 'campo2' => 3, 'campo3' => 4, 'campo4' => 5, 'co_us_in' => 6, 'fe_us_in' => 7, 'co_us_mo' => 8, 'fe_us_mo' => 9, 'co_us_el' => 10, 'fe_us_el' => 11, 'revisado' => 12, 'trasnfe' => 13, 'co_sucu' => 14, 'rowguid' => 15, 'row_id' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/UnidadesMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.UnidadesMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = UnidadesPeer::getTableMap();
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
		return str_replace(UnidadesPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(UnidadesPeer::CO_UNI);

		$criteria->addSelectColumn(UnidadesPeer::DES_UNI);

		$criteria->addSelectColumn(UnidadesPeer::CAMPO1);

		$criteria->addSelectColumn(UnidadesPeer::CAMPO2);

		$criteria->addSelectColumn(UnidadesPeer::CAMPO3);

		$criteria->addSelectColumn(UnidadesPeer::CAMPO4);

		$criteria->addSelectColumn(UnidadesPeer::CO_US_IN);

		$criteria->addSelectColumn(UnidadesPeer::FE_US_IN);

		$criteria->addSelectColumn(UnidadesPeer::CO_US_MO);

		$criteria->addSelectColumn(UnidadesPeer::FE_US_MO);

		$criteria->addSelectColumn(UnidadesPeer::CO_US_EL);

		$criteria->addSelectColumn(UnidadesPeer::FE_US_EL);

		$criteria->addSelectColumn(UnidadesPeer::REVISADO);

		$criteria->addSelectColumn(UnidadesPeer::TRASNFE);

		$criteria->addSelectColumn(UnidadesPeer::CO_SUCU);

		$criteria->addSelectColumn(UnidadesPeer::ROWGUID);

		$criteria->addSelectColumn(UnidadesPeer::ROW_ID);

	}

	const COUNT = 'COUNT(unidades.CO_UNI)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT unidades.CO_UNI)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UnidadesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UnidadesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = UnidadesPeer::doSelectRS($criteria, $con);
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
		$objects = UnidadesPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return UnidadesPeer::populateObjects(UnidadesPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			UnidadesPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = UnidadesPeer::getOMClass();
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
		return UnidadesPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(UnidadesPeer::CO_UNI);
			$selectCriteria->add(UnidadesPeer::CO_UNI, $criteria->remove(UnidadesPeer::CO_UNI), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(UnidadesPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(UnidadesPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Unidades) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UnidadesPeer::CO_UNI, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Unidades $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UnidadesPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UnidadesPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(UnidadesPeer::DATABASE_NAME, UnidadesPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = UnidadesPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(UnidadesPeer::DATABASE_NAME);

		$criteria->add(UnidadesPeer::CO_UNI, $pk);


		$v = UnidadesPeer::doSelect($criteria, $con);

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
			$criteria->add(UnidadesPeer::CO_UNI, $pks, Criteria::IN);
			$objs = UnidadesPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseUnidadesPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/UnidadesMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.UnidadesMapBuilder');
}
