<?php
$this->pageCaption='Ver Preparatoria #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Preparatoria'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Preparatoria', 'url'=>array('index')),
	array('label'=>'Crear Preparatoria', 'url'=>array('create')),
	array('label'=>'Actualizar Preparatoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Preparatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Preparatoria', 'url'=>array('admin')),
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