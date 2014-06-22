<?php
/**
* 产品控制器
*显示产品的信息
*/
class ProductController extends Controller
{
	public $layout='//layouts/fkgm';
	public $defaultActon = 'index';
	/**
	*	所有产品的列表
	*/
	public function actionIndex(){
		$criteria = new CDbCriteria();
		$criteria->addCondition(" `shows` = :shows");
        $criteria->params[':shows'] = 1;
		$result = Service::listProductByCriteria($criteria,12);
		$this->render('index',array('result' => $result));
	}
    /**
    * 产品详细页
    */
	public function actionDetail($id){
		$id = addslashes(trim(Yii::app()->request->getParam('id')));
		$product_result = Product::model()->findByPk($id);
		//相似产品
		if (empty($product_result->attributes)) {
			throw new CHttpException(400,'invalid request');
		}
		Service::ProductClickAdd($id);
        //得到三条评论
        $comment = Service::getCommentByProductid($id);
        // 得到二条相关产品
        $xiangguan = Service::getxiangguan('texture',$product_result->texture);
        // var_dump($xiangguan);
        // 得到五条热门产品
        $criteria = new CDbCriteria();
        $criteria->order = 'hot desc ,weight asc , id desc ';
        $criteria->addCondition(" `shows` = :shows");
        $criteria->params[':shows'] = 1;
        $result = Service::listProductByCriteria($criteria,5);
        $hot = $result['result'];
        // 得到五条推荐产品
        $criteria = new CDbCriteria();
        $criteria->addCondition("recomment = :recomment");
        $criteria->addCondition(" `shows` = :shows");
        $criteria->params[':recomment'] = 1;
        $criteria->params[':shows'] = 1;
        $criteria->order = 'weight asc , id desc ';
        $result = Service::listProductByCriteria($criteria,5);
        $recomment = $result['result'];
		$this->render('detail',array('product_result' => $product_result,
            'comment' => $comment,
            'xiangguan' => $xiangguan,
            'hot' => $hot,
            'recomment' => $recomment));
	}

	/**
	*最新产品
	*
	*/
	public function actionNew(){
		$criteria = new CDbCriteria();
        $criteria->order = 'weight asc , id desc ';
        $criteria->addCondition(" `shows` = :shows");
        $criteria->params[':shows'] = 1;
        $result = Service::listProductByCriteria($criteria,6);
        return $this->render('new',array('result' => $result));

	}
	/**
	*
	* 热门产品
	*
	*/
	public function actionHot(){
        $criteria = new CDbCriteria();
        $criteria->order = 'hot desc ,weight asc , id desc ';
        $criteria->addCondition(" `shows` = :shows");
        $criteria->params[':shows'] = 1;
        $result = Service::listProductByCriteria($criteria,12);
        return $this->render('hot',array('result' => $result));
	}
	/**
	*	推荐产品
	*
	*/
	public function actionRecommend(){
		$criteria = new CDbCriteria();
		$criteria->addCondition("recomment = :recomment");
		$criteria->addCondition(" `shows` = :shows");
        $criteria->params[':recomment'] = 1;
        $criteria->params[':shows'] = 1;
        $criteria->order = 'weight asc , id desc ';
        $result = Service::listProductByCriteria($criteria,4);
        return $this->render('recommend',array('result' => $result));
	}
	/**
	* 产品评论页
	*
	*/
	public function actionComment($id){
        $id = addslashes(trim(Yii::app()->request->getParam('id')));
        // $id = addslashes(trim(Yii::app()->request->getParam('id')));
		$product_result = Product::model()->find('id = :product_id',array(':product_id' => $id));
		if (empty($product_result)) {
			throw new CHttpException(404,' the page not fount');
		}
        $criteria = new CDbCriteria;
        $criteria->addCondition('product_id = :id');
        $criteria->params[':id'] = $id;
        $criteria->order = 'id desc';
        $comment_result = Service::listAllCommentByProductId($criteria);
		return $this->render('comment',array('comment_result' => $comment_result));
	}

