<?php
$this->pageCaption='Actualizar DocumentoProspecto '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Documento Prospecto'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Documento Prospecto', 'url'=>array('index')),
	array('label'=>'Crear DocumentoProspecto', 'url'=>array('create')),
	array('label'=>'Ver DocumentoProspecto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Documento Prospecto', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>