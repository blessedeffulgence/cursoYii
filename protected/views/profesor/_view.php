<?php
/* @var $this ProfesorController */
/* @var $data Profesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_profesor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_profesor), array('view', 'id'=>$data->id_profesor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_profesor')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_profesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_identidad')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_identidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />


</div>