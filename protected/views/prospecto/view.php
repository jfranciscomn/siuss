<?php
$this->pageCaption='Ver Prospecto #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Prospecto'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Prospecto', 'url'=>array('index')),
	array('label'=>'Crear Prospecto', 'url'=>array('create')),
	array('label'=>'Actualizar Prospecto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Prospecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Prospecto', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		'apellidoPaterno',
		'apellidoMaterno',
		'preparatoria.nombre',
		'telefono',
		'email',
		'referenciaBancaria',
		'promedio',
		'direccion',
		array(
			'name'=>'ciudad',
			'value'=>$model->ciudad->nombre,
		),
		array(
			'name'=>'estatus',
			'value'=>$model->estatus->nombre,
		),
		'codigoPostal',
		'edad',
		'fechaNacimiento',
		'celular',
		'sexo',
		'nombrePadre',
		'nombreMadre',
		'telefonoPadre',
		'telefonoMadre',
		array(
			'name'=>'tipoinstitucion',
			'value'=>$model->tipoinstitucion->nombre,
		),
	),
)); ?>
