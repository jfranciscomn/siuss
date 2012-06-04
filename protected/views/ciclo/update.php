<?php
$this->pageCaption='Actualizar Ciclo '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Ciclo'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Ciclo', 'url'=>array('index')),
	array('label'=>'Crear Ciclo', 'url'=>array('create')),
	array('label'=>'Ver Ciclo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Ciclo', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>