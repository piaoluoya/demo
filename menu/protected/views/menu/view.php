<?php
/* @var $this MenuController */
/* @var $model Functions */

?>

<h2>菜单列表</h2>
<?php 
global $arr_is_menu;
$arr_is_menu = array('0'=>'不是','1'=>'不是');


function arr_is_menu($key){
    $arr_is_menu = array('0'=>'不是','1'=>'是');
    return $arr_is_menu[$key];
}

$data_menu = $dataProvider->getData();
global $arr_menu;
$arr_menu = array('0'=>'顶级菜单',);
foreach ($data_menu as $value){
    if($value->is_menu == '1'){
        $arr_menu[$value->func_id] = $value->func_name;
    }
}

function arr_menu($key){
    global $arr_menu;
    return $arr_menu[$key];
}



$this->widget('zii.widgets.grid.CGridView', array(
        //'id'=>'user-grid',
        'dataProvider'=>$dataProvider,
        //'filter'=>$model,
        'columns'=>array(
                'func_name',
                'func_url',
                array(
                        'name'=>'is_menu',
                        'value'=>'arr_is_menu($data->is_menu)',
                ), 
                
                array(
                        'name' => 'parent_func_id',
                        'value'=>'arr_menu($data->parent_func_id)',
                ),
                array(
                        'class'=>'CButtonColumn',
                        'template'=>'{update} {delete}',
                        
                ),
        ),
        'template'=>'{items}{pager}',
)); 
?>