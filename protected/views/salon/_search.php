<?php
/* @var $this SalonController */
/* @var $model Salon */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_salon'); ?>
		<?php echo $form->textField($model,'id_salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_materia_profesor'); ?>
		<?php echo $form->textField($model,'fk_materia_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_salon'); ?>
		<?php echo $form->textField($model,'numero_salon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->