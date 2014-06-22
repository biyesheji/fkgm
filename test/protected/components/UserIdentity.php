<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user_username =User::model()->find('username = :username and status = :status',array(':username' => $this->username,':status' => 1));
        $user_email =User::model()->find('email = :email and status = :status',array(':email' => $this->username,':status' =>1));
        if (empty($user_username)) {
        	if (empty($user_email->username)) {
				$this->errorCode=self::ERROR_USERNAME_INVALID;
        	} elseif ($user_email->password != md5($this->password)) {
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
        	} else{
        		$this->setState('role', $user_email->role); //设定权限状态
                        $this->setState('id', $user_email->id); //设定权限状态
        		$this->setState('uid', $user_email->id); //设定权限状态
        		$this->setState('username', $user_email->username); //设定权限状态
        		$this->errorCode = self::ERROR_NONE;
        	}
        	return $this->errorCode;
        } else {
        	if (empty($user_username->username)) {
				$this->errorCode=self::ERROR_USERNAME_INVALID;
        	} elseif ($user_username->password != md5($this->password)) {
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
        	} else{
        		$this->setState('role', $user_username->role); //设定权限状态
                        $this->setState('id', $user_username->id); //设定权限状态
        		$this->setState('uid', $user_username->id); //设定权限状态
        		$this->setState('username', $user_username->username); //设定权限状态
        		$this->errorCode = self::ERROR_NONE;
        	}
        	return $this->errorCode;
        }
	}
}