<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'ciclo-form',
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

	<div class="<?php echo $form->fieldClass($model, 'fechaInicial'); ?>">
		<?php echo $form->labelEx($model,'fechaInicial'); ?>
		<div class="input">
			<?php
				if ($model->fechaInicial!='') {
					$model->fechaInicial=date('d-m-Y',strtotime($model->fechaInicial));
				}
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'fechaInicial',
					'value'=>$model->fechaInicial,
					'language' => 'es',
					'htmlOptions' => array('readonly'=>"readonly"),
					'options'=>array(
						'autoSize'=>true,
						'defaultDate'=>$model->fechaInicial,
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
						'minDate'=>"-20Y", //fecha minima
						'maxDate'=> "+20Y", //fecha maxima
					),
			)); ?>
			<?php echo $form->error($model,'fechaInicial'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaFinal'); ?>">
		<?php echo $form->labelEx($model,'fechaFinal'); ?>
		<div class="input">
			<?php
				if ($model->fechaFinal!='') {
					$model->fechaFinal=date('d-m-Y',strtotime($model->fechaFinal));
				}
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'fechaFinal',
					'value'=>$model->fechaFinal,
					'language' => 'es',
					'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
					'autoSize'=>true,
					'defaultDate'=>$model->fechaFinal,
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
					'minDate'=>'-20Y', //fecha minima
				'maxDate'=> "+20Y", //fecha maxima
				),
			)); ?>
			<?php echo $form->error($model,'fechaFinal'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estatus_id'); ?>">
		<?php echo $form->labelEx($model,'estatus_id'); ?>
		<div class="input">
			<?php echo $form->dropDownList($model,'estatus_id',CHtml::listData(Estatus::model()->findAll(),'id','nombre')); ?>
			<?php echo $form->error($model,'estatus_id'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->