<?php
/* @var $this NtUserController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Users',
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
//                    array('label'=>'Create user', 'url'=>array('create')),
//	            array('label'=>'Manage user', 'url'=>array('admin')),
//                )
//            ),
//        ),
//    )
//);

?>
<br>
<br>
<h1> Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'enablePagination' => true,
)); ?>
