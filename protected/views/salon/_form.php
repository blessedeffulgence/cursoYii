<?php
/* @var $this SalonController */
/* @var $model Salon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salon-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_materia_profesor'); ?>
		<?php echo $form->textField($model,'fk_materia_profesor'); ?>
		<?php echo $form->error($model,'fk_materia_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_salon'); ?>
		<?php echo $form->textField($model,'numero_salon'); ?>
		<?php echo $form->error($model,'numero_salon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->