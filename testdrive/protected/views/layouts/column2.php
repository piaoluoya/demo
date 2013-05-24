<?php /* @var $this Controller */ ?>
<?php 
$this->beginContent('//layouts/main');  //将下面的内容替换文件/protected/views/layouts/main.php 中$content
?>
<div class="span-19">
	<div id="content">
		<?php 
		echo $content; //输出来自/protected/views/user/index.php 内容
		?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu, //$this->menu 来自/protected/views/user/index.php
			'htmlOptions'=>array('class'=>'operations'),  //为显示的html标签上添加 class="operations"
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>
