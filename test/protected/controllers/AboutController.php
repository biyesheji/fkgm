<?php
class AboutController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/fkgm';
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionIndex()
	{
		$about = Service::GetVariable('about');
		//得到随机的6篇文章
        $criteria = new CDbCriteria;
        $criteria->addCondition('shows = 1');
        $count = News::model()->count($criteria);
        $criteria->limit = 3;
        $criteria->offset = mt_rand(0,$count);
        $criteria->select = 'id,name,image,body';
        $shuiji = News::model()->findAll($criteria);
        // 得到热门产品
        $hotProduct = Service::hotProduct(3);
		$this->render('index',array(
			'about' =>$about,
			'shuiji' => $shuiji,
			'hot' => $hotProduct,
		));
	}

}
?>