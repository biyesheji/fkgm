<?php

class AdminnewsController extends AdminController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	// /**
	//  * @return array action filters
	//  */
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
		$model=new News;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
		{
			$model->attributes=$_POST['News'];
            $model->tags = $_POST['News']['tags'];
            unset($model->id);
            // var_dump($_FILES);die();
            // 上传视频
             if($_FILES && !empty($_FILES['News']['type']['video'])){
                $name = $_FILES['News']['name']['video'];
                $type = $_FILES['News']['type']['video'];
                $tmp_name = $_FILES['News']['tmp_name']['video'];
                $video_icon_save_name = Tool::createVideoSaveName($name, $type);
                if (!$video_icon_save_name) {
                    Yii::app()->user->setFlash('upload_error','文件格式不正确');
                    return $this->render('create',array('model' => $model));
                }
                if(is_array($video_icon_save_name) && ($video_icon_save_name['code'] == 0)){
                    echo '提示视频类型不正确';
                }else{
                    $is_img_moved = Tool::moveVideoToTargetPath($video_icon_save_name, $tmp_name);
                    if($is_img_moved){
                        $model->video = $is_img_moved;
                    }else{
                        // $this->_setErrorFlash('视频上传失败,请检查服务器相应目录,是否有写入权限');
                    }
                }
            }else{
                // echo "你还没有上传视频";
            }

            //上传图片
             if($_FILES && !empty($_FILES['News']['type']['image'])){
                $name = $_FILES['News']['name']['image'];
                $type = $_FILES['News']['type']['image'];
                $tmp_name = $_FILES['News']['tmp_name']['image'];
                $image_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($image_icon_save_name) && ($image_icon_save_name['code'] == 0)){
                    // $this->ser($bank_icon_save_name['msg']);
                    // echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($image_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image = $is_img_moved;
                    }else{
                        // $this->_setErrorFlash('图片上传失败,请检查服务器相应目录,是否有写入权限');
                    }
                }
            }else{
                // echo "你还没有上传图片";
            }
            $model->auto = empty(Yii::app()->user->uid) ? 0 : Yii::app()->user->uid ;
            $model->createtime = date('Y-m-d H:i:s', time());
            if ($model->validate()) {
                // var_dump($model->attributes);die();
                if($model->save())
                    Service::addLog(Yii::app()->user->id.'新建新闻，内容是：'.json_encode($model->attributes));
                    $this->redirect(array('view','id'=>$model->id));
                }
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
        $model_info = $model;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['News']))
        {
            $model->attributes=$_POST['News'];
            $model->tags = $_POST['News']['tags'];
            $model->updatetime = date('Y-m-d H:i:s', time());
              //上传图片
             if($_FILES && !empty($_FILES['News']['type']['image'])){
                $name = $_FILES['News']['name']['image'];
                $type = $_FILES['News']['type']['image'];
                $tmp_name = $_FILES['News']['tmp_name']['image'];
                $image_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($image_icon_save_name) && ($image_icon_save_name['code'] == 0)){
                    // $this->ser($bank_icon_save_name['msg']);
                    // echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($image_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image = $is_img_moved;
                    }else{
                        // $this->_setErrorFlash('图片上传失败,请检查服务器相应目录,是否有写入权限');
                    }
                }
            }else{
               $model->image = $model->image;
            }

            if($model->update())
                Service::addLog(Yii::app()->user->id.'修改新闻信息，由：'.json_encode($model_info->attributes).' 修改为：'.json_encode($model->attributes));
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

        Service::addLog(Yii::app()->user->id.'删除新闻，内容是：'.json_encode($model_info->attributes));
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
		$dataProvider=new CActiveDataProvider('News');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param News $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
