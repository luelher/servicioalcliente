<?php


abstract class BaseLinArtPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'lin_art';

	
	const CLASS_DEFAULT = 'lib.model.LinArt';

	
	const NUM_COLUMNS = 25;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_LIN = 'lin_art.CO_LIN';

	
	const LIN_DES = 'lin_art.LIN_DES';

	
	const DIS_CEN = 'lin_art.DIS_CEN';

	
	const CAMPO1 = 'lin_art.CAMPO1';

	
	const CAMPO2 = 'lin_art.CAMPO2';

	
	const CAMPO3 = 'lin_art.CAMPO3';

	
	const CAMPO4 = 'lin_art.CAMPO4';

	
	const CO_US_IN = 'lin_art.CO_US_IN';

	
	const FE_US_IN = 'lin_art.FE_US_IN';

	
	const CO_US_MO = 'lin_art.CO_US_MO';

	
	const FE_US_MO = 'lin_art.FE_US_MO';

	
	const CO_US_EL = 'lin_art.CO_US_EL';

	
	const FE_US_EL = 'lin_art.FE_US_EL';

	
	const REVISADO = 'lin_art.REVISADO';

	
	const TRASNFE = 'lin_art.TRASNFE';

	
	const CO_SUCU = 'lin_art.CO_SUCU';

	
	const ROWGUID = 'lin_art.ROWGUID';

	
	const CO_IMUN = 'lin_art.CO_IMUN';

	
	const CO_RETEN = 'lin_art.CO_RETEN';

	
	const COMI_LIN = 'lin_art.COMI_LIN';

	
	const COMI_LIN2 = 'lin_art.COMI_LIN2';

	
	const ROW_ID = 'lin_art.ROW_ID';

	
	const VA = 'lin_art.VA';

	
	const I_LIN_DES = 'lin_art.I_LIN_DES';

	
	const MOVIL = 'lin_art.MOVIL';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoLin', 'LinDes', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'CoImun', 'CoReten', 'ComiLin', 'ComiLin2', 'RowId', 'Va', 'ILinDes', 'Movil', ),
		BasePeer::TYPE_COLNAME => array (LinArtPeer::CO_LIN, LinArtPeer::LIN_DES, LinArtPeer::DIS_CEN, LinArtPeer::CAMPO1, LinArtPeer::CAMPO2, LinArtPeer::CAMPO3, LinArtPeer::CAMPO4, LinArtPeer::CO_US_IN, LinArtPeer::FE_US_IN, LinArtPeer::CO_US_MO, LinArtPeer::FE_US_MO, LinArtPeer::CO_US_EL, LinArtPeer::FE_US_EL, LinArtPeer::REVISADO, LinArtPeer::TRASNFE, LinArtPeer::CO_SUCU, LinArtPeer::ROWGUID, LinArtPeer::CO_IMUN, LinArtPeer::CO_RETEN, LinArtPeer::COMI_LIN, LinArtPeer::COMI_LIN2, LinArtPeer::ROW_ID, LinArtPeer::VA, LinArtPeer::I_LIN_DES, LinArtPeer::MOVIL, ),
		BasePeer::TYPE_FIELDNAME => array ('co_lin', 'lin_des', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'co_imun', 'co_reten', 'comi_lin', 'comi_lin2', 'row_id', 'va', 'i_lin_des', 'movil', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoLin' => 0, 'LinDes' => 1, 'DisCen' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'CoUsIn' => 7, 'FeUsIn' => 8, 'CoUsMo' => 9, 'FeUsMo' => 10, 'CoUsEl' => 11, 'FeUsEl' => 12, 'Revisado' => 13, 'Trasnfe' => 14, 'CoSucu' => 15, 'Rowguid' => 16, 'CoImun' => 17, 'CoReten' => 18, 'ComiLin' => 19, 'ComiLin2' => 20, 'RowId' => 21, 'Va' => 22, 'ILinDes' => 23, 'Movil' => 24, ),
		BasePeer::TYPE_COLNAME => array (LinArtPeer::CO_LIN => 0, LinArtPeer::LIN_DES => 1, LinArtPeer::DIS_CEN => 2, LinArtPeer::CAMPO1 => 3, LinArtPeer::CAMPO2 => 4, LinArtPeer::CAMPO3 => 5, LinArtPeer::CAMPO4 => 6, LinArtPeer::CO_US_IN => 7, LinArtPeer::FE_US_IN => 8, LinArtPeer::CO_US_MO => 9, LinArtPeer::FE_US_MO => 10, LinArtPeer::CO_US_EL => 11, LinArtPeer::FE_US_EL => 12, LinArtPeer::REVISADO => 13, LinArtPeer::TRASNFE => 14, LinArtPeer::CO_SUCU => 15, LinArtPeer::ROWGUID => 16, LinArtPeer::CO_IMUN => 17, LinArtPeer::CO_RETEN => 18, LinArtPeer::COMI_LIN => 19, LinArtPeer::COMI_LIN2 => 20, LinArtPeer::ROW_ID => 21, LinArtPeer::VA => 22, LinArtPeer::I_LIN_DES => 23, LinArtPeer::MOVIL => 24, ),
		BasePeer::TYPE_FIELDNAME => array ('co_lin' => 0, 'lin_des' => 1, 'dis_cen' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'co_us_in' => 7, 'fe_us_in' => 8, 'co_us_mo' => 9, 'fe_us_mo' => 10, 'co_us_el' => 11, 'fe_us_el' => 12, 'revisado' => 13, 'trasnfe' => 14, 'co_sucu' => 15, 'rowguid' => 16, 'co_imun' => 17, 'co_reten' => 18, 'comi_lin' => 19, 'comi_lin2' => 20, 'row_id' => 21, 'va' => 22, 'i_lin_des' => 23, 'movil' => 24, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/LinArtMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.LinArtMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LinArtPeer::getTableMap();
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
		return str_replace(LinArtPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LinArtPeer::CO_LIN);

		$criteria->addSelectColumn(LinArtPeer::LIN_DES);

		$criteria->addSelectColumn(LinArtPeer::DIS_CEN);

		$criteria->addSelectColumn(LinArtPeer::CAMPO1);

		$criteria->addSelectColumn(LinArtPeer::CAMPO2);

		$criteria->addSelectColumn(LinArtPeer::CAMPO3);

		$criteria->addSelectColumn(LinArtPeer::CAMPO4);

		$criteria->addSelectColumn(LinArtPeer::CO_US_IN);

		$criteria->addSelectColumn(LinArtPeer::FE_US_IN);

		$criteria->addSelectColumn(LinArtPeer::CO_US_MO);

		$criteria->addSelectColumn(LinArtPeer::FE_US_MO);

		$criteria->addSelectColumn(LinArtPeer::CO_US_EL);

		$criteria->addSelectColumn(LinArtPeer::FE_US_EL);

		$criteria->addSelectColumn(LinArtPeer::REVISADO);

		$criteria->addSelectColumn(LinArtPeer::TRASNFE);

		$criteria->addSelectColumn(LinArtPeer::CO_SUCU);

		$criteria->addSelectColumn(LinArtPeer::ROWGUID);

		$criteria->addSelectColumn(LinArtPeer::CO_IMUN);

		$criteria->addSelectColumn(LinArtPeer::CO_RETEN);

		$criteria->addSelectColumn(LinArtPeer::COMI_LIN);

		$criteria->addSelectColumn(LinArtPeer::COMI_LIN2);

		$criteria->addSelectColumn(LinArtPeer::ROW_ID);

		$criteria->addSelectColumn(LinArtPeer::VA);

		$criteria->addSelectColumn(LinArtPeer::I_LIN_DES);

		$criteria->addSelectColumn(LinArtPeer::MOVIL);

	}

	const COUNT = 'COUNT(lin_art.CO_LIN)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT lin_art.CO_LIN)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LinArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LinArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LinArtPeer::doSelectRS($criteria, $con);
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
		$objects = LinArtPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LinArtPeer::populateObjects(LinArtPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LinArtPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LinArtPeer::getOMClass();
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
		return LinArtPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(LinArtPeer::CO_LIN);
			$selectCriteria->add(LinArtPeer::CO_LIN, $criteria->remove(LinArtPeer::CO_LIN), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LinArtPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LinArtPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof LinArt) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LinArtPeer::CO_LIN, (array) $values, Criteria::IN);
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

	
	public static function doValidate(LinArt $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LinArtPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LinArtPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LinArtPeer::DATABASE_NAME, LinArtPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LinArtPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LinArtPeer::DATABASE_NAME);

		$criteria->add(LinArtPeer::CO_LIN, $pk);


		$v = LinArtPeer::doSelect($criteria, $con);

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
			$criteria->add(LinArtPeer::CO_LIN, $pks, Criteria::IN);
			$objs = LinArtPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLinArtPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/LinArtMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.LinArtMapBuilder');
}
