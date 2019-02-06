<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    
    
        
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
-->	
<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
 
	
        <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<title><?php echo 'VECC Notice Portal'; ?></title>
</head>

<body style="background-color:  #99ccff">
    

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php ?>
                </div>
	</div>

    <div id="mainmenu">
		<?php 
                
//                $this->widget('zii.widgets.CMenu',array(
//			'items'=>array(
////				array('label'=>'Home', 'url'=>array('/site/index')),
////				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
////				array('label'=>'Contact', 'url'=>array('/site/contact')),
//                                array('label'=>'Notice Mgmt', 'visible'=>!Yii::app()->user->isGuest, 
//                                    'items'=>array('label'=>'aa','url'=>array('/Ntnotice'),)),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
//                            
//                            
//                            
//			),
//		));
                
             $this->widget('booster.widgets.TbNavbar',array(
	'type'=>'inverse',
      //  'brand' => 'VECC Notice Management System',
       //'brandUrl' => '/ntnotice/viewall',
	 //'brand' => 'Title',
       // 'brand' => '<img src ="' . Yii::app()->request->baseUrl.'/images/logo.gif" />',        
      'brand'=>'',
	'collapse'=>true,
    'items'=>array(
        array(
            'class'=>'booster.widgets.TbMenu',
           // 'htmlOptions'=>array('class'=>'pull-right'),
            'type'=>'pills',
            'items'=>array(
                           array('label'=>'VECC Notice Management System', 'url'=>array('/ntnotice/viewall')),
                          
                
                
//                          array('label'=>'IPR','active'=>Yii::app()->controller->id=='iprdtls','visible'=>!Yii::app()->user->isGuest,
//                              'items'=>array(
//                                        array('label'=>'Fill up / Check IPR', 'url'=>array('/iprdtls/index'),'visible'=>!Yii::app()->user->isGuest),
//                                        array('label'=>'Offline IPR Accept', 'url'=>array('/iprdtls/offlineIprAccept'),'visible'=>Yii::app()->session['iprAdmin'] === 'Admin'),
//                                ),
//                    ),
              
                array('label'=>'Notice Management','active'=>Yii::app()->controller->id=='Ntrole','visible'=>!Yii::app()->user->isGuest,
                    
                    'items'=>array(
                        array('label'=>'-Role-',/* 'url'=>array('/Ntrole/')*/'visible'=>(Yii::app()->session['role'] === 'superadmin'),
                            'items'=>array(
                                            array('label'=>'List Role', 'url'=>array('/Ntrole/index'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                            array('label'=>'Create Role', 'url'=>array('/Ntrole/create'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                            array('label'=>'Manage Role', 'url'=>array('/Ntrole/admin'),'visible'=>(Yii::app()->session['role'] === 'superadmin'))
                                )),
                        array('label'=>'-Section-', 'url'=>array('/Ntsection/'),'visible'=>(Yii::app()->session['role'] == 'superadmin'),
                            'items'=>array(
                                            array('label'=>'List Section', 'url'=>array('/Ntsection/index'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                            array('label'=>'Create Section', 'url'=>array('/Ntsection/create'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                            array('label'=>'Manage Section', 'url'=>array('/Ntsection/admin'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                            )),
                        array('label'=>'-Status-', 'url'=>array('/Ntstatus/'),'visible'=>(Yii::app()->session['role'] === 'superadmin'),
                            'items'=>array(
                                array('label'=>'List Status', 'url'=>array('/Ntstatus/index'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                array('label'=>'Create Status', 'url'=>array('/Ntstatus/create'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                array('label'=>'Manage Status', 'url'=>array('/Ntstatus/admin'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                            )),
                        array('label'=>'-User-', 'url'=>array('/Ntuser/'),'visible'=>(Yii::app()->session['role'] === 'superadmin'),
                            'items'=>array(
                                            array('label'=>'List User', 'url'=>array('/Ntuser/index'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                            array('label'=>'Create User', 'url'=>array('/Ntuser/create'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                                            array('label'=>'Manage User', 'url'=>array('/Ntuser/admin'),'visible'=>(Yii::app()->session['role'] === 'superadmin')),
                            )),             
                        array('label'=>'Manage notice', 'url'=>array('/Ntnotice/admin'),'visible'=>(Yii::app()->session['role'] === 'uploader')),
                        array('label'=>'Manage notice', 'url'=>array('/Ntnotice/approver'),'visible'=>(Yii::app()->session['role'] === 'approver' )),
                       
                        )
                    ),
                
                
                //Yii::powered();
                
                
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'itemOptions'=>array('class'=>'pull-right')),
		array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'itemOptions'=>array('class'=>'pull-right')), 
                
               // array('label' => NtNotice::model()->getSection($qw)),
                //array('label'=>'VECC ('.Yii::app()->user->name.')','visible'=>(Yii::app()->session['role'] === 'uploader') or (Yii::app()->session['role'] === 'approver')),
            ),
        ),
    ),
)); 
       //      
             ?>
               
	</div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>


	<div class="clear"></div>

	<div id="footer">
<!--		Copyright &copy;-->
 Developed By C & IG &copy; <?php echo date('Y'); ?>.<br/>
		All Rights Reserved.<br/>
		<?php echo 'VECC' ?>
                
	</div><!-- footer -->

</div><!-- page -->
</body>

</html>
