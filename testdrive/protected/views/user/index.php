<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);


$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')), //标签内容是Create User url是当前控制器中的create方法对应的页面
	array('label'=>'Manage User', 'url'=>array('admin')),
);

?>


<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider, //$dataProvider 来自/protected/controllers/UserController.php
	'itemView'=>'_view',           //显示格式调用当前文件夹下的_view.php
)); ?>
