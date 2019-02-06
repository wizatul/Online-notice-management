<?php
/* @var $this NtStatusController */
/* @var $model NtStatus */

//$this->breadcrumbs=array(
//	'Nt Statuses'=>array('index'),
//	$model->ID=>array('view','id'=>$model->ID),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List NtStatus', 'url'=>array('index')),
//	array('label'=>'Create NtStatus', 'url'=>array('create')),
//	array('label'=>'View NtStatus', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage NtStatus', 'url'=>array('admin')),
//);
?>

<h1>Update Status <?php //echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>