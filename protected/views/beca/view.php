<?php
$this->pageCaption='Ver Beca #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Beca'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Beca', 'url'=>array('index')),
	array('label'=>'Crear Beca', 'url'=>array('create')),
	array('label'=>'Actualizar Beca', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Beca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Beca', 'url'=>array('admin')),
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
		'porcentaje',
		array(
			'name'=>'Categoría beca',
			'value'=>$model->categoriabeca->nombre
		),
		'promedioInicial',
		'promedioFinal',
		array(
			'name'=>'Estatus',
			'value'=>$model->estatus->nombre
		),
	),
)); ?>
