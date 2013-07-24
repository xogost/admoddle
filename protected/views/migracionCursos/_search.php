<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_curso'); ?>
		<?php echo $form->textField($model,'nombre_curso',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_docente'); ?>
		<?php echo $form->textField($model,'nombre_docente',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documento_identidad'); ?>
		<?php echo $form->textField($model,'documento_identidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_institucional'); ?>
		<?php echo $form->textField($model,'correo_institucional',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->