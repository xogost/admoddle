<?php

/**
 * This is the model class for table "subcategorias".
 *
 * The followings are the available columns in table 'subcategorias':
 * @property integer $id
 * @property string $subcategorias
 *
 * The followings are the available model relations:
 * @property Datoscurso[] $datoscursos
 * @property Plantillas[] $plantillases
 */
class Subcategorias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subcategorias the static model class
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
		return 'subcategorias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, subcategorias', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('subcategorias', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, subcategorias', 'safe', 'on'=>'search'),
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
			'datoscursos' => array(self::HAS_MANY, 'Datoscurso', 'subcategoria_id'),
			'plantillases' => array(self::HAS_MANY, 'Plantillas', 'subcategoria_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'subcategorias' => 'Subcategorias',
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
		$criteria->compare('subcategorias',$this->subcategorias,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}