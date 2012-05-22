<?php

/**
 * This is the model class for table "Estatus".
 *
 * The followings are the available columns in table 'Estatus':
 * @property string $estatus_id
 * @property string $nombre
 * @property integer $catalogo
 *
 * The followings are the available model relations:
 * @property Alergias[] $alergiases
 * @property AlergiasProspectos[] $alergiasProspectoses
 * @property Alumnos[] $alumnoses
 * @property Anticipos[] $anticiposes
 * @property AnticiposDetalle[] $anticiposDetalles
 * @property Aulas[] $aulases
 * @property Becas[] $becases
 * @property BecasProspectos[] $becasProspectoses
 * @property CategoriasServicios[] $categoriasServicioses
 * @property Ciclos[] $cicloses
 * @property Colonias[] $coloniases
 * @property Contratos[] $contratoses
 * @property ContratosDetalle[] $contratosDetalles
 * @property Cuentas[] $cuentases
 * @property CuentasSubcuentas[] $cuentasSubcuentases
 * @property DatosFiscales[] $datosFiscales
 * @property Descuentos[] $descuentoses
 * @property Documentos[] $documentoses
 * @property DocumentosEscolares[] $documentosEscolares
 * @property DocumentosEscolaresProspectos[] $documentosEscolaresProspectoses
 * @property Estados[] $estadoses
 * @property Facturas[] $facturases
 * @property FacturasDetalle[] $facturasDetalles
 * @property Generaciones[] $generaciones
 * @property GruposAlumnos[] $gruposAlumnoses
 * @property Idiomas[] $idiomases
 * @property IdiomasProspectos[] $idiomasProspectoses
 * @property LineasFormacion[] $lineasFormacions
 * @property Maestros[] $maestroses
 * @property Materias[] $materiases
 * @property Monedas[] $monedases
 * @property NivelesAcademicos[] $nivelesAcademicoses
 * @property Paises[] $paises
 * @property Poblaciones[] $poblaciones
 * @property Preparatorias[] $preparatoriases
 * @property Profesiones[] $profesiones
 * @property ProgramaPagos[] $programaPagoses
 * @property Promociones[] $promociones
 * @property PromocionesProspectos[] $promocionesProspectoses
 * @property Prospectos[] $prospectoses
 * @property Servicios[] $servicioses
 * @property Sexos[] $sexoses
 * @property Subcuentas[] $subcuentases
 * @property TiposBecas[] $tiposBecases
 * @property TiposInstitucion[] $tiposInstitucions
 * @property Tutores[] $tutores
 * @property TutoresProspectos[] $tutoresProspectoses
 * @property Grupos[] $gruposes
 * @property MenuFunciones[] $menuFunciones
 * @property MenuOpciones[] $menuOpciones
 * @property MenuPerfilesMaster[] $menuPerfilesMasters
 * @property MenuProcesos[] $menuProcesoses
 * @property MenuTareas[] $menuTareases
 * @property MenuUsuarios[] $menuUsuarioses
 */
class Estatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estatus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Estatus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estatus_id, catalogo', 'required'),
			array('catalogo', 'numerical', 'integerOnly'=>true),
			array('estatus_id', 'length', 'max'=>11),
			array('nombre', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('estatus_id, nombre, catalogo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'alergiases' => array(self::HAS_MANY, 'Alergias', 'estatus_id'),
			'alergiasProspectoses' => array(self::HAS_MANY, 'AlergiasProspectos', 'estatus_id'),
			'alumnoses' => array(self::HAS_MANY, 'Alumnos', 'estatus_id'),
			'anticiposes' => array(self::HAS_MANY, 'Anticipos', 'estatus_id'),
			'anticiposDetalles' => array(self::HAS_MANY, 'AnticiposDetalle', 'estatus_id'),
			'aulases' => array(self::HAS_MANY, 'Aulas', 'estatus_id'),
			'becases' => array(self::HAS_MANY, 'Becas', 'estatus_id'),
			'becasProspectoses' => array(self::HAS_MANY, 'BecasProspectos', 'estatus_id'),
			'categoriasServicioses' => array(self::HAS_MANY, 'CategoriasServicios', 'estatus_id'),
			'cicloses' => array(self::HAS_MANY, 'Ciclos', 'estatus_id'),
			'coloniases' => array(self::HAS_MANY, 'Colonias', 'estatus_id'),
			'contratoses' => array(self::HAS_MANY, 'Contratos', 'estatus_id'),
			'contratosDetalles' => array(self::HAS_MANY, 'ContratosDetalle', 'estatus_id'),
			'cuentases' => array(self::HAS_MANY, 'Cuentas', 'estatus_id'),
			'cuentasSubcuentases' => array(self::HAS_MANY, 'CuentasSubcuentas', 'estatus_id'),
			'datosFiscales' => array(self::HAS_MANY, 'DatosFiscales', 'estatus_id'),
			'descuentoses' => array(self::HAS_MANY, 'Descuentos', 'estatus_id'),
			'documentoses' => array(self::HAS_MANY, 'Documentos', 'estatus_id'),
			'documentosEscolares' => array(self::HAS_MANY, 'DocumentosEscolares', 'estatus_id'),
			'documentosEscolaresProspectoses' => array(self::HAS_MANY, 'DocumentosEscolaresProspectos', 'estatus_id'),
			'estadoses' => array(self::HAS_MANY, 'Estados', 'estatus_id'),
			'facturases' => array(self::HAS_MANY, 'Facturas', 'estatus_id'),
			'facturasDetalles' => array(self::HAS_MANY, 'FacturasDetalle', 'estatus_id'),
			'generaciones' => array(self::HAS_MANY, 'Generaciones', 'estatus_id'),
			'gruposAlumnoses' => array(self::HAS_MANY, 'GruposAlumnos', 'estatus_id'),
			'idiomases' => array(self::HAS_MANY, 'Idiomas', 'estatus_id'),
			'idiomasProspectoses' => array(self::HAS_MANY, 'IdiomasProspectos', 'estatus_id'),
			'lineasFormacions' => array(self::HAS_MANY, 'LineasFormacion', 'estatus_id'),
			'maestroses' => array(self::HAS_MANY, 'Maestros', 'estatus_id'),
			'materiases' => array(self::HAS_MANY, 'Materias', 'estatus_id'),
			'monedases' => array(self::HAS_MANY, 'Monedas', 'estatus_id'),
			'nivelesAcademicoses' => array(self::HAS_MANY, 'NivelesAcademicos', 'estatus_id'),
			'paises' => array(self::HAS_MANY, 'Paises', 'estatus_id'),
			'poblaciones' => array(self::HAS_MANY, 'Poblaciones', 'estatus_id'),
			'preparatoriases' => array(self::HAS_MANY, 'Preparatorias', 'estatus_id'),
			'profesiones' => array(self::HAS_MANY, 'Profesiones', 'estatus_id'),
			'programaPagoses' => array(self::HAS_MANY, 'ProgramaPagos', 'estatus_id'),
			'promociones' => array(self::HAS_MANY, 'Promociones', 'estatus_id'),
			'promocionesProspectoses' => array(self::HAS_MANY, 'PromocionesProspectos', 'estatus_id'),
			'prospectoses' => array(self::HAS_MANY, 'Prospectos', 'estatus_id'),
			'servicioses' => array(self::HAS_MANY, 'Servicios', 'estatus_id'),
			'sexoses' => array(self::HAS_MANY, 'Sexos', 'estatus_id'),
			'subcuentases' => array(self::HAS_MANY, 'Subcuentas', 'estatus_id'),
			'tiposBecases' => array(self::HAS_MANY, 'TiposBecas', 'estatus_id'),
			'tiposInstitucions' => array(self::HAS_MANY, 'TiposInstitucion', 'estatus_id'),
			'tutores' => array(self::HAS_MANY, 'Tutores', 'estatus_id'),
			'tutoresProspectoses' => array(self::HAS_MANY, 'TutoresProspectos', 'estatus_id'),
			'gruposes' => array(self::HAS_MANY, 'Grupos', 'estatus_id'),
			'menuFunciones' => array(self::HAS_MANY, 'MenuFunciones', 'estatus_id'),
			'menuOpciones' => array(self::HAS_MANY, 'MenuOpciones', 'estatus_id'),
			'menuPerfilesMasters' => array(self::HAS_MANY, 'MenuPerfilesMaster', 'estatus_id'),
			'menuProcesoses' => array(self::HAS_MANY, 'MenuProcesos', 'estatus_id'),
			'menuTareases' => array(self::HAS_MANY, 'MenuTareas', 'estatus_id'),
			'menuUsuarioses' => array(self::HAS_MANY, 'MenuUsuarios', 'estatus_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'estatus_id' => 'Estatus',
			'nombre' => 'Nombre',
			'catalogo' => 'Catalogo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('estatus_id',$this->estatus_id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('catalogo',$this->catalogo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}