<?php
$this->pageCaption='Actualizar CategoriaBeca '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Categoria Beca'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Categoría Beca', 'url'=>array('index')),
	array('label'=>'Crear Categoría Beca', 'url'=>array('create')),
	array('label'=>'Ver Categoría Beca', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Categoría Beca', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>