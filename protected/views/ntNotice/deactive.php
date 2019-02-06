
<?php
/* @var $this NtNoticeController */
/* @var $model NtNotice */

//$this->breadcrumbs=array(
//	'Nt Notices'=>array('index'),
//	'Manage',
//);
//
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


<h1 style="color:#660066;text-align:center"><b><u><i>Notices</i></u></b></h1>




<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<!--<p><a href="http://localhost/testyii/index.php/NtNotice/view/" class="btn btn-large btn-primary">Back</a></p>-->


<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'nt-notice-grid',
	'dataProvider'=>$model->search_deactive(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
                'REF_NO',
		'TITLE',
		'PUBLICATION_DATE',
		'EXP_DATE',
                //'UPLOADED_BY',
//                array(
//                'name'=>'UPLOADED_BY',
//                'value'=>  'NtNotice::model()->getSection($data->UPLOADED_BY)',
//              'htmlOptions'=>array('width'=>'100'),
//                    'filter'=>    CHtml::dropDownList('NtNotice[UPLOADED_BY]', '',  
//                Chtml::listData(NtSection::model()->findAll(),'ID',"NAME"),
//                             array('prompt'=>'Select Section')
//            ),
//                ),
            
               
		
		//'ATTACHMENT_ID',
		
		array
                (
                    'class'=>'CButtonColumn',
                    'template'=>'{download}',
                    
                    'buttons'=>array
                    (
                        'download' => array
                        (
                            'label'=>'View',
                           // 'imageUrl'=>Yii::app()->request->baseUrl.'/images/logo.gif',
                            'url'=>'Yii::app()->createUrl("NtNotice/download", array("id"=>$data->ATTACHMENT_ID))',
                        ),
//                       
                       
                
                        
                        
                    ),
                ),
            array(
               // 'label'=>'update',
			'class'=>'CButtonColumn',
                    'template'=>'{delete}',
		),
           
//                      
                    ),
				
			)
	);


 ?>


