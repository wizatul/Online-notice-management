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

	

	<?php echo $form->errorSummary($mail); ?>
        <?php echo $form->textFieldGroup($mail, '$to'); ?>
	

	
        <?php echo $form->textArea($mail, '$message'); ?>
	
        
      
	

	

	<div class="form-actions">
		<?php 
//                $this->widget(
//			'booster.widgets.TbButton',
//			array(
//				'buttonType' => 'send',
//				'context' => 'danger',
//				'label' => 'Submit'
//			)
//		); 
                ?>
		
	</div>
        <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>