<?php

class DefaultController extends Controller
{
    public $defaultAction  = 'login';

    // 权限管理
    // public function filters(){
    //     return array('accessControl');
    // }

    // public function accessRules(){
    //         return array(
    //             array(
    //                 'allow',
    //                 'actions' => array('index','login','captcha'),
    //                 'users' => array('@'),
    //                 ),
    //             array(
    //                 'allow',
    //                 'actions' => array('login','captcha'),
    //                 'users' => array('*'),
    //                 ),
    //             array(
    //                 'deny',
    //                 'users' => array('*'),
    //                 ),
    //             );
    // }
    // 验证码
    public function actions(){
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                    'width' => 144, //默认120
                    'height' => 48, //默认50
                    'foreColor' => 0x2040A0, //字体颜色
                    'minLength' => 4, //设置最短为
                    'maxLength' => 5, //设置最长为
                    'offset' => - 2, //设置字符偏移量
                    )
            );
    }
    // 首页配置项
	public function actionIndex()
	{
        $type = Yii::app()->request->getParam('type');
        // if (Yii::app()->user->role != 1) {
        //     Yii::app()->user->setFlash('alter_variable','无权修改该信息');
        //     return $this->redirect('index');
        // }
        if ($type) {
            if ($type === 'index_boom_info') {
                $info = Service::GetVariable($type);

                if (Yii::app()->request->isPostRequest) {
                    $info = Yii::app()->request->getParam('value');
                    Service::variableSet('index_boom_info',json_encode($info));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }

                return $this->render('index_boom_info',array('info' => $info));
            } elseif ($type === 'contact') {
                $info = Service::GetVariable($type);

                 if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['teip'] = Yii::app()->request->getParam('teip');
                    $data['fax'] = Yii::app()->request->getParam('fax');
                    $data['email'] = Yii::app()->request->getParam('email');
                    $data['website'] = Yii::app()->request->getParam('website');
                    $data['right_top'] = Yii::app()->request->getParam('right_top');
                    $data['top'] = Yii::app()->request->getParam('top');
                    Service::variableSet('contact',json_encode($data));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }

                return $this->render('contact',array('info' => $info));
            } elseif ($type === 'about') {
                $info = Service::GetVariable($type);

                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['top'] = Yii::app()->request->getParam('top');
                    $data['center'] = Yii::app()->request->getParam('center');
                    $data['more_about'] = Yii::app()->request->getParam('more_about');
                    $data['more_about_red'] = Yii::app()->request->getParam('more_about_red');
                    $data['more_about_botton'] = Yii::app()->request->getParam('more_about_botton');
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    Service::variableSet('about',json_encode($data));
                    return $this->redirect('default/index');
                }

                return $this->render('about',array('info' => $info));
            } elseif ($type === 'inner') {
                $info = Service::GetVariable($type);

                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['title'] = Yii::app()->request->getParam('title');
                    $data['body'] = Yii::app()->request->getParam('body');
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    Service::variableSet('inner',json_encode($data));
                    return $this->redirect('default/index');
                }

                return $this->render('inner',array('info' => $info));
            }elseif ($type === 'comment') {
                $info = Service::GetVariable($type);
                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['send'] = trim(Yii::app()->request->getParam('send'));
                    $data['username'] = trim(Yii::app()->request->getParam('username'));
                    $data['password'] = trim(Yii::app()->request->getParam('password'));
                    $data['host'] = trim(Yii::app()->request->getParam('host'));
                    $data['from'] = trim(Yii::app()->request->getParam('from'));
                    $data['altbody'] = trim(Yii::app()->request->getParam('altbody'));
                    $data['fromname'] = trim(Yii::app()->request->getParam('fromname'));
                    $data['body'] = trim(Yii::app()->request->getParam('body'));
                    $data['subject'] = trim(Yii::app()->request->getParam('subject'));
                    Service::variableSet('comment',json_encode($data));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }
                return $this->render('comment',array('info' => $info));
            } elseif ($type == 'ga') {
                $info = Service::GetVariable($type);
                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['ga'] = trim(Yii::app()->request->getParam('ga'));
                    Service::variableSet('ga',json_encode($data));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }
                return $this->render('ga',array('info' => $info));
            } elseif ($type == 'seo') {
                $info = Service::GetVariable($type);
                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['seo'] = Yii::app()->request->getParam('seo');
                    Service::variableSet('seo',json_encode($data));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }
                return $this->render('seo',array('info' => $info));
            } elseif ($type == 'fenxiang') {
                $info = Service::GetVariable($type);
                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['fenxiang'] = Yii::app()->request->getParam('fenxiang');
                    Service::variableSet('fenxiang',json_encode($data));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }
                return $this->render('fenxiang',array('info' => $info));
            } elseif ($type == 'qq') {
                 $info = Service::GetVariable($type);
                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['qq'] = Yii::app()->request->getParam('qq');
                    Service::variableSet('qq',json_encode($data));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }
                return $this->render('qq',array('info' => $info));
            } elseif ($type == 'config') {
                $info = Service::GetVariable('index_config');
                if (Yii::app()->request->isPostRequest) {
                    $data = array();
                    $data['shili'] = Yii::app()->request->getParam('shili');
                    $data['shichang'] = Yii::app()->request->getParam('shichang');
                    Service::variableSet('index_config',json_encode($data));
                    Yii::app()->user->setFlash('alter_variable','修改信息成功');
                    return $this->redirect('default/index');
                }
                return $this->render('indexconfig',array('info' => $info));
            } else {
                Yii::app()->user->setFlash('set_variable','参数不对');
            }
        }
        return $this->render('index');
    }

    // 登陆控制器
    public function actionLogin(){
        $model =  new LoginForm;
        if (Yii::app()->request->isPostRequest) {
            $model->username = addslashes(trim($_POST['LoginForm']['username']));
            $model->password = addslashes(trim($_POST['LoginForm']['password']));
            $login = $model->validate() && $model->login();
            // var_dump($model->validate());
            // var_dump($model->login());
            if ($login) {
                return $this->redirect('index');
            }
        }
        return $this->renderPartial('login',array('model' => $model));
    }
    /**
     * 登陆用户推出系统
     * @return [type] [description]
     */
    public function actionlogout(){
        Yii::app()->user->logout();
        return $this->redirect(Yii::app()->homeUrl);
    }
}