<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$this->render('index');
           // $this->layout='//layouts/column1';
		$model=new NtNotice('search_active');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NtNotice']))
			$model->attributes=$_GET['NtNotice'];

		$this->render('/ntNotice/viewall',array(
			'model'=>$model,
                  
		));
	}
        public function actionIndexs()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('indexs');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
//	public function actionContact()
//	{
//		$model=new ContactForm;
//		if(isset($_POST['ContactForm']))
//		{
//			$model->attributes=$_POST['ContactForm'];
//			if($model->validate())
//			{
//				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
//				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
//				$headers="From: $name <{$model->email}>\r\n".
//					"Reply-To: {$model->email}\r\n".
//					"MIME-Version: 1.0\r\n".
//					"Content-Type: text/plain; charset=UTF-8";
//
//				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
//				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
//				$this->refresh();
//			}
//		}
//		$this->render('contact',array('model'=>$model));
//	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				//$this->redirect(Yii::app()->user->returnUrl);
                            $this->redirect('indexs');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        public function actionSearch()
        {
            $model=new SearchForm();
          if(isset($_POST['SearchForm']))
              {
              $model->attributes=$_POST['SearchForm'];
			if($model->validate()) 
                        {
                            echo"search found";
                            $this->refresh();
                        }
                        else 
                        {
                        echo "notfound";
                        }
            }
            $this->render('search',array('model'=>$model));
            
            
            
            
        }
        
        public function actionCreateSection(){
           //1. create model
            $model=new NTSCETION();
            //2. actions to be taken when form is submitted
            
            //3. display form
        }
        public function actionUpdateSection(){
           //1. create model
            $model=new NTSCETION();
            //2. actions to be taken when form is submitted
            
            //3. display form
        }
        public function actionViewSection(){
           //1. create model
            $model=new NTSCETION();
            //2. actions to be taken when form is submitted
            
            //3. display form
        }
        public function actionDeleteSection(){
           //1. create model
            $model=new NTSCETION();
            //2. actions to be taken when form is submitted
            
            //3. display form
        }
        public function actionContact() {
            $model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
                            
                            Yii::import('application.extensions.phpmailer.JPhpMailer');
                            $mail = new JPhpMailer;
                            $mail->IsSMTP();
                            //Enable SMTP debugging
                            // 0 = off (for production use)
                            // 1 = client messages
                            // 2 = client and server messages
                            //$mail->SMTPDebug = 2;

                            //Ask for HTML-friendly debug output
                            //$mail->Debugoutput = 'html';
                            $mail->Host = 'smtp.gmail.com';
                            $mail->Port       = 465; 
                           // $mail->SMTPSecure = "tls";
                            $mail->SMTPSecure = "ssl";
                            //$mail->SMTPAuth = true;
                            //$mail->Username = 'wizatul1@gmail.com';
                           // $mail->Password = 'A qwerty123';
                            $mail->SetFrom('wizatul1@gmail.com','Monirul');
                            $mail->Subject = $model->subject;
                            $mail->AltBody = $model->body.'<br>'.$model->email.'<br>'.$model->name;
                            $mail->MsgHTML('<h1></h1>');
                            $mail->AddAddress('wizatul1@gmail.com', 'John Doe');
                       if( !$mail->Send()){
                           Yii::app()->user->setFlash('contact','eror'.$mail->ErrorInfo);
                       }
                        else {
                            Yii::app()->user->setFlash('contact','msg sent');
                        }
                            
                            
                            
                            
                        }
                }
                $this->render('contact',array('model'=>$model));
        }
}