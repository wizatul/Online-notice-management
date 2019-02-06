<?php
/* @var $this NtUserController */
/* @var $model NtUser */

//$this->breadcrumbs=array(
//	'Nt Users'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List NtUser', 'url'=>array('index')),
//	array('label'=>'Create NtUser', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nt-user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'nt-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		'PER_ID',
		'USER_NAME',
		array(
                    'name'=>'SECTION',
                    'value'=>'Ntuser::model()->getName($data->SECTION)'
                ),
		//'CREATED_BY',
		'CREATED_ON',
		/*
		'ROLE',
		*/
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
