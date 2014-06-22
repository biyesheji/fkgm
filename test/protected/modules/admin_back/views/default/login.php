<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/css/admin/main.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>登陆</title>
    </head>
<body class="loginPage">
   <div class="container-fluid">
        <div class="loginContainer">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id'=>'flash-form',
                    'enableAjaxValidation'=>false,
                    'htmlOptions' => array('calss' => 'form-horizontal')
                    )
                );
                echo $form->errorSummary($model);
            ?>
                <div class="form-row row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <label class="form-label span12" for="username">
                                用户名或者邮箱:
                                <span class="icon16 icomoon-icon-user-3 right gray marginR10"></span>
                            </label>
                            <?php echo $form->textField($model,'username',array('class' => 'span12','id' => 'username'));?>
                        </div>
                    </div>
                </div>

                <div class="form-row row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <label class="form-label span12" for="password">
                                密码:
                                <span class="icon16 icomoon-icon-locked right gray marginR10"></span>
                                <span class="forgot"></span>
                            </label>
                            <?php echo $form->passwordField($model,'password',array('class' => 'span12','id' => 'password'));?>
                        </div>
                    </div>
                </div>
                <div class="form-row row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="form-actions">
                            <div class="span12 controls">
                                <?php echo $form->checkBox($model,'rememberMe',array('id'=>'keepLoged','class' =>'styled'));?>
                                <?php echo $form->labelEx($model,'rememberMe');?>
                                <?php echo $form->labelEx($model,'captcha');?>
                                <?php echo $form->textField($model,'captcha',array('class' => 'span12'));?>
                                <?php
                                $this->widget('CCaptcha',array(
                                                'showRefreshButton'=>true,
                                                'clickableImage'=>true,
                                                'buttonLabel'=>'点击更换验证码',
                                                'imageOptions'=>array(
                                                    'alt'=>'点击换图',
                                                    'title'=>'点击换图',
                                                    'style'=>'cursor:pointer',
                                                    'backColor'=>'#000'
                                                    )
                                                )
                                             );
                                ?>
                                <button type="submit" class="btn btn-info right" id="loginBtn"><span class="icon16 icomoon-icon-enter white"></span> 登陆</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php $this->endWidget(); ?>
        </div>
    </div><!-- End .container-fluid -->
</body>
</html>
