<?php

/**
 * This is the model class for table "functions".
 *
 * The followings are the available columns in table 'functions':
 * @property integer $func_id
 * @property string $func_name
 * @property string $func_url
 * @property integer $is_menu
 * @property string $func_dir
 * @property integer $parent_func_id
 * @property integer $status
 * @property integer $sort
 * @property string $creation_date
 * @property string $created_by
 * @property string $change_date
 * @property string $changed_by
 */
class Functions extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Functions the static model class
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
		return 'functions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_menu, parent_func_id, status, sort', 'numerical', 'integerOnly'=>true),
			array('func_name, func_dir, created_by, changed_by', 'length', 'max'=>50),
			array('func_url', 'length', 'max'=>100),
			array('creation_date, change_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('func_id, func_name, func_url, is_menu, func_dir, parent_func_id, status, sort, creation_date, created_by, change_date, changed_by', 'safe', 'on'=>'search'),
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
			'func_id' => '菜单ID',
			'func_name' => '菜单名称',
			'func_url' => '菜单URL',
			'is_menu' => '是否是分组菜单',
			'parent_func_id' => '上一级组菜单',
			'status' => '状态',
			'sort' => '排序',
			'creation_date' => '创建时间',
			'created_by' => '创建人',
			'change_date' => '修改时间',
			'changed_by' => '修改人',
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

		$criteria->compare('func_id',$this->func_id);
		$criteria->compare('func_name',$this->func_name,true);
		$criteria->compare('func_url',$this->func_url,true);
		$criteria->compare('is_menu',$this->is_menu);
		$criteria->compare('func_dir',$this->func_dir,true);
		$criteria->compare('parent_func_id',$this->parent_func_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('change_date',$this->change_date,true);
		$criteria->compare('changed_by',$this->changed_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}