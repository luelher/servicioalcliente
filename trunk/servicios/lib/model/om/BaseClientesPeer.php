<?php


abstract class BaseClientesPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'clientes';

	
	const CLASS_DEFAULT = 'lib.model.Clientes';

	
	const NUM_COLUMNS = 79;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_CLI = 'clientes.CO_CLI';

	
	const TIPO = 'clientes.TIPO';

	
	const CLI_DES = 'clientes.CLI_DES';

	
	const DIREC1 = 'clientes.DIREC1';

	
	const DIREC2 = 'clientes.DIREC2';

	
	const TELEFONOS = 'clientes.TELEFONOS';

	
	const FAX = 'clientes.FAX';

	
	const INACTIVO = 'clientes.INACTIVO';

	
	const COMENTARIO = 'clientes.COMENTARIO';

	
	const RESPONS = 'clientes.RESPONS';

	
	const FECHA_REG = 'clientes.FECHA_REG';

	
	const PUNTAJE = 'clientes.PUNTAJE';

	
	const SALDO = 'clientes.SALDO';

	
	const SALDO_INI = 'clientes.SALDO_INI';

	
	const FAC_ULT_VE = 'clientes.FAC_ULT_VE';

	
	const FEC_ULT_VE = 'clientes.FEC_ULT_VE';

	
	const NET_ULT_VE = 'clientes.NET_ULT_VE';

	
	const MONT_CRE = 'clientes.MONT_CRE';

	
	const PLAZ_PAG = 'clientes.PLAZ_PAG';

	
	const DESC_PPAGO = 'clientes.DESC_PPAGO';

	
	const CO_ZON = 'clientes.CO_ZON';

	
	const CO_SEG = 'clientes.CO_SEG';

	
	const CO_VEN = 'clientes.CO_VEN';

	
	const DESC_GLOB = 'clientes.DESC_GLOB';

	
	const HORAR_CAJA = 'clientes.HORAR_CAJA';

	
	const FRECU_VIST = 'clientes.FRECU_VIST';

	
	const LUNES = 'clientes.LUNES';

	
	const MARTES = 'clientes.MARTES';

	
	const MIERCOLES = 'clientes.MIERCOLES';

	
	const JUEVES = 'clientes.JUEVES';

	
	const VIERNES = 'clientes.VIERNES';

	
	const SABADO = 'clientes.SABADO';

	
	const DOMINGO = 'clientes.DOMINGO';

	
	const DIR_ENT2 = 'clientes.DIR_ENT2';

	
	const TIPO_IVA = 'clientes.TIPO_IVA';

	
	const IVA = 'clientes.IVA';

	
	const RIF = 'clientes.RIF';

	
	const CONTRIBU = 'clientes.CONTRIBU';

	
	const DIS_CEN = 'clientes.DIS_CEN';

	
	const NIT = 'clientes.NIT';

	
	const EMAIL = 'clientes.EMAIL';

	
	const CO_INGR = 'clientes.CO_INGR';

	
	const CAMPO1 = 'clientes.CAMPO1';

	
	const CAMPO2 = 'clientes.CAMPO2';

	
	const CAMPO3 = 'clientes.CAMPO3';

	
	const CAMPO4 = 'clientes.CAMPO4';

	
	const CAMPO5 = 'clientes.CAMPO5';

	
	const CAMPO6 = 'clientes.CAMPO6';

	
	const CAMPO7 = 'clientes.CAMPO7';

	
	const CAMPO8 = 'clientes.CAMPO8';

	
	const CO_US_IN = 'clientes.CO_US_IN';

	
	const FE_US_IN = 'clientes.FE_US_IN';

	
	const CO_US_MO = 'clientes.CO_US_MO';

	
	const FE_US_MO = 'clientes.FE_US_MO';

	
	const CO_US_EL = 'clientes.CO_US_EL';

	
	const FE_US_EL = 'clientes.FE_US_EL';

	
	const REVISADO = 'clientes.REVISADO';

	
	const TRASNFE = 'clientes.TRASNFE';

	
	const CO_SUCU = 'clientes.CO_SUCU';

	
	const ROWGUID = 'clientes.ROWGUID';

	
	const JURIDICO = 'clientes.JURIDICO';

	
	const TIPO_ADI = 'clientes.TIPO_ADI';

	
	const MATRIZ = 'clientes.MATRIZ';

	
	const CO_TAB = 'clientes.CO_TAB';

	
	const TIPO_PER = 'clientes.TIPO_PER';

	
	const SERIALP = 'clientes.SERIALP';

	
	const VALIDO = 'clientes.VALIDO';

	
	const ROW_ID = 'clientes.ROW_ID';

	
	const ESTADO = 'clientes.ESTADO';

	
	const ID = 'clientes.ID';

	
	const CO_PAIS = 'clientes.CO_PAIS';

	
	const CIUDAD = 'clientes.CIUDAD';

	
	const ZIP = 'clientes.ZIP';

	
	const LOGIN = 'clientes.LOGIN';

	
	const PASSWORD = 'clientes.PASSWORD';

	
	const WEBSITE = 'clientes.WEBSITE';

	
	const SALESTAX = 'clientes.SALESTAX';

	
	const CONTRIBU_E = 'clientes.CONTRIBU_E';

	
	const PORC_ESP = 'clientes.PORC_ESP';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoCli', 'Tipo', 'CliDes', 'Direc1', 'Direc2', 'Telefonos', 'Fax', 'Inactivo', 'Comentario', 'Respons', 'FechaReg', 'Puntaje', 'Saldo', 'SaldoIni', 'FacUltVe', 'FecUltVe', 'NetUltVe', 'MontCre', 'PlazPag', 'DescPpago', 'CoZon', 'CoSeg', 'CoVen', 'DescGlob', 'HorarCaja', 'FrecuVist', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo', 'DirEnt2', 'TipoIva', 'Iva', 'Rif', 'Contribu', 'DisCen', 'Nit', 'Email', 'CoIngr', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'Juridico', 'TipoAdi', 'Matriz', 'CoTab', 'TipoPer', 'Serialp', 'Valido', 'RowId', 'Estado', 'Id', 'CoPais', 'Ciudad', 'Zip', 'Login', 'Password', 'Website', 'Salestax', 'ContribuE', 'PorcEsp', ),
		BasePeer::TYPE_COLNAME => array (ClientesPeer::CO_CLI, ClientesPeer::TIPO, ClientesPeer::CLI_DES, ClientesPeer::DIREC1, ClientesPeer::DIREC2, ClientesPeer::TELEFONOS, ClientesPeer::FAX, ClientesPeer::INACTIVO, ClientesPeer::COMENTARIO, ClientesPeer::RESPONS, ClientesPeer::FECHA_REG, ClientesPeer::PUNTAJE, ClientesPeer::SALDO, ClientesPeer::SALDO_INI, ClientesPeer::FAC_ULT_VE, ClientesPeer::FEC_ULT_VE, ClientesPeer::NET_ULT_VE, ClientesPeer::MONT_CRE, ClientesPeer::PLAZ_PAG, ClientesPeer::DESC_PPAGO, ClientesPeer::CO_ZON, ClientesPeer::CO_SEG, ClientesPeer::CO_VEN, ClientesPeer::DESC_GLOB, ClientesPeer::HORAR_CAJA, ClientesPeer::FRECU_VIST, ClientesPeer::LUNES, ClientesPeer::MARTES, ClientesPeer::MIERCOLES, ClientesPeer::JUEVES, ClientesPeer::VIERNES, ClientesPeer::SABADO, ClientesPeer::DOMINGO, ClientesPeer::DIR_ENT2, ClientesPeer::TIPO_IVA, ClientesPeer::IVA, ClientesPeer::RIF, ClientesPeer::CONTRIBU, ClientesPeer::DIS_CEN, ClientesPeer::NIT, ClientesPeer::EMAIL, ClientesPeer::CO_INGR, ClientesPeer::CAMPO1, ClientesPeer::CAMPO2, ClientesPeer::CAMPO3, ClientesPeer::CAMPO4, ClientesPeer::CAMPO5, ClientesPeer::CAMPO6, ClientesPeer::CAMPO7, ClientesPeer::CAMPO8, ClientesPeer::CO_US_IN, ClientesPeer::FE_US_IN, ClientesPeer::CO_US_MO, ClientesPeer::FE_US_MO, ClientesPeer::CO_US_EL, ClientesPeer::FE_US_EL, ClientesPeer::REVISADO, ClientesPeer::TRASNFE, ClientesPeer::CO_SUCU, ClientesPeer::ROWGUID, ClientesPeer::JURIDICO, ClientesPeer::TIPO_ADI, ClientesPeer::MATRIZ, ClientesPeer::CO_TAB, ClientesPeer::TIPO_PER, ClientesPeer::SERIALP, ClientesPeer::VALIDO, ClientesPeer::ROW_ID, ClientesPeer::ESTADO, ClientesPeer::ID, ClientesPeer::CO_PAIS, ClientesPeer::CIUDAD, ClientesPeer::ZIP, ClientesPeer::LOGIN, ClientesPeer::PASSWORD, ClientesPeer::WEBSITE, ClientesPeer::SALESTAX, ClientesPeer::CONTRIBU_E, ClientesPeer::PORC_ESP, ),
		BasePeer::TYPE_FIELDNAME => array ('co_cli', 'tipo', 'cli_des', 'direc1', 'direc2', 'telefonos', 'fax', 'inactivo', 'comentario', 'respons', 'fecha_reg', 'puntaje', 'saldo', 'saldo_ini', 'fac_ult_ve', 'fec_ult_ve', 'net_ult_ve', 'mont_cre', 'plaz_pag', 'desc_ppago', 'co_zon', 'co_seg', 'co_ven', 'desc_glob', 'horar_caja', 'frecu_vist', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo', 'dir_ent2', 'tipo_iva', 'iva', 'rif', 'contribu', 'dis_cen', 'nit', 'email', 'co_ingr', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'juridico', 'tipo_adi', 'matriz', 'co_tab', 'tipo_per', 'serialp', 'valido', 'row_id', 'estado', 'Id', 'co_pais', 'ciudad', 'zip', 'login', 'password', 'website', 'salestax', 'contribu_e', 'porc_esp', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoCli' => 0, 'Tipo' => 1, 'CliDes' => 2, 'Direc1' => 3, 'Direc2' => 4, 'Telefonos' => 5, 'Fax' => 6, 'Inactivo' => 7, 'Comentario' => 8, 'Respons' => 9, 'FechaReg' => 10, 'Puntaje' => 11, 'Saldo' => 12, 'SaldoIni' => 13, 'FacUltVe' => 14, 'FecUltVe' => 15, 'NetUltVe' => 16, 'MontCre' => 17, 'PlazPag' => 18, 'DescPpago' => 19, 'CoZon' => 20, 'CoSeg' => 21, 'CoVen' => 22, 'DescGlob' => 23, 'HorarCaja' => 24, 'FrecuVist' => 25, 'Lunes' => 26, 'Martes' => 27, 'Miercoles' => 28, 'Jueves' => 29, 'Viernes' => 30, 'Sabado' => 31, 'Domingo' => 32, 'DirEnt2' => 33, 'TipoIva' => 34, 'Iva' => 35, 'Rif' => 36, 'Contribu' => 37, 'DisCen' => 38, 'Nit' => 39, 'Email' => 40, 'CoIngr' => 41, 'Campo1' => 42, 'Campo2' => 43, 'Campo3' => 44, 'Campo4' => 45, 'Campo5' => 46, 'Campo6' => 47, 'Campo7' => 48, 'Campo8' => 49, 'CoUsIn' => 50, 'FeUsIn' => 51, 'CoUsMo' => 52, 'FeUsMo' => 53, 'CoUsEl' => 54, 'FeUsEl' => 55, 'Revisado' => 56, 'Trasnfe' => 57, 'CoSucu' => 58, 'Rowguid' => 59, 'Juridico' => 60, 'TipoAdi' => 61, 'Matriz' => 62, 'CoTab' => 63, 'TipoPer' => 64, 'Serialp' => 65, 'Valido' => 66, 'RowId' => 67, 'Estado' => 68, 'Id' => 69, 'CoPais' => 70, 'Ciudad' => 71, 'Zip' => 72, 'Login' => 73, 'Password' => 74, 'Website' => 75, 'Salestax' => 76, 'ContribuE' => 77, 'PorcEsp' => 78, ),
		BasePeer::TYPE_COLNAME => array (ClientesPeer::CO_CLI => 0, ClientesPeer::TIPO => 1, ClientesPeer::CLI_DES => 2, ClientesPeer::DIREC1 => 3, ClientesPeer::DIREC2 => 4, ClientesPeer::TELEFONOS => 5, ClientesPeer::FAX => 6, ClientesPeer::INACTIVO => 7, ClientesPeer::COMENTARIO => 8, ClientesPeer::RESPONS => 9, ClientesPeer::FECHA_REG => 10, ClientesPeer::PUNTAJE => 11, ClientesPeer::SALDO => 12, ClientesPeer::SALDO_INI => 13, ClientesPeer::FAC_ULT_VE => 14, ClientesPeer::FEC_ULT_VE => 15, ClientesPeer::NET_ULT_VE => 16, ClientesPeer::MONT_CRE => 17, ClientesPeer::PLAZ_PAG => 18, ClientesPeer::DESC_PPAGO => 19, ClientesPeer::CO_ZON => 20, ClientesPeer::CO_SEG => 21, ClientesPeer::CO_VEN => 22, ClientesPeer::DESC_GLOB => 23, ClientesPeer::HORAR_CAJA => 24, ClientesPeer::FRECU_VIST => 25, ClientesPeer::LUNES => 26, ClientesPeer::MARTES => 27, ClientesPeer::MIERCOLES => 28, ClientesPeer::JUEVES => 29, ClientesPeer::VIERNES => 30, ClientesPeer::SABADO => 31, ClientesPeer::DOMINGO => 32, ClientesPeer::DIR_ENT2 => 33, ClientesPeer::TIPO_IVA => 34, ClientesPeer::IVA => 35, ClientesPeer::RIF => 36, ClientesPeer::CONTRIBU => 37, ClientesPeer::DIS_CEN => 38, ClientesPeer::NIT => 39, ClientesPeer::EMAIL => 40, ClientesPeer::CO_INGR => 41, ClientesPeer::CAMPO1 => 42, ClientesPeer::CAMPO2 => 43, ClientesPeer::CAMPO3 => 44, ClientesPeer::CAMPO4 => 45, ClientesPeer::CAMPO5 => 46, ClientesPeer::CAMPO6 => 47, ClientesPeer::CAMPO7 => 48, ClientesPeer::CAMPO8 => 49, ClientesPeer::CO_US_IN => 50, ClientesPeer::FE_US_IN => 51, ClientesPeer::CO_US_MO => 52, ClientesPeer::FE_US_MO => 53, ClientesPeer::CO_US_EL => 54, ClientesPeer::FE_US_EL => 55, ClientesPeer::REVISADO => 56, ClientesPeer::TRASNFE => 57, ClientesPeer::CO_SUCU => 58, ClientesPeer::ROWGUID => 59, ClientesPeer::JURIDICO => 60, ClientesPeer::TIPO_ADI => 61, ClientesPeer::MATRIZ => 62, ClientesPeer::CO_TAB => 63, ClientesPeer::TIPO_PER => 64, ClientesPeer::SERIALP => 65, ClientesPeer::VALIDO => 66, ClientesPeer::ROW_ID => 67, ClientesPeer::ESTADO => 68, ClientesPeer::ID => 69, ClientesPeer::CO_PAIS => 70, ClientesPeer::CIUDAD => 71, ClientesPeer::ZIP => 72, ClientesPeer::LOGIN => 73, ClientesPeer::PASSWORD => 74, ClientesPeer::WEBSITE => 75, ClientesPeer::SALESTAX => 76, ClientesPeer::CONTRIBU_E => 77, ClientesPeer::PORC_ESP => 78, ),
		BasePeer::TYPE_FIELDNAME => array ('co_cli' => 0, 'tipo' => 1, 'cli_des' => 2, 'direc1' => 3, 'direc2' => 4, 'telefonos' => 5, 'fax' => 6, 'inactivo' => 7, 'comentario' => 8, 'respons' => 9, 'fecha_reg' => 10, 'puntaje' => 11, 'saldo' => 12, 'saldo_ini' => 13, 'fac_ult_ve' => 14, 'fec_ult_ve' => 15, 'net_ult_ve' => 16, 'mont_cre' => 17, 'plaz_pag' => 18, 'desc_ppago' => 19, 'co_zon' => 20, 'co_seg' => 21, 'co_ven' => 22, 'desc_glob' => 23, 'horar_caja' => 24, 'frecu_vist' => 25, 'lunes' => 26, 'martes' => 27, 'miercoles' => 28, 'jueves' => 29, 'viernes' => 30, 'sabado' => 31, 'domingo' => 32, 'dir_ent2' => 33, 'tipo_iva' => 34, 'iva' => 35, 'rif' => 36, 'contribu' => 37, 'dis_cen' => 38, 'nit' => 39, 'email' => 40, 'co_ingr' => 41, 'campo1' => 42, 'campo2' => 43, 'campo3' => 44, 'campo4' => 45, 'campo5' => 46, 'campo6' => 47, 'campo7' => 48, 'campo8' => 49, 'co_us_in' => 50, 'fe_us_in' => 51, 'co_us_mo' => 52, 'fe_us_mo' => 53, 'co_us_el' => 54, 'fe_us_el' => 55, 'revisado' => 56, 'trasnfe' => 57, 'co_sucu' => 58, 'rowguid' => 59, 'juridico' => 60, 'tipo_adi' => 61, 'matriz' => 62, 'co_tab' => 63, 'tipo_per' => 64, 'serialp' => 65, 'valido' => 66, 'row_id' => 67, 'estado' => 68, 'Id' => 69, 'co_pais' => 70, 'ciudad' => 71, 'zip' => 72, 'login' => 73, 'password' => 74, 'website' => 75, 'salestax' => 76, 'contribu_e' => 77, 'porc_esp' => 78, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ClientesMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ClientesMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ClientesPeer::getTableMap();
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
		return str_replace(ClientesPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ClientesPeer::CO_CLI);

		$criteria->addSelectColumn(ClientesPeer::TIPO);

		$criteria->addSelectColumn(ClientesPeer::CLI_DES);

		$criteria->addSelectColumn(ClientesPeer::DIREC1);

		$criteria->addSelectColumn(ClientesPeer::DIREC2);

		$criteria->addSelectColumn(ClientesPeer::TELEFONOS);

		$criteria->addSelectColumn(ClientesPeer::FAX);

		$criteria->addSelectColumn(ClientesPeer::INACTIVO);

		$criteria->addSelectColumn(ClientesPeer::COMENTARIO);

		$criteria->addSelectColumn(ClientesPeer::RESPONS);

		$criteria->addSelectColumn(ClientesPeer::FECHA_REG);

		$criteria->addSelectColumn(ClientesPeer::PUNTAJE);

		$criteria->addSelectColumn(ClientesPeer::SALDO);

		$criteria->addSelectColumn(ClientesPeer::SALDO_INI);

		$criteria->addSelectColumn(ClientesPeer::FAC_ULT_VE);

		$criteria->addSelectColumn(ClientesPeer::FEC_ULT_VE);

		$criteria->addSelectColumn(ClientesPeer::NET_ULT_VE);

		$criteria->addSelectColumn(ClientesPeer::MONT_CRE);

		$criteria->addSelectColumn(ClientesPeer::PLAZ_PAG);

		$criteria->addSelectColumn(ClientesPeer::DESC_PPAGO);

		$criteria->addSelectColumn(ClientesPeer::CO_ZON);

		$criteria->addSelectColumn(ClientesPeer::CO_SEG);

		$criteria->addSelectColumn(ClientesPeer::CO_VEN);

		$criteria->addSelectColumn(ClientesPeer::DESC_GLOB);

		$criteria->addSelectColumn(ClientesPeer::HORAR_CAJA);

		$criteria->addSelectColumn(ClientesPeer::FRECU_VIST);

		$criteria->addSelectColumn(ClientesPeer::LUNES);

		$criteria->addSelectColumn(ClientesPeer::MARTES);

		$criteria->addSelectColumn(ClientesPeer::MIERCOLES);

		$criteria->addSelectColumn(ClientesPeer::JUEVES);

		$criteria->addSelectColumn(ClientesPeer::VIERNES);

		$criteria->addSelectColumn(ClientesPeer::SABADO);

		$criteria->addSelectColumn(ClientesPeer::DOMINGO);

		$criteria->addSelectColumn(ClientesPeer::DIR_ENT2);

		$criteria->addSelectColumn(ClientesPeer::TIPO_IVA);

		$criteria->addSelectColumn(ClientesPeer::IVA);

		$criteria->addSelectColumn(ClientesPeer::RIF);

		$criteria->addSelectColumn(ClientesPeer::CONTRIBU);

		$criteria->addSelectColumn(ClientesPeer::DIS_CEN);

		$criteria->addSelectColumn(ClientesPeer::NIT);

		$criteria->addSelectColumn(ClientesPeer::EMAIL);

		$criteria->addSelectColumn(ClientesPeer::CO_INGR);

		$criteria->addSelectColumn(ClientesPeer::CAMPO1);

		$criteria->addSelectColumn(ClientesPeer::CAMPO2);

		$criteria->addSelectColumn(ClientesPeer::CAMPO3);

		$criteria->addSelectColumn(ClientesPeer::CAMPO4);

		$criteria->addSelectColumn(ClientesPeer::CAMPO5);

		$criteria->addSelectColumn(ClientesPeer::CAMPO6);

		$criteria->addSelectColumn(ClientesPeer::CAMPO7);

		$criteria->addSelectColumn(ClientesPeer::CAMPO8);

		$criteria->addSelectColumn(ClientesPeer::CO_US_IN);

		$criteria->addSelectColumn(ClientesPeer::FE_US_IN);

		$criteria->addSelectColumn(ClientesPeer::CO_US_MO);

		$criteria->addSelectColumn(ClientesPeer::FE_US_MO);

		$criteria->addSelectColumn(ClientesPeer::CO_US_EL);

		$criteria->addSelectColumn(ClientesPeer::FE_US_EL);

		$criteria->addSelectColumn(ClientesPeer::REVISADO);

		$criteria->addSelectColumn(ClientesPeer::TRASNFE);

		$criteria->addSelectColumn(ClientesPeer::CO_SUCU);

		$criteria->addSelectColumn(ClientesPeer::ROWGUID);

		$criteria->addSelectColumn(ClientesPeer::JURIDICO);

		$criteria->addSelectColumn(ClientesPeer::TIPO_ADI);

		$criteria->addSelectColumn(ClientesPeer::MATRIZ);

		$criteria->addSelectColumn(ClientesPeer::CO_TAB);

		$criteria->addSelectColumn(ClientesPeer::TIPO_PER);

		$criteria->addSelectColumn(ClientesPeer::SERIALP);

		$criteria->addSelectColumn(ClientesPeer::VALIDO);

		$criteria->addSelectColumn(ClientesPeer::ROW_ID);

		$criteria->addSelectColumn(ClientesPeer::ESTADO);

		$criteria->addSelectColumn(ClientesPeer::ID);

		$criteria->addSelectColumn(ClientesPeer::CO_PAIS);

		$criteria->addSelectColumn(ClientesPeer::CIUDAD);

		$criteria->addSelectColumn(ClientesPeer::ZIP);

		$criteria->addSelectColumn(ClientesPeer::LOGIN);

		$criteria->addSelectColumn(ClientesPeer::PASSWORD);

		$criteria->addSelectColumn(ClientesPeer::WEBSITE);

		$criteria->addSelectColumn(ClientesPeer::SALESTAX);

		$criteria->addSelectColumn(ClientesPeer::CONTRIBU_E);

		$criteria->addSelectColumn(ClientesPeer::PORC_ESP);

	}

	const COUNT = 'COUNT(clientes.CO_CLI)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT clientes.CO_CLI)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ClientesPeer::doSelectRS($criteria, $con);
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
		$objects = ClientesPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ClientesPeer::populateObjects(ClientesPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ClientesPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ClientesPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinTipoCli(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinSegmento(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinVendedor(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinTipoCli(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ClientesPeer::addSelectColumns($c);
		$startcol = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TipoCliPeer::addSelectColumns($c);

		$c->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoCliPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTipoCli(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addClientes($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1); 			}
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

		ClientesPeer::addSelectColumns($c);
		$startcol = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ZonaPeer::addSelectColumns($c);

		$c->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

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
										$temp_obj2->addClientes($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinSegmento(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ClientesPeer::addSelectColumns($c);
		$startcol = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SegmentoPeer::addSelectColumns($c);

		$c->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

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
										$temp_obj2->addClientes($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinVendedor(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ClientesPeer::addSelectColumns($c);
		$startcol = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		VendedorPeer::addSelectColumns($c);

		$c->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = VendedorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getVendedor(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addClientes($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1); 			}
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

		ClientesPeer::addSelectColumns($c);
		$startcol = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CtaIngrPeer::addSelectColumns($c);

		$c->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

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
										$temp_obj2->addClientes($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$criteria->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
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

		ClientesPeer::addSelectColumns($c);
		$startcol2 = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TipoCliPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TipoCliPeer::NUM_COLUMNS;

		ZonaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ZonaPeer::NUM_COLUMNS;

		SegmentoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SegmentoPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + VendedorPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$c->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = TipoCliPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTipoCli(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addClientes($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1);
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
					$temp_obj3->addClientes($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initClientess();
				$obj3->addClientes($obj1);
			}


					
			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSegmento(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addClientes($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initClientess();
				$obj4->addClientes($obj1);
			}


					
			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getVendedor(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addClientes($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initClientess();
				$obj5->addClientes($obj1);
			}


					
			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getCtaIngr(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addClientes($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initClientess();
				$obj6->addClientes($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptTipoCli(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$criteria->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptSegmento(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$criteria->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptVendedor(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$criteria->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ClientesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ClientesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$criteria->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$criteria->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$criteria->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$rs = ClientesPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptTipoCli(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ClientesPeer::addSelectColumns($c);
		$startcol2 = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ZonaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ZonaPeer::NUM_COLUMNS;

		SegmentoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SegmentoPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + VendedorPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

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
					$temp_obj2->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1);
			}

			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSegmento(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initClientess();
				$obj3->addClientes($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getVendedor(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initClientess();
				$obj4->addClientes($obj1);
			}

			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCtaIngr(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initClientess();
				$obj5->addClientes($obj1);
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

		ClientesPeer::addSelectColumns($c);
		$startcol2 = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TipoCliPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TipoCliPeer::NUM_COLUMNS;

		SegmentoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SegmentoPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + VendedorPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$c->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoCliPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTipoCli(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1);
			}

			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSegmento(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initClientess();
				$obj3->addClientes($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getVendedor(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initClientess();
				$obj4->addClientes($obj1);
			}

			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCtaIngr(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initClientess();
				$obj5->addClientes($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptSegmento(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ClientesPeer::addSelectColumns($c);
		$startcol2 = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TipoCliPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TipoCliPeer::NUM_COLUMNS;

		ZonaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ZonaPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + VendedorPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$c->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoCliPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTipoCli(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1);
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
					$temp_obj3->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initClientess();
				$obj3->addClientes($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getVendedor(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initClientess();
				$obj4->addClientes($obj1);
			}

			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCtaIngr(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initClientess();
				$obj5->addClientes($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptVendedor(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ClientesPeer::addSelectColumns($c);
		$startcol2 = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TipoCliPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TipoCliPeer::NUM_COLUMNS;

		ZonaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ZonaPeer::NUM_COLUMNS;

		SegmentoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SegmentoPeer::NUM_COLUMNS;

		CtaIngrPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CtaIngrPeer::NUM_COLUMNS;

		$c->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$c->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ClientesPeer::CO_INGR, CtaIngrPeer::CO_INGR);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoCliPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTipoCli(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1);
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
					$temp_obj3->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initClientess();
				$obj3->addClientes($obj1);
			}

			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSegmento(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initClientess();
				$obj4->addClientes($obj1);
			}

			$omClass = CtaIngrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCtaIngr(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initClientess();
				$obj5->addClientes($obj1);
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

		ClientesPeer::addSelectColumns($c);
		$startcol2 = (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TipoCliPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TipoCliPeer::NUM_COLUMNS;

		ZonaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ZonaPeer::NUM_COLUMNS;

		SegmentoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SegmentoPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + VendedorPeer::NUM_COLUMNS;

		$c->addJoin(ClientesPeer::TIPO, TipoCliPeer::TIP_CLI);

		$c->addJoin(ClientesPeer::CO_ZON, ZonaPeer::CO_ZON);

		$c->addJoin(ClientesPeer::CO_SEG, SegmentoPeer::CO_SEG);

		$c->addJoin(ClientesPeer::CO_VEN, VendedorPeer::CO_VEN);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoCliPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTipoCli(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initClientess();
				$obj2->addClientes($obj1);
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
					$temp_obj3->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initClientess();
				$obj3->addClientes($obj1);
			}

			$omClass = SegmentoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSegmento(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initClientess();
				$obj4->addClientes($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getVendedor(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addClientes($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initClientess();
				$obj5->addClientes($obj1);
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
		return ClientesPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(ClientesPeer::CO_CLI);
			$selectCriteria->add(ClientesPeer::CO_CLI, $criteria->remove(ClientesPeer::CO_CLI), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ClientesPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ClientesPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Clientes) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ClientesPeer::CO_CLI, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Clientes $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ClientesPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ClientesPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ClientesPeer::DATABASE_NAME, ClientesPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ClientesPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ClientesPeer::DATABASE_NAME);

		$criteria->add(ClientesPeer::CO_CLI, $pk);


		$v = ClientesPeer::doSelect($criteria, $con);

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
			$criteria->add(ClientesPeer::CO_CLI, $pks, Criteria::IN);
			$objs = ClientesPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseClientesPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ClientesMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ClientesMapBuilder');
}
