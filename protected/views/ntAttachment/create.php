<?php
/* @var $this NtAttachmentController */
/* @var $model NtAttachment */

$this->breadcrumbs=array(
	'Nt Attachments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NtAttachment', 'url'=>array('index')),
	array('label'=>'Manage NtAttachment', 'url'=>array('admin')),
);
?>

<h1>Create NtAttachment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>