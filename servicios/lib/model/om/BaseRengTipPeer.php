<?php


abstract class BaseRengTipPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'reng_tip';

	
	const CLASS_DEFAULT = 'lib.model.RengTip';

	
	const NUM_COLUMNS = 18;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const COB_NUM = 'reng_tip.COB_NUM';

	
	const RENG_NUM = 'reng_tip.RENG_NUM';

	
	const TIP_COB = 'reng_tip.TIP_COB';

	
	const MOVI = 'reng_tip.MOVI';

	
	const NUM_DOC = 'reng_tip.NUM_DOC';

	
	const MONT_DOC = 'reng_tip.MONT_DOC';

	
	const MONT_TMP = 'reng_tip.MONT_TMP';

	
	const MONEDA = 'reng_tip.MONEDA';

	
	const BANCO = 'reng_tip.BANCO';

	
	const COD_CAJA = 'reng_tip.COD_CAJA';

	
	const DES_CAJA = 'reng_tip.DES_CAJA';

	
	const FEC_CHEQ = 'reng_tip.FEC_CHEQ';

	
	const NOMBRE_BAN = 'reng_tip.NOMBRE_BAN';

	
	const NUMERO = 'reng_tip.NUMERO';

	
	const DEVUELTO = 'reng_tip.DEVUELTO';

	
	const ROWGUID = 'reng_tip.ROWGUID';

	
	const OPERADOR = 'reng_tip.OPERADOR';

	
	const CLAVE = 'reng_tip.CLAVE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CobNum', 'RengNum', 'TipCob', 'Movi', 'NumDoc', 'MontDoc', 'MontTmp', 'Moneda', 'Banco', 'CodCaja', 'DesCaja', 'FecCheq', 'NombreBan', 'Numero', 'Devuelto', 'Rowguid', 'Operador', 'Clave', ),
		BasePeer::TYPE_COLNAME => array (RengTipPeer::COB_NUM, RengTipPeer::RENG_NUM, RengTipPeer::TIP_COB, RengTipPeer::MOVI, RengTipPeer::NUM_DOC, RengTipPeer::MONT_DOC, RengTipPeer::MONT_TMP, RengTipPeer::MONEDA, RengTipPeer::BANCO, RengTipPeer::COD_CAJA, RengTipPeer::DES_CAJA, RengTipPeer::FEC_CHEQ, RengTipPeer::NOMBRE_BAN, RengTipPeer::NUMERO, RengTipPeer::DEVUELTO, RengTipPeer::ROWGUID, RengTipPeer::OPERADOR, RengTipPeer::CLAVE, ),
		BasePeer::TYPE_FIELDNAME => array ('cob_num', 'reng_num', 'tip_cob', 'movi', 'num_doc', 'mont_doc', 'mont_tmp', 'moneda', 'banco', 'cod_caja', 'des_caja', 'fec_cheq', 'nombre_ban', 'numero', 'devuelto', 'rowguid', 'operador', 'clave', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CobNum' => 0, 'RengNum' => 1, 'TipCob' => 2, 'Movi' => 3, 'NumDoc' => 4, 'MontDoc' => 5, 'MontTmp' => 6, 'Moneda' => 7, 'Banco' => 8, 'CodCaja' => 9, 'DesCaja' => 10, 'FecCheq' => 11, 'NombreBan' => 12, 'Numero' => 13, 'Devuelto' => 14, 'Rowguid' => 15, 'Operador' => 16, 'Clave' => 17, ),
		BasePeer::TYPE_COLNAME => array (RengTipPeer::COB_NUM => 0, RengTipPeer::RENG_NUM => 1, RengTipPeer::TIP_COB => 2, RengTipPeer::MOVI => 3, RengTipPeer::NUM_DOC => 4, RengTipPeer::MONT_DOC => 5, RengTipPeer::MONT_TMP => 6, RengTipPeer::MONEDA => 7, RengTipPeer::BANCO => 8, RengTipPeer::COD_CAJA => 9, RengTipPeer::DES_CAJA => 10, RengTipPeer::FEC_CHEQ => 11, RengTipPeer::NOMBRE_BAN => 12, RengTipPeer::NUMERO => 13, RengTipPeer::DEVUELTO => 14, RengTipPeer::ROWGUID => 15, RengTipPeer::OPERADOR => 16, RengTipPeer::CLAVE => 17, ),
		BasePeer::TYPE_FIELDNAME => array ('cob_num' => 0, 'reng_num' => 1, 'tip_cob' => 2, 'movi' => 3, 'num_doc' => 4, 'mont_doc' => 5, 'mont_tmp' => 6, 'moneda' => 7, 'banco' => 8, 'cod_caja' => 9, 'des_caja' => 10, 'fec_cheq' => 11, 'nombre_ban' => 12, 'numero' => 13, 'devuelto' => 14, 'rowguid' => 15, 'operador' => 16, 'clave' => 17, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/RengTipMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.RengTipMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RengTipPeer::getTableMap();
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
		return str_replace(RengTipPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RengTipPeer::COB_NUM);

		$criteria->addSelectColumn(RengTipPeer::RENG_NUM);

		$criteria->addSelectColumn(RengTipPeer::TIP_COB);

		$criteria->addSelectColumn(RengTipPeer::MOVI);

		$criteria->addSelectColumn(RengTipPeer::NUM_DOC);

		$criteria->addSelectColumn(RengTipPeer::MONT_DOC);

		$criteria->addSelectColumn(RengTipPeer::MONT_TMP);

		$criteria->addSelectColumn(RengTipPeer::MONEDA);

		$criteria->addSelectColumn(RengTipPeer::BANCO);

		$criteria->addSelectColumn(RengTipPeer::COD_CAJA);

		$criteria->addSelectColumn(RengTipPeer::DES_CAJA);

		$criteria->addSelectColumn(RengTipPeer::FEC_CHEQ);

		$criteria->addSelectColumn(RengTipPeer::NOMBRE_BAN);

		$criteria->addSelectColumn(RengTipPeer::NUMERO);

		$criteria->addSelectColumn(RengTipPeer::DEVUELTO);

		$criteria->addSelectColumn(RengTipPeer::ROWGUID);

		$criteria->addSelectColumn(RengTipPeer::OPERADOR);

		$criteria->addSelectColumn(RengTipPeer::CLAVE);

	}

	const COUNT = 'COUNT(reng_tip.COB_NUM)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reng_tip.COB_NUM)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengTipPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengTipPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RengTipPeer::doSelectRS($criteria, $con);
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
		$objects = RengTipPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RengTipPeer::populateObjects(RengTipPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RengTipPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RengTipPeer::getOMClass();
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
		return RengTipPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(RengTipPeer::COB_NUM);
			$selectCriteria->add(RengTipPeer::COB_NUM, $criteria->remove(RengTipPeer::COB_NUM), $comparison);

			$comparison = $criteria->getComparison(RengTipPeer::RENG_NUM);
			$selectCriteria->add(RengTipPeer::RENG_NUM, $criteria->remove(RengTipPeer::RENG_NUM), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RengTipPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RengTipPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof RengTip) {

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

			$criteria->add(RengTipPeer::COB_NUM, $vals[0], Criteria::IN);
			$criteria->add(RengTipPeer::RENG_NUM, $vals[1], Criteria::IN);
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

	
	public static function doValidate(RengTip $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RengTipPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RengTipPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RengTipPeer::DATABASE_NAME, RengTipPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RengTipPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK( $cob_num, $reng_num, $con = null) {
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$criteria = new Criteria();
		$criteria->add(RengTipPeer::COB_NUM, $cob_num);
		$criteria->add(RengTipPeer::RENG_NUM, $reng_num);
		$v = RengTipPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} 
if (Propel::isInit()) {
			try {
		BaseRengTipPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/RengTipMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.RengTipMapBuilder');
}
