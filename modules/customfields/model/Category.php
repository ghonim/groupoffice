<?php
/**
 * Group-Office
 * 
 * Copyright Intermesh BV. 
 * This file is part of Group-Office. You should have received a copy of the
 * Group-Office license along with Group-Office. See the file /LICENSE.TXT
 *
 * If you have questions write an e-mail to info@intermesh.nl
 * 
 * @license AGPL/Proprietary http://www.group-office.com/LICENSE.TXT
 * @link http://www.group-office.com
 * @package GO.modules.customfields.model
 * @version $Id: example.php 7607 20120101Z <<USERNAME>> $
 * @copyright Copyright Intermesh BV.
 * @author <<FIRST_NAME>> <<LAST_NAME>> <<EMAIL>>@intermesh.nl
 */
 
/**
 * The GO_Customfields_Model_Category model
 *
 * @package GO.modules.customfields.model
 * @property int $sort_index
 * @property string $name
 * @property int $acl_id
 * @property string $extends_model
 * @property int $id
 */

class GO_Customfields_Model_Category extends GO_Base_Db_ActiveRecord{
	/**
	 * Returns a static model of itself
	 * 
	 * @param String $className
	 * @return GO_Customfields_Model_Category 
	 */
	public static function model($className=__CLASS__)
	{	
		return parent::model($className);
	}
	
	public function aclField() {	
		return 'acl_id';
	}
	
	public function tableName() {
		return 'cf_categories';
	}
	
	public function relations() {
		return array(
				'fields' => array('type' => self::HAS_MANY, 'model' => 'GO_Customfields_Model_Field', 'field' => 'category_id', 'delete' => true, 'findParams'=>  GO_Base_Db_FindParams::newInstance()->order('sort_index'))		);
	}
	
	
	public function customfieldsTableName(){
		
		
		$model = GO::getModel($this->extends_model);
		
		return 'cf_'.$model->tableName();
	}
	
	
	public function findByModel($modelName, $permissionLevel=  GO_Base_Model_Acl::READ_PERMISSION){
		return GO_Customfields_Model_Category::model()->find(
                    GO_Base_Db_FindParams::newInstance()												
												->permissionLevel($permissionLevel)
                        ->criteria(GO_Base_Db_FindCriteria::newInstance()->addCondition('extends_model', $modelName))
                        ->order('sort_index')
		);
	}
	
	/**
	 * Find or create a category
	 * 
	 * @param string $extendsModel
	 * @param string $categoryName
	 * @return \GO_Customfields_Model_Category 
	 */
	public function createIfNotExists($extendsModel, $categoryName){
		$category = GO_Customfields_Model_Category::model()->findSingleByAttributes(array('extends_model'=>$extendsModel, 'name'=>$categoryName));
		
		if(!$category){
			$category = new GO_Customfields_Model_Category();
			$category->extends_model=$extendsModel;
			$category->name=$categoryName;
			$category->save();
		}	
		
		return $category;
	}
	
	
	protected function beforeSave() {
		if($this->isNew)
			$this->sort_index=$this->count();		
		
		return parent::beforeSave();
	}
}