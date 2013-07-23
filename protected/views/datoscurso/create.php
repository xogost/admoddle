<?php
/* @var $this DatoscursoController */
/* @var $model Datoscurso */

$this->breadcrumbs=array(
	'Datoscursos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Datoscurso', 'url'=>array('index')),
	array('label'=>'Manage Datoscurso', 'url'=>array('admin')),
);
?>

<h1>Create Datoscurso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>