<?php
$this->pageCaption='Actualizar Beca '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Beca'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Beca', 'url'=>array('index')),
	array('label'=>'Crear Beca', 'url'=>array('create')),
	array('label'=>'Ver Beca', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Beca', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>