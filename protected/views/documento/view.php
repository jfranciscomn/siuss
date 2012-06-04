<?php
$this->pageCaption='Ver Documento #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Documento'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Documento', 'url'=>array('index')),
	array('label'=>'Crear Documento', 'url'=>array('create')),
	array('label'=>'Actualizar Documento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Documento', 'url'=>array('admin')),
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
		'requerido',
		'estatus_id',
	),
)); ?>
