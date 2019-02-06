<?php
/* @var $this NtNoticeController */
/* @var $model NtNotice */

//$this->breadcrumbs=array(
//	'Nt Notices'=>array('index'),
//	$model->TITLE=>array('view','id'=>$model->ID),
//	'Update',
//);


?>
<?php 

$this->widget(
    'booster.widgets.TbLabel',
    array(
        'context' => 'success',
        // 'default', 'primary', 'success', 'info', 'warning', 'danger'
        //'label' => 'Loggged as ('.Yii::app()->user->section.')',
        'label' =>'logged in as ('.Yii::app()->user->getState("uname").')',

    )
        );?><br><br><br>
<?php
$qw=Yii::app()->user->getState("section");

$this->widget(
    'booster.widgets.TbLabel',
    array(
        'context' => 'success',//
        
        // 'default', 'primary', 'success', 'info', 'warning', 'danger'
        //'label' => 'Loggged as ('.Yii::app()->user->section.')',
        'label' =>  NtNotice::model()->getSection($qw),

    )
);

 ?>

<h1>Update Notice </h1>

<?php $this->renderPartial('_form1', array('model'=>$model)); ?>