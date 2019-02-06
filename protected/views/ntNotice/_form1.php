<?php
/* @var $this NtNoticeController */
/* @var $model NtNotice */
/* @var $form CActiveForm */
?>
<?php
$this->widget('booster.widgets.TbAlert', array(
    'fade' => true,
    'closeText' => '&times;', // false equals no close link
    'events' => array(),
    'htmlOptions' => array(),
    'userComponentId' => 'user',
    'alerts' => array( // configurations per alert type
        // success, info, warning, error or danger
        'success' => array('closeText' => '&times;'),
        'info', // you don't need to specify full config
        'warning' => array('closeText' => false),
        'error' => array('closeText' => 'AAARGHH!!')
    ),
));
?>
<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'nt-notice-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <?php echo $form->textFieldGroup($model, 'TITLE');
       echo '<input type="checkbox" class="MyCheckbox" value="Yii::app()->request->baseUrl./images/new6__e0.gif"  >';
                ?>         
                       
                
<!--                  echo '<button onclick="changeImage()" id="demo">new</button>';
              echo'  <button type="button" onclick="document.getElementById("demo").innerHTML = Date()">
            Click me to display Date and Time.</button>';-->
        

        ?>
	<?php echo $form->datePickerGroup(
			$model,
			'PUBLICATION_DATE',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'en',
                                             'format'=>'yyyy-mm-dd',
					),
                                   
				),
				'wrapperHtmlOptions' => array(
					'class' => 'span1',
                                        
				),
                            
				//'hint' => 'Click inside! This is a super cool date field.',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>
	<?php echo $form->datePickerGroup(
			$model,
			'EXP_DATE',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'en',
                                            'format'=>'yyyy-mm-dd',
                                            
					),
				),
				'wrapperHtmlOptions' => array(
					'class' => 'span1',
				),
				//'hint' => 'Click inside! This is a super cool date field.',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>

	
        <?php echo $form->textFieldGroup($model, 'REF_NO'); ?>
	<?php 
        echo $form->fileFieldGroup($model, 'ATTACHMENT',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
			)
		);
?>
        <?php
        
        echo $form->radioButtonListGroup(
			$model,
			'STATUS_ID',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(NtStatus::model()->findAll(), 'ID', 'DESCRIPTION'),
					'htmlOptions' => array(),
				)
			)
		);
        
      //  echo $form->hiddenField($model,'STATUS_ID',array('value'=>'1'));
      
        ?>
        <?php 
        
        ?>
        
	

	

	<div class="form-actions">
		<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'danger',
				'label' => 'Submit'
			)
		); ?>
		<?php $this->widget(
			'booster.widgets.TbButton',
			array('buttonType' => 'reset', 'label' => 'Reset')
		); ?>
<!--	</div>
        <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>-->

<?php $this->endWidget(); ?>

</div><!-- form -->