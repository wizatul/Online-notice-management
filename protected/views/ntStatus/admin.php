<?php
/* @var $this NtStatusController */
/* @var $model NtStatus */

//$this->breadcrumbs=array(
//	'Nt Statuses'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List NtStatus', 'url'=>array('index')),
//	array('label'=>'Create NtStatus', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nt-status-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Status</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nt-status-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'DESCRIPTION',
		//'ID',
		//'CREATED_BY',
		'CREATED_ON',
		array(
                //  'name'=>'',
			'class'=>'CButtonColumn',
                   'template'=>'{view}',
		),
            array(
             //   'label'=>'',
			'class'=>'CButtonColumn',
                    'template'=>'{delete}',
		),
            array(
               // 'label'=>'update',
			'class'=>'CButtonColumn',
                    'template'=>'{update}',
		),
	),
)); ?>
