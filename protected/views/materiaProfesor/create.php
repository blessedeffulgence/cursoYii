<?php
$this->breadcrumbs=array(
	'Materia Profesors'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MateriaProfesor','url'=>array('index')),
array('label'=>'Manage MateriaProfesor','url'=>array('admin')),
);
?>

<h1>Create MateriaProfesor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>