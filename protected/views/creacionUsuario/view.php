<?php
$this->breadcrumbs=array(
	'Creacion Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CreacionUsuario', 'url'=>array('index')),
	array('label'=>'Create CreacionUsuario', 'url'=>array('create')),
	array('label'=>'Update CreacionUsuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CreacionUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CreacionUsuario', 'url'=>array('admin')),
);
?>

<h1>View CreacionUsuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nro_identificacion',
		'nombres',
		'correo_electronico',
		'programa_academico',
		'perfil_usuario',
	),
)); ?>
