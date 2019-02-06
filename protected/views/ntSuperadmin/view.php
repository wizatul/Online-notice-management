<?php
/* @var $this NtSuperadminController */
/* @var $model NtSuperadmin */

$this->breadcrumbs=array(
	'Nt Superadmins'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List NtSuperadmin', 'url'=>array('index')),
	array('label'=>'Create NtSuperadmin', 'url'=>array('create')),
	array('label'=>'Update NtSuperadmin', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete NtSuperadmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NtSuperadmin', 'url'=>array('admin')),
);
?>

<h1>View NtSuperadmin #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'PER_ID',
	),
)); ?>
