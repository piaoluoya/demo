<?php
/* @var $this MenuController */
/* @var $model Functions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'func_id'); ?>
		<?php echo $form->textField($model,'func_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'func_name'); ?>
		<?php echo $form->textField($model,'func_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'func_url'); ?>
		<?php echo $form->textField($model,'func_url',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_menu'); ?>
		<?php echo $form->textField($model,'is_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'func_dir'); ?>
		<?php echo $form->textField($model,'func_dir',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_func_id'); ?>
		<?php echo $form->textField($model,'parent_func_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creation_date'); ?>
		<?php echo $form->textField($model,'creation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'change_date'); ?>
		<?php echo $form->textField($model,'change_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'changed_by'); ?>
		<?php echo $form->textField($model,'changed_by',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->