<?php


class NtNoticeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('viewAll','Download','userarchive','/site/index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','index','view','delete','deactive','archive'),
				'users'=>array('@'),
                            'expression'=>"Yii::app()->session['role']==='uploader'",
			),
                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('approver','view','delete','update','deactive','archive','create','index'),
				'users'=>array('@'),
                            'expression'=>"Yii::app()->session['role']==='approver'",
			),
                    
                    
                    
                    
                    
                    
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
                //    $model->UPLOADED_BY= Yii::app()->user->userid;
		);
	}
        

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
/*	public function actionCreate()
	{
		$model=new NtNotice;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NtNotice']))
		{
			$model->attributes=$_POST['NtNotice'];
                        
                        
                        

                        
                        $uploaded_file = CUploadedFile::getInstance($model,'ATTACHMENT');
                        
                        if($uploaded_file === NULL){
                            echo $model->ATTACHMENT;
                            $modelAttachment= new NtAttachment();
                            Yii::app()->user->setFlash('error', "if $model->ATTACHMENT");
                            //$modelAttachment->FILE_NAME =$uploaded_file->name;
                        //$modelAttachment->FILE_TYPE=$uploaded_file->type;
                        //$modelAttachment->FILE_SIZE=$uploaded_file->size;
                        //$modelAttachment->FILE_CONTENT='aaaa';
                        }else{
                            Yii::app()->user->setFlash('info', 'else');
                            $modelAttachment= new NtAttachment();
                        $modelAttachment->FILE_NAME =$uploaded_file->name;
                        $modelAttachment->FILE_TYPE=$uploaded_file->type;
                        $modelAttachment->FILE_SIZE=$uploaded_file->size;
                        $modelAttachment->FILE_CONTENT=file_get_contents($uploaded_file->getTempName());
                        }//file_get_contents($uploaded_file->getTempName());
                        if($modelAttachment->save()){
                            
                            $model->ATTACHMENT_ID=$modelAttachment->ID;
                          $model->UPLOADED_BY= Yii::app()->user->userid;
                
                            
                   
                      //    $model->UPLOADED_BY= 42;
                            //$model->STATUS_ID=2;
                            //Yii::app()->user->perid
                            //Yii::app()->user->getState('email',NULL);
                            
                            $model->UPLOADED_ON=date('Y-m-d');
                            if($model->save())
                                {
                                Yii::app()->user->setFlash('success', 'final');
                                
                                $this->redirect(array('view','id'=>$model->ID));
                            }
                        }
                        
                        
                        
                        
                        
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
 */
        public function mailsend($to,$from,$subject,$message)
                
                {
                $mail=Yii::app()->Smtpmail;
                $mail->SetFrom($from, 'From NAme');
                $mail->Subject    = $subject;
                $mail->MsgHTML($message);
                $mail->AddAddress($to, "");
                if(!$mail->Send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                else {
                        echo "Message sent!";
                       }
    }
        
        public function actionCreate()
	{
		$model=new NtNotice('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NtNotice']))
		{
			$model->attributes=$_POST['NtNotice'];
                        
                 if($model->validate())       {
                        

                        
                        $uploaded_file = CUploadedFile::getInstance($model,'ATTACHMENT');
                        
                        if($uploaded_file === NULL){
                            echo $model->ATTACHMENT;
                            $modelAttachment= new NtAttachment();
                            Yii::app()->user->setFlash('error', "if $model->ATTACHMENT");
                            //$modelAttachment->FILE_NAME =$uploaded_file->name;
                        //$modelAttachment->FILE_TYPE=$uploaded_file->type;
                        //$modelAttachment->FILE_SIZE=$uploaded_file->size;
                        //$modelAttachment->FILE_CONTENT='aaaa';
                        }else{
                            Yii::app()->user->setFlash('info', 'else');
                            $modelAttachment= new NtAttachment();
                        $modelAttachment->FILE_NAME =$uploaded_file->name;
                        $modelAttachment->FILE_TYPE=$uploaded_file->type;
                        $modelAttachment->FILE_SIZE=$uploaded_file->size;
                        $modelAttachment->FILE_CONTENT=file_get_contents($uploaded_file->getTempName());
                        }//file_get_contents($uploaded_file->getTempName());
                        if($modelAttachment->save()){
                            
                            $model->ATTACHMENT_ID=$modelAttachment->ID;
                           $model->UPLOADED_BY= Yii::app()->user->section;
                
                            
                   
                      //     $model->UPLOADED_BY= 42;
                            //$model->STATUS_ID=2;
                            //Yii::app()->user->perid
                            //Yii::app()->user->getState('email',NULL);
                            
                            $model->UPLOADED_ON=date('Y-m-d');
                            if($model->save()){
                                Yii::app()->user->setFlash('success', 'final');
                                
                                $this->redirect(array('view','id'=>$model->ID));
                            }
                        }
                        
                        
                        
                        
                 }     
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NtNotice']))
		{
			$model->attributes=$_POST['NtNotice'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
//	public function actionIndex()
//	{
//             $criteria=new CDbCriteria;
//             //   $criteria->distinct=true;
//                $criteria->condition = "UPLOADED_BY =".Yii::app()->user->section;
//                //$criteria->params =array(':uploaded_by'=>Yii::app()->user->section);
//		
//                $criteria->order = "PUBLICATION_DATE DESC, ID DESC";
//		
//                
//		$dataProvider=new CActiveDataProvider('NtNotice',array(
//            'criteria'=>$criteria,));
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
//	}
        public function actionIndex()
	{
		$model=new NtNotice('search_condition');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];

		$this->render('index',array(
			'model'=>$model,
		));
	}
        

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
            $this->layout='//layouts/column1';
		$model=new NtNotice('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        public function actionViewAll()
	{
            $this->layout='//layouts/column1';
		$model=new NtNotice('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];

		$this->render('viewall',array(
			'model'=>$model,
                  
		));
	}
        public function actionApprover()
	{
            $this->layout='//layouts/column1';
		$model=new NtNotice('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];

		$this->render('approver',array(
			'model'=>$model,
		));
	}
      
        
        public function actionArchive()
        {
            
            $this->layout='//layouts/column1';
            
                $model=new NtNotice('search_archive');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];    
		$this->render('archive',array(
			'model'=>$model,
		));
        }
        
        public function actionUserarchive()
        {
            
            $this->layout='//layouts/column1';
            
                $model=new NtNotice('search_userarchive');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];    
		$this->render('userarchive',array(
			'model'=>$model,
		));
        }
        
        public function actionDeactive()
        {
            $this->layout='//layouts/column1';
            
                $model=new NtNotice('search_deactive');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];    
		$this->render('deactive',array(
			'model'=>$model,
		));
            
        }


        
           public function actionDownload($id)
        {
            $model=  NtAttachment::model()->findByPk($id);
            header('Content-Transfer-Encoding: binary');
            header('Content-length: '.$model->FILE_SIZE);
            header('Content-Type: '.$model->FILE_TYPE);
            header('Content-Disposition: attachment; filename='.$model->FILE_NAME);
            echo $model->FILE_CONTENT;
        }
       
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return NtNotice the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=NtNotice::model()->findByPk($id);
		if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
	}
//        public function getdata($date)
//        {
//            $model=  NtNotice::model()->findAByAttributes(EXP_DATE,array('condition'=>'EXP_DATE>=date()'));
//            if($model === NULL)
//            {
//                return TRUE;
//            }
//            else{
//                return FALSE;
//            }
//        }

        /**
	 * Performs the AJAX validation.
	 * @param NtNotice $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='nt-notice-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
