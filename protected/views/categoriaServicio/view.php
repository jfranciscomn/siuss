<?php
$this->pageCaption='Ver CategoriaServicio #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Categoria Servicio'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Categoría Servicio', 'url'=>array('index')),
	array('label'=>'Crear Categoría Servicio', 'url'=>array('create')),
	array('label'=>'Actualizar Categoría Servicio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Categoría Servicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Categoria Servicio', 'url'=>array('admin')),
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
		array(
			'name'=>'estatus',
			'value'=>$model->estatus->nombre
		),
	),
)); ?>