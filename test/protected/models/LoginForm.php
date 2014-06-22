<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;
	public $captcha;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required','message' =>'用户名，密码必填'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// array('captcha','yanzhengma','message' => '请填写正确的验证码'),
			// password needs to be authenticated
			array('password', 'authenticate'),
			array('username,password,rememberMe','safe'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'记住我',
			'username'=>'用户名或者邮箱',
			'password'=>'密码',
			'captcha'=>'验证码',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
 			$identity = new UserIdentity($this->username,$this->password);
            $identity->authenticate();
            // $this->_identity = new UserIdentity($this->username,$this->password);
            // if (!$this->_identity->authenticate()) {
            // 	$this->addError('password','用户名，密码错误');
            // }
            // var_dump($identity->errorCode);
            // var_dump($identity);
            // var_dump($identity->authenticate());die();
            switch ($identity->errorCode) {
                case UserIdentity::ERROR_NONE:
                    $duration = $this->rememberMe ? 3600*24*7 : 0;
                    Yii::app()->user->login($identity,$duration);
                    break;

                case UserIdentity::ERROR_USERNAME_INVALID:
                    $this->addError('username','用户名错误');
                    break;

                default:
                    $this->addError('password','密码错误');
                    break;
            }
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*7 : 0; // 7 days
			return Yii::app()->user->login($this->_identity,$duration);
		}
		else
			return false;
	}
    // 验证码检查
    public function yanzhengma ($attribute,$params){
        // var_dump($this->captcha);
        if (in_array($this->captcha, $_SESSION)) {
            return true;
        } else  {
            return false;
        }

    }
}
