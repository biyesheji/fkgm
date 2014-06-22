<?php
/**
* SERVICE 层
*
*/
class Service
{
    /**
    *   页面底部显示友情链接使用
    */
	static public function listAllLink(){
        $criteria=new CDbCriteria;
        $criteria->select = ' title , image , url , name ';
        $criteria->condition='`shows` =:shows';
        $criteria->params=array(':shows'=>1);
        $criteria->order = 'wight asc, id desc';
        $link_result = Link::model()->findAll($criteria);
        return  self::_convert2Array($link_result);
    }

    /**
    *   页面底部显示热门产品
    */
    static public function hotProduct($limit = 2){
        $criteria = new CDbCriteria;
        $criteria->select = ' id,name,image,introduce';
        $criteria->order = 'weight asc , id desc';
        $criteria->condition = '`shows` = :shows';
        $criteria->params = array(':shows' => 1);
        $criteria->limit = $limit;
        $result = Product::model()->findAll($criteria);
        return self::_convert2Array($result);
    }

    /**
    *   get 系统变量
    *   根据变量名得到变量的值，返回数组
    **/
    static public function GetVariable($variableName){
        $result = Variable::model()->find('name = :name',array(':name' => $variableName));
        if ($result) {
            $value = $result->attributes;
            $jsonData = $value['value'];
            return json_decode($jsonData,true);
        }
        return array();
    }

    /**
    *
    *   设置变量的值
    *   根据变量名称
    */
    static public function variableSet($name, $value){
        $isNew = self::GetVariable($name);
        if(empty($isNew)){
            $data = array();
            $data = array(
                'name' => $name,
                'value' => $value,
            );
            return self::addVariable($data, $error);
        }elseif(is_int($isNew)){
            $isNew = $value;
            $variableModel = Variable::model()->findByAttributes(array('name' => $name));
            $variableModel->value = $value;
            if($variableModel->save()){
                return true;
            }else{
                return false;
            }
        }else{
            $variableModel = Variable::model()->findByAttributes(array('name' => $name));
            $variableModel->value = $value;
            if($variableModel->save()){
                return true;
            }else{
                return false;
            }
        }
    }

    /**
    *   设置变量的值
    *
    **/
    static public function addVariable($data, &$errors) {

        $variableModel = new Variable();
        $variableModel->attributes = $data;
        if ($variableModel->save()) {
            return true;
        }
        $errors = $variableModel->getErrors();
        return false;
    }

    /**
     * 首页显示flash
     */

    static public function getFlsh(){
        $criteria =  new CDbCriteria;
        $criteria->select = 'image, alt, title, url';
        $criteria->condition = "`shows` = :shows";
        $criteria->order = 'weight asc, id desc';
        $criteria->params = array(':shows' => 1);
        $result = Flash::model()->findAll($criteria);
        return self::_convert2Array($result);
    }

    /**
     * 得到相关产品
     */

    static public function getxiangguan($type,$value){
        $criteria =  new CDbCriteria;
        $criteria->condition = "`shows` = :shows";
        $criteria->condition = (" $type like :type");
        $criteria->order = 'weight asc, id desc';
        $criteria->params = array(':shows' => 1);
        $criteria->params = array(':type' => "%".$value."%");
        $criteria->limit = 2;
        return self::_convert2Array(Product::model()->findAll($criteria));
    }
    /**
     * 得到推荐产品
     * @param  integer $limit [description]
     * @return [type]         [description]
     */
    static public function getcommtProduct($limit = 6 ){
        $criteria = new CDbCriteria;
        $criteria->order = ' weight asc , id desc';
        $criteria->condition = ('recomment = 1');
        $criteria->limit = $limit;
        return self::_convert2Array(Product::model()->findAll($criteria));
    }

	/**
     * convert2Array
     * 对象数组 => 属性数组
     *
     * @param  mixed $objects
     * @return void
     */

    static public function _convert2Array($objects) {
        if (!is_array($objects) || !is_object(current($objects))) {
            return $objects;
        }
        $result = array();
        foreach ($objects as $obj) {
            $result[] = $obj->attributes;
        }
        return $result;
    }

    /**
     * 根据criteria条件查询产品 带分页
     * @param  [type]  $criteria [description]
     * @param  integer $pageSize [description]
     * @return [type]            [description]
     */

    static public function listProductByCriteria($criteria,$pageSize=6){
        $Product_model = Product::model();
        $Product_result = $Product_model->findAll($criteria);
        $pages = new CPagination(count($Product_result));
        $pages->pageSize = $pageSize;
        $pages->applyLimit($criteria);
        $criteria->limit =  $pages->pageSize;
        $criteria->offset = $pages->currentPage* $pages->pageSize;
        $result = $Product_model->findAll($criteria);
        return array('result' => $result,'pages' => $pages);
    }

    /**
     * 根据criteria条件新闻 带分页
     * @param  [type]  $criteria [description]
     * @param  integer $pageSize [description]
     * @return [type]            [description]
     */

