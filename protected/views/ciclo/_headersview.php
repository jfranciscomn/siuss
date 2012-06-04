<table class="table table-bordered table-striped">
	<tr>
		<td class='span2'>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicial')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFinal')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('estatus_id')); ?></b>
		</td>
	</tr>