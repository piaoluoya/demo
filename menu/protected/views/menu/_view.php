<?php
/* @var $this MenuController */
/* @var $data Functions */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('func_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->func_id), array('view', 'id'=>$data->func_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('func_name')); ?>:</b>
	<?php echo CHtml::encode($data->func_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('func_url')); ?>:</b>
	<?php echo CHtml::encode($data->func_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_menu')); ?>:</b>
	<?php echo CHtml::encode($data->is_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('func_dir')); ?>:</b>
	<?php echo CHtml::encode($data->func_dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_func_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_func_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />
</div>