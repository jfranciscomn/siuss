<?php
$this->pageCaption='Ciclo';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='crear nuevo';
$this->breadcrumbs=array(
	'Ciclo'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Ciclo', 'url'=>array('index')),
	array('label'=>'Administrar Ciclo', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>