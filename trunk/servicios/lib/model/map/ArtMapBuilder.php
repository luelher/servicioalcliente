<?php



class ArtMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ArtMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('profit');

		$tMap = $this->dbMap->addTable('art');
		$tMap->setPhpName('Art');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_ART', 'CoArt', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addColumn('ART_DES', 'ArtDes', 'string', CreoleTypes::VARCHAR, true, 120);

		$tMap->addColumn('FECHA_REG', 'FechaReg', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('MANJ_SER', 'ManjSer', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addForeignKey('CO_LIN', 'CoLin', 'string', CreoleTypes::CHAR, 'lin_art', 'CO_LIN', true, 6);

		$tMap->addForeignKey('CO_CAT', 'CoCat', 'string', CreoleTypes::CHAR, 'cat_art', 'CO_CAT', true, 6);

		$tMap->addForeignKey('CO_SUBL', 'CoSubl', 'string', CreoleTypes::CHAR, 'sub_lin', 'CO_LIN', true, 6);

		$tMap->addForeignKey('CO_COLOR', 'CoColor', 'string', CreoleTypes::CHAR, 'colores', 'CO_COL', true, 6);

		$tMap->addColumn('ITEM', 'Item', 'string', CreoleTypes::CHAR, true, 10);

		$tMap->addColumn('REF', 'Ref', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addColumn('MODELO', 'Modelo', 'string', CreoleTypes::CHAR, true, 20);

		$tMap->addForeignKey('PROCEDENCI', 'Procedenci', 'string', CreoleTypes::CHAR, 'proceden', 'COD_PROC', true, 6);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addForeignKey('CO_PROV', 'CoProv', 'string', CreoleTypes::CHAR, 'prov', 'CO_PROV', true, 10);

		$tMap->addColumn('UBICACION', 'Ubicacion', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addForeignKey('UNI_VENTA', 'UniVenta', 'string', CreoleTypes::CHAR, 'unidades', 'CO_UNI', true, 6);

		$tMap->addColumn('UNI_COMPRA', 'UniCompra', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('UNI_RELAC', 'UniRelac', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RELAC_AUT', 'RelacAut', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('STOCK_ACT', 'StockAct', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('STOCK_COM', 'StockCom', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SSTOCK_COM', 'SstockCom', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('STOCK_LLE', 'StockLle', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SSTOCK_LLE', 'SstockLle', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('STOCK_DES', 'StockDes', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SSTOCK_DES', 'SstockDes', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addForeignKey('SUNI_VENTA', 'SuniVenta', 'string', CreoleTypes::CHAR, 'unidades', 'CO_UNI', true, 6);

		$tMap->addColumn('SUNI_COMPR', 'SuniCompr', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('SUNI_RELAC', 'SuniRelac', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('SSTOCK_ACT', 'SstockAct', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RELAC_COMP', 'RelacComp', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('RELAC_VENT', 'RelacVent', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PTO_PEDIDO', 'PtoPedido', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('STOCK_MAX', 'StockMax', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('STOCK_MIN', 'StockMin', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PREC_OM', 'PrecOm', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('PREC_VTA1', 'PrecVta1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_PREC_V', 'FecPrecV', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('FEC_PREC_2', 'FecPrec2', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('PREC_VTA2', 'PrecVta2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_PREC_3', 'FecPrec3', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('PREC_VTA3', 'PrecVta3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_PREC_4', 'FecPrec4', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('PREC_VTA4', 'PrecVta4', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_PREC_5', 'FecPrec5', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('PREC_VTA5', 'PrecVta5', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PREC_AGR1', 'PrecAgr1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PREC_AGR2', 'PrecAgr2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PREC_AGR3', 'PrecAgr3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PREC_AGR4', 'PrecAgr4', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PREC_AGR5', 'PrecAgr5', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('CAN_AGR', 'CanAgr', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_DES_P5', 'FecDesP5', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('FEC_HAS_P5', 'FecHasP5', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CO_IMP', 'CoImp', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('MARGEN_MAX', 'MargenMax', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ULT_COS_UN', 'UltCosUn', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_ULT_CO', 'FecUltCo', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('COS_PRO_UN', 'CosProUn', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_COS_PR', 'FecCosPr', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('COS_MERC', 'CosMerc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_COS_ME', 'FecCosMe', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('COS_PROV', 'CosProv', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_COS_P2', 'FecCosP2', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('ULT_COS_DO', 'UltCosDo', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_COS_DO', 'FecCosDo', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('COS_UN_AN', 'CosUnAn', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_COS_AN', 'FecCosAn', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('ULT_COS_OM', 'UltCosOm', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_ULT_OM', 'FecUltOm', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('COS_PRO_OM', 'CosProOm', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('FEC_PRO_OM', 'FecProOm', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('TIPO_COS', 'TipoCos', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('MONT_COMI', 'MontComi', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PORC_COS', 'PorcCos', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONT_COS', 'MontCos', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PORC_GAS', 'PorcGas', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MONT_GAS', 'MontGas', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('F_COST', 'FCost', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('FISICO', 'Fisico', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('PUNT_CLI', 'PuntCli', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PUNT_PRO', 'PuntPro', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('DIAS_REPOS', 'DiasRepos', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TIPO', 'Tipo', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('ALM_PRIN', 'AlmPrin', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('ANULADO', 'Anulado', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addForeignKey('TIPO_IMP', 'TipoImp', 'string', CreoleTypes::CHAR, 'tabulado', 'TIPO', true, 1);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'string', CreoleTypes::LONGVARCHAR, true, 2147483647);

		$tMap->addColumn('MON_ILC', 'MonIlc', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('CAPACIDAD', 'Capacidad', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('GRADO_AL', 'GradoAl', 'double', CreoleTypes::DECIMAL, true, 12);

		$tMap->addColumn('TIPO_LICOR', 'TipoLicor', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('COMPUESTO', 'Compuesto', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('PICTURE', 'Picture', 'string', CreoleTypes::LONGVARBINARY, false, null);

		$tMap->addColumn('CAMPO1', 'Campo1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO5', 'Campo5', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO6', 'Campo6', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO7', 'Campo7', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CAMPO8', 'Campo8', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('CO_US_IN', 'CoUsIn', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_IN', 'FeUsIn', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CO_US_MO', 'CoUsMo', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_MO', 'FeUsMo', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('CO_US_EL', 'CoUsEl', 'string', CreoleTypes::CHAR, true, 4);

		$tMap->addColumn('FE_US_EL', 'FeUsEl', 'string', CreoleTypes::VARCHAR, true, null);

		$tMap->addColumn('REVISADO', 'Revisado', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CO_SUCU', 'CoSucu', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'string', CreoleTypes::CHAR, true, 16);

		$tMap->addColumn('TUNI_VENTA', 'TuniVenta', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('EQUI_UNI1', 'EquiUni1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('EQUI_UNI2', 'EquiUni2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('EQUI_UNI3', 'EquiUni3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('LOTE', 'Lote', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('SERIALP', 'Serialp', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addColumn('VALIDO', 'Valido', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('ATRIBUTO1', 'Atributo1', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('VATRIBUTO1', 'Vatributo1', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('ATRIBUTO2', 'Atributo2', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('VATRIBUTO2', 'Vatributo2', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('ATRIBUTO3', 'Atributo3', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('VATRIBUTO3', 'Vatributo3', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('ATRIBUTO4', 'Atributo4', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('VATRIBUTO4', 'Vatributo4', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('ATRIBUTO5', 'Atributo5', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('VATRIBUTO5', 'Vatributo5', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('ATRIBUTO6', 'Atributo6', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('VATRIBUTO6', 'Vatributo6', 'string', CreoleTypes::CHAR, true, 15);

		$tMap->addColumn('GARANTIA', 'Garantia', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addColumn('PESO', 'Peso', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('PIE', 'Pie', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MARGEN1', 'Margen1', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MARGEN2', 'Margen2', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MARGEN3', 'Margen3', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MARGEN4', 'Margen4', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MARGEN5', 'Margen5', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('ROW_ID', 'RowId', 'string', CreoleTypes::BINARY, true, null);

		$tMap->addColumn('IMAGEN1', 'Imagen1', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('IMAGEN2', 'Imagen2', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('I_ART_DES', 'IArtDes', 'string', CreoleTypes::VARCHAR, true, 60);

		$tMap->addColumn('UNI_EMP', 'UniEmp', 'string', CreoleTypes::CHAR, true, 6);

		$tMap->addColumn('REL_EMP', 'RelEmp', 'double', CreoleTypes::DECIMAL, true, 20);

		$tMap->addColumn('MOVIL', 'Movil', 'boolean', CreoleTypes::BOOLEAN, true, null);

	} 
} 