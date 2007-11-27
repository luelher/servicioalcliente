<?php


abstract class BaseTipoProPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'tipo_pro';

	
	const CLASS_DEFAULT = 'lib.model.TipoPro';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const TIP_PRO = 'tipo_pro.TIP_PRO';

	
	const DES_TIPO = 'tipo_pro.DES_TIPO';

	
	const CAMPO1 = 'tipo_pro.CAMPO1';

	
	const CAMPO2 = 'tipo_pro.CAMPO2';

	
	const CAMPO3 = 'tipo_pro.CAMPO3';

	
	const CAMPO4 = 'tipo_pro.CAMPO4';

	
	const CO_US_IN = 'tipo_pro.CO_US_IN';

	
	const FE_US_IN = 'tipo_pro.FE_US_IN';

	
	const CO_US_MO = 'tipo_pro.CO_US_MO';

	
	const FE_US_MO = 'tipo_pro.FE_US_MO';

	
	const CO_US_EL = 'tipo_pro.CO_US_EL';

	
	const FE_US_EL = 'tipo_pro.FE_US_EL';

	
	const REVISADO = 'tipo_pro.REVISADO';

	
	const TRASNFE = 'tipo_pro.TRASNFE';

	
	const CO_SUCU = 'tipo_pro.CO_SUCU';

	
	const ROWGUID = 'tipo_pro.ROWGUID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('TipPro', 'DesTipo', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_COLNAME => array (TipoProPeer::TIP_PRO, TipoProPeer::DES_TIPO, TipoProPeer::CAMPO1, TipoProPeer::CAMPO2, TipoProPeer::CAMPO3, TipoProPeer::CAMPO4, TipoProPeer::CO_US_IN, TipoProPeer::FE_US_IN, TipoProPeer::CO_US_MO, TipoProPeer::FE_US_MO, TipoProPeer::CO_US_EL, TipoProPeer::FE_US_EL, TipoProPeer::REVISADO, TipoProPeer::TRASNFE, TipoProPeer::CO_SUCU, TipoProPeer::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('tip_pro', 'des_tipo', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('TipPro' => 0, 'DesTipo' => 1, 'Campo1' => 2, 'Campo2' => 3, 'Campo3' => 4, 'Campo4' => 5, 'CoUsIn' => 6, 'FeUsIn' => 7, 'CoUsMo' => 8, 'FeUsMo' => 9, 'CoUsEl' => 10, 'FeUsEl' => 11, 'Revisado' => 12, 'Trasnfe' => 13, 'CoSucu' => 14, 'Rowguid' => 15, ),
		BasePeer::TYPE_COLNAME => array (TipoProPeer::TIP_PRO => 0, TipoProPeer::DES_TIPO => 1, TipoProPeer::CAMPO1 => 2, TipoProPeer::CAMPO2 => 3, TipoProPeer::CAMPO3 => 4, TipoProPeer::CAMPO4 => 5, TipoProPeer::CO_US_IN => 6, TipoProPeer::FE_US_IN => 7, TipoProPeer::CO_US_MO => 8, TipoProPeer::FE_US_MO => 9, TipoProPeer::CO_US_EL => 10, TipoProPeer::FE_US_EL => 11, TipoProPeer::REVISADO => 12, TipoProPeer::TRASNFE => 13, TipoProPeer::CO_SUCU => 14, TipoProPeer::ROWGUID => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('tip_pro' => 0, 'des_tipo' => 1, 'campo1' => 2, 'campo2' => 3, 'campo3' => 4, 'campo4' => 5, 'co_us_in' => 6, 'fe_us_in' => 7, 'co_us_mo' => 8, 'fe_us_mo' => 9, 'co_us_el' => 10, 'fe_us_el' => 11, 'revisado' => 12, 'trasnfe' => 13, 'co_sucu' => 14, 'rowguid' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/TipoProMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.TipoProMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TipoProPeer::getTableMap();
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
		return str_replace(TipoProPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TipoProPeer::TIP_PRO);

		$criteria->addSelectColumn(TipoProPeer::DES_TIPO);

		$criteria->addSelectColumn(TipoProPeer::CAMPO1);

		$criteria->addSelectColumn(TipoProPeer::CAMPO2);

		$criteria->addSelectColumn(TipoProPeer::CAMPO3);

		$criteria->addSelectColumn(TipoProPeer::CAMPO4);

		$criteria->addSelectColumn(TipoProPeer::CO_US_IN);

		$criteria->addSelectColumn(TipoProPeer::FE_US_IN);

		$criteria->addSelectColumn(TipoProPeer::CO_US_MO);

		$criteria->addSelectColumn(TipoProPeer::FE_US_MO);

		$criteria->addSelectColumn(TipoProPeer::CO_US_EL);

		$criteria->addSelectColumn(TipoProPeer::FE_US_EL);

		$criteria->addSelectColumn(TipoProPeer::REVISADO);

		$criteria->addSelectColumn(TipoProPeer::TRASNFE);

		$criteria->addSelectColumn(TipoProPeer::CO_SUCU);

		$criteria->addSelectColumn(TipoProPeer::ROWGUID);

	}

	const COUNT = 'COUNT(tipo_pro.TIP_PRO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tipo_pro.TIP_PRO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TipoProPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TipoProPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TipoProPeer::doSelectRS($criteria, $con);
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
		$objects = TipoProPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TipoProPeer::populateObjects(TipoProPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TipoProPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TipoProPeer::getOMClass();
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
		return TipoProPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(TipoProPeer::TIP_PRO);
			$selectCriteria->add(TipoProPeer::TIP_PRO, $criteria->remove(TipoProPeer::TIP_PRO), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TipoProPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TipoProPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TipoPro) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TipoProPeer::TIP_PRO, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TipoPro $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TipoProPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TipoProPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TipoProPeer::DATABASE_NAME, TipoProPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TipoProPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TipoProPeer::DATABASE_NAME);

		$criteria->add(TipoProPeer::TIP_PRO, $pk);


		$v = TipoProPeer::doSelect($criteria, $con);

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
			$criteria->add(TipoProPeer::TIP_PRO, $pks, Criteria::IN);
			$objs = TipoProPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTipoProPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/TipoProMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.TipoProMapBuilder');
}
