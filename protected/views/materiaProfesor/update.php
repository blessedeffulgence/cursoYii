<?php
$this->breadcrumbs=array(
	'Materia Profesors'=>array('index'),
	$model->id_materia_profesor=>array('view','id'=>$model->id_materia_profesor),
	'Update',
);

	$this->menu=array(
	array('label'=>'List MateriaProfesor','url'=>array('index')),
	array('label'=>'Create MateriaProfesor','url'=>array('create')),
	array('label'=>'View MateriaProfesor','url'=>array('view','id'=>$model->id_materia_profesor)),
	array('label'=>'Manage MateriaProfesor','url'=>array('admin')),
	);
	?>

	<h1>Update MateriaProfesor <?php echo $model->id_materia_profesor; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>