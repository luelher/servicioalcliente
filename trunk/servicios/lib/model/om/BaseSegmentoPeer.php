<?php


abstract class BaseSegmentoPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'segmento';

	
	const CLASS_DEFAULT = 'lib.model.Segmento';

	
	const NUM_COLUMNS = 19;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_SEG = 'segmento.CO_SEG';

	
	const SEG_DES = 'segmento.SEG_DES';

	
	const C_CUENTA = 'segmento.C_CUENTA';

	
	const P_CUENTA = 'segmento.P_CUENTA';

	
	const DIS_CEN = 'segmento.DIS_CEN';

	
	const CAMPO1 = 'segmento.CAMPO1';

	
	const CAMPO2 = 'segmento.CAMPO2';

	
	const CAMPO3 = 'segmento.CAMPO3';

	
	const CAMPO4 = 'segmento.CAMPO4';

	
	const CO_US_IN = 'segmento.CO_US_IN';

	
	const FE_US_IN = 'segmento.FE_US_IN';

	
	const CO_US_MO = 'segmento.CO_US_MO';

	
	const FE_US_MO = 'segmento.FE_US_MO';

	
	const CO_US_EL = 'segmento.CO_US_EL';

	
	const FE_US_EL = 'segmento.FE_US_EL';

	
	const REVISADO = 'segmento.REVISADO';

	
	const TRASNFE = 'segmento.TRASNFE';

	
	const CO_SUCU = 'segmento.CO_SUCU';

	
	const ROWGUID = 'segmento.ROWGUID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeg', 'SegDes', 'CCuenta', 'PCuenta', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_COLNAME => array (SegmentoPeer::CO_SEG, SegmentoPeer::SEG_DES, SegmentoPeer::C_CUENTA, SegmentoPeer::P_CUENTA, SegmentoPeer::DIS_CEN, SegmentoPeer::CAMPO1, SegmentoPeer::CAMPO2, SegmentoPeer::CAMPO3, SegmentoPeer::CAMPO4, SegmentoPeer::CO_US_IN, SegmentoPeer::FE_US_IN, SegmentoPeer::CO_US_MO, SegmentoPeer::FE_US_MO, SegmentoPeer::CO_US_EL, SegmentoPeer::FE_US_EL, SegmentoPeer::REVISADO, SegmentoPeer::TRASNFE, SegmentoPeer::CO_SUCU, SegmentoPeer::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_seg', 'seg_des', 'c_cuenta', 'p_cuenta', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeg' => 0, 'SegDes' => 1, 'CCuenta' => 2, 'PCuenta' => 3, 'DisCen' => 4, 'Campo1' => 5, 'Campo2' => 6, 'Campo3' => 7, 'Campo4' => 8, 'CoUsIn' => 9, 'FeUsIn' => 10, 'CoUsMo' => 11, 'FeUsMo' => 12, 'CoUsEl' => 13, 'FeUsEl' => 14, 'Revisado' => 15, 'Trasnfe' => 16, 'CoSucu' => 17, 'Rowguid' => 18, ),
		BasePeer::TYPE_COLNAME => array (SegmentoPeer::CO_SEG => 0, SegmentoPeer::SEG_DES => 1, SegmentoPeer::C_CUENTA => 2, SegmentoPeer::P_CUENTA => 3, SegmentoPeer::DIS_CEN => 4, SegmentoPeer::CAMPO1 => 5, SegmentoPeer::CAMPO2 => 6, SegmentoPeer::CAMPO3 => 7, SegmentoPeer::CAMPO4 => 8, SegmentoPeer::CO_US_IN => 9, SegmentoPeer::FE_US_IN => 10, SegmentoPeer::CO_US_MO => 11, SegmentoPeer::FE_US_MO => 12, SegmentoPeer::CO_US_EL => 13, SegmentoPeer::FE_US_EL => 14, SegmentoPeer::REVISADO => 15, SegmentoPeer::TRASNFE => 16, SegmentoPeer::CO_SUCU => 17, SegmentoPeer::ROWGUID => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('co_seg' => 0, 'seg_des' => 1, 'c_cuenta' => 2, 'p_cuenta' => 3, 'dis_cen' => 4, 'campo1' => 5, 'campo2' => 6, 'campo3' => 7, 'campo4' => 8, 'co_us_in' => 9, 'fe_us_in' => 10, 'co_us_mo' => 11, 'fe_us_mo' => 12, 'co_us_el' => 13, 'fe_us_el' => 14, 'revisado' => 15, 'trasnfe' => 16, 'co_sucu' => 17, 'rowguid' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SegmentoMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SegmentoMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SegmentoPeer::getTableMap();
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
		return str_replace(SegmentoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SegmentoPeer::CO_SEG);

		$criteria->addSelectColumn(SegmentoPeer::SEG_DES);

		$criteria->addSelectColumn(SegmentoPeer::C_CUENTA);

		$criteria->addSelectColumn(SegmentoPeer::P_CUENTA);

		$criteria->addSelectColumn(SegmentoPeer::DIS_CEN);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO1);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO2);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO3);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO4);

		$criteria->addSelectColumn(SegmentoPeer::CO_US_IN);

		$criteria->addSelectColumn(SegmentoPeer::FE_US_IN);

		$criteria->addSelectColumn(SegmentoPeer::CO_US_MO);

		$criteria->addSelectColumn(SegmentoPeer::FE_US_MO);

		$criteria->addSelectColumn(SegmentoPeer::CO_US_EL);

		$criteria->addSelectColumn(SegmentoPeer::FE_US_EL);

		$criteria->addSelectColumn(SegmentoPeer::REVISADO);

		$criteria->addSelectColumn(SegmentoPeer::TRASNFE);

		$criteria->addSelectColumn(SegmentoPeer::CO_SUCU);

		$criteria->addSelectColumn(SegmentoPeer::ROWGUID);

	}

	const COUNT = 'COUNT(segmento.CO_SEG)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT segmento.CO_SEG)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SegmentoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SegmentoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SegmentoPeer::doSelectRS($criteria, $con);
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
		$objects = SegmentoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SegmentoPeer::populateObjects(SegmentoPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SegmentoPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SegmentoPeer::getOMClass();
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
		return SegmentoPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(SegmentoPeer::CO_SEG);
			$selectCriteria->add(SegmentoPeer::CO_SEG, $criteria->remove(SegmentoPeer::CO_SEG), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SegmentoPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Segmento) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SegmentoPeer::CO_SEG, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Segmento $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SegmentoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SegmentoPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SegmentoPeer::DATABASE_NAME, SegmentoPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SegmentoPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SegmentoPeer::DATABASE_NAME);

		$criteria->add(SegmentoPeer::CO_SEG, $pk);


		$v = SegmentoPeer::doSelect($criteria, $con);

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
			$criteria->add(SegmentoPeer::CO_SEG, $pks, Criteria::IN);
			$objs = SegmentoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSegmentoPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SegmentoMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SegmentoMapBuilder');
}
