<?php
$this->breadcrumbs=array(
	'Migracion Cursoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MigracionCursos', 'url'=>array('index')),
	array('label'=>'Manage MigracionCursos', 'url'=>array('admin')),
);
?>

<h1>Create MigracionCursos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>