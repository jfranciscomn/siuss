<?php
$this->pageCaption='Listar Categoria Beca';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Categoria Beca',
);

$this->menu=array(
	array('label'=>'Crear Categoría Beca', 'url'=>array('create')),
	array('label'=>'Administrar Categoría Beca', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
