<?php

/**
 * This is the model class for table "nt_superadmin".
 *
 * The followings are the available columns in table 'nt_superadmin':
 * @property integer $ID
 * @property string $PER_ID
 * @property string $EMAIL
 *
 * The followings are the available model relations:
 * @property NtRole[] $ntRoles
 * @property NtSection[] $ntSections
 * @property NtStatus[] $ntStatuses
 * @property NtUser[] $ntUsers
 */
class NtSuperadmin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nt_superadmin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_ID, EMAIL', 'required'),
			array('PER_ID, EMAIL', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, PER_ID, EMAIL', 'safe', 'on'=>'search'),
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
			'ntRoles' => array(self::HAS_MANY, 'NtRole', 'CREATED_BY'),
			'ntSections' => array(self::HAS_MANY, 'NtSection', 'CREATED_BY'),
			'ntStatuses' => array(self::HAS_MANY, 'NtStatus', 'CREATED_BY'),
			'ntUsers' => array(self::HAS_MANY, 'NtUser', 'CREATED_BY'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'PER_ID' => 'Per',
			'EMAIL' => 'Email',
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
		$criteria->compare('PER_ID',$this->PER_ID,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NtSuperadmin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
