<?php


abstract class BaseCatArtPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'cat_art';

	
	const CLASS_DEFAULT = 'lib.model.CatArt';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_CAT = 'cat_art.CO_CAT';

	
	const CAT_DES = 'cat_art.CAT_DES';

	
	const DIS_CEN = 'cat_art.DIS_CEN';

	
	const CAMPO1 = 'cat_art.CAMPO1';

	
	const CAMPO2 = 'cat_art.CAMPO2';

	
	const CAMPO3 = 'cat_art.CAMPO3';

	
	const CAMPO4 = 'cat_art.CAMPO4';

	
	const CO_US_IN = 'cat_art.CO_US_IN';

	
	const FE_US_IN = 'cat_art.FE_US_IN';

	
	const CO_US_MO = 'cat_art.CO_US_MO';

	
	const FE_US_MO = 'cat_art.FE_US_MO';

	
	const CO_US_EL = 'cat_art.CO_US_EL';

	
	const FE_US_EL = 'cat_art.FE_US_EL';

	
	const REVISADO = 'cat_art.REVISADO';

	
	const TRASNFE = 'cat_art.TRASNFE';

	
	const CO_SUCU = 'cat_art.CO_SUCU';

	
	const ROWGUID = 'cat_art.ROWGUID';

	
	const CO_IMUN = 'cat_art.CO_IMUN';

	
	const CO_RETEN = 'cat_art.CO_RETEN';

	
	const ROW_ID = 'cat_art.ROW_ID';

	
	const MOVIL = 'cat_art.MOVIL';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoCat', 'CatDes', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'CoImun', 'CoReten', 'RowId', 'Movil', ),
		BasePeer::TYPE_COLNAME => array (CatArtPeer::CO_CAT, CatArtPeer::CAT_DES, CatArtPeer::DIS_CEN, CatArtPeer::CAMPO1, CatArtPeer::CAMPO2, CatArtPeer::CAMPO3, CatArtPeer::CAMPO4, CatArtPeer::CO_US_IN, CatArtPeer::FE_US_IN, CatArtPeer::CO_US_MO, CatArtPeer::FE_US_MO, CatArtPeer::CO_US_EL, CatArtPeer::FE_US_EL, CatArtPeer::REVISADO, CatArtPeer::TRASNFE, CatArtPeer::CO_SUCU, CatArtPeer::ROWGUID, CatArtPeer::CO_IMUN, CatArtPeer::CO_RETEN, CatArtPeer::ROW_ID, CatArtPeer::MOVIL, ),
		BasePeer::TYPE_FIELDNAME => array ('co_cat', 'cat_des', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'co_imun', 'co_reten', 'row_id', 'movil', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoCat' => 0, 'CatDes' => 1, 'DisCen' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'CoUsIn' => 7, 'FeUsIn' => 8, 'CoUsMo' => 9, 'FeUsMo' => 10, 'CoUsEl' => 11, 'FeUsEl' => 12, 'Revisado' => 13, 'Trasnfe' => 14, 'CoSucu' => 15, 'Rowguid' => 16, 'CoImun' => 17, 'CoReten' => 18, 'RowId' => 19, 'Movil' => 20, ),
		BasePeer::TYPE_COLNAME => array (CatArtPeer::CO_CAT => 0, CatArtPeer::CAT_DES => 1, CatArtPeer::DIS_CEN => 2, CatArtPeer::CAMPO1 => 3, CatArtPeer::CAMPO2 => 4, CatArtPeer::CAMPO3 => 5, CatArtPeer::CAMPO4 => 6, CatArtPeer::CO_US_IN => 7, CatArtPeer::FE_US_IN => 8, CatArtPeer::CO_US_MO => 9, CatArtPeer::FE_US_MO => 10, CatArtPeer::CO_US_EL => 11, CatArtPeer::FE_US_EL => 12, CatArtPeer::REVISADO => 13, CatArtPeer::TRASNFE => 14, CatArtPeer::CO_SUCU => 15, CatArtPeer::ROWGUID => 16, CatArtPeer::CO_IMUN => 17, CatArtPeer::CO_RETEN => 18, CatArtPeer::ROW_ID => 19, CatArtPeer::MOVIL => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('co_cat' => 0, 'cat_des' => 1, 'dis_cen' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'co_us_in' => 7, 'fe_us_in' => 8, 'co_us_mo' => 9, 'fe_us_mo' => 10, 'co_us_el' => 11, 'fe_us_el' => 12, 'revisado' => 13, 'trasnfe' => 14, 'co_sucu' => 15, 'rowguid' => 16, 'co_imun' => 17, 'co_reten' => 18, 'row_id' => 19, 'movil' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/CatArtMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.CatArtMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CatArtPeer::getTableMap();
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
		return str_replace(CatArtPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CatArtPeer::CO_CAT);

		$criteria->addSelectColumn(CatArtPeer::CAT_DES);

		$criteria->addSelectColumn(CatArtPeer::DIS_CEN);

		$criteria->addSelectColumn(CatArtPeer::CAMPO1);

		$criteria->addSelectColumn(CatArtPeer::CAMPO2);

		$criteria->addSelectColumn(CatArtPeer::CAMPO3);

		$criteria->addSelectColumn(CatArtPeer::CAMPO4);

		$criteria->addSelectColumn(CatArtPeer::CO_US_IN);

		$criteria->addSelectColumn(CatArtPeer::FE_US_IN);

		$criteria->addSelectColumn(CatArtPeer::CO_US_MO);

		$criteria->addSelectColumn(CatArtPeer::FE_US_MO);

		$criteria->addSelectColumn(CatArtPeer::CO_US_EL);

		$criteria->addSelectColumn(CatArtPeer::FE_US_EL);

		$criteria->addSelectColumn(CatArtPeer::REVISADO);

		$criteria->addSelectColumn(CatArtPeer::TRASNFE);

		$criteria->addSelectColumn(CatArtPeer::CO_SUCU);

		$criteria->addSelectColumn(CatArtPeer::ROWGUID);

		$criteria->addSelectColumn(CatArtPeer::CO_IMUN);

		$criteria->addSelectColumn(CatArtPeer::CO_RETEN);

		$criteria->addSelectColumn(CatArtPeer::ROW_ID);

		$criteria->addSelectColumn(CatArtPeer::MOVIL);

	}

	const COUNT = 'COUNT(cat_art.CO_CAT)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT cat_art.CO_CAT)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CatArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CatArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CatArtPeer::doSelectRS($criteria, $con);
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
		$objects = CatArtPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CatArtPeer::populateObjects(CatArtPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CatArtPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CatArtPeer::getOMClass();
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
		return CatArtPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(CatArtPeer::CO_CAT);
			$selectCriteria->add(CatArtPeer::CO_CAT, $criteria->remove(CatArtPeer::CO_CAT), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CatArtPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CatArtPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CatArt) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CatArtPeer::CO_CAT, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CatArt $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CatArtPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CatArtPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CatArtPeer::DATABASE_NAME, CatArtPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CatArtPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CatArtPeer::DATABASE_NAME);

		$criteria->add(CatArtPeer::CO_CAT, $pk);


		$v = CatArtPeer::doSelect($criteria, $con);

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
			$criteria->add(CatArtPeer::CO_CAT, $pks, Criteria::IN);
			$objs = CatArtPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCatArtPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/CatArtMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.CatArtMapBuilder');
}
