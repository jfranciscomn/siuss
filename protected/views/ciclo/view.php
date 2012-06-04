<?php
$this->pageCaption='Ver Ciclo #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Ciclo'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Ciclo', 'url'=>array('index')),
	array('label'=>'Crear Ciclo', 'url'=>array('create')),
	array('label'=>'Actualizar Ciclo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Ciclo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Ciclo', 'url'=>array('admin')),
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
		array('name'=>'fechaInicial', 'value'=>$fechaInicial),
		array('name'=>'fechaFinal', 'value'=>$fechaFinal),
		array(
			'name'=>'estatus',
			'value'=>$model->estatus->nombre
		),
	),
)); ?>
