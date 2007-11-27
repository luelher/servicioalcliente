<?php


abstract class BaseSubLinPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'sub_lin';

	
	const CLASS_DEFAULT = 'lib.model.SubLin';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_SUBL = 'sub_lin.CO_SUBL';

	
	const SUBL_DES = 'sub_lin.SUBL_DES';

	
	const CO_LIN = 'sub_lin.CO_LIN';

	
	const CAMPO1 = 'sub_lin.CAMPO1';

	
	const CAMPO2 = 'sub_lin.CAMPO2';

	
	const CAMPO3 = 'sub_lin.CAMPO3';

	
	const CAMPO4 = 'sub_lin.CAMPO4';

	
	const CO_US_IN = 'sub_lin.CO_US_IN';

	
	const FE_US_IN = 'sub_lin.FE_US_IN';

	
	const CO_US_MO = 'sub_lin.CO_US_MO';

	
	const FE_US_MO = 'sub_lin.FE_US_MO';

	
	const CO_US_EL = 'sub_lin.CO_US_EL';

	
	const FE_US_EL = 'sub_lin.FE_US_EL';

	
	const REVISADO = 'sub_lin.REVISADO';

	
	const TRASNFE = 'sub_lin.TRASNFE';

	
	const CO_SUCU = 'sub_lin.CO_SUCU';

	
	const ROWGUID = 'sub_lin.ROWGUID';

	
	const CO_IMUN = 'sub_lin.CO_IMUN';

	
	const CO_RETEN = 'sub_lin.CO_RETEN';

	
	const I_SUBL_DES = 'sub_lin.I_SUBL_DES';

	
	const MOVIL = 'sub_lin.MOVIL';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoSubl', 'SublDes', 'CoLin', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'CoImun', 'CoReten', 'ISublDes', 'Movil', ),
		BasePeer::TYPE_COLNAME => array (SubLinPeer::CO_SUBL, SubLinPeer::SUBL_DES, SubLinPeer::CO_LIN, SubLinPeer::CAMPO1, SubLinPeer::CAMPO2, SubLinPeer::CAMPO3, SubLinPeer::CAMPO4, SubLinPeer::CO_US_IN, SubLinPeer::FE_US_IN, SubLinPeer::CO_US_MO, SubLinPeer::FE_US_MO, SubLinPeer::CO_US_EL, SubLinPeer::FE_US_EL, SubLinPeer::REVISADO, SubLinPeer::TRASNFE, SubLinPeer::CO_SUCU, SubLinPeer::ROWGUID, SubLinPeer::CO_IMUN, SubLinPeer::CO_RETEN, SubLinPeer::I_SUBL_DES, SubLinPeer::MOVIL, ),
		BasePeer::TYPE_FIELDNAME => array ('co_subl', 'subl_des', 'co_lin', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'co_imun', 'co_reten', 'i_subl_des', 'movil', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoSubl' => 0, 'SublDes' => 1, 'CoLin' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'CoUsIn' => 7, 'FeUsIn' => 8, 'CoUsMo' => 9, 'FeUsMo' => 10, 'CoUsEl' => 11, 'FeUsEl' => 12, 'Revisado' => 13, 'Trasnfe' => 14, 'CoSucu' => 15, 'Rowguid' => 16, 'CoImun' => 17, 'CoReten' => 18, 'ISublDes' => 19, 'Movil' => 20, ),
		BasePeer::TYPE_COLNAME => array (SubLinPeer::CO_SUBL => 0, SubLinPeer::SUBL_DES => 1, SubLinPeer::CO_LIN => 2, SubLinPeer::CAMPO1 => 3, SubLinPeer::CAMPO2 => 4, SubLinPeer::CAMPO3 => 5, SubLinPeer::CAMPO4 => 6, SubLinPeer::CO_US_IN => 7, SubLinPeer::FE_US_IN => 8, SubLinPeer::CO_US_MO => 9, SubLinPeer::FE_US_MO => 10, SubLinPeer::CO_US_EL => 11, SubLinPeer::FE_US_EL => 12, SubLinPeer::REVISADO => 13, SubLinPeer::TRASNFE => 14, SubLinPeer::CO_SUCU => 15, SubLinPeer::ROWGUID => 16, SubLinPeer::CO_IMUN => 17, SubLinPeer::CO_RETEN => 18, SubLinPeer::I_SUBL_DES => 19, SubLinPeer::MOVIL => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('co_subl' => 0, 'subl_des' => 1, 'co_lin' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'co_us_in' => 7, 'fe_us_in' => 8, 'co_us_mo' => 9, 'fe_us_mo' => 10, 'co_us_el' => 11, 'fe_us_el' => 12, 'revisado' => 13, 'trasnfe' => 14, 'co_sucu' => 15, 'rowguid' => 16, 'co_imun' => 17, 'co_reten' => 18, 'i_subl_des' => 19, 'movil' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SubLinMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SubLinMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SubLinPeer::getTableMap();
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
		return str_replace(SubLinPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SubLinPeer::CO_SUBL);

		$criteria->addSelectColumn(SubLinPeer::SUBL_DES);

		$criteria->addSelectColumn(SubLinPeer::CO_LIN);

		$criteria->addSelectColumn(SubLinPeer::CAMPO1);

		$criteria->addSelectColumn(SubLinPeer::CAMPO2);

		$criteria->addSelectColumn(SubLinPeer::CAMPO3);

		$criteria->addSelectColumn(SubLinPeer::CAMPO4);

		$criteria->addSelectColumn(SubLinPeer::CO_US_IN);

		$criteria->addSelectColumn(SubLinPeer::FE_US_IN);

		$criteria->addSelectColumn(SubLinPeer::CO_US_MO);

		$criteria->addSelectColumn(SubLinPeer::FE_US_MO);

		$criteria->addSelectColumn(SubLinPeer::CO_US_EL);

		$criteria->addSelectColumn(SubLinPeer::FE_US_EL);

		$criteria->addSelectColumn(SubLinPeer::REVISADO);

		$criteria->addSelectColumn(SubLinPeer::TRASNFE);

		$criteria->addSelectColumn(SubLinPeer::CO_SUCU);

		$criteria->addSelectColumn(SubLinPeer::ROWGUID);

		$criteria->addSelectColumn(SubLinPeer::CO_IMUN);

		$criteria->addSelectColumn(SubLinPeer::CO_RETEN);

		$criteria->addSelectColumn(SubLinPeer::I_SUBL_DES);

		$criteria->addSelectColumn(SubLinPeer::MOVIL);

	}

	const COUNT = 'COUNT(sub_lin.CO_SUBL)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT sub_lin.CO_SUBL)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubLinPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubLinPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SubLinPeer::doSelectRS($criteria, $con);
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
		$objects = SubLinPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SubLinPeer::populateObjects(SubLinPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SubLinPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SubLinPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinLinArt(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubLinPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubLinPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubLinPeer::CO_LIN, LinArtPeer::CO_LIN);

		$rs = SubLinPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinLinArt(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubLinPeer::addSelectColumns($c);
		$startcol = (SubLinPeer::NUM_COLUMNS - SubLinPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		LinArtPeer::addSelectColumns($c);

		$c->addJoin(SubLinPeer::CO_LIN, LinArtPeer::CO_LIN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubLinPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSubLin($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSubLins();
				$obj2->addSubLin($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubLinPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubLinPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubLinPeer::CO_LIN, LinArtPeer::CO_LIN);

		$rs = SubLinPeer::doSelectRS($criteria, $con);
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

		SubLinPeer::addSelectColumns($c);
		$startcol2 = (SubLinPeer::NUM_COLUMNS - SubLinPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		$c->addJoin(SubLinPeer::CO_LIN, LinArtPeer::CO_LIN);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSubLin($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSubLins();
				$obj2->addSubLin($obj1);
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
		return SubLinPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(SubLinPeer::CO_SUBL);
			$selectCriteria->add(SubLinPeer::CO_SUBL, $criteria->remove(SubLinPeer::CO_SUBL), $comparison);

			$comparison = $criteria->getComparison(SubLinPeer::CO_LIN);
			$selectCriteria->add(SubLinPeer::CO_LIN, $criteria->remove(SubLinPeer::CO_LIN), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SubLinPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SubLin) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
												if(count($values) == count($values, COUNT_RECURSIVE))
			{
								$values = array($values);
			}
			$vals = array();
			foreach($values as $value)
			{

				$vals[0][] = $value[0];
				$vals[1][] = $value[1];
			}

			$criteria->add(SubLinPeer::CO_SUBL, $vals[0], Criteria::IN);
			$criteria->add(SubLinPeer::CO_LIN, $vals[1], Criteria::IN);
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

	
	public static function doValidate(SubLin $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubLinPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubLinPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubLinPeer::DATABASE_NAME, SubLinPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubLinPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK( $co_subl, $co_lin, $con = null) {
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$criteria = new Criteria();
		$criteria->add(SubLinPeer::CO_SUBL, $co_subl);
		$criteria->add(SubLinPeer::CO_LIN, $co_lin);
		$v = SubLinPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} 
if (Propel::isInit()) {
			try {
		BaseSubLinPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SubLinMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SubLinMapBuilder');
}
