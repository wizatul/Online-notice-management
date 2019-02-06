<?php
/* @var $this NtNoticeController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	' Notices'=>array('NtNotice::model()->getSection($data->UPLOADED_BY)')
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
//                    array('label'=>'Create Notice', 'url'=>array('create')),
//	            array('label'=>'Manage Notice', 'url'=>array('admin')),
//                )
//            ),
//        ),
//    )
//);
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

<h1> Notices</h1>

<?php $this->widget('booster.widgets.TbListView', array(
	'dataProvider'=>$model->search_condition(),
	'itemView'=>'_view',
    'enablePagination' => true,
)); ?>

<!--foreach ($models as $model) {
    // display $model here
}

// display pagination
echo LinkPager::widget([
    'pagination' => $pages,
]);-->