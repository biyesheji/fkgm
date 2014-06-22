<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property string $id
 * @property integer $product_id
 * @property string $name
 * @property string $email
 * @property string $body
 * @property string $time
 * @property string $ip
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id', 'required'),
			array('product_id', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>10),
			array('name, email, ip', 'length', 'max'=>100),
			array('email','email','message' => '请填写正确的email地址'),
			array('body, time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, name, email, body, time, ip', 'safe', 'on'=>'search'),
			array('id, product_id, name, email, body, time, ip', 'safe'),
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
			'id' => '留言ID',
			'product_id' => '产品名称',
			'name' => '留言人',
			'email' => '留言email',
			'body' => '留言内容',
			'time' => '留言时间',
			'ip' => 'Ip地址',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('ip',$this->ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}