<?php
/* @var $this NtUserController */
/* @var $model NtUser */

//$this->breadcrumbs=array(
//	'Users'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List NtUser', 'url'=>array('index')),
//	array('label'=>'Manage NtUser', 'url'=>array('admin')),
//);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>