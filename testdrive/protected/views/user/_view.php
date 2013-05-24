<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
	<b><?php 
	//$data->getAttributeLabel('id') 获取user表id字段的标签名，这标签名是在user表的Model文件里字义的
	echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php 
	//CHtml::link()创建<a>标签的方法，$data->id是取出来的id字段的值
	echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>
