<?php
$this->pageCaption='Create Preparatoria';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo preparatoria';
$this->breadcrumbs=array(
	'Preparatoria'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Preparatoria', 'url'=>array('index')),
	array('label'=>'Administrar Preparatoria', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>