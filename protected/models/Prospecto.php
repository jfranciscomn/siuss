<?php

/**
 * This is the model class for table "Prospecto".
 *
 * The followings are the available columns in table 'Prospecto':
 * @property string $id
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property string $preparatoria_id
 * @property string $telefono
 * @property string $email
 * @property integer $referenciaBancaria
 * @property string $promedio
 * @property string $direccion
 * @property string $ciudad_id
 * @property string $estatus_id
 * @property string $codigoPostal
 * @property integer $edad
 * @property string $fechaNacimiento
 * @property string $celular
 * @property string $sexo
 * @property string $nombrePadre
 * @property string $nombreMadre
 * @property integer $telefonoPadre
 * @property integer $telefonoMadre
 * @property string $tipoInstitucion_id
 *
 * The followings are the available model relations:
 * @property Alumno $id0
 * @property Ciudad $ciudad
 * @property Estado $estatus
 * @property Preparatoria $preparatoria
 */
class Prospecto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prospecto the static model class
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
		return 'Prospecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('preparatoria_id, ciudad_id, estatus_id, edad, fechaNacimiento, tipoInstitucion_id', 'required'),
			array('referenciaBancaria, edad, telefonoPadre, telefonoMadre', 'numerical', 'integerOnly'=>true),
			array('nombre, apellidoPaterno, apellidoMaterno, telefono, email, celular, sexo, nombrePadre, nombreMadre', 'length', 'max'=>100),
			array('preparatoria_id, ciudad_id, estatus_id, tipoInstitucion_id', 'length', 'max'=>11),
			array('promedio', 'length', 'max'=>10),
			array('direccion', 'length', 'max'=>200),
			array('codigoPostal', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, apellidoPaterno, apellidoMaterno, preparatoria_id, telefono, email, referenciaBancaria, promedio, direccion, ciudad_id, estatus_id, codigoPostal, edad, fechaNacimiento, celular, sexo, nombrePadre, nombreMadre, telefonoPadre, telefonoMadre, tipoInstitucion_id', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'Alumno', 'id'),
			'ciudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_id'),
			'estatus' => array(self::BELONGS_TO, 'Estado', 'estatus_id'),
			'preparatoria' => array(self::BELONGS_TO, 'Preparatoria', 'preparatoria_id'),
			'tipoinstitucion' => array(self::BELONGS_TO, 'TipoInstitucion', 'tipoInstitucion_id'),
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
			'apellidoPaterno' => 'Apellido Paterno',
			'apellidoMaterno' => 'Apellido Materno',
			'preparatoria_id' => 'Preparatoria',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'referenciaBancaria' => 'Referencia Bancaria',
			'promedio' => 'Promedio',
			'direccion' => 'Direccion',
			'ciudad_id' => 'Ciudad',
			'estatus_id' => 'Estatus',
			'codigoPostal' => 'Codigo Postal',
			'edad' => 'Edad',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'celular' => 'Celular',
			'sexo' => 'Sexo',
			'nombrePadre' => 'Nombre Padre',
			'nombreMadre' => 'Nombre Madre',
			'telefonoPadre' => 'Telefono Padre',
			'telefonoMadre' => 'Telefono Madre',
			'tipoInstitucion_id' => 'Tipo Institucion',
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
		$criteria->compare('apellidoPaterno',$this->apellidoPaterno,true);
		$criteria->compare('apellidoMaterno',$this->apellidoMaterno,true);
		$criteria->compare('preparatoria_id',$this->preparatoria_id,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('referenciaBancaria',$this->referenciaBancaria);
		$criteria->compare('promedio',$this->promedio,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('ciudad_id',$this->ciudad_id,true);
		$criteria->compare('estatus_id',$this->estatus_id,true);
		$criteria->compare('codigoPostal',$this->codigoPostal,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('nombrePadre',$this->nombrePadre,true);
		$criteria->compare('nombreMadre',$this->nombreMadre,true);
		$criteria->compare('telefonoPadre',$this->telefonoPadre);
		$criteria->compare('telefonoMadre',$this->telefonoMadre);
		$criteria->compare('tipoInstitucion_id',$this->tipoInstitucion_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}