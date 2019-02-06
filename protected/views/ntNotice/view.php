<?php
/* @var $this NtNoticeController */
/* @var $model NtNotice */

//$this->breadcrumbs=array(
//	'Notices'=>array('index'),
//	$model->TITLE,
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
//                    array('label'=>'List Notice', 'url'=>array('index')),
//                    array('label'=>'Create Notice', 'url'=>array('create')),
//                    array('label'=>'Update Notice', 'url'=>array('update', 'id'=>$model->ID)),
//                    array('label'=>'Delete Notice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//                    
//                )
//            ),
//        ),
//    )
//);


?>

<h1>View Notice <?php //echo $model->ID; ?></h1>

<?php 
//$this->widget('zii.widgets.CDetailView', array(
////	'data'=>$model,
//    
//	'attributes'=>array(
//		'ID',
//		'TITLE',
//		'PUBLICATION_DATE',
//		'EXP_DATE',
//		'REF_NO',
//		'ATTACHMENT_ID',
//		'UPLOADED_BY',
//		'UPLOADED_ON',
//                array(
//                'name'=>'STATUS',
//                'value'=>  'NtNotice::model()->getDescription($data->STATUS_ID)',
//              'htmlOptions'=>array('width'=>'100'),
//                   'filter'=>    CHtml::dropDownList('NtNotice[STATUS_ID]', '',  
//                Chtml::listData(NtStatus::model()->findAll(),'ID',"DESCRIPTION"),
//                             array('prompt'=>'Select Section')
//            ),
//                ),
//                
//	),
//)); 

$this->widget('booster.widgets.TbGridView', array(
	'id'=>'nt-notice-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'ID',
                'REF_NO',
		'TITLE',
		'PUBLICATION_DATE',
		'EXP_DATE',
                //'UPLOADED_BY',
                array(
                'name'=>'UPLOADED_BY',
                'value'=>  'NtNotice::model()->getSection($data->UPLOADED_BY)',
              'htmlOptions'=>array('width'=>'100'),
//                    'filter'=>    CHtml::dropDownList('NtNotice[UPLOADED_BY]', '',  
//                Chtml::listData(NtSection::model()->findAll(),'ID',"NAME"),
//                             array('prompt'=>'Select Section')
//            ),
                ),
            array(
                'name'=>'STATUS_ID',
                'value'=>'NtNotice::model()->getDescription($data->STATUS_ID)',
                'htmlOptions'=>array('width'=>'100'),
            ),
//            'sTATUS.DESCRIPTION',
            
               
		
		//'ATTACHMENT_ID',
		
//		array
//                (
//                    'class'=>'CButtonColumn',
//                    'template'=>'{download}',
//                    'buttons'=>array
//                    (
//                        'download' => array
//                        (
//                            'label'=>'View',
//                            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
//                            'url'=>'Yii::app()->createUrl("NtNotice/download", array("id"=>$data->ATTACHMENT_ID))',
//                        ),
////                       
//                       
//                
//                        
//                        
//                    ),
//                ),
           
//                      
                    ),
				
			)
	);


?>
