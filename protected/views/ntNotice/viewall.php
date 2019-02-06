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



<h1 style="color:#660066;text-align:center"><b><u><i>Notices</i></u></b></h1>
<p><a href="http://localhost/testyii/index.php/NtNotice/userarchive" class="btn btn-large btn-primary">Archive</a></p>

<?php
$STATUS = FALSE;
//        if(date('YYYY-MM-DD')>='EXP_DATE')?true:false;
//$criteria = new CDbCriteria;
//$now = new CDbExpression("NOW()");
//$criteria->addCondition('EXP_DATE >'.$now);

//$status=FALSE;
//

if('$data'>=date('YYYY-MM-DD'))
{
    $STATUS=FALSE;
}
 else 
     {
$STATUS= TRUE;    
}

    
?>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php 
//$this->renderPartial('_search',array(
//	'model'=>$model,
//));
?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'nt-notice-grid',
	'dataProvider'=>$model->search_active(),
	'filter'=>$model,
    
       // 'template'=>'{pager}',
        'enablePagination' => true,
	'columns'=>array(
		//'ID',
                array
                (
                    
                //   'visible'=>'if($model->search_active()->EXP_DATE>=date())?true:false;',
                //    'visible'=>'(if($model->search_active(EXP_DATE,array("condition"=>"date()>=EXP_DATE"))===NULL)?true:false;',
               //    'visible'=>getData($date),
                //    'visible'=>()
                   // 'visible'=>'DateTime((strtotime(date("Y-m-d"))>DateTime((strtotime($data->EXP_DATE))',
                    //DateTime((strtotime(date("Y-m-d"))<DateTime((strtotime($data->EXP_DATE))
//                    'visible'=>'function()
//                                {
//                                if($model->search_active(EXP_DATE)<=date())
//                                {
//                                return true;
//                                }
//                                else
//                                {return false}
//                                }',
                    'class'=>'CButtonColumn',
                    'template'=>'{visible}',
                    'buttons'=>array
                    (
                        'visible' => array
                        (
                           // 'visible'=>'if(isset(EXP_DATE>=date()))?TRUE:FALSE',
                            'label'=>'View',
                            'imageUrl'=>Yii::app()->request->baseUrl.'/images/new6__e0.gif',
                           // 'url'=>'Yii::app()->createUrl("NtNotice/download", array("id"=>$data->ATTACHMENT_ID))',
                        ),
//                       
                       
                
                        
                        
                    ),
                ),
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
                             array('prompt'=>'  ')
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


 ?>
