<?php


abstract class BaseArtPeer {

	
	const DATABASE_NAME = 'profit';

	
	const TABLE_NAME = 'art';

	
	const CLASS_DEFAULT = 'lib.model.Art';

	
	const NUM_COLUMNS = 146;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CO_ART = 'art.CO_ART';

	
	const ART_DES = 'art.ART_DES';

	
	const FECHA_REG = 'art.FECHA_REG';

	
	const MANJ_SER = 'art.MANJ_SER';

	
	const CO_LIN = 'art.CO_LIN';

	
	const CO_CAT = 'art.CO_CAT';

	
	const CO_SUBL = 'art.CO_SUBL';

	
	const CO_COLOR = 'art.CO_COLOR';

	
	const ITEM = 'art.ITEM';

	
	const REF = 'art.REF';

	
	const MODELO = 'art.MODELO';

	
	const PROCEDENCI = 'art.PROCEDENCI';

	
	const COMENTARIO = 'art.COMENTARIO';

	
	const CO_PROV = 'art.CO_PROV';

	
	const UBICACION = 'art.UBICACION';

	
	const UNI_VENTA = 'art.UNI_VENTA';

	
	const UNI_COMPRA = 'art.UNI_COMPRA';

	
	const UNI_RELAC = 'art.UNI_RELAC';

	
	const RELAC_AUT = 'art.RELAC_AUT';

	
	const STOCK_ACT = 'art.STOCK_ACT';

	
	const STOCK_COM = 'art.STOCK_COM';

	
	const SSTOCK_COM = 'art.SSTOCK_COM';

	
	const STOCK_LLE = 'art.STOCK_LLE';

	
	const SSTOCK_LLE = 'art.SSTOCK_LLE';

	
	const STOCK_DES = 'art.STOCK_DES';

	
	const SSTOCK_DES = 'art.SSTOCK_DES';

	
	const SUNI_VENTA = 'art.SUNI_VENTA';

	
	const SUNI_COMPR = 'art.SUNI_COMPR';

	
	const SUNI_RELAC = 'art.SUNI_RELAC';

	
	const SSTOCK_ACT = 'art.SSTOCK_ACT';

	
	const RELAC_COMP = 'art.RELAC_COMP';

	
	const RELAC_VENT = 'art.RELAC_VENT';

	
	const PTO_PEDIDO = 'art.PTO_PEDIDO';

	
	const STOCK_MAX = 'art.STOCK_MAX';

	
	const STOCK_MIN = 'art.STOCK_MIN';

	
	const PREC_OM = 'art.PREC_OM';

	
	const PREC_VTA1 = 'art.PREC_VTA1';

	
	const FEC_PREC_V = 'art.FEC_PREC_V';

	
	const FEC_PREC_2 = 'art.FEC_PREC_2';

	
	const PREC_VTA2 = 'art.PREC_VTA2';

	
	const FEC_PREC_3 = 'art.FEC_PREC_3';

	
	const PREC_VTA3 = 'art.PREC_VTA3';

	
	const FEC_PREC_4 = 'art.FEC_PREC_4';

	
	const PREC_VTA4 = 'art.PREC_VTA4';

	
	const FEC_PREC_5 = 'art.FEC_PREC_5';

	
	const PREC_VTA5 = 'art.PREC_VTA5';

	
	const PREC_AGR1 = 'art.PREC_AGR1';

	
	const PREC_AGR2 = 'art.PREC_AGR2';

	
	const PREC_AGR3 = 'art.PREC_AGR3';

	
	const PREC_AGR4 = 'art.PREC_AGR4';

	
	const PREC_AGR5 = 'art.PREC_AGR5';

	
	const CAN_AGR = 'art.CAN_AGR';

	
	const FEC_DES_P5 = 'art.FEC_DES_P5';

	
	const FEC_HAS_P5 = 'art.FEC_HAS_P5';

	
	const CO_IMP = 'art.CO_IMP';

	
	const MARGEN_MAX = 'art.MARGEN_MAX';

	
	const ULT_COS_UN = 'art.ULT_COS_UN';

	
	const FEC_ULT_CO = 'art.FEC_ULT_CO';

	
	const COS_PRO_UN = 'art.COS_PRO_UN';

	
	const FEC_COS_PR = 'art.FEC_COS_PR';

	
	const COS_MERC = 'art.COS_MERC';

	
	const FEC_COS_ME = 'art.FEC_COS_ME';

	
	const COS_PROV = 'art.COS_PROV';

	
	const FEC_COS_P2 = 'art.FEC_COS_P2';

	
	const ULT_COS_DO = 'art.ULT_COS_DO';

	
	const FEC_COS_DO = 'art.FEC_COS_DO';

	
	const COS_UN_AN = 'art.COS_UN_AN';

	
	const FEC_COS_AN = 'art.FEC_COS_AN';

	
	const ULT_COS_OM = 'art.ULT_COS_OM';

	
	const FEC_ULT_OM = 'art.FEC_ULT_OM';

	
	const COS_PRO_OM = 'art.COS_PRO_OM';

	
	const FEC_PRO_OM = 'art.FEC_PRO_OM';

	
	const TIPO_COS = 'art.TIPO_COS';

	
	const MONT_COMI = 'art.MONT_COMI';

	
	const PORC_COS = 'art.PORC_COS';

	
	const MONT_COS = 'art.MONT_COS';

	
	const PORC_GAS = 'art.PORC_GAS';

	
	const MONT_GAS = 'art.MONT_GAS';

	
	const F_COST = 'art.F_COST';

	
	const FISICO = 'art.FISICO';

	
	const PUNT_CLI = 'art.PUNT_CLI';

	
	const PUNT_PRO = 'art.PUNT_PRO';

	
	const DIAS_REPOS = 'art.DIAS_REPOS';

	
	const TIPO = 'art.TIPO';

	
	const ALM_PRIN = 'art.ALM_PRIN';

	
	const ANULADO = 'art.ANULADO';

	
	const TIPO_IMP = 'art.TIPO_IMP';

	
	const DIS_CEN = 'art.DIS_CEN';

	
	const MON_ILC = 'art.MON_ILC';

	
	const CAPACIDAD = 'art.CAPACIDAD';

	
	const GRADO_AL = 'art.GRADO_AL';

	
	const TIPO_LICOR = 'art.TIPO_LICOR';

	
	const COMPUESTO = 'art.COMPUESTO';

	
	const PICTURE = 'art.PICTURE';

	
	const CAMPO1 = 'art.CAMPO1';

	
	const CAMPO2 = 'art.CAMPO2';

	
	const CAMPO3 = 'art.CAMPO3';

	
	const CAMPO4 = 'art.CAMPO4';

	
	const CAMPO5 = 'art.CAMPO5';

	
	const CAMPO6 = 'art.CAMPO6';

	
	const CAMPO7 = 'art.CAMPO7';

	
	const CAMPO8 = 'art.CAMPO8';

	
	const CO_US_IN = 'art.CO_US_IN';

	
	const FE_US_IN = 'art.FE_US_IN';

	
	const CO_US_MO = 'art.CO_US_MO';

	
	const FE_US_MO = 'art.FE_US_MO';

	
	const CO_US_EL = 'art.CO_US_EL';

	
	const FE_US_EL = 'art.FE_US_EL';

	
	const REVISADO = 'art.REVISADO';

	
	const TRASNFE = 'art.TRASNFE';

	
	const CO_SUCU = 'art.CO_SUCU';

	
	const ROWGUID = 'art.ROWGUID';

	
	const TUNI_VENTA = 'art.TUNI_VENTA';

	
	const EQUI_UNI1 = 'art.EQUI_UNI1';

	
	const EQUI_UNI2 = 'art.EQUI_UNI2';

	
	const EQUI_UNI3 = 'art.EQUI_UNI3';

	
	const LOTE = 'art.LOTE';

	
	const SERIALP = 'art.SERIALP';

	
	const VALIDO = 'art.VALIDO';

	
	const ATRIBUTO1 = 'art.ATRIBUTO1';

	
	const VATRIBUTO1 = 'art.VATRIBUTO1';

	
	const ATRIBUTO2 = 'art.ATRIBUTO2';

	
	const VATRIBUTO2 = 'art.VATRIBUTO2';

	
	const ATRIBUTO3 = 'art.ATRIBUTO3';

	
	const VATRIBUTO3 = 'art.VATRIBUTO3';

	
	const ATRIBUTO4 = 'art.ATRIBUTO4';

	
	const VATRIBUTO4 = 'art.VATRIBUTO4';

	
	const ATRIBUTO5 = 'art.ATRIBUTO5';

	
	const VATRIBUTO5 = 'art.VATRIBUTO5';

	
	const ATRIBUTO6 = 'art.ATRIBUTO6';

	
	const VATRIBUTO6 = 'art.VATRIBUTO6';

	
	const GARANTIA = 'art.GARANTIA';

	
	const PESO = 'art.PESO';

	
	const PIE = 'art.PIE';

	
	const MARGEN1 = 'art.MARGEN1';

	
	const MARGEN2 = 'art.MARGEN2';

	
	const MARGEN3 = 'art.MARGEN3';

	
	const MARGEN4 = 'art.MARGEN4';

	
	const MARGEN5 = 'art.MARGEN5';

	
	const ROW_ID = 'art.ROW_ID';

	
	const IMAGEN1 = 'art.IMAGEN1';

	
	const IMAGEN2 = 'art.IMAGEN2';

	
	const I_ART_DES = 'art.I_ART_DES';

	
	const UNI_EMP = 'art.UNI_EMP';

	
	const REL_EMP = 'art.REL_EMP';

	
	const MOVIL = 'art.MOVIL';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoArt', 'ArtDes', 'FechaReg', 'ManjSer', 'CoLin', 'CoCat', 'CoSubl', 'CoColor', 'Item', 'Ref', 'Modelo', 'Procedenci', 'Comentario', 'CoProv', 'Ubicacion', 'UniVenta', 'UniCompra', 'UniRelac', 'RelacAut', 'StockAct', 'StockCom', 'SstockCom', 'StockLle', 'SstockLle', 'StockDes', 'SstockDes', 'SuniVenta', 'SuniCompr', 'SuniRelac', 'SstockAct', 'RelacComp', 'RelacVent', 'PtoPedido', 'StockMax', 'StockMin', 'PrecOm', 'PrecVta1', 'FecPrecV', 'FecPrec2', 'PrecVta2', 'FecPrec3', 'PrecVta3', 'FecPrec4', 'PrecVta4', 'FecPrec5', 'PrecVta5', 'PrecAgr1', 'PrecAgr2', 'PrecAgr3', 'PrecAgr4', 'PrecAgr5', 'CanAgr', 'FecDesP5', 'FecHasP5', 'CoImp', 'MargenMax', 'UltCosUn', 'FecUltCo', 'CosProUn', 'FecCosPr', 'CosMerc', 'FecCosMe', 'CosProv', 'FecCosP2', 'UltCosDo', 'FecCosDo', 'CosUnAn', 'FecCosAn', 'UltCosOm', 'FecUltOm', 'CosProOm', 'FecProOm', 'TipoCos', 'MontComi', 'PorcCos', 'MontCos', 'PorcGas', 'MontGas', 'FCost', 'Fisico', 'PuntCli', 'PuntPro', 'DiasRepos', 'Tipo', 'AlmPrin', 'Anulado', 'TipoImp', 'DisCen', 'MonIlc', 'Capacidad', 'GradoAl', 'TipoLicor', 'Compuesto', 'Picture', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'TuniVenta', 'EquiUni1', 'EquiUni2', 'EquiUni3', 'Lote', 'Serialp', 'Valido', 'Atributo1', 'Vatributo1', 'Atributo2', 'Vatributo2', 'Atributo3', 'Vatributo3', 'Atributo4', 'Vatributo4', 'Atributo5', 'Vatributo5', 'Atributo6', 'Vatributo6', 'Garantia', 'Peso', 'Pie', 'Margen1', 'Margen2', 'Margen3', 'Margen4', 'Margen5', 'RowId', 'Imagen1', 'Imagen2', 'IArtDes', 'UniEmp', 'RelEmp', 'Movil', ),
		BasePeer::TYPE_COLNAME => array (ArtPeer::CO_ART, ArtPeer::ART_DES, ArtPeer::FECHA_REG, ArtPeer::MANJ_SER, ArtPeer::CO_LIN, ArtPeer::CO_CAT, ArtPeer::CO_SUBL, ArtPeer::CO_COLOR, ArtPeer::ITEM, ArtPeer::REF, ArtPeer::MODELO, ArtPeer::PROCEDENCI, ArtPeer::COMENTARIO, ArtPeer::CO_PROV, ArtPeer::UBICACION, ArtPeer::UNI_VENTA, ArtPeer::UNI_COMPRA, ArtPeer::UNI_RELAC, ArtPeer::RELAC_AUT, ArtPeer::STOCK_ACT, ArtPeer::STOCK_COM, ArtPeer::SSTOCK_COM, ArtPeer::STOCK_LLE, ArtPeer::SSTOCK_LLE, ArtPeer::STOCK_DES, ArtPeer::SSTOCK_DES, ArtPeer::SUNI_VENTA, ArtPeer::SUNI_COMPR, ArtPeer::SUNI_RELAC, ArtPeer::SSTOCK_ACT, ArtPeer::RELAC_COMP, ArtPeer::RELAC_VENT, ArtPeer::PTO_PEDIDO, ArtPeer::STOCK_MAX, ArtPeer::STOCK_MIN, ArtPeer::PREC_OM, ArtPeer::PREC_VTA1, ArtPeer::FEC_PREC_V, ArtPeer::FEC_PREC_2, ArtPeer::PREC_VTA2, ArtPeer::FEC_PREC_3, ArtPeer::PREC_VTA3, ArtPeer::FEC_PREC_4, ArtPeer::PREC_VTA4, ArtPeer::FEC_PREC_5, ArtPeer::PREC_VTA5, ArtPeer::PREC_AGR1, ArtPeer::PREC_AGR2, ArtPeer::PREC_AGR3, ArtPeer::PREC_AGR4, ArtPeer::PREC_AGR5, ArtPeer::CAN_AGR, ArtPeer::FEC_DES_P5, ArtPeer::FEC_HAS_P5, ArtPeer::CO_IMP, ArtPeer::MARGEN_MAX, ArtPeer::ULT_COS_UN, ArtPeer::FEC_ULT_CO, ArtPeer::COS_PRO_UN, ArtPeer::FEC_COS_PR, ArtPeer::COS_MERC, ArtPeer::FEC_COS_ME, ArtPeer::COS_PROV, ArtPeer::FEC_COS_P2, ArtPeer::ULT_COS_DO, ArtPeer::FEC_COS_DO, ArtPeer::COS_UN_AN, ArtPeer::FEC_COS_AN, ArtPeer::ULT_COS_OM, ArtPeer::FEC_ULT_OM, ArtPeer::COS_PRO_OM, ArtPeer::FEC_PRO_OM, ArtPeer::TIPO_COS, ArtPeer::MONT_COMI, ArtPeer::PORC_COS, ArtPeer::MONT_COS, ArtPeer::PORC_GAS, ArtPeer::MONT_GAS, ArtPeer::F_COST, ArtPeer::FISICO, ArtPeer::PUNT_CLI, ArtPeer::PUNT_PRO, ArtPeer::DIAS_REPOS, ArtPeer::TIPO, ArtPeer::ALM_PRIN, ArtPeer::ANULADO, ArtPeer::TIPO_IMP, ArtPeer::DIS_CEN, ArtPeer::MON_ILC, ArtPeer::CAPACIDAD, ArtPeer::GRADO_AL, ArtPeer::TIPO_LICOR, ArtPeer::COMPUESTO, ArtPeer::PICTURE, ArtPeer::CAMPO1, ArtPeer::CAMPO2, ArtPeer::CAMPO3, ArtPeer::CAMPO4, ArtPeer::CAMPO5, ArtPeer::CAMPO6, ArtPeer::CAMPO7, ArtPeer::CAMPO8, ArtPeer::CO_US_IN, ArtPeer::FE_US_IN, ArtPeer::CO_US_MO, ArtPeer::FE_US_MO, ArtPeer::CO_US_EL, ArtPeer::FE_US_EL, ArtPeer::REVISADO, ArtPeer::TRASNFE, ArtPeer::CO_SUCU, ArtPeer::ROWGUID, ArtPeer::TUNI_VENTA, ArtPeer::EQUI_UNI1, ArtPeer::EQUI_UNI2, ArtPeer::EQUI_UNI3, ArtPeer::LOTE, ArtPeer::SERIALP, ArtPeer::VALIDO, ArtPeer::ATRIBUTO1, ArtPeer::VATRIBUTO1, ArtPeer::ATRIBUTO2, ArtPeer::VATRIBUTO2, ArtPeer::ATRIBUTO3, ArtPeer::VATRIBUTO3, ArtPeer::ATRIBUTO4, ArtPeer::VATRIBUTO4, ArtPeer::ATRIBUTO5, ArtPeer::VATRIBUTO5, ArtPeer::ATRIBUTO6, ArtPeer::VATRIBUTO6, ArtPeer::GARANTIA, ArtPeer::PESO, ArtPeer::PIE, ArtPeer::MARGEN1, ArtPeer::MARGEN2, ArtPeer::MARGEN3, ArtPeer::MARGEN4, ArtPeer::MARGEN5, ArtPeer::ROW_ID, ArtPeer::IMAGEN1, ArtPeer::IMAGEN2, ArtPeer::I_ART_DES, ArtPeer::UNI_EMP, ArtPeer::REL_EMP, ArtPeer::MOVIL, ),
		BasePeer::TYPE_FIELDNAME => array ('co_art', 'art_des', 'fecha_reg', 'manj_ser', 'co_lin', 'co_cat', 'co_subl', 'co_color', 'item', 'ref', 'modelo', 'procedenci', 'comentario', 'co_prov', 'ubicacion', 'uni_venta', 'uni_compra', 'uni_relac', 'relac_aut', 'stock_act', 'stock_com', 'sstock_com', 'stock_lle', 'sstock_lle', 'stock_des', 'sstock_des', 'suni_venta', 'suni_compr', 'suni_relac', 'sstock_act', 'relac_comp', 'relac_vent', 'pto_pedido', 'stock_max', 'stock_min', 'prec_om', 'prec_vta1', 'fec_prec_v', 'fec_prec_2', 'prec_vta2', 'fec_prec_3', 'prec_vta3', 'fec_prec_4', 'prec_vta4', 'fec_prec_5', 'prec_vta5', 'prec_agr1', 'prec_agr2', 'prec_agr3', 'prec_agr4', 'prec_agr5', 'can_agr', 'fec_des_p5', 'fec_has_p5', 'co_imp', 'margen_max', 'ult_cos_un', 'fec_ult_co', 'cos_pro_un', 'fec_cos_pr', 'cos_merc', 'fec_cos_me', 'cos_prov', 'fec_cos_p2', 'ult_cos_do', 'fec_cos_do', 'cos_un_an', 'fec_cos_an', 'ult_cos_om', 'fec_ult_om', 'cos_pro_om', 'fec_pro_om', 'tipo_cos', 'mont_comi', 'porc_cos', 'mont_cos', 'porc_gas', 'mont_gas', 'f_cost', 'fisico', 'punt_cli', 'punt_pro', 'dias_repos', 'tipo', 'alm_prin', 'anulado', 'tipo_imp', 'dis_cen', 'mon_ilc', 'capacidad', 'grado_al', 'tipo_licor', 'compuesto', 'picture', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'tuni_venta', 'equi_uni1', 'equi_uni2', 'equi_uni3', 'lote', 'serialp', 'valido', 'atributo1', 'vatributo1', 'atributo2', 'vatributo2', 'atributo3', 'vatributo3', 'atributo4', 'vatributo4', 'atributo5', 'vatributo5', 'atributo6', 'vatributo6', 'garantia', 'peso', 'pie', 'margen1', 'margen2', 'margen3', 'margen4', 'margen5', 'row_id', 'imagen1', 'imagen2', 'i_art_des', 'uni_emp', 'rel_emp', 'movil', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoArt' => 0, 'ArtDes' => 1, 'FechaReg' => 2, 'ManjSer' => 3, 'CoLin' => 4, 'CoCat' => 5, 'CoSubl' => 6, 'CoColor' => 7, 'Item' => 8, 'Ref' => 9, 'Modelo' => 10, 'Procedenci' => 11, 'Comentario' => 12, 'CoProv' => 13, 'Ubicacion' => 14, 'UniVenta' => 15, 'UniCompra' => 16, 'UniRelac' => 17, 'RelacAut' => 18, 'StockAct' => 19, 'StockCom' => 20, 'SstockCom' => 21, 'StockLle' => 22, 'SstockLle' => 23, 'StockDes' => 24, 'SstockDes' => 25, 'SuniVenta' => 26, 'SuniCompr' => 27, 'SuniRelac' => 28, 'SstockAct' => 29, 'RelacComp' => 30, 'RelacVent' => 31, 'PtoPedido' => 32, 'StockMax' => 33, 'StockMin' => 34, 'PrecOm' => 35, 'PrecVta1' => 36, 'FecPrecV' => 37, 'FecPrec2' => 38, 'PrecVta2' => 39, 'FecPrec3' => 40, 'PrecVta3' => 41, 'FecPrec4' => 42, 'PrecVta4' => 43, 'FecPrec5' => 44, 'PrecVta5' => 45, 'PrecAgr1' => 46, 'PrecAgr2' => 47, 'PrecAgr3' => 48, 'PrecAgr4' => 49, 'PrecAgr5' => 50, 'CanAgr' => 51, 'FecDesP5' => 52, 'FecHasP5' => 53, 'CoImp' => 54, 'MargenMax' => 55, 'UltCosUn' => 56, 'FecUltCo' => 57, 'CosProUn' => 58, 'FecCosPr' => 59, 'CosMerc' => 60, 'FecCosMe' => 61, 'CosProv' => 62, 'FecCosP2' => 63, 'UltCosDo' => 64, 'FecCosDo' => 65, 'CosUnAn' => 66, 'FecCosAn' => 67, 'UltCosOm' => 68, 'FecUltOm' => 69, 'CosProOm' => 70, 'FecProOm' => 71, 'TipoCos' => 72, 'MontComi' => 73, 'PorcCos' => 74, 'MontCos' => 75, 'PorcGas' => 76, 'MontGas' => 77, 'FCost' => 78, 'Fisico' => 79, 'PuntCli' => 80, 'PuntPro' => 81, 'DiasRepos' => 82, 'Tipo' => 83, 'AlmPrin' => 84, 'Anulado' => 85, 'TipoImp' => 86, 'DisCen' => 87, 'MonIlc' => 88, 'Capacidad' => 89, 'GradoAl' => 90, 'TipoLicor' => 91, 'Compuesto' => 92, 'Picture' => 93, 'Campo1' => 94, 'Campo2' => 95, 'Campo3' => 96, 'Campo4' => 97, 'Campo5' => 98, 'Campo6' => 99, 'Campo7' => 100, 'Campo8' => 101, 'CoUsIn' => 102, 'FeUsIn' => 103, 'CoUsMo' => 104, 'FeUsMo' => 105, 'CoUsEl' => 106, 'FeUsEl' => 107, 'Revisado' => 108, 'Trasnfe' => 109, 'CoSucu' => 110, 'Rowguid' => 111, 'TuniVenta' => 112, 'EquiUni1' => 113, 'EquiUni2' => 114, 'EquiUni3' => 115, 'Lote' => 116, 'Serialp' => 117, 'Valido' => 118, 'Atributo1' => 119, 'Vatributo1' => 120, 'Atributo2' => 121, 'Vatributo2' => 122, 'Atributo3' => 123, 'Vatributo3' => 124, 'Atributo4' => 125, 'Vatributo4' => 126, 'Atributo5' => 127, 'Vatributo5' => 128, 'Atributo6' => 129, 'Vatributo6' => 130, 'Garantia' => 131, 'Peso' => 132, 'Pie' => 133, 'Margen1' => 134, 'Margen2' => 135, 'Margen3' => 136, 'Margen4' => 137, 'Margen5' => 138, 'RowId' => 139, 'Imagen1' => 140, 'Imagen2' => 141, 'IArtDes' => 142, 'UniEmp' => 143, 'RelEmp' => 144, 'Movil' => 145, ),
		BasePeer::TYPE_COLNAME => array (ArtPeer::CO_ART => 0, ArtPeer::ART_DES => 1, ArtPeer::FECHA_REG => 2, ArtPeer::MANJ_SER => 3, ArtPeer::CO_LIN => 4, ArtPeer::CO_CAT => 5, ArtPeer::CO_SUBL => 6, ArtPeer::CO_COLOR => 7, ArtPeer::ITEM => 8, ArtPeer::REF => 9, ArtPeer::MODELO => 10, ArtPeer::PROCEDENCI => 11, ArtPeer::COMENTARIO => 12, ArtPeer::CO_PROV => 13, ArtPeer::UBICACION => 14, ArtPeer::UNI_VENTA => 15, ArtPeer::UNI_COMPRA => 16, ArtPeer::UNI_RELAC => 17, ArtPeer::RELAC_AUT => 18, ArtPeer::STOCK_ACT => 19, ArtPeer::STOCK_COM => 20, ArtPeer::SSTOCK_COM => 21, ArtPeer::STOCK_LLE => 22, ArtPeer::SSTOCK_LLE => 23, ArtPeer::STOCK_DES => 24, ArtPeer::SSTOCK_DES => 25, ArtPeer::SUNI_VENTA => 26, ArtPeer::SUNI_COMPR => 27, ArtPeer::SUNI_RELAC => 28, ArtPeer::SSTOCK_ACT => 29, ArtPeer::RELAC_COMP => 30, ArtPeer::RELAC_VENT => 31, ArtPeer::PTO_PEDIDO => 32, ArtPeer::STOCK_MAX => 33, ArtPeer::STOCK_MIN => 34, ArtPeer::PREC_OM => 35, ArtPeer::PREC_VTA1 => 36, ArtPeer::FEC_PREC_V => 37, ArtPeer::FEC_PREC_2 => 38, ArtPeer::PREC_VTA2 => 39, ArtPeer::FEC_PREC_3 => 40, ArtPeer::PREC_VTA3 => 41, ArtPeer::FEC_PREC_4 => 42, ArtPeer::PREC_VTA4 => 43, ArtPeer::FEC_PREC_5 => 44, ArtPeer::PREC_VTA5 => 45, ArtPeer::PREC_AGR1 => 46, ArtPeer::PREC_AGR2 => 47, ArtPeer::PREC_AGR3 => 48, ArtPeer::PREC_AGR4 => 49, ArtPeer::PREC_AGR5 => 50, ArtPeer::CAN_AGR => 51, ArtPeer::FEC_DES_P5 => 52, ArtPeer::FEC_HAS_P5 => 53, ArtPeer::CO_IMP => 54, ArtPeer::MARGEN_MAX => 55, ArtPeer::ULT_COS_UN => 56, ArtPeer::FEC_ULT_CO => 57, ArtPeer::COS_PRO_UN => 58, ArtPeer::FEC_COS_PR => 59, ArtPeer::COS_MERC => 60, ArtPeer::FEC_COS_ME => 61, ArtPeer::COS_PROV => 62, ArtPeer::FEC_COS_P2 => 63, ArtPeer::ULT_COS_DO => 64, ArtPeer::FEC_COS_DO => 65, ArtPeer::COS_UN_AN => 66, ArtPeer::FEC_COS_AN => 67, ArtPeer::ULT_COS_OM => 68, ArtPeer::FEC_ULT_OM => 69, ArtPeer::COS_PRO_OM => 70, ArtPeer::FEC_PRO_OM => 71, ArtPeer::TIPO_COS => 72, ArtPeer::MONT_COMI => 73, ArtPeer::PORC_COS => 74, ArtPeer::MONT_COS => 75, ArtPeer::PORC_GAS => 76, ArtPeer::MONT_GAS => 77, ArtPeer::F_COST => 78, ArtPeer::FISICO => 79, ArtPeer::PUNT_CLI => 80, ArtPeer::PUNT_PRO => 81, ArtPeer::DIAS_REPOS => 82, ArtPeer::TIPO => 83, ArtPeer::ALM_PRIN => 84, ArtPeer::ANULADO => 85, ArtPeer::TIPO_IMP => 86, ArtPeer::DIS_CEN => 87, ArtPeer::MON_ILC => 88, ArtPeer::CAPACIDAD => 89, ArtPeer::GRADO_AL => 90, ArtPeer::TIPO_LICOR => 91, ArtPeer::COMPUESTO => 92, ArtPeer::PICTURE => 93, ArtPeer::CAMPO1 => 94, ArtPeer::CAMPO2 => 95, ArtPeer::CAMPO3 => 96, ArtPeer::CAMPO4 => 97, ArtPeer::CAMPO5 => 98, ArtPeer::CAMPO6 => 99, ArtPeer::CAMPO7 => 100, ArtPeer::CAMPO8 => 101, ArtPeer::CO_US_IN => 102, ArtPeer::FE_US_IN => 103, ArtPeer::CO_US_MO => 104, ArtPeer::FE_US_MO => 105, ArtPeer::CO_US_EL => 106, ArtPeer::FE_US_EL => 107, ArtPeer::REVISADO => 108, ArtPeer::TRASNFE => 109, ArtPeer::CO_SUCU => 110, ArtPeer::ROWGUID => 111, ArtPeer::TUNI_VENTA => 112, ArtPeer::EQUI_UNI1 => 113, ArtPeer::EQUI_UNI2 => 114, ArtPeer::EQUI_UNI3 => 115, ArtPeer::LOTE => 116, ArtPeer::SERIALP => 117, ArtPeer::VALIDO => 118, ArtPeer::ATRIBUTO1 => 119, ArtPeer::VATRIBUTO1 => 120, ArtPeer::ATRIBUTO2 => 121, ArtPeer::VATRIBUTO2 => 122, ArtPeer::ATRIBUTO3 => 123, ArtPeer::VATRIBUTO3 => 124, ArtPeer::ATRIBUTO4 => 125, ArtPeer::VATRIBUTO4 => 126, ArtPeer::ATRIBUTO5 => 127, ArtPeer::VATRIBUTO5 => 128, ArtPeer::ATRIBUTO6 => 129, ArtPeer::VATRIBUTO6 => 130, ArtPeer::GARANTIA => 131, ArtPeer::PESO => 132, ArtPeer::PIE => 133, ArtPeer::MARGEN1 => 134, ArtPeer::MARGEN2 => 135, ArtPeer::MARGEN3 => 136, ArtPeer::MARGEN4 => 137, ArtPeer::MARGEN5 => 138, ArtPeer::ROW_ID => 139, ArtPeer::IMAGEN1 => 140, ArtPeer::IMAGEN2 => 141, ArtPeer::I_ART_DES => 142, ArtPeer::UNI_EMP => 143, ArtPeer::REL_EMP => 144, ArtPeer::MOVIL => 145, ),
		BasePeer::TYPE_FIELDNAME => array ('co_art' => 0, 'art_des' => 1, 'fecha_reg' => 2, 'manj_ser' => 3, 'co_lin' => 4, 'co_cat' => 5, 'co_subl' => 6, 'co_color' => 7, 'item' => 8, 'ref' => 9, 'modelo' => 10, 'procedenci' => 11, 'comentario' => 12, 'co_prov' => 13, 'ubicacion' => 14, 'uni_venta' => 15, 'uni_compra' => 16, 'uni_relac' => 17, 'relac_aut' => 18, 'stock_act' => 19, 'stock_com' => 20, 'sstock_com' => 21, 'stock_lle' => 22, 'sstock_lle' => 23, 'stock_des' => 24, 'sstock_des' => 25, 'suni_venta' => 26, 'suni_compr' => 27, 'suni_relac' => 28, 'sstock_act' => 29, 'relac_comp' => 30, 'relac_vent' => 31, 'pto_pedido' => 32, 'stock_max' => 33, 'stock_min' => 34, 'prec_om' => 35, 'prec_vta1' => 36, 'fec_prec_v' => 37, 'fec_prec_2' => 38, 'prec_vta2' => 39, 'fec_prec_3' => 40, 'prec_vta3' => 41, 'fec_prec_4' => 42, 'prec_vta4' => 43, 'fec_prec_5' => 44, 'prec_vta5' => 45, 'prec_agr1' => 46, 'prec_agr2' => 47, 'prec_agr3' => 48, 'prec_agr4' => 49, 'prec_agr5' => 50, 'can_agr' => 51, 'fec_des_p5' => 52, 'fec_has_p5' => 53, 'co_imp' => 54, 'margen_max' => 55, 'ult_cos_un' => 56, 'fec_ult_co' => 57, 'cos_pro_un' => 58, 'fec_cos_pr' => 59, 'cos_merc' => 60, 'fec_cos_me' => 61, 'cos_prov' => 62, 'fec_cos_p2' => 63, 'ult_cos_do' => 64, 'fec_cos_do' => 65, 'cos_un_an' => 66, 'fec_cos_an' => 67, 'ult_cos_om' => 68, 'fec_ult_om' => 69, 'cos_pro_om' => 70, 'fec_pro_om' => 71, 'tipo_cos' => 72, 'mont_comi' => 73, 'porc_cos' => 74, 'mont_cos' => 75, 'porc_gas' => 76, 'mont_gas' => 77, 'f_cost' => 78, 'fisico' => 79, 'punt_cli' => 80, 'punt_pro' => 81, 'dias_repos' => 82, 'tipo' => 83, 'alm_prin' => 84, 'anulado' => 85, 'tipo_imp' => 86, 'dis_cen' => 87, 'mon_ilc' => 88, 'capacidad' => 89, 'grado_al' => 90, 'tipo_licor' => 91, 'compuesto' => 92, 'picture' => 93, 'campo1' => 94, 'campo2' => 95, 'campo3' => 96, 'campo4' => 97, 'campo5' => 98, 'campo6' => 99, 'campo7' => 100, 'campo8' => 101, 'co_us_in' => 102, 'fe_us_in' => 103, 'co_us_mo' => 104, 'fe_us_mo' => 105, 'co_us_el' => 106, 'fe_us_el' => 107, 'revisado' => 108, 'trasnfe' => 109, 'co_sucu' => 110, 'rowguid' => 111, 'tuni_venta' => 112, 'equi_uni1' => 113, 'equi_uni2' => 114, 'equi_uni3' => 115, 'lote' => 116, 'serialp' => 117, 'valido' => 118, 'atributo1' => 119, 'vatributo1' => 120, 'atributo2' => 121, 'vatributo2' => 122, 'atributo3' => 123, 'vatributo3' => 124, 'atributo4' => 125, 'vatributo4' => 126, 'atributo5' => 127, 'vatributo5' => 128, 'atributo6' => 129, 'vatributo6' => 130, 'garantia' => 131, 'peso' => 132, 'pie' => 133, 'margen1' => 134, 'margen2' => 135, 'margen3' => 136, 'margen4' => 137, 'margen5' => 138, 'row_id' => 139, 'imagen1' => 140, 'imagen2' => 141, 'i_art_des' => 142, 'uni_emp' => 143, 'rel_emp' => 144, 'movil' => 145, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ArtMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ArtMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ArtPeer::getTableMap();
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
		return str_replace(ArtPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ArtPeer::CO_ART);

		$criteria->addSelectColumn(ArtPeer::ART_DES);

		$criteria->addSelectColumn(ArtPeer::FECHA_REG);

		$criteria->addSelectColumn(ArtPeer::MANJ_SER);

		$criteria->addSelectColumn(ArtPeer::CO_LIN);

		$criteria->addSelectColumn(ArtPeer::CO_CAT);

		$criteria->addSelectColumn(ArtPeer::CO_SUBL);

		$criteria->addSelectColumn(ArtPeer::CO_COLOR);

		$criteria->addSelectColumn(ArtPeer::ITEM);

		$criteria->addSelectColumn(ArtPeer::REF);

		$criteria->addSelectColumn(ArtPeer::MODELO);

		$criteria->addSelectColumn(ArtPeer::PROCEDENCI);

		$criteria->addSelectColumn(ArtPeer::COMENTARIO);

		$criteria->addSelectColumn(ArtPeer::CO_PROV);

		$criteria->addSelectColumn(ArtPeer::UBICACION);

		$criteria->addSelectColumn(ArtPeer::UNI_VENTA);

		$criteria->addSelectColumn(ArtPeer::UNI_COMPRA);

		$criteria->addSelectColumn(ArtPeer::UNI_RELAC);

		$criteria->addSelectColumn(ArtPeer::RELAC_AUT);

		$criteria->addSelectColumn(ArtPeer::STOCK_ACT);

		$criteria->addSelectColumn(ArtPeer::STOCK_COM);

		$criteria->addSelectColumn(ArtPeer::SSTOCK_COM);

		$criteria->addSelectColumn(ArtPeer::STOCK_LLE);

		$criteria->addSelectColumn(ArtPeer::SSTOCK_LLE);

		$criteria->addSelectColumn(ArtPeer::STOCK_DES);

		$criteria->addSelectColumn(ArtPeer::SSTOCK_DES);

		$criteria->addSelectColumn(ArtPeer::SUNI_VENTA);

		$criteria->addSelectColumn(ArtPeer::SUNI_COMPR);

		$criteria->addSelectColumn(ArtPeer::SUNI_RELAC);

		$criteria->addSelectColumn(ArtPeer::SSTOCK_ACT);

		$criteria->addSelectColumn(ArtPeer::RELAC_COMP);

		$criteria->addSelectColumn(ArtPeer::RELAC_VENT);

		$criteria->addSelectColumn(ArtPeer::PTO_PEDIDO);

		$criteria->addSelectColumn(ArtPeer::STOCK_MAX);

		$criteria->addSelectColumn(ArtPeer::STOCK_MIN);

		$criteria->addSelectColumn(ArtPeer::PREC_OM);

		$criteria->addSelectColumn(ArtPeer::PREC_VTA1);

		$criteria->addSelectColumn(ArtPeer::FEC_PREC_V);

		$criteria->addSelectColumn(ArtPeer::FEC_PREC_2);

		$criteria->addSelectColumn(ArtPeer::PREC_VTA2);

		$criteria->addSelectColumn(ArtPeer::FEC_PREC_3);

		$criteria->addSelectColumn(ArtPeer::PREC_VTA3);

		$criteria->addSelectColumn(ArtPeer::FEC_PREC_4);

		$criteria->addSelectColumn(ArtPeer::PREC_VTA4);

		$criteria->addSelectColumn(ArtPeer::FEC_PREC_5);

		$criteria->addSelectColumn(ArtPeer::PREC_VTA5);

		$criteria->addSelectColumn(ArtPeer::PREC_AGR1);

		$criteria->addSelectColumn(ArtPeer::PREC_AGR2);

		$criteria->addSelectColumn(ArtPeer::PREC_AGR3);

		$criteria->addSelectColumn(ArtPeer::PREC_AGR4);

		$criteria->addSelectColumn(ArtPeer::PREC_AGR5);

		$criteria->addSelectColumn(ArtPeer::CAN_AGR);

		$criteria->addSelectColumn(ArtPeer::FEC_DES_P5);

		$criteria->addSelectColumn(ArtPeer::FEC_HAS_P5);

		$criteria->addSelectColumn(ArtPeer::CO_IMP);

		$criteria->addSelectColumn(ArtPeer::MARGEN_MAX);

		$criteria->addSelectColumn(ArtPeer::ULT_COS_UN);

		$criteria->addSelectColumn(ArtPeer::FEC_ULT_CO);

		$criteria->addSelectColumn(ArtPeer::COS_PRO_UN);

		$criteria->addSelectColumn(ArtPeer::FEC_COS_PR);

		$criteria->addSelectColumn(ArtPeer::COS_MERC);

		$criteria->addSelectColumn(ArtPeer::FEC_COS_ME);

		$criteria->addSelectColumn(ArtPeer::COS_PROV);

		$criteria->addSelectColumn(ArtPeer::FEC_COS_P2);

		$criteria->addSelectColumn(ArtPeer::ULT_COS_DO);

		$criteria->addSelectColumn(ArtPeer::FEC_COS_DO);

		$criteria->addSelectColumn(ArtPeer::COS_UN_AN);

		$criteria->addSelectColumn(ArtPeer::FEC_COS_AN);

		$criteria->addSelectColumn(ArtPeer::ULT_COS_OM);

		$criteria->addSelectColumn(ArtPeer::FEC_ULT_OM);

		$criteria->addSelectColumn(ArtPeer::COS_PRO_OM);

		$criteria->addSelectColumn(ArtPeer::FEC_PRO_OM);

		$criteria->addSelectColumn(ArtPeer::TIPO_COS);

		$criteria->addSelectColumn(ArtPeer::MONT_COMI);

		$criteria->addSelectColumn(ArtPeer::PORC_COS);

		$criteria->addSelectColumn(ArtPeer::MONT_COS);

		$criteria->addSelectColumn(ArtPeer::PORC_GAS);

		$criteria->addSelectColumn(ArtPeer::MONT_GAS);

		$criteria->addSelectColumn(ArtPeer::F_COST);

		$criteria->addSelectColumn(ArtPeer::FISICO);

		$criteria->addSelectColumn(ArtPeer::PUNT_CLI);

		$criteria->addSelectColumn(ArtPeer::PUNT_PRO);

		$criteria->addSelectColumn(ArtPeer::DIAS_REPOS);

		$criteria->addSelectColumn(ArtPeer::TIPO);

		$criteria->addSelectColumn(ArtPeer::ALM_PRIN);

		$criteria->addSelectColumn(ArtPeer::ANULADO);

		$criteria->addSelectColumn(ArtPeer::TIPO_IMP);

		$criteria->addSelectColumn(ArtPeer::DIS_CEN);

		$criteria->addSelectColumn(ArtPeer::MON_ILC);

		$criteria->addSelectColumn(ArtPeer::CAPACIDAD);

		$criteria->addSelectColumn(ArtPeer::GRADO_AL);

		$criteria->addSelectColumn(ArtPeer::TIPO_LICOR);

		$criteria->addSelectColumn(ArtPeer::COMPUESTO);

		$criteria->addSelectColumn(ArtPeer::PICTURE);

		$criteria->addSelectColumn(ArtPeer::CAMPO1);

		$criteria->addSelectColumn(ArtPeer::CAMPO2);

		$criteria->addSelectColumn(ArtPeer::CAMPO3);

		$criteria->addSelectColumn(ArtPeer::CAMPO4);

		$criteria->addSelectColumn(ArtPeer::CAMPO5);

		$criteria->addSelectColumn(ArtPeer::CAMPO6);

		$criteria->addSelectColumn(ArtPeer::CAMPO7);

		$criteria->addSelectColumn(ArtPeer::CAMPO8);

		$criteria->addSelectColumn(ArtPeer::CO_US_IN);

		$criteria->addSelectColumn(ArtPeer::FE_US_IN);

		$criteria->addSelectColumn(ArtPeer::CO_US_MO);

		$criteria->addSelectColumn(ArtPeer::FE_US_MO);

		$criteria->addSelectColumn(ArtPeer::CO_US_EL);

		$criteria->addSelectColumn(ArtPeer::FE_US_EL);

		$criteria->addSelectColumn(ArtPeer::REVISADO);

		$criteria->addSelectColumn(ArtPeer::TRASNFE);

		$criteria->addSelectColumn(ArtPeer::CO_SUCU);

		$criteria->addSelectColumn(ArtPeer::ROWGUID);

		$criteria->addSelectColumn(ArtPeer::TUNI_VENTA);

		$criteria->addSelectColumn(ArtPeer::EQUI_UNI1);

		$criteria->addSelectColumn(ArtPeer::EQUI_UNI2);

		$criteria->addSelectColumn(ArtPeer::EQUI_UNI3);

		$criteria->addSelectColumn(ArtPeer::LOTE);

		$criteria->addSelectColumn(ArtPeer::SERIALP);

		$criteria->addSelectColumn(ArtPeer::VALIDO);

		$criteria->addSelectColumn(ArtPeer::ATRIBUTO1);

		$criteria->addSelectColumn(ArtPeer::VATRIBUTO1);

		$criteria->addSelectColumn(ArtPeer::ATRIBUTO2);

		$criteria->addSelectColumn(ArtPeer::VATRIBUTO2);

		$criteria->addSelectColumn(ArtPeer::ATRIBUTO3);

		$criteria->addSelectColumn(ArtPeer::VATRIBUTO3);

		$criteria->addSelectColumn(ArtPeer::ATRIBUTO4);

		$criteria->addSelectColumn(ArtPeer::VATRIBUTO4);

		$criteria->addSelectColumn(ArtPeer::ATRIBUTO5);

		$criteria->addSelectColumn(ArtPeer::VATRIBUTO5);

		$criteria->addSelectColumn(ArtPeer::ATRIBUTO6);

		$criteria->addSelectColumn(ArtPeer::VATRIBUTO6);

		$criteria->addSelectColumn(ArtPeer::GARANTIA);

		$criteria->addSelectColumn(ArtPeer::PESO);

		$criteria->addSelectColumn(ArtPeer::PIE);

		$criteria->addSelectColumn(ArtPeer::MARGEN1);

		$criteria->addSelectColumn(ArtPeer::MARGEN2);

		$criteria->addSelectColumn(ArtPeer::MARGEN3);

		$criteria->addSelectColumn(ArtPeer::MARGEN4);

		$criteria->addSelectColumn(ArtPeer::MARGEN5);

		$criteria->addSelectColumn(ArtPeer::ROW_ID);

		$criteria->addSelectColumn(ArtPeer::IMAGEN1);

		$criteria->addSelectColumn(ArtPeer::IMAGEN2);

		$criteria->addSelectColumn(ArtPeer::I_ART_DES);

		$criteria->addSelectColumn(ArtPeer::UNI_EMP);

		$criteria->addSelectColumn(ArtPeer::REL_EMP);

		$criteria->addSelectColumn(ArtPeer::MOVIL);

	}

	const COUNT = 'COUNT(art.CO_ART)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT art.CO_ART)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ArtPeer::doSelectRS($criteria, $con);
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
		$objects = ArtPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ArtPeer::populateObjects(ArtPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ArtPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ArtPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinLinArt(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinCatArt(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinSubLin(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinColores(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinProceden(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinProv(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUnidadesRelatedByUniVenta(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUnidadesRelatedBySuniVenta(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$rs = ArtPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinLinArt(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		LinArtPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArt($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinCatArt(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CatArtPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = CatArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getCatArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArt($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinSubLin(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SubLinPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SubLinPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSubLin(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArt($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinColores(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ColoresPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ColoresPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getColores(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArt($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinProceden(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProcedenPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProcedenPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getProceden(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArt($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinProv(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProvPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProvPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getProv(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArt($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUnidadesRelatedByUniVenta(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UnidadesPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UnidadesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArtRelatedByUniVenta($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArtsRelatedByUniVenta();
				$obj2->addArtRelatedByUniVenta($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUnidadesRelatedBySuniVenta(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UnidadesPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UnidadesPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addArtRelatedBySuniVenta($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArtsRelatedBySuniVenta();
				$obj2->addArtRelatedBySuniVenta($obj1); 			}
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

		ArtPeer::addSelectColumns($c);
		$startcol = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TabuladoPeer::addSelectColumns($c);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

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
										$temp_obj2->addArt($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
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

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ProvPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + UnidadesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol11 = $startcol10 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}


					
			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}


					
			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSubLin(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}


					
			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getColores(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}


					
			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProceden(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}


					
			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7 = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getProv(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArt($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj7->initArts();
				$obj7->addArt($obj1);
			}


					
			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8 = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedByUniVenta($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedByUniVenta();
				$obj8->addArtRelatedByUniVenta($obj1);
			}


					
			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9 = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArtRelatedBySuniVenta($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj9->initArtsRelatedBySuniVenta();
				$obj9->addArtRelatedBySuniVenta($obj1);
			}


					
			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj10 = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getTabulado(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addArt($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj10->initArts();
				$obj10->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptLinArt(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptCatArt(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptSubLin(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptColores(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptProceden(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptProv(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUnidadesRelatedByUniVenta(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUnidadesRelatedBySuniVenta(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);

		$rs = ArtPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ArtPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ArtPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$criteria->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$criteria->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$criteria->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$criteria->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$criteria->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$criteria->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$rs = ArtPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptLinArt(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		CatArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProvPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getCatArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSubLin(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getColores(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getProceden(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProv(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArtRelatedByUniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArtsRelatedByUniVenta();
				$obj7->addArtRelatedByUniVenta($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedBySuniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedBySuniVenta();
				$obj8->addArtRelatedBySuniVenta($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTabulado(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initArts();
				$obj9->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptCatArt(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProvPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSubLin(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getColores(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getProceden(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProv(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArtRelatedByUniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArtsRelatedByUniVenta();
				$obj7->addArtRelatedByUniVenta($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedBySuniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedBySuniVenta();
				$obj8->addArtRelatedBySuniVenta($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTabulado(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initArts();
				$obj9->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptSubLin(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProvPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getColores(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getProceden(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProv(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArtRelatedByUniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArtsRelatedByUniVenta();
				$obj7->addArtRelatedByUniVenta($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedBySuniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedBySuniVenta();
				$obj8->addArtRelatedBySuniVenta($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTabulado(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initArts();
				$obj9->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptColores(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SubLinPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProvPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSubLin(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getProceden(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProv(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArtRelatedByUniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArtsRelatedByUniVenta();
				$obj7->addArtRelatedByUniVenta($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedBySuniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedBySuniVenta();
				$obj8->addArtRelatedBySuniVenta($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTabulado(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initArts();
				$obj9->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptProceden(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ColoresPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProvPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSubLin(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getColores(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProv(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArtRelatedByUniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArtsRelatedByUniVenta();
				$obj7->addArtRelatedByUniVenta($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedBySuniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedBySuniVenta();
				$obj8->addArtRelatedBySuniVenta($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTabulado(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initArts();
				$obj9->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptProv(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProcedenPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSubLin(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getColores(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProceden(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArtRelatedByUniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArtsRelatedByUniVenta();
				$obj7->addArtRelatedByUniVenta($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedBySuniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedBySuniVenta();
				$obj8->addArtRelatedBySuniVenta($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTabulado(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initArts();
				$obj9->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUnidadesRelatedByUniVenta(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ProvPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSubLin(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getColores(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProceden(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getProv(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArts();
				$obj7->addArt($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTabulado(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArts();
				$obj8->addArt($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUnidadesRelatedBySuniVenta(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ProvPeer::NUM_COLUMNS;

		TabuladoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TabuladoPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::TIPO_IMP, TabuladoPeer::TIPO);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSubLin(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getColores(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProceden(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getProv(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArts();
				$obj7->addArt($obj1);
			}

			$omClass = TabuladoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTabulado(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArts();
				$obj8->addArt($obj1);
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

		ArtPeer::addSelectColumns($c);
		$startcol2 = (ArtPeer::NUM_COLUMNS - ArtPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LinArtPeer::NUM_COLUMNS;

		CatArtPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CatArtPeer::NUM_COLUMNS;

		SubLinPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SubLinPeer::NUM_COLUMNS;

		ColoresPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ColoresPeer::NUM_COLUMNS;

		ProcedenPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + ProcedenPeer::NUM_COLUMNS;

		ProvPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ProvPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + UnidadesPeer::NUM_COLUMNS;

		UnidadesPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + UnidadesPeer::NUM_COLUMNS;

		$c->addJoin(ArtPeer::CO_LIN, LinArtPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_CAT, CatArtPeer::CO_CAT);

		$c->addJoin(ArtPeer::CO_SUBL, SubLinPeer::CO_LIN);

		$c->addJoin(ArtPeer::CO_COLOR, ColoresPeer::CO_COL);

		$c->addJoin(ArtPeer::PROCEDENCI, ProcedenPeer::COD_PROC);

		$c->addJoin(ArtPeer::CO_PROV, ProvPeer::CO_PROV);

		$c->addJoin(ArtPeer::UNI_VENTA, UnidadesPeer::CO_UNI);

		$c->addJoin(ArtPeer::SUNI_VENTA, UnidadesPeer::CO_UNI);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ArtPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LinArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLinArt(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initArts();
				$obj2->addArt($obj1);
			}

			$omClass = CatArtPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCatArt(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initArts();
				$obj3->addArt($obj1);
			}

			$omClass = SubLinPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSubLin(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initArts();
				$obj4->addArt($obj1);
			}

			$omClass = ColoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getColores(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initArts();
				$obj5->addArt($obj1);
			}

			$omClass = ProcedenPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getProceden(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initArts();
				$obj6->addArt($obj1);
			}

			$omClass = ProvPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getProv(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addArt($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initArts();
				$obj7->addArt($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getUnidadesRelatedByUniVenta(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addArtRelatedByUniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initArtsRelatedByUniVenta();
				$obj8->addArtRelatedByUniVenta($obj1);
			}

			$omClass = UnidadesPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getUnidadesRelatedBySuniVenta(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addArtRelatedBySuniVenta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initArtsRelatedBySuniVenta();
				$obj9->addArtRelatedBySuniVenta($obj1);
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
		return ArtPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(ArtPeer::CO_ART);
			$selectCriteria->add(ArtPeer::CO_ART, $criteria->remove(ArtPeer::CO_ART), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ArtPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ArtPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Art) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ArtPeer::CO_ART, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Art $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ArtPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ArtPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ArtPeer::DATABASE_NAME, ArtPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ArtPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ArtPeer::DATABASE_NAME);

		$criteria->add(ArtPeer::CO_ART, $pk);


		$v = ArtPeer::doSelect($criteria, $con);

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
			$criteria->add(ArtPeer::CO_ART, $pks, Criteria::IN);
			$objs = ArtPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseArtPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ArtMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ArtMapBuilder');
}
