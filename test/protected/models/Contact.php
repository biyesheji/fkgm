<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property string $createtime
 * @property string $ip
 * @property integer $send_mail
 * @property string $updatetime
 * @property integer $status
 * @property string $keyword
 * @property string $description
 */
class Contact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('send_mail, status', 'numerical', 'integerOnly'=>true),
			array('name, email, subject, ip', 'length', 'max'=>200),
			array('keyword, description', 'length', 'max'=>500),
			array('message, createtime, updatetime', 'safe'),
			array('email','email','message' => '请填写正确的邮箱'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, email, subject, message, createtime, ip, send_mail, updatetime, status, keyword, description', 'safe', 'on'=>'search'),
			array('id, name, email, subject, message, createtime, ip, send_mail, updatetime, status, keyword, description', 'safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '留言人',
			'email' => '留言邮箱',
			'subject' => '主题',
			'message' => '留言信息',
			'createtime' => '创建时间',
			'ip' => 'Ip地址',
			'send_mail' => '邮件发送状态',
			'updatetime' => '更新时间',
			'status' => '状态',
			'keyword' => '关键词',
			'description' => '描述',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('send_mail',$this->send_mail);
		$criteria->compare('updatetime',$this->updatetime,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}