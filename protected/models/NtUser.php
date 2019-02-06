<?php

/**
 * This is the model class for table "nt_user".
 *
 * The followings are the available columns in table 'nt_user':
 * @property integer $ID
 * @property string $EMAIL
 * @property string $PER_ID
 * @property string $USER_NAME
 * @property integer $SECTION
 * @property integer $CREATED_BY
 * @property string $CREATED_ON
 * @property integer $ROLE
 *
 * The followings are the available model relations:
 * @property NtRole $rOLE
 * @property NtSection $sECTION
 * @property NtSuperadmin $cREATEDBY
 */
class NtUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nt_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMAIL, PER_ID, USER_NAME, SECTION, CREATED_BY, CREATED_ON, ROLE', 'required'),
			array('SECTION, CREATED_BY, ROLE', 'numerical', 'integerOnly'=>true),
			array('EMAIL', 'length', 'max'=>50),
			array('PER_ID, USER_NAME', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, EMAIL, PER_ID, USER_NAME, SECTION, CREATED_BY, CREATED_ON, ROLE', 'safe', 'on'=>'search'),
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
			'rOLE' => array(self::BELONGS_TO, 'NtRole', 'ROLE'),
			'sECTION' => array(self::BELONGS_TO, 'NtSection', 'SECTION'),
			'cREATEDBY' => array(self::BELONGS_TO, 'NtSuperadmin', 'CREATED_BY'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'EMAIL' => 'Email',
			'PER_ID' => 'Per',
			'USER_NAME' => 'Name',
			'SECTION' => 'Section',
			'CREATED_BY' => 'Created By',
			'CREATED_ON' => 'Created On',
			'ROLE' => 'Role',
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
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('PER_ID',$this->PER_ID,true);
		$criteria->compare('USER_NAME',$this->USER_NAME,true);
		$criteria->compare('SECTION',$this->SECTION);
		$criteria->compare('CREATED_BY',$this->CREATED_BY);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);
		$criteria->compare('ROLE',$this->ROLE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function getRole($data){
            $model= NtRole::model()->findByPk($data);
            return $model->DESCRIPTION;
        }
        public function getName($data){
            $model= NtSection::model()->findByPk($data);
            return $model->NAME;
        }
        

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NtUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
