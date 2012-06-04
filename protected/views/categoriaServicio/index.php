<?php
$this->pageCaption='Categoria Servicio';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar categoria servicio';
$this->breadcrumbs=array(
	'Categoria Servicio',
);

$this->menu=array(
	array('label'=>'Crear Categoría Servicio', 'url'=>array('create')),
	array('label'=>'Administrar Categoría Servicio', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
