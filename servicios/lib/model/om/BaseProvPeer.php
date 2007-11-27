<?php


abstract class BaseProvPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'prov';

	
	const CLASS_DEFAULT = 'lib.model.Prov';

	
	const NUM_COLUMNS = 62;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_PROV = 'prov.CO_PROV';

	
	const PROV_DES = 'prov.PROV_DES';

	
	const CO_SEG = 'prov.CO_SEG';

	
	const CO_ZON = 'prov.CO_ZON';

	
	const INACTIVO = 'prov.INACTIVO';

	
	const PRODUCTOS = 'prov.PRODUCTOS';

	
	const DIREC1 = 'prov.DIREC1';

	
	const DIREC2 = 'prov.DIREC2';

	
	const TELEFONOS = 'prov.TELEFONOS';

	
	const FAX = 'prov.FAX';

	
	const RESPONS = 'prov.RESPONS';

	
	const FECHA_REG = 'prov.FECHA_REG';

	
	const TIPO = 'prov.TIPO';

	
	const COM_ULT_CO = 'prov.COM_ULT_CO';

	
	const FEC_ULT_CO = 'prov.FEC_ULT_CO';

	
	const NET_ULT_CO = 'prov.NET_ULT_CO';

	
	const SALDO = 'prov.SALDO';

	
	const SALDO_INI = 'prov.SALDO_INI';

	
	const MONT_CRE = 'prov.MONT_CRE';

	
	const PLAZ_PAG = 'prov.PLAZ_PAG';

	
	const DESC_PPAGO = 'prov.DESC_PPAGO';

	
	const DESC_GLOB = 'prov.DESC_GLOB';

	
	const TIPO_IVA = 'prov.TIPO_IVA';

	
	const IVA = 'prov.IVA';

	
	const RIF = 'prov.RIF';

	
	const NACIONAL = 'prov.NACIONAL';

	
	const DIS_CEN = 'prov.DIS_CEN';

	
	const NIT = 'prov.NIT';

	
	const EMAIL = 'prov.EMAIL';

	
	const CO_INGR = 'prov.CO_INGR';

	
	const COMENTARIO = 'prov.COMENTARIO';

	
	const CAMPO1 = 'prov.CAMPO1';

	
	const CAMPO2 = 'prov.CAMPO2';

	
	const CAMPO3 = 'prov.CAMPO3';

	
	const CAMPO4 = 'prov.CAMPO4';

	
	const CAMPO5 = 'prov.CAMPO5';

	
	const CAMPO6 = 'prov.CAMPO6';

	
	const CAMPO7 = 'prov.CAMPO7';

	
	const CAMPO8 = 'prov.CAMPO8';

	
	const CO_US_IN = 'prov.CO_US_IN';

	
	const FE_US_IN = 'prov.FE_US_IN';

	
	const CO_US_MO = 'prov.CO_US_MO';

	
	const FE_US_MO = 'prov.FE_US_MO';

	
	const CO_US_EL = 'prov.CO_US_EL';

	
	const FE_US_EL = 'prov.FE_US_EL';

	
	const REVISADO = 'prov.REVISADO';

	
	const TRASNFE = 'prov.TRASNFE';

	
	const CO_SUCU = 'prov.CO_SUCU';

	
	const ROWGUID = 'prov.ROWGUID';

	
	const JURIDICO = 'prov.JURIDICO';

	
	const TIPO_ADI = 'prov.TIPO_ADI';

	
	const MATRIZ = 'prov.MATRIZ';

	
	const CO_TAB = 'prov.CO_TAB';

	
	const TIPO_PER = 'prov.TIPO_PER';

	
	const CO_PAIS = 'prov.CO_PAIS';

	
	const CIUDAD = 'prov.CIUDAD';

	
	const ZIP = 'prov.ZIP';

	
	const WEBSITE = 'prov.WEBSITE';

	
	const FORMTYPE = 'prov.FORMTYPE';

	
	const TAXID = 'prov.TAXID';

	
	const CONTRIBU_E = 'prov.CONTRIBU_E';

	
	const PORC_ESP = 'prov.PORC_ESP';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoProv', 'ProvDes', 'CoSeg', 'CoZon', 'Inactivo', 'Productos', 'Direc1', 'Direc2', 'Telefonos', 'Fax', 'Respons', 'FechaReg', 'Tipo', 'ComUltCo', 'FecUltCo', 'NetUltCo', 'Saldo', 'SaldoIni', 'MontCre', 'PlazPag', 'DescPpago', 'DescGlob', 'TipoIva', 'Iva', 'Rif', 'Nacional', 'DisCen', 'Nit', 'Email', 'CoIngr', 'Comentario', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'Juridico', 'TipoAdi', 'Matriz', 'CoTab', 'TipoPer', 'CoPais', 'Ciudad', 'Zip', 'Website', 'Formtype', 'Taxid', 'ContribuE', 'PorcEsp', ),
		BasePeer::TYPE_COLNAME => array (ProvPeer::CO_PROV, ProvPeer::PROV_DES, ProvPeer::CO_SEG, ProvPeer::CO_ZON, ProvPeer::INACTIVO, ProvPeer::PRODUCTOS, ProvPeer::DIREC1, ProvPeer::DIREC2, ProvPeer::TELEFONOS, ProvPeer::FAX, ProvPeer::RESPONS, ProvPeer::FECHA_REG, ProvPeer::TIPO, ProvPeer::COM_ULT_CO, ProvPeer::FEC_ULT_CO, ProvPeer::NET_ULT_CO, ProvPeer::SALDO, ProvPeer::SALDO_INI, ProvPeer::MONT_CRE, ProvPeer::PLAZ_PAG, ProvPeer::DESC_PPAGO, ProvPeer::DESC_GLOB, ProvPeer::TIPO_IVA, ProvPeer::IVA, ProvPeer::RIF, ProvPeer::NACIONAL, ProvPeer::DIS_CEN, ProvPeer::NIT, ProvPeer::EMAIL, ProvPeer::CO_INGR, ProvPeer::COMENTARIO, ProvPeer::CAMPO1, ProvPeer::CAMPO2, ProvPeer::CAMPO3, ProvPeer::CAMPO4, ProvPeer::CAMPO5, ProvPeer::CAMPO6, ProvPeer::CAMPO7, ProvPeer::CAMPO8, ProvPeer::CO_US_IN, ProvPeer::FE_US_IN, ProvPeer::CO_US_MO, ProvPeer::FE_US_MO, ProvPeer::CO_US_EL, ProvPeer::FE_US_EL, ProvPeer::REVISADO, ProvPeer::TRASNFE, ProvPeer::CO_SUCU, ProvPeer::ROWGUID, ProvPeer::JURIDICO, ProvPeer::TIPO_ADI, ProvPeer::MATRIZ, ProvPeer::CO_TAB, ProvPeer::TIPO_PER, ProvPeer::CO_PAIS, ProvPeer::CIUDAD, ProvPeer::ZIP, ProvPeer::WEBSITE, ProvPeer::FORMTYPE, ProvPeer::TAXID, ProvPeer::CONTRIBU_E, ProvPeer::PORC_ESP, ),
		BasePeer::TYPE_FIELDNAME => array ('co_prov', 'prov_des', 'co_seg', 'co_zon', 'inactivo', 'productos', 'direc1', 'direc2', 'telefonos', 'fax', 'respons', 'fecha_reg', 'tipo', 'com_ult_co', 'fec_ult_co', 'net_ult_co', 'saldo', 'saldo_ini', 'mont_cre', 'plaz_pag', 'desc_ppago', 'desc_glob', 'tipo_iva', 'iva', 'rif', 'nacional', 'dis_cen', 'nit', 'email', 'co_ingr', 'comentario', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'juridico', 'tipo_adi', 'matriz', 'co_tab', 'tipo_per', 'co_pais', 'ciudad', 'zip', 'website', 'formtype', 'taxid', 'contribu_e', 'porc_esp', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoProv' => 0, 'ProvDes' => 1, 'CoSeg' => 2, 'CoZon' => 3, 'Inactivo' => 4, 'Productos' => 5, 'Direc1' => 6, 'Direc2' => 7, 'Telefonos' => 8, 'Fax' => 9, 'Respons' => 10, 'FechaReg' => 11, 'Tipo' => 12, 'ComUltCo' => 13, 'FecUltCo' => 14, 'NetUltCo' => 15, 'Saldo' => 16, 'SaldoIni' => 17, 'MontCre' => 18, 'PlazPag' => 19, 'DescPpago' => 20, 'DescGlob' => 21, 'TipoIva' => 22, 'Iva' => 23, 'Rif' => 24, 'Nacional' => 25, 'DisCen' => 26, 'Nit' => 27, 'Email' => 28, 'CoIngr' => 29, 'Comentario' => 30, 'Campo1' => 31, 'Campo2' => 32, 'Campo3' => 33, 'Campo4' => 34, 'Campo5' => 35, 'Campo6' => 36, 'Campo7' => 37, 'Campo8' => 38, 'CoUsIn' => 39, 'FeUsIn' => 40, 'CoUsMo' => 41, 'FeUsMo' => 42, 'CoUsEl' => 43, 'FeUsEl' => 44, 'Revisado' => 45, 'Trasnfe' => 46, 'CoSucu' => 47, 'Rowguid' => 48, 'Juridico' => 49, 'TipoAdi' => 50, 'Matriz' => 51, 'CoTab' => 52, 'TipoPer' => 53, 'CoPais' => 54, 'Ciudad' => 55, 'Zip' => 56, 'Website' => 57, 'Formtype' => 58, 'Taxid' => 59, 'ContribuE' => 60, 'PorcEsp' => 61, ),
		BasePeer::TYPE_COLNAME => array (ProvPeer::CO_PROV => 0, ProvPeer::PROV_DES => 1, ProvPeer::CO_SEG => 2, ProvPeer::CO_ZON => 3, ProvPeer::INACTIVO => 4, ProvPeer::PRODUCTOS => 5, ProvPeer::DIREC1 => 6, ProvPeer::DIREC2 => 7, ProvPeer::TELEFONOS => 8, ProvPeer::FAX => 9, ProvPeer::RESPONS => 10, ProvPeer::FECHA_REG => 11, ProvPeer::TIPO => 12, ProvPeer::COM_ULT_CO => 13, ProvPeer::FEC_ULT_CO => 14, ProvPeer::NET_ULT_CO => 15, ProvPeer::SALDO => 16, ProvPeer::SALDO_INI => 17, ProvPeer::MONT_CRE => 18, ProvPeer::PLAZ_PAG => 19, ProvPeer::DESC_PPAGO => 20, ProvPeer::DESC_GLOB => 21, ProvPeer::TIPO_IVA => 22, ProvPeer::IVA => 23, ProvPeer::RIF => 24, ProvPeer::NACIONAL => 25, ProvPeer::DIS_CEN => 26, ProvPeer::NIT => 27, ProvPeer::EMAIL => 28, ProvPeer::CO_INGR => 29, ProvPeer::COMENTARIO => 30, ProvPeer::CAMPO1 => 31, ProvPeer::CAMPO2 => 32, ProvPeer::CAMPO3 => 33, ProvPeer::CAMPO4 => 34, ProvPeer::CAMPO5 => 35, ProvPeer::CAMPO6 => 36, ProvPeer::CAMPO7 => 37, ProvPeer::CAMPO8 => 38, ProvPeer::CO_US_IN => 39, ProvPeer::FE_US_IN => 40, ProvPeer::CO_US_MO => 41, ProvPeer::FE_US_MO => 42, ProvPeer::CO_US_EL => 43, ProvPeer::FE_US_EL => 44, ProvPeer::REVISADO => 45, ProvPeer::TRASNFE => 46, ProvPeer::CO_SUCU => 47, ProvPeer::ROWGUID => 48, ProvPeer::JURIDICO => 49, ProvPeer::TIPO_ADI => 50, ProvPeer::MATRIZ => 51, ProvPeer::CO_TAB => 52, ProvPeer::TIPO_PER => 53, ProvPeer::CO_PAIS => 54, ProvPeer::CIUDAD => 55, ProvPeer::ZIP => 56, ProvPeer::WEBSITE => 57, ProvPeer::FORMTYPE => 58, ProvPeer::TAXID => 59, ProvPeer::CONTRIBU_E => 60, ProvPeer::PORC_ESP => 61, ),
		BasePeer::TYPE_FIELDNAME => array ('co_prov' => 0, 'prov_des' => 1, 'co_seg' => 2, 'co_zon' => 3, 'inactivo' => 4, 'productos' => 5, 'direc1' => 6, 'direc2' => 7, 'telefonos' => 8, 'fax' => 9, 'respons' => 10, 'fecha_reg' => 11, 'tipo' => 12, 'com_ult_co' => 13, 'fec_ult_co' => 14, 'net_ult_co' => 15, 'saldo' => 16, 'saldo_ini' => 17, 'mont_cre' => 18, 'plaz_pag' => 19, 'desc_ppago' => 20, 'desc_glob' => 21, 'tipo_iva' => 22, 'iva' => 23, 'rif' => 24, 'nacional' => 25, 'dis_cen' => 26, 'nit' => 27, 'email' => 28, 'co_ingr' => 29, 'comentario' => 30, 'campo1' => 31, 'campo2' => 32, 'campo3' => 33, 'campo4' => 34, 'campo5' => 35, 'campo6' => 36, 'campo7' => 37, 'campo8' => 38, 'co_us_in' => 39, 'fe_us_in' => 40, 'co_us_mo' => 41, 'fe_us_mo' => 42, 'co_us_el' => 43, 'fe_us_el' => 44, 'revisado' => 45, 'trasnfe' => 46, 'co_sucu' => 47, 'rowguid' => 48, 'juridico' => 49, 'tipo_adi' => 50, 'matriz' => 51, 'co_tab' => 52, 'tipo_per' => 53, 'co_pais' => 54, 'ciudad' => 55, 'zip' => 56, 'website' => 57, 'formtype' => 58, 'taxid' => 59, 'contribu_e' => 60, 'porc_esp' => 61, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ProvMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ProvMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ProvPeer::getTableMap();
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
		return str_replace(ProvPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ProvPeer::CO_PROV);

		$criteria->addSelectColumn(ProvPeer::PROV_DES);

		$criteria->addSelectColumn(ProvPeer::CO_SEG);

		$criteria->addSelectColumn(ProvPeer::CO_ZON);

		$criteria->addSelectColumn(ProvPeer::INACTIVO);

		$criteria->addSelectColumn(ProvPeer::PRODUCTOS);

		$criteria->addSelectColumn(ProvPeer::DIREC1);

		$criteria->addSelectColumn(ProvPeer::DIREC2);

		$criteria->addSelectColumn(ProvPeer::TELEFONOS);

		$criteria->addSelectColumn(ProvPeer::FAX);

		$criteria->addSelectColumn(ProvPeer::RESPONS);

		$criteria->addSelectColumn(ProvPeer::FECHA_REG);

		$criteria->addSelectColumn(ProvPeer::TIPO);

		$criteria->addSelectColumn(ProvPeer::COM_ULT_CO);

		$criteria->addSelectColumn(ProvPeer::FEC_ULT_CO);

		$criteria->addSelectColumn(ProvPeer::NET_ULT_CO);

		$criteria->addSelectColumn(ProvPeer::SALDO);

		$criteria->addSelectColumn(ProvPeer::SALDO_INI);

		$criteria->addSelectColumn(ProvPeer::MONT_CRE);

		$criteria->addSelectColumn(ProvPeer::PLAZ_PAG);

		$criteria->addSelectColumn(ProvPeer::DESC_PPAGO);

		$criteria->addSelectColumn(ProvPeer::DESC_GLOB);

		$criteria->addSelectColumn(ProvPeer::TIPO_IVA);

		$criteria->addSelectColumn(ProvPeer::IVA);

		$criteria->addSelectColumn(ProvPeer::RIF);

		$criteria->addSelectColumn(ProvPeer::NACIONAL);

		$criteria->addSelectColumn(ProvPeer::DIS_CEN);

		$criteria->addSelectColumn(ProvPeer::NIT);

		$criteria->addSelectColumn(ProvPeer::EMAIL);

		$criteria->addSelectColumn(ProvPeer::CO_INGR);

		$criteria->addSelectColumn(ProvPeer::COMENTARIO);

		$criteria->addSelectColumn(ProvPeer::CAMPO1);

		$criteria->addSelectColumn(ProvPeer::CAMPO2);

		$criteria->addSelectColumn(ProvPeer::CAMPO3);

		$criteria->addSelectColumn(ProvPeer::CAMPO4);

		$criteria->addSelectColumn(ProvPeer::CAMPO5);

		$criteria->addSelectColumn(ProvPeer::CAMPO6);

		$criteria->addSelectColumn(ProvPeer::CAMPO7);

		$criteria->addSelectColumn(ProvPeer::CAMPO8);

		$criteria->addSelectColumn(ProvPeer::CO_US_IN);

		$criteria->addSelectColumn(ProvPeer::FE_US_IN);

		$criteria->addSelectColumn(ProvPeer::CO_US_MO);

		$criteria->addSelectColumn(ProvPeer::FE_US_MO);

		$criteria->addSelectColumn(ProvPeer::CO_US_EL);

		$criteria->addSelectColumn(ProvPeer::FE_US_EL);

		$criteria->addSelectColumn(ProvPeer::REVISADO);

		$criteria->addSelectColumn(ProvPeer::TRASNFE);

		$criteria->addSelectColumn(ProvPeer::CO_SUCU);

		$criteria->addSelectColumn(ProvPeer::ROWGUID);

		$criteria->addSelectColumn(ProvPeer::JURIDICO);

		$criteria->addSelectColumn(ProvPeer::TIPO_ADI);

		$criteria->addSelectColumn(ProvPeer::MATRIZ);

		$criteria->addSelectColumn(ProvPeer::CO_TAB);

		$criteria->addSelectColumn(ProvPeer::TIPO_PER);

		$criteria->addSelectColumn(ProvPeer::CO_PAIS);

		$criteria->addSelectColumn(ProvPeer::CIUDAD);

		$criteria->addSelectColumn(ProvPeer::ZIP);

		$criteria->addSelectColumn(ProvPeer::WEBSITE);

		$criteria->addSelectColumn(ProvPeer::FORMTYPE);

		$criteria->addSelectColumn(ProvPeer::TAXID);

		$criteria->addSelectColumn(ProvPeer::CONTRIBU_E);

		$criteria->addSelectColumn(ProvPeer::PORC_ESP);

	}

	const COUNT = 'COUNT(prov.CO_PROV)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT prov.CO_PROV)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ProvPeer::doSelectRS($criteria, $con);
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
		$objects = ProvPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ProvPeer::populateObjects(ProvPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ProvPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ProvPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinSegmento(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinZona(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTipoPro(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinCtaIngr(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinSegmento(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SegmentoPeer::addSelectColumns($c);

		$c->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SegmentoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSegmento(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addProv($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinZona(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ZonaPeer::addSelectColumns($c);

		$c->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ZonaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getZona(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addProv($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTipoPro(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TipoProPeer::addSelectColumns($c);

		$c->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoProPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTipoPro(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addProv($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinCtaIngr(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CtaIngrPeer::addSelectColumns($c);

		$c->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = CtaIngrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getCtaIngr(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addProv($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$criteria->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ProvPeer::doSelectRS($criteria, $con);
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

		ProvPeer::addSelectColumns($c);
		$startcol2 = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SegmentoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SegmentoPeer::NUM_COLUMNS;

		ZonaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ZonaPeer::NUM_COLUMNS;

		TipoProPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TipoProPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$c->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSegmento(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProv($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1);
			}


					
			$omClass = ZonaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getZona(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProv($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initProvs();
				$obj3->addProv($obj1);
			}


					
			$omClass = TipoProPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTipoPro(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addProv($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initProvs();
				$obj4->addProv($obj1);
			}


					
			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCtaIngr(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addProv($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initProvs();
				$obj5->addProv($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptSegmento(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$criteria->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptZona(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$criteria->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTipoPro(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptCtaIngr(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProvPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProvPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$rs = ProvPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptSegmento(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol2 = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ZonaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ZonaPeer::NUM_COLUMNS;

		TipoProPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoProPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$c->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ZonaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getZona(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1);
			}

			$omClass = TipoProPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoPro(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initProvs();
				$obj3->addProv($obj1);
			}

			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCtaIngr(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initProvs();
				$obj4->addProv($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptZona(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol2 = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SegmentoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SegmentoPeer::NUM_COLUMNS;

		TipoProPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoProPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);

		$c->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSegmento(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1);
			}

			$omClass = TipoProPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoPro(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initProvs();
				$obj3->addProv($obj1);
			}

			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCtaIngr(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initProvs();
				$obj4->addProv($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTipoPro(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol2 = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SegmentoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SegmentoPeer::NUM_COLUMNS;

		ZonaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ZonaPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ProvPeer::CO_INGR, CtaIngrPeer::CO_INGR);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSegmento(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1);
			}

			$omClass = ZonaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getZona(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initProvs();
				$obj3->addProv($obj1);
			}

			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCtaIngr(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initProvs();
				$obj4->addProv($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptCtaIngr(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProvPeer::addSelectColumns($c);
		$startcol2 = (ProvPeer::NUM_COLUMNS - ProvPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SegmentoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SegmentoPeer::NUM_COLUMNS;

		ZonaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ZonaPeer::NUM_COLUMNS;

		TipoProPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TipoProPeer::NUM_COLUMNS;

		$c->addJoin(ProvPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ProvPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ProvPeer::TIPO, TipoProPeer::TIP_PRO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSegmento(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProvs();
				$obj2->addProv($obj1);
			}

			$omClass = ZonaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getZona(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initProvs();
				$obj3->addProv($obj1);
			}

			$omClass = TipoProPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTipoPro(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addProv($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initProvs();
				$obj4->addProv($obj1);
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
		return ProvPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(ProvPeer::CO_PROV);
			$selectCriteria->add(ProvPeer::CO_PROV, $criteria->remove(ProvPeer::CO_PROV), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ProvPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ProvPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Prov) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ProvPeer::CO_PROV, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Prov $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ProvPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ProvPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ProvPeer::DATABASE_NAME, ProvPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ProvPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ProvPeer::DATABASE_NAME);

		$criteria->add(ProvPeer::CO_PROV, $pk);


		$v = ProvPeer::doSelect($criteria, $con);

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
			$criteria->add(ProvPeer::CO_PROV, $pks, Criteria::IN);
			$objs = ProvPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseProvPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ProvMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ProvMapBuilder');
}
