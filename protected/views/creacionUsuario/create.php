<?php
$this->breadcrumbs=array(
	'Creacion Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CreacionUsuario', 'url'=>array('index')),
	array('label'=>'Manage CreacionUsuario', 'url'=>array('admin')),
);
?>

<h1>Create CreacionUsuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>