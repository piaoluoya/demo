<?php
/* @var $this MenuController */
/* @var $dataProvider CActiveDataProvider */
?>
<link rel="stylesheet" href="css/dtree.css" type="text/css" />
<script type="text/javascript" src="js/dtree.js"></script>
<style>
#id0,#sd0{display:none;}
/*.dTreeNode:first-child{display:none;}*/
</style>
<div class="dtree">
    <script type="text/javascript">
        d = new dTree('d');
        d.add(0,-1,'委托方管理','main.php','','');
        <?php 
        $data = $dataProvider->getData();
        foreach ($data as $value){
           echo 'd.add('.CHtml::encode($value->func_id).','.CHtml::encode($value->parent_func_id).',"'.CHtml::encode($value->func_name).'","'.CHtml::encode($value->func_url).'"," ");'."\n";
        }
        ?>
        document.write(d); 
    </script>
</div>
 

