<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('alergia_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->alergia_id), array('view', 'id'=>$data->alergia_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus_id')); ?>:</b>
	<?php echo CHtml::encode($data->estatus_id); ?>
	<br />


</div>