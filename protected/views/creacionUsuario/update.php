<?php
$this->breadcrumbs=array(
	'Creacion Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CreacionUsuario', 'url'=>array('index')),
	array('label'=>'Create CreacionUsuario', 'url'=>array('create')),
	array('label'=>'View CreacionUsuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CreacionUsuario', 'url'=>array('admin')),
);
?>

<h1>Update CreacionUsuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>