    static public function listNewsByCriteria($criteria,$pageSize=6){
        $News_model = News::model();
        $News_result = $News_model->findAll($criteria);
        $pages = new CPagination(count($News_result));
        $pages->pageSize = $pageSize;
        $pages->applyLimit($criteria);
        $criteria->limit =  $pages->pageSize;
        $criteria->offset = $pages->currentPage* $pages->pageSize;
        $result = $News_model->findAll($criteria);
        return array('result' => $result,'pages' => $pages);
    }

    /**
     *  新闻点击次数加 1
     * @param [type] $id [description]
     */
    static public function NewsClickAdd($id){
        $News_result = News::model()->findByPk($id);
        $News_result->click++;
        $News_result->update();
    }

    /**
     * 产品点击次数加1
     * @param [type] $id [description]
     */

    static public function ProductClickAdd($id){
        $Product_result = Product::model()->findByPk($id);
        $Product_result->click++;
        $Product_result->update();
    }

    /**
     * 产品购买次数加1
     */

    static public function  ProductBuyAdd($id){
        $Product_result = Product::model()->findByPk($id);
        $Product_result->hot++;
        $Product_result->update();
    }

    /**
     * 得到招聘表中的内容
     * @param  [type] $criteria [description]
     * @return [type]           [description]
     */

    static public function listAllJobByCriteria($criteria){
        $zhaopin_result = Zhaopin::model()->findAll($criteria);
        return $zhaopin_result;
    }

   /**
    * 根据条件查询产品的评论 带分页
    * @author [john] <john_zxw@gmail.com>
    * @param  [class]  $criteria [查询条件]
    * @param  integer $pageSize  [分页大小]
    * @return [array]            [返回数组]
    */

    static public function listAllCommentByProductId($criteria,$pageSize = 6){
        // $criteria = CDbCriteria;
        $comment_model = comment::model();
        $comment = $comment_model->findAll($criteria);
        $pages = new CPagination(count($comment));
        $pages->pageSize = $pageSize;
        $pages->applyLimit($criteria);
        $criteria->limit =  $pages->pageSize;
        $criteria->offset = $pages->currentPage* $pages->pageSize;
        $result = $comment_model->findAll($criteria);
        return array('result' => $result,'pages' => $pages);
    }

    /**
     * 根据产品id得到相关的评论
     * @param  [type] $id [产品id]
     * @return [type]     [description]
     */

    static public function getCommentByProductid($id){
        $criteria = new CDbCriteria;
        $criteria->addCondition('product_id = :id');
        $criteria->params[':id'] = $id;
        $criteria->limit = 3;
        return self::_convert2Array(Comment::model()->findAll($criteria));
    }

    /**
     * 添加日志记录函数
     * @param [info] $info  [操作信息]
     * @param [uid]  $uid   [操作人id]
     */

    static public function addLog($info){
        $dolog = new Dolog;
        $dolog->name = Yii::app()->user->id;
        $dolog->body = $info;
        $dolog->time = date('Y-m-d H:i:s',time());
        $dolog->ip = Yii::app()->request->userHostAddress;
        return $dolog->save();
    }

    /**
     * 发送邮件方法
     * @param  [type] $send_user [接收人的邮箱地址]
     * @return [type]            [description]
     */

    static public function sendemail($send_user){
        $mail_info = self::GetVariable('comment');
        $send_emssage = str_replace(array('$user','$time'),array($send_user,date('Y-m-d',time())),$mail_info['body']);
        $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
        $mailer->IsSMTP();
        $mailer->SMTPAuth = true;
        $mailer->Host = $mail_info['host'];
        $mailer->From = $mail_info['from'];
        $mailer->Username  = $mail_info['username'];
        $mailer->Password  = $mail_info['password'];
        $mailer->FromName = $mail_info['fromname'];
        $mailer->AltBody  = $mail_info['altbody'];
        $mailer->CharSet = 'UTF-8';
        $mailer->AddAddress($send_user,'收件人');
        $mailer->Subject = $mail_info['subject'];
        $mailer->Body = $send_emssage;
       return $mailer->Send();
    }

    /**
     * 得到SEO设置
     * @return [type] [description]
     */

    static public function getseo(){
        $seo = self::GetVariable('seo');
        $seo = explode('|', $seo['seo']);
        return $seo;
    }

    /**
     * 列出首页四个 推荐产品
     * @return [type] [description]
     */

    static public function listComment(){
        $criteria = new CDbCriteria;
        $criteria->addCondition('recomment = :id');
        $criteria->params[':id'] = 1;
        $criteria->limit = 4;
        return self::_convert2Array(Product::model()->findAll($criteria));
    }
    /**
     * 得到首页配置
     * @return [type] [description]
     */
    static public function getIndexCon(){
        $config = self::GetVariable('index_config');
    }

}
?>