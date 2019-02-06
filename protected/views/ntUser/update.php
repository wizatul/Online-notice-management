<?php
/* @var $this NtUserController */
/* @var $model NtUser */

//$this->breadcrumbs=array(
//	'Nt Users'=>array('index'),
//	$model->ID=>array('view','id'=>$model->ID),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List NtUser', 'url'=>array('index')),
//	array('label'=>'Create NtUser', 'url'=>array('create')),
//	array('label'=>'View NtUser', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage NtUser', 'url'=>array('admin')),
//);
?>

<h1>Update User <?php //echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>