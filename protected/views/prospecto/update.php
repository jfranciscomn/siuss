<?php
$this->pageCaption='Actualizar Prospecto '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Prospecto'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Prospecto', 'url'=>array('index')),
	array('label'=>'Crear Prospecto', 'url'=>array('create')),
	array('label'=>'Ver Prospecto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Prospecto', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>