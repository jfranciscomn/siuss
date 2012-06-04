<?php
$this->pageCaption='Create Ciudad';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo ciudad';
$this->breadcrumbs=array(
	'Ciudad'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Administrar Ciudad', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>