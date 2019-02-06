<?php
/* @var $this NtNoticeController */
/* @var $model NtNotice */




//$this->menu=array(
//	array('label'=>'List NtNotice', 'url'=>array('index')),
//	array('label'=>'Create NtNotice', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nt-notice-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<br>
<?php 

$this->widget(
    'booster.widgets.TbButton',
    array(
        'context' => 'success',
        'label' =>'User Name: '.Yii::app()->user->getState("uname"),

    )
        );?><br>
<?php
$qw=Yii::app()->user->getState("section");

$this->widget(
    'booster.widgets.TbButton',
    array(
        'context' => 'success',
        'label' => 'section:'. NtNotice::model()->getSection($qw),

    )
);

 ?>

<h1>Manage Notice</h1>
<p style="text-align:right;"><a href="http://localhost/testyii/index.php/NtNotice/create" class="btn btn-large btn-primary" >Upload Notice</a></p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'nt-notice-grid',
	'dataProvider'=>$model->search_condition(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		'TITLE',
		'PUBLICATION_DATE',
		'EXP_DATE',
		'REF_NO',
		//'ATTACHMENT_ID',
		
		//'UPLOADED_BY',
		//'UPLOADED_ON',
//                'sTATUS.STATUS_ID',
            array(
                'name'=>'STATUS',
                'value'=>  'NtNotice::model()->getDescription($data->STATUS_ID)',
              'htmlOptions'=>array('width'=>'100'),
                   'filter'=>    CHtml::dropDownList('NtNotice[STATUS_ID]', '',  
                Chtml::listData(NtStatus::model()->findAll(),'ID',"DESCRIPTION"),
                             array('prompt'=>'Select Status')
            ),
                ),
                 
		
//		array(
//			'class'=>'CButtonColumn',
//                   // 'template'=>'{delete}',
//		),
	),
)); ?>

<p><a href="http://localhost/testyii/index.php/NtNotice/deactive" class="btn btn-large btn-primary">Draft</a></p>

