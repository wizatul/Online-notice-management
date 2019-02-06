<?php
/* @var $this NtRoleController */
/* @var $model NtRole */
/* @var $form CActiveForm */
?>

<div class="form">


    
    <?php
    $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'nt-notice-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model, 'DESCRIPTION'); ?>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY'); ?>
		<?php echo $form->error($model,'CREATED_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_ON'); ?>
		<?php echo $form->textField($model,'CREATED_ON'); ?>
		<?php echo $form->error($model,'CREATED_ON'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->