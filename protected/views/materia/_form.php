<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'materia-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php
    // Set up several flashes
    // (this should be done somewhere in controller, of course).
    $user = Yii::app()->getComponent('user');
    $user->setFlash(
    'success',
    "<strong>Bienvenido!</strong> al modulo de materias."
    );
    $user->setFlash(
    'info',
    "<strong>Heads up!</strong> I'm a valuable information!."
    );
    $user->setFlash(
    'warning',
    "<strong>Warning!</strong> Check yourself, you're not looking too good."
    );
    $user->setFlash(
    'error',
    '<strong>Oh snap!</strong> Change something and try submitting again.'
    );
     
    // Render them all with single `TbAlert`
    $this->widget('bootstrap.widgets.TbAlert', array(
    'block' => true,
    'fade' => true,
    'closeText' => '&times;', // false equals no close link
    'events' => array(),
    'htmlOptions' => array(),
    'userComponentId' => 'user',
    'alerts' => array( // configurations per alert type
    // success, info, warning, error or danger
    'success' => array('closeText' => '&times;'),
    'info', // you don't need to specify full config
    'warning' => array('block' => false, 'closeText' => false),
    'error' => array('block' => false, 'closeText' => 'AAARGHH!!')
    ),
    ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombre_materia',array('class'=>'span5','maxlength'=>250, 'title' => 'Indique el nombre de su materia', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'class' => 'span10')); ?>

	<?php echo $form->textFieldRow($model,'carga_academica',array('class'=>'span5')); ?>

	 <?php //echo $form->radioButtonRow($model, 'activo'); ?>
	 <?php echo $form->radioButtonListRow(
	 $model,
	'activo',
	array(
	'Si',
	'No',
	)
); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
