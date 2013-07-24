<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->nro_identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_electronico')); ?>:</b>
	<?php echo CHtml::encode($data->correo_electronico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programa_academico')); ?>:</b>
	<?php echo CHtml::encode($data->programa_academico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perfil_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->perfil_usuario); ?>
	<br />


</div>