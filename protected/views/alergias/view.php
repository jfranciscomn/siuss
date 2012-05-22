<?php
$this->pageCaption='View Alergias #'.$model->alergia_id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Alergias'=>array('index'),
	$model->alergia_id,
);

$this->menu=array(
	array('label'=>'Listar Alergias', 'url'=>array('index')),
	array('label'=>'Crear Alergias', 'url'=>array('create')),
	array('label'=>'Actualizar Alergias', 'url'=>array('update', 'id'=>$model->alergia_id)),
	array('label'=>'Eliminar Alergias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->alergia_id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Alergias', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'alergia_id',
		'nombre',
		'estatus_id',
	),
)); ?>
