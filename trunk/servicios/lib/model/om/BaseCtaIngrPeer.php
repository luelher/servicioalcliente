<?php


abstract class BaseCtaIngrPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'cta_ingr';

	
	const CLASS_DEFAULT = 'lib.model.CtaIngr';

	
	const NUM_COLUMNS = 19;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_INGR = 'cta_ingr.CO_INGR';

	
	const DESCRIP = 'cta_ingr.DESCRIP';

	
	const CTA_CONTAB = 'cta_ingr.CTA_CONTAB';

	
	const DIS_CEN = 'cta_ingr.DIS_CEN';

	
	const CAMPO1 = 'cta_ingr.CAMPO1';

	
	const CAMPO2 = 'cta_ingr.CAMPO2';

	
	const CAMPO3 = 'cta_ingr.CAMPO3';

	
	const CAMPO4 = 'cta_ingr.CAMPO4';

	
	const CO_US_IN = 'cta_ingr.CO_US_IN';

	
	const FE_US_IN = 'cta_ingr.FE_US_IN';

	
	const CO_US_MO = 'cta_ingr.CO_US_MO';

	
	const FE_US_MO = 'cta_ingr.FE_US_MO';

	
	const CO_US_EL = 'cta_ingr.CO_US_EL';

	
	const FE_US_EL = 'cta_ingr.FE_US_EL';

	
	const REVISADO = 'cta_ingr.REVISADO';

	
	const TRASNFE = 'cta_ingr.TRASNFE';

	
	const CO_SUCU = 'cta_ingr.CO_SUCU';

	
	const ROWGUID = 'cta_ingr.ROWGUID';

	
	const CO_ISLR = 'cta_ingr.CO_ISLR';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoIngr', 'Descrip', 'CtaContab', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'CoIslr', ),
		BasePeer::TYPE_COLNAME => array (CtaIngrPeer::CO_INGR, CtaIngrPeer::DESCRIP, CtaIngrPeer::CTA_CONTAB, CtaIngrPeer::DIS_CEN, CtaIngrPeer::CAMPO1, CtaIngrPeer::CAMPO2, CtaIngrPeer::CAMPO3, CtaIngrPeer::CAMPO4, CtaIngrPeer::CO_US_IN, CtaIngrPeer::FE_US_IN, CtaIngrPeer::CO_US_MO, CtaIngrPeer::FE_US_MO, CtaIngrPeer::CO_US_EL, CtaIngrPeer::FE_US_EL, CtaIngrPeer::REVISADO, CtaIngrPeer::TRASNFE, CtaIngrPeer::CO_SUCU, CtaIngrPeer::ROWGUID, CtaIngrPeer::CO_ISLR, ),
		BasePeer::TYPE_FIELDNAME => array ('co_ingr', 'descrip', 'cta_contab', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'co_islr', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoIngr' => 0, 'Descrip' => 1, 'CtaContab' => 2, 'DisCen' => 3, 'Campo1' => 4, 'Campo2' => 5, 'Campo3' => 6, 'Campo4' => 7, 'CoUsIn' => 8, 'FeUsIn' => 9, 'CoUsMo' => 10, 'FeUsMo' => 11, 'CoUsEl' => 12, 'FeUsEl' => 13, 'Revisado' => 14, 'Trasnfe' => 15, 'CoSucu' => 16, 'Rowguid' => 17, 'CoIslr' => 18, ),
		BasePeer::TYPE_COLNAME => array (CtaIngrPeer::CO_INGR => 0, CtaIngrPeer::DESCRIP => 1, CtaIngrPeer::CTA_CONTAB => 2, CtaIngrPeer::DIS_CEN => 3, CtaIngrPeer::CAMPO1 => 4, CtaIngrPeer::CAMPO2 => 5, CtaIngrPeer::CAMPO3 => 6, CtaIngrPeer::CAMPO4 => 7, CtaIngrPeer::CO_US_IN => 8, CtaIngrPeer::FE_US_IN => 9, CtaIngrPeer::CO_US_MO => 10, CtaIngrPeer::FE_US_MO => 11, CtaIngrPeer::CO_US_EL => 12, CtaIngrPeer::FE_US_EL => 13, CtaIngrPeer::REVISADO => 14, CtaIngrPeer::TRASNFE => 15, CtaIngrPeer::CO_SUCU => 16, CtaIngrPeer::ROWGUID => 17, CtaIngrPeer::CO_ISLR => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('co_ingr' => 0, 'descrip' => 1, 'cta_contab' => 2, 'dis_cen' => 3, 'campo1' => 4, 'campo2' => 5, 'campo3' => 6, 'campo4' => 7, 'co_us_in' => 8, 'fe_us_in' => 9, 'co_us_mo' => 10, 'fe_us_mo' => 11, 'co_us_el' => 12, 'fe_us_el' => 13, 'revisado' => 14, 'trasnfe' => 15, 'co_sucu' => 16, 'rowguid' => 17, 'co_islr' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/CtaIngrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.CtaIngrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CtaIngrPeer::getTableMap();
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
		return str_replace(CtaIngrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CtaIngrPeer::CO_INGR);

		$criteria->addSelectColumn(CtaIngrPeer::DESCRIP);

		$criteria->addSelectColumn(CtaIngrPeer::CTA_CONTAB);

		$criteria->addSelectColumn(CtaIngrPeer::DIS_CEN);

		$criteria->addSelectColumn(CtaIngrPeer::CAMPO1);

		$criteria->addSelectColumn(CtaIngrPeer::CAMPO2);

		$criteria->addSelectColumn(CtaIngrPeer::CAMPO3);

		$criteria->addSelectColumn(CtaIngrPeer::CAMPO4);

		$criteria->addSelectColumn(CtaIngrPeer::CO_US_IN);

		$criteria->addSelectColumn(CtaIngrPeer::FE_US_IN);

		$criteria->addSelectColumn(CtaIngrPeer::CO_US_MO);

		$criteria->addSelectColumn(CtaIngrPeer::FE_US_MO);

		$criteria->addSelectColumn(CtaIngrPeer::CO_US_EL);

		$criteria->addSelectColumn(CtaIngrPeer::FE_US_EL);

		$criteria->addSelectColumn(CtaIngrPeer::REVISADO);

		$criteria->addSelectColumn(CtaIngrPeer::TRASNFE);

		$criteria->addSelectColumn(CtaIngrPeer::CO_SUCU);

		$criteria->addSelectColumn(CtaIngrPeer::ROWGUID);

		$criteria->addSelectColumn(CtaIngrPeer::CO_ISLR);

	}

	const COUNT = 'COUNT(cta_ingr.CO_INGR)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT cta_ingr.CO_INGR)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CtaIngrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CtaIngrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CtaIngrPeer::doSelectRS($criteria, $con);
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
		$objects = CtaIngrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CtaIngrPeer::populateObjects(CtaIngrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CtaIngrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CtaIngrPeer::getOMClass();
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
		return CtaIngrPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(CtaIngrPeer::CO_INGR);
			$selectCriteria->add(CtaIngrPeer::CO_INGR, $criteria->remove(CtaIngrPeer::CO_INGR), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CtaIngrPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CtaIngrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CtaIngr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CtaIngrPeer::CO_INGR, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CtaIngr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CtaIngrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CtaIngrPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CtaIngrPeer::DATABASE_NAME, CtaIngrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CtaIngrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CtaIngrPeer::DATABASE_NAME);

		$criteria->add(CtaIngrPeer::CO_INGR, $pk);


		$v = CtaIngrPeer::doSelect($criteria, $con);

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
			$criteria->add(CtaIngrPeer::CO_INGR, $pks, Criteria::IN);
			$objs = CtaIngrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCtaIngrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/CtaIngrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.CtaIngrMapBuilder');
}
