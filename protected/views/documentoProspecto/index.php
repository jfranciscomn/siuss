<?php
$this->pageCaption='Documento Prospecto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar documento prospecto';
$this->breadcrumbs=array(
	'Documento Prospecto',
);

$this->menu=array(
	array('label'=>'Crear DocumentoProspecto', 'url'=>array('create')),
	array('label'=>'Administrar DocumentoProspecto', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
