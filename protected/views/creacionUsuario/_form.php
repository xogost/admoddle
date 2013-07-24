<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'creacion-usuario-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_identificacion'); ?>
		<?php echo $form->textField($model,'nro_identificacion'); ?>
		<?php echo $form->error($model,'nro_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_electronico'); ?>
		<?php echo $form->textField($model,'correo_electronico',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'correo_electronico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programa_academico'); ?>
		<?php echo $form->textField($model,'programa_academico',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'programa_academico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perfil_usuario'); ?>
		<?php echo $form->textField($model,'perfil_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'perfil_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->