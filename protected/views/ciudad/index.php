<?php
$this->pageCaption='Ciudad';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar ciudad';
$this->breadcrumbs=array(
	'Ciudad',
);

$this->menu=array(
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
	array('label'=>'Administrar Ciudad', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
