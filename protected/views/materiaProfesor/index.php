<?php
$this->breadcrumbs=array(
	'Materia Profesors',
);

$this->menu=array(
array('label'=>'Create MateriaProfesor','url'=>array('create')),
array('label'=>'Manage MateriaProfesor','url'=>array('admin')),
);
?>

<h1>Materia Profesors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
