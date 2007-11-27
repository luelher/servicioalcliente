<?php


abstract class BaseSubAlmaPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'sub_alma';

	
	const CLASS_DEFAULT = 'lib.model.SubAlma';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_SUB = 'sub_alma.CO_SUB';

	
	const DES_SUB = 'sub_alma.DES_SUB';

	
	const CO_ALMA = 'sub_alma.CO_ALMA';

	
	const CAMPO1 = 'sub_alma.CAMPO1';

	
	const CAMPO2 = 'sub_alma.CAMPO2';

	
	const CAMPO3 = 'sub_alma.CAMPO3';

	
	const CAMPO4 = 'sub_alma.CAMPO4';

	
	const CO_US_IN = 'sub_alma.CO_US_IN';

	
	const FE_US_IN = 'sub_alma.FE_US_IN';

	
	const CO_US_MO = 'sub_alma.CO_US_MO';

	
	const FE_US_MO = 'sub_alma.FE_US_MO';

	
	const CO_US_EL = 'sub_alma.CO_US_EL';

	
	const FE_US_EL = 'sub_alma.FE_US_EL';

	
	const REVISADO = 'sub_alma.REVISADO';

	
	const TRASNFE = 'sub_alma.TRASNFE';

	
	const CO_SUCU = 'sub_alma.CO_SUCU';

	
	const ROWGUID = 'sub_alma.ROWGUID';

	
	const NOVENTA = 'sub_alma.NOVENTA';

	
	const NOCOMPRA = 'sub_alma.NOCOMPRA';

	
	const MATERIALES = 'sub_alma.MATERIALES';

	
	const PRODUCCION = 'sub_alma.PRODUCCION';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoSub', 'DesSub', 'CoAlma', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'Noventa', 'Nocompra', 'Materiales', 'Produccion', ),
		BasePeer::TYPE_COLNAME => array (SubAlmaPeer::CO_SUB, SubAlmaPeer::DES_SUB, SubAlmaPeer::CO_ALMA, SubAlmaPeer::CAMPO1, SubAlmaPeer::CAMPO2, SubAlmaPeer::CAMPO3, SubAlmaPeer::CAMPO4, SubAlmaPeer::CO_US_IN, SubAlmaPeer::FE_US_IN, SubAlmaPeer::CO_US_MO, SubAlmaPeer::FE_US_MO, SubAlmaPeer::CO_US_EL, SubAlmaPeer::FE_US_EL, SubAlmaPeer::REVISADO, SubAlmaPeer::TRASNFE, SubAlmaPeer::CO_SUCU, SubAlmaPeer::ROWGUID, SubAlmaPeer::NOVENTA, SubAlmaPeer::NOCOMPRA, SubAlmaPeer::MATERIALES, SubAlmaPeer::PRODUCCION, ),
		BasePeer::TYPE_FIELDNAME => array ('co_sub', 'des_sub', 'co_alma', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'noventa', 'nocompra', 'materiales', 'produccion', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoSub' => 0, 'DesSub' => 1, 'CoAlma' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'CoUsIn' => 7, 'FeUsIn' => 8, 'CoUsMo' => 9, 'FeUsMo' => 10, 'CoUsEl' => 11, 'FeUsEl' => 12, 'Revisado' => 13, 'Trasnfe' => 14, 'CoSucu' => 15, 'Rowguid' => 16, 'Noventa' => 17, 'Nocompra' => 18, 'Materiales' => 19, 'Produccion' => 20, ),
		BasePeer::TYPE_COLNAME => array (SubAlmaPeer::CO_SUB => 0, SubAlmaPeer::DES_SUB => 1, SubAlmaPeer::CO_ALMA => 2, SubAlmaPeer::CAMPO1 => 3, SubAlmaPeer::CAMPO2 => 4, SubAlmaPeer::CAMPO3 => 5, SubAlmaPeer::CAMPO4 => 6, SubAlmaPeer::CO_US_IN => 7, SubAlmaPeer::FE_US_IN => 8, SubAlmaPeer::CO_US_MO => 9, SubAlmaPeer::FE_US_MO => 10, SubAlmaPeer::CO_US_EL => 11, SubAlmaPeer::FE_US_EL => 12, SubAlmaPeer::REVISADO => 13, SubAlmaPeer::TRASNFE => 14, SubAlmaPeer::CO_SUCU => 15, SubAlmaPeer::ROWGUID => 16, SubAlmaPeer::NOVENTA => 17, SubAlmaPeer::NOCOMPRA => 18, SubAlmaPeer::MATERIALES => 19, SubAlmaPeer::PRODUCCION => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('co_sub' => 0, 'des_sub' => 1, 'co_alma' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'co_us_in' => 7, 'fe_us_in' => 8, 'co_us_mo' => 9, 'fe_us_mo' => 10, 'co_us_el' => 11, 'fe_us_el' => 12, 'revisado' => 13, 'trasnfe' => 14, 'co_sucu' => 15, 'rowguid' => 16, 'noventa' => 17, 'nocompra' => 18, 'materiales' => 19, 'produccion' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SubAlmaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SubAlmaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SubAlmaPeer::getTableMap();
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
		return str_replace(SubAlmaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SubAlmaPeer::CO_SUB);

		$criteria->addSelectColumn(SubAlmaPeer::DES_SUB);

		$criteria->addSelectColumn(SubAlmaPeer::CO_ALMA);

		$criteria->addSelectColumn(SubAlmaPeer::CAMPO1);

		$criteria->addSelectColumn(SubAlmaPeer::CAMPO2);

		$criteria->addSelectColumn(SubAlmaPeer::CAMPO3);

		$criteria->addSelectColumn(SubAlmaPeer::CAMPO4);

		$criteria->addSelectColumn(SubAlmaPeer::CO_US_IN);

		$criteria->addSelectColumn(SubAlmaPeer::FE_US_IN);

		$criteria->addSelectColumn(SubAlmaPeer::CO_US_MO);

		$criteria->addSelectColumn(SubAlmaPeer::FE_US_MO);

		$criteria->addSelectColumn(SubAlmaPeer::CO_US_EL);

		$criteria->addSelectColumn(SubAlmaPeer::FE_US_EL);

		$criteria->addSelectColumn(SubAlmaPeer::REVISADO);

		$criteria->addSelectColumn(SubAlmaPeer::TRASNFE);

		$criteria->addSelectColumn(SubAlmaPeer::CO_SUCU);

		$criteria->addSelectColumn(SubAlmaPeer::ROWGUID);

		$criteria->addSelectColumn(SubAlmaPeer::NOVENTA);

		$criteria->addSelectColumn(SubAlmaPeer::NOCOMPRA);

		$criteria->addSelectColumn(SubAlmaPeer::MATERIALES);

		$criteria->addSelectColumn(SubAlmaPeer::PRODUCCION);

	}

	const COUNT = 'COUNT(sub_alma.CO_SUB)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT sub_alma.CO_SUB)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubAlmaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubAlmaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SubAlmaPeer::doSelectRS($criteria, $con);
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
		$objects = SubAlmaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SubAlmaPeer::populateObjects(SubAlmaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SubAlmaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SubAlmaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinAlmacen(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubAlmaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubAlmaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubAlmaPeer::CO_ALMA, AlmacenPeer::CO_ALMA);

		$rs = SubAlmaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAlmacen(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubAlmaPeer::addSelectColumns($c);
		$startcol = (SubAlmaPeer::NUM_COLUMNS - SubAlmaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AlmacenPeer::addSelectColumns($c);

		$c->addJoin(SubAlmaPeer::CO_ALMA, AlmacenPeer::CO_ALMA);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubAlmaPeer::getOMClass();

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
										$temp_obj2->addSubAlma($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSubAlmas();
				$obj2->addSubAlma($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubAlmaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubAlmaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubAlmaPeer::CO_ALMA, AlmacenPeer::CO_ALMA);

		$rs = SubAlmaPeer::doSelectRS($criteria, $con);
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

		SubAlmaPeer::addSelectColumns($c);
		$startcol2 = (SubAlmaPeer::NUM_COLUMNS - SubAlmaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AlmacenPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(SubAlmaPeer::CO_ALMA, AlmacenPeer::CO_ALMA);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubAlmaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getAlmacen(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSubAlma($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSubAlmas();
				$obj2->addSubAlma($obj1);
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
		return SubAlmaPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(SubAlmaPeer::CO_SUB);
			$selectCriteria->add(SubAlmaPeer::CO_SUB, $criteria->remove(SubAlmaPeer::CO_SUB), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SubAlmaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SubAlmaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SubAlma) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SubAlmaPeer::CO_SUB, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SubAlma $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubAlmaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubAlmaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubAlmaPeer::DATABASE_NAME, SubAlmaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubAlmaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SubAlmaPeer::DATABASE_NAME);

		$criteria->add(SubAlmaPeer::CO_SUB, $pk);


		$v = SubAlmaPeer::doSelect($criteria, $con);

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
			$criteria->add(SubAlmaPeer::CO_SUB, $pks, Criteria::IN);
			$objs = SubAlmaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSubAlmaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SubAlmaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SubAlmaMapBuilder');
}
