<?php


abstract class BaseColoresPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'colores';

	
	const CLASS_DEFAULT = 'lib.model.Colores';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_COL = 'colores.CO_COL';

	
	const DES_COL = 'colores.DES_COL';

	
	const CAMPO1 = 'colores.CAMPO1';

	
	const CAMPO2 = 'colores.CAMPO2';

	
	const CAMPO3 = 'colores.CAMPO3';

	
	const CAMPO4 = 'colores.CAMPO4';

	
	const CO_US_IN = 'colores.CO_US_IN';

	
	const FE_US_IN = 'colores.FE_US_IN';

	
	const CO_US_MO = 'colores.CO_US_MO';

	
	const FE_US_MO = 'colores.FE_US_MO';

	
	const CO_US_EL = 'colores.CO_US_EL';

	
	const FE_US_EL = 'colores.FE_US_EL';

	
	const REVISADO = 'colores.REVISADO';

	
	const TRASNFE = 'colores.TRASNFE';

	
	const CO_SUCU = 'colores.CO_SUCU';

	
	const ROWGUID = 'colores.ROWGUID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoCol', 'DesCol', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_COLNAME => array (ColoresPeer::CO_COL, ColoresPeer::DES_COL, ColoresPeer::CAMPO1, ColoresPeer::CAMPO2, ColoresPeer::CAMPO3, ColoresPeer::CAMPO4, ColoresPeer::CO_US_IN, ColoresPeer::FE_US_IN, ColoresPeer::CO_US_MO, ColoresPeer::FE_US_MO, ColoresPeer::CO_US_EL, ColoresPeer::FE_US_EL, ColoresPeer::REVISADO, ColoresPeer::TRASNFE, ColoresPeer::CO_SUCU, ColoresPeer::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_col', 'des_col', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoCol' => 0, 'DesCol' => 1, 'Campo1' => 2, 'Campo2' => 3, 'Campo3' => 4, 'Campo4' => 5, 'CoUsIn' => 6, 'FeUsIn' => 7, 'CoUsMo' => 8, 'FeUsMo' => 9, 'CoUsEl' => 10, 'FeUsEl' => 11, 'Revisado' => 12, 'Trasnfe' => 13, 'CoSucu' => 14, 'Rowguid' => 15, ),
		BasePeer::TYPE_COLNAME => array (ColoresPeer::CO_COL => 0, ColoresPeer::DES_COL => 1, ColoresPeer::CAMPO1 => 2, ColoresPeer::CAMPO2 => 3, ColoresPeer::CAMPO3 => 4, ColoresPeer::CAMPO4 => 5, ColoresPeer::CO_US_IN => 6, ColoresPeer::FE_US_IN => 7, ColoresPeer::CO_US_MO => 8, ColoresPeer::FE_US_MO => 9, ColoresPeer::CO_US_EL => 10, ColoresPeer::FE_US_EL => 11, ColoresPeer::REVISADO => 12, ColoresPeer::TRASNFE => 13, ColoresPeer::CO_SUCU => 14, ColoresPeer::ROWGUID => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('co_col' => 0, 'des_col' => 1, 'campo1' => 2, 'campo2' => 3, 'campo3' => 4, 'campo4' => 5, 'co_us_in' => 6, 'fe_us_in' => 7, 'co_us_mo' => 8, 'fe_us_mo' => 9, 'co_us_el' => 10, 'fe_us_el' => 11, 'revisado' => 12, 'trasnfe' => 13, 'co_sucu' => 14, 'rowguid' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ColoresMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ColoresMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ColoresPeer::getTableMap();
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
		return str_replace(ColoresPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ColoresPeer::CO_COL);

		$criteria->addSelectColumn(ColoresPeer::DES_COL);

		$criteria->addSelectColumn(ColoresPeer::CAMPO1);

		$criteria->addSelectColumn(ColoresPeer::CAMPO2);

		$criteria->addSelectColumn(ColoresPeer::CAMPO3);

		$criteria->addSelectColumn(ColoresPeer::CAMPO4);

		$criteria->addSelectColumn(ColoresPeer::CO_US_IN);

		$criteria->addSelectColumn(ColoresPeer::FE_US_IN);

		$criteria->addSelectColumn(ColoresPeer::CO_US_MO);

		$criteria->addSelectColumn(ColoresPeer::FE_US_MO);

		$criteria->addSelectColumn(ColoresPeer::CO_US_EL);

		$criteria->addSelectColumn(ColoresPeer::FE_US_EL);

		$criteria->addSelectColumn(ColoresPeer::REVISADO);

		$criteria->addSelectColumn(ColoresPeer::TRASNFE);

		$criteria->addSelectColumn(ColoresPeer::CO_SUCU);

		$criteria->addSelectColumn(ColoresPeer::ROWGUID);

	}

	const COUNT = 'COUNT(colores.CO_COL)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT colores.CO_COL)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ColoresPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ColoresPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ColoresPeer::doSelectRS($criteria, $con);
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
		$objects = ColoresPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ColoresPeer::populateObjects(ColoresPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ColoresPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ColoresPeer::getOMClass();
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
		return ColoresPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(ColoresPeer::CO_COL);
			$selectCriteria->add(ColoresPeer::CO_COL, $criteria->remove(ColoresPeer::CO_COL), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ColoresPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ColoresPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Colores) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ColoresPeer::CO_COL, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Colores $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ColoresPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ColoresPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ColoresPeer::DATABASE_NAME, ColoresPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ColoresPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ColoresPeer::DATABASE_NAME);

		$criteria->add(ColoresPeer::CO_COL, $pk);


		$v = ColoresPeer::doSelect($criteria, $con);

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
			$criteria->add(ColoresPeer::CO_COL, $pks, Criteria::IN);
			$objs = ColoresPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseColoresPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ColoresMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ColoresMapBuilder');
}
