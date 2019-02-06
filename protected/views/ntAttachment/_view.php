<?php
/* @var $this NtAttachmentController */
/* @var $data NtAttachment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_SIZE')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_SIZE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_CONTENT); ?>
	<br />


</div>