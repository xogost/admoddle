<?php
$this->breadcrumbs=array(
	'Migracion Cursoses',
);

$this->menu=array(
	array('label'=>'Create MigracionCursos', 'url'=>array('create')),
	array('label'=>'Manage MigracionCursos', 'url'=>array('admin')),
);
?>

<h1>Migracion Cursoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
