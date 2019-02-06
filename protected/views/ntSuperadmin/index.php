<?php
/* @var $this NtSuperadminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nt Superadmins',
);

$this->menu=array(
	array('label'=>'Create NtSuperadmin', 'url'=>array('create')),
	array('label'=>'Manage NtSuperadmin', 'url'=>array('admin')),
);
?>

<h1>Nt Superadmins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
