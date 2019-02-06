<?php
/* @var $this NtUserController */
/* @var $model NtUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
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

	<?php echo $form->textFieldGroup($model, 'PER_ID'); ?>

	<?php echo $form->textFieldGroup($model, 'USER_NAME'); ?>
        <?php echo $form->textFieldGroup($model, 'EMAIL'); ?>
	
        
        <?php
        
        echo $form->dropDownListGroup(
			$model,
			'SECTION',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(NtSection::model()->findAll(), 'ID', 'NAME'),
					'htmlOptions' => array(),
				)
			)
		);
        
       // echo $form->hiddenField($model,'STATUS_ID',array('value'=>'1'));
        
        ?>
	
	<?php  echo $form->dropDownListGroup(
			$model,
			'ROLE',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(NtRole::model()->findAll("ID != 3"), 'ID', 'DESCRIPTION'),
					'htmlOptions' => array(),
				)
			)
		); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->