<?php
$this->breadcrumbs=array(
	'Migracion Cursoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MigracionCursos', 'url'=>array('index')),
	array('label'=>'Create MigracionCursos', 'url'=>array('create')),
	array('label'=>'View MigracionCursos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MigracionCursos', 'url'=>array('admin')),
);
?>

<h1>Update MigracionCursos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>