<?php

class GO_Customfields_Html_Field extends GO_Base_Html_Input {

	public static function render($attributes,$echo=true) {
		
		if(!empty($attributes['model']))
			$attributes['model']=$attributes['model']->getCustomfieldsRecord();
		
		$i = new self($attributes);
		if($echo)
			echo $i->getHtml();
		else
			return $i->getHtml();
	}
	
	protected function init() {
		if(!empty($this->attributes['model'])){
				// Set the model properties
				$cfModel = $this->attributes['model'];
			
				$columns = $cfModel->getColumns();
				$column= $columns[$this->attributes['name']];
				
				switch($column['customfield']->datatype){
					case 'GO_Customfields_Customfieldtype_Checkbox':
						$this->attributes['type']='checkbox';
						$this->attributes['class'].=' checkbox';
					break;
				
					case 'GO_Customfields_Customfieldtype_Select':
						$this->attributes['type']='select';
						$this->attributes['class'].=' select';
						
						$options = $column['customfield']->selectOptions;
						while($option = $options->fetch())
							$this->attributes['options'][$option->text] = $option->text;
					break;
					
					default:
						$this->attributes['type']='text';
						$this->attributes['class'].=' text';
					break;
				}
		}
	}
}