<?php
$this->breadcrumbs=array(
	'Materia Profesors'=>array('index'),
	$model->id_materia_profesor,
);

$this->menu=array(
array('label'=>'List MateriaProfesor','url'=>array('index')),
array('label'=>'Create MateriaProfesor','url'=>array('create')),
array('label'=>'Update MateriaProfesor','url'=>array('update','id'=>$model->id_materia_profesor)),
array('label'=>'Delete MateriaProfesor','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_materia_profesor),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage MateriaProfesor','url'=>array('admin')),
);
?>

<h1>View MateriaProfesor #<?php echo $model->id_materia_profesor; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_materia_profesor',
		'fk_profesor',
		'fk_materia',
),
)); ?>
