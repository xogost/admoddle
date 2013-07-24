<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_curso')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_docente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_docente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documento_identidad')); ?>:</b>
	<?php echo CHtml::encode($data->documento_identidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_institucional')); ?>:</b>
	<?php echo CHtml::encode($data->correo_institucional); ?>
	<br />


</div>