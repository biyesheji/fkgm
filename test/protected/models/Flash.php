<?php

/**
 * This is the model class for table "flash".
 *
 * The followings are the available columns in table 'flash':
 * @property string $id
 * @property string $image
 * @property integer $shows
 * @property string $alt
 * @property string $title
 * @property integer $weight
 * @property string $url
 */
class Flash extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Flash the static model class
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
		return 'flash';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('id', 'required'),
			array('shows, weight', 'numerical', 'message' => '请填写数字'),
			// array('id', 'length', 'max'=>10),
			array('image', 'length', 'max'=>200),
			array('alt, title', 'length', 'max'=>500),
			array('url', 'length', 'max'=>200),
			array('weight' ,'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, image, shows, alt, title, weight, url', 'safe', 'on'=>'search'),
			array('id, image, shows, alt, title, weight, url', 'safe'),
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
			'id' => '图片ID',
			'image' => '图片路径',
			'shows' => '是否显示',
			'alt' => 'Alt属性',
			'title' => 'Title标签',
			'weight' => '权重',
			'url' => '链接',
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
		$criteria->compare('image',$this->image,true);
		$criteria->compare('shows',$this->shows,true);
		// if (($this->shows ==0 || $this->shows == 1)) {
		// $criteria->addCondition("id = $this->shows");
		// }
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}