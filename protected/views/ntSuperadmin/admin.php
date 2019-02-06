<?php
/* @var $this NtSuperadminController */
/* @var $model NtSuperadmin */

$this->breadcrumbs=array(
	'Nt Superadmins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NtSuperadmin', 'url'=>array('index')),
	array('label'=>'Create NtSuperadmin', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nt-superadmin-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Superadmins</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nt-superadmin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'PER_ID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
