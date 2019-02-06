<?php
/* @var $this NtNoticeController */
/* @var $model NtNotice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'nt-notice-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<!--	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>-->

	<?php echo $form->textFieldGroup($model, 'TITLE'); ?>

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

<!--	<div class="row">
		<?php echo $form->label($model,'ATTACHMENT_ID'); ?>
		<?php echo $form->textField($model,'ATTACHMENT_ID'); ?>
	</div>
-->
	<?php echo $form->textFieldGroup($model, 'UPLOADED_BY'); ?>
<!--
	<div class="row">
		<?php echo $form->label($model,'UPLOADED_ON'); ?>
		<?php echo $form->textField($model,'UPLOADED_ON'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>



<?php $this->endWidget(); ?>

</div><!-- search-form -->