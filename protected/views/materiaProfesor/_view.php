<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_materia_profesor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_materia_profesor),array('view','id'=>$data->id_materia_profesor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_profesor')); ?>:</b>
	<?php echo CHtml::encode($data->fk_profesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_materia')); ?>:</b>
	<?php echo CHtml::encode($data->fk_materia); ?>
	<br />


</div>