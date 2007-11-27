<?php


abstract class BaseDocumCcPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'docum_cc';

	
	const CLASS_DEFAULT = 'lib.model.DocumCc';

	
	const NUM_COLUMNS = 72;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const TIPO_DOC = 'docum_cc.TIPO_DOC';

	
	const NRO_DOC = 'docum_cc.NRO_DOC';

	
	const ANULADO = 'docum_cc.ANULADO';

	
	const MOVI = 'docum_cc.MOVI';

	
	const AUT = 'docum_cc.AUT';

	
	const NUM_CONTROL = 'docum_cc.NUM_CONTROL';

	
	const CO_CLI = 'docum_cc.CO_CLI';

	
	const CONTRIB = 'docum_cc.CONTRIB';

	
	const FEC_EMIS = 'docum_cc.FEC_EMIS';

	
	const FEC_VENC = 'docum_cc.FEC_VENC';

	
	const OBSERVA = 'docum_cc.OBSERVA';

	
	const DOC_ORIG = 'docum_cc.DOC_ORIG';

	
	const NRO_ORIG = 'docum_cc.NRO_ORIG';

	
	const CO_BAN = 'docum_cc.CO_BAN';

	
	const NRO_CHE = 'docum_cc.NRO_CHE';

	
	const CO_VEN = 'docum_cc.CO_VEN';

	
	const TIPO = 'docum_cc.TIPO';

	
	const TASA = 'docum_cc.TASA';

	
	const MONEDA = 'docum_cc.MONEDA';

	
	const MONTO_IMP = 'docum_cc.MONTO_IMP';

	
	const MONTO_GEN = 'docum_cc.MONTO_GEN';

	
	const MONTO_A1 = 'docum_cc.MONTO_A1';

	
	const MONTO_A2 = 'docum_cc.MONTO_A2';

	
	const MONTO_BRU = 'docum_cc.MONTO_BRU';

	
	const DESCUENTOS = 'docum_cc.DESCUENTOS';

	
	const MONTO_DES = 'docum_cc.MONTO_DES';

	
	const RECARGO = 'docum_cc.RECARGO';

	
	const MONTO_REC = 'docum_cc.MONTO_REC';

	
	const MONTO_OTR = 'docum_cc.MONTO_OTR';

	
	const MONTO_NET = 'docum_cc.MONTO_NET';

	
	const SALDO = 'docum_cc.SALDO';

	
	const FECCOM = 'docum_cc.FECCOM';

	
	const NUMCOM = 'docum_cc.NUMCOM';

	
	const DIS_CEN = 'docum_cc.DIS_CEN';

	
	const COMIS1 = 'docum_cc.COMIS1';

	
	const COMIS2 = 'docum_cc.COMIS2';

	
	const COMIS3 = 'docum_cc.COMIS3';

	
	const COMIS4 = 'docum_cc.COMIS4';

	
	const ADICIONAL = 'docum_cc.ADICIONAL';

	
	const CAMPO1 = 'docum_cc.CAMPO1';

	
	const CAMPO2 = 'docum_cc.CAMPO2';

	
	const CAMPO3 = 'docum_cc.CAMPO3';

	
	const CAMPO4 = 'docum_cc.CAMPO4';

	
	const CAMPO5 = 'docum_cc.CAMPO5';

	
	const CAMPO6 = 'docum_cc.CAMPO6';

	
	const CAMPO7 = 'docum_cc.CAMPO7';

	
	const CAMPO8 = 'docum_cc.CAMPO8';

	
	const CO_US_IN = 'docum_cc.CO_US_IN';

	
	const FE_US_IN = 'docum_cc.FE_US_IN';

	
	const CO_US_MO = 'docum_cc.CO_US_MO';

	
	const FE_US_MO = 'docum_cc.FE_US_MO';

	
	const CO_US_EL = 'docum_cc.CO_US_EL';

	
	const FE_US_EL = 'docum_cc.FE_US_EL';

	
	const REVISADO = 'docum_cc.REVISADO';

	
	const TRASNFE = 'docum_cc.TRASNFE';

	
	const NUMCON = 'docum_cc.NUMCON';

	
	const CO_SUCU = 'docum_cc.CO_SUCU';

	
	const ROWGUID = 'docum_cc.ROWGUID';

	
	const MON_ILC = 'docum_cc.MON_ILC';

	
	const OTROS1 = 'docum_cc.OTROS1';

	
	const OTROS2 = 'docum_cc.OTROS2';

	
	const OTROS3 = 'docum_cc.OTROS3';

	
	const RENG_SI = 'docum_cc.RENG_SI';

	
	const COMIS5 = 'docum_cc.COMIS5';

	
	const COMIS6 = 'docum_cc.COMIS6';

	
	const ROW_ID = 'docum_cc.ROW_ID';

	
	const AUX01 = 'docum_cc.AUX01';

	
	const AUX02 = 'docum_cc.AUX02';

	
	const SALESTAX = 'docum_cc.SALESTAX';

	
	const ORIGEN = 'docum_cc.ORIGEN';

	
	const ORIGEN_D = 'docum_cc.ORIGEN_D';

	
	const FEC_REG = 'docum_cc.FEC_REG';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('TipoDoc', 'NroDoc', 'Anulado', 'Movi', 'Aut', 'NumControl', 'CoCli', 'Contrib', 'FecEmis', 'FecVenc', 'Observa', 'DocOrig', 'NroOrig', 'CoBan', 'NroChe', 'CoVen', 'Tipo', 'Tasa', 'Moneda', 'MontoImp', 'MontoGen', 'MontoA1', 'MontoA2', 'MontoBru', 'Descuentos', 'MontoDes', 'Recargo', 'MontoRec', 'MontoOtr', 'MontoNet', 'Saldo', 'Feccom', 'Numcom', 'DisCen', 'Comis1', 'Comis2', 'Comis3', 'Comis4', 'Adicional', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'Numcon', 'CoSucu', 'Rowguid', 'MonIlc', 'Otros1', 'Otros2', 'Otros3', 'RengSi', 'Comis5', 'Comis6', 'RowId', 'Aux01', 'Aux02', 'Salestax', 'Origen', 'OrigenD', 'FecReg', ),
		BasePeer::TYPE_COLNAME => array (DocumCcPeer::TIPO_DOC, DocumCcPeer::NRO_DOC, DocumCcPeer::ANULADO, DocumCcPeer::MOVI, DocumCcPeer::AUT, DocumCcPeer::NUM_CONTROL, DocumCcPeer::CO_CLI, DocumCcPeer::CONTRIB, DocumCcPeer::FEC_EMIS, DocumCcPeer::FEC_VENC, DocumCcPeer::OBSERVA, DocumCcPeer::DOC_ORIG, DocumCcPeer::NRO_ORIG, DocumCcPeer::CO_BAN, DocumCcPeer::NRO_CHE, DocumCcPeer::CO_VEN, DocumCcPeer::TIPO, DocumCcPeer::TASA, DocumCcPeer::MONEDA, DocumCcPeer::MONTO_IMP, DocumCcPeer::MONTO_GEN, DocumCcPeer::MONTO_A1, DocumCcPeer::MONTO_A2, DocumCcPeer::MONTO_BRU, DocumCcPeer::DESCUENTOS, DocumCcPeer::MONTO_DES, DocumCcPeer::RECARGO, DocumCcPeer::MONTO_REC, DocumCcPeer::MONTO_OTR, DocumCcPeer::MONTO_NET, DocumCcPeer::SALDO, DocumCcPeer::FECCOM, DocumCcPeer::NUMCOM, DocumCcPeer::DIS_CEN, DocumCcPeer::COMIS1, DocumCcPeer::COMIS2, DocumCcPeer::COMIS3, DocumCcPeer::COMIS4, DocumCcPeer::ADICIONAL, DocumCcPeer::CAMPO1, DocumCcPeer::CAMPO2, DocumCcPeer::CAMPO3, DocumCcPeer::CAMPO4, DocumCcPeer::CAMPO5, DocumCcPeer::CAMPO6, DocumCcPeer::CAMPO7, DocumCcPeer::CAMPO8, DocumCcPeer::CO_US_IN, DocumCcPeer::FE_US_IN, DocumCcPeer::CO_US_MO, DocumCcPeer::FE_US_MO, DocumCcPeer::CO_US_EL, DocumCcPeer::FE_US_EL, DocumCcPeer::REVISADO, DocumCcPeer::TRASNFE, DocumCcPeer::NUMCON, DocumCcPeer::CO_SUCU, DocumCcPeer::ROWGUID, DocumCcPeer::MON_ILC, DocumCcPeer::OTROS1, DocumCcPeer::OTROS2, DocumCcPeer::OTROS3, DocumCcPeer::RENG_SI, DocumCcPeer::COMIS5, DocumCcPeer::COMIS6, DocumCcPeer::ROW_ID, DocumCcPeer::AUX01, DocumCcPeer::AUX02, DocumCcPeer::SALESTAX, DocumCcPeer::ORIGEN, DocumCcPeer::ORIGEN_D, DocumCcPeer::FEC_REG, ),
		BasePeer::TYPE_FIELDNAME => array ('tipo_doc', 'nro_doc', 'anulado', 'movi', 'aut', 'num_control', 'co_cli', 'contrib', 'fec_emis', 'fec_venc', 'observa', 'doc_orig', 'nro_orig', 'co_ban', 'nro_che', 'co_ven', 'tipo', 'tasa', 'moneda', 'monto_imp', 'monto_gen', 'monto_a1', 'monto_a2', 'monto_bru', 'descuentos', 'monto_des', 'recargo', 'monto_rec', 'monto_otr', 'monto_net', 'saldo', 'feccom', 'numcom', 'dis_cen', 'comis1', 'comis2', 'comis3', 'comis4', 'adicional', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'numcon', 'co_sucu', 'rowguid', 'mon_ilc', 'otros1', 'otros2', 'otros3', 'reng_si', 'comis5', 'comis6', 'row_id', 'aux01', 'aux02', 'salestax', 'origen', 'origen_d', 'fec_reg', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('TipoDoc' => 0, 'NroDoc' => 1, 'Anulado' => 2, 'Movi' => 3, 'Aut' => 4, 'NumControl' => 5, 'CoCli' => 6, 'Contrib' => 7, 'FecEmis' => 8, 'FecVenc' => 9, 'Observa' => 10, 'DocOrig' => 11, 'NroOrig' => 12, 'CoBan' => 13, 'NroChe' => 14, 'CoVen' => 15, 'Tipo' => 16, 'Tasa' => 17, 'Moneda' => 18, 'MontoImp' => 19, 'MontoGen' => 20, 'MontoA1' => 21, 'MontoA2' => 22, 'MontoBru' => 23, 'Descuentos' => 24, 'MontoDes' => 25, 'Recargo' => 26, 'MontoRec' => 27, 'MontoOtr' => 28, 'MontoNet' => 29, 'Saldo' => 30, 'Feccom' => 31, 'Numcom' => 32, 'DisCen' => 33, 'Comis1' => 34, 'Comis2' => 35, 'Comis3' => 36, 'Comis4' => 37, 'Adicional' => 38, 'Campo1' => 39, 'Campo2' => 40, 'Campo3' => 41, 'Campo4' => 42, 'Campo5' => 43, 'Campo6' => 44, 'Campo7' => 45, 'Campo8' => 46, 'CoUsIn' => 47, 'FeUsIn' => 48, 'CoUsMo' => 49, 'FeUsMo' => 50, 'CoUsEl' => 51, 'FeUsEl' => 52, 'Revisado' => 53, 'Trasnfe' => 54, 'Numcon' => 55, 'CoSucu' => 56, 'Rowguid' => 57, 'MonIlc' => 58, 'Otros1' => 59, 'Otros2' => 60, 'Otros3' => 61, 'RengSi' => 62, 'Comis5' => 63, 'Comis6' => 64, 'RowId' => 65, 'Aux01' => 66, 'Aux02' => 67, 'Salestax' => 68, 'Origen' => 69, 'OrigenD' => 70, 'FecReg' => 71, ),
		BasePeer::TYPE_COLNAME => array (DocumCcPeer::TIPO_DOC => 0, DocumCcPeer::NRO_DOC => 1, DocumCcPeer::ANULADO => 2, DocumCcPeer::MOVI => 3, DocumCcPeer::AUT => 4, DocumCcPeer::NUM_CONTROL => 5, DocumCcPeer::CO_CLI => 6, DocumCcPeer::CONTRIB => 7, DocumCcPeer::FEC_EMIS => 8, DocumCcPeer::FEC_VENC => 9, DocumCcPeer::OBSERVA => 10, DocumCcPeer::DOC_ORIG => 11, DocumCcPeer::NRO_ORIG => 12, DocumCcPeer::CO_BAN => 13, DocumCcPeer::NRO_CHE => 14, DocumCcPeer::CO_VEN => 15, DocumCcPeer::TIPO => 16, DocumCcPeer::TASA => 17, DocumCcPeer::MONEDA => 18, DocumCcPeer::MONTO_IMP => 19, DocumCcPeer::MONTO_GEN => 20, DocumCcPeer::MONTO_A1 => 21, DocumCcPeer::MONTO_A2 => 22, DocumCcPeer::MONTO_BRU => 23, DocumCcPeer::DESCUENTOS => 24, DocumCcPeer::MONTO_DES => 25, DocumCcPeer::RECARGO => 26, DocumCcPeer::MONTO_REC => 27, DocumCcPeer::MONTO_OTR => 28, DocumCcPeer::MONTO_NET => 29, DocumCcPeer::SALDO => 30, DocumCcPeer::FECCOM => 31, DocumCcPeer::NUMCOM => 32, DocumCcPeer::DIS_CEN => 33, DocumCcPeer::COMIS1 => 34, DocumCcPeer::COMIS2 => 35, DocumCcPeer::COMIS3 => 36, DocumCcPeer::COMIS4 => 37, DocumCcPeer::ADICIONAL => 38, DocumCcPeer::CAMPO1 => 39, DocumCcPeer::CAMPO2 => 40, DocumCcPeer::CAMPO3 => 41, DocumCcPeer::CAMPO4 => 42, DocumCcPeer::CAMPO5 => 43, DocumCcPeer::CAMPO6 => 44, DocumCcPeer::CAMPO7 => 45, DocumCcPeer::CAMPO8 => 46, DocumCcPeer::CO_US_IN => 47, DocumCcPeer::FE_US_IN => 48, DocumCcPeer::CO_US_MO => 49, DocumCcPeer::FE_US_MO => 50, DocumCcPeer::CO_US_EL => 51, DocumCcPeer::FE_US_EL => 52, DocumCcPeer::REVISADO => 53, DocumCcPeer::TRASNFE => 54, DocumCcPeer::NUMCON => 55, DocumCcPeer::CO_SUCU => 56, DocumCcPeer::ROWGUID => 57, DocumCcPeer::MON_ILC => 58, DocumCcPeer::OTROS1 => 59, DocumCcPeer::OTROS2 => 60, DocumCcPeer::OTROS3 => 61, DocumCcPeer::RENG_SI => 62, DocumCcPeer::COMIS5 => 63, DocumCcPeer::COMIS6 => 64, DocumCcPeer::ROW_ID => 65, DocumCcPeer::AUX01 => 66, DocumCcPeer::AUX02 => 67, DocumCcPeer::SALESTAX => 68, DocumCcPeer::ORIGEN => 69, DocumCcPeer::ORIGEN_D => 70, DocumCcPeer::FEC_REG => 71, ),
		BasePeer::TYPE_FIELDNAME => array ('tipo_doc' => 0, 'nro_doc' => 1, 'anulado' => 2, 'movi' => 3, 'aut' => 4, 'num_control' => 5, 'co_cli' => 6, 'contrib' => 7, 'fec_emis' => 8, 'fec_venc' => 9, 'observa' => 10, 'doc_orig' => 11, 'nro_orig' => 12, 'co_ban' => 13, 'nro_che' => 14, 'co_ven' => 15, 'tipo' => 16, 'tasa' => 17, 'moneda' => 18, 'monto_imp' => 19, 'monto_gen' => 20, 'monto_a1' => 21, 'monto_a2' => 22, 'monto_bru' => 23, 'descuentos' => 24, 'monto_des' => 25, 'recargo' => 26, 'monto_rec' => 27, 'monto_otr' => 28, 'monto_net' => 29, 'saldo' => 30, 'feccom' => 31, 'numcom' => 32, 'dis_cen' => 33, 'comis1' => 34, 'comis2' => 35, 'comis3' => 36, 'comis4' => 37, 'adicional' => 38, 'campo1' => 39, 'campo2' => 40, 'campo3' => 41, 'campo4' => 42, 'campo5' => 43, 'campo6' => 44, 'campo7' => 45, 'campo8' => 46, 'co_us_in' => 47, 'fe_us_in' => 48, 'co_us_mo' => 49, 'fe_us_mo' => 50, 'co_us_el' => 51, 'fe_us_el' => 52, 'revisado' => 53, 'trasnfe' => 54, 'numcon' => 55, 'co_sucu' => 56, 'rowguid' => 57, 'mon_ilc' => 58, 'otros1' => 59, 'otros2' => 60, 'otros3' => 61, 'reng_si' => 62, 'comis5' => 63, 'comis6' => 64, 'row_id' => 65, 'aux01' => 66, 'aux02' => 67, 'salestax' => 68, 'origen' => 69, 'origen_d' => 70, 'fec_reg' => 71, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/DocumCcMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.DocumCcMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = DocumCcPeer::getTableMap();
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
		return str_replace(DocumCcPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(DocumCcPeer::TIPO_DOC);

		$criteria->addSelectColumn(DocumCcPeer::NRO_DOC);

		$criteria->addSelectColumn(DocumCcPeer::ANULADO);

		$criteria->addSelectColumn(DocumCcPeer::MOVI);

		$criteria->addSelectColumn(DocumCcPeer::AUT);

		$criteria->addSelectColumn(DocumCcPeer::NUM_CONTROL);

		$criteria->addSelectColumn(DocumCcPeer::CO_CLI);

		$criteria->addSelectColumn(DocumCcPeer::CONTRIB);

		$criteria->addSelectColumn(DocumCcPeer::FEC_EMIS);

		$criteria->addSelectColumn(DocumCcPeer::FEC_VENC);

		$criteria->addSelectColumn(DocumCcPeer::OBSERVA);

		$criteria->addSelectColumn(DocumCcPeer::DOC_ORIG);

		$criteria->addSelectColumn(DocumCcPeer::NRO_ORIG);

		$criteria->addSelectColumn(DocumCcPeer::CO_BAN);

		$criteria->addSelectColumn(DocumCcPeer::NRO_CHE);

		$criteria->addSelectColumn(DocumCcPeer::CO_VEN);

		$criteria->addSelectColumn(DocumCcPeer::TIPO);

		$criteria->addSelectColumn(DocumCcPeer::TASA);

		$criteria->addSelectColumn(DocumCcPeer::MONEDA);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_IMP);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_GEN);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_A1);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_A2);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_BRU);

		$criteria->addSelectColumn(DocumCcPeer::DESCUENTOS);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_DES);

		$criteria->addSelectColumn(DocumCcPeer::RECARGO);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_REC);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_OTR);

		$criteria->addSelectColumn(DocumCcPeer::MONTO_NET);

		$criteria->addSelectColumn(DocumCcPeer::SALDO);

		$criteria->addSelectColumn(DocumCcPeer::FECCOM);

		$criteria->addSelectColumn(DocumCcPeer::NUMCOM);

		$criteria->addSelectColumn(DocumCcPeer::DIS_CEN);

		$criteria->addSelectColumn(DocumCcPeer::COMIS1);

		$criteria->addSelectColumn(DocumCcPeer::COMIS2);

		$criteria->addSelectColumn(DocumCcPeer::COMIS3);

		$criteria->addSelectColumn(DocumCcPeer::COMIS4);

		$criteria->addSelectColumn(DocumCcPeer::ADICIONAL);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO1);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO2);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO3);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO4);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO5);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO6);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO7);

		$criteria->addSelectColumn(DocumCcPeer::CAMPO8);

		$criteria->addSelectColumn(DocumCcPeer::CO_US_IN);

		$criteria->addSelectColumn(DocumCcPeer::FE_US_IN);

		$criteria->addSelectColumn(DocumCcPeer::CO_US_MO);

		$criteria->addSelectColumn(DocumCcPeer::FE_US_MO);

		$criteria->addSelectColumn(DocumCcPeer::CO_US_EL);

		$criteria->addSelectColumn(DocumCcPeer::FE_US_EL);

		$criteria->addSelectColumn(DocumCcPeer::REVISADO);

		$criteria->addSelectColumn(DocumCcPeer::TRASNFE);

		$criteria->addSelectColumn(DocumCcPeer::NUMCON);

		$criteria->addSelectColumn(DocumCcPeer::CO_SUCU);

		$criteria->addSelectColumn(DocumCcPeer::ROWGUID);

		$criteria->addSelectColumn(DocumCcPeer::MON_ILC);

		$criteria->addSelectColumn(DocumCcPeer::OTROS1);

		$criteria->addSelectColumn(DocumCcPeer::OTROS2);

		$criteria->addSelectColumn(DocumCcPeer::OTROS3);

		$criteria->addSelectColumn(DocumCcPeer::RENG_SI);

		$criteria->addSelectColumn(DocumCcPeer::COMIS5);

		$criteria->addSelectColumn(DocumCcPeer::COMIS6);

		$criteria->addSelectColumn(DocumCcPeer::ROW_ID);

		$criteria->addSelectColumn(DocumCcPeer::AUX01);

		$criteria->addSelectColumn(DocumCcPeer::AUX02);

		$criteria->addSelectColumn(DocumCcPeer::SALESTAX);

		$criteria->addSelectColumn(DocumCcPeer::ORIGEN);

		$criteria->addSelectColumn(DocumCcPeer::ORIGEN_D);

		$criteria->addSelectColumn(DocumCcPeer::FEC_REG);

	}

	const COUNT = 'COUNT(docum_cc.TIPO_DOC)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT docum_cc.TIPO_DOC)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
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
		$objects = DocumCcPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return DocumCcPeer::populateObjects(DocumCcPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			DocumCcPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = DocumCcPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinClientes(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinMoneda(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAlmacen(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinClientes(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DocumCcPeer::addSelectColumns($c);
		$startcol = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ClientesPeer::addSelectColumns($c);

		$c->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addDocumCc($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1); 			}
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

		DocumCcPeer::addSelectColumns($c);
		$startcol = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		VendedorPeer::addSelectColumns($c);

		$c->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

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
										$temp_obj2->addDocumCc($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1); 			}
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

		DocumCcPeer::addSelectColumns($c);
		$startcol = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TabuladoPeer::addSelectColumns($c);

		$c->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

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
										$temp_obj2->addDocumCc($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinMoneda(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DocumCcPeer::addSelectColumns($c);
		$startcol = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MonedaPeer::addSelectColumns($c);

		$c->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MonedaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getMoneda(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addDocumCc($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAlmacen(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DocumCcPeer::addSelectColumns($c);
		$startcol = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AlmacenPeer::addSelectColumns($c);

		$c->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AlmacenPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getAlmacen(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addDocumCc($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$criteria->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
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

		DocumCcPeer::addSelectColumns($c);
		$startcol2 = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TabuladoPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$c->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addDocumCc($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1);
			}


					
			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDocumCc($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initDocumCcs();
				$obj3->addDocumCc($obj1);
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
					$temp_obj4->addDocumCc($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initDocumCcs();
				$obj4->addDocumCc($obj1);
			}


					
			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMoneda(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDocumCc($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initDocumCcs();
				$obj5->addDocumCc($obj1);
			}


					
			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getAlmacen(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addDocumCc($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initDocumCcs();
				$obj6->addDocumCc($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptClientes(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$criteria->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$criteria->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$criteria->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptMoneda(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$criteria->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptAlmacen(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DocumCcPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DocumCcPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$criteria->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$criteria->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$criteria->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$rs = DocumCcPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptClientes(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DocumCcPeer::addSelectColumns($c);
		$startcol2 = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		VendedorPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + VendedorPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TabuladoPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$c->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getVendedor(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1);
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
					$temp_obj3->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDocumCcs();
				$obj3->addDocumCc($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getMoneda(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDocumCcs();
				$obj4->addDocumCc($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getAlmacen(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDocumCcs();
				$obj5->addDocumCc($obj1);
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

		DocumCcPeer::addSelectColumns($c);
		$startcol2 = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TabuladoPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$c->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1);
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
					$temp_obj3->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDocumCcs();
				$obj3->addDocumCc($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getMoneda(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDocumCcs();
				$obj4->addDocumCc($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getAlmacen(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDocumCcs();
				$obj5->addDocumCc($obj1);
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

		DocumCcPeer::addSelectColumns($c);
		$startcol2 = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + MonedaPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);

		$c->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDocumCcs();
				$obj3->addDocumCc($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getMoneda(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDocumCcs();
				$obj4->addDocumCc($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getAlmacen(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDocumCcs();
				$obj5->addDocumCc($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptMoneda(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DocumCcPeer::addSelectColumns($c);
		$startcol2 = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TabuladoPeer::NUM_COLUMNS;

		AlmacenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + AlmacenPeer::NUM_COLUMNS;

		$c->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$c->addJoin(DocumCcPeer::CO_SUCU, AlmacenPeer::CO_ALMA);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDocumCcs();
				$obj3->addDocumCc($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTabulado(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDocumCcs();
				$obj4->addDocumCc($obj1);
			}

			$omClass = AlmacenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getAlmacen(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDocumCcs();
				$obj5->addDocumCc($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptAlmacen(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DocumCcPeer::addSelectColumns($c);
		$startcol2 = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ClientesPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ClientesPeer::NUM_COLUMNS;

		VendedorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + VendedorPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TabuladoPeer::NUM_COLUMNS;

		MonedaPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MonedaPeer::NUM_COLUMNS;

		$c->addJoin(DocumCcPeer::CO_CLI, ClientesPeer::CO_CLI);

		$c->addJoin(DocumCcPeer::CO_VEN, VendedorPeer::CO_VEN);

		$c->addJoin(DocumCcPeer::TIPO, TabuladoPeer::TIPO);

		$c->addJoin(DocumCcPeer::MONEDA, MonedaPeer::CO_MONE);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DocumCcPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ClientesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getClientes(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDocumCcs();
				$obj2->addDocumCc($obj1);
			}

			$omClass = VendedorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getVendedor(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDocumCcs();
				$obj3->addDocumCc($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTabulado(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDocumCcs();
				$obj4->addDocumCc($obj1);
			}

			$omClass = MonedaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMoneda(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDocumCc($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDocumCcs();
				$obj5->addDocumCc($obj1);
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
		return DocumCcPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(DocumCcPeer::TIPO_DOC);
			$selectCriteria->add(DocumCcPeer::TIPO_DOC, $criteria->remove(DocumCcPeer::TIPO_DOC), $comparison);

			$comparison = $criteria->getComparison(DocumCcPeer::NRO_DOC);
			$selectCriteria->add(DocumCcPeer::NRO_DOC, $criteria->remove(DocumCcPeer::NRO_DOC), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(DocumCcPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(DocumCcPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof DocumCc) {

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

			$criteria->add(DocumCcPeer::TIPO_DOC, $vals[0], Criteria::IN);
			$criteria->add(DocumCcPeer::NRO_DOC, $vals[1], Criteria::IN);
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

	
	public static function doValidate(DocumCc $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DocumCcPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DocumCcPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(DocumCcPeer::DATABASE_NAME, DocumCcPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = DocumCcPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK( $tipo_doc, $nro_doc, $con = null) {
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$criteria = new Criteria();
		$criteria->add(DocumCcPeer::TIPO_DOC, $tipo_doc);
		$criteria->add(DocumCcPeer::NRO_DOC, $nro_doc);
		$v = DocumCcPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} 
if (Propel::isInit()) {
			try {
		BaseDocumCcPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/DocumCcMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.DocumCcMapBuilder');
}
