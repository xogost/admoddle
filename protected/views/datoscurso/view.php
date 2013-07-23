<?php
/* @var $this DatoscursoController */
/* @var $model Datoscurso */

$this->breadcrumbs=array(
	'Datoscursos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Datoscurso', 'url'=>array('index')),
	array('label'=>'Create Datoscurso', 'url'=>array('create')),
	array('label'=>'Update Datoscurso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Datoscurso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Datoscurso', 'url'=>array('admin')),
);
?>

<h1>View Datoscurso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombredocente',
		'documentoidentidad',
		'correoinstitucional',
		'subcategoria_id',
		'plantilla_id',
		'programa_id',
		'nombreasignatura',
		'codigoasignatura',
		'fechainicio',
		'numerotemas',
		'numerosemanas',
	),
)); ?>
