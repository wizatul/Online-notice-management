<?php
/* @var $this NtAttachmentController */
/* @var $model NtAttachment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nt-attachment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_TYPE'); ?>
		<?php echo $form->textField($model,'FILE_TYPE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FILE_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_SIZE'); ?>
		<?php echo $form->textField($model,'FILE_SIZE'); ?>
		<?php echo $form->error($model,'FILE_SIZE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_NAME'); ?>
		<?php echo $form->textField($model,'FILE_NAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FILE_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_CONTENT'); ?>
		<?php echo $form->textField($model,'FILE_CONTENT'); ?>
		<?php echo $form->error($model,'FILE_CONTENT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->