<?php
/* @var $this NtSectionController */
/* @var $model NtSection */

//$this->breadcrumbs=array(
//	' Sections'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List NtSection', 'url'=>array('index')),
//	array('label'=>'Create NtSection', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nt-section-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage  Sections</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nt-section-grid',
	'dataProvider'=>$model->search(),
    'enablePagination' => true,
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		'NAME',
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
