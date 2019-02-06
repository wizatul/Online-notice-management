<?php
/* @var $this NtUserController */
/* @var $model NtUser */

//$this->breadcrumbs=array(
//	'Nt Users'=>array('index'),
//	$model->ID,
//);
//
//$this->menu=array(
//	array('label'=>'List NtUser', 'url'=>array('index')),
//	array('label'=>'Create NtUser', 'url'=>array('create')),
//	array('label'=>'Update NtUser', 'url'=>array('update', 'id'=>$model->ID)),
//	array('label'=>'Delete NtUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage NtUser', 'url'=>array('admin')),
//);
?>

<h1> User Created</h1>

<?php $this->widget('booster.widgets.TbGridView', array(
	'dataProvider'=>$model->search(),
    'enablePagination' => true,
	'columns'=>array(
		//'ID',
		'PER_ID',
		'USER_NAME',
		array(
                'name'=>'SECTION',
                'value'=> ' NtUser::model()->getName($data->SECTION)',
                     'htmlOptions'=>array('width'=>'100'),
                    ),
            
	       // 'CREATED_BY',
		'CREATED_ON',
		array(
                'name'=>'ROLE',
                'value'=>  'NtUser::model()->getRole($data->ROLE)'),
	),
)); ?>
