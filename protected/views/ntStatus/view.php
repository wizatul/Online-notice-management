<?php
/* @var $this NtStatusController */
/* @var $model NtStatus */

//$this->breadcrumbs=array(
//	'Nt Statuses'=>array('index'),
//	$model->ID,
//);
//
//$this->menu=array(
//	array('label'=>'List NtStatus', 'url'=>array('index')),
//	array('label'=>'Create NtStatus', 'url'=>array('create')),
//	array('label'=>'Update NtStatus', 'url'=>array('update', 'id'=>$model->ID)),
//	array('label'=>'Delete NtStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage NtStatus', 'url'=>array('admin')),
//        
//);
?>

<h1>Status Created </h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DESCRIPTION',
//		'ID',
		//'CREATED_BY',
		'CREATED_ON',
	),
)); ?>
