<?php
/* @var $this DatoscursoController */
/* @var $model Datoscurso */
/* @var $form CActiveForm */
?>
<script>
    $(function(){
        $("#Datoscurso_subcategoria_id").change(function(){
            if($(this).val() == "1"){
                $("#nos").css("display", "none");
                $("#not").css("display", "block");
            }else{
                $("#nos").css("display", "block");
                $("#not").css("display", "none");
            }
        });
        $("#Datoscurso_subcategoria_id").trigger("change");
        
        $("#Datoscurso_fechainicio").datepicker();
    });
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datoscurso-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'nombredocente'); ?>
		<?php echo $form->textField($model,'nombredocente',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombredocente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentoidentidad'); ?>
		<?php echo $form->textField($model,'documentoidentidad',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'documentoidentidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correoinstitucional'); ?>
		<?php echo $form->textField($model,'correoinstitucional',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'correoinstitucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subcategoria_id'); ?>
		<?php echo $form->dropDownList($model,'subcategoria_id',CHtml::listData(Subcategorias::model()->findAll(),'id', 'subcategorias')); ?>
		<?php echo $form->error($model,'subcategoria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programa_id'); ?>
		<?php echo $form->dropDownList($model,'programa_id',CHtml::listData(Programas::model()->findAll(),'id', 'programa')); ?>
		<?php echo $form->error($model,'programa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreasignatura'); ?>
		<?php echo $form->textField($model,'nombreasignatura',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombreasignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoasignatura'); ?>
		<?php echo $form->textField($model,'codigoasignatura',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'codigoasignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechainicio'); ?>
		<?php echo $form->textField($model,'fechainicio'); ?>
		<?php echo $form->error($model,'fechainicio'); ?>
	</div>

	<div id="nos" style="display: none;" class="row">
		<?php echo $form->labelEx($model,'numerotemas'); ?>
		<?php echo $form->textField($model,'numerotemas'); ?>
		<?php echo $form->error($model,'numerotemas'); ?>
	</div>

	<div id="not" style="display: none;" class="row">
		<?php echo $form->labelEx($model,'numerosemanas'); ?>
		<?php echo $form->textField($model,'numerosemanas'); ?>
		<?php echo $form->error($model,'numerosemanas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->