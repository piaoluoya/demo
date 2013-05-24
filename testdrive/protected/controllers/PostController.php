<?php
class PostController extends Controller
{
    
   
    
    public function actionIndex()
    {
        $connection=Yii::app()->db;
        $sql = "select * from {{post}}";
        $command = $connection->createCommand($sql);
        
        $rows=$command->query();
        //var_dump($rows);
        while(($row=$rows->read())!==false) {
            var_dump($row);
        }
/*         $sql = "insert into {{post}}(title, content) values ('c', 'ccccc')";
        $command = $connection->createCommand($sql);
        
        $rows=$command->execute(); */
        //var_dump($rows);

    }
    
    public function actionCreate()
    {
        $post=new Post;
        $post->title='sample post';
        $post->content='content for the sample post';
        $post->create_time=new CDbExpression('NOW()');
        $id = $post->save();
        echo $id;
    }
    
    public function actionFind()
    {
/*         $post=Post::model()->find('title=:title', array(':title'=>'a'));
        echo $post->content; */
        
/*         $post=Post::model()->findByPk(3);  //findByPk($postID,$condition,$params);
        echo $post->content; */
/*         
        $post=Post::model()->findByAttributes(array('title'=>'b'));  //findByAttributes($attributes,$condition,$params);
        echo $post->content; */
/*         
        $sql = "select * from {{post}} where title=:title";
        $post=Post::model()->findBySql($sql, array(':title'=>'b')); 
        echo $post->content; */
        
        $post=Post::model()->findAll();
        foreach($post as $k =>$v)
        {
            echo '内容：'.$v['content'];
        }
        
    }
    
}