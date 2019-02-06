<?php
/* @var $this NtRoleController */
/* @var $data NtRole */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_ON); ?>
	<br />


</div>