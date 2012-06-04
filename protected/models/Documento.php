<?php

/**
 * This is the model class for table "Documento".
 *
 * The followings are the available columns in table 'Documento':
 * @property string $id
 * @property string $nombre
 * @property integer $requerido
 * @property string $estatus_id
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property DocumentoProspecto[] $documentoProspectos
 */
class Documento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Documento the static model class
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
		return 'Documento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('requerido, estatus_id', 'required'),
			array('requerido', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('estatus_id', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, requerido, estatus_id', 'safe', 'on'=>'search'),
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
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_id'),
			'documentoProspectos' => array(self::HAS_MANY, 'DocumentoProspecto', 'documento_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'requerido' => 'Requerido',
			'estatus_id' => 'Estatus',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('requerido',$this->requerido);
		$criteria->compare('estatus_id',$this->estatus_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}