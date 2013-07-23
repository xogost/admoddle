<?php
/* @var $this DatoscursoController */
/* @var $model Datoscurso */
/* @var $form CActiveForm */
?>

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
		<?php echo $form->label($model,'nombredocente'); ?>
		<?php echo $form->textField($model,'nombredocente',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentoidentidad'); ?>
		<?php echo $form->textField($model,'documentoidentidad',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correoinstitucional'); ?>
		<?php echo $form->textField($model,'correoinstitucional',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subcategoria_id'); ?>
		<?php echo $form->textField($model,'subcategoria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plantilla_id'); ?>
		<?php echo $form->textField($model,'plantilla_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'programa_id'); ?>
		<?php echo $form->textField($model,'programa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreasignatura'); ?>
		<?php echo $form->textField($model,'nombreasignatura',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoasignatura'); ?>
		<?php echo $form->textField($model,'codigoasignatura',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechainicio'); ?>
		<?php echo $form->textField($model,'fechainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numerotemas'); ?>
		<?php echo $form->textField($model,'numerotemas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numerosemanas'); ?>
		<?php echo $form->textField($model,'numerosemanas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->