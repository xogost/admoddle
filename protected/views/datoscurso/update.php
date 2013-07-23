<?php
/* @var $this DatoscursoController */
/* @var $model Datoscurso */

$this->breadcrumbs=array(
	'Datoscursos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Datoscurso', 'url'=>array('index')),
	array('label'=>'Create Datoscurso', 'url'=>array('create')),
	array('label'=>'View Datoscurso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Datoscurso', 'url'=>array('admin')),
);
?>

<h1>Update Datoscurso <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>