<?php
$this->pageCaption='Ciclo';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar ciclo';
$this->breadcrumbs=array(
	'Ciclo',
);

$this->menu=array(
	array('label'=>'Crear Ciclo', 'url'=>array('create')),
	array('label'=>'Administrar Ciclo', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
