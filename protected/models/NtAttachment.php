<?php

/**
 * This is the model class for table "nt_attachment".
 *
 * The followings are the available columns in table 'nt_attachment':
 * @property integer $ID
 * @property string $FILE_TYPE
 * @property integer $FILE_SIZE
 * @property string $FILE_NAME
 * @property string $FILE_CONTENT
 *
 * The followings are the available model relations:
 * @property NtNotice[] $ntNotices
 */
class NtAttachment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nt_attachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FILE_TYPE, FILE_SIZE, FILE_NAME, FILE_CONTENT', 'required'),
			array('FILE_SIZE', 'numerical', 'integerOnly'=>true),
			array('FILE_TYPE, FILE_NAME', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, FILE_TYPE, FILE_SIZE, FILE_NAME, FILE_CONTENT', 'safe', 'on'=>'search'),
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
			'ntNotices' => array(self::HAS_MANY, 'NtNotice', 'ATTACHMENT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'FILE_TYPE' => 'File Type',
			'FILE_SIZE' => 'File Size',
			'FILE_NAME' => 'File Name',
			'FILE_CONTENT' => 'File Content',
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
		$criteria->compare('FILE_TYPE',$this->FILE_TYPE,true);
		$criteria->compare('FILE_SIZE',$this->FILE_SIZE);
		$criteria->compare('FILE_NAME',$this->FILE_NAME,true);
		$criteria->compare('FILE_CONTENT',$this->FILE_CONTENT,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NtAttachment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
