<?php
$this->pageCaption='Prospecto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar prospecto';
$this->breadcrumbs=array(
	'Prospecto',
);

$this->menu=array(
	array('label'=>'Crear Prospecto', 'url'=>array('create')),
	array('label'=>'Administrar Prospecto', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
