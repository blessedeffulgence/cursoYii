<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('index'),
	$model->id_profesor,
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
	array('label'=>'Update Profesor', 'url'=>array('update', 'id'=>$model->id_profesor)),
	array('label'=>'Delete Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_profesor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

<h1>View Profesor #<?php echo $model->id_profesor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_profesor',
		'nombre_profesor',
		'cedula_identidad',
		'genero',
	),
)); ?>
