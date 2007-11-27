<?php


abstract class BaseRengFacPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'reng_fac';

	
	const CLASS_DEFAULT = 'lib.model.RengFac';

	
	const NUM_COLUMNS = 45;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const FACT_NUM = 'reng_fac.FACT_NUM';

	
	const RENG_NUM = 'reng_fac.RENG_NUM';

	
	const DIS_CEN = 'reng_fac.DIS_CEN';

	
	const TIPO_DOC = 'reng_fac.TIPO_DOC';

	
	const RENG_DOC = 'reng_fac.RENG_DOC';

	
	const NUM_DOC = 'reng_fac.NUM_DOC';

	
	const CO_ART = 'reng_fac.CO_ART';

	
	const CO_ALMA = 'reng_fac.CO_ALMA';

	
	const TOTAL_ART = 'reng_fac.TOTAL_ART';

	
	const STOTAL_ART = 'reng_fac.STOTAL_ART';

	
	const PENDIENTE = 'reng_fac.PENDIENTE';

	
	const UNI_VENTA = 'reng_fac.UNI_VENTA';

	
	const PREC_VTA = 'reng_fac.PREC_VTA';

	
	const PORC_DESC = 'reng_fac.PORC_DESC';

	
	const TIPO_IMP = 'reng_fac.TIPO_IMP';

	
	const ISV = 'reng_fac.ISV';

	
	const RENG_NETO = 'reng_fac.RENG_NETO';

	
	const COS_PRO_UN = 'reng_fac.COS_PRO_UN';

	
	const ULT_COS_UN = 'reng_fac.ULT_COS_UN';

	
	const ULT_COS_OM = 'reng_fac.ULT_COS_OM';

	
	const COS_PRO_OM = 'reng_fac.COS_PRO_OM';

	
	const TOTAL_DEV = 'reng_fac.TOTAL_DEV';

	
	const MONTO_DEV = 'reng_fac.MONTO_DEV';

	
	const PREC_VTA2 = 'reng_fac.PREC_VTA2';

	
	const ANULADO = 'reng_fac.ANULADO';

	
	const DES_ART = 'reng_fac.DES_ART';

	
	const SELECCION = 'reng_fac.SELECCION';

	
	const CANT_IMP = 'reng_fac.CANT_IMP';

	
	const COMENTARIO = 'reng_fac.COMENTARIO';

	
	const ROWGUID = 'reng_fac.ROWGUID';

	
	const TOTAL_UNI = 'reng_fac.TOTAL_UNI';

	
	const MON_ILC = 'reng_fac.MON_ILC';

	
	const OTROS = 'reng_fac.OTROS';

	
	const NRO_LOTE = 'reng_fac.NRO_LOTE';

	
	const FEC_LOTE = 'reng_fac.FEC_LOTE';

	
	const PENDIENTE2 = 'reng_fac.PENDIENTE2';

	
	const TIPO_DOC2 = 'reng_fac.TIPO_DOC2';

	
	const RENG_DOC2 = 'reng_fac.RENG_DOC2';

	
	const NUM_DOC2 = 'reng_fac.NUM_DOC2';

	
	const TIPO_PREC = 'reng_fac.TIPO_PREC';

	
	const CO_ALMA2 = 'reng_fac.CO_ALMA2';

	
	const AUX01 = 'reng_fac.AUX01';

	
	const AUX02 = 'reng_fac.AUX02';

	
	const CANT_PROD = 'reng_fac.CANT_PROD';

	
	const IMP_PROD = 'reng_fac.IMP_PROD';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('FactNum', 'RengNum', 'DisCen', 'TipoDoc', 'RengDoc', 'NumDoc', 'CoArt', 'CoAlma', 'TotalArt', 'StotalArt', 'Pendiente', 'UniVenta', 'PrecVta', 'PorcDesc', 'TipoImp', 'Isv', 'RengNeto', 'CosProUn', 'UltCosUn', 'UltCosOm', 'CosProOm', 'TotalDev', 'MontoDev', 'PrecVta2', 'Anulado', 'DesArt', 'Seleccion', 'CantImp', 'Comentario', 'Rowguid', 'TotalUni', 'MonIlc', 'Otros', 'NroLote', 'FecLote', 'Pendiente2', 'TipoDoc2', 'RengDoc2', 'NumDoc2', 'TipoPrec', 'CoAlma2', 'Aux01', 'Aux02', 'CantProd', 'ImpProd', ),
		BasePeer::TYPE_COLNAME => array (RengFacPeer::FACT_NUM, RengFacPeer::RENG_NUM, RengFacPeer::DIS_CEN, RengFacPeer::TIPO_DOC, RengFacPeer::RENG_DOC, RengFacPeer::NUM_DOC, RengFacPeer::CO_ART, RengFacPeer::CO_ALMA, RengFacPeer::TOTAL_ART, RengFacPeer::STOTAL_ART, RengFacPeer::PENDIENTE, RengFacPeer::UNI_VENTA, RengFacPeer::PREC_VTA, RengFacPeer::PORC_DESC, RengFacPeer::TIPO_IMP, RengFacPeer::ISV, RengFacPeer::RENG_NETO, RengFacPeer::COS_PRO_UN, RengFacPeer::ULT_COS_UN, RengFacPeer::ULT_COS_OM, RengFacPeer::COS_PRO_OM, RengFacPeer::TOTAL_DEV, RengFacPeer::MONTO_DEV, RengFacPeer::PREC_VTA2, RengFacPeer::ANULADO, RengFacPeer::DES_ART, RengFacPeer::SELECCION, RengFacPeer::CANT_IMP, RengFacPeer::COMENTARIO, RengFacPeer::ROWGUID, RengFacPeer::TOTAL_UNI, RengFacPeer::MON_ILC, RengFacPeer::OTROS, RengFacPeer::NRO_LOTE, RengFacPeer::FEC_LOTE, RengFacPeer::PENDIENTE2, RengFacPeer::TIPO_DOC2, RengFacPeer::RENG_DOC2, RengFacPeer::NUM_DOC2, RengFacPeer::TIPO_PREC, RengFacPeer::CO_ALMA2, RengFacPeer::AUX01, RengFacPeer::AUX02, RengFacPeer::CANT_PROD, RengFacPeer::IMP_PROD, ),
		BasePeer::TYPE_FIELDNAME => array ('fact_num', 'reng_num', 'dis_cen', 'tipo_doc', 'reng_doc', 'num_doc', 'co_art', 'co_alma', 'total_art', 'stotal_art', 'pendiente', 'uni_venta', 'prec_vta', 'porc_desc', 'tipo_imp', 'isv', 'reng_neto', 'cos_pro_un', 'ult_cos_un', 'ult_cos_om', 'cos_pro_om', 'total_dev', 'monto_dev', 'prec_vta2', 'anulado', 'des_art', 'seleccion', 'cant_imp', 'comentario', 'rowguid', 'total_uni', 'mon_ilc', 'otros', 'nro_lote', 'fec_lote', 'pendiente2', 'tipo_doc2', 'reng_doc2', 'num_doc2', 'tipo_prec', 'co_alma2', 'aux01', 'aux02', 'cant_prod', 'imp_prod', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('FactNum' => 0, 'RengNum' => 1, 'DisCen' => 2, 'TipoDoc' => 3, 'RengDoc' => 4, 'NumDoc' => 5, 'CoArt' => 6, 'CoAlma' => 7, 'TotalArt' => 8, 'StotalArt' => 9, 'Pendiente' => 10, 'UniVenta' => 11, 'PrecVta' => 12, 'PorcDesc' => 13, 'TipoImp' => 14, 'Isv' => 15, 'RengNeto' => 16, 'CosProUn' => 17, 'UltCosUn' => 18, 'UltCosOm' => 19, 'CosProOm' => 20, 'TotalDev' => 21, 'MontoDev' => 22, 'PrecVta2' => 23, 'Anulado' => 24, 'DesArt' => 25, 'Seleccion' => 26, 'CantImp' => 27, 'Comentario' => 28, 'Rowguid' => 29, 'TotalUni' => 30, 'MonIlc' => 31, 'Otros' => 32, 'NroLote' => 33, 'FecLote' => 34, 'Pendiente2' => 35, 'TipoDoc2' => 36, 'RengDoc2' => 37, 'NumDoc2' => 38, 'TipoPrec' => 39, 'CoAlma2' => 40, 'Aux01' => 41, 'Aux02' => 42, 'CantProd' => 43, 'ImpProd' => 44, ),
		BasePeer::TYPE_COLNAME => array (RengFacPeer::FACT_NUM => 0, RengFacPeer::RENG_NUM => 1, RengFacPeer::DIS_CEN => 2, RengFacPeer::TIPO_DOC => 3, RengFacPeer::RENG_DOC => 4, RengFacPeer::NUM_DOC => 5, RengFacPeer::CO_ART => 6, RengFacPeer::CO_ALMA => 7, RengFacPeer::TOTAL_ART => 8, RengFacPeer::STOTAL_ART => 9, RengFacPeer::PENDIENTE => 10, RengFacPeer::UNI_VENTA => 11, RengFacPeer::PREC_VTA => 12, RengFacPeer::PORC_DESC => 13, RengFacPeer::TIPO_IMP => 14, RengFacPeer::ISV => 15, RengFacPeer::RENG_NETO => 16, RengFacPeer::COS_PRO_UN => 17, RengFacPeer::ULT_COS_UN => 18, RengFacPeer::ULT_COS_OM => 19, RengFacPeer::COS_PRO_OM => 20, RengFacPeer::TOTAL_DEV => 21, RengFacPeer::MONTO_DEV => 22, RengFacPeer::PREC_VTA2 => 23, RengFacPeer::ANULADO => 24, RengFacPeer::DES_ART => 25, RengFacPeer::SELECCION => 26, RengFacPeer::CANT_IMP => 27, RengFacPeer::COMENTARIO => 28, RengFacPeer::ROWGUID => 29, RengFacPeer::TOTAL_UNI => 30, RengFacPeer::MON_ILC => 31, RengFacPeer::OTROS => 32, RengFacPeer::NRO_LOTE => 33, RengFacPeer::FEC_LOTE => 34, RengFacPeer::PENDIENTE2 => 35, RengFacPeer::TIPO_DOC2 => 36, RengFacPeer::RENG_DOC2 => 37, RengFacPeer::NUM_DOC2 => 38, RengFacPeer::TIPO_PREC => 39, RengFacPeer::CO_ALMA2 => 40, RengFacPeer::AUX01 => 41, RengFacPeer::AUX02 => 42, RengFacPeer::CANT_PROD => 43, RengFacPeer::IMP_PROD => 44, ),
		BasePeer::TYPE_FIELDNAME => array ('fact_num' => 0, 'reng_num' => 1, 'dis_cen' => 2, 'tipo_doc' => 3, 'reng_doc' => 4, 'num_doc' => 5, 'co_art' => 6, 'co_alma' => 7, 'total_art' => 8, 'stotal_art' => 9, 'pendiente' => 10, 'uni_venta' => 11, 'prec_vta' => 12, 'porc_desc' => 13, 'tipo_imp' => 14, 'isv' => 15, 'reng_neto' => 16, 'cos_pro_un' => 17, 'ult_cos_un' => 18, 'ult_cos_om' => 19, 'cos_pro_om' => 20, 'total_dev' => 21, 'monto_dev' => 22, 'prec_vta2' => 23, 'anulado' => 24, 'des_art' => 25, 'seleccion' => 26, 'cant_imp' => 27, 'comentario' => 28, 'rowguid' => 29, 'total_uni' => 30, 'mon_ilc' => 31, 'otros' => 32, 'nro_lote' => 33, 'fec_lote' => 34, 'pendiente2' => 35, 'tipo_doc2' => 36, 'reng_doc2' => 37, 'num_doc2' => 38, 'tipo_prec' => 39, 'co_alma2' => 40, 'aux01' => 41, 'aux02' => 42, 'cant_prod' => 43, 'imp_prod' => 44, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/RengFacMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.RengFacMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RengFacPeer::getTableMap();
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
		return str_replace(RengFacPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RengFacPeer::FACT_NUM);

		$criteria->addSelectColumn(RengFacPeer::RENG_NUM);

		$criteria->addSelectColumn(RengFacPeer::DIS_CEN);

		$criteria->addSelectColumn(RengFacPeer::TIPO_DOC);

		$criteria->addSelectColumn(RengFacPeer::RENG_DOC);

		$criteria->addSelectColumn(RengFacPeer::NUM_DOC);

		$criteria->addSelectColumn(RengFacPeer::CO_ART);

		$criteria->addSelectColumn(RengFacPeer::CO_ALMA);

		$criteria->addSelectColumn(RengFacPeer::TOTAL_ART);

		$criteria->addSelectColumn(RengFacPeer::STOTAL_ART);

		$criteria->addSelectColumn(RengFacPeer::PENDIENTE);

		$criteria->addSelectColumn(RengFacPeer::UNI_VENTA);

		$criteria->addSelectColumn(RengFacPeer::PREC_VTA);

		$criteria->addSelectColumn(RengFacPeer::PORC_DESC);

		$criteria->addSelectColumn(RengFacPeer::TIPO_IMP);

		$criteria->addSelectColumn(RengFacPeer::ISV);

		$criteria->addSelectColumn(RengFacPeer::RENG_NETO);

		$criteria->addSelectColumn(RengFacPeer::COS_PRO_UN);

		$criteria->addSelectColumn(RengFacPeer::ULT_COS_UN);

		$criteria->addSelectColumn(RengFacPeer::ULT_COS_OM);

		$criteria->addSelectColumn(RengFacPeer::COS_PRO_OM);

		$criteria->addSelectColumn(RengFacPeer::TOTAL_DEV);

		$criteria->addSelectColumn(RengFacPeer::MONTO_DEV);

		$criteria->addSelectColumn(RengFacPeer::PREC_VTA2);

		$criteria->addSelectColumn(RengFacPeer::ANULADO);

		$criteria->addSelectColumn(RengFacPeer::DES_ART);

		$criteria->addSelectColumn(RengFacPeer::SELECCION);

		$criteria->addSelectColumn(RengFacPeer::CANT_IMP);

		$criteria->addSelectColumn(RengFacPeer::COMENTARIO);

		$criteria->addSelectColumn(RengFacPeer::ROWGUID);

		$criteria->addSelectColumn(RengFacPeer::TOTAL_UNI);

		$criteria->addSelectColumn(RengFacPeer::MON_ILC);

		$criteria->addSelectColumn(RengFacPeer::OTROS);

		$criteria->addSelectColumn(RengFacPeer::NRO_LOTE);

		$criteria->addSelectColumn(RengFacPeer::FEC_LOTE);

		$criteria->addSelectColumn(RengFacPeer::PENDIENTE2);

		$criteria->addSelectColumn(RengFacPeer::TIPO_DOC2);

		$criteria->addSelectColumn(RengFacPeer::RENG_DOC2);

		$criteria->addSelectColumn(RengFacPeer::NUM_DOC2);

		$criteria->addSelectColumn(RengFacPeer::TIPO_PREC);

		$criteria->addSelectColumn(RengFacPeer::CO_ALMA2);

		$criteria->addSelectColumn(RengFacPeer::AUX01);

		$criteria->addSelectColumn(RengFacPeer::AUX02);

		$criteria->addSelectColumn(RengFacPeer::CANT_PROD);

		$criteria->addSelectColumn(RengFacPeer::IMP_PROD);

	}

	const COUNT = 'COUNT(reng_fac.FACT_NUM)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reng_fac.FACT_NUM)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RengFacPeer::doSelectRS($criteria, $con);
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
		$objects = RengFacPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RengFacPeer::populateObjects(RengFacPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RengFacPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RengFacPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinArt(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);

		$rs = RengFacPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinSubAlma(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);

		$rs = RengFacPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTabulado(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = RengFacPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinArt(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RengFacPeer::addSelectColumns($c);
		$startcol = (RengFacPeer::NUM_COLUMNS - RengFacPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ArtPeer::addSelectColumns($c);

		$c->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RengFacPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRengFac($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRengFacs();
				$obj2->addRengFac($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinSubAlma(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RengFacPeer::addSelectColumns($c);
		$startcol = (RengFacPeer::NUM_COLUMNS - RengFacPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SubAlmaPeer::addSelectColumns($c);

		$c->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RengFacPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SubAlmaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSubAlma(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRengFac($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRengFacs();
				$obj2->addRengFac($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTabulado(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RengFacPeer::addSelectColumns($c);
		$startcol = (RengFacPeer::NUM_COLUMNS - RengFacPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TabuladoPeer::addSelectColumns($c);

		$c->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RengFacPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TabuladoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTabulado(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRengFac($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRengFacs();
				$obj2->addRengFac($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);

		$criteria->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);

		$criteria->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = RengFacPeer::doSelectRS($criteria, $con);
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

		RengFacPeer::addSelectColumns($c);
		$startcol2 = (RengFacPeer::NUM_COLUMNS - RengFacPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArtPeer::NUM_COLUMNS;

		SubAlmaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SubAlmaPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);

		$c->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);

		$c->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RengFacPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRengFac($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initRengFacs();
				$obj2->addRengFac($obj1);
			}


					
			$omClass = SubAlmaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSubAlma(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addRengFac($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initRengFacs();
				$obj3->addRengFac($obj1);
			}


					
			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTabulado(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addRengFac($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initRengFacs();
				$obj4->addRengFac($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptArt(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);

		$criteria->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = RengFacPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptSubAlma(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);

		$criteria->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = RengFacPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTabulado(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RengFacPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RengFacPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);

		$criteria->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);

		$rs = RengFacPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptArt(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RengFacPeer::addSelectColumns($c);
		$startcol2 = (RengFacPeer::NUM_COLUMNS - RengFacPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SubAlmaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SubAlmaPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);

		$c->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RengFacPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SubAlmaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSubAlma(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRengFac($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRengFacs();
				$obj2->addRengFac($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTabulado(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addRengFac($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initRengFacs();
				$obj3->addRengFac($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptSubAlma(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RengFacPeer::addSelectColumns($c);
		$startcol2 = (RengFacPeer::NUM_COLUMNS - RengFacPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArtPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);

		$c->addJoin(RengFacPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RengFacPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRengFac($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRengFacs();
				$obj2->addRengFac($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTabulado(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addRengFac($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initRengFacs();
				$obj3->addRengFac($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTabulado(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RengFacPeer::addSelectColumns($c);
		$startcol2 = (RengFacPeer::NUM_COLUMNS - RengFacPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArtPeer::NUM_COLUMNS;

		SubAlmaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SubAlmaPeer::NUM_COLUMNS;

		$c->addJoin(RengFacPeer::CO_ART, ArtPeer::CO_ART);

		$c->addJoin(RengFacPeer::CO_ALMA, SubAlmaPeer::CO_SUB);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RengFacPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRengFac($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRengFacs();
				$obj2->addRengFac($obj1);
			}

			$omClass = SubAlmaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSubAlma(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addRengFac($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initRengFacs();
				$obj3->addRengFac($obj1);
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
		return RengFacPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(RengFacPeer::FACT_NUM);
			$selectCriteria->add(RengFacPeer::FACT_NUM, $criteria->remove(RengFacPeer::FACT_NUM), $comparison);

			$comparison = $criteria->getComparison(RengFacPeer::RENG_NUM);
			$selectCriteria->add(RengFacPeer::RENG_NUM, $criteria->remove(RengFacPeer::RENG_NUM), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RengFacPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RengFacPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof RengFac) {

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

			$criteria->add(RengFacPeer::FACT_NUM, $vals[0], Criteria::IN);
			$criteria->add(RengFacPeer::RENG_NUM, $vals[1], Criteria::IN);
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

	
	public static function doValidate(RengFac $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RengFacPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RengFacPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RengFacPeer::DATABASE_NAME, RengFacPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RengFacPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK( $fact_num, $reng_num, $con = null) {
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$criteria = new Criteria();
		$criteria->add(RengFacPeer::FACT_NUM, $fact_num);
		$criteria->add(RengFacPeer::RENG_NUM, $reng_num);
		$v = RengFacPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} 
if (Propel::isInit()) {
			try {
		BaseRengFacPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/RengFacMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.RengFacMapBuilder');
}
