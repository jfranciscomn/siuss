<?php
$this->pageCaption='Ver Categoría Beca #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Categoría Beca'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Categoría Beca', 'url'=>array('index')),
	array('label'=>'Crear Categoría Beca', 'url'=>array('create')),
	array('label'=>'Actualizar Categoría Beca', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Categoría Beca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Categoría Beca', 'url'=>array('admin')),
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