<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'apellidoPaterno'); ?>
		<div class="input">
			<?php echo $form->textField($model,'apellidoPaterno',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'apellidoMaterno'); ?>
		<div class="input">
			<?php echo $form->textField($model,'apellidoMaterno',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'preparatoria_id'); ?>
		<div class="input">
			<?php echo $form->dropDownList($model,'preparatoria_id',CHtml::listData(Preparatoria::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'telefono'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'referenciaBancaria'); ?>
		<div class="input">
			<?php echo $form->textField($model,'referenciaBancaria'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'promedio'); ?>
		<div class="input">
			<?php echo $form->textField($model,'promedio',array('size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'direccion'); ?>
		<div class="input">
			<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ciudad_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'ciudad_id',array('size'=>11,'maxlength'=>11)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'estatus_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'estatus_id',array('size'=>11,'maxlength'=>11)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'codigoPostal'); ?>
		<div class="input">
			<?php echo $form->textField($model,'codigoPostal',array('size'=>5,'maxlength'=>5)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'edad'); ?>
		<div class="input">
			<?php echo $form->textField($model,'edad'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fechaNacimiento'); ?>
		<div class="input">
			<?php echo $form->textField($model,'fechaNacimiento'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'celular'); ?>
		<div class="input">
			<?php echo $form->textField($model,'celular',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'sexo'); ?>
		<div class="input">
			<?php echo $form->textField($model,'sexo',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombrePadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nombrePadre',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreMadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nombreMadre',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'telefonoPadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefonoPadre'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'telefonoMadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefonoMadre'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'tipoInstitucion_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tipoInstitucion_id',array('size'=>11,'maxlength'=>11)); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->