<?php
$this->pageCaption='Create DocumentoProspecto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo documentoprospecto';
$this->breadcrumbs=array(
	'Documento Prospecto'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Documento Prospecto', 'url'=>array('index')),
	array('label'=>'Administrar Documento Prospecto', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'models'=>$models,'docs'=>$docs)); ?>