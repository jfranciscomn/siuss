<?php

/**
 * This is the model class for table "Beca".
 *
 * The followings are the available columns in table 'Beca':
 * @property string $id
 * @property string $nombre
 * @property string $porcentaje
 * @property string $categoriabeca_id
 * @property string $promedioInicial
 * @property string $promedioFinal
 * @property string $estatus_id
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property CategoriaBeca $categoriabeca
 */
class Beca extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Beca the static model class
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
		return 'Beca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('porcentaje, categoriabeca_id, promedioInicial, promedioFinal', 'required'),
			array('nombre', 'length', 'max'=>100),
			array('porcentaje, promedioInicial, promedioFinal', 'length', 'max'=>10),
			array('categoriabeca_id, estatus_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, porcentaje, categoriabeca_id, promedioInicial, promedioFinal, estatus_id', 'safe', 'on'=>'search'),
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
			'categoriabeca' => array(self::BELONGS_TO, 'CategoriaBeca', 'categoriabeca_id'),
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
			'porcentaje' => 'Porcentaje',
			'categoriabeca_id' => 'Categoriabeca',
			'promedioInicial' => 'Promedio Inicial',
			'promedioFinal' => 'Promedio Final',
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
		$criteria->compare('porcentaje',$this->porcentaje,true);
		$criteria->compare('categoriabeca_id',$this->categoriabeca_id,true);
		$criteria->compare('promedioInicial',$this->promedioInicial,true);
		$criteria->compare('promedioFinal',$this->promedioFinal,true);
		$criteria->compare('estatus_id',$this->estatus_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}