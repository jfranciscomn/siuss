<?php
$this->pageCaption='Administrar Prospecto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Prospecto'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Prospecto', 'url'=>array('index')),
	array('label'=>'Crear Prospecto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('prospecto-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prospecto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		'nombre',
		'apellidoPaterno',
		'apellidoMaterno',
		array(
			'name'=>'preparatoria',
			'value'=>'$data->preparatoria->nombre'
		),
		'telefono',
		/*
		'email',
		'referenciaBancaria',
		'promedio',
		'direccion',
		'ciudad_id',
		'estatus_id',
		'codigoPostal',
		'edad',
		'fechaNacimiento',
		'celular',
		'sexo',
		'nombrePadre',
		'nombreMadre',
		'telefonoPadre',
		'telefonoMadre',
		'tipoInstitucion_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
