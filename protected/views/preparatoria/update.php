<?php
$this->pageCaption='Actualizar Preparatoria '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Preparatoria'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Preparatoria', 'url'=>array('index')),
	array('label'=>'Crear Preparatoria', 'url'=>array('create')),
	array('label'=>'Ver Preparatoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Preparatoria', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>