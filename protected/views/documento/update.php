<?php
$this->pageCaption='Actualizar Documento '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Documento'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Documento', 'url'=>array('index')),
	array('label'=>'Crear Documento', 'url'=>array('create')),
	array('label'=>'Ver Documento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Documento', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>