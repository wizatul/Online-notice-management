<?php
/* @var $this NtAttachmentController */
/* @var $model NtAttachment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_TYPE'); ?>
		<?php echo $form->textField($model,'FILE_TYPE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_SIZE'); ?>
		<?php echo $form->textField($model,'FILE_SIZE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_NAME'); ?>
		<?php echo $form->textField($model,'FILE_NAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_CONTENT'); ?>
		<?php echo $form->textField($model,'FILE_CONTENT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->