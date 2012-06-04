<?php
$this->pageCaption='Ver DocumentoProspecto #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Documento Prospecto'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Documento Prospecto', 'url'=>array('index')),
	array('label'=>'Crear DocumentoProspecto', 'url'=>array('create')),
	array('label'=>'Actualizar DocumentoProspecto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar DocumentoProspecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Documento Prospecto', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'documento_id',
		'prospecto_id',
		'estatus_id',
	),
)); ?>
