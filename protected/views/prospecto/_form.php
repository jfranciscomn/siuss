<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'prospecto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'nombre'); ?>">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'apellidoPaterno'); ?>">
		<?php echo $form->labelEx($model,'apellidoPaterno'); ?>
		<div class="input">
			<?php echo $form->textField($model,'apellidoPaterno',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'apellidoPaterno'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'apellidoMaterno'); ?>">
		<?php echo $form->labelEx($model,'apellidoMaterno'); ?>
		<div class="input">
			<?php echo $form->textField($model,'apellidoMaterno',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'apellidoMaterno'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'preparatoria_id'); ?>">
		<?php echo $form->labelEx($model,'preparatoria_id'); ?>
		<div class="input">
			<?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
				'model'=>$model,
				'attribute'=>'preparatoria_id',
				'sourceUrl'=>Yii::app()->createUrl('preparatoria/autocompletesearch'),
				'showFKField'=>false,
				'relName'=>'preparatoria', // the relation name defined above
				'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
				'options'=>array(
					'minLength'=>1,
				),
			)); ?>
			<?php echo $form->error($model,'preparatoria_id'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'telefono'); ?>">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'telefono'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'email'); ?>">
		<?php echo $form->labelEx($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'referenciaBancaria'); ?>">
		<?php echo $form->labelEx($model,'referenciaBancaria'); ?>
		<div class="input">
			<?php echo $form->textField($model,'referenciaBancaria'); ?>
			<?php echo $form->error($model,'referenciaBancaria'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'promedio'); ?>">
		<?php echo $form->labelEx($model,'promedio'); ?>
		<div class="input">
			<?php echo $form->textField($model,'promedio',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'promedio'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'direccion'); ?>">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<div class="input">
			<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>200)); ?>
			<?php echo $form->error($model,'direccion'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'ciudad_id'); ?>">
		<?php echo $form->labelEx($model,'ciudad_id'); ?>
		<div class="input">
			<?php echo $form->dropDownList($model,'ciudad_id',CHtml::listData(Ciudad::model()->findAll(),'id','nombre')); ?>
			<?php echo $form->error($model,'ciudad_id'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estatus_id'); ?>">
		<?php echo $form->labelEx($model,'estatus_id'); ?>
		<div class="input">
			<?php echo $form->dropDownList($model,'estatus_id',CHtml::listData(Estatus::model()->findAll(),'id','nombre')); ?>
			<?php echo $form->error($model,'estatus_id'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'codigoPostal'); ?>">
		<?php echo $form->labelEx($model,'codigoPostal'); ?>
		<div class="input">
			<?php echo $form->textField($model,'codigoPostal',array('size'=>5,'maxlength'=>5)); ?>
			<?php echo $form->error($model,'codigoPostal'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'edad'); ?>">
		<?php echo $form->labelEx($model,'edad'); ?>
		<div class="input">
			<?php echo $form->textField($model,'edad'); ?>
			<?php echo $form->error($model,'edad'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaNacimiento'); ?>">
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
		<div class="input">
			<?php
				if ($model->fechaNacimiento!='') {
					$model->fechaNacimiento=date('d-m-Y',strtotime($model->fechaNacimiento));
				}
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'fechaNacimiento',
					'value'=>$model->fechaNacimiento,
					'language' => 'es',
					'htmlOptions' => array('readonly'=>"readonly"),
					'options'=>array(
						'autoSize'=>true,
						'defaultDate'=>$model->fechaNacimiento,
						'dateFormat'=>'yy-mm-dd',
						'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
						'buttonImageOnly'=>true,
						'buttonText'=>'Fecha',
						'selectOtherMonths'=>true,
						'showAnim'=>'slide',
						'showButtonPanel'=>true,
						'showOn'=>'button',
						'showOtherMonths'=>true,
						'changeMonth' => 'true',
						'changeYear' => 'true',
						'minDate'=>"-70Y", //fecha minima
						'maxDate'=> "+10Y", //fecha maxima
					),
			)); ?>
			<?php echo $form->error($model,'fechaNacimiento'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'celular'); ?>">
		<?php echo $form->labelEx($model,'celular'); ?>
		<div class="input">
			<?php echo $form->textField($model,'celular',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'celular'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'sexo'); ?>">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<div class="input">
			<?php echo $form->textField($model,'sexo',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'sexo'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombrePadre'); ?>">
		<?php echo $form->labelEx($model,'nombrePadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nombrePadre',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombrePadre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreMadre'); ?>">
		<?php echo $form->labelEx($model,'nombreMadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nombreMadre',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreMadre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'telefonoPadre'); ?>">
		<?php echo $form->labelEx($model,'telefonoPadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefonoPadre'); ?>
			<?php echo $form->error($model,'telefonoPadre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'telefonoMadre'); ?>">
		<?php echo $form->labelEx($model,'telefonoMadre'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefonoMadre'); ?>
			<?php echo $form->error($model,'telefonoMadre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'tipoInstitucion_id'); ?>">
		<?php echo $form->labelEx($model,'tipoInstitucion_id'); ?>
		<div class="input">
			<?php echo $form->dropDownList($model,'tipoInstitucion_id',CHtml::listData(TipoInstitucion::model()->findAll(),'id','nombre')); ?>
			<?php echo $form->error($model,'tipoInstitucion_id'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->