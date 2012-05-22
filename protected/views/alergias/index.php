<?php
$this->pageCaption='Alergias';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all alergias';
$this->breadcrumbs=array(
	'Alergias',
);

$this->menu=array(
	array('label'=>'Crear Alergias', 'url'=>array('create')),
	array('label'=>'Administrar Alergias', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
