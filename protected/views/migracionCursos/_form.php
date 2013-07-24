<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'migracion-cursos-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_curso'); ?>
		<?php echo $form->textField($model,'nombre_curso',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_docente'); ?>
		<?php echo $form->textField($model,'nombre_docente',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_docente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documento_identidad'); ?>
		<?php echo $form->textField($model,'documento_identidad'); ?>
		<?php echo $form->error($model,'documento_identidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_institucional'); ?>
		<?php echo $form->textField($model,'correo_institucional',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'correo_institucional'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->