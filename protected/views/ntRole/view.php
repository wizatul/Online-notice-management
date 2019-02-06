

<h1> Role Created<?php //echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DESCRIPTION',
		'ID',
		//'CREATED_BY',
		'CREATED_ON',
	),
)); ?>
