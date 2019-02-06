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

<h1 style="color:#660066;text-align:center"><b><u><i>Archived Notices</i></u></b></h1>




<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'nt-notice-grid',
	'dataProvider'=>$model->search_userarchive(),
	'filter'=>$model,
    'enablePagination' => true,
	'columns'=>array(
		//'ID',
            'TITLE',
                'REF_NO',
		
		'PUBLICATION_DATE',
		'EXP_DATE',
                //'UPLOADED_BY',
                array(
                'name'=>'UPLOADED_BY',
                'value'=>  'NtNotice::model()->getSection($data->UPLOADED_BY)',
              'htmlOptions'=>array('width'=>'100'),
                    'filter'=>    CHtml::dropDownList('NtNotice[UPLOADED_BY]', '',  
                Chtml::listData(NtSection::model()->findAll(),'ID',"NAME"),
                             array('prompt'=>'Select Section')
            ),
                ),
            
               
		
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
                            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                            'url'=>'Yii::app()->createUrl("NtNotice/download", array("id"=>$data->ATTACHMENT_ID))',
                        ),
//                       
                       
                
                        
                        
                    ),
                ),
           
//                      
                    ),
				
			)
	);

//$this->widget(
//        'booster.widgets.TbButton',
//        array(
//            'label' => 'Archive',
//            'context' => 'Warning',
//        )
//); 
 ?>
<!--<p><a href="http://localhost/testyii/index.php/NtNotice/viewall" class="btn btn-large btn-primary">Back</a></p>-->

