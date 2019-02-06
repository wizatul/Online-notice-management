<?php
/* @var $this NtUserController */
/* @var $data NtUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->USER_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SECTION')); ?>:</b>
	<?php echo CHtml::encode(NtUser::model()->getName($data->SECTION)); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE')); ?>:</b>
	<?php echo CHtml::encode(NtUser::model()->getRole($data->ROLE)); ?>
	<br />


</div>