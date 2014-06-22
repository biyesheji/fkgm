<?php

class AdminproductController extends AdminController
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
		$model=new Product;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			// 产品图片上传
			if($_FILES && !empty($_FILES['Product']['type']['image'])){
                $name = $_FILES['Product']['name']['image'];
                $type = $_FILES['Product']['type']['image'];
                $tmp_name = $_FILES['Product']['tmp_name']['image'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image = $is_img_moved;
                    }
                }
            }else{
                echo "你还没有上传图片";
            }
            // 产品介绍图片上传
            if($_FILES && !empty($_FILES['Product']['type']['introduce_image'])){
                $name = $_FILES['Product']['name']['introduce_image'];
                $type = $_FILES['Product']['type']['introduce_image'];
                $tmp_name = $_FILES['Product']['tmp_name']['introduce_image'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->introduce_image = $is_img_moved;
                    }
                }
            }else{
                echo "你还没有上传图片";
            }
            // 第一张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_1'])){
                $name = $_FILES['Product']['name']['image_1'];
                $type = $_FILES['Product']['type']['image_1'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_1'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_1 = $is_img_moved;
                    }
                }
            }else{
                echo "你还没有上传图片";
            }
            // 第二张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_2'])){
                $name = $_FILES['Product']['name']['image_2'];
                $type = $_FILES['Product']['type']['image_2'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_2'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_2 = $is_img_moved;
                    }
                }
            }else{
                echo "你还没有上传图片";
            }
            // 第三张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_3'])){
                $name = $_FILES['Product']['name']['image_3'];
                $type = $_FILES['Product']['type']['image_3'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_3'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_3 = $is_img_moved;
                    }
                }
            }else{
                echo "你还没有上传图片";
            }
            // 第四张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_4'])){
                $name = $_FILES['Product']['name']['image_4'];
                $type = $_FILES['Product']['type']['image_4'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_4'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_4 = $is_img_moved;
                    }
                }
            }else{
                echo "你还没有上传图片";
            }
            $model->created =  date('Y-m-d H:i:s',time());
			if($model->save())
                Service::addLog(Yii::app()->user->id.'添加产品，内容是：'.json_encode($model->attributes));
                $this->redirect(array('view','id'=>$model->id));
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

        if(isset($_POST['Product']))
        {
            $old_image = $model->image;
            $old_introduce_image = $model->introduce_image;
            $old_image_1 = $model->image_1;
            $old_image_2 = $model->image_2;
            $old_image_3 = $model->image_3;
            $old_image_4 = $model->image_4;
            $model->attributes=$_POST['Product'];
            // 产品图片上传
            if($_FILES && !empty($_FILES['Product']['type']['image'])){
                $name = $_FILES['Product']['name']['image'];
                $type = $_FILES['Product']['type']['image'];
                $tmp_name = $_FILES['Product']['tmp_name']['image'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image = $is_img_moved;
                        @unlink(dirname(Yii::app()->BasePath).$old_image);
                     }
                }
            }else{
                $model->image = $old_image;
                // echo "你还没有上传图片";
            }
            // var_dump($_FILES['Product']);die();
            // 产品介绍图片上传
            if($_FILES && !empty($_FILES['Product']['type']['introduce_image'])){
                $name = $_FILES['Product']['name']['introduce_image'];
                $type = $_FILES['Product']['type']['introduce_image'];
                $tmp_name = $_FILES['Product']['tmp_name']['introduce_image'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->introduce_image = $is_img_moved;
                        @unlink(dirname(Yii::app()->BasePath).$old_introduce_image);
                    }
                }
            }else{
                $model->introduce_image = $old_introduce_image;
            }
            // 第一张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_1'])){
                $name = $_FILES['Product']['name']['image_1'];
                $type = $_FILES['Product']['type']['image_1'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_1'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_1 = $is_img_moved;
                        @unlink(dirname(Yii::app()->BasePath).$old_image_1);
                    }
                }
            }else{
                $model->image_1 = $old_image_1;
            }
            // 第二张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_2'])){
                $name = $_FILES['Product']['name']['image_2'];
                $type = $_FILES['Product']['type']['image_2'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_2'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_2 = $is_img_moved;
                        @unlink(dirname(Yii::app()->BasePath).$old_image_2);
                    }
                }
            }else{
                $model->image_2 = $old_image_2;
            }
            // 第三张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_3'])){
                $name = $_FILES['Product']['name']['image_3'];
                $type = $_FILES['Product']['type']['image_3'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_3'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_3 = $is_img_moved;
                        @unlink(dirname(Yii::app()->BasePath).$old_image_3);
                    }
                }
            }else{
            $model->image_3 = $old_image_3;
            }
            // 第四张小图片
             if($_FILES && !empty($_FILES['Product']['type']['image_4'])){
                $name = $_FILES['Product']['name']['image_4'];
                $type = $_FILES['Product']['type']['image_4'];
                $tmp_name = $_FILES['Product']['tmp_name']['image_4'];
                $Product_icon_save_name = Tool::createImageSaveName($name, $type);
                if(is_array($Product_icon_save_name) && ($Product_icon_save_name['code'] == 0)){
                    echo '提示图片类型不正确';
                }else{
                    $is_img_moved = Tool::moveImageToTargetPath($Product_icon_save_name, $tmp_name, 500,600);
                    if($is_img_moved){
                        $model->image_4 = $is_img_moved;
                        @unlink(dirname(Yii::app()->BasePath).$old_image_4);
                    }
                }
            }else{
                $model->image_4 = $old_image_4;
            }
            $model->updated =  date('Y-m-d H:i:s',time());
            if($model->save())
                Service::addLog(Yii::app()->user->id.'修改产品，有：'.json_encode($model_info->attributes).' 修改为：'.json_encode($model->attributes));
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
        @unlink(dirname(Yii::app()->BasePath).$model_info->image);
        @unlink(dirname(Yii::app()->BasePath).$model_info->image_1);
        @unlink(dirname(Yii::app()->BasePath).$model_info->image_2);
        @unlink(dirname(Yii::app()->BasePath).$model_info->image_3);
        @unlink(dirname(Yii::app()->BasePath).$model_info->image_4);
        @unlink(dirname(Yii::app()->BasePath).$model_info->introduce_image);
        $model_info->delete();
        Service::addLog(Yii::app()->user->id.'删除产品，内容是：'.json_encode($model_info->attributes));

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Product the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Product $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
