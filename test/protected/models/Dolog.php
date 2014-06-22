<?php

/**
 * This is the model class for table "dolog".
 *
 * The followings are the available columns in table 'dolog':
 * @property string $id
 * @property string $name
 * @property string $body
 * @property string $time
 * @property string $ip
 */
class Dolog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dolog the static model class
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
		return 'dolog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, ip', 'length', 'max'=>100),
			array('body, time', 'safe'),
			array('body','required','message' => '操作内容必填'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, body, time, ip', 'safe', 'on'=>'search'),
			array('id, name, body, time, ip', 'safe'),
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
			'id' => '操作日志编号',
			'name' => '操作人',
			'body' => '操作内容',
			'time' => '操作时间',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('body',$this->body,true);
		// $criteria->addCondition('time > :time',true);
		// $criteria->params[':time'] = $this->time;
		$criteria->compare('time',$this->time,true);
		$criteria->compare('ip',$this->ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}