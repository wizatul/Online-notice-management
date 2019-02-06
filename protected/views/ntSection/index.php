<?php
/* @var $this NtSectionController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Sections',
//);



//$this->widget(
//    'booster.widgets.TbButtonGroup',
//    array(
//        'size' => 'large',
//        'context' => 'primary',
//        'buttons' => array(
//            array(
//                'label' => 'Action',
//                'items' => array(
//                    array('label'=>'Create Section', 'url'=>array('create')),
//	            array('label'=>'Manage Section', 'url'=>array('admin')),
//                )
//            ),
//        ),
//    )
//);

?>

<h1>Sections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'enablePagination' => true,
)); ?>
