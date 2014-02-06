<?php

/**
 * This is the model class for table "salon".
 *
 * The followings are the available columns in table 'salon':
 * @property integer $id_salon
 * @property integer $fk_materia_profesor
 * @property integer $numero_salon
 *
 * The followings are the available model relations:
 * @property MateriaProfesor $fkMateriaProfesor
 */
class Salon extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_materia_profesor, numero_salon', 'required'),
			array('fk_materia_profesor, numero_salon', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_salon, fk_materia_profesor, numero_salon', 'safe', 'on'=>'search'),
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
			'fkMateriaProfesor' => array(self::BELONGS_TO, 'MateriaProfesor', 'fk_materia_profesor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_salon' => 'Id Salon',
			'fk_materia_profesor' => 'Fk Materia Profesor',
			'numero_salon' => 'Numero Salon',
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

		$criteria->compare('id_salon',$this->id_salon);
		$criteria->compare('fk_materia_profesor',$this->fk_materia_profesor);
		$criteria->compare('numero_salon',$this->numero_salon);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salon the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
