<?php
/* @var $this DatoscursoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datoscursos',
);

$this->menu=array(
	array('label'=>'Create Datoscurso', 'url'=>array('create')),
	array('label'=>'Manage Datoscurso', 'url'=>array('admin')),
);
?>

<h1>Datoscursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
