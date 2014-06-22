<?php

class AdminflashController extends AdminController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	// public function filters()
	// {
	// 	return array(
	// 		'accessControl', // perform access control for CRUD operations
	// 		'postOnly + delete', // we only allow deletion via POST request
	// 	);
	// }

	// /**
	//  * Specifies the access control rules.
	//  * This method is used by the 'accessControl' filter.
	//  * @return array access control rules
	//  */
	// public function accessRules()
	// {
	// 	return array(
	// 		array('allow',  // allow all users to perform 'index' and 'view' actions
	// 			'actions'=>array('index','view'),
	// 			'users'=>array('*'),
	// 		),
	// 		array('allow', // allow authenticated user to perform 'create' and 'update' actions
	// 			'actions'=>array('create','update'),
	// 			'users'=>array('@'),
	// 		),
	// 		array('allow', // allow admin user to perform 'admin' and 'delete' actions
	// 			'actions'=>array('admin','delete'),
	// 			'users'=>array('admin'),
	// 		),
	// 		array('deny',  // deny all users
	// 			'users'=>array('*'),
	// 		),
	// 	);
	// }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Flash;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Flash']))
		{
			$model->attributes=$_POST['Flash'];
			 if($_FILES && !empty($_FILES['Flash']['type']['image'])){
                $name = $_FILES['Flash']['name']['image'];
                $type = $_FILES['Flash']['type']['image'];
                $tmp_name = $_FILES['Flash']['tmp_name']['image'];
                $Flash_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Flash_icon_save_name) && ($Flash_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Flash_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image = $is_img_moved;
                    }else{
                        $this->_setErrorFlash('图片上传失败,请检查服务器相应目录,是否有写入权限');
                    }
                }
            }else{
                echo "你还没有上传图片";
            }
            if ($model->validate()) {
    			if($model->save())
    				$this->redirect(array('view','id'=>$model->id));
		}
        Service::addLog(Yii::app()->user->id.'新建falsh 图片，内容是：'.json_encode($_POST['Flash']));
            }
		$this->render('create',array(
			'model'=>$model,
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
		$old_image = $model->image;
        $model_info = $model;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Flash']))
		{
			$model->attributes=$_POST['Flash'];
			 if($_FILES && !empty($_FILES['Flash']['type']['image'])){
                $name = $_FILES['Flash']['name']['image'];
                $type = $_FILES['Flash']['type']['image'];
                $tmp_name = $_FILES['Flash']['tmp_name']['image'];
                $Flash_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Flash_icon_save_name) && ($Flash_icon_save_name['code'] == 0)){
                    // echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Flash_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image = $is_img_moved;
                        unlink(dirname(Yii::app()->BasePath).$old_image);
                    }else{
                        $this->_setErrorFlash('图片上传失败,请检查服务器相应目录,是否有写入权限');
                    }
                }
            }else{
                $model->image = $old_image;
            }
			if($model->save())
             Service::addLog(Yii::app()->user->id.'更新falsh 图片，有：'.json_encode($model_info).' 更该为：'.json_encode($model->attributes));
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model_info = $this->loadModel($id);
        $model_info->delete();
        Service::addLog(Yii::app()->user->id.'删除falsh 图片，内容是：'.json_encode($model_info->attributes));

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Flash');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Flash('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Flash']))
			$model->attributes=$_GET['Flash'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Flash the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Flash::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Flash $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='flash-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
