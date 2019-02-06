<?php
/* @var $this NtSuperadminController */
/* @var $model NtSuperadmin */

$this->breadcrumbs=array(
	'Nt Superadmins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NtSuperadmin', 'url'=>array('index')),
	array('label'=>'Manage NtSuperadmin', 'url'=>array('admin')),
);
?>

<h1>Create NtSuperadmin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>