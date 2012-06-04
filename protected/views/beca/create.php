<?php
$this->pageCaption='Create Beca';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo beca';
$this->breadcrumbs=array(
	'Beca'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Beca', 'url'=>array('index')),
	array('label'=>'Administrar Beca', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>