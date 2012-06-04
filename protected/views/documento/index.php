<?php
$this->pageCaption='Documento';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar documento';
$this->breadcrumbs=array(
	'Documento',
);

$this->menu=array(
	array('label'=>'Crear Documento', 'url'=>array('create')),
	array('label'=>'Administrar Documento', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
