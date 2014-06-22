<?php
class JobController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/fkgm';
	public $defaultAction = 'index';
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionIndex()
	{
		$criteria = new CDbCriteria;
		$criteria->order = 'weight asc , id desc ';
		$criteria->addCondition("`shows` = :shows and type = :type");
        $criteria->params[':shows'] = 1;
        $criteria->params[':type'] = 0;
		$zhaopin_result_school = Service::listAllJobByCriteria($criteria);
		$zhaopin_result_school = Service::_convert2Array($zhaopin_result_school);
		// $zhaopin_result_school = json_encode($zhaopin_result_school);
		$criteria = new CDbCriteria;
		$criteria->order = 'weight asc , id desc ';
		$criteria->addCondition("`shows` =:shows and type = :type ");
		$criteria->params[':shows'] = 1;
		$criteria->params[':type'] = 1;
		$zhaopin_result_shehui = Service::listAllJobByCriteria($criteria);
		$zhaopin_result_shehui = Service::_convert2Array($zhaopin_result_shehui);
		return $this->render('index',array(
				'zhaopin_result_school' => $zhaopin_result_school,
				'zhaopin_result_shehui' => $zhaopin_result_shehui,
				));
	}
	public function actionDetail($id){
		$id = addslashes(trim(Yii::app()->request->getParam('id')));
		$criteria = new CDbCriteria;
		$criteria->addCondition("`shows` = :shows and id = :id ");
        $criteria->params[':shows'] = 1;
        $criteria->params[':id'] = $id;
        $criteria->limit = 1 ;
		$zhaopin_result = Service::listAllJobByCriteria($criteria);
		if (empty($zhaopin_result)) {
			// throw new CHttpException(404,' the page not fount');
			return $this->redirect('/job/index');
		}
		return $this->render('detail',array('zhaopin_result' => $zhaopin_result));
	}
}
?>