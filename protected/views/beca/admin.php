<?php
$this->pageCaption='Administrar Beca';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Beca'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Beca', 'url'=>array('index')),
	array('label'=>'Crear Beca', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beca-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'beca-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		'nombre',
		'porcentaje',
		array('name'=>'categoriabeca',
		'value'=>'$data->categoriabeca->nombre',
		),
		'promedioInicial',
		'promedioFinal',
		array('name'=>'estatus',
		'value'=>'$data->estatus->nombre',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>