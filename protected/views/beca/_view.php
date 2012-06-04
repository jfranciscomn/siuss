	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->porcentaje); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->categoriabeca->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->promedioInicial); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->promedioFinal); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->estatus->nombre); ?>
		</td>
	</tr>