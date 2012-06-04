<?php
$this->pageCaption='Create Prospecto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo prospecto';
$this->breadcrumbs=array(
	'Prospecto'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Prospecto', 'url'=>array('index')),
	array('label'=>'Administrar Prospecto', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>