<?php


abstract class BaseTransporPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'transpor';

	
	const CLASS_DEFAULT = 'lib.model.Transpor';

	
	const NUM_COLUMNS = 18;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_TRAN = 'transpor.CO_TRAN';

	
	const DES_TRAN = 'transpor.DES_TRAN';

	
	const RESP_TRA = 'transpor.RESP_TRA';

	
	const CAMPO1 = 'transpor.CAMPO1';

	
	const CAMPO2 = 'transpor.CAMPO2';

	
	const CAMPO3 = 'transpor.CAMPO3';

	
	const CAMPO4 = 'transpor.CAMPO4';

	
	const DIS_CEN = 'transpor.DIS_CEN';

	
	const CO_US_IN = 'transpor.CO_US_IN';

	
	const FE_US_IN = 'transpor.FE_US_IN';

	
	const CO_US_MO = 'transpor.CO_US_MO';

	
	const FE_US_MO = 'transpor.FE_US_MO';

	
	const CO_US_EL = 'transpor.CO_US_EL';

	
	const FE_US_EL = 'transpor.FE_US_EL';

	
	const REVISADO = 'transpor.REVISADO';

	
	const TRASNFE = 'transpor.TRASNFE';

	
	const CO_SUCU = 'transpor.CO_SUCU';

	
	const ROWGUID = 'transpor.ROWGUID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoTran', 'DesTran', 'RespTra', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'DisCen', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_COLNAME => array (TransporPeer::CO_TRAN, TransporPeer::DES_TRAN, TransporPeer::RESP_TRA, TransporPeer::CAMPO1, TransporPeer::CAMPO2, TransporPeer::CAMPO3, TransporPeer::CAMPO4, TransporPeer::DIS_CEN, TransporPeer::CO_US_IN, TransporPeer::FE_US_IN, TransporPeer::CO_US_MO, TransporPeer::FE_US_MO, TransporPeer::CO_US_EL, TransporPeer::FE_US_EL, TransporPeer::REVISADO, TransporPeer::TRASNFE, TransporPeer::CO_SUCU, TransporPeer::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_tran', 'des_tran', 'resp_tra', 'campo1', 'campo2', 'campo3', 'campo4', 'dis_cen', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoTran' => 0, 'DesTran' => 1, 'RespTra' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'DisCen' => 7, 'CoUsIn' => 8, 'FeUsIn' => 9, 'CoUsMo' => 10, 'FeUsMo' => 11, 'CoUsEl' => 12, 'FeUsEl' => 13, 'Revisado' => 14, 'Trasnfe' => 15, 'CoSucu' => 16, 'Rowguid' => 17, ),
		BasePeer::TYPE_COLNAME => array (TransporPeer::CO_TRAN => 0, TransporPeer::DES_TRAN => 1, TransporPeer::RESP_TRA => 2, TransporPeer::CAMPO1 => 3, TransporPeer::CAMPO2 => 4, TransporPeer::CAMPO3 => 5, TransporPeer::CAMPO4 => 6, TransporPeer::DIS_CEN => 7, TransporPeer::CO_US_IN => 8, TransporPeer::FE_US_IN => 9, TransporPeer::CO_US_MO => 10, TransporPeer::FE_US_MO => 11, TransporPeer::CO_US_EL => 12, TransporPeer::FE_US_EL => 13, TransporPeer::REVISADO => 14, TransporPeer::TRASNFE => 15, TransporPeer::CO_SUCU => 16, TransporPeer::ROWGUID => 17, ),
		BasePeer::TYPE_FIELDNAME => array ('co_tran' => 0, 'des_tran' => 1, 'resp_tra' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'dis_cen' => 7, 'co_us_in' => 8, 'fe_us_in' => 9, 'co_us_mo' => 10, 'fe_us_mo' => 11, 'co_us_el' => 12, 'fe_us_el' => 13, 'revisado' => 14, 'trasnfe' => 15, 'co_sucu' => 16, 'rowguid' => 17, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/TransporMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.TransporMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TransporPeer::getTableMap();
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
		return str_replace(TransporPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TransporPeer::CO_TRAN);

		$criteria->addSelectColumn(TransporPeer::DES_TRAN);

		$criteria->addSelectColumn(TransporPeer::RESP_TRA);

		$criteria->addSelectColumn(TransporPeer::CAMPO1);

		$criteria->addSelectColumn(TransporPeer::CAMPO2);

		$criteria->addSelectColumn(TransporPeer::CAMPO3);

		$criteria->addSelectColumn(TransporPeer::CAMPO4);

		$criteria->addSelectColumn(TransporPeer::DIS_CEN);

		$criteria->addSelectColumn(TransporPeer::CO_US_IN);

		$criteria->addSelectColumn(TransporPeer::FE_US_IN);

		$criteria->addSelectColumn(TransporPeer::CO_US_MO);

		$criteria->addSelectColumn(TransporPeer::FE_US_MO);

		$criteria->addSelectColumn(TransporPeer::CO_US_EL);

		$criteria->addSelectColumn(TransporPeer::FE_US_EL);

		$criteria->addSelectColumn(TransporPeer::REVISADO);

		$criteria->addSelectColumn(TransporPeer::TRASNFE);

		$criteria->addSelectColumn(TransporPeer::CO_SUCU);

		$criteria->addSelectColumn(TransporPeer::ROWGUID);

	}

	const COUNT = 'COUNT(transpor.CO_TRAN)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT transpor.CO_TRAN)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TransporPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TransporPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TransporPeer::doSelectRS($criteria, $con);
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
		$objects = TransporPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TransporPeer::populateObjects(TransporPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TransporPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TransporPeer::getOMClass();
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
		return TransporPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(TransporPeer::CO_TRAN);
			$selectCriteria->add(TransporPeer::CO_TRAN, $criteria->remove(TransporPeer::CO_TRAN), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TransporPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TransporPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Transpor) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TransporPeer::CO_TRAN, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Transpor $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TransporPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TransporPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TransporPeer::DATABASE_NAME, TransporPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TransporPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TransporPeer::DATABASE_NAME);

		$criteria->add(TransporPeer::CO_TRAN, $pk);


		$v = TransporPeer::doSelect($criteria, $con);

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
			$criteria->add(TransporPeer::CO_TRAN, $pks, Criteria::IN);
			$objs = TransporPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTransporPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/TransporMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.TransporMapBuilder');
}
