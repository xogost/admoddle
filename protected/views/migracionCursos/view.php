<?php
$this->breadcrumbs=array(
	'Migracion Cursoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MigracionCursos', 'url'=>array('index')),
	array('label'=>'Create MigracionCursos', 'url'=>array('create')),
	array('label'=>'Update MigracionCursos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MigracionCursos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MigracionCursos', 'url'=>array('admin')),
);
?>

<h1>View MigracionCursos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_curso',
		'nombre_docente',
		'documento_identidad',
		'correo_institucional',
	),
)); ?>
