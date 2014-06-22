<?php
class IndexController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/fkgm';
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

	/**by the 'accessControl' filter.
	 * @return array access control rules
	 */
	 //* Specifies the access control rules.
	 //* This method is used
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
	public function actionIndex()
	{
		// throw new Exception("Error Processing Request", 404);
		// throw new CHttpException(404, 'The requested page does not exist.');
		$flash_result = Service::getFlsh();
		$recomment = Service::listComment();
		// d得到一个最新产品
		$criteria = new CDbCriteria;
		$criteria->order = 'id desc';
		$product_new = Product::model()->find($criteria);
		// 得到首页实力 市场配置
		$info = Service::GetVariable('index_config');
		$this->render('index',array(
			'flash_result' =>$flash_result,
			'recomment' => $recomment,
			'product_new' => $product_new,
			'info' => $info,
		));
	}

}
?>