    /**
    *
    * ajax 添加评论
    */
    public function actionAddComment(){
        if (Yii::app()->request->getParam('name') && Yii::app()->request->getParam('product') && Yii::app()->request->getParam('email') &&  Yii::app()->request->getParam('msg')) {
            $name = addslashes(trim(Yii::app()->request->getParam('name')));
            $product = (int)addslashes(trim(Yii::app()->request->getParam('product')));
            $email = addslashes(trim(Yii::app()->request->getParam('email')));
            $msg = addslashes(trim(Yii::app()->request->getParam('msg')));
            $comment = new Comment;
            $comment->product_id = $product;
            $comment->name = $name;
            $comment->email = $email;
            $comment->body = $msg;
            $comment->time = date('Y-m-d H:i:s',time());
            $comment->ip = Yii::app()->request->userHostAddress;
            if ($comment->save()) {
                echo json_encode(0);
                return;
            } else {
                echo json_encode(1);
                return;
            }
        }
    }

    /**
    * 产品搜索
    *
    */
    public function actionSearch(){
        $texture = addslashes(trim(Yii::app()->request->getParam('texture')));
        $volume = addslashes(trim(Yii::app()->request->getParam('volume')));
        $people = addslashes(trim(Yii::app()->request->getParam('people')));
        $price = addslashes(trim(Yii::app()->request->getParam('price')));
        $class_id = addslashes(trim(Yii::app()->request->getParam('class_id')));
        $heft = addslashes(trim(Yii::app()->request->getParam('heft')));
        $criteria =  new CDbCriteria;
        $criteria->addCondition("shows = :shows");
        $criteria->params[':shows'] = 1;
        $criteria->order = 'weight asc, id desc';
        // var_dump($texture);
        // var_dump($volume);
        // var_dump($people);
        // var_dump($price);
        // var_dump($class_id);
        // var_dump($heft);
        // die;
        if ($texture) {
            $criteria->addCondition(" texture  like :texture");
            $criteria->params[':texture'] = "%".$texture."%";
        }
        if ($volume) {
            $criteria->addCondition(" volume > :volume_min and volume <=:volume_max");
            $criteria->params[':volume_max'] =  ($volume+2)*100;
            $criteria->params[':volume_min'] =  $volume*100;
        }
        if ($people) {
            $criteria->addCondition(" people  like :people");
            $criteria->params[':people'] = "%".$people."%";
        }
        if ($price) {
            $criteria->addCondition(" price >:price_min and price <=:price_max");
            $criteria->params[':price_min'] = $price*30;
            $criteria->params[':price_max'] = ($price+1)*30;
        }
        if ($class_id) {
            $criteria->addCondition(" class_id  = :class_id");
            $criteria->params[':class_id'] = (int)$class_id;
        }
        if ($heft) {
            $criteria->addCondition(" heft  >:heft_min and heft <=:heft_max");
            $criteria->params[':heft_min'] = $heft * 50;
            $criteria->params[':heft_max'] = ($heft+1)*50;
        }

        // 获得所有的产品id
        $pclss_all = Productclass::model()->findAll();
        // 获得所有的产品材质
        $sql = "SELECT count(*) as total, texture as texture FROM product where texture  <> '' group by texture";
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        $texture_all = $this->_array_sort($results,'total','DESC');
        // 循环剔除空值
        $texture_all = array_slice($texture_all,0,10);
        // 获得所有的适用人群
        $sql = "SELECT count(*) as total, people as people  FROM product where people  <> '' group by people";
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        $people_all = $this->_array_sort($results,'total','DESC');
        $people_all = array_slice($people_all,0,10);
        // 获得所有的产品容量
        $sql = "SELECT count(*) as total, volume as volume  FROM product where volume  <> '' group by volume";
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        $volume_all = $this->_array_sort($results,'total','DESC');
        $volume_all = array_slice($volume_all,0,10);
        // 获得 所有的产品价格
        $sql = "SELECT count(*) as total, price as price  FROM product where price  <> '' group by price";
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        $price_all = $this->_array_sort($results,'total','DESC');
        $price_all = array_slice($price_all,0,10);
        // 获得所有的重量信息
        $sql = "SELECT count(*) as total, heft as heft  FROM product where heft  <> '' group by heft";
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        $heft_all = $this->_array_sort($results,'total','DESC');
        $heft_all = array_slice($heft_all,0,10);
        // var_dump($heft_all);die();
        $result = Service::listProductByCriteria($criteria,9);
        return $this->render('search',array(
           'result' => $result,
            'texture' => $texture,
            'volume' => $volume,
            'people' => $people,
            'price' => $price,
            'class_id' => $class_id,
            'heft' => $heft,
            'pclss_all' => $pclss_all,
            'texture_all' => $texture_all,
            'people_all' => $people_all,
            'volume_all' => $volume_all,
            'price_all' => $price_all,
            'heft_all' => $heft_all,
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