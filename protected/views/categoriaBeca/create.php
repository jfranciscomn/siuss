<?php
$this->pageCaption='Crear Categoría Beca';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Categoría Beca'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Categoría Beca', 'url'=>array('index')),
	array('label'=>'Administrar Categoría Beca', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>