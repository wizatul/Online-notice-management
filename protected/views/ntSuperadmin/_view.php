<?php
/* @var $this NtSuperadminController */
/* @var $data NtSuperadmin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PER_ID); ?>
	<br />


</div>