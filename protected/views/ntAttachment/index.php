<?php
/* @var $this NtAttachmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nt Attachments',
);

$this->menu=array(
	array('label'=>'Create NtAttachment', 'url'=>array('create')),
	array('label'=>'Manage NtAttachment', 'url'=>array('admin')),
);
?>

<h1>Nt Attachments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
