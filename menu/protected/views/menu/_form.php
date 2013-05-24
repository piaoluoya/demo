<?php
/* @var $this MenuController */
/* @var $model Functions */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="js/jquery-1.7.js"></script>
<style type="text/css">
.row{margin:8px 0;}
label{width:120px;display:block;float:left;text-align:right;padding-right:7px;}
.width-150{width:200px;}
.buttons{margin-left:120px;}
</style>
<script type="text/javascript">
$().ready(function(){
   $('.row_url').hide();
   var is_menu = $('input[name="Functions[is_menu]"]:checked').val();
   if(is_menu == '0'){
       $('.row_url').show();
   }else if(is_menu == '1'){
       $('.row_url').hide();
   }
   
   $('input[name="Functions[is_menu]"]').change(function(){
      var is_menu = $('input[name="Functions[is_menu]"]:checked').val();
      if(is_menu == '0'){
          $('.row_url').show();
      }else if(is_menu == '1'){
          $('.row_url').hide();
      }
   });
   
});
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'functions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'is_menu'); ?>
		<?php echo $form->radioButtonList($model,'is_menu',array('1'=>'是','0'=>'否'),array('separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;',  'labelOptions'=>array('style'=>'display:inline;float:none;'))); ?>
		<?php echo $form->error($model,'is_menu'); ?>
	</div>
	<div class="row row_url">
		<?php echo $form->labelEx($model,'func_url'); ?>
		<?php echo $form->textField($model,'func_url',array('size'=>60,'maxlength'=>100,'class'=>'width-150')); ?>
		<?php echo $form->error($model,'func_url'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'func_name'); ?>
		<?php echo $form->textField($model,'func_name',array('size'=>50,'maxlength'=>50,'class'=>'width-150')); ?>
		<?php echo $form->error($model,'func_name'); ?>
	</div>

	
   
	<div class="row">
		<?php echo $form->labelEx($model,'parent_func_id'); 
		$arr_menu = array('0'=>'顶级菜单');
		foreach ($data_menu as $value){
		    $arr_menu[$value->func_id] = $value->func_name;
		}
		//var_dump($arr_menu);
		
		?>
		<?php echo $form->dropDownList($model,'parent_func_id', $arr_menu,array('class'=>'width-150')); ?>
		<?php echo $form->error($model,'parent_func_id'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort',array('class'=>'width-150')); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->