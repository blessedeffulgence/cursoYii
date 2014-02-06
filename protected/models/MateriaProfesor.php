<?php

/**
 * This is the model class for table "materia_profesor".
 *
 * The followings are the available columns in table 'materia_profesor':
 * @property integer $id_materia_profesor
 * @property integer $fk_profesor
 * @property integer $fk_materia
 *
 * The followings are the available model relations:
 * @property Profesor $fkProfesor
 * @property Materia $fkMateria
 * @property Salon[] $salons
 */
class MateriaProfesor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materia_profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_profesor, fk_materia', 'required'),
			array('fk_profesor, fk_materia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_materia_profesor, fk_profesor, fk_materia', 'safe', 'on'=>'search'),
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
			'fkProfesor' => array(self::BELONGS_TO, 'Profesor', 'fk_profesor'),
			'fkMateria' => array(self::BELONGS_TO, 'Materia', 'fk_materia'),
			'salons' => array(self::HAS_MANY, 'Salon', 'fk_materia_profesor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_materia_profesor' => 'Id Materia Profesor',
			'fk_profesor' => 'Nombre del Profesor',
			'fk_materia' => 'Indique la Materia',
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

		$criteria->compare('id_materia_profesor',$this->id_materia_profesor);
		$criteria->compare('fk_profesor',$this->fk_profesor);
		$criteria->compare('fk_materia',$this->fk_materia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MateriaProfesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
