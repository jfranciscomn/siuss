<?php
$this->pageCaption='Actualizar CategoriaServicio '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Categoria Servicio'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Categoría Servicio', 'url'=>array('index')),
	array('label'=>'Crear Categoría Servicio', 'url'=>array('create')),
	array('label'=>'Ver Categoría Servicio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Categoría Servicio', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>