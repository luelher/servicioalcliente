<?php


abstract class BaseCondicioPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'condicio';

	
	const CLASS_DEFAULT = 'lib.model.Condicio';

	
	const NUM_COLUMNS = 19;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_COND = 'condicio.CO_COND';

	
	const COND_DES = 'condicio.COND_DES';

	
	const DIAS_CRED = 'condicio.DIAS_CRED';

	
	const DIS_CEN = 'condicio.DIS_CEN';

	
	const CAMPO1 = 'condicio.CAMPO1';

	
	const CAMPO2 = 'condicio.CAMPO2';

	
	const CAMPO3 = 'condicio.CAMPO3';

	
	const CAMPO4 = 'condicio.CAMPO4';

	
	const CO_US_IN = 'condicio.CO_US_IN';

	
	const FE_US_IN = 'condicio.FE_US_IN';

	
	const CO_US_MO = 'condicio.CO_US_MO';

	
	const FE_US_MO = 'condicio.FE_US_MO';

	
	const CO_US_EL = 'condicio.CO_US_EL';

	
	const FE_US_EL = 'condicio.FE_US_EL';

	
	const REVISADO = 'condicio.REVISADO';

	
	const TRASNFE = 'condicio.TRASNFE';

	
	const CO_SUCU = 'condicio.CO_SUCU';

	
	const ROWGUID = 'condicio.ROWGUID';

	
	const ROW_ID = 'condicio.ROW_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoCond', 'CondDes', 'DiasCred', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'RowId', ),
		BasePeer::TYPE_COLNAME => array (CondicioPeer::CO_COND, CondicioPeer::COND_DES, CondicioPeer::DIAS_CRED, CondicioPeer::DIS_CEN, CondicioPeer::CAMPO1, CondicioPeer::CAMPO2, CondicioPeer::CAMPO3, CondicioPeer::CAMPO4, CondicioPeer::CO_US_IN, CondicioPeer::FE_US_IN, CondicioPeer::CO_US_MO, CondicioPeer::FE_US_MO, CondicioPeer::CO_US_EL, CondicioPeer::FE_US_EL, CondicioPeer::REVISADO, CondicioPeer::TRASNFE, CondicioPeer::CO_SUCU, CondicioPeer::ROWGUID, CondicioPeer::ROW_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_cond', 'cond_des', 'dias_cred', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'row_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoCond' => 0, 'CondDes' => 1, 'DiasCred' => 2, 'DisCen' => 3, 'Campo1' => 4, 'Campo2' => 5, 'Campo3' => 6, 'Campo4' => 7, 'CoUsIn' => 8, 'FeUsIn' => 9, 'CoUsMo' => 10, 'FeUsMo' => 11, 'CoUsEl' => 12, 'FeUsEl' => 13, 'Revisado' => 14, 'Trasnfe' => 15, 'CoSucu' => 16, 'Rowguid' => 17, 'RowId' => 18, ),
		BasePeer::TYPE_COLNAME => array (CondicioPeer::CO_COND => 0, CondicioPeer::COND_DES => 1, CondicioPeer::DIAS_CRED => 2, CondicioPeer::DIS_CEN => 3, CondicioPeer::CAMPO1 => 4, CondicioPeer::CAMPO2 => 5, CondicioPeer::CAMPO3 => 6, CondicioPeer::CAMPO4 => 7, CondicioPeer::CO_US_IN => 8, CondicioPeer::FE_US_IN => 9, CondicioPeer::CO_US_MO => 10, CondicioPeer::FE_US_MO => 11, CondicioPeer::CO_US_EL => 12, CondicioPeer::FE_US_EL => 13, CondicioPeer::REVISADO => 14, CondicioPeer::TRASNFE => 15, CondicioPeer::CO_SUCU => 16, CondicioPeer::ROWGUID => 17, CondicioPeer::ROW_ID => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('co_cond' => 0, 'cond_des' => 1, 'dias_cred' => 2, 'dis_cen' => 3, 'campo1' => 4, 'campo2' => 5, 'campo3' => 6, 'campo4' => 7, 'co_us_in' => 8, 'fe_us_in' => 9, 'co_us_mo' => 10, 'fe_us_mo' => 11, 'co_us_el' => 12, 'fe_us_el' => 13, 'revisado' => 14, 'trasnfe' => 15, 'co_sucu' => 16, 'rowguid' => 17, 'row_id' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/CondicioMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.CondicioMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CondicioPeer::getTableMap();
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
		return str_replace(CondicioPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CondicioPeer::CO_COND);

		$criteria->addSelectColumn(CondicioPeer::COND_DES);

		$criteria->addSelectColumn(CondicioPeer::DIAS_CRED);

		$criteria->addSelectColumn(CondicioPeer::DIS_CEN);

		$criteria->addSelectColumn(CondicioPeer::CAMPO1);

		$criteria->addSelectColumn(CondicioPeer::CAMPO2);

		$criteria->addSelectColumn(CondicioPeer::CAMPO3);

		$criteria->addSelectColumn(CondicioPeer::CAMPO4);

		$criteria->addSelectColumn(CondicioPeer::CO_US_IN);

		$criteria->addSelectColumn(CondicioPeer::FE_US_IN);

		$criteria->addSelectColumn(CondicioPeer::CO_US_MO);

		$criteria->addSelectColumn(CondicioPeer::FE_US_MO);

		$criteria->addSelectColumn(CondicioPeer::CO_US_EL);

		$criteria->addSelectColumn(CondicioPeer::FE_US_EL);

		$criteria->addSelectColumn(CondicioPeer::REVISADO);

		$criteria->addSelectColumn(CondicioPeer::TRASNFE);

		$criteria->addSelectColumn(CondicioPeer::CO_SUCU);

		$criteria->addSelectColumn(CondicioPeer::ROWGUID);

		$criteria->addSelectColumn(CondicioPeer::ROW_ID);

	}

	const COUNT = 'COUNT(condicio.CO_COND)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT condicio.CO_COND)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CondicioPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CondicioPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CondicioPeer::doSelectRS($criteria, $con);
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
		$objects = CondicioPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CondicioPeer::populateObjects(CondicioPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CondicioPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CondicioPeer::getOMClass();
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
		return CondicioPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(CondicioPeer::CO_COND);
			$selectCriteria->add(CondicioPeer::CO_COND, $criteria->remove(CondicioPeer::CO_COND), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CondicioPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CondicioPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Condicio) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CondicioPeer::CO_COND, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Condicio $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CondicioPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CondicioPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CondicioPeer::DATABASE_NAME, CondicioPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CondicioPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CondicioPeer::DATABASE_NAME);

		$criteria->add(CondicioPeer::CO_COND, $pk);


		$v = CondicioPeer::doSelect($criteria, $con);

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
			$criteria->add(CondicioPeer::CO_COND, $pks, Criteria::IN);
			$objs = CondicioPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCondicioPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/CondicioMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.CondicioMapBuilder');
}
