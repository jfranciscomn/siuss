<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'documento-prospecto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>


	<?php
		for($i=0;$i< count($docs);$i++)
		{
			echo '<div class="';
			echo $form->fieldClass($models[$i], 'prospecto_id');
			echo '">';
				echo $form->labelEx($models[$i],'prospecto_id'); 
				echo '<div class="input">';
				echo $form->textField($models[$i],'prospecto_id',array('name'=>'Prospecto[nombre]','size'=>10,'maxlength'=>10));
				echo $form->error($models[$i],'prospecto_id'); 
				echo '</div>';
			echo '</div>';

			echo '<div class="';
			echo $form->fieldClass($models[$i], 'estatus_id');
			echo '">';
				echo $form->labelEx($models[$i],'estatus_id'); 
				echo '<div class="input">';
				echo $form->textField($models[$i],'estatus_id',array('name'=>'Estatuses[Estatus'.$i.'[nombre]]',
				'size'=>10,'maxlength'=>10));
				echo $form->error($models[$i],'estatus_id'); 
				echo '</div>';
			echo '</div>';
		}
	?>


	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->