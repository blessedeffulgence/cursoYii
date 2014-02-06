<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_materia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_materia),array('view','id'=>$data->id_materia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_materia')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carga_academica')); ?>:</b>
	<?php echo CHtml::encode($data->carga_academica); ?>
	<br />


</div>