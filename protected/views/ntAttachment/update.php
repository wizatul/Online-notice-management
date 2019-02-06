<?php
/* @var $this NtAttachmentController */
/* @var $model NtAttachment */

$this->breadcrumbs=array(
	'Nt Attachments'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List NtAttachment', 'url'=>array('index')),
	array('label'=>'Create NtAttachment', 'url'=>array('create')),
	array('label'=>'View NtAttachment', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage NtAttachment', 'url'=>array('admin')),
);
?>

<h1>Update NtAttachment <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>