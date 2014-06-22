<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property string $id
 * @property string $name
 * @property string $body
 * @property string $click
 * @property string $auto
 * @property integer $new_class
 * @property string $video
 * @property string $source
 * @property string $image
 * @property integer $shows
 * @property integer $weight
 * @property string $keyword
 * @property string $description
 * @property string $createtime
 * @property string $updatetime
 */
class News extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return News the static model class
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
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, body, image', 'required'),
			array('new_class, shows, weight', 'numerical', 'integerOnly'=>true),
			array('name, auto, video', 'length', 'max'=>400),
			array('click', 'length', 'max'=>10),
			array('source, image', 'length', 'max'=>100),
			array('keyword, description', 'length', 'max'=>500),
			array('createtime, updatetime,tags', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, body, click, auto, new_class, video,tags, source, image, shows, weight, keyword, description, createtime, updatetime', 'safe', 'on'=>'search'),
			array('id, name, body, click, auto, new_class, video,tags, source, image, shows, weight, keyword, description, createtime, updatetime', 'safe'),
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
			'id' => '新闻ID',
			'name' => '新闻标题',
			'body' => '新闻内容',
			'click' => '点击量',
			'auto' => '作者',
			'new_class' => '新闻类别',
			'video' => '视频',
			'source' => '来源',
			'image' => '新闻配图',
			'shows' => '是否显示',
			'weight' => '权重',
			'keyword' => '关键词',
			'tags' => '新闻标签',
			'description' => '描述',
			'createtime' => '创建时间',
			'updatetime' => '更新时间',
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
		$criteria->compare('click',$this->click,true);
		$criteria->compare('auto',$this->auto,true);
		$criteria->compare('new_class',$this->new_class);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('shows',$this->shows);
		$criteria->compare('tags',$this->tags);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('updatetime',$this->updatetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}