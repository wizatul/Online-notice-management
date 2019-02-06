
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUBLICATION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PUBLICATION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXP_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->EXP_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REF_NO')); ?>:</b>
	<?php echo CHtml::encode($data->REF_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ATTACHMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ATTACHMENT_ID); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('UPLOADED_BY')); ?>:</b>
	<?php echo CHtml::encode(NtNotice::model()->getSection($data->UPLOADED_BY)); ?>
	<br />-->
        <b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_ID')); ?>:</b>
	<?php echo CHtml::encode(NtNotice::model()->getDescription($data->STATUS_ID)); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('UPLOADED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->UPLOADED_ON); ?>
	<br />

	*/ ?>

</div>