<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_profesor'); ?>
		<?php echo $form->textField($model,'id_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_profesor'); ?>
		<?php echo $form->textField($model,'nombre_profesor',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_identidad'); ?>
		<?php echo $form->textField($model,'cedula_identidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero'); ?>
		<?php echo $form->checkBox($model,'genero'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->