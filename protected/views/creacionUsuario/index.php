<?php
$this->breadcrumbs=array(
	'Creacion Usuarios',
);

$this->menu=array(
	array('label'=>'Create CreacionUsuario', 'url'=>array('create')),
	array('label'=>'Manage CreacionUsuario', 'url'=>array('admin')),
);
?>

<h1>Creacion Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
