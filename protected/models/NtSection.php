<?php

/**
 * This is the model class for table "nt_section".
 *
 * The followings are the available columns in table 'nt_section':
 * @property integer $ID
 * @property string $NAME
 * @property integer $CREATED_BY
 * @property string $CREATED_ON
 *
 * The followings are the available model relations:
 * @property NtNotice[] $ntNotices
 * @property NtSuperadmin $cREATEDBY
 * @property NtUser[] $ntUsers
 */
class NtSection extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nt_section';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAME, CREATED_BY, CREATED_ON', 'required'),
			array('CREATED_BY', 'numerical', 'integerOnly'=>true),
			array('NAME', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, NAME, CREATED_BY, CREATED_ON', 'safe', 'on'=>'search'),
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
			'ntNotices' => array(self::HAS_MANY, 'NtNotice', 'UPLOADED_BY'),
			'cREATEDBY' => array(self::BELONGS_TO, 'NtSuperadmin', 'CREATED_BY'),
			'ntUsers' => array(self::HAS_MANY, 'NtUser', 'SECTION'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'NAME' => 'Name',
			'CREATED_BY' => 'Created By',
			'CREATED_ON' => 'Created On',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('CREATED_BY',$this->CREATED_BY);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NtSection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
