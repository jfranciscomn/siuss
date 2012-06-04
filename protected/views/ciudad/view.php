<?php
$this->pageCaption='Ver Ciudad #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Ciudad'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
	array('label'=>'Actualizar Ciudad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Ciudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Ciudad', 'url'=>array('admin')),
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
		array(
			'name'=>'estado',
			'value'=>$model->estado->nombre
		),
	),
)); ?>
