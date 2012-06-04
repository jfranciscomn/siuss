<?php
$this->pageCaption='Create CategoriaServicio';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo categoriaservicio';
$this->breadcrumbs=array(
	'Categoria Servicio'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Categoría Servicio', 'url'=>array('index')),
	array('label'=>'Administrar Categoría Servicio', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>