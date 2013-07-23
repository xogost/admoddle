<?php

/**
 * This is the model class for table "datoscurso".
 *
 * The followings are the available columns in table 'datoscurso':
 * @property integer $id
 * @property string $nombredocente
 * @property string $documentoidentidad
 * @property string $correoinstitucional
 * @property integer $subcategoria_id
 * @property integer $plantilla_id
 * @property integer $programa_id
 * @property string $nombreasignatura
 * @property string $codigoasignatura
 * @property string $fechainicio
 * @property integer $numerotemas
 * @property integer $numerosemanas
 *
 * The followings are the available model relations:
 * @property Programas $programa
 * @property Subcategorias $subcategoria
 * @property Plantillas $plantilla
 */
class Datoscurso extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Datoscurso the static model class
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
		return 'datoscurso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombredocente, documentoidentidad, correoinstitucional, subcategoria_id, programa_id, nombreasignatura, codigoasignatura, fechainicio', 'required'),
			array('id, subcategoria_id, plantilla_id, programa_id, numerotemas, numerosemanas', 'numerical', 'integerOnly'=>true),
			array('nombredocente, nombreasignatura', 'length', 'max'=>200),
			array('documentoidentidad', 'length', 'max'=>20),
			array('correoinstitucional', 'length', 'max'=>300),
			array('codigoasignatura', 'length', 'max'=>5),
                        array('correoinstitucional', 'email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombredocente, documentoidentidad, correoinstitucional, subcategoria_id, plantilla_id, programa_id, nombreasignatura, codigoasignatura, fechainicio, numerotemas, numerosemanas', 'safe', 'on'=>'search'),
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
			'programa' => array(self::BELONGS_TO, 'Programas', 'programa_id'),
			'subcategoria' => array(self::BELONGS_TO, 'Subcategorias', 'subcategoria_id'),
			'plantilla' => array(self::BELONGS_TO, 'Plantillas', 'plantilla_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombredocente' => 'Nombre de Docente',
			'documentoidentidad' => 'Documento de Identidad',
			'correoinstitucional' => 'Correo Institucional',
			'subcategoria_id' => 'Formato del Curso',
			'plantilla_id' => 'Plantilla',
			'programa_id' => 'Programa',
			'nombreasignatura' => 'Nombre de la Asignatura',
			'codigoasignatura' => 'Codigo de la Asignatura',
			'fechainicio' => 'Fecha Inicial',
			'numerotemas' => 'Numero de Temas',
			'numerosemanas' => 'Numero de Semanas',
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
		$criteria->compare('nombredocente',$this->nombredocente,true);
		$criteria->compare('documentoidentidad',$this->documentoidentidad,true);
		$criteria->compare('correoinstitucional',$this->correoinstitucional,true);
		$criteria->compare('subcategoria_id',$this->subcategoria_id);
		$criteria->compare('plantilla_id',$this->plantilla_id);
		$criteria->compare('programa_id',$this->programa_id);
		$criteria->compare('nombreasignatura',$this->nombreasignatura,true);
		$criteria->compare('codigoasignatura',$this->codigoasignatura,true);
		$criteria->compare('fechainicio',$this->fechainicio,true);
		$criteria->compare('numerotemas',$this->numerotemas);
		$criteria->compare('numerosemanas',$this->numerosemanas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}