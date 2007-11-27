<?php


abstract class BaseRengCobPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'reng_cob';

	
	const CLASS_DEFAULT = 'lib.model.RengCob';

	
	const NUM_COLUMNS = 43;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const COB_NUM = 'reng_cob.COB_NUM';

	
	const RENG_NUM = 'reng_cob.RENG_NUM';

	
	const TP_DOC_COB = 'reng_cob.TP_DOC_COB';

	
	const DOC_NUM = 'reng_cob.DOC_NUM';

	
	const NETO = 'reng_cob.NETO';

	
	const NETO_TMP = 'reng_cob.NETO_TMP';

	
	const DPPAGO = 'reng_cob.DPPAGO';

	
	const DPPAGO_TMP = 'reng_cob.DPPAGO_TMP';

	
	const RENG_NCR = 'reng_cob.RENG_NCR';

	
	const CO_VEN = 'reng_cob.CO_VEN';

	
	const COMIS1 = 'reng_cob.COMIS1';

	
	const COMIS2 = 'reng_cob.COMIS2';

	
	const COMIS3 = 'reng_cob.COMIS3';

	
	const COMIS4 = 'reng_cob.COMIS4';

	
	const SIGN_AJU_C = 'reng_cob.SIGN_AJU_C';

	
	const PORC_AJU_C = 'reng_cob.PORC_AJU_C';

	
	const POR_COB = 'reng_cob.POR_COB';

	
	const COMI_COB = 'reng_cob.COMI_COB';

	
	const MONT_COB = 'reng_cob.MONT_COB';

	
	const SINO_PAGO = 'reng_cob.SINO_PAGO';

	
	const SINO_RETEN = 'reng_cob.SINO_RETEN';

	
	const MONTO_DPPAGO = 'reng_cob.MONTO_DPPAGO';

	
	const MONTO_RETEN = 'reng_cob.MONTO_RETEN';

	
	const IMP_PAGO = 'reng_cob.IMP_PAGO';

	
	const MONTO_OBJ = 'reng_cob.MONTO_OBJ';

	
	const ISV = 'reng_cob.ISV';

	
	const NRO_FACT = 'reng_cob.NRO_FACT';

	
	const MONEDA = 'reng_cob.MONEDA';

	
	const TASA = 'reng_cob.TASA';

	
	const NUMCON = 'reng_cob.NUMCON';

	
	const SUSTRAEN = 'reng_cob.SUSTRAEN';

	
	const ROWGUID = 'reng_cob.ROWGUID';

	
	const CO_ISLR = 'reng_cob.CO_ISLR';

	
	const FEC_EMIS = 'reng_cob.FEC_EMIS';

	
	const FEC_VENC = 'reng_cob.FEC_VENC';

	
	const COMIS5 = 'reng_cob.COMIS5';

	
	const COMIS6 = 'reng_cob.COMIS6';

	
	const FACT_IVA = 'reng_cob.FACT_IVA';

	
	const RET_IVA = 'reng_cob.RET_IVA';

	
	const PORC_RETN = 'reng_cob.PORC_RETN';

	
	const PORC_DESC = 'reng_cob.PORC_DESC';

	
	const AUX01 = 'reng_cob.AUX01';

	
	const AUX02 = 'reng_cob.AUX02';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CobNum', 'RengNum', 'TpDocCob', 'DocNum', 'Neto', 'NetoTmp', 'Dppago', 'DppagoTmp', 'RengNcr', 'CoVen', 'Comis1', 'Comis2', 'Comis3', 'Comis4', 'SignAjuC', 'PorcAjuC', 'PorCob', 'ComiCob', 'MontCob', 'SinoPago', 'SinoReten', 'MontoDppago', 'MontoReten', 'ImpPago', 'MontoObj', 'Isv', 'NroFact', 'Moneda', 'Tasa', 'Numcon', 'Sustraen', 'Rowguid', 'CoIslr', 'FecEmis', 'FecVenc', 'Comis5', 'Comis6', 'FactIva', 'RetIva', 'PorcRetn', 'PorcDesc', 'Aux01', 'Aux02', ),
		BasePeer::TYPE_COLNAME => array (RengCobPeer::COB_NUM, RengCobPeer::RENG_NUM, RengCobPeer::TP_DOC_COB, RengCobPeer::DOC_NUM, RengCobPeer::NETO, RengCobPeer::NETO_TMP, RengCobPeer::DPPAGO, RengCobPeer::DPPAGO_TMP, RengCobPeer::RENG_NCR, RengCobPeer::CO_VEN, RengCobPeer::COMIS1, RengCobPeer::COMIS2, RengCobPeer::COMIS3, RengCobPeer::COMIS4, RengCobPeer::SIGN_AJU_C, RengCobPeer::PORC_AJU_C, RengCobPeer::POR_COB, RengCobPeer::COMI_COB, RengCobPeer::MONT_COB, RengCobPeer::SINO_PAGO, RengCobPeer::SINO_RETEN, RengCobPeer::MONTO_DPPAGO, RengCobPeer::MONTO_RETEN, RengCobPeer::IMP_PAGO, RengCobPeer::MONTO_OBJ, RengCobPeer::ISV, RengCobPeer::NRO_FACT, RengCobPeer::MONEDA, RengCobPeer::TASA, RengCobPeer::NUMCON, RengCobPeer::SUSTRAEN, RengCobPeer::ROWGUID, RengCobPeer::CO_ISLR, RengCobPeer::FEC_EMIS, RengCobPeer::FEC_VENC, RengCobPeer::COMIS5, RengCobPeer::COMIS6, RengCobPeer::FACT_IVA, RengCobPeer::RET_IVA, RengCobPeer::PORC_RETN, RengCobPeer::PORC_DESC, RengCobPeer::AUX01, RengCobPeer::AUX02, ),
		BasePeer::TYPE_FIELDNAME => array ('cob_num', 'reng_num', 'tp_doc_cob', 'doc_num', 'neto', 'neto_tmp', 'dppago', 'dppago_tmp', 'reng_ncr', 'co_ven', 'comis1', 'comis2', 'comis3', 'comis4', 'sign_aju_c', 'porc_aju_c', 'por_cob', 'comi_cob', 'mont_cob', 'sino_pago', 'sino_reten', 'monto_dppago', 'monto_reten', 'imp_pago', 'monto_obj', 'isv', 'nro_fact', 'moneda', 'tasa', 'numcon', 'sustraen', 'rowguid', 'co_islr', 'fec_emis', 'fec_venc', 'comis5', 'comis6', 'fact_iva', 'ret_iva', 'porc_retn', 'porc_desc', 'aux01', 'aux02', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CobNum' => 0, 'RengNum' => 1, 'TpDocCob' => 2, 'DocNum' => 3, 'Neto' => 4, 'NetoTmp' => 5, 'Dppago' => 6, 'DppagoTmp' => 7, 'RengNcr' => 8, 'CoVen' => 9, 'Comis1' => 10, 'Comis2' => 11, 'Comis3' => 12, 'Comis4' => 13, 'SignAjuC' => 14, 'PorcAjuC' => 15, 'PorCob' => 16, 'ComiCob' => 17, 'MontCob' => 18, 'SinoPago' => 19, 'SinoReten' => 20, 'MontoDppago' => 21, 'MontoReten' => 22, 'ImpPago' => 23, 'MontoObj' => 24, 'Isv' => 25, 'NroFact' => 26, 'Moneda' => 27, 'Tasa' => 28, 'Numcon' => 29, 'Sustraen' => 30, 'Rowguid' => 31, 'CoIslr' => 32, 'FecEmis' => 33, 'FecVenc' => 34, 'Comis5' => 35, 'Comis6' => 36, 'FactIva' => 37, 'RetIva' => 38, 'PorcRetn' => 39, 'PorcDesc' => 40, 'Aux01' => 41, 'Aux02' => 42, ),
		BasePeer::TYPE_COLNAME => array (RengCobPeer::COB_NUM => 0, RengCobPeer::RENG_NUM => 1, RengCobPeer::TP_DOC_COB => 2, RengCobPeer::DOC_NUM => 3, RengCobPeer::NETO => 4, RengCobPeer::NETO_TMP => 5, RengCobPeer::DPPAGO => 6, RengCobPeer::DPPAGO_TMP => 7, RengCobPeer::RENG_NCR => 8, RengCobPeer::CO_VEN => 9, RengCobPeer::COMIS1 => 10, RengCobPeer::COMIS2 => 11, RengCobPeer::COMIS3 => 12, RengCobPeer::COMIS4 => 13, RengCobPeer::SIGN_AJU_C => 14, RengCobPeer::PORC_AJU_C => 15, RengCobPeer::POR_COB => 16, RengCobPeer::COMI_COB => 17, RengCobPeer::MONT_COB => 18, RengCobPeer::SINO_PAGO => 19, RengCobPeer::SINO_RETEN => 20, RengCobPeer::MONTO_DPPAGO => 21, RengCobPeer::MONTO_RETEN => 22, RengCobPeer::IMP_PAGO => 23, RengCobPeer::MONTO_OBJ => 24, RengCobPeer::ISV => 25, RengCobPeer::NRO_FACT => 26, RengCobPeer::MONEDA => 27, RengCobPeer::TASA => 28, RengCobPeer::NUMCON => 29, RengCobPeer::SUSTRAEN => 30, RengCobPeer::ROWGUID => 31, RengCobPeer::CO_ISLR => 32, RengCobPeer::FEC_EMIS => 33, RengCobPeer::FEC_VENC => 34, RengCobPeer::COMIS5 => 35, RengCobPeer::COMIS6 => 36, RengCobPeer::FACT_IVA => 37, RengCobPeer::RET_IVA => 38, RengCobPeer::PORC_RETN => 39, RengCobPeer::PORC_DESC => 40, RengCobPeer::AUX01 => 41, RengCobPeer::AUX02 => 42, ),
		BasePeer::TYPE_FIELDNAME => array ('cob_num' => 0, 'reng_num' => 1, 'tp_doc_cob' => 2, 'doc_num' => 3, 'neto' => 4, 'neto_tmp' => 5, 'dppago' => 6, 'dppago_tmp' => 7, 'reng_ncr' => 8, 'co_ven' => 9, 'comis1' => 10, 'comis2' => 11, 'comis3' => 12, 'comis4' => 13, 'sign_aju_c' => 14, 'porc_aju_c' => 15, 'por_cob' => 16, 'comi_cob' => 17, 'mont_cob' => 18, 'sino_pago' => 19, 'sino_reten' => 20, 'monto_dppago' => 21, 'monto_reten' => 22, 'imp_pago' => 23, 'monto_obj' => 24, 'isv' => 25, 'nro_fact' => 26, 'moneda' => 27, 'tasa' => 28, 'numcon' => 29, 'sustraen' => 30, 'rowguid' => 31, 'co_islr' => 32, 'fec_emis' => 33, 'fec_venc' => 34, 'comis5' => 35, 'comis6' => 36, 'fact_iva' => 37, 'ret_iva' => 38, 'porc_retn' => 39, 'porc_desc' => 40, 'aux01' => 41, 'aux02' => 42, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/RengCobMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.RengCobMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RengCobPeer::getTableMap();
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
		return str_replace(RengCobPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RengCobPeer::COB_NUM);

		$criteria->addSelectColumn(RengCobPeer::RENG_NUM);

		$criteria->addSelectColumn(RengCobPeer::TP_DOC_COB);

		$criteria->addSelectColumn(RengCobPeer::DOC_NUM);

		$criteria->addSelectColumn(RengCobPeer::NETO);

		$criteria->addSelectColumn(RengCobPeer::NETO_TMP);

		$criteria->addSelectColumn(RengCobPeer::DPPAGO);

		$criteria->addSelectColumn(RengCobPeer::DPPAGO_TMP);

		$criteria->addSelectColumn(RengCobPeer::RENG_NCR);

		$criteria->addSelectColumn(RengCobPeer::CO_VEN);

		$criteria->addSelectColumn(RengCobPeer::COMIS1);

		$criteria->addSelectColumn(RengCobPeer::COMIS2);

		$criteria->addSelectColumn(RengCobPeer::COMIS3);

		$criteria->addSelectColumn(RengCobPeer::COMIS4);

		$criteria->addSelectColumn(RengCobPeer::SIGN_AJU_C);

		$criteria->addSelectColumn(RengCobPeer::PORC_AJU_C);

		$criteria->addSelectColumn(RengCobPeer::POR_COB);

		$criteria->addSelectColumn(RengCobPeer::COMI_COB);

		$criteria->addSelectColumn(RengCobPeer::MONT_COB);

		$criteria->addSelectColumn(RengCobPeer::SINO_PAGO);

		$criteria->addSelectColumn(RengCobPeer::SINO_RETEN);

		$criteria->addSelectColumn(RengCobPeer::MONTO_DPPAGO);

		$criteria->addSelectColumn(RengCobPeer::MONTO_RETEN);

		$criteria->addSelectColumn(RengCobPeer::IMP_PAGO);

		$criteria->addSelectColumn(RengCobPeer::MONTO_OBJ);

		$criteria->addSelectColumn(RengCobPeer::ISV);

		$criteria->addSelectColumn(RengCobPeer::NRO_FACT);

		$criteria->addSelectColumn(RengCobPeer::MONEDA);

		$criteria->addSelectColumn(RengCobPeer::TASA);

		$criteria->addSelectColumn(RengCobPeer::NUMCON);

		$criteria->addSelectColumn(RengCobPeer::SUSTRAEN);

		$criteria->addSelectColumn(RengCobPeer::ROWGUID);

		$criteria->addSelectColumn(RengCobPeer::CO_ISLR);

		$criteria->addSelectColumn(RengCobPeer::FEC_EMIS);

		$criteria->addSelectColumn(RengCobPeer::FEC_VENC);

		$criteria->addSelectColumn(RengCobPeer::COMIS5);

		$criteria->addSelectColumn(RengCobPeer::COMIS6);

		$criteria->addSelectColumn(RengCobPeer::FACT_IVA);

		$criteria->addSelectColumn(RengCobPeer::RET_IVA);

		$criteria->addSelectColumn(RengCobPeer::PORC_RETN);

		$criteria->addSelectColumn(RengCobPeer::PORC_DESC);

		$criteria->addSelectColumn(RengCobPeer::AUX01);

		$criteria->addSelectColumn(RengCobPeer::AUX02);

	}

	const COUNT = 'COUNT(reng_cob.COB_NUM)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reng_cob.COB_NUM)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengCobPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengCobPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RengCobPeer::doSelectRS($criteria, $con);
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
		$objects = RengCobPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RengCobPeer::populateObjects(RengCobPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RengCobPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RengCobPeer::getOMClass();
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
		return RengCobPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(RengCobPeer::COB_NUM);
			$selectCriteria->add(RengCobPeer::COB_NUM, $criteria->remove(RengCobPeer::COB_NUM), $comparison);

			$comparison = $criteria->getComparison(RengCobPeer::RENG_NUM);
			$selectCriteria->add(RengCobPeer::RENG_NUM, $criteria->remove(RengCobPeer::RENG_NUM), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RengCobPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RengCobPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof RengCob) {

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

			$criteria->add(RengCobPeer::COB_NUM, $vals[0], Criteria::IN);
			$criteria->add(RengCobPeer::RENG_NUM, $vals[1], Criteria::IN);
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

	
	public static function doValidate(RengCob $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RengCobPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RengCobPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RengCobPeer::DATABASE_NAME, RengCobPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RengCobPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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
		$criteria->add(RengCobPeer::COB_NUM, $cob_num);
		$criteria->add(RengCobPeer::RENG_NUM, $reng_num);
		$v = RengCobPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} 
if (Propel::isInit()) {
			try {
		BaseRengCobPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/RengCobMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.RengCobMapBuilder');
}
