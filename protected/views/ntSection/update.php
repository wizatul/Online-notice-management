<?php
/* @var $this NtSectionController */
/* @var $model NtSection */

//$this->breadcrumbs=array(
//	'Nt Sections'=>array('index'),
//	$model->NAME=>array('view','id'=>$model->ID),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List NtSection', 'url'=>array('index')),
//	array('label'=>'Create NtSection', 'url'=>array('create')),
//	array('label'=>'View NtSection', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage NtSection', 'url'=>array('admin')),
//);
?>

<h1>Update Section <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>