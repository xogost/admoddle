<?php

/**
 * This is the model class for table "creacion_usuario".
 *
 * The followings are the available columns in table 'creacion_usuario':
 * @property integer $id
 * @property integer $nro_identificacion
 * @property string $nombres
 * @property string $correo_electronico
 * @property string $programa_academico
 * @property string $perfil_usuario
 */
class CreacionUsuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CreacionUsuario the static model class
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
		return 'creacion_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nro_identificacion, nombres, correo_electronico', 'required'),
			array('nro_identificacion', 'numerical', 'integerOnly'=>true),
			array('nombres, perfil_usuario', 'length', 'max'=>100),
			array('correo_electronico', 'length', 'max'=>200),
			array('programa_academico', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nro_identificacion, nombres, correo_electronico, programa_academico, perfil_usuario', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nro_identificacion' => 'Nro Identificacion',
			'nombres' => 'Nombres',
			'correo_electronico' => 'Correo Electronico',
			'programa_academico' => 'Programa Academico',
			'perfil_usuario' => 'Perfil Usuario',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nro_identificacion',$this->nro_identificacion);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('correo_electronico',$this->correo_electronico,true);
		$criteria->compare('programa_academico',$this->programa_academico,true);
		$criteria->compare('perfil_usuario',$this->perfil_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}