<?php
$this->pageCaption='Create Alergias';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new alergias';
$this->breadcrumbs=array(
	'Alergias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Alergias', 'url'=>array('index')),
	array('label'=>'Administrar Alergias', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>