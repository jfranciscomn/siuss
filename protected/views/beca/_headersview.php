<table class="table table-bordered table-striped">
	<tr>
		<td class='span2'>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('Categoría Beca')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('promedioInicial')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('promedioFinal')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('estatus_id')); ?></b>
		</td>
	</tr>