<?php
/* @var $this SalonController */
/* @var $data Salon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_salon')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_salon), array('view', 'id'=>$data->id_salon)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_materia_profesor')); ?>:</b>
	<?php echo CHtml::encode($data->fk_materia_profesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_salon')); ?>:</b>
	<?php echo CHtml::encode($data->numero_salon); ?>
	<br />


</div>