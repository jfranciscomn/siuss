<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/application.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114x114.png">
	
	<script>
		function abre(sender){

		        var parent = sender.parentNode;

		        var children = parent.getElementsByTagName('li');

		        for(i=0;i<children.length;i++){
		            if(children[i].parentNode==parent && children[i].className.toLowerCase()=="dropdown open".toLowerCase())
		                children[i].setAttribute("class", "dropdown");
		        }
		        sender.setAttribute("class", "dropdown open");
		    }
	</script>
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="<?php echo $this->createAbsoluteUrl('//'); ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
						<?php $this->widget('ext.custom.widgets.BMenu',array(
							'items'=>array(
								array('label'=>'Inicio', 'url'=>array('/site/index')),
								array('label'=>'Catálogos', 
									'url'=>'#',
									'itemOptions'=>array('class'=>'dropdown','id'=>'home'),
									'linkOptions'=>array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown'),
									'submenuOptions'=>array('class'=>'dropdown-menu'),
									'items'=>array(
										array('label'=>'Estados', 'url'=>array('/estado/index'),),
										array('label'=>'Ciudades', 'url'=>array('/ciudad/index')),
										array('label'=>'Preparatorias', 'url'=>array('/preparatoria/index')),
										array('label'=>'Ciclos', 'url'=>array('/ciclo/index')),
										array('label'=>'Categoría Servicio', 'url'=>array('/categoriaservicio/index')),
										array('label'=>'Servicio', 'url'=>array('/servicio/index')),
										array('label'=>'Categoría Beca', 'url'=>array('/categoriabeca/index')),
										array('label'=>'Becas', 'url'=>array('/beca/index')),
										array('label'=>'Prospecto', 'url'=>array('/prospecto/index')),
									),
								),
								array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contacto', 'url'=>array('/site/contact')),
								array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							),
							 'activateParents'=>true,
							'activeCssClass'=>'',
							'htmlOptions'=>array(
								'class'=>'nav nav-pills',
							),
						)); ?>
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>Yii::app()->user->name, 'url'=>array('site/profile'), 'visible'=>!Yii::app()->user->isGuest),
							array(
								'label'=>'Cerrar Sesión', 
								'url'=>array('/site/logout'), 
								'visible'=>!Yii::app()->user->isGuest, 
								'htmlOptions'=>array('class'=>'btn'))
						),
						'htmlOptions'=>array(
							'class'=>'nav pull-right',
						),
					)); ?>
			</div>
		</div>
	</div>
	
	<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('BBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>' / ',
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	</div>
	
	<?php echo $content; ?>
	
	<footer class="footer">
		<div class="container">
			<p>Copyright &copy; <?php echo date('Y'); ?> by Universidad San Sebastián.<br/>
			Todos los derechos reservados.<br/>
			<?php echo Yii::powered(); ?></p>
		</div>
	</footer>
</body>
</html>