<?php
/* @var $this NtAttachmentController */
/* @var $model NtAttachment */

$this->breadcrumbs=array(
	'Nt Attachments'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List NtAttachment', 'url'=>array('index')),
	array('label'=>'Create NtAttachment', 'url'=>array('create')),
	array('label'=>'Update NtAttachment', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete NtAttachment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NtAttachment', 'url'=>array('admin')),
);
?>

<h1>View NtAttachment #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'FILE_TYPE',
		'FILE_SIZE',
		'FILE_NAME',
		'FILE_CONTENT',
	),
)); ?>
