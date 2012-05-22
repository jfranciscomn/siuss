	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->estatus_id), array('view', 'id'=>$data->estatus_id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->catalogo); ?>
		</td>
	</tr>