<?php

/**
 * This is the model class for table "zhaopin".
 *
 * The followings are the available columns in table 'zhaopin':
 * @property string $id
 * @property string $name
 * @property integer $number
 * @property string $time
 * @property string $body
 * @property string $addr
 * @property string $xueli
 * @property string $work_time
 * @property string $work_type
 * @property integer $type
 * @property string $money
 * @property integer $show
 * @property integer $weight
 * @property string $keyword
 * @property string $description
 */
class Zhaopin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Zhaopin the static model class
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
		return 'zhaopin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number, type, shows, weight', 'numerical', 'integerOnly'=>true),
			array('name, addr, xueli, work_time, work_type', 'length', 'max'=>200),
			array('money', 'length', 'max'=>50),
			array('keyword, description', 'length', 'max'=>500),
			array('time, body', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, number, time, body, addr, xueli, work_time, work_type, type, money, shows, weight, keyword, description', 'safe', 'on'=>'search'),
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
			'id' => '招聘ID',
			'name' => '职位需求',
			'number' => '需求人数',
			'time' => '时间',
			'body' => '招聘内容',
			'addr' => '工作地点',
			'xueli' => '学历 要求',
			'work_time' => '工作经验',
			'work_type' => '工作性质',
			'type' => '招聘类型（1 校园招聘 0 社会招聘）',
			'money' => '薪资',
			'shows' => '是否显示',
			'weight' => '权重',
			'keyword' => 'seo关键词',
			'description' => 'seo描述',
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
		$criteria->compare('number',$this->number);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('addr',$this->addr,true);
		$criteria->compare('xueli',$this->xueli,true);
		$criteria->compare('work_time',$this->work_time,true);
		$criteria->compare('work_type',$this->work_type,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('shows',$this->shows);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}