<?php


abstract class BaseProcedenPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'proceden';

	
	const CLASS_DEFAULT = 'lib.model.Proceden';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const COD_PROC = 'proceden.COD_PROC';

	
	const DES_PROC = 'proceden.DES_PROC';

	
	const CAMPO1 = 'proceden.CAMPO1';

	
	const CAMPO2 = 'proceden.CAMPO2';

	
	const CAMPO3 = 'proceden.CAMPO3';

	
	const CAMPO4 = 'proceden.CAMPO4';

	
	const CO_US_IN = 'proceden.CO_US_IN';

	
	const FE_US_IN = 'proceden.FE_US_IN';

	
	const CO_US_MO = 'proceden.CO_US_MO';

	
	const FE_US_MO = 'proceden.FE_US_MO';

	
	const CO_US_EL = 'proceden.CO_US_EL';

	
	const FE_US_EL = 'proceden.FE_US_EL';

	
	const REVISADO = 'proceden.REVISADO';

	
	const TRASNFE = 'proceden.TRASNFE';

	
	const CO_SUCU = 'proceden.CO_SUCU';

	
	const ROWGUID = 'proceden.ROWGUID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CodProc', 'DesProc', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_COLNAME => array (ProcedenPeer::COD_PROC, ProcedenPeer::DES_PROC, ProcedenPeer::CAMPO1, ProcedenPeer::CAMPO2, ProcedenPeer::CAMPO3, ProcedenPeer::CAMPO4, ProcedenPeer::CO_US_IN, ProcedenPeer::FE_US_IN, ProcedenPeer::CO_US_MO, ProcedenPeer::FE_US_MO, ProcedenPeer::CO_US_EL, ProcedenPeer::FE_US_EL, ProcedenPeer::REVISADO, ProcedenPeer::TRASNFE, ProcedenPeer::CO_SUCU, ProcedenPeer::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('cod_proc', 'des_proc', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CodProc' => 0, 'DesProc' => 1, 'Campo1' => 2, 'Campo2' => 3, 'Campo3' => 4, 'Campo4' => 5, 'CoUsIn' => 6, 'FeUsIn' => 7, 'CoUsMo' => 8, 'FeUsMo' => 9, 'CoUsEl' => 10, 'FeUsEl' => 11, 'Revisado' => 12, 'Trasnfe' => 13, 'CoSucu' => 14, 'Rowguid' => 15, ),
		BasePeer::TYPE_COLNAME => array (ProcedenPeer::COD_PROC => 0, ProcedenPeer::DES_PROC => 1, ProcedenPeer::CAMPO1 => 2, ProcedenPeer::CAMPO2 => 3, ProcedenPeer::CAMPO3 => 4, ProcedenPeer::CAMPO4 => 5, ProcedenPeer::CO_US_IN => 6, ProcedenPeer::FE_US_IN => 7, ProcedenPeer::CO_US_MO => 8, ProcedenPeer::FE_US_MO => 9, ProcedenPeer::CO_US_EL => 10, ProcedenPeer::FE_US_EL => 11, ProcedenPeer::REVISADO => 12, ProcedenPeer::TRASNFE => 13, ProcedenPeer::CO_SUCU => 14, ProcedenPeer::ROWGUID => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('cod_proc' => 0, 'des_proc' => 1, 'campo1' => 2, 'campo2' => 3, 'campo3' => 4, 'campo4' => 5, 'co_us_in' => 6, 'fe_us_in' => 7, 'co_us_mo' => 8, 'fe_us_mo' => 9, 'co_us_el' => 10, 'fe_us_el' => 11, 'revisado' => 12, 'trasnfe' => 13, 'co_sucu' => 14, 'rowguid' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ProcedenMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ProcedenMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ProcedenPeer::getTableMap();
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
		return str_replace(ProcedenPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ProcedenPeer::COD_PROC);

		$criteria->addSelectColumn(ProcedenPeer::DES_PROC);

		$criteria->addSelectColumn(ProcedenPeer::CAMPO1);

		$criteria->addSelectColumn(ProcedenPeer::CAMPO2);

		$criteria->addSelectColumn(ProcedenPeer::CAMPO3);

		$criteria->addSelectColumn(ProcedenPeer::CAMPO4);

		$criteria->addSelectColumn(ProcedenPeer::CO_US_IN);

		$criteria->addSelectColumn(ProcedenPeer::FE_US_IN);

		$criteria->addSelectColumn(ProcedenPeer::CO_US_MO);

		$criteria->addSelectColumn(ProcedenPeer::FE_US_MO);

		$criteria->addSelectColumn(ProcedenPeer::CO_US_EL);

		$criteria->addSelectColumn(ProcedenPeer::FE_US_EL);

		$criteria->addSelectColumn(ProcedenPeer::REVISADO);

		$criteria->addSelectColumn(ProcedenPeer::TRASNFE);

		$criteria->addSelectColumn(ProcedenPeer::CO_SUCU);

		$criteria->addSelectColumn(ProcedenPeer::ROWGUID);

	}

	const COUNT = 'COUNT(proceden.COD_PROC)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT proceden.COD_PROC)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProcedenPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProcedenPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ProcedenPeer::doSelectRS($criteria, $con);
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
		$objects = ProcedenPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ProcedenPeer::populateObjects(ProcedenPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ProcedenPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ProcedenPeer::getOMClass();
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
		return ProcedenPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(ProcedenPeer::COD_PROC);
			$selectCriteria->add(ProcedenPeer::COD_PROC, $criteria->remove(ProcedenPeer::COD_PROC), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ProcedenPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ProcedenPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Proceden) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ProcedenPeer::COD_PROC, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Proceden $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ProcedenPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ProcedenPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ProcedenPeer::DATABASE_NAME, ProcedenPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ProcedenPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ProcedenPeer::DATABASE_NAME);

		$criteria->add(ProcedenPeer::COD_PROC, $pk);


		$v = ProcedenPeer::doSelect($criteria, $con);

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
			$criteria->add(ProcedenPeer::COD_PROC, $pks, Criteria::IN);
			$objs = ProcedenPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseProcedenPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ProcedenMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ProcedenMapBuilder');
}
