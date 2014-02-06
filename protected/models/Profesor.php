<?php

/**
 * This is the model class for table "profesor".
 *
 * The followings are the available columns in table 'profesor':
 * @property integer $id_profesor
 * @property string $nombre_profesor
 * @property integer $cedula_identidad
 * @property boolean $genero
 *
 * The followings are the available model relations:
 * @property MateriaProfesor[] $materiaProfesors
 */
class Profesor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_profesor, cedula_identidad', 'required'),
			array('cedula_identidad', 'numerical', 'integerOnly'=>true),
			array('nombre_profesor', 'length', 'max'=>250),
			array('genero', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_profesor, nombre_profesor, cedula_identidad, genero', 'safe', 'on'=>'search'),
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
			'materiaProfesors' => array(self::HAS_MANY, 'MateriaProfesor', 'fk_profesor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_profesor' => 'Id Profesor',
			'nombre_profesor' => 'Nombre Profesor',
			'cedula_identidad' => 'Cedula Identidad',
			'genero' => 'Genero',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_profesor',$this->id_profesor);
		$criteria->compare('nombre_profesor',$this->nombre_profesor,true);
		$criteria->compare('cedula_identidad',$this->cedula_identidad);
		$criteria->compare('genero',$this->genero);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
