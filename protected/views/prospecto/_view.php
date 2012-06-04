	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->apellidoPaterno); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->apellidoMaterno); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->preparatoria->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->telefono); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->email); ?>
		</td>
		<?php /*
		<td>
			<?php echo CHtml::encode($data->referenciaBancaria); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->promedio); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->direccion); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->ciudad_id); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->estatus_id); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->codigoPostal); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->edad); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaNacimiento); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->celular); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->sexo); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombrePadre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreMadre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->telefonoPadre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->telefonoMadre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoInstitucion_id); ?>
		</td>
		*/ ?>
	</tr>