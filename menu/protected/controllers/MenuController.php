<?php

class MenuController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		/* return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		); */
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','delete'),
				'users'=>array('*'),
			),
			/* array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			), */
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView()
	{
	    $model=new Functions('search');;
		/* $arr_query = array (
		        'criteria' => array (
		                'order'=>'sort',
		        )
		); */
		$model->unsetAttributes();  // clear any default values
		/* $dataMenuProvider=new CActiveDataProvider('Functions',$arr_query);
		$data_menu = $dataMenuProvider->getData(); 
		  */
		
		//var_dump($model);exit();
		$dataProvider = $model->search();
		$this->renderPartial('view',array(
			'dataProvider'=>$dataProvider,
		   // 'data_menu'=>$data_menu,
		));;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Functions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
		if(isset($_POST['Functions']))
		{
		    $_POST['Functions']['status']='1';
			$model->attributes=$_POST['Functions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->func_id));
		}

		$arr_query = array (
		        'criteria' => array (
		                'condition' => 'is_menu=1 and status=1',
		                'order'=>'sort',
		        )
		);
		
		$dataMenuProvider=new CActiveDataProvider('Functions',$arr_query);
		$data_menu = $dataMenuProvider->getData(); 
		$this->renderPartial('create',array(
			'model'=>$model,
		    'data_menu'=>$data_menu,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Functions']))
		{
			$model->attributes=$_POST['Functions'];
			if($model->save())
				$this->redirect(array('view'));
		}

		$arr_query = array (
		        'criteria' => array (
		                'condition' => 'is_menu=1 and status=1',
		                'order'=>'sort',
		        )
		);
		
		
		$dataMenuProvider=new CActiveDataProvider('Functions',$arr_query);
		$data_menu = $dataMenuProvider->getData();
		$this->renderPartial('update',array(
		        'model'=>$model,
		        'data_menu'=>$data_menu,
		));
		
		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
	    //echo 'TTTT';exit;
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('menu/view'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $arr_query = array (
                'criteria' => array (
                        'condition' => 'status=1',
                        'order'=>'sort',
                ) 
        );
		$dataProvider=new CActiveDataProvider('Functions',$arr_query);
		
		$this->renderPartial('index',array(
			'dataProvider'=>$dataProvider,
		));  
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Functions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Functions']))
			$model->attributes=$_GET['Functions'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Functions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='functions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
