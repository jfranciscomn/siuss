<?php
$this->pageCaption='Beca';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar beca';
$this->breadcrumbs=array(
	'Beca',
);

$this->menu=array(
	array('label'=>'Crear Beca', 'url'=>array('create')),
	array('label'=>'Administrar Beca', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
