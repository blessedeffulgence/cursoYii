<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_profesor'); ?>
		<?php echo $form->textField($model,'nombre_profesor',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nombre_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_identidad'); ?>
		<?php echo $form->textField($model,'cedula_identidad'); ?>
		<?php echo $form->error($model,'cedula_identidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->checkBox($model,'genero'); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->