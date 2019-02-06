<?php
/* @var $this NtStatusController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Status',
//);
//
//
//$this->widget(
//    'booster.widgets.TbButtonGroup',
//    array(
//        'size' => 'large',
//        'context' => 'primary',
//        'buttons' => array(
//            array(
//                'label' => 'Action',
//                'items' => array(
//                    array('label'=>'Create Status', 'url'=>array('create')),
//	            array('label'=>'Manage Status', 'url'=>array('admin')),
//                )
//            ),
//        ),
//    )
//);

?>

<h1><U> Status</U></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
