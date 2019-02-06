<?php
/* @var $this NtNoticeController */
/* @var $model NtNotice */

//$this->breadcrumbs=array(
//	'Notices'=>array('index'),
//	'Create',
//);
//
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
//                    array('label'=>'List Notice', 'url'=>array('index')),
//	            array('label'=>'Manage Notice', 'url'=>array('admin')),
//                )
//            ),
//        ),
//    )
//);
?>

<h1>Create Notice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>