<?php
/* @var $this NtSectionController */
/* @var $model NtSection */

//$this->breadcrumbs=array(
//	'Nt Sections'=>array('index'),
//	$model->NAME,
//);
//
//$this->menu=array(
//	array('label'=>'List NtSection', 'url'=>array('index')),
//	array('label'=>'Create NtSection', 'url'=>array('create')),
//	array('label'=>'Update NtSection', 'url'=>array('update', 'id'=>$model->ID)),
//	array('label'=>'Delete NtSection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage NtSection', 'url'=>array('admin')),
//);
?>

<h1>Section Created</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'ID',
		'NAME',
		//'CREATED_BY',
		'CREATED_ON',
	),
)); ?>
