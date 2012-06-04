<?php

/**
 * This is the model class for table "servicio".
 *
 * The followings are the available columns in table 'servicio':
 * @property string $id
 * @property string $categoriaServicio_id
 * @property string $nombre
 * @property string $estatus_id
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property Categoriaservicio $categoriaServicio
 */
class Servicio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Servicio the static model class
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
		return 'Servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoriaServicio_id', 'length', 'max'=>11),
			array('nombre', 'length', 'max'=>100),
			array('estatus_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categoriaServicio_id, nombre, estatus_id', 'safe', 'on'=>'search'),
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
			'categoriaServicio' => array(self::BELONGS_TO, 'Categoriaservicio', 'categoriaServicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'categoriaServicio_id' => 'Categoria Servicio',
			'nombre' => 'Nombre',
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
		$criteria->compare('categoriaServicio_id',$this->categoriaServicio_id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estatus_id',$this->estatus_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}