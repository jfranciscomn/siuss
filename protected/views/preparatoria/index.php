<?php
$this->pageCaption='Preparatoria';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar preparatoria';
$this->breadcrumbs=array(
	'Preparatoria',
);

$this->menu=array(
	array('label'=>'Crear Preparatoria', 'url'=>array('create')),
	array('label'=>'Administrar Preparatoria', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
