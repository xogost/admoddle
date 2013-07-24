<?php

/**
 * This is the model class for table "migracion_cursos".
 *
 * The followings are the available columns in table 'migracion_cursos':
 * @property integer $id
 * @property string $nombre_curso
 * @property string $nombre_docente
 * @property integer $documento_identidad
 * @property string $correo_institucional
 */
class MigracionCursos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MigracionCursos the static model class
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
		return 'migracion_cursos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_curso, nombre_docente, documento_identidad, correo_institucional', 'required'),
			array('documento_identidad', 'numerical', 'integerOnly'=>true),
			array('nombre_curso, nombre_docente', 'length', 'max'=>100),
			array('correo_institucional', 'length', 'max'=>200),
                        array('correo_institucional', 'email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre_curso, nombre_docente, documento_identidad, correo_institucional', 'safe', 'on'=>'search'),
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
			'nombre_curso' => 'Nombre Curso',
			'nombre_docente' => 'Nombre Docente',
			'documento_identidad' => 'Documento Identidad',
			'correo_institucional' => 'Correo Institucional',
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
		$criteria->compare('nombre_curso',$this->nombre_curso,true);
		$criteria->compare('nombre_docente',$this->nombre_docente,true);
		$criteria->compare('documento_identidad',$this->documento_identidad);
		$criteria->compare('correo_institucional',$this->correo_institucional,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}