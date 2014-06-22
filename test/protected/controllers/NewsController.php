<?php
/**
* 新闻控制器
*
*/
class NewsController extends Controller
{
	public $layout='//layouts/fkgm';
	public $defaultActon = 'index';
	/**
	*	新闻列表
	*
	*/
	public function actionIndex(){
        $tags = addslashes(trim(Yii::app()->request->getParam('tags')));
		$criteria = new CDbCriteria();
		$criteria->addCondition("`shows` = :shows");
        if ($tags) {
            $criteria->addSearchCondition('tags',$tags);
        }
        $criteria->params[':shows'] = 1;
        $tags = addslashes(trim(Yii::app()->request->getParam('tags')));
        if ($tags) {
            $criteria->addSearchCondition('tags',$tags);
        }
        $criteria->order = 'weight asc , id desc';
		$news_result = Service::listNewsByCriteria($criteria,3);
		// 获取所有的文章标签
		$sql = "SELECT count(*) as total, tags as tags  FROM news  where tags <> '' group by tags";
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        $tags_all = $this->_array_sort($results,'total','DESC');
        $new_tags = array();
        foreach ($tags_all as $key => $value) {
        	if ($value['tags']) {
        		$new_tags[$key] = $value;
        	}
        }
        $tags_all = array_slice($new_tags,0,10);
        //得到随机的6篇文章
        $criteria = new CDbCriteria;
        $criteria->addCondition('shows = 1');
        $count = News::model()->count($criteria);
        $criteria->limit = 6;
        $criteria->offset = mt_rand(0,$count);
        $criteria->select = 'id,name,image,body';
        $shuiji = News::model()->findAll($criteria);
        //得到热门产品
        $hotProduct = Service::hotProduct(6);
    	return $this->render('index',array('result' => $news_result,'tags_all' => $tags_all,'shuiji' => $shuiji,'hotProduct' => $hotProduct));
	}
	/**
	*	新闻详细
	*
	*/
	public function actionDetail($id){
		$id = addslashes(trim(Yii::app()->request->getParam('id')));
		$news_result = News::model()->findByPk($id);
		if (empty($news_result->attributes)) {
			throw new CHttpException(400,'invalid request');
		}
		Service::NewsClickAdd($id);
        // 得到新闻的所有标签
        $sql = "SELECT count(*) as total, tags as tags  FROM news group by tags";
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        $tags_all = $this->_array_sort($results,'total','DESC');
        $new_tags = array();
        foreach ($tags_all as $key => $value) {
            if ($value['tags']) {
                $new_tags[$key] = $value;
            }
        }
        $tags_all = array_slice($new_tags,0,10);
		$news_class = Newclass::model()->find('id = :news_class',
			array(':news_class'=>$news_result->new_class));
        // 得到六条最新产品
        $hot_product = Service::hotProduct(6);
        // 得到六条推荐产品
        $commt_product = Service::getcommtProduct();
        // 获得上一篇 下一篇
        $criteria = new CDbCriteria;
        $criteria->select = 'id , name';
        $criteria->limit = 1;
        $criteria->order = 'id asc';
        $criteria->addCondition('shows = :shows and id > :id');
        $criteria->params[':shows'] = 1;
        $criteria->params[':id'] = $id;
        $pre_result = News::model()->find($criteria);
        $criterias = new CDbCriteria;
        $criterias->select = 'id , name';
        $criterias->limit = 1;
        $criterias->addCondition('shows = :shows and id < :id');
        $criterias->order = 'id desc';
        $criterias->params[':shows'] = 1;
        $criterias->params[':id'] = $id;
        $nex_result = News::model()->find($criterias);
        if ($pre_result) {
        $pre_id['id'] = $pre_result->id ;
        $pre_id['name'] = $pre_result->name ;
        } else {
            $pre_id = array();
        }
        if ($nex_result) {
        $nex_id['id'] = $nex_result->id;
        $nex_id['name'] = $nex_result->name;
        } else {
            $nex_id = array();
        }
		return $this->render('detail',array(
            'news_result' => $news_result,
            'tags_all' => $tags_all,
            'hot_product' => $hot_product,
            'commt_product' => $commt_product,
            'nex_id' => $nex_id,
            'pre_id' => $pre_id,
            ));
	}

    private function _array_sort($arr,$keys,$type='asc'){
        $keysvalue = $new_array = array();
            foreach ($arr as $k=>$v){
                $keysvalue[$k] = $v[$keys];
            }
            if($type == 'asc'){
                asort($keysvalue);
            }else{
                arsort($keysvalue);
            }
        reset($keysvalue);
            foreach ($keysvalue as $k=>$v){
                $new_array[$k] = $arr[$k];
            }
        return $new_array;
    }
}
?>