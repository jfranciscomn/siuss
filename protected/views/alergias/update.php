<?php
$this->pageCaption='Update Alergias '.$model->alergia_id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Alergias'=>array('index'),
	$model->alergia_id=>array('view','id'=>$model->alergia_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Alergias', 'url'=>array('index')),
	array('label'=>'Crear Alergias', 'url'=>array('create')),
	array('label'=>'Ver Alergias', 'url'=>array('view', 'id'=>$model->alergia_id)),
	array('label'=>'Administrar Alergias', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>