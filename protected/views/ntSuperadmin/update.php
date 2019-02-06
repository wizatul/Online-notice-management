<?php
/* @var $this NtSuperadminController */
/* @var $model NtSuperadmin */

$this->breadcrumbs=array(
	'Nt Superadmins'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List NtSuperadmin', 'url'=>array('index')),
	array('label'=>'Create NtSuperadmin', 'url'=>array('create')),
	array('label'=>'View NtSuperadmin', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage NtSuperadmin', 'url'=>array('admin')),
);
?>

<h1>Update NtSuperadmin <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>