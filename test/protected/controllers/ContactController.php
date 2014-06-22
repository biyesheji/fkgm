<?php
class ContactController extends Controller
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

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
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
		$contact_right = Service::GetVariable('contact');
		$Contact = new Contact;
		if (Yii::app()->request->isPostRequest) {
			$Contact->atttibtes = $_POST['Contact'];
			$comment = Service::GetVariable('comment');
			if ($comment['send']) {
				$res = Service::sendemail($username);
				if ($res) {
					$contact->send_email = 1;
				} else {
					$contact->send_email = 0;
				}
			}
			if ($comment->save()) {
				Yii::app()->setFlash('send_email','发送成功');
			} else {
				Yii::app()->setFlash('send_email','发送失败');
			}
		}
		$this->render('index',array(
			'contact' =>$Contact,
			'contact_right' => $contact_right,
		));
	}

	public function actionLeave(){
		if (Yii::app()->request->getParam('username') && Yii::app()->request->getParam('email') && Yii::app()->request->getParam('theme') && Yii::app()->request->getParam('body')) {
			$username = addslashes(trim(Yii::app()->request->getParam('username')));
			$email = addslashes(trim(Yii::app()->request->getParam('email')));
			$theme = addslashes(trim(Yii::app()->request->getParam('theme')));
			$body = addslashes(trim(Yii::app()->request->getParam('body')));
			$contact = new Contact;
			$contact->name = $username;
			$contact->email = $email;
			$contact->subject = $theme;
			$contact->message = $body;
			$contact->createtime = date('Y-m-d H:i:s',time());
			$contact->ip = Yii::app()->request->userHostAddress;
			$contact->status = 0;
			$comment = Service::GetVariable('comment');
			if ($comment['send']) {
				$res = Service::sendemail($email);
				if ($res) {
					$contact->send_mail = 1;
				} else {
					$contact->send_mail = 0;
				}
			}
			if ($contact->save()) {
				return json_encode(0);
			} else {
				return json_encode(1);
			}
		}

	}

}
?>