<?php

/**
 * This is the model class for table "nt_notice".
 *
 * The followings are the available columns in table 'nt_notice':
 * @property integer $ID
 * @property string $TITLE
 * @property string $PUBLICATION_DATE
 * @property string $EXP_DATE
 * @property string $REF_NO
 * @property integer $ATTACHMENT_ID
 * @property integer $UPLOADED_BY
 * @property string $UPLOADED_ON
 * @property integer $STATUS_ID
 * @property integer $NEW
 * The followings are the available model relations:
 * @property NtAttachment $aTTACHMENT
 * @property NtStatus $sTATUS
 * @property NtSection $uPLOADEDBY
 */
class NtNotice extends CActiveRecord
{
    public $ATTACHMENT;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nt_notice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TITLE, PUBLICATION_DATE, EXP_DATE, REF_NO', 'required'),
			array('UPLOADED_BY, STATUS_ID', 'numerical', 'integerOnly'=>true),
			array('TITLE, REF_NO', 'length', 'max'=>2000),
                       // array('NEW','safe'),
                        array('ATTACHMENT','file','types'=>array('pdf'),'maxSize'=>1024 * 1024 * 10,'wrongType'=>'Only pdf allowed.','tooLarge'=>'File too large! 10MB is the limit', 'on'=>'create'),
                        array('EXP_DATE','compare','compareAttribute'=>"PUBLICATION_DATE",'operator'=>'>'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, TITLE, REF_NO, UPLOADED_BY, STATUS_ID', 'safe', 'on'=>'search'),
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
			'aTTACHMENT' => array(self::BELONGS_TO, 'NtAttachment', 'ATTACHMENT_ID'),
			'sTATUS' => array(self::BELONGS_TO, 'NtStatus', 'STATUS_ID'),
			'uPLOADEDBY' => array(self::BELONGS_TO, 'NtSection', 'UPLOADED_BY'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'TITLE' => 'Title',
			'PUBLICATION_DATE' => 'Publication Date',
			'EXP_DATE' => 'Exp Date',
			'REF_NO' => 'Ref No',
			'ATTACHMENT_ID' => 'Attachment',
			'UPLOADED_BY' => 'Uploaded By',
			'UPLOADED_ON' => 'Uploaded On',
			'STATUS_ID' => 'Status',
                      //  'NEW'=>'NEW'
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
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('PUBLICATION_DATE',$this->PUBLICATION_DATE,true);
		$criteria->compare('EXP_DATE',$this->EXP_DATE,true);
		$criteria->compare('REF_NO',$this->REF_NO,true);
		$criteria->compare('ATTACHMENT_ID',$this->ATTACHMENT_ID);
		$criteria->compare('UPLOADED_BY',$this->UPLOADED_BY);
		$criteria->compare('UPLOADED_ON',$this->UPLOADED_ON,true);
		$criteria->compare('STATUS_ID',$this->STATUS_ID);
                $criteria->order = 'STATUS_ID';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function search_condition()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('PUBLICATION_DATE',$this->PUBLICATION_DATE,true);
		$criteria->compare('EXP_DATE',$this->EXP_DATE,true);
		$criteria->compare('REF_NO',$this->REF_NO,true);
		$criteria->compare('ATTACHMENT_ID',$this->ATTACHMENT_ID);
                $criteria->compare('UPLOADED_BY',Yii::app()->user->section);
		//$criteria->condition = "UPLOADED_BY =".Yii::app()->user->section;
		$criteria->compare('UPLOADED_ON',$this->UPLOADED_ON,true);
		$criteria->compare('STATUS_ID',$this->STATUS_ID);
                $criteria->order = 'STATUS_ID';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        
        public function search_active()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $now = new CDbExpression("NOW()");
		$criteria->compare('ID',$this->ID);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('PUBLICATION_DATE',$this->PUBLICATION_DATE,true);
		$criteria->compare('EXP_DATE',$this->EXP_DATE,true);
               // $criteria->addCondition('EXP_DATE >= '.$now);
		$criteria->compare('REF_NO',$this->REF_NO,true);
		$criteria->compare('ATTACHMENT_ID',$this->ATTACHMENT_ID);
		$criteria->compare('UPLOADED_BY',$this->UPLOADED_BY);
                //$criteria->condition = "UPLOADED_BY =".Yii::app()->user->section;
		$criteria->compare('UPLOADED_ON',$this->UPLOADED_ON,true);
		$criteria->compare('STATUS_ID',$this->STATUS_ID=2);
                $criteria->order = 'STATUS_ID'; 
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function search_userarchive()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
               // $idCrit=new CDbCriteria();
		$criteria=new CDbCriteria;
              //  $now = new CDbExpression("NOW()");
		$criteria->compare('ID',$this->ID);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('PUBLICATION_DATE',$this->PUBLICATION_DATE,true);
		$criteria->compare('EXP_DATE',$this->EXP_DATE,true);
               // $idCrit->addCondition('EXP_DATE < '.$now);
             //   $criteria->addCondition(array(('EXP_DATE <'.$now),('STATUS_ID=3')),'OR');
		$criteria->compare('REF_NO',$this->REF_NO,true);
		$criteria->compare('ATTACHMENT_ID',$this->ATTACHMENT_ID);
		$criteria->compare('UPLOADED_BY',$this->UPLOADED_BY);
                //$criteria->condition = "UPLOADED_BY =".Yii::app()->user->section;
		$criteria->compare('UPLOADED_ON',$this->UPLOADED_ON,true);
		$criteria->compare('STATUS_ID',$this->STATUS_ID=3);
              //  $criteria->mergeWith($idCrit,FALSE);
                $criteria->order = 'STATUS_ID';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function search_archive()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('PUBLICATION_DATE',$this->PUBLICATION_DATE,true);
		$criteria->compare('EXP_DATE',$this->EXP_DATE,true);
		$criteria->compare('REF_NO',$this->REF_NO,true);
		$criteria->compare('ATTACHMENT_ID',$this->ATTACHMENT_ID);
		//$criteria->compare('UPLOADED_BY',$this->UPLOADED_BY);
                $criteria->condition = "UPLOADED_BY =".Yii::app()->user->section;
		$criteria->compare('UPLOADED_ON',$this->UPLOADED_ON,true);
		$criteria->compare('STATUS_ID',$this->STATUS_ID=3);
                $criteria->order = 'STATUS_ID';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function search_deactive()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('PUBLICATION_DATE',$this->PUBLICATION_DATE,true);
		$criteria->compare('EXP_DATE',$this->EXP_DATE,true);
		$criteria->compare('REF_NO',$this->REF_NO,true);
		$criteria->compare('ATTACHMENT_ID',$this->ATTACHMENT_ID);
		//$criteria->compare('UPLOADED_BY',$this->UPLOADED_BY);
                $criteria->condition = "UPLOADED_BY =".Yii::app()->user->section;
		$criteria->compare('UPLOADED_ON',$this->UPLOADED_ON,true);
		$criteria->compare('STATUS_ID',$this->STATUS_ID=1);
                $criteria->order = 'STATUS_ID';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NtNotice the static model class
         * 
         
	 */
        public function getSection($data){
            $model= NtSection::model()->findByPk($data);
            return $model->NAME;
        }
        
        public function getDescription($data){
            $model= NtStatus::model()->findByPk($data);
            return $model->DESCRIPTION;
        }
        
        public function getRole($data){
            $model= NtRole::model()->findByPk($data);
            return $model->DESCRIPTION;
        }
        
       

        
        
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
