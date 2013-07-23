<?php
/* @var $this DatoscursoController */
/* @var $data Datoscurso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombredocente')); ?>:</b>
	<?php echo CHtml::encode($data->nombredocente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentoidentidad')); ?>:</b>
	<?php echo CHtml::encode($data->documentoidentidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correoinstitucional')); ?>:</b>
	<?php echo CHtml::encode($data->correoinstitucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subcategoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->subcategoria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plantilla_id')); ?>:</b>
	<?php echo CHtml::encode($data->plantilla_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programa_id')); ?>:</b>
	<?php echo CHtml::encode($data->programa_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreasignatura')); ?>:</b>
	<?php echo CHtml::encode($data->nombreasignatura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoasignatura')); ?>:</b>
	<?php echo CHtml::encode($data->codigoasignatura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechainicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechainicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numerotemas')); ?>:</b>
	<?php echo CHtml::encode($data->numerotemas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numerosemanas')); ?>:</b>
	<?php echo CHtml::encode($data->numerosemanas); ?>
	<br />

	*/ ?>

</div>