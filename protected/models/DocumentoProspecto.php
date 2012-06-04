<?php

/**
 * This is the model class for table "DocumentoProspecto".
 *
 * The followings are the available columns in table 'DocumentoProspecto':
 * @property string $id
 * @property string $documento_id
 * @property string $prospecto_id
 * @property string $estatus_id
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property Documento $documento
 * @property Prospecto $prospecto
 */
class DocumentoProspecto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DocumentoProspecto the static model class
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
		return 'DocumentoProspecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('documento_id, prospecto_id, estatus_id', 'required'),
			array('documento_id, prospecto_id, estatus_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, documento_id, prospecto_id, estatus_id', 'safe', 'on'=>'search'),
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
			'documento' => array(self::BELONGS_TO, 'Documento', 'documento_id'),
			'prospecto' => array(self::BELONGS_TO, 'Prospecto', 'prospecto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'documento_id' => 'Documento',
			'prospecto_id' => 'Prospecto',
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
		$criteria->compare('documento_id',$this->documento_id,true);
		$criteria->compare('prospecto_id',$this->prospecto_id,true);
		$criteria->compare('estatus_id',$this->estatus_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}