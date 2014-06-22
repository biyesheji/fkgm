<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $id
 * @property string $name
 * @property string $texture
 * @property string $volume
 * @property string $people
 * @property string $image
 * @property string $introduce
 * @property string $introduce_image
 * @property double $price
 * @property integer $class_id
 * @property integer $shows
 * @property integer $weight
 * @property integer $heft
 * @property integer $recomment
 * @property string $image_1
 * @property string $image_2
 * @property string $image_3
 * @property string $image_4
 * @property integer $hot
 * @property string $click
 * @property string $keyword
 * @property string $description
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, image, recomment', 'required'),
			array('class_id, shows, weight, heft, recomment, hot', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('name, people', 'length', 'max'=>100),
			array('texture', 'length', 'max'=>500),
			array('volume, click', 'length', 'max'=>10),
			array('image', 'length', 'max'=>10000),
			array('introduce_image, image_1, image_2, image_3, image_4', 'length', 'max'=>200),
			array('keyword, description', 'length', 'max'=>500),
			array('introduce', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, texture, volume, people, image, introduce, introduce_image, price, class_id, shows, weight, heft, recomment, image_1, image_2, image_3, image_4, hot, click, keyword, description', 'safe', 'on'=>'search'),
			array('id, name, texture, volume, people, image, introduce, introduce_image, price, class_id, shows, weight, heft, recomment, image_1, image_2, image_3, image_4, hot, click, keyword, description', 'safe'),
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
			'id' => '产品ID',
			'name' => '产品名称',
			'texture' => '产品材质',
			'volume' => '产品容量',
			'people' => '适用人群',
			'image' => '产品图片',
			'introduce' => '产品介绍',
			'introduce_image' => '产品介绍图片',
			'price' => '产品价格',
			'class_id' => '产品类别',
			'shows' => '是否显示',
			'weight' => '权重',
			'heft' => '产品重量',
			'recomment' => '是否推荐',
			'image_1' => '产品详细图1',
			'image_2' => '产品详细图2',
			'image_3' => '产品详细图3',
			'image_4' => '产品详细图4',
			'hot' => '购买次数',
			'click' => '点击量',
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
		$criteria->compare('texture',$this->texture,true);
		$criteria->compare('volume',$this->volume,true);
		$criteria->compare('people',$this->people,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('introduce',$this->introduce,true);
		$criteria->compare('introduce_image',$this->introduce_image,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('shows',$this->shows);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('heft',$this->heft);
		$criteria->compare('recomment',$this->recomment);
		$criteria->compare('image_1',$this->image_1,true);
		$criteria->compare('image_2',$this->image_2,true);
		$criteria->compare('image_3',$this->image_3,true);
		$criteria->compare('image_4',$this->image_4,true);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('click',$this->click,